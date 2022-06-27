@extends('Backend.dashboard.home')

@section('main')

<div style="padding: 30px;"></div>
<div class="container">
    <h2 style="color:red;">
        Add Unit
    </h2>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" >
                    ALL Unit
                    
                </div>
                <div class="card-body">
                    <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th scope="col">#Sl</th>
                                <th scope="col">Unit Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                         
                        </tbody>
                        
                    </table>
                    
                </div>
                
            </div>
            
        </div>

        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    
                    <span id="addB">Add Unit</span>
                    <span id="updateB">update Unit</span>

                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="Category">Unit</label>
                        <input type="text" class="form-control" id="unit_name" aria-describedby="emailHelp" placeholder="Enter the Category Name" name="">
                    </div>
                        <div class="form-group col-md-6">
                                <label for="status">Status</label>

                                <select id="status" class="custom-select" name="status">
                                    <option value="">--select--</option>
                                    <option value="1">Open</option>
                                    <option value="0">Close</option>
                                </select>
                              
                            </div>

                    <input type="hidden" id="id">
                    <button type="submit" id="add"class="btn btn-primary" onclick="adddata()">add</button>
                    <button type="submit" id="update"class="btn btn-primary" onclick="update()">update</button>
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

function datatable() {
   $.ajax({
    type:"GET",
    dataType:"json",
    url:"{{route('unit.datatable')}}",
    success:function(response)

    {
     
        // console.log(response);


          var data = "";
           $.each(response, function(key,value)
           {
            var cat = (value.status==1)?'open': 'close';
              


             data = data +"<tr>"
             data = data +"<td>"+value.id+"</td>"
             data = data +"<td>"+value.unit_name+"</td>"
             data = data +"<td>"+cat+"</td>"
             data = data +"<td>"
             data=data +"<button class='btn btn-sm btn-primary mr-2' onclick='edit("+value.id+")'>Edit</button>"
             data=data +"<button class='btn btn-sm btn-danger' onclick='deletedata("+value.id+")'>delete</button>"
             data = data + "</td>"
             data = data +"</tr>"
           
         })

            $('tbody').html(data);
          

    }
   })


}
 datatable();

 // ============== end show data============

  // ============== start clear data============
 function cleardata()
 {

  $('#unit_name').val(' ');
  $('#status').val(' ');


 }

 // ============== end clear data============


 // ==============  starty insart data============

  function adddata()
 {

  var unit_name=  $('#unit_name').val();
  var status =   $('#status').val();

 $.ajax({
   type:"POST",
   dataType:"json",
   data:{unit_name:unit_name,status:status},
    url:"{{route('unit.store')}}",
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
   url:"/unit-edit/"+id,
   success:function(data) 
   {
    $('#addB').hide();
    $('#updateB').show();

    $('#add').hide();
    $('#update').show();
    $('#id').val(data.id);
    $('#unit_name').val(data.unit_name);
    $('#status').val(data.status);

    // console.log(data);
   }
   })
    
  }

  function update(id)
  {
  var id =  $('#id').val();
  var unit_name =  $('#unit_name').val();
 var status =   $('#status').val();

  $.ajax({
   type:"PUT",
   dataType:"json",
   data:{unit_name:unit_name,status:status},
    url:"/unit-update/"+id,
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
       url:"/unit-destroy/"+id,
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