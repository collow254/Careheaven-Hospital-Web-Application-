

<!DOCTYPE html>
<html lang="en">
  <head>
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
        <div class="container-fluid page-body-wrapper" >

        	<div align="center" style="padding-top:100px;">
                <h1>ALL APPOINTMENTS</h1>

                <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">APPOINTMENTS</h4>
                    <div class="table-responsive">
                      <table class="table-bordered">
                        <thead>
                          <tr>
                            
                            <th> Customer Name </th>
                            <th> Email </th>
                            <th> Phone Number </th>
                            <th> Doctor Name </th>
                            <th> Date </th>
                            <th> Message </th>
                            <th> Status </th>
                            <th> Approve </th>
                            <th> Cancel </th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          
                          
                          @foreach($data as $appoint)
                          <tr>
                            
                            
                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->message}}</td>
                        <td>{{$appoint->status}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('approved', $appoint->id)}}">Approve</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('cancelled', $appoint->id)}}">Cancel</a>
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
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
    <!-- End custom js for this page -->
</div>
    </div>
</div>
</div>
  </body>
</html>