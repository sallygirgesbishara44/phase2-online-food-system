<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DeliveryBoy;
use App\kitchenStaff;

class StaffController extends Controller
{
    public function addStaff(){
        return view('addKitchenstaff');
    }

    public function store(Request $request){
        $request->validate([

                'username'=>'required|unique:Kitchen_staff,user_name',
                'password'=>'required|min:5',


            ]);
       $KitchenStaff = new KitchenStaff();

       $KitchenStaff->user_name = $request->username ;

       $KitchenStaff->password = $request->password ;

       $KitchenStaff->save();
       return redirect('/addKS')->with('status','Staff is successfully Added !');
    }
    public function addDelevStaff(){
        return view('addDeliveryBoy');
    }
    public function store2(Request $request){
        $request->validate([

                'username'=>'required|unique:Delivery_Boys,user_name',
                'password'=>'required|min:5',
'workshift' => 'required'

            ]);
       $DeliveryBoy = new DeliveryBoy();

       $DeliveryBoy->user_name = $request->username ;

       $DeliveryBoy->password = $request->password ;
       $DeliveryBoy->work_shift = $request->workshift ;
       $DeliveryBoy->save();
       return redirect('/addDB')->with('status','Staff is successfully Added !');
    }
    public function remove()
    {
      $staff=kitchenStaff::all()->toArray();

      return view('remove',compact('staff'));
    }
  public  function delete(Request $req)
    {
     $staff=kitchenStaff::find($req->id);
      $staff->delete();
      return redirect('/KSlist')->with('success','Staff is successfully Deleted !');

    }
}
