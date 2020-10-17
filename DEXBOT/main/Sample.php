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

$msg = "Hello A Harish, Thanks for registering for DexBot '20 (March 13) \n Workshop Name : Ethical Hacking \n Number of tickets : 1 \n Total amount Paid : 560 \n Remaining amount : 0 \n Your unique ID is 158384136090813";
$msg = wordwrap($msg,70);
$result = mail('harishsunny10@gmail.com','Registration for DexBot 20',$msg);

if($result) {
    // echo "mail sent";
    header("Location:index.html");
}
else
{
    echo $name.$email.$txnid;
}

?>