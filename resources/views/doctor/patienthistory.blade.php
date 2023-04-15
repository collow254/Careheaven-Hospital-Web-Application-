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
                    	@include('doctor.sidebar')
                      <!-- partial:partials/_navbar.html -->
              		@include('doctor.navbar')
                      <!-- partial -->
                      <div class="container-fluid page-body-wrapper" >

                     		<div class="main-panel" >            
                         <div class="row">
                            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                              <div class="card" style="background-color: skyblue">
                                <div class="card-body">
                                  <div class="d-flex flex-row justify-content-between">
                                    <h4 class="card-title">Tests</h4>
                                  </div>
                                  <div class="preview-list">
                                    @foreach($data as $tests)
                                    <div class="preview-item border-bottom">
                                        <h6 class="preview-subject">{{$tests->id}}...........</h6>
                                        <h6 class="preview-subject">{{$tests->test}}</h6>
                                      <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                            <h6 class="preview-subject"></h6>
                                            
                                          </div>
                                          <p class="text-muted"></p>
                                        </div>
                                      </div>
                                    </div>
                                    @endforeach             
                                  </div>
                                </div>
                              </div>
                            </div>

                             <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                              <div class="card" style="background-color: skyblue">
                                <div class="card-body">
                                  <div class="d-flex flex-row justify-content-between">
                                    <h4 class="card-title">Results</h4>
                                  </div>
                                  <div class="preview-list">
                                    @foreach($resultdata as $results)
                                    <div class="preview-item border-bottom">
                                        <h6 class="preview-subject">{{$results->id}}...........</h6>
                                        <h6 class="preview-subject">{{$results->result}}</h6>
                                      <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                            <h6 class="preview-subject"></h6>
                                            
                                          </div>
                                          <p class="text-muted"></p>
                                        </div>
                                      </div>
                                    </div>
                                    @endforeach
                                    
                                   
                                    
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                              <div class="card" style="background-color: skyblue">
                                <div class="card-body">
                                  <div class="d-flex flex-row justify-content-between">
                                    <h4 class="card-title">Medicine</h4>
                                  </div>
                                  <div class="preview-list">
                                    @foreach($medicine as $medicines)
                                    <div class="preview-item border-bottom">
                                        <h6 class="preview-subject">{{$medicines->id}}...........</h6>
                                        <h6 class="preview-subject">{{$medicines->medicine}}</h6>
                                      <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                            <h6 class="preview-subject"></h6>
                                            
                                          </div>
                                          <p class="text-muted"></p>
                                        </div>
                                      </div>
                                    </div>
                                    @endforeach
                                    
                                   
                                    
                                  </div>
                                </div>
                              </div>
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