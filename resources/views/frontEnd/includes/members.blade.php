 <!-- Team -->
  <section class="team py-lg-5 py-3" id="team">
    <div class="container">
      <div class="inner-sec-w3ls-agileits py-lg-5 py-3">
        <div class="row team_grids">
          <div class="col-lg-8 team-con-info">
            <div class="row tm-in">
             
                @foreach($photographers as $photographer)
            <div class="col-md-6 col-sm-6 col-xs-6 team_grid">
                <div class="view view-second">
                  <img src="{{asset($photographer->image)}}" alt=" " class="img-fluid" />
                </div>
                <h4 class="mt-4">{{$photographer->name}}</h4>
                <p class="my-2">Photographer</p>
                <ul class="social_list1 text-center mb-4">

                  <li>
                    <a href="{{$photographer->facebookId}}" class="facebook1 ">
                      <i class="fab fa-facebook-f"></i>

                    </a>
                  </li>
                  <li>
                    <a href="{{$photographer->instagramId}}" class="twitter2 mx-2">
                      <i class="fab fa-twitter"></i>

                    </a>
                  </li>
                  <li>
                    <a href="#" class="dribble3">
                      <i class="fab fa-dribbble"></i>
                    </a>
                  </li>

                </ul>
              </div>
              @endforeach  
            </div>
          </div>
          <div class="col-lg-4 header-info mt-5">
            <h3 class="heading ">Our Team</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Nunc Nam vel feugiat</p>
            <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm animated-button gibson-three mt-3">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //Team -->