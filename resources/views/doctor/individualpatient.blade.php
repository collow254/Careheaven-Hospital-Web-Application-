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
                      <table class="table">
                        <tr>
                          <th >Id</th>
                          <th >Name</th>
                          <th >Age</th>
                          <th >Gender</th>
                          <th >County</th>
                          <th >Image</th>

                          


                          
                          
                        </tr>

                                                <tr align="center" >
                          <td>{{$data->id}}</td>
                          <td>{{$data->name}}</td>
                          <td>{{$data->age}}</td>
                          <td>{{$data->gender}}</td>
                          <td>{{$data->county}}</td>
                          
                         
                          
                        </tr>
                        
                      </table>
            </div>
                  </div>
                </div>
              </div>
            </div>











          <div class="page-section pb-0">
      <div class="container">
          <div class="col-lg-6 py-3 wow fadeInLeft">
            
            <a class="btn btn-primary" href="{{url('patienthistory', $data->id)}}">View History</a>
            <a class="btn btn-success" href="{{url('decline', $data->id)}}" >Enter Symptoms</a>
            <a class="btn btn-primary" href="{{url('publish', $data->id)}}">Add tests</a><br><br>
            



						








          
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">

                <img  src="patientimage/{{$data->image}}" alt="">
              
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


























  


