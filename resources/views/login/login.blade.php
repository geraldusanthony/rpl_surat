<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login Website Beasiswa UKDW</title>
	<link  href="Admin/css/pak.png" rel="icon">
	<link rel="stylesheet" href="../Asset/css/login.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="login">
	<div class="image">
		<img src="../Asset/image/fti.png" alt="">
	</div>
	<div class="card">
		<h1>Login Website SURATI UKDW</h1>
		<form action="/postlogin" method="POST">
				
			<div class="textbox  has-feedback{{$errors->has('email') ? 'has-error' : ''}}">
				<i class="fa fa-user" aria-hidden="true"></i>
			<input type="text" placeholder="Email" name="email">
				<!--@if ($errors->has('email'))
				<span class="help-block">
					<p style="color: red">{{$errors->first('email')}}</p>
				</span>
			   @endif-->
			</div>
			<div class="textbox has-feedback{{$errors->has('password') ? 'has-error' : ''}}">
				<i class="fa fa-key" aria-hidden="true"></i>
			<input type="password" placeholder="Password" name="password" value="{{old('password')}}">
				<!--@if ($errors->has('password'))
				<span class="help-block">
					<p style="color: red">{{$errors->first('password')}}</p>
				</span>
			   @endif-->
			</div>
			<button  style ="margin-top:20px"class="btn">
			 <a href="/informasi">LOGIN 
			</a>
			</button>
		</form>
	</div>
</body>
</html> 