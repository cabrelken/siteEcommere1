<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Controllers\Controller;

class HomeController extends controller {

    public function home(){
        $products = Product::inRandomOrder()->take(8)->get();
      
        return view('home', [
            'products' => $products
        ]);
    }

    public function contact(){
        return view('contact');
    }

  

    public function cart(){
        return view('cart');
    }
    
    public function checkout(){
        return view('checkout');
    }

    public function success(){
        return view('success');
    }

    public function orders(){
        return view('orders');
    }
}