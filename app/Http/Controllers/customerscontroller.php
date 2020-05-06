<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class customerscontroller extends Controller
{
    public function register(){
        return view('register');
    }

    public function store(Request $request){
        $request->validate([ 
                'firstname'=>'required',
                'lastname'=>'required',
                'adress'=>'required|min:4',
                'email'=>'required|email',
                'username'=>'required|unique:customers,user_name',
                'password'=>'required|min:5',

                
            ]);
       $customer = new customer();
       $customer->first_name = $request->firstname ;
       $customer->last_name = $request->lastname ;
       $customer->user_name = $request->username ;
       $customer->address = $request->adress ;
       $customer->e_mail = $request->email ;
       $customer->password = $request->password ;
       
       $customer->save();
       return redirect('/register/submit')->with('status','you are successfully registered !');
    }
}
