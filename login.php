<?php 
if (isset($_GET['status']) && $_GET['status'] == "fail") {
	echo "<script>alert('username or password incorrect');</script>";
}
if (isset($_GET['login']) && $_GET['login'] == "false") {
	echo "<script>alert('Please Login to Order');</script>";
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>D Mr Mhar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Grandstander&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">

	<style type="text/css">
		body{
			background-image: url('images/login_back.jpg');
		}
	</style>
</head>
<body>
<?php include 'utils/header.php'; ?>

<?php
	if (isset($_GET['result'])) {
		$result = $_GET['result'];
		if ($result == "success") {
			echo "<script>alert('Account Created Successfully')</script>";
		}
	}
 ?>

<div class="global-container">
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Log in to Order</h3>
		<div class="card-text">
			<!--
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
			<form method="POST" action="utils/login_backend.php">
				<!-- to error: add class "has-danger" -->
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control form-control-sm" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<a href="#" style="float:right;font-size:12px;">Forgot password?</a>
					<input type="password" class="form-control form-control-sm" name="password" id="exampleInputPassword1">
				</div>
				<button type="submit" class="btn btn-primary btn-block">Sign in</button>
				
				<div class="sign-up">
					Don't have an account? <a href="register.php">Create One</a>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>