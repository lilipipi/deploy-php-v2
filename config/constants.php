<?php 

// Star Session
session_start();

define('SITEURL','https://damp-everglades-25724.herokuapp.com/food-order/');
define('LOCALHOST','us-cdbr-east-03.cleardb.com');
define('DB_USERNAME','b992cf6ba413a1');
define('DB_PASSWORD','a554eee6');
define('DB_NAME','food-order');


$conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
$db_select= mysqli_select_db ($conn ,DB_NAME) or die(mysqli_error());

//mysql://b992cf6ba413a1:a554eee6@us-cdbr-east-03.cleardb.com/heroku_d4d9e18c3dc7551?reconnect=true








?>