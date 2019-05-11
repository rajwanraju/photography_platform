@extends('admin.master')
@section('content')
<div class="right_col" role="main">
<h3 class="text-center">Create Photographer</h3>


<div class="signup-form">	
    <form action="{{url('photographer/store')}}" method="post">
		<h2>Register Photographer</h2>

		{{csrf_field()}}
		
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="name" placeholder="Username" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" class="form-control" name="password" placeholder="Password" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lock"></i>
					<i class="fa fa-check"></i>
				</span>
				<input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
			</div>
        </div>        
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
        </div>
		
    </form>
	
</div>





 @endsection