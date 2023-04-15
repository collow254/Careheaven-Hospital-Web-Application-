

 <div class="page-section ">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
     
      <div class="row mt-5">
         @foreach($post as $posts)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="">{{$posts->Category}}</a>
              </div>
              <a href="{{url('postdetails', $posts->id)}}" class="post-thumb">
                <img src="postimage/{{$posts->image}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{url('postdetails', $posts->id)}}">{{$posts->title}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_1.jpg" alt="">
                  </div>
                  <span>{{$posts->author}}</span>
                </div>
                <span class="mai-time"></span> {{$posts->created_at}}
              </div>
            </div>
          </div>
        </div>
         @endforeach
        
        

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{url('posts')}}" class="btn btn-primary" style="background-color: blue; color: white">Read More</a>
        </div>

      </div>
     
    </div>
  </div> <!-- .page-section -->