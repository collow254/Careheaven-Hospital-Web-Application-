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

          <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>{{$data->title}}</h1>
            <p class="text-grey mb-4">{{$data->content}}</p>
            <p>Author: {{$data->author}}</p>
            <p>Posted at: {{$data->created_at}}</p>
            <a href="{{url('publish', $data->id)}}" onclick="return confirm('Are you sure you want to publish this post?')" class="btn btn-primary">Post</a>
            
             <a class="btn btn-danger" href="{{url('decline', $data->id)}}" onclick="return confirm('Are you sure you want to decline this post?')">Decline</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">

                <img  src="postimage/{{$data->image}}" alt="">
              
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
          
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
    <!-- End custom js for this page -->
  </body>
</html>


























  


