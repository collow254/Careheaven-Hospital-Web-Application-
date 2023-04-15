<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    
  </head>
  <body class="admin-bg">
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
        @include('labtech.sidebar')
        <!-- partial:partials/_navbar.html -->
    @include('labtech.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

          <div align="center" style="padding-top: 20px">
            @if(session()->has('message'))

          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"></button>

            {{session()->get('message')}}
            
          </div>
          @endif

          <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">PATIENTS</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th >Id</th>
                          <th >Name</th>
                          <th >Age</th>
                          <th >Gender</th>
                          <th >County</th>
                          <th >Image</th>

                          


                          
                          
                        </tr>

                        @foreach($data as $patient)
                        <tr align="center" >
                          <td>{{$patient->id}}</td>
                          <td>{{$patient->name}}</td>
                          <td>{{$patient->age}}</td>
                          <td>{{$patient->gender}}</td>
                          <td>{{$patient->county}}</td>
                          <td><img height="100" width="100" src="patientimage/{{$patient->image}}"></td>
                          
                          <td><a class="btn btn-primary" href="{{url('individualpatient', $patient->id)}}">View Tests</a>
                         
                          
                        </tr>
                        @endforeach
                      </table>
            </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
    <!-- End custom js for this page -->
  </body>
</html>



