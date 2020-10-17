<?php
// $mysql_hostname = "mysql.dexbot.mitindia.edu";
// $mysql_user = "pt_dexbotdb";
// $mysql_password = "MIT_Robotics_PT";
// $mysql_database = "dexbotdb";
// $prefix = "";
// $conn = @mysqli_connect($mysql_hostname, $mysql_user,$mysql_password) or die("Could not connect database");
// mysqli_select_db($conn,$mysql_database) or die("<h1>Could not select database<h1>");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ramya;

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname) or die("Unable to connect");
echo "connection success";

?>



