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

	<script src="js/header.js"></script>
	<script src="js/changepassword.js"></script>

	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/changepassword.css">
</head>
<body style="background-image: url('images/change_pass_back.jpg');">
<?php include 'utils/header.php'; ?>
<div class="form_body">
<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Change password</h3>
		
		<!--Password must contain one lowercase letter, one number, and be at least 7 characters long.-->
		
		<div class="card-text">
			<form action="utils/changepassword_backend.php" method="POST">
				<div class="form-group">
					<label for="exampleInputEmail1">Current Password</label>
					<input type="password" name="current_pass" class="form-control form-control-sm" id="current_pass" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Your new password</label>
					<input type="password" name="new_pass" class="form-control form-control-sm" id="new_pass" onchange="password_check();" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Repeat password</label>
					<input type="password" name="confirm_pass" class="form-control form-control-sm" id="confirm_pass" onchange="match_check();" required>
				</div>
				<div class="form-group">
					<label id="not_match" style="display: none; color: red; font-size: 15px;">Password Not Match</label>
					<label id="not_good" style="display: none; color: red; font-size: 15px;">7-15 chars with at least 1 number and 1 special character</label>
				</div>
				<button type="submit" class="btn btn-primary btn-block submit-btn" id="sub_btn">Confirm</button>
			</form>
		</div>
	</div>
</div>
</div>
</body>
<?php 
if (isset($_GET['status']) && $_GET['status'] == "fail") {
	echo "<script>alert('Current Password is not Correct');</script>";
}
 ?>
</html>