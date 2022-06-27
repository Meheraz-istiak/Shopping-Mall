@extends('Backend.dashboard.home')

@section('main')

<div class="container">
<div class="row" style="margin-top:50px ;">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white"> Add Banner </div>
            <div class="card-body">
                <form action="{{ route('banner.store')}}" method="post" enctype="multipart/form-data" id="form" 
                  >


                     @csrf
                    <div class="form-group">
                        <label for="">span title</label>
                        <input type="text" 
                        name="span_title" 
                        id="span_title" 
                        class="form-control"
                        
                        >
                        <span class="text-danger error-text span_title_error "></span>
                    </div>

                    <div class="form-group">
                        <label for="">H1 title</label>
                        <input type="text"
                         name="h1_title" 
                         id="h1_title" 
                         class="form-control"
                         
                         >
                        <span class="text-danger error-text h1_title_error "></span>
                    </div>

                    <div class="form-group">
                        <label for="">p title</label>
                        <input type="text" 
                        name="p_title" 
                        id="p_title" 
                        class="form-control"
                       
                        >
                        <span class="text-danger error-text p_title_error "></span>

                    </div>

                    <div class="form-group">
                        <label for="">Banner Image</label>
                        <input type="file" name="banner_image" id="banner_image" class="form-control">
                        <span class="text-danger error-text banner_image_error "></span>

                    </div>

                    <div class="form-group">
                                <label for="status">Status</label>

                                <select id="" class="custom-select" name="status">
                                    <option value="">--select--</option>
                                    <option value="1">Open</option>
                                    <option value="0">Close</option>
                                </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
                
            </div>
            
        </div>
        
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-primary text-white">Datatable </div>
            <div class="card-body">

                   <table id="myProjectTable" class="table table-hover "
                                   style="width:100%">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>span_title</th>
                                    <th>h1_title</th>
                                    <th>p_title</th>
                                    <th>Banner image</th>

                                    <th>status</th>
                                    <th>Action</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key=>$value)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$value->span_title}}</td>
                                        <td>{{$value->h1_title}}</td>
                                        <td>{{$value->p_title}}</td>
                                         <td> <img height="50px" width="40px" src="{{asset('image/Banner/' . $value->banner_image)}}" alt="not found"></td>
                                        <td>{{$value->status== 1 ? 'open':'close'}}</td>

                                       
                                        <td>
                                            <a href="{{route('banner.edit',$value->id)}}" class="icofont-edit" > <i class=""></i></a>||

                                            <a href="{{route('banner.destroy',$value->id)}}" class="btn btn-danger btn-xs" > <i class="icofont-delete-alt"></i></a>

                                        </td>
                                    </tr>

                                    @endforeach


                                </tbody>
                            </table>
                
            </div>
            
        </div>
        
    </div>
    
</div> 

</div>

@endsection

@section('script')
<script>
// $(function()
// {

//         $('#form').on('submit', function(e){
//              e.preventDefault();
             
//              var form =this;
//              $.ajax({

//                 url:$(form).attr('action'),
//                 method:$(form).attr('method'),
//                 data:new FormData(form),
//                 processData:false,
//                 dataType:'json',
//                 contentType:false,
//                 beforeSend:function(){
//                     $(form).find('span.error-text').text('');

//                 },
//                 success:function(data){
//                     if(data.code ==0){
//                         $.each(data.error,function(prefix,val)
//                         {
//                           $(form).find('span.'+prefix+'_error').text(val[0]);

                            
//                         });


//                     }else{
//                         $(form)[0].reset();
//                             alert('Data has been seved ');

//                     }

//                 }
//              });
  
//         });

       
    
//     })

</script>   

@endsection