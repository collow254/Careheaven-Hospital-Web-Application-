<!DOCTYPE html>
<html lang="en">
  <head>
  	 <style type="text/css">
      label{
        display: inline-block;
        width: 200px;

      }

    </style>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.css')
    
  </head>
  <body class="admin-bg">
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      	@include('admin.sidebar')
        <!-- partial:partials/_navbar.html -->
		@include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" >
        	 

        	<div style="padding-top: 100px">
        		@if(session()->has('message'))

          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"></button>

            {{session()->get('message')}}
            
          </div>



          @endif

         	 <form action="{{url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">

              @csrf

              <div style="padding: 15px">
                <label>Doctor Name</label>
                <input type="text" style="color: black" name="name" value="{{$data->name}}">
              </div>

              <div style="padding: 15px">
                <label>Phone Number</label>
                <input type="number" style="color: black" name="number" value="{{$data->phone}}">
              </div>

              <div style="padding: 15px">
                <label>Speciality</label>
                <select name="speciality" style="color: black;">
                  <option>{{$data->speciality}}</option>
                  <option value="cardiologist">Cardiologist</option>
                  <option value="general health">General health</option>
                  <option value="Serologist">Serologist</option>
                  <option value="Dentist">Dentist</option>
                  <option value="Optician">Optician</option>
                  
                </select>
              </div>

              <div style="padding: 15px">
                <label>Room</label>
                <input type="text" style="color: black" name="room" value="{{$data->room}}">
              </div>

              <div style="padding: 15px">
                <label>Old Image</label>
                <img height="150" width="150" src="doctorimage/{{$data->image}}">
              </div>

              <div style="padding: 15px">
              	<label>Change Image</label>
              	<input type="file" name="file">
              </div>

              <div style="padding: 15px">
                <input type="submit" class="btn btn-primary" value="Update">
              </div>




            </form>
            </div>
         	
         </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
    <!-- End custom js for this page -->
  </body>
</html>