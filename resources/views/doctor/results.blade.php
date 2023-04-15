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
                    <h4 class="card-title">Results</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th >Result Id</th>
                          <th>Doctor Id</th>
                          <th >Patient Id</th>
                          <th >Result</th>
                          <th >Date</th>
                          <th >Medicine status</th>
                        </tr>

                        @foreach($data as $results)
                        <tr align="center" >
                          <td>{{$results->id}}</td>
                          <td>{{$results->doctorId}}</td>
                          <td>{{$results->patientId}}</td>
                          <td>{{$results->result}}</td>
                          <td>{{$results->created_at}}</td>
                          <td>{{$results->medicine}}</td>
                          <td><a class="btn btn-primary" href="{{url('patienttests', $results->id)}}">Administer Medicine</a></td>
                          
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



