<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     <base href="/public">
    @include('admin.css')
    
  </head>
  <body class="admin-bg">
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
        @include('doctor.sidebar')
        <!-- partial:partials/_navbar.html -->
    @include('doctor.navbar')
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
                    <h4 class="card-title">TESTS</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th >Visit Id</th>
                          <th>Visit Date and Time</th>
                          <th >DoctorId</th>
                        </tr>

                        @foreach($data as $visits)
                        <tr align="center" >
                          <td>{{$visits->id}}</td>
                          <td>{{$visits->created_at}}</td>
                          <td>{{$visits->doctorId}}</td>
                          <td><a class="btn btn-primary" href="{{url('patienthistory', $visits->id)}}">View More</a></td>  
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



