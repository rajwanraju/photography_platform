    <!--/testimonials-->
    <section class="testimonials py-lg-5 py-3" id="testimonials">
        <div class="container-fluid">
            <div class="inner-sec-w3ls-agileits p-lg-5 p-3">
                <div class="row">
                    <div class="col-lg-3 header-info two mt-5">
                        <h3 class="heading">Testimonials</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Nunc Nam vel feugiat</p>
                    </div>
                    <div class="owl-carousel owl-theme  owl-slider col-lg-9">
                        @foreach($reviews as $review)
                        <div class="item">
                            <div class="feedback-info">
                                <div class="feedback-top">
                                     <h4 class="text-center text-success"> {{$review->title}}</h4> </p>
                                    <p> {{$review->comment}} </p>
                                </div>
                                <div class="feedback-grids">
                                    <div class="feedback-img">
                                        <img src="images/t1.jpg" class="img-fluid rounded" alt="" />
                                    </div>
                                    <div class="feedback-img-info">
                                        <h5>{{$review->name}} </h5>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//testimonials-->