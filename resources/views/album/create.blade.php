@extends('admin.master')
@section('content')
<div class="right_col" role="main">
<h3 class="text-center">Create Album</h3>


<div class="signup-form">	
    <form action="{{route('myAlbum.store')}}" method="post" enctype="multipart/form-data">
		

		{{csrf_field()}}
		
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-bullhorn" aria-hidden="true"></i>
</span>
				<input type="text" class="form-control" name="title" placeholder="Title" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-text-width" aria-hidden="true"></i>

</span>
				<textarea class="form-control" rows="6" name="description" placeholder="Description"></textarea>
			</div>
        </div>
           <div class="form-group">
                          <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-doller" aria-hidden="true"></i>Cover Image</span>
                            <input id="file-1" type="file" name="cover_image" class="form-control" data-overwrite-initial="false" >
                         
                        </div>

                    </div>
	        
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Save</button>
        </div>
		
    </form>
	
</div>





 @endsection