@extends('frontEnd.master2')

@section('homeContent')

<div class="col-lg-12">
    <h2 class="text-center">{{$album_info->title}}</h2>
    <p class="text-center">{{$album_info->description}}</p>
    <span class="text-center"></span>
</div>
  <section class="gallery py-lg-5 py-3" id="gallery">
    <div class="container-fluid">
      <div class="inner-sec-w3ls-agileits p-lg-5 p-3">
        <div class="gallery_grids row">
          <div class="col-lg-12 gal-content">
            <ul class="clearfix demo">
              @foreach($albums as $image)
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
            <span style="float: right">@if(!empty($albums)){{$albums->links()}}@endif</span>
          </div>
    
        </div>
      </div>

    </div>
    
 
  </section>
</section>
<div class="container">

        @guest
        <span class="text-center" style="float: center"><a href="{{url('login')}}" style="color:royalblue">Login For Review...</a> You need to Registerd For Review.</span>
       @else
       <span class="text-center" style="float: center"><a href="#" data-toggle="modal" data-target="#modalSubscriptionForm" style="color:royalblue">Review The Album...</a> Your comment will post after review.</span>
        @endguest
        <div class="reviews">
          @forelse($reviews as $review)
  <div class="row blockquote review-item">
    <div class="col-md-3 text-center">
      <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
      <div class="caption">
        <small>by {{$review->name}}</small>
      </div>

    </div>
    <div class="col-md-9">
      <h4>{{$review->title}}</h4>
      <p class="review-text">{{$review->comment}} </p>

      <small class="review-date">
      <?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($review->created_at))->diffForHumans() ?>
</small>
    </div>                          
  </div> 
  @empty
  No Comment
  @endforelse 
</div>
    </div>

<!-- review modal -->
 <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Submit Your Comment For <b style="color:royalblue">{{$album_info->title}}</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
               <form method="POST" action="{{url('review_submit')}}">
                        @csrf
                        <input type="hidden" name="album_id" value="{{$album_info->id}}">
        <div class="md-form">
          <textarea class="form-control" name="title" id="title"></textarea>
          <label data-error="wrong" data-success="right" for="form3">Your Title</label>
        </div>

        <div class="md-form">
          <textarea class="form-control" rows="6" name="comment" id="comment"></textarea>
          <label data-error="wrong" data-success="right" for="form2">Your Comment</label>
        </div>
        <div class="md-form">
            <button class="btn btn-indigo">Submit <i class="fas fa-paper-plane-o ml-1"></i></button>
     
        </div>

      
   
      </form>
      </div>
    </div>
  </div>
</div>

@endsection