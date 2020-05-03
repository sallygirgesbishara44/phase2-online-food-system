<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function order()
    {
        return view('order');
    }

    public function addToOrder($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $order = session()->get('order');

        // if order is empty then this the first product
        if(!$order) {

            $order = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo
                    ]
            ];

            session()->put('order', $order);

            return redirect()->back()->with('success', 'Product added to order successfully!');
        }

        // if order not empty then check if this product exist then increment quantity
        if(isset($order[$id])) {

            $order[$id]['quantity']++;

            session()->put('order', $order);

            return redirect()->back()->with('success', 'Product added to order successfully!');

        }

        // if item not exist in order then add to order with quantity = 1
        $order[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];

        session()->put('order', $order);

        return redirect()->back()->with('success', 'Product added to order successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $order = session()->get('order');

            $order[$request->id]["quantity"] = $request->quantity;

            session()->put('order', $order);

            session()->flash('success', 'Order updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $order = session()->get('order');

            if(isset($order[$request->id])) {

                unset($order[$request->id]);

                session()->put('order', $order);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
}