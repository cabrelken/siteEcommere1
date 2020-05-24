<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
   
    public function index(){
       // dd(Cart::content());
        return view('cart');
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');

        return redirect()->route('cart.index')->with('success', 'Le produit a bien été ajouté à votre panier!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success', 'Le produit a bien été supprimé du panier!');
    }

    public function reset(){
    
        Cart::destroy();
    }

    public function save($id){
    
        $item = Cart::get($id);
        Cart::remove($id);

        Cart::instance('save')->add($item->id, $item->name, 1, $item->price)->associate('App\Product');
        
        return redirect()->route('cart.index')->with('success','Produits sauvegardés pour plus tard!');
    }
}
