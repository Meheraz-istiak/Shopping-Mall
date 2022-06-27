<?php

namespace App\Http\Controllers\Backend\cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Banner;



// use Cart;

class CartController extends Controller
{
    public  function add_to_cart(Request $request,$id)

    {    
        
        $check=Cart::where('product_id',$id)->where('user_ip',request()->ip())->first();
        if ($check) 
        {
          Cart::where('product_id',$id)->where('user_ip',request()->ip())->increment('quantity');
          return redirect()->back();

         }else

         {
            Cart::insert([
               'product_id' =>$id,

               'product_name' =>$request->product_name,
               'product_price' =>$request->product_price,
               'quantity' =>$request->quantity,
              
               'product_image' => $request->product_image, 
                'user_ip' => request()->ip(), 
                      

                  ]);

         }
        
        return redirect()->back();

    }




    public function add_to_cartpage()
    {
        
    $carts=Cart::where('user_ip',request()->ip())->latest()->get();
    // dd($carts);
    
      $subtotal=Cart::all()->where('user_ip',request()->ip())->sum(function($t)
                        {
                           return $t->product_price * $t->quantity;
                        });


    return view('Frontend.cart.card_page',compact('carts','subtotal'));


    }

    public function destroy($id)
    {
      Cart::where('id',$id)->where('user_ip',request()->ip())->delete();
      return redirect()->back()->with('card remove');
    }

    public function update(Request $request,$id)

    {

      
        Cart::where('id',$id)->where('user_ip',request()->ip())->update([

            'quantity'=>$request->quantity,

        ]);
      return redirect()->back();

    }





}
