 @extends('photographer.master')
@section('content')

<div class="right_col" role="main">
        

<div class="container">
	<div class="row">
		<div class='list-group gallery'>
@if(isset($images) && !empty($images))
@foreach($images as $image)
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="{{asset($image->image)}}">
                    <img class="img-responsive" alt="" src="{{asset($image->image)}}" >
                    <div class='text-right'>
                        <small class='text-muted'>{{$image->title}}</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            
            @endforeach
            @else
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                No Image
            </div> 
            @endif
           
        </div> <!-- list-group / end -->
	</div> <!-- row / end -->
</div>



</div>

@endsection