<?php

namespace App\Http\Controllers\Backend\subcategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use DB;

class SubCategoryController extends Controller
{
     public function index()
    {
        $category= category::all();
        // dd($category);
        return view('Backend.subcategory.subcategory',compact('category'));
    }


        public function store( Request $request)
    {

        

        $data =Subcategory::insert([

            'category_id'=>$request->category_id,
            'subcategory_name'=>$request->subcategory_name,

            'status'=>$request->status,

        ]);


       
       

      return response()->json($data);
    }


      public function datatable()
    {

    $data =DB::select("SELECT s.*,c.category_name from subcategories s
                            left join categories c on c.id = s.category_id");

    return response()->json($data);


    }

    public function edit($id)
    {
          $data = Subcategory::findOrFail($id);

          return response()->json($data);

    }


    public function update(Request $request,$id)
    {


         $data = Subcategory::findOrFail($id)->update([

            'category_id'=>$request->category_id,
            'subcategory_name'=>$request->subcategory_name,

            'status'=>$request->status,



        ]);

        return response()->json($data);


    }



      public function destroy($id)
     {

      $data=Subcategory::findOrFail($id)->delete(); 

     return response()->json($data);

    }

}
