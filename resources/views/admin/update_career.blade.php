

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
  <body>
    <div class="admin-bg">
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial:partials/_navbar.html -->
    @include('admin.navbar')
        <!-- partial -->
         <div class="container-fluid page-body-wrapper">



          <div class="container" align="center" style="padding-top: 100px">

            @if(session()->has('message'))

          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"></button>

            {{session()->get('message')}}
            
          </div>



          @endif

            <form action="{{url('editcareer', $data->id)}}" method="POST" enctype="multipart/form-data" class="form-bg">

              @csrf

              <div style="padding: 15px">
                <label>Title</label>
                <input type="text" style="color: black" name="title" placeholder="Title" required="" value="{{$data->title}}">
              </div>

              <div style="padding: 15px">
                <label>Location</label>
                <select name="location" style="color: black; width: 220px" required="">
                  <option>{{$data->location}}</option>
                  <option value="cardiologist">Cardiologist</option>
                  <option value="general health">General health</option>
                  <option value="Serologist">Serologist</option>
                  <option value="Dentist">Dentist</option>
                  <option value="Optician">Optician</option>
                  
                </select>
              </div>

              <div style="padding: 15px">
                <label>Qualifications</label>
                <input type="text" style="color: black" name="qualifications" placeholder="Qualifications" required="" value="{{$data->qualifications}}">
              </div>

              <div style="padding: 15px">
                <label>Email</label>
                <input type="email" style="color: black" name="email" placeholder="Email" required="" value="{{$data->email}}">
              </div>

              <div style="padding: 15px">
                <label>Due Date</label>
                <input type="date" style="color: black" name="due_date" placeholder="Due Date" required="" value="{{$data->due_date}}">
              </div>

               <div style="padding: 15px">
                <label>Old Image</label>
                <img height="150" width="150" src="careerimage/{{$data->image}}">
              </div>

              <div style="padding: 15px">
                <label>Change Image</label>
                <input type="file" name="file">
              </div>


              

              <div style="padding: 15px">
                <input type="submit" class="btn btn-success" value="submit">
              </div>




            </form>

          </div>
         </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
    <!-- End custom js for this page -->
  </div>
  </body>
</html>