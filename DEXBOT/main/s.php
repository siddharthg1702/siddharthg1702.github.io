<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$email = 'ramyas2898@gmail.com';
$msg = "Hello Shanmugam Mithra, Thanks for registering for DexBot '19 (March 8-9) \n Workshop Name : Internet of Things \n Number of tickets : 3 \n Number of Kits : 1 \n Total amount Paid : 2635 \n Remaining amount : 0 \n Your unique ID is 155126759051258";
$msg = wordwrap($msg,70);
$result = mail($email,'Registration for DexBot 19',$msg);	
if($result) {
    echo "mail sent to san";
}
else
{
    echo "error";
}
?>