

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



          <div class="container" align="center" style="padding-top: 5px">


            @if(session()->has('message'))

          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"></button>

            {{session()->get('message')}}
            
          </div>



          @endif

            <form action="{{url('uploadhospital')}}" method="POST" enctype="multipart/form-data">

              @csrf

    

              <div style="padding: 15px">
                <label>Name</label>
                <input type="text" style="color: black" name="name" placeholder="Name" required="">
              </div>

              <div style="padding: 15px">
                <label>Landmark</label>
                <input type="text" style="color: black" name="landmark" placeholder="Landmark" required="">
              </div>

              <div style="padding: 15px">
                <label>Doctor in Charge</label>
                <input type="text" style="color: black" name="doctor_in_charge" placeholder="Doctor in Charge" required="">
              </div>

              <div style="padding: 15px">
                <label>Location</label>
                <input type="text" style="color: black" name="location" placeholder="Location" required="">
              </div>

              <div style="padding: 15px">
                <label>Mobile</label>
                <input type="number" style="color: black" name="number" placeholder="Mobile Number" required="">
              </div>

              <div style="padding: 15px">
                <label>Email</label>
                <input type="email" style="color: black" name="email" placeholder="Email Address" required="">
              </div>


              <div style="padding: 15px">
                <label>Operating Hours Weekdays</label>
                <input type="text" style="color: black" name="operating_hours_weekdays" placeholder="Operating Hours Weekdays" required="">
              </div>

              <div style="padding: 15px">
                <label>Operating Hours Weekends</label>
                <input type="text" style="color: black" name="operating_hours_weekend" placeholder="Operating Hours Weekends" required="">
              </div>

              <div style="padding: 15px">
                <label>Specialist Services</label>
                <input type="text" style="color: black" name="specialist_services" placeholder="Specialist Services" required="">
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