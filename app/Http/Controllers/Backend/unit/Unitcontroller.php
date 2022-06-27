<?php

namespace App\Http\Controllers\Backend\unit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;

class Unitcontroller extends Controller
{
     public function index()
    {
        return view('Backend.unit.add_unit');
    }

     public function datatable()
    {

    $data =Unit::all();
    return response()->json($data);


    }

    public function store( Request $request)
    {

        

        $data =Unit::insert([

            'unit_name'=>$request->unit_name,

            'status'=>$request->status,


        ]);

        return response()->json($data);
    }


    public function edit($id)
    {
          $data = Unit::findOrFail($id);

          return response()->json($data);

    }


    public function update(Request $request,$id)
    {


         $data = Unit::findOrFail($id)->update([

            'unit_name'=>$request->unit_name,

            'status'=>$request->status,



        ]);

        return response()->json($data);


    }





     public function destroy($id)
     {

      $data=Unit::findOrFail($id)->delete(); 

       return response()->json( $data);

    }
}
