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
                    <h4 class="card-title">USERS</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th >User Id</th>
                          <th >Name</th>
                          <th >Email</th>
                          <th >Mobile</th>
                          <th >Address</th>
                          <th >User Type</th>
                          <th >Created at</th>
                          <th >Verified at</th>
                         


                          
                          
                        </tr>

                        @foreach($data as $users)
                        <tr>
                          <td>{{$users->id}}</td>
                          <td>{{$users->name}}</td>
                          <td>{{$users->email}}</td>
                          <td>{{$users->phone}}</td>
                          <td>{{$users->address}}</td>
                          <td>{{$users->usertype}}</td>
                          <td>{{$users->created_at}}</td>
                          <td>{{$users->email_verified_at}}</td>
                          
                          
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



