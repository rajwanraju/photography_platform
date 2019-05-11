@extends('admin.master')
@section('content')

<div class="right_col" role="main">

    	<div class="container">
    	<div class="panel panel-default col-md-8 col-md-offset-2" >
         <div class="panel-body">

    	<div class="row">
    			<h1 class="text-center text-danger">Image Upload</h1><br>

    			<h3 class="text-center text-success">{{Session::get('message')}}</h3>

    			<form method="post" action="{{route('image-Upload')}}" enctype="multipart/form-data">  

    				{!! csrf_field() !!}


    				<div class="form-group">
    					<div class="input-group">
    						<span class="input-group-addon"><i class="fa fa-text-width" aria-hidden="true"></i>
    						</span>
    						<input type="text" class="form-control" name="title" placeholder="Title" required="required">
    					</div>
    				</div> 

    				<div class="form-group">
    					<div class="input-group">
    						<span class="input-group-addon"><i class="fa fa-list" aria-hidden="true"></i>
    						</span>
    						<select class="form-control" name="categoryId">
    							<option>Select Category Name</option>
    							@foreach($albums as $category) 
    							<option value="{{$category->id}}">{{$category->title}}</option>

    							@endforeach
    						</select>
    					</div>
    				</div>

					<div class="form-group">
    					<div class="input-group">
    						<span class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i>
    						</span>
    						<select class="form-control" name="albumId">
    							<option>Select Album Name</option>
    							@foreach($albums as $category) 
    							<option value="{{$category->id}}">{{$category->title}}</option>

    							@endforeach
    						</select>
    					</div>
    				</div>


    				<div class="form-group">
    					<div class="input-group">
    						<span class="input-group-addon"><i class="fa fa-text-height" aria-hidden="true"></i>
    						</span>
    						<textarea class="form-control" rows="6" name="description" placeholder="Description"></textarea>
    					</div>
    				</div>

    				<div class="form-group">

    					<div class="file-loading">

    						<input id="file-1" type="file" name="photos[]" multiple class="file" data-overwrite-initial="false" >

    					</div>

    				</div>

    				<div class="form-group">
    					<div class="input-group">
    						<span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i>
    						</span>
    						<input type="text" class="form-control" name="location" placeholder="location" required="required">
    					</div>
    				</div>


    				<div class="form-group">
    					<button type="submit" class="btn btn-primary btn-block btn-lg">Upload</button>
    				</div>

    			</form>     

    		</div>

    	</div>
    	</div>
    	</div>
    	</div>

    </div>

</div>



 @endsection

