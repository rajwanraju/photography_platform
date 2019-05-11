@extends('frontEnd.master2')

@section('homeContent')

 <!-- Team -->
  <section class="team py-lg-5 py-3" id="team">
    <div class="container">
       <h3 class="text-center">Our Recent Albums</h3>
</br>
      <div class="inner-sec-w3ls-agileits py-lg-5 py-3">
        <div class="row team_grids">
            
          <div class="col-lg-10 offset-1 team-con-info">
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
              <span style="float: right">@if(!empty($albums)){{$albums->links()}}@endif</span>
    </div>
  </section>

@endsection