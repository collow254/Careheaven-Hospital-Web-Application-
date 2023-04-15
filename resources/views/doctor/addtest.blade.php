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



          <div class="container" align="center" style="padding-top: 10px">

            @if(session()->has('message'))

          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"></button>

            {{session()->get('message')}}
            
          </div>
            @endif

            <form class="main-form" action="{{url('uploadtest')}}" method="POST">

        @csrf
        <div class="row mt-5 ">
          
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="patient" id="departement" class="custom-select">

              <option>---select patient---</option>

              @foreach($patient as $patients)

              <option value="{{$patients->id}}">{{$patients->id}}---{{$patients->name}}       </option>

              @endforeach
              
            </select>
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <select name="visit" id="departement" class="custom-select">

              <option>---select Visit---</option>

              @foreach($visits as $visit)

              <option value="{{$visit->id}}"> {{$visit->id}}---{{$visit->created_at}}      </option>

              @endforeach
              
            </select>
          </div>

           <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <select name="visit" id="departement" class="custom-select">

              <option>---select Test---</option>

              @foreach($tests as $test)

              <option value="{{$test->test}}"> {{$test->id}}---{{$test->test}}      </option>

              @endforeach
              
            </select>
          </div>

          

          

          
          
                  </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn " style="background-color: blue">Add Test</button>
      </form>




        </div>
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
    <!-- End custom js for this page -->

  </div>
  </body>
</html>



