<?php
session_start();

include("coniction.php");

$student_id = $_SESSION['Student_id'];
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>التدريب العملي</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="images/logo.png">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

         <style>


.footer {
     background: #3bac49;
     position:relative;
     bottom:0;
     width:100%;
     text-align: center;
}


.sign_r a{
     text-decoration: none;
         position: absolute;
         top: 50%;
         left: 60%;
         background: #3bac49;
         display: inline-block;
         padding: 15px 135px;
         border-radius: 20px;
         color: #fff;
         font-size: 35px;
  }
  .sign_r a:hover{
     color: #fff;
     background: #3bac99;
  }

  .sign_l a{
     text-decoration: none;
         position: absolute;
         top: 50%;
         left: 10%;
         background: #3bac49;
         display: inline-block;
         padding: 15px 95px;
         border-radius: 20px;
         color: #fff;
         font-size: 35px;
  }
  .sign_l a:hover{
     color: #fff;
     background: #3bac99;
  }

  .sign_c a{
   text-decoration: none;
         position: absolute;
         top: 75%;
         left: 35%;
         background: #3bac49;
         display: inline-block;
         padding: 15px 135px;
         border-radius: 20px;
         color: #fff;
         font-size: 35px;
  }
  .sign_c a:hover{
     color: #fff;
     background: #3bac99;
  }
  .collapse h1{
     color: #fff;
                                    font-size: 50px;
                                    font-weight: bold;
                                    line-height: 22px;
                                    margin-right: 350px;
                                    font-family: serif;
}

.Instructions a{
         text-decoration: none;
         position: absolute;
         top: 15%;
         left: 60%;
         color: #fff;
         font-size: 35px;
         font-weight: bold;
}

            </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="indexs.php"><img src="images/header icon.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="header_information" style="background: #3bac49;">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                           <?php
			         $sql = "SELECT Fall_name FROM student where Student_id = $student_id ";
				$result = mysqli_query($con, $sql);
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
							$text1 = $row['Fall_name'];
							echo '<h1>';
	   					    echo $text1;     
						    echo '</h1>';  		
							}
						}
				?>
                     <div class="Instructions">
                       <a href="student manual 3.pdf" target=_blanck >الإرشادات  </a>
                        </div>
                              <div class="sign_btn"><a href="logout.php">تسجيل خروج</a></div>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="first-slide" src="image/banner.jpg" alt="First slide" style="height: 610px; width:100%">
               <div class="container">

               <div class="sign_r"><a href="Search for a company.php" >البحث عن شركة</a></div>
               
               <div class="sign_c"><a href="student accepted.php">إرسال الموافقة</a></div>

               <div class="sign_l"><a href="filter page.php">المساعدة في ايجاد شركة؟</a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- end banner -->
    
      <!--  footer -->
      <footer>
         <div class="footer" style="background: #3bac49;">
            <div class="copyright" style="background: #3bac49;">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2022 All Rights Reserved. <a href="https://www.wise.edu.jo/"> The World Islamic Sciences and Education University</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
    
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

