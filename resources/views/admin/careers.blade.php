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

            <a class="btn btn-primary" href="{{url('add_career')}}">Add Career</a>
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
                      <table class="table">
                        <tr>
                          <th >Id</th>
                          <th >Title</th>
                          <th>Location</th>
                          <th >Qualifications</th>
                          <th >Email</th>
                          <th >Due Date</th>
                          <th >Status</th>
                          


                          
                          
                        </tr>

                        @foreach($data as $career)
                        <tr align="center" >
                          <td>{{$career->id}}</td>
                          <td>{{$career->title}}</td>
                          <td>{{$career->location}}</td>
                          <td>{{$career->qualifications}}</td>
                          <td>{{$career->email}}</td>
                          <td>{{$career->due_date}}</td>
                          <td>{{$career->status}}</td>
                          
                          
                          <td>	
                          	<a class="btn btn-primary" href="{{url('update_career', $career->id)}}">Update</a>
                          	<a class="btn btn-success" href="{{url('opencareer', $career->id)}}">Open</a>
                          	<a onclick="return confirm('Are you sure you want to close application?')" class="btn btn-danger" href="{{url('closecareer',$career->id)}}">Close</a>
                          	<a onclick="return confirm('Are you sure you want to delete {{$career->name}}\'s data?')" class="btn btn-danger" href="{{url('deletecareer',$career->id)}}">Delete</a>
                          </td>
                          
                          
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



