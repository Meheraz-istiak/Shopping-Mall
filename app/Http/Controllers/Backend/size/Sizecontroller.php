<?php

namespace App\Http\Controllers\Backend\size;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Size;

class Sizecontroller extends Controller
{
     public function index()
    {
        return view('Backend.size.add_size');
    }

     public function datatable()
    {

    $data =Size::all();
    return response()->json($data);


    }

    public function store( Request $request)
    {

        

        $data =Size::insert([

            'size_name'=>$request->size_name,

            'status'=>$request->status,


        ]);

        return response()->json($data);
    }


    public function edit($id)
    {
          $data = Size::findOrFail($id);

          return response()->json($data);

    }


    public function update(Request $request,$id)
    {


         $data = Size::findOrFail($id)->update([

            'size_name'=>$request->size_name,

            'status'=>$request->status,



        ]);

        return response()->json($data);


    }





     public function destroy($id)
     {

      $data=Size::findOrFail($id)->delete(); 

       return response()->json( $data);

    }
}
