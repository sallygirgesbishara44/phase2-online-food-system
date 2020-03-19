<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing;

class BillingController extends Controller
{
    function savePayment(Request $req){
    //   print_r ($req->input());
       $payment = new Billing;
       $payment -> address1 =$req -> input('address1');
       $payment -> address2 = $req -> input('address2');
       $payment -> paymentMethod = $req -> input('paymentMethod') ;
       $payment -> save();
    }
}
