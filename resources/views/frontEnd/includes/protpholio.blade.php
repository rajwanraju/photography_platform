 <!-- Team -->
  <section class="team py-lg-5 py-3" id="team">
    <div class="container">
      <div class="inner-sec-w3ls-agileits py-lg-5 py-3">
        <div class="row team_grids">
             <div class="col-lg-4 header-info mt-5">
            <h3 class="heading ">Our Recent Albums{{$count}}</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Nunc Nam vel feugiat</p>
                    @if($count > 6)
            <a href="{{url('published/albums')}}" class="btn btn-sm animated-button gibson-three mt-3">View More</a>
                  @endif
          </div>

          <div class="col-lg-8 team-con-info">
            <div class="row tm-in">
             
                @foreach($albums as $album)
            <div class="col-md-4 col-sm-4 col-xs-4 team_grid">
                <div class="view view-second">
                  <a href="{{url('/album/'.$album->id)}}"><img src="{{asset($album->cover_image)}}" alt=" " class="img-fluid" /></a>
                </div>
                <h4 class="mt-4">{{$album->title}}</h4>
                <p class="my-2">{{$album->updated_at}}</p>
              </div>
              @endforeach  
            </div>
          </div>
       
        </div>

        
  
      </div>
    </div>
  </section>
  <!-- //Team -->