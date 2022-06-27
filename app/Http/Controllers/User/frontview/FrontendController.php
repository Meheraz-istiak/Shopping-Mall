<?php

namespace App\Http\Controllers\User\frontview;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Banner;
use App\Models\product;
use App\Models\Cart;



class FrontendController extends Controller
{
 public function index()
 {
     $category= category::all();
     $subcategory= Subcategory::all();
     $banner= Banner::all();
     $product=product::where('status',1)->latest()->limit(12)->get();
     // dd($product);
    return view('frontmaster',compact('category','subcategory','banner','product'));
 }


   public function product_view($id)
     {
    

     $category= category::all();
     $subcategory= Subcategory::all();
     $banner= Banner::all();
     $product=product::findOrFail($id);
     // dd($product);
    return view('frontend.product_details.product_details',compact('category','subcategory','banner','product'));
      

    }
}
