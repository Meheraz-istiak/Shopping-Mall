<?php

namespace App\Http\Controllers\Backend\color;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;

class Colorcontroller extends Controller
{
     public function index()
    {
        return view('Backend.color.add_color');
    }

  

     public function datatable()
    {

    $data =Color::all();
    return response()->json($data);


    }

    public function store( Request $request)
    {

        

        $data =Color::insert([

            'color_name'=>$request->color_name,

            'status'=>$request->status,


        ]);

        return response()->json($data);
    }


    public function edit($id)
    {
          $data = Color::findOrFail($id);

          return response()->json($data);

    }


    public function update(Request $request,$id)
    {


         $data = Color::findOrFail($id)->update([

            'color_name'=>$request->color_name,

            'status'=>$request->status,



        ]);

        return response()->json($data);


    }





     public function destroy($id)
     {

      $data=Color::findOrFail($id)->delete(); 

       return response()->json( $data);

    }

}
