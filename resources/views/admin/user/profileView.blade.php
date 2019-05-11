@extends('admin.master')
@section('content')
<style>

/* ==== */
.site-header {
  height: 44px;
  width: 100%;
  border-bottom: 1px solid #E1e1e1;
}

.cover-photo {
  height: 250px;
  margin: 0 auto;
  position: relative;
  z-index: 1;
}

.mybody {
  margin: 0 auto;
  z-index: 4;
  position: relative;
}

.left-col, .right-col {
  width: 226px;
  float: left;
  position: relative;
}

.left-col {
  margin-right: 24px;
  position: relative;
  top: -150px;
  left: 8px;
}

.center-col {
  float: left;
  width: 480px;
  margin-right: 24px;
  min-height: 400px;
}

.user-info .name{
 font-size: 24px;
  font-weight: 600;
  line-height: 1.2;
  padding-top: 4px;

}

/* LEFT COL */
.user-info h1 {
  font-size: 24px;
  font-weight: 600;
  line-height: 1.2;
  padding-top: 4px;
}
.user-info h2 {
  color: #666;
  font-size: 16px;
}
.user-info .meta {
  padding: 8px 0;
  font-size: 14px;
}
.user-info .meta p {
  line-height: 1.6;
}
.user-info .meta i {
  font-size: 0.95em;
  padding-right: 2px;
}

.profile-avatar {
  width: 218px;
  height: 218px;
}
.profile-avatar .inner {
  width: 206px;
  height: 206px;
  margin: 5px;
}

/* CENTER */
.image-grid {
  width: 100%;
}
.image-grid li {
  float: left;
  background-color: #EFEFEF;
}
.image-grid.col-3 li {
  width: 32%;
  margin-right: 2%;
  margin-bottom: 2%;
  height: 0;
  padding-bottom: 30%;
  -webkit-background-size: 100%;
  background-size: 100%;
}
.image-grid.col-3 li:nth-child(3n) {
  margin-right: 0;
}

.profile-nav {
  height: 46px;
  background-color: white;
  border-bottom: 2px solid #E1E1E1;
  margin-bottom: 8px;
}
.profile-nav ul > li {
  color: #999;
  font-size: 14px;
  float: left;
  line-height: 44px;
  font-weight: 600;
  padding: 0 22px;
  cursor: pointer;
}
.profile-nav li.active {
  color: #1E1E1E;
}

.content .unit {
  padding: 8px 0 10px 0;
  border-bottom: 2px solid #E1E1E1;
  margin-bottom: 8px;
}
.content .unit:last-child {
  margin-bottom: 16px;
}
.content .unit h3 {
  margin-bottom: 4px;
  color: #777;
}
.content .unit h3 a {
  color: #1e1e1e;
  font-weight: 600;
}
.content .unit p.time {
  color: #777;
  font-size: 14px;
  margin-bottom: 8px;
}
.content .unit .more {
  font-size: 14px;
  color: #777;
}
.content .unit .more a {
  color: #777;
}


</style>
<div class="right_col" role="main">
    
<div class="container-fluid">
<header class="site-header"></header>
<div class="cover-photo"><img src="{{asset($user_data->image)}}" style="height: 260px;width: 980px"></div>
<div class="mybody">
  <section class="left-col user-info">
    <div class="profile-avatar">
      <div class="inner"><img src="{{asset($user_data->image)}}" style="height: 206px;width: 206px"></div>
    </div>
    <div><span class="name">{{$user_data->name}}</span>&nbsp;@if($user_data->status ==0)<span class="alert-success"> {{"Approved"}}</span>@elseif($user_data->status ==0)<span class="alert-warning">{{"Waiting"}}</span>@elseif($user_data->status ==2)<span class="alert-danger">{{"Requested"}}</span>@endif</div>
   <p>{{$user_data->bio}}</p>
    <div class="meta">
      <p><i class="fa fa-fw fa-map-marker"></i> {{$user_data->location}}</p>
      <p><i class="fa fa-fw fa-link"></i> {{$user_data->facebookId}}</p>
      <p><i class="fa fa-fw fa-clock-o"></i> {{$user_data->created_at}}</p>
     @if($user_data->status == 2) <p><a href="{{url('/admin/user-approved/'.$user_data->id)}}" class="btn btn-primary">Approve Request</a></p>
     @endif
    </div>
  </section>
</br>
</br>
</br>
</br>
  <div class="container">
         <h3>{{$user_data->name}}'s Albums</h3>
    <div class="row">
      @foreach($user_albums as $image)
      <div class="col-sm-3 col-md-3">
          <div class="item"><img src="{{asset($image->cover_image)}}" class="img-thumbnail"></div>
      </div>
  @endforeach
  @if(count($user_albums)>3)
  <a href="{{url('/')}}" class="btn btn-primary" style="float: right">See More</a>
  @endif
</div>

    
    <h3>{{$user_data->name}}'s Images</h3>
    <div class="row">
      @foreach($images as $image)
      <div class="col-sm-3 col-md-3">
          <div class="item"><img src="{{asset($image->image)}}" class="img-thumbnail" style="height: 200px;width: 200px"></div>
      </div>
  @endforeach
   
</div>

</br>
  @if(count($images)>3)
  <a href="{{url('/')}}" class="btn btn-primary" style="float: right">See More</a>
  @endif
  </div>
</div>

</div>

         </div>

@endsection