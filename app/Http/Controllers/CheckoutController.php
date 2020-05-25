<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //Gerer le paiement
    public function checkout(){
        return view('checkout');
    }

    //En cas de paiemetn réuissi
    public function success(){
        if(!session()->has('success')){
            return redirect()->route('home');
        }
        Cart::destroy();
        session()->forget('coupon');
        return view('success');
    }
}
