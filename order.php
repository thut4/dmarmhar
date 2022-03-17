<?php 
session_start();
require_once 'utils/db_connect.php';
if (!isset($_SESSION['username'])){
	header("Location: login.php?login=false");
}else{
	/*echo $_GET['food_id'];*/
	$stmt = $conn->prepare("insert into orders (user_id, food_id, date) values(?,?, now())");
	$stmt->bind_param("ii", $_SESSION['userid'], $_GET['food_id']);
	$stmt->execute();
	$stmt->close();
	$conn->close();
	header("Location: index.php?food_name=" . $_GET['food_name']);
}

 ?>