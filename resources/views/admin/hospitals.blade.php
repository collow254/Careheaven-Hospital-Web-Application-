<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    
  </head>
  <body class="admin-bg">
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial:partials/_navbar.html -->
    @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

          <div align="center" style="padding-top: 20px">

            <a class="btn btn-primary" href="{{url('add_hospital')}}">Add Hospital</a>
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
                    <h4 class="card-title">Hospitals</h4>
                    <div class="table-responsive">
                      <table class="table-bordered">
                        <tr>
                          <th >Id</th>
                          <th >Name</th>
                           <th>Location</th>
                          <th >Landmark</th>
                         
                          <th >Doctor in Charge</th>
                          <th >Mobile</th>
                          <th >Email</th>
                          <th >Operating hours</th>
                          <th >Specialist Services</th>
                          <th >Delete</th>
                          <th >Update</th>


                          
                          
                        </tr>

                        @foreach($data as $hospital)
                        <tr align="center" >
                          <td>{{$hospital->id}}</td>
                          <td>{{$hospital->name}}</td>
                          <td>{{$hospital->location}}</td>
                          <td>{{$hospital->landmark}}</td>
                          <td>{{$hospital->doctor_in_charge}}</td>
                          <td>{{$hospital->phone}}</td>
                          <td>{{$hospital->email}}</td>
                          

                          <td>
                            <ol>
                              <li>Weekdays: {{$hospital->operating_hours_weekdays}}</li>
                              <li>Weekends: {{$hospital->operating_hours_weekend}}</li>
                            </ol>
                          </td>
                          <td>{{$hospital->specialist_services}}</td>
                          <td><a onclick="return confirm('Are you sure you want to delete {{$hospital->name}}\'s data?')" class="btn btn-danger" href="{{url('deletehospital',$hospital->id)}}">Delete</a></td>
                          <td><a class="btn btn-primary" href="{{url('updatehospital', $hospital->id)}}">Update</a></td>
                          
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



