
<?php
session_start();

include("coniction.php");

?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="Tuned Applications/Images/Images/Website Logo.jpg" type="image/png">
	<title>Tuned Applications</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="Tuned Applications/css/bootstrap.css">
	<link rel="stylesheet" href="Tuned Applications/vendors/linericon/style.css">
	<link rel="stylesheet" href="Tuned Applications/css/font-awesome.min.css">
	<!-- main css -->
	<link rel="stylesheet" href="Tuned Applications/css/style.css">
</head>
<style>
	h1 {
  font-size: 2em;
  font-family: "Core Sans N W01 35 Light";
  font-weight: normal;
  margin: .67em 0;
  display: block;
}

#registered {
    margin-top: 50px;
}

#registered img {
    margin-bottom: 0px;
    width: 100px;
    height: 100px;
}

#registered span {
    clear: both;
    display: block;
}

img {
    margin-bottom: 20px;
}

.avatar {
    margin: 10px 0 20px 0;
}

.module{
  position:relative;
  top:10%;    
  height:65%;
  width:450px;
  margin-left:auto;
  margin-right:auto;
}

.user {
    color: #66d8fc;
    font-weight: bold;
}

.userlist {
    float:left;
    padding: 30px;
}

.userlist span {
    color: #0590fc;
}

.welcome{
  position:relative;
  top:30%;    
  height:65%;
  width:900px;
  margin-left:auto;
  margin-right:auto;
  margin-top: 50px;
}

::-moz-selection {
  background: #19547c;
}
::selection {
  background: #19547c;
}
input::-moz-selection {
  background: #037db6;
}
input::selection {
  background: #037db6;
}

body{
  color: #fff;
  background-color:#f0f0f0;
  font-family:helvetica;
  background:url('http://clevertechie.com/img/bnet-bg.jpg') #0f2439 no-repeat center top;
}

.body-content{
  position:relative;
  top:20px;
  height:700px;
  width:800px;
  margin-left:auto;
  margin-right:auto; 
  background: transparent;
}

select,
textarea,
input[type="text"],
input[type="password"],
input[type="email"]
{
  height:30px;
  width:100%;;
  display: inline-block;
  vertical-align: middle;
  height: 34px;
  padding: 0 10px;
  margin-top: 3px;
  margin-bottom: 10px;
  font-size: 15px;
  line-height: 20px;
  border: 1px solid rgba(255, 255, 255, 0.3);
  background-color: rgba(0, 0, 0, 0.5);
  color: rgba(255, 255, 255, 0.7);
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 2px;
}

select,
textarea,
input[type="text"],
input[type="password"],
input[type="email"] {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  -webkit-transition: background-position 0.2s, background-color 0.2s, border-color 0.2s, box-shadow 0.2s;
  transition: background-position 0.2s, background-color 0.2s, border-color 0.2s, box-shadow 0.2s;
}
select:hover,
textarea:hover,
input[type="text"]:hover,
input[type="password"]:hover,
input[type="email"]:hover {
  border-color: rgba(255, 255, 255, 0.5);
  background-color: rgba(0, 0, 0, 0.5);
  color: rgba(255, 255, 255, 0.7);
}
select:focus,
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus {
  border: 2px solid;
  border-color: #1e5f99;
  background-color: rgba(0, 0, 0, 0.5);
  color: #ffffff;
}
.btn {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  margin: 3px 0;
  padding: 6px 20px;
  font-size: 15px;
  line-height: 20px;
  height: 34px;
  background-color: rgba(0, 0, 0, 0.15);
  color: #00aeff;
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 2px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
}
.btn.active,
.btn:active {
  padding: 7px 19px 5px 21px;
}
.btn.disabled:active,
.btn[disabled]:active,
.btn.disabled.active,
.btn[disabled].active {
  padding: 6px 20px !important;
}
.btn:hover,
.btn:focus {
  background-color: rgba(0, 0, 0, 0.25);
  color: #ffffff;
  border-color: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}
.btn:active,
.btn.active {
  background-color: rgba(0, 0, 0, 0.15);
  color: rgba(255, 255, 255, 0.8);
  border-color: rgba(255, 255, 255, 0.07);
  box-shadow: inset 1.5px 1.5px 3px rgba(0, 0, 0, 0.5);
}
.btn-primary {
  background-color: #098cc8;
  color: #ffffff;
  border: 1px solid transparent;
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 2px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  background-image: -webkit-linear-gradient(top, #0f9ada, #0076ad);
  background-image: linear-gradient(to bottom, #0f9ada, #0076ad);
  border: 0;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(255, 255, 255, 0.15) inset;
}
.btn-primary:hover,
.btn-primary:focus {
  background-color: #21b0f1;
  color: #ffffff;
  border-color: transparent;
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}
.btn-primary:active,
.btn-primary.active {
  background-color: #006899;
  color: rgba(255, 255, 255, 0.7);
  border-color: transparent;
  box-shadow: inset 1.5px 1.5px 3px rgba(0, 0, 0, 0.5);
}
.btn-primary:hover,
.btn-primary:focus {
  background-image: -webkit-linear-gradient(top, #37c0ff, #0097dd);
  background-image: linear-gradient(to bottom, #37c0ff, #0097dd);
}
.btn-primary:active,
.btn-primary.active {
  background-image: -webkit-linear-gradient(top, #006ea1, #00608d);
  background-image: linear-gradient(to bottom, #006ea1, #00608d);
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6) inset, 0 0 0 1px rgba(255, 255, 255, 0.07) inset;
}
.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
}

.alert {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 4px 20px 4px 20px;
  font-size: 13px;
  line-height: 20px;
  margin-bottom: 20px;
  text-shadow: none;
  position: relative;
  background-color: #272e3b;
  color: rgba(255, 255, 255, 0.7);
  border: 1px solid #000;
  box-shadow: 0 0 0 1px #363d49 inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
.alert-error {
  color: #f00;
  background-color: #360e10;
  box-shadow: 0 0 0 1px #551e21 inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}
.alert:empty{
    display: none;
}
.alert-success {
  color: #21ec0c;
  background-color: #15360e;
  box-shadow: 0 0 0 1px #2a551e inset, 0 5px 10px rgba(0, 0, 0, 0.75);
}

	</style>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand-logo_h" href="Tuned Applications.php"><img src="Tuned Applications/Images/Images/Website Logo.jpg" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
							<li class="nav-item active"><a class="nav-link" href="Tuned Applications.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="#About-us">About Us</a></li>
							<li class="nav-item"><a class="nav-link" href="#Our-Server">Our Serves</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#Our-Works" class="nav-link dropdown-toggle">Our Works</a>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#Our-Team" class="nav-link dropdown-toggle">Our Team</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="#Contact-US">Contact US</a></li>
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->
	
	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<div class="body-content">
  <div class="module">
    <h1>Submit a Training Request</h1>
    <form class="form" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Student Name" name="username" required />
      <input type="text" placeholder="Student ID" name="student_id" required />
	  <input type="email" placeholder="Email" name="email" required />
	  <input type="text" placeholder="Specialization" name="spec" required />
	  <input type="text" placeholder="Training Type" name="train" required />
      <input type="submit" value="Request" name="Request" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>


	<!--================Footer Area =================-->
<div id="Contact-US">
	<footer class="footer_area">
		<div class="container">
			<div class="row footer_inner">
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h3>Contact	Us</h3>
						</div>
						<p>Tuned Applications<br>
							Call: 07 8988 0205<br>
							Email: >TunedApplications.com
							<br><br>
							All rights reserver This template is made  with Tuned Applications
							</p>
					</aside>
				</div>
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget news_widget">
						<div class="f_title">
							<h3>Our Location</h3>
						</div>
						<p>Al Shakhshir Complex, Al Shaheed St 21, Amman
							</p>
							<div class="mapouter"><div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13536.084174372252!2d35.900815!3d31.987445!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc419774a851ab00!2sTuned%20Applications!5e0!3m2!1sen!2sjo!4v1651958986421!5m2!1sen!2sjo" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><a href="https://www.fnfgo.com/">Friday Night Funkin Mods</a></div><style>.mapouter{position:relative;text-align:right;width:400px;height:150px;}.gmap_canvas {overflow:hidden;background:none!important;width:400px;height:150px;}.gmap_iframe {width:400px!important;height:150px!important;}</style></div>
					</aside>
				</div>
				<div class="col-lg-2">
					<aside class="f_widget social_widget">
						<div class="f_title">
							<h3>Follow Me</h3>
						</div>
						<p>Let us be social</p>
						<ul class="list">
							<li><a href="https://web.facebook.com/TunedApps/
								" target="_blanck"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/search?q=TunedApps
								" target="_blanck"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/TunedApps/
								" target="_blanck"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</aside>
				</div>
			</div>
		</div>
	</footer>
</div>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="Tuned Applications/js/jquery-3.2.1.min.js"></script>
	<script src="Tuned Applications/js/popper.js"></script>
	<script src="Tuned Applications/js/bootstrap.min.js"></script>
	<script src="Tuned Applications/js/stellar.js"></script>
	<script src="Tuned Applications/js/jquery.magnific-popup.min.js"></script>
	<script src="Tuned Applications/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="Tuned Applications/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="Tuned Applications/vendors/isotope/isotope-min.js"></script>
	<script src="Tuned Applications/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="Tuned Applications/js/jquery.ajaxchimp.min.js"></script>
	<script src="Tuned Applications/vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="Tuned Applications/vendors/counter-up/jquery.counterup.min.js"></script>
	<script src="Tuned Applications/js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="Tuned Applications/js/gmaps.min.js"></script>
	<script src="Tuned Applications/js/theme.js"></script>
</body>

</html>

<?php

if(isset($_POST['Request'])) {
  $username = $_POST['username'];
  $student_id = $_POST['student_id'];
  $email = $_POST['email'];
  $spec = $_POST['spec'];
  $train = $_POST['train'];

  $sql = "SELECT * FROM companies_databases WHERE student_id = '$student_id' and student_name = '$username' ";
  $reulet = mysqli_num_rows(mysqli_query($con, $sql));
  
  if ($reulet = 1) {
    echo '<p style="position: absolute; top: 150px; margin-left: 530px; font-size: 35px; color: red;">';
    echo 'The student is already there! <br/><br/>';
    echo 'Sorry you can not register!';
    echo '</p>';
  }else {

  $sql = "INSERT into companies_databases (student_name, student_id, email, specialization, training_type)
  VALUE ('$username','$student_id','$email','$spec', '$train')";
  mysqli_query($con, $sql);
  echo '<p style="position: absolute; top: 150px; margin-left: 410px; font-size: 35px; color: green;">';
  echo 'The request has been submitted successfully';
  echo '</p>';
}
}



?>