@extends('admin.master')
@section('content')

<div class="right_col" role="main">


    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-sm-12 col-11 main-section">

                <h1 class="text-center text-danger">My Profile</h1><br>

                <h3 class="text-center text-success">{{Session::get('message')}}</h3>

             <form method="post" action="{{url('completeProfile')}}" enctype="multipart/form-data">  

                    {!! csrf_field() !!}


                      <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-facebook" aria-hidden="true"></i>
</span>
				<input type="text" class="form-control" name="facebookId" placeholder="http:// FaceBook Account" required="required">
			</div>
        </div> 




                      <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-instagram" aria-hidden="true"></i>
</span>
				<input type="text" class="form-control" name="instagramId" placeholder="http:// Instagram Account" required="required">
			</div>
        </div> 








          <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-text-height" aria-hidden="true"></i>
</span>
				<textarea class="form-control" rows="6" name="bio" placeholder="Bio"></textarea>
			</div>
        </div>

                    <div class="form-group">

                        <div class="file-loading">

                            <input id="file-1" type="file" name="photo" multiple class="file" data-overwrite-initial="false" >

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



 @endsection

