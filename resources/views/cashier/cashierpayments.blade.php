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
        @include('cashier.sidebar')
        <!-- partial:partials/_navbar.html -->
    @include('cashier.navbar')
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
                          <th >Bill Id</th>
                          <th>Patient Id</th>
                          <th >Visit Id</th>
                          <th >Consultation Fee</th>
                          <th>Lab Fee</th>
                          <th >Medicine Fee</th>
                          <th >Payment Status</th>
                          <th >Last Updated at</th>
                        </tr>

                        @foreach($data as $bills)
                        <tr align="center" >
                          <td>{{$bills->id}}</td>
                          <td>{{$bills->patientId}}</td>
                          <td>{{$bills->visitId}}</td>
                          <td>{{$bills->consultationfee}}</td>
                          <td>{{$bills->labfee}}</td>
                          <td>{{$bills->medicinefee}}</td>
                          <td>{{$bills->paymentstatus}}</td>
                          <td>{{$bills->updated_at}}</td>

                          <td><a class="btn btn-primary" href="{{url('individualpatient', $bills->id)}}">Innitiate Payment</a></td>  
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



