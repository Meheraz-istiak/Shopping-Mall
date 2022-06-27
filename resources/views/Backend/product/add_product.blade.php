@extends('Backend.dashboard.home')

@section('main')

<div class="container">
	  <h2 style="color:red;">
        Add Product
    </h2>
   <div class="row">
	<div class="col-md-12 ">
            <div class="card">
                <div class="card-header">

                    
                    

                </div>
                <form method="POST" enctype="multipart/form-data"  action="{{route('product.store')}}">
                @csrf

                <div class="card-body ">
                
                	<div class="row">
              
                    <div class="form-group col-md-4">
                           <div class="form-group " >
                              <label class="form-label" >Category
                                      <span class="text-danger">*</span>
                              </label>
                                    <select name="category_id" id="category_id" class="col-md-12" style="padding: 10px; border-radius: 3px; border-color: var(--border-color); border-color:#c0b1b1;">
                                        <option value="">Select Category</option>
                                             @foreach($category as $list)
                                                  <option value="{{$list->id}}">
                                        
                                            {{isset($list->id)? $list->category_name: ''}} </option>

                                          @endforeach
                                          </select>
                                  </div>
                         </div>

                     <div class="form-group col-md-4">
                     	  <div class="form-group " >
                              <label class="form-label" >subCategory
                                      <span class="text-danger">*</span>
                              </label>
                                    <select name="subcategory_id" id="subcategory_id" class="col-md-12" style="padding: 10px; border-radius: 3px; border-color: var(--border-color); border-color:#c0b1b1;">
                                        <option value="">Select Subcategory</option>
                                             @foreach($subcategory as $list)
                                                  <option value="{{$list->id}}">
                                        
                                            {{isset($list->id)? $list->subcategory_name: ''}} </option>

                                          @endforeach
                                          </select>
                                  </div>
                       
                    </div>

                     <div class="form-group col-md-4">

                        <label  class="form-label" for="color">Product Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" data-role="tagsinput"aria-describedby="emailHelp" placeholder="Enter the Category Name" name="">
                    </div>


                     <div class="form-group col-md-4">
                     	  <label class="form-label" >color
                                      <span class="text-danger">*</span>
                              </label>
                                    <select name="color_id" id="color_id" class="col-md-12" style="padding: 10px; border-radius: 3px; border-color: var(--border-color); border-color:#c0b1b1;">
                                        <option value="">Select color</option>
                                             @foreach($color as $list)
                                                  <option value="{{$list->id}}">
                                        
                                            {{isset($list->id)? $list->color_name: ''}} </option>

                                          @endforeach
                                    </select>
                        
                    </div>
                     <div class="form-group col-md-4">

                         <label class="form-label" >size
                                      <span class="text-danger">*</span>
                              </label>
                                    <select name="size_id" id="size_id" class="col-md-12" style="padding: 10px; border-radius: 3px; border-color: var(--border-color); border-color:#c0b1b1;">
                                        <option value="">Select size</option>
                                             @foreach($size as $list)
                                                  <option value="{{$list->id}}">
                                        
                                            {{isset($list->id)? $list->size_name: ''}} </option>

                                          @endforeach
                                    </select>
                    </div>


                     <div class="form-group col-md-4">
                       
                        <label class="form-label" >Brand
                                      <span class="text-danger">*</span>
                              </label>
                                    <select name="brand_id" id="brand_id" class="col-md-12" style="padding: 10px; border-radius: 3px; border-color: var(--border-color); border-color:#c0b1b1;">
                                        <option value="">Select Brand</option>
                                             @foreach($brand as $list)
                                                  <option value="{{$list->id}}">
                                        
                                            {{isset($list->id)? $list->brand_name: ''}} </option>

                                          @endforeach
                                    </select>
                    </div>
                      <div class="form-group col-md-4">
                        <label class="form-label" >Unit
                                      <span class="text-danger">*</span>
                              </label>
                                    <select name="unit_id" id="unit_id" class="col-md-12" style="padding: 10px; border-radius: 3px; border-color: var(--border-color); border-color:#c0b1b1;">
                                        <option value="">Select Unit</option>
                                             @foreach($unit as $list)
                                                  <option value="{{$list->id}}">
                                        
                                            {{isset($list->id)? $list->unit_name: ''}} </option>

                                          @endforeach
                                    </select>
                    </div>

                     <div class="form-group col-md-4">
                        <label for="color" class="form-label">price</label>
                        <input type="text" class="form-control" id="product_price" name="product_price" data-role="tagsinput"aria-describedby="emailHelp" placeholder="Enter the Category Name" name="">
                    </div>

                       <div class="form-group col-md-4">
                        <label for="color" class="form-label">code</label>
                        <input type="text" class="form-control" id="product_code" name="product_code" data-role="tagsinput"aria-describedby="emailHelp" placeholder="Enter the Category Name" name="">
                    </div>

                        <div class="form-group col-md-4">
                        <label for="color" class="form-label">Product image</label>
                        <input type="file" class="form-control" id="product_image" name="product_image" data-role="tagsinput"aria-describedby="emailHelp" placeholder="Enter the Category Name" name="">
                    </div>


                        <div class="form-group col-md-4">
                        <label for="color" class="form-label ">Description</label>
                        <textarea class="form-control" type="text" name="description" id="description"></textarea>
                    </div>



                        <div class="form-group col-md-4">
                                <label for="status" class="form-label">Status</label>

                                <select id="status" class="custom-select" name="status">
                                    <option value="">--select--</option>
                                    <option value="1">Open</option>
                                    <option value="0">Close</option>
                                </select>
                              
                       </div>

                            </div>

                    
                    <button type="submit" id="add"class="btn btn-primary" >add</button>
                    

                </div>
            </form>

            </div>
            
        </div>
	</div>

</div>


<div style="padding: 30px;"></div>
<div class="container">
    <h2 style="color:red;">
        Add product
    </h2>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" >
                    ALL product
                    
                </div>
                <div class="card-body">
                    <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th scope="col">#Sl</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">color</th>
                                <th scope="col">brand</th>
                                <th scope="col">subcategory</th>
                                <th scope="col">category</th>
                                <th scope="col">size</th>
                                <th scope="col">unit</th>
                                <th scope="col">image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                             <tbody>
                                    @foreach($data as $key=>$value)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$value->product_name}}</td>
                                        <td>{{$value->color_name}}</td>
                                        <td>{{$value->brand_name}}</td>
                                        <td>{{$value->subcategory_name}}</td>
                                        <td>{{$value->category_name}}</td>
                                        <td>{{$value->size_name}}</td>
                                        <td>{{$value->unit_name}}</td>

                                         <td> <img height="50px" width="40px" src="{{asset('image/product/' . $value->product_image)}}" alt="not found"></td>
                                        <td>{{$value->status== 1 ? 'open':'close'}}</td>

                                       
                                        <td>
                                            <a href="{{route('product.edit',$value->id)}}" class="icofont-edit" > <i class=""></i></a>||

                                            <a href="{{route('product.destroy',$value->id)}}" class="btn btn-danger btn-xs" > <i class="icofont-delete-alt"></i></a>

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

$('#addB').show();
$('#updateB').hide();

$('#add').show();
$('#update').hide();

// ============== start show data============
$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
})



 // ============== end show data============

  // ============== start clear data============
 function cleardata()
 {

  $('#category_id').val(' ');
  $('#subcategory_id').val(' ');
  $('#product_name').val(' ');
  $('#color_id').val(' ');
  $('#size_id').val(' ');
  $('#brand_id').val(' ');
  $('#unit_id').val(' ');
  $('#product_price').val(' ');
  $('#product_image').val(' ');
  $('#description').val(' ');
  $('#status').val(' ');


 }

 // ============== end clear data============


 // ==============  starty insart data============

  function adddata()
 {

  var category_id=  $('#category_id').val();
  var subcategory_id=  $('#subcategory_id').val();
  var product_name=  $('#product_name').val();
  var color_id=  $('#color_id').val();
  var size_id=  $('#size_id').val();
  var brand_id=  $('#brand_id').val();
  var unit_id=  $('#unit_id').val();
  var product_price=  $('#product_price').val();
  var product_image=  $('#product_image').val();
  var description=  $('#description').val();
  var status =   $('#status').val();

 $.ajax({
   type:"POST",
   dataType:"json",
   data:{category_id:category_id,
   	subcategory_id:subcategory_id,
   	product_name:product_name,
   	color_id:color_id,
   	size_id:size_id,
   	brand_id:brand_id,
   	unit_id:unit_id,
   	product_price:product_price,
   	product_image:product_image,
   	description:description,
   	status:status},
    url:"{{route('product.store')}}",
    success:function(data)
    {
        cleardata();

        datatable();
        // start alert
       const msg = Swal.mixin({
                  toast:'true',
                  position: 'top',
                  icon: 'success',
                  showConfirmButton: false,
                  timer: 1500
                })

         msg.fire({
                  
                  type: 'success',
                  title: 'Data has been saved',
                 
                })


        
    },


 })



 }

 // ============== end insart data============


  // ==============  starty edit data============


  function edit(id)
  {
   $.ajax({
    type:"GET",
   dataType:"json",
   url:"/color-edit/"+id,
   success:function(data) 
   {
    $('#addB').hide();
    $('#updateB').show();

    $('#add').hide();
    $('#update').show();
    $('#id').val(data.id);
    $('#color_name').val(data.color_name);
    $('#status').val(data.status);

    // console.log(data);
   }
   })
    
  }

  function update(id)
  {
  var id =  $('#id').val();
  var color_name =  $('#color_name').val();
 var status =   $('#status').val();

  $.ajax({
   type:"PUT",
   dataType:"json",
   data:{color_name:color_name,status:status},
    url:"/color-update/"+id,
    success:function(data)
    { 
    $('#addB').show();
    $('#updateB').hide();

    $('#add').show();
    $('#update').hide();
        cleardata();

        datatable();

       // start alert
       const msg = Swal.mixin({
                  toast:'true',
                  position: 'top',
                  icon: 'success',
                  showConfirmButton: false,
                  timer: 1500
                })

         msg.fire({
                  
                  type: 'success',
                  title: 'Data update success',
                 
                })


    },

  })


  }


  function deletedata(id)

  {

    $.ajax({
       type:"GET",
       dataType:"json",
       url:"/color-destroy/"+id,
       success:function(data)
       {

    $('#addB').show();
    $('#updateB').hide();

    $('#add').show();
    $('#update').hide();
       cleardata();

     datatable();

    const msg = Swal.mixin({
                  toast:'true',
                  position: 'top',
                  icon: 'success',
                  showConfirmButton: false,
                  timer: 1500
                })

         msg.fire({
                  
                  type: 'success',
                  title: 'Data delete success',
                 
                })
    }


    });
    


  }
   

</script>


@endsection