 @extends('admin.master')
@section('content')
<style>
  
    .item{
      left: 0;
      top: 0;
      position: relative;
      overflow: hidden;
      margin-top:50px;
      
    }
    .item img{
      -webkit-transition: 0.6s ease;
        transition: 0.6s ease;
        
    }
    .item img:hover{
      -webkit-transform: scale(1.2);
        transform: scale(1.2);

    }
    .img-thumbnail{
        border:0px;
        border-radius:0px;
    }

</style>
<div class="right_col" role="main">
    
<div class="container-fluid">
      @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif 
	@role('admin')
	<div class="row">
	<div class="col-md-3 col-sm-4">
	<div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:rgba(187, 120, 36, 0.1) ">
            <center><i class="fa fa-area-chart" style="color:#BB7824"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Images
            <div class="pull-right badge">{{$image_count}}</div></h4>
          </div>
        </a>
      </div>
      </div>
    <div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color: rgba(22, 160, 133, 0.1)">
            <center><i class = "fa fa-cubes" style="color:#16A085"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Albums
            <div class="pull-right badge" id="WrControls">{{$album_count}}</div></h4>
          </div>
        </a>
      </div>
</div>
<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:  rgba(213, 15, 37, 0.1)">
            <center><i class="fa fa-user" style="color:#d50f25"> </i></center>
          </div>
          <div class="wrimagecard-topimage_title" >
            <h4>Photographers
            <div class="pull-right badge" id="WrForms">{{$photographer_count}}</div>
            </h4>
          </div>
          
        </a>
      </div>
	</div>
	<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:  rgba(51, 105, 232, 0.1)">
             <center><i class="fa fa-bell-o" style="color:#3369e8"> </i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Photographer Request
            <div class="pull-right badge" id="WrGridSystem">{{$pending_count}}</div></h4>
          </div>
          
        </a>
      </div>
	</div>

</div>
<div class="container">
    <h2 class="text-center">Recently Created Albums</h2>
    <div class="row">
      @foreach($albums as $image)
      <div class="col-lg-4 col-md-4 col-sm-6">
          <a href="{{'/admin/album_view/'.$image->id}}"> <div class="thumbnail img-thumb-bg">
            <img src="{{$image->cover_image}}">
               <div class="overlay"></div>
               <div class="caption">
                   <div class="title"><a href="{{'/admin/album_view/'.$image->id}}">{{$image->title}}</a></div>
                   <div class="clearfix">
                       <span class="meta-data">Created on {{$image->created_at}}</span>
                       <span class="meta-data pull-right"><a href=""><i class="fa fa-tag"></i> {{$image->title}}</a></span>
                   </div>
                 
               </div>
           </div></a>
        </div>
   @endforeach
  </div>
    <a href="{{url('/userAlbums')}}" class="btn btn-primary" style="float: right">See More</a>
</div>
<div class="container">
    <h2 class="text-center">Recently Uploaded Images</h2>
    <div class="row">
      @foreach($images as $image)
        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="{{asset($image->image)}}">
                    <img class="img-responsive" alt="" src="{{asset($image->image)}}" >
                    <div class='text-right'>
                        <small class='text-muted'>{{$image->title}}</small>
                    </div> <!-- text-right / end -->
                </a>
            </div>
  @endforeach
    </div>
    
</div>
@endrole
@role('general-user')
	<div class="row">
	<div class="col-md-3 col-sm-4">
	<div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:rgba(187, 120, 36, 0.1) ">
            <center><i class="fa fa-area-chart" style="color:#BB7824"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>My Albums
            <div class="pull-right badge">18</div></h4>
          </div>
        </a>
      </div>
      </div>
    <div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color: rgba(22, 160, 133, 0.1)">
            <center><i class = "fa fa-cubes" style="color:#16A085"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>My Images
            <div class="pull-right badge" id="WrControls">12</div></h4>
          </div>
        </a>
      </div>
</div>
<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:  rgba(213, 15, 37, 0.1)">
            <center><i class="fa fa-pencil-square-o" style="color:#d50f25"> </i></center>
          </div>
          <div class="wrimagecard-topimage_title" >
            <h4>My Profile
            <div class="pull-right badge" id="WrForms">13</div>
            </h4>
          </div>
          
        </a>
      </div>
	</div>
	<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:  rgba(51, 105, 232, 0.1)">
             <center><i class="fa fa-table" style="color:#3369e8"> </i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Album Viewed
            <div class="pull-right badge" id="WrGridSystem">11</div></h4>
          </div>
          
        </a>
      </div>
	</div>

</div>

<div class="container">
    <h2 class="text-center">Recently Uploaded Images</h2>
    <div class="row">
      @foreach($images as $image)
      <div class="col-sm-4">
          <div class="item"><img src="{{asset($image->image)}}" class="img-thumbnail"></div>
      </div>
  @endforeach
    </div>
    <a href="{{url('/myImages')}}" class="btn btn-primary" style="float: right">See More</a>
</div>

@endrole
</div>

         </div>

@endsection