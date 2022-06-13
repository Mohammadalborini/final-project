<?php
session_start();

include("coniction.php");

$student_id = $_SESSION['Student_id'];


if ($_SESSION['error2'] == null){
    $_SESSION['error2'] = null;
}else{
    $error = $_SESSION['error2'];
}

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
      <title>المساعدة في ايجاد شركة</title>
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
.collapse h1{
     color: #fff;
                                    font-size: 50px;
                                    font-weight: bold;
                                    line-height: 22px;
                                    margin-right: 350px;
                                    font-family: serif;
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
                              <a href="index.html"><img src="images/header icon.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="header_information">
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
      
      <!--  contact -->


            <div class="list" style="margin-top:50px;">
            <h2>لغات البرمجة و الدورات</h2>
        <form method="POST" action="Fliter_search.php">
            <ul>
                <li>
                    <label>
                        <input type="checkbox" value="java" name="check_list[]">
                        <p>JAVA</p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox" value="js" name="check_list[]">
                        <p>JavaScript</p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox" value="php" name="check_list[]">
                        <p>PHP</p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox" value="html" name="check_list[]">
                        <p>HTML</p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox" value="css" name="check_list[]">
                        <p>CSS</p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox" value="python" name="check_list[]">
                        <p>Python</p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox" value="flutter" name="check_list[]">
                        <p>Flutter</p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox" value="c++" name="check_list[]">
                        <p>C++</p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox" value="ccna" name="check_list[]">
                        <p>CCNA</p>
                        <span></span>
                    </label>
                </li>
                <li>
                    <label>
                        <input type="checkbox" value="ccnp" name="check_list[]">
                        <p>CCNP</p>
                        <span></span>
                    </label>
                </li>
            </ul>
            <button name="button" class="button"> بحث </button>
                    </form>
                    <?php if (isset($error)): ?>
						<div class="list" style="top:-810px; left: -35%;  color:red; font-size:25px;">
										<?php echo $error; ?>  
										</div>
                   				<?php
								$_SESSION['error2'] = null; 
								endif ?>
        </div>

      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer" >
            <div class="copyright" >
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

