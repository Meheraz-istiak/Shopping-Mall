<?php

namespace App\Http\Controllers\Backend\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;

use App\Models\Color;

use App\Models\Product;
use App\Models\Size;
use App\Models\Subcategory;
use App\Models\Unit;

use DB;
use carbon\carbon;

class Productcontroller extends Controller
{
    public function index()
    {

        $category = Category::all();
        $brand = Brand::all();
        $color = Color::all();
        $size = Size::all();
        $subcategory = Subcategory::all();
        $unit = Unit::all();
        $data =DB::select("SELECT p.*,c.category_name ,s.subcategory_name,b.brand_name,co.color_name,si.size_name,u.unit_name from products p
                            left join categories c on c.id = p.category_id
                            left join subcategories s on s.id = p.subcategory_id
                            left join brands b on b.id = p.brand_id
                            left join colors co on co.id = p.color_id
                            left join sizes si on si.id = p.size_id
                            left join units u on u.id = p.unit_id");


        

        return view('Backend.product.add_product',compact('category','brand','color','size','subcategory','unit','data'));
    }

  

    public function datatable()
    {

    $data =DB::select("SELECT p.*,c.category_name ,s.subcategory_name,b.brand_name,co.color_name,si.size_name,u.unit_name from products p
                            left join categories c on c.id = p.category_id
                            left join subcategories s on s.id = p.subcategory_id
                            left join brands b on b.id = p.brand_id
                            left join colors co on co.id = p.color_id
                            left join sizes si on si.id = p.size_id
                            left join units u on u.id = p.unit_id");

    return response()->json($data);


    }

    public function store( Request $request)
    {
        // dd($request);
           $data = new product;

            $data->category_id= $request->category_id;
            $data->subcategory_id= $request->subcategory_id;
            $data->brand_id= $request->brand_id;
            $data->color_id= $request->color_id;
            $data->size_id= $request->size_id;
            $data->unit_id= $request->unit_id;
            $data->product_name= $request->product_name;
            $data->product_price= $request->product_price;
            $data->product_code= $request->product_code;
            $data->description= $request->description;
            $data->status= $request->status;
            $date = Carbon::now()->format('his')+rand(1000,9999);

        if($product_image = $request->file('product_image'))
        {
            $extention = $request->file('product_image')->getClientOriginalExtension();
            $imageName = $date.'.'.$extention;
            $path = public_path('image/product');
            $product_image->move($path,$imageName);
            $data->product_image = $imageName;
         }  
        else
        {
            $data->product_image = "null";
        }

        $data->save();
        return redirect()->back();

      

        
    }


    public function edit($id)
    {
          $data = Category::findOrFail($id);

          return response()->json($data);

    }


    public function update(Request $request,$id)
    {


         $data = Category::findOrFail($id)->update
         ([

            'category_name'=>$request->category_name,

            'status'=>$request->status,



        ]);

        return response()->json($data);


    }





     public function destroy($id)
     {

      $data=Category::findOrFail($id)->delete(); 

     return response()->json($data);

    }


  



}
