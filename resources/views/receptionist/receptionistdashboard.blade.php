
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    
  </head>
  <body class="admin-bg">
    <div class="container-scroller">
    <!-- Required meta tags -->
    @include('receptionist.css')
    
  </head>
  <body>
   
      
      <!-- partial:partials/_sidebar.html -->
      	@include('receptionist.sidebar')
        <!-- partial:partials/_navbar.html -->
		@include('receptionist.navbar')
        <!-- partial -->
        @include('receptionist.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('receptionist.scripts')
    <!-- End custom js for this page -->
  </body>
</html>