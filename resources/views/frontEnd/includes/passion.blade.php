  <section class="gallery py-lg-5 py-3" id="gallery">
    <div class="container-fluid">
      <div class="inner-sec-w3ls-agileits p-lg-5 p-3">
        <div class="gallery_grids row">
          <div class="col-lg-9 gal-content">
            <ul class="clearfix demo">
              @foreach($images as $image)
              <li>
                <div class="gallery-grid1">
                  <img src="{{asset($image->image)}}" alt=" " class="img-fluid" />
                  <div class="p-mask">
                    <h4>{{$image->title}}</h4>
                  </div>
                </div>
              </li>
        @endforeach
            </ul>
          </div>

           <div class="col-lg-3 header-info mt-5">
            <h3 class="heading">Photo Gallery</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Nunc Nam vel feugiat</p>

          </div>

        </div>
      </div>
    </div>
  </section>