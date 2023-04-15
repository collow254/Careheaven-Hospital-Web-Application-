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
    <base href="/public">
    @include('admin.css')
    
  </head>
  <body>
  	<div class="admin-bg">

    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      	@include('labtech.sidebar')
        <!-- partial:partials/_navbar.html -->
		@include('labtech.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" >
       		<div class="main-panel" >
          
            
            
            
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                	<a href="{{url('mypatients')}}">
                  <div class="card-body">
                    <h5>Patients</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">47</h2>
                          
                        </div>
                        
                      </div>
                      
                    </div>
                  </div>
                  </a>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                	<a href="{{url('tests')}}">
                  <div class="card-body">
                    <h5>Tests</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">47</h2>
                          
                        </div>
                        
                      </div>
                      
                    </div>
                  </div>
              </a>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                	<a href="{{url('results')}}">
                  <div class="card-body">
                    <h5>Results</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">47</h2>
                          
                        </div>
                        
                      </div>
                      
                    </div>
                  </div>
              </a>
                </div>
              </div>
            </div>






            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                	<a href="{{url('patients')}}">
                  <div class="card-body">
                    <h5>Referrals</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">47</h2>
                          
                        </div>
                        
                      </div>
                      
                    </div>
                  </div>
              </a>
                </div>
              </div>
              
              





            





            
            
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
        	


</div>
        	 

        	
         	 
         
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
    <!-- End custom js for this page -->

  </body>
</html>