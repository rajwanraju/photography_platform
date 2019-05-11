 @extends('admin.master')
@section('content')

<style type="text/css">
	


.gallery-grid1 {
	position: relative;
	overflow: hidden;
	cursor: pointer;
}

.gallery-grid1 .p-mask,
.row .product .vm-product-media-container .p-mask {
	opacity: 0;
    visibility: hidden;
    background: rgba(25, 24, 24, 0.8);
    bottom: 0%;
    position: absolute;
    padding: 1em .5em;
    margin-left: .3em;
    margin-right: .3em;
    width: 96%;
    -webkit-transform: translate3d( 0px, 100%, 0px);
    -moz-transform: translate3d( 0px, 100%, 0px);
    -ms-transform: translate3d( 0px, 100%, 0px);
    -o-transform: translate3d( 0px, 100%, 0px);
    transform: translate3d( 0px, 100%, 0px);
    -webkit-transition: all .5s ease 0s;
    -moz-transition: all .5s ease 0s;
    transition: all .5s ease 0s;
    text-align: center;
    border-bottom: 4px solid #00a98f;
}
}

.gallery-grid1 .p-mask .p-desc {
	color: #a3a3a3;
	position: relative;
	display: block;
	margin-bottom: 10px;
	padding-bottom: 10px;
	font-size: 1em;
}

.gallery-grid1:hover .p-mask,
.row .product:hover .p-mask {
	opacity: 1;
	visibility: visible;
	-webkit-transform: translate3d( 0px, 0px, 0px);
	-moz-transform: translate3d( 0px, 0px, 0px);
	-ms-transform: translate3d( 0px, 0px, 0px);
	-o-transform: translate3d( 0px, 0px, 0px);
	transform: translate3d( 0px, 0px, 0px);
}
.demo>li {
	float: left;
	list-style-type: none;
	margin: 2px;
}

.demo>li img {
	width: 240px;
	height: 240px;
	margin: 5px;
	cursor: pointer;
}

</style>
<div class="right_col" role="main">
  <a href="#" class="btn btn-primary"  onclick="window.history.back()"><i class="fa fa-arrow-left " aria-hidden="true"></i>
Back</a>  
<div class="container-fluid">
<div class="col-lg-12">
    <h2 class="text-center">{{$album_info->title}} @if($album_info->status ==1) <span class="alert alert-success" style="padding: 0px">Published</span> @else <span class="alert alert-warning" style="padding: 0px">In Review</span>@endif </h2>
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
	</div>
</div>

@endsection