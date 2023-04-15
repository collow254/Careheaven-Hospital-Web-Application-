

<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
      label{
        display: inline-block;
        width: 200px;

      }

    </style>
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
         <div class="container-fluid page-body-wrapper">



          <div class="container" align="center" style="padding-top: 5px">

            @if(session()->has('message'))

          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"></button>

            {{session()->get('message')}}
            
          </div>



          @endif

            <form action="{{url('upload_post')}}" method="POST" enctype="multipart/form-data">

              @csrf

              <div style="padding: 15px">
                <label>Category</label>
                <select name="category" style="color: black; width: 220px" required="">
                  <option>---SELECT---</option>
                  <option value="cardiologist">Cardiologist</option>
                  <option value="general health">General health</option>
                  <option value="Serologist">Serologist</option>
                  <option value="Dentist">Dentist</option>
                  <option value="Optician">Optician</option>
                  
                </select>
              </div>

              <div style="padding: 15px">
                <label>Title</label>
                <input type="text" style="color: black" name="title" placeholder="Title" required="">
              </div>

              <div style="padding: 15px">
                <label>Brief Description</label>

                <textarea style="color: black" name="briefdescription" placeholder="Brief Description" required=""></textarea>
                
              </div>

              

              <div style="padding: 15px">
                <label>Content</label>
                <textarea style="color: black" name="content" placeholder="Content" required=""></textarea>
               
              </div>

              <div style="padding: 15px">
                <label>Post Image</label>
                <input type="file" name="file" required="">
              </div>

              <div style="padding: 15px">
                <label>Author</label>
                <input type="text" style="color: black" name="author" placeholder="Author" required="">
              </div>

              <div style="padding: 15px">
                <input type="submit" class="btn btn-success" value="submit">
              </div>




            </form>

          </div>
         </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
    <!-- End custom js for this page -->
  </div>
  </body>
</html>