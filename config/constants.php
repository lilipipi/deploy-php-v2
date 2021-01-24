<?php 

// Star Session
session_start();

define('SITEURL','https://obscure-beyond-30372.herokuapp.com/food-order/');
define('LOCALHOST','us-cdbr-east-03.cleardb.com');
define('DB_USERNAME','b1839f3c805a40');
define('DB_PASSWORD','5007c482');
define('DB_NAME','food-order');


$conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
$db_select= mysqli_select_db ($conn ,DB_NAME) or die(mysqli_error());

//mysql://b1839f3c805a40:5007c482@us-cdbr-east-03.cleardb.com/heroku_c7ee9cbbc0034f6?reconnect=true








?>