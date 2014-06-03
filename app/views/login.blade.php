@extends('master')

@section('stylesheets')
<link href="/teachEnglish/public/assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/teachEnglish/public/assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
<link href="/teachEnglish/public/assets/stylesheets/pages.min.css" rel="stylesheet" type="text/css">
<link href="/teachEnglish/public/assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
<link href="/teachEnglish/public/assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">
@endsection

@section('body-class')
page-signin-alt
@endsection

@section('content')

<!-- 2. $MAIN_NAVIGATION ===========================================================================

	Main navigation
-->
	<div class="signin-header">
		<a href="index.html" class="logo">
			<div class="demo-logo bg-primary"><img src="assets/demo/logo-big.png" alt="" style="margin-top: -4px;"></div>&nbsp;
			English<strong>Tutor</strong>Skyler
		</a> <!-- / .logo -->
	</div> <!-- / .header -->

	<h1 class="form-header">Sign in to your Account</h1>


	<!-- Form -->
	{{ Form::open(array('url' => 'login', 'class' => 'panel', 'id' => 'signin-form_id')) }}
		<div class="form-group">
			<input type="text" name="signin_username" id="username_id" class="form-control input-lg" placeholder="Username or email">
		</div> <!-- / Username -->

		<div class="form-group signin-password">
			<input type="password" name="signin_password" id="password_id" class="form-control input-lg" placeholder="Password">
			<a href="#" class="forgot">Forgot?</a>
		</div> <!-- / Password -->

		<div class="form-actions">
			<input type="submit" value="Sign In" class="btn btn-primary btn-block btn-lg">
		</div> <!-- / .form-actions -->
	{{ Form::close()}}
	<!-- / Form -->

@endsection

@section('scripts')
<script type="text/javascript">
	window.PixelAdmin.start([
		function () {
			$("#signin-form_id").validate({ focusInvalid: true, errorPlacement: function () {} });
			
			// Validate username
			$("#username_id").rules("add", {
				required: true,
				minlength: 3
			});

			// Validate password
			$("#password_id").rules("add", {
				required: true,
				minlength: 3
			});
		}
	]);
</script>
@endsection

