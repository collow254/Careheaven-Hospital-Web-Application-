<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
                    <h4 class="card-title">APPOINTMENTS</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th >Id</th>
                          <th >Patient Name</th>
                          <th >Mobile</th>
                          <th >doctor</th>
                          <th >Disease</th>
                          <th >Image</th>
                          <th >Delete</th>
                          <th >Update</th>


                          
                          
                        </tr>

                        @foreach($data as $doctor)
                        <tr align="center" >
                          <td>{{$doctor->id}}</td>
                          <td>{{$doctor->name}}</td>
                          <td>{{$doctor->phone}}</td>
                          <td>{{$doctor->speciality}}</td>
                          <td>{{$doctor->room}}</td>
                          <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>
                          <td><a onclick="return confirm('Are you sure you want to delete {{$doctor->name}}\'s data?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                          <td><a class="btn btn-primary" href="{{url('updatedoctor', $doctor->id)}}">Update</a></td>
                          
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



