 <div class="page-section bg-light">
    <div class="container">
      <div align="center">
      <h1 class="text-center wow fadeInUp">We Are Hiring</h1>
     
      <div class="row mt-5">
        @foreach($career as $careers)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="">{{$careers->title}}</a>
              </div>
              <a href="" class="post-thumb">
                <img src="careerimage/{{$careers->image}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="">{{$careers->title}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  
                  <span>Location: {{$careers->location}}<br>
                  <span>Qualifications: {{$careers->qualifications}}<br></span>
                  Due Date: {{$careers->due_date}}
                  </div>
                  <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{url('career')}}" class="btn btn-primary">Apply</a>
        </div>
              </div>
            </div>
          </div>
        </div>
        
         @endforeach
        
        

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{url('career')}}" class="btn btn-primary">More Careers</a>
        </div>

        

      </div>
     
    </div>
  </div> <!-- .page-section -->
        
         
        

       

      </div>
     </div>
    </div>
  </div> <!-- .page-section -->
  </div>
