<?php
error_reporting(0);

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "sample";
// $conn = new mysqli($servername, $username, $password,$dbname) or die("Unable to connect");


$servername = "mysql.dexbot.mitindia.edu";
$username = "pt_dexbotdb";
$password = "MIT_Robotics_PT";
$dbname = "dexbotdb";
$prefix = "";
$conn = new mysqli($servername, $username, $password,$dbname) or die("Unable to connect");

if ($conn->connect_error) {
    alert("Trasaction failed - db error");

    header("Location:index.html");
    // die();
    die("Connection failed: " . $conn->connect_error);
} 

$txnid = $_GET['txnid'];
$qry1="delete from dexbot where txnid = '$txnid';";
mysqli_query($conn,$qry1);
header("Location:index.html");
        // include("index.html");
?>