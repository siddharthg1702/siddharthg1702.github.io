<?php

// error_reporting(0);

$servername = "mysql.dexbot.mitindia.edu";
$username = "pt_dexbotdb";
$password = "MIT_Robotics_PT";
$dbname = "dexbotdb";
$prefix = "";
$conn = new mysqli($servername, $username, $password,$dbname) or die("Unable to connect");


if ($conn->connect_error) {
    alert("Transaction succes - db error");
    die("Connection failed: " . $conn->connect_error);
} 
// $pid = $_POST['payuMoneyId'];
$txnid = $_GET['txnid'];

$name = $_GET['name'];
$email = $_GET['email'];
$t = $_GET['t'];
$k = $_GET['k'];
$rem = $_GET['rem'];
$total = $_GET['total'];
$w_name = $_GET['w_name'];


$qry1="update dexbot set pid = '1' where txnid = '$txnid';";

mysqli_query($conn,$qry1);


if($w_name == "Accomodation")
{
    $msg = "Hello $name, Accomodation Details :  \n Number of persons : $t \n Number of days: $k \n Total amount paid: $total \n Your unique ID is $txnid";
    $msg = wordwrap($msg,70);
    $result = mail($email,'Registration for DexBot 19',$msg);	
    
}
else    {
    $msg = "Hello $name, Thanks for registering for DexBot '20 (March 13) \n Workshop Name : $w_name \n Number of tickets : $t \n Total amount Paid : $total \n Remaining amount : $rem \n Your unique ID is $txnid";
    $msg = wordwrap($msg,70);
    $result = mail($email,'Registration for DexBot 19',$msg);	
}
if($result) {
    // echo "mail sent";
    header("Location:index.html");
}
else
{
    echo $name.$email.$txnid;
}

// $msg = "Hello '$name', Thanks for registering for DexBot '19 (March 8-9) Your transaction id is '$txnid'";
// $msg = wordwrap($msg,70);
// mail($email,'Registration for DexBot 19',$msg);				

// header("Location:index.html");
    
// include("index.html");
?>