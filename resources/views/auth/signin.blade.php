<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Shoot</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link href="{{asset('admin/form.css')}}" rel="stylesheet">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      
      <h1>Shoot</h1>
    </div>

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
    	   @csrf
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="username">
      @if ($errors->has('email'))
      <span class="invalid-feedback" role="alert">
      	<strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
      <input type="submit" class="fadeIn fourth" value="Log In">
        <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
    </form>
      <a class="btn btn-link" href="{{ route('register') }}">
                                    {{ __('New In Site?') }}
                                </a>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="{{url('/')}}">Go to the Site</a>
    </div>

  </div>
</div>
</body>
</html>