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

  <script type="text/javascript" src="js/register.js"></script>

  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/register.css">
</head>

<body style="background-image: url('images/register_back.jpg');">
  <?php include 'utils/header.php'; ?>
  <form method="POST" action="utils/register_backend.php">
  
        <h1>Sign up</h1>
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="E-mail" required />
        <input type="text" name="phone" placeholder="Phone Number" required />
        <textarea name="address" placeholder="Address" required></textarea>
        <input type="password" id="password" name="password" onchange="password_check();" placeholder="Password" required />
        <input type="password" id="password2" name="password2" onchange="match_check();" placeholder="Retype password" required />
        <label id="not_match" style="display: none; color: red; font-size: 15px;">Password Not Match</label>
        <label id="not_good" style="display: none; color: red; font-size: 15px;">7-15 chars with at least 1 number and 1 special character</label>
        <input type="submit" id="sub_btn" name="signup_submit" value="Sign me up" />
    
  </form>
</body>

</html>