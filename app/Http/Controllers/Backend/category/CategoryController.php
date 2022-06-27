<?php

namespace App\Http\Controllers\Backend\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('Backend.category.add_category');
    }

  

    public function datatable()
    {

    $data =Category::all();
    return response()->json($data);


    }

    public function store( Request $request)
    {

        

        $data =Category::insert([

            'category_name'=>$request->category_name,

            'status'=>$request->status,



        ]);

        return response()->json($data);
    }


    public function edit($id)
    {
          $data = Category::findOrFail($id);

          return response()->json($data);

    }


    public function update(Request $request,$id)
    {


         $data = Category::findOrFail($id)->update([

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
