<?php

namespace App\Http\Controllers\Backend\brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
     public function index()
    {
        return view('Backend.brand.add_brand');
    }

     public function datatable()
    {

    $data =Brand::all();
    return response()->json($data);


    }

    public function store( Request $request)
    {
     
        

        $data =Brand::insert([
        }





            'brand_name'=>$request->brand_name,

            'status'=>$request->status,


        ]);

        return response()->json($data);
    }


    public function edit($id)
    {
          $data = Brand::findOrFail($id);

          return response()->json($data);

    }


    public function update(Request $request,$id)
    {


         $data = Brand::findOrFail($id)->update([

            'brand_name'=>$request->brand_name,

            'status'=>$request->status,



        ]);

        return response()->json($data);


    }





     public function destroy($id)
     {

      $data=Brand::findOrFail($id)->delete(); 

       return response()->json( $data);

    }
}
