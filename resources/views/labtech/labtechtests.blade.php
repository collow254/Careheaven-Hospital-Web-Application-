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
        @include('labtech.sidebar')
        <!-- partial:partials/_navbar.html -->
    @include('labtech.navbar')
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
                    <h4 class="card-title">TESTS</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th >Test Id</th>
                          <th>Doctor Id</th>
                          <th >Patient Id</th>
                          <th >Test</th>
                          <th >Date</th>
                        </tr>

                        @foreach($data as $tests)
                        <tr align="center" >
                          <td>{{$tests->id}}</td>
                          <td>{{$tests->doctorId}}</td>
                          <td>{{$tests->patientId}}</td>
                          <td>{{$tests->test}}</td>
                          <td>{{$tests->created_at}}</td>
                          <td><a class="btn btn-primary" href="{{url('addresults', $tests->id)}}">Add Results</a></td>  
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



