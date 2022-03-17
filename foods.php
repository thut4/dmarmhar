<?php 
require_once 'utils/db_connect.php';
$cate_id = $_GET['cateid'];
if (isset($_GET['login']) && $_GET['login'] == "false") {
	echo "<script>alert('Please Login to Order')</script>";
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

	<script src="js/header.js"></script>

	<link rel="stylesheet" type="text/css" href="css/header.css">
  <style>
  body{
    background-color: whitesmoke;
  }
  </style>
</head>
<body>
<?php include 'utils/header.php'; ?>
<div class="row ml-1 mr-1;" id="action" style="margin-right: 20px;">
	<?php 
          $stmt = $conn->prepare("select * from foods where cate_id = ?");
          $stmt->bind_param("i", $cate_id);
          $stmt->execute();
          $result = $stmt->get_result();
          while ($row = $result->fetch_assoc()) {
    ?>
	<div class="col-lg-3 col-sm-12" style="margin-top: 30px;">
      <div class="card" style="border: 2px solid grey; border-radius: 15px; background-color: grey;" >
        <img class="card-img-top" src="upload/<?php echo $row['food_img']; ?>" alt="Card image cap" style="margin: 7px; margin-left: 10px; width:95%; height: 400px;">
        <div class="card-body" style="margin: 7px;">
          <h5 class="card-title" style="color: white;"><?php echo $row['food_name']; ?></h5>
          <p class="card-text" style="color: white;">Price : <?php echo $row['food_price'] ?></p>
          <a href="order.php?food_name=<?php echo $row['food_name']; ?>&&food_id=<?php echo $row['food_id']; ?>" class="btn btn-primary">Order</a>
        </div>
      </div>
    </div>
    <?php 
    	};
     ?>
</div>
</body>
</html>