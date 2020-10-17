<?php
$to = "mitrarobo17@gmail.com";
$subject = "FEEDBACK";
$name=$_POST["name"];
mail($to,$subject,$name);
?> 