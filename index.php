<?php 
if (isset($_GET['login_status']) && $_GET['login_status'] == "false") {
  echo "<script>alert('Please Login First')</script>";
}
if (isset($_GET['food_name'])) {
  echo "<script>alert('Your Order Successful')</script>";
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
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<script src="js/header.js"></script>

	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<style type="text/css">
	body{
		background-image: url('images/back.jpg');
		color: #8C8C8C;
	}
	h1{
		text-align: center;
		font-family: 'Anton', sans-serif;
		font-size: 170px;
	}
	p{
		font-size: 30px;
		font-family: 'Lobster', cursive;
		margin: 40px;
	}
</style>
<body>
<?php include 'utils/header.php'; ?>
<h1>D Mr Mhar</h1>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et. Eu feugiat pretium nibh ipsum consequat nisl vel. Odio pellentesque diam volutpat commodo sed egestas egestas. Sem fringilla ut morbi tincidunt. Elementum integer enim neque volutpat ac tincidunt vitae semper. Dignissim sodales ut eu sem integer. Eget dolor morbi non arcu risus. Et malesuada fames ac turpis egestas integer eget aliquet. Vulputate odio ut enim blandit volutpat. Turpis tincidunt id aliquet risus feugiat in ante metus. Turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet. Egestas tellus rutrum tellus pellentesque. Pharetra sit amet aliquam id diam maecenas ultricies. Elementum tempus egestas sed sed risus pretium quam. Orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor. Sed risus ultricies tristique nulla aliquet enim tortor at auctor. Et egestas quis ipsum suspendisse ultrices gravida dictum fusce ut. Iaculis nunc sed augue lacus viverra vitae congue eu consequat. Facilisi morbi tempus iaculis urna id.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et. Eu feugiat pretium nibh ipsum consequat nisl vel. Odio pellentesque diam volutpat commodo sed egestas egestas. Sem fringilla ut morbi tincidunt. Elementum integer enim neque volutpat ac tincidunt vitae semper. Dignissim sodales ut eu sem integer. Eget dolor morbi non arcu risus. Et malesuada fames ac turpis egestas integer eget aliquet. Vulputate odio ut enim blandit volutpat. Turpis tincidunt id aliquet risus feugiat in ante metus.
</p>
</body>
</html>