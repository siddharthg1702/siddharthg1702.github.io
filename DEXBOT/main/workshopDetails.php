<?php

$kit = $_GET["kits"];
$t = $_GET["tickets"]; 
$w = $_GET["workshop_name"];
$total = $_GET["total"];
$type = $_GET["type"];
$clg = $_GET["clg"];
echo "<div class='mu-title-area'>
<h2 style = 'margin-top:2.5em' class='mu-title'>Registration for $w </h2>
<br><center class = 'mu-title' style = 'font-size:20px;'> Amount to be paid :  ₹$total/-</center>
<br></div>
<section id='mu-register'>
<div class='container'>
<div class='row'>
<div class='col-md-12'>
<div class='mu-register-content'> 
<form class='mu-register-form' action='registereduser.php?total=$total&tickets=$t&w_name=$w&type=$type&kits=$kit' method='post'>";
echo "<h4 font size='2' color='white' class='mu-title'>User 1</h4>           ";                        
include("register.php");
echo "<button style='margin-bottom: 20px;' type='submit' class='mu-reg-submit-btn'>SUBMIT</button>
</div>
</form>
</div>
</div>
</div>
</div>";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dexbot</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/dexbot_logo.png"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/lite-blue-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<!-- Montserrat for title -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	a:link {
    color: #00CDCD;
	}
	</style>
  </head>
  <body>
<!--   	
		<section id="mu-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">
							
							<div class="mu-title-area">
								<h2 class="mu-title"> </h2>
								<p>On-line registrations are open for reservation of seats. On spot registrations will start by 8.30 AM. Be present 1 hour before the starting time of the workshop. All workshops starts by 9.45 AM. Bring atleast one pen drive and a laptop per team. Participants will be provided with Anna university certificate.</p>
							
                            </div>
                            

			</div>
		</section> -->
							
							<div class="mu-pricing-content">
								<div class="row">
									
									<!-- single price item --
									<div class="col-md-4 col-xs-6">
									     
										<div class="mu-single-price">
                                         
											<div class="mu-single-price-head">
												<span class="mu-currency">Ethical Hacking</span>
											</div>
											<img height="200px" src="images/eh.jpg"></img>
											<h3 class="mu-price-title">March 16</h3>
											<ul>
												<li>Basic Class Ticket</li>
												<li>Access to all sessions</li>
												<li>Free Breakfast</li>
												<li><u>Contact</u></li>
												Syed Salman-70921 91115<br>
                                                    Khiruparaj-86081 36225<br>
											</ul>
											<a href="ethical.pdf" target="_blank">click for more details</a>
											<a class="mu-register-btn" href="https://www.payumoney.com/events/#/buyTickets/ETHICAL_HACKING_WS_feb2"> Register Now</a>
										</div>
									</div>
									<!-- / single price item -->

									<!-- single price item -->
									<!-- <div class="col-md-4">
										<div class="mu-single-price">
											<div class="mu-single-price-head">
												<span class="mu-currency">AVR For Robotics</span>
											</div>
											<img  height="200px" src="images/AVR.png"></img>
											<h3 class="mu-price-title">March 16&17</h3>
											<ul>
												<li>Are you new to robotics?</li>
                                                <li>Don't know where to start with??</li>
                                                <li>Well then this workshop is for you where you get started with the avr architecture based Atmega 16.</li>
                                                <li><u>Contact</u></li>
												Rudra (PG)-95669 51714
											</ul>
											<a href="avr.pdf" target="_blank">click for more details</a><br>
											<a class="mu-register-btn" target="_blank" href="https://www.payumoney.com/events/#/buyTickets/AVR_WS"> Register Now</a>
										</div>
									</div> -->
									<!-- / single price item -->

									<!-- single price item -->
									<!-- <div class="col-md-4">
										<div class="mu-single-price">

											<div class="mu-single-price-head">
												<span class="mu-currency">Internet of Things</span>
											</div>
											<img height="200px" src="images/IoT.png"></img>
											<h3 class="mu-price-title">March 16&17</h3>
											<ul>
												<li>You would have heard about the term 'Internet of things'.</li>
                                                 <li>Want to know how it works ? </li>
                                                  <li>An exclusive workshop for beginners on Internet of Things"</li>
												  <li><u>Contact</u></li>
												  Sai Mukkundan-98407 60211
											</ul>
											<a href="iot.pdf" target="_blank">click for more details</a><br>
											<p style="color: red;">Online reservations - Closed <br> On spot registration will be done on day of workshop</p>											 -->
										<!--	<a class="mu-register-btn" target="_blank" href="https://www.payumoney.com/events/#/buyTickets/IOT_WORKSHOP"> Register Now</a>-->
										<!-- </div> -->
									<!-- </div> -->
									<!-- / single price item -->
									<!-- single price item -->
									<!-- <div class="col-md-4">
										<div class="mu-single-price">

											<div class="mu-single-price-head">
												<span class="mu-currency">Arduino for Robotics</span>
											</div>
											<img height="200px" src="images/Arduino.jpg"></img>
											<h3 class="mu-price-title">March 16&17</h3>
											<ul>
												<li>Do you keep hearing about arduino? </li>
<li>What's all the fuss about it? </li>
<li>Well this workshop is for you where you get started with a classic line follower and maze solver bot.</li>
                                              <li><u>Contact</u></li>
											  Sai Mukkundan-98407 60211
											</ul>
											<a href="arduino.pdf" target="_blank">click for more details</a>
											<p style="color: red;">Online reservations - Closed <br> On spot registration will be done on day of workshop</p>											
											<!--<a class="mu-register-btn" target="_blank" href="https://www.payumoney.com/events/#/buyTickets/Extended_arduino"> Register Now</a>-->
										<!-- </div> -->
									<!-- </div>  -->
									<!-- / single price item -->

								<!-- </div> -->
								<!-- <br> -->
								<!-- <div class="row"> -->
								
								<!-- single price item -->
									<!-- <div class="col-md-4">
										<div class="mu-single-price">

											<div class="mu-single-price-head">
												<span class="mu-currency">Real time app development</span>
											</div>
											<img height="200px" src="images/Android.jpg"></img>
											<h3 class="mu-price-title">March 17</h3>
											<ul>
												<li>Ever wondered of building apps with Cloud storage of your data with authentication. </li>
<li>Then this is the place for it. Build apps that connect with Firebase cloud storage </li>
											  Mohan Kumar- 9080629289
											</ul>
											<p style="color: #FFA500"><br> <strike>₹799</strike>₹599 till march 14<sup>th</sup></p>
											<a href="firebase.pdf" target="_blank">click for more details</a>
											<a class="mu-register-btn" target="_blank" href="https://www.payumoney.com/events/#/buyTickets/ANDROID_WS"> Register to Pay</a>
										</div>
									</div> -->
									<!-- / single price item -->
									
									

									<!-- single price item -->
									<!-- <div class="col-md-4">
										<div class="mu-single-price">
											<div class="mu-single-price-head">
												<span class="mu-currency">Image processing using python</span>
											</div>
											<img height="200px" src="images/Python.jpg"></img>											
											<h3 class="mu-price-title">March 17</h3>
											<ul>
												<li>Get hold of those pixels.</li> 
<li>Your creativity is the only limit to this world of computer vision.</li>
<li>Get introduced with the concepts of image processing in this workshop.</li>
<li><u>Contact</u></li>
Syed Salman-70921 91115
											</ul>
											<p style="color: #FFA500"><br> <strike>₹799</strike>₹599 till march 14<sup>th</sup></p>
											<a href="cv.pdf" target="_blank">click for more details</a>
											<a class="mu-register-btn" target="_blank" href="https://www.payumoney.com/events/#/buyTickets/CV_WS"> Register Now</a>
										</div>
									</div> -->
									<!-- / single price item -->

									<!-- single price item -->
									<!-- <div class="col-md-4">
										<div class="mu-single-price">

											<div class="mu-single-price-head">
												<span class="mu-currency">Ethical Hacking</span>
											</div>
											<img height="200px" src="images/eh1.jpg"></img>											
											<h3 class="mu-price-title">March 17</h3>
											<ul>
												<li>Hacking, get to know the real things behind it.</li>
												
												<li>Also, Get to know about the latest hacking tools.
												Remember, Hacking can be taught only through experience.</li>
												<li><u>Contact</u></li>
												Syed Salman-70921 91115<br>
                                                    Khiruparaj-86081 36225<br>
											</ul>
											<a href="ethical.pdf" target="_blank">click for more details</a>
											<a class="mu-register-btn" target="_blank" href="https://www.payumoney.com/events/#/buyTickets/ETHICAL_HACKING_WS_feb3"> Register Now</a>
										</div>
									</div> -->
									<!-- / single price item -->

								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Pricing -->

		


		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-title-area">
								<h2 class="mu-heading-title">Contact Us</h2>
								Contact us at mitra.mitindia@gmail.com
							</div>

						</div>
					<div style="text-align: center" class="col-md-6">	
					<strong>Chairman</strong> <br>  Sachinddar L H (9597316585)
					</div>
					<div style="text-align: center" class="col-md-6">
					<strong>General Secretary</strong> <br> MOKESH B (8903221909)
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

	</main>
	
	<!-- End main content -->	
			
			
	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
			<div class="container">
				<div class="mu-footer-area">
					<div class="mu-footer-top">
						<!-- <div class="mu-social-media">
							<a href="https://m.facebook.com/DexBot2k18/"><i class="fa fa-facebook"></i></a>

							<a href="https://www.youtube.com/channel/UCw-Cp6KypIMFEIyQpZ1VZkA"><i class="fa fa-youtube"></i></a>
						</div> -->
					</div>
					<div class="mu-footer-bottom">
						<p class="mu-copy-right">&copy; Copyright <span title="Vishwa | Bently Nixon N">Dexbot Web Team</span>. All right reserved.</p>
					</div>
				</div>
			</div>

	</footer>
	<!-- End footer -->

	
	
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Event Counter -->
    <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="assets/js/app.js"></script>
  
       
	
    <!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>

	
	
    
  </body>
</html>