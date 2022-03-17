<!DOCTYPE html>
<html>
<head>
	<title>D Mr Mhar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Grandstander&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <script src="js/header.js"></script>

	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body style="background-image: url('images/contact_back.jpg');">
<?php include 'utils/header.php'; ?>
<section class="container mt-5">
   <!--Contact heading-->
   <div class="row">
      <!--Grid column-->
      <div class="col-sm-12 mb-4 col-md-5">
         <!--Form with header-->
         <div class="card border-primary rounded-0">
            <div class="card-header p-0">
               <div class="bg-primary text-white text-center py-2">
                  <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                  <p class="m-0">We’ll write rarely, but only the best content.</p>
               </div>
            </div>
            <div class="card-body p-3">
               
                  <div class="form-group">
                  <label> Your name </label>
                  <div class="input-group">
                     <input value="" type="text" name="data[name]" class="form-control" id="inlineFormInputGroupUsername" placeholder="Your name">
                  </div>
				</div>
                  <div class="form-group">
                     <label>Your email</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="email" value="" name="data[email]" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email">
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Subject</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="text" name="data[subject]" class="form-control" id="inlineFormInputGroupUsername" placeholder="Subject">
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Message</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="text" class="form-control" name="mesg">
                     </div>
                  </div>
                  <div class="text-center">
                     <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block rounded-0 py-2">
                  </div>
             
			     </div>
				  
            </div>
         </div>
      <!--Grid column-->
	  
      <!--Grid column-->
      <div class="col-sm-12 col-md-7">
         <!--Google map-->
         <div class="mb-4">
            <iframe src="https://maps.google.com/maps?q=yangon&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         </div>
         <!--Buttons-->
         <div class="row text-center">
            <div class="col-md-4">
               <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
               <p> Your Address ….. </p>
            </div>
            <div class="col-md-4">
               <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
               <p>+91- 90000000</p>
            </div>
            <div class="col-md-4">
               <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
               <p> your@gmail.com</p>
            </div>
         </div>
      </div>
      <!--Grid column-->
	    </div>
</section>
</body>
</html>