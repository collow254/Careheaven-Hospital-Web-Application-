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
                    <h4 class="card-title">PATIENTS</h4>
                    <div class="table-responsive">
                      <table class="table" style="background-color: white; border-radius: 50px">
                          <h1>MY APPOINTMENTS</h1>
                            <thead>
                              <tr>
                                <th >Appointment Id</th>
                              <th >Patient Name</th>
                              <th >Date</th>
                              <th >Message</th>
                              <th >Status</th>
                              

                            </tr>
                        </thead>
                         <tbody>
                                                  
                                                  
                        @foreach($appoint as $appoints)
                            <tr>
                              <td >{{$appoints->id}}</td>
                              <td >{{$appoints->name}}</td>
                              <td>{{$appoints->date}}</td>
                              <td>{{$appoints->message}}</td>
                              <td>{{$appoints->status}}</td>
                              <td><a class="btn btn-primary" href="{{url('approved', $appoints->id)}}">Approve</a></td>
                              <td ><a class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel this appointment?')" href="{{url('cancel_appoint', $appoints->id)}}"> Cancel</a>
                              </td>
                            </tr>
                          </tbody>
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










