@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/icon-font.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/animate.css')}}">
<link rel="stylesheet" href="{{url('assets/css/hambugers.min.css')}}">	
<link rel="stylesheet" href="{{url('assets/css/animsition.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/select2.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/util.css')}}">
<link rel="stylesheet" href="{{url('assets/css/main.css')}}">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-color: rebeccapurple">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Silahkan Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('login') }}">
                    @csrf
					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100 @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" type="email" name="email" placeholder="Email">
						@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit">
                            {{ __('Login') }}
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
    <script src="{{url('assets/js/jquery.js')}}"></script>
    <script src="{{url('assets/js/animsition.min.js')}}"></script>
    <script src="{{url('assets/js/popper.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/select2.min.js')}}"></script>
    <script src="{{url('assets/js/main.js')}}"></script>

</body>
</html>
