<?php

namespace App\Http\Controllers\Backend\banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use DB;
use carbon\carbon;

class BannerController extends Controller
{
      public function index()
    {
     $data =Banner::all();
    return view('Backend.banner.add_banner',compact('data'));
    }




  public function store(Request $request)
     {

   // dd($request);

      

           $data = new Banner;

            $data->span_title= $request->span_title;
            $data->h1_title= $request->h1_title;
            $data->p_title= $request->p_title;
            $data->status= $request->status;


        $date1 = Carbon::now()->format('his')+rand(1000,9999);

        if($banner_image = $request->file('banner_image'))
        {
            $extention = $request->file('banner_image')->getClientOriginalExtension();
            $imageName = $date1.'.'.$extention;
            $path = public_path('image/Banner');
            $banner_image->move($path,$imageName);
            $data->banner_image = $imageName;
         }  
        else
        {
            $data->banner_image = "null";
        }


        if($data->save())
         { 

            return redirect()->back()->with('success','category information successfully saved');
        }





     }


     public function edit($id)
    {


          $data1 = Banner::findOrFail($id);

         return view('Backend.banner.edit',compact('data1'));
    }


    public function update(Request $request,$id)
    {


            $data = Banner::findOrFail($id); 

            $data->span_title= $request->span_title;
            $data->h1_title= $request->h1_title;
            $data->p_title= $request->p_title;
            $data->status= $request->status;


            $date1 = Carbon::now()->format('his')+rand(1000,9999);

        if($banner_image = $request->file('banner_image'))
        {
            $extention = $request->file('banner_image')->getClientOriginalExtension();
            $imageName = $date1.'.'.$extention;
            $path = public_path('image/Banner');
            $banner_image->move($path,$imageName);
            $data->banner_image = $imageName;
         }  
        else
        {
            $data->banner_image = "null";
        }


        if($data->update())
         { 

            return redirect()->back()->with('success','category information successfully saved');
        }


    }





     public function destroy($id)
     {

     $data = Banner::findOrFail($id);

            
        
        if($data)
        {
            if( file_exists('image/Banner/'.$data->banner_image) AND !empty($data->banner_image))
            {
                unlink('image/Banner/'.$data->banner_image);
            }
            $data->delete();
            return redirect()->back()->with('success','subCategory information successfully deleted.');
        }
        
         else
        {
            return redirect()->back()->with('error','Something Error Found !, Please try again.');
        }

    }


}
