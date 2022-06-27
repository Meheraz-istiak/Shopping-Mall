@extends('Backend.dashboard.home')

@section('main')

<div class="container">
<div class="row" style="margin-top:50px ;">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white"> Add Banner </div>
            <div class="card-body">
                <form  action="{{ route('banner.update',$data1->id)}}" method="post" enctype="multipart/form-data" id="form" 
                  >

                             
                     @csrf
                    <div class="form-group">
                        <label for="">span title</label>
                        <input type="text" 
                        name="span_title" 
                        id="span_title" 
                        class="form-control"
                        value="{{isset($data1->span_title)? $data1->span_title: ''}}"
                        >
                        <span class="text-danger error-text span_title_error "></span>
                    </div>

                    <div class="form-group">
                        <label for="">H1 title</label>
                        <input type="text"
                         name="h1_title" 
                         id="h1_title" 
                         class="form-control"
                         value="{{isset($data1->h1_title)? $data1->h1_title: ''}}"
                         >
                        <span class="text-danger error-text h1_title_error "></span>
                    </div>

                    <div class="form-group">
                        <label for="">p title</label>
                        <input type="text" 
                        name="p_title" 
                        id="p_title" 
                        class="form-control"
                        value="{{isset($data1->p_title)? $data1->p_title: ''}}"
                        >
                        <span class="text-danger error-text p_title_error "></span>

                    </div>

                    <div class="form-group">
                        <label for="">Banner Image</label>
                        <input type="file" name="banner_image" id="banner_image" class="form-control"
                        value="{{isset($data1->banner_image)? $data1->banner_image: ''}}"
                        >
                        <span class="text-danger error-text banner_image_error "></span>

                    </div>
                     <div class="form-group col-md-1">
                       <img style="width: 80px; height: 70px" src="{{asset('image/Banner/'.$data1->banner_image)}}">
                    </div>

                    <div class="form-group">
                                <label for="status">Status</label>

                                <select name="status" id="" class="form-control">
                            <option value="">--select--</option>
                            <option {{ $data1->status == 1 ? 'selected' : ''  }} value="1">Open</option>
                            <option {{ $data1->status == 0 ? 'selected' : ''  }} value="0">Close</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
                
            </div>
            
        </div>
        
    </div>

    @endsection