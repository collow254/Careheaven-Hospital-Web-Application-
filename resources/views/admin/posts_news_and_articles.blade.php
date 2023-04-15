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
            <a class="btn btn-primary" href="{{url('add_post')}}">Add Post</a>
            
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
                    <h4 class="card-title">POSTS</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th >Id</th>
                          <th >Category</th>
                          <th >Brief description</th>
                          <th >Image</th>
                          <th >Author</th>
                          <th>Status</th>
                          <th align="center">Action</th>
                          
                          
                          


                          
                          
                        </tr>

                        @foreach($data as $posts)
                        <tr>
                          <td>{{$posts->id}}</td>
                          <td>{{$posts->Category}}</td>
                          <td>{{$posts->briefdescription}}</td>
                          <td><img height="100" width="100" src="postimage/{{$posts->image}}"></td>
                          <td>{{$posts->author}}</td>
                          <td>{{$posts->status}}</td>
                          <td><a class="btn btn-primary" href="{{url('individualpost', $posts->id)}}">View</a>
                          <a class="btn btn-success" href="{{url('publish', $posts->id)}}" onclick="return confirm('Are you sure you want to publish this post?')">Publish</a>
                          <a class="btn btn-danger" href="{{url('decline', $posts->id)}}" onclick="return confirm('Are you sure you want to decline this post?')">Decline</a>
                          <a class="btn btn-danger" href="{{url('deletepost', $posts->id)}}" onclick="return confirm('Are you sure you want to delete this post?')">Delete</a></td>
                          
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



