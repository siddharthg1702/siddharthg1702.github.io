<?php
error_reporting(0);
// ***********HAVE NOT INCLUDED DATA FOR CRYPTO TOOL *******************//
$servername = "mysql.dexbot.mitindia.edu";
$username = "pt_dexbotdb";
$password = "MIT_Robotics_PT";
$dbname = "dexbotdb";
$prefix = "";
$conn = new mysqli($servername, $username, $password,$dbname) or die("Unable to connect");

// $conn = @mysqli_connect($servername, $username,$password) or die("Could not connect database");
// mysqli_select_db($conn,$dbname) or die("<h1>Could not select database<h1>");

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "sample";
// $conn = new mysqli($servername, $username, $password,$dbname) or die("Unable to connect");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	echo "connection error";
} 
else
{
	// echo "connection success";
}
// if(!isset($_GET['total'])){header("location: index.php");}
$type = $_GET['type'];
$clg = $_GET['clg'];
$w_name = $_GET['w_name'];
$total = $_GET['total'];
// $total = (float) $total;
$tickets = $_GET['tickets'];
$kits = $_GET['kits'];
// echo $total.$tickets.$type.$w_name;
// echo "kits".$kits;
$phone=$_POST['phone'];
$college=$_POST['college'];
$year=$_POST['year'];
$name=$_POST['name'];
$email=$_POST['email'];
$reg_no=$_POST['reg_no'];
$dept=$_POST['dept'];
$remaining = 0;

if($type == "online")	{
	if($w_name == "Arduino Essentials")
	{
		if($tickets == "t1")	{
			$tickets = 0;
		}
		if($kits == "s1")	{
			$kits = 0;
		}
		
	}
	if($w_name == "Internet Of Things")
	{
		if($tickets == "t2")	{
			$tickets = 0;
		}
		if($kits == "s2")	{
			$kits = 0;
		}
		
	}

	if($w_name == "Arduino For Robotics")
	{
		if($tickets == "t3")	{
			$tickets = 0;
		}
		if($kits == "s3")	{
			$kits = 0;
		}
		
	}
}

if($type == "onsite")	{
	// echo "onsite";
	if($w_name == "Arduino Dor Python")
	{
		// echo "arduiE";
		if($tickets != "t1")	{
		$remaining = $tickets*560;
		}
		else
			$tickets = 0;

		if($kits == "s1")	{
			$kits = 0;
			$remaining = $remaining - $total;
		}	else	{
			$remaining = $remaining + $kits*0 - $total;
		}
	}
	if($w_name == "Internet Of Things")
	{
		// echo "iot";
		if($tickets != "t2")	{
		$remaining = $tickets*560;
		}
		else
		{
			$tickets = 0;
		}
		if($kits == "s2")	{
			$remaining = $remaining - $total;
			$kits = 0;
		}
		else	{
			$remaining += ($kits*0 - $total);
		}
		
	}

	if($w_name == "App Development")
	{
		// echo "arduiR";
		if($tickets != "t3")	{
			$remaining = $tickets*560;
		}
		else	{
			$tickets = 0;
		}
		if($kits != "s3")	{
			$remaining += ($kits*0 - $total);
		}
		else	{
			$kits = 0;
			$remaining = $remaining - $total;
		}
	}

	if($w_name == "Image Processing")
	{
		// echo "ip";
		if($tickets != "t4")	{
		$remaining = $tickets*600;
		}
		else
		{
			$tickets = 0;
		}
		$remaining -= $total;
	}

	if($w_name == "Ethical Hacking")
	{
		// echo "eh";
		if($tickets != "t5")	{
		$remaining = $tickets*560;
		}
		else
		{
			$tickets = 0;
		}
		$remaining -= $total;
    }
    
    if($w_name == "Cryptool")
	{
		// echo "eh";
		if($tickets != "t5")	{
		$remaining = $tickets*560;
		}
		else
		{
			$tickets = 0;
		}
		$remaining -= $total;
	}
}

// echo $phone.$college.$year.$name.$email;

$MERCHANT_KEY = "GKncKTPA";
$SALT = "leeAf1CuBy";
$productinfo ="bla";
$txnid = time().rand(1000,99999);
$pid = 0;
$hashseq=$MERCHANT_KEY.'|'.$txnid.'|'.$total.'|'.$productinfo.'|'.$name.'|'.$email.'|||||||||||'.$SALT;
$hash =strtolower(hash("sha512", $hashseq)); 
$surl = "http://dexbot.mitindia.edu/main/success.php?name=$name&email=$email&txnid=$txnid&w_name=$w_name&total=$total&rem=$remaining&t=$tickets&k=$kits";
$furl = "http://dexbot.mitindia.edu/main/failure.php?txnid=$txnid";	
date_default_timezone_set('Asia/Kolkata');
$time = (string)date("h:i:sa");
$date = (string) date("d-m-Y");
$datetime = $date.' '.$time;
$qry1="insert into dexbot(name,email,phone,college,year,tickets,txnid,pid,amount,kits,type,workshop,remaining,date,mit,dept,reg_no)
VALUES('$name','$email','$phone','$college','$year','$tickets','$txnid','$pid','$total','$kits','$type','$w_name','$remaining','$datetime','$clg','$dept','$reg_no')";
mysqli_query($conn,$qry1);

// if($conn->query($qry1) === TRUE)
// {




// 	// setcookie('email', $email, time() + (86400 * 60), "/");
// 	// setcookie('phone', $phone, time() + (86400 * 60), "/");
// 	// setcookie('phone', $name, time() + (86400 * 60), "/");
	// $msg = "Hello '$name', Thanks for registering for DexBot '19 (March 8-9) Your unique ID is '$txnid'";
	// $msg = wordwrap($msg,70);
	// mail($email,'Registration for DexBot 19',$msg);				
	// echo "<script>alert('Processing....')</script>";			


// }
	// }
// }
// else
// {
	
	// echo '<script>alert('Failed to Register!')</script>';
	// header("Location:index.html");
// }

$conn->close();
?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DexBot</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
	<!-- <script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt- -->
	<!-- color="<color-code>" bolt-logo="<image path>"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="shortcut icon" type="image/icon" href="images/dexbot_logo.png"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link id="switcher" href="assets/css/theme-color/lite-blue-theme.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
	<style>
			* {
				 font-family: 'Merriweather', serif; font-size:20px;
			}
		</style>
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>
		<script>
    function submitForm() {
      var postForm = document.forms.postForm;
      postForm.submit();
    }
</script>
</head>
<body onload="submitForm();">
<div>
	<form name="postForm" action="https://secure.payu.in/_payment" method="POST" >
		<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
		<input type="hidden" name="hash" value="<?php echo $hash;  ?>"/>
		<input type="hidden" name="txnid" value="<?php echo $txnid;  ?>" />
		<input type="hidden" name="amount" value="<?php echo $total;  ?>" />
		<input type="hidden" name="firstname" value="<?php echo $_POST['name'];  ?>" />
		<input type="hidden" name="email" value="<?php echo $_POST['email'];  ?>" />
		<input type="hidden" name="phone" value="<?php echo $_POST['phone'];  ?>" />
		<input type="hidden" name="productinfo" value="<?php echo $productinfo;  ?>" />
		<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
		<input type="hidden" name="surl" value="<?php echo $surl;  ?>" />
		<input type="hidden" name="furl" value="<?php echo $furl;  ?>" />
	</form>
</div>
	
</body>
</html>