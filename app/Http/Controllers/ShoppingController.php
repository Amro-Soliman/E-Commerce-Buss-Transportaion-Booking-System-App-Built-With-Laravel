<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Line;
use Cart;

class ShoppingController extends Controller
{
    //
    public function add_to_cart(){

        $line = Line::find(request()->line_id);

        $cart = Cart::add([
            'id' => $line->id,
            'name' => $line->line_name,
            'qty' => request()->qty,
            'price' => request()->price,
            'weight' => request()->weight



        ]);
        return redirect()->route('cart');
        }

    public function cart(Request $request){

       if( $request->user()->authorizeRoles(['employee', 'manager'])){  
        $cartContent = Cart::content();

        return view('cart')->with('cartContent' , $cartContent);

       }else {
           return redirect()->route('login');
       }
  
       
    }


    public function cart_incr($id, $qty) {

        Cart::update($id , $qty + 1);
        return redirect()->back();
    }
    
    public function cart_decr($id, $qty) {

        Cart::update($id , $qty - 1);
        return redirect()->back();
    }
}
