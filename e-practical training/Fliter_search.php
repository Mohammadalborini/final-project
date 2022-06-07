<?php
session_start();

include("coniction.php");

$student_id = $_SESSION['Student_id'];

$_SESSION['error2'] = '';
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
      <title>البحث عن شركة</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
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
      <link href="css/material-dashboard.css" rel="stylesheet" />
      <link rel='stylesheet' id='dt-custom-css'  href='https://www.wise.edu.jo/wp-content/uploads/the7-css/custom.css?ver=75b607eb8d3d' type='text/css' media='all' />
      <link rel="icon" href="images/logo.png">
      <style>
.table.table-hover tbody tr:hover {
  background-color: #00aeef;
}
.table.table-hover tbody td a {
   color:black;
}
.table.table-hover thead th{
   text-align: center;
}
.table.table-hover tbody tr td{
   text-align: center;
}
.footer{
   background: #00aeef;
   position:fixed;
   bottom:0;
   width:100%;
}
.ourwork{
   margin-bottom:100px;
}
.collapse h1{
     color: #fff;
                                    font-size: 50px;
                                    font-weight: bold;
                                    line-height: 22px;
                                    margin-right: 350px;
                                    font-family: serif;
}
.sign_btn {
     padding-left: 50px;
}

.sign_btn a {
     background-color: #fff;
     display: inline-block;
     padding: 7px 35px;
     border-radius: 20px;
     color: #292e39;
     font-size: 17px;
}
    </style>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
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
                              <a href="Fliter_search.php"><img src="images/header icon.png" alt="#" /></a>
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

       <div class="ourwork">
          <div class="container">
             <div class="row">
                <div class="col-md-12">
                   <div class="titlepage">
                      <h2> نتائج البحث </h2><br/>
                      <h2> الشركات المناسبة للتدريب </h2>
                   </div>
                </div>
             </div>
      <div class="content" >
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card" style="background:#00aeef;" >
                <div class="card-body">
                <table class="table table-hover" style="color:black;">
                <thead >
                              <th>ID</th>
                              <th>Picture</th>
                              <th>Name</th>
                              <th>The Course</th>
                              <th>Training method</th>
                              <th>Location</th>
                              <th>Training type (company or course)</th>
                              <th>تقديم الطلب</th>
                            </thead>

                  <!-- Code fliter php -->
                   <?php


                 if (isset($_POST['button'])){
                    if (empty($_POST['check_list'])) {
                     $_SESSION['error2'] = 'You must choose at least one item!';
                       echo "<script> window.location.href='filter page.php'; </script>";
                     exit();
                    }else {
                  $arrays = array();
                  $result = array();
                  $arrays = $_POST['check_list'];
                   
                  foreach($arrays as $chech){
                     $query="SELECT * FROM companies WHERE programming_languages LIKE '%$chech%'";
                     $commint = array();

                     $commint_new = mysqli_query($con,$query);

                     
                     $commint= mysqli_fetch_all($commint_new, MYSQLI_ASSOC);


                        foreach ($commint as $record){
                           if (in_array($record, $result)) {
                     
                           }else if(mysqli_num_rows(mysqli_query($con,$query)) > 0){
                              array_push($result, $record);
                             
                           }

                        }
                  
                        sort($result);
                     
                  }
                  if (count($result) == 0 ) {
                     echo '<p style="color:red; text-align:center; font-size:25px;">';
                     echo "There are no results matching your search!";
                     echo '</p>';
               
                  }
                  
               
                  foreach ($result as $row) {
 
                        $text1 = $row['imagename'];
                        $text2 = $row['Exfile'];
                        $text3 = $row['id'];
                        $text4 = $row['name'];
                        $text5 = $row['The_Course'];
                        $text6 = $row['Training_method'];
                        $text7 = $row['Location'];
                        $map = $row['Loca_map'];
                        $text8 = $row['Training_type'];
                        echo '
                        <tbody>
                        <tr>
                    <td> '.$text3.'</td>
                    <td> 
                    <img src="upload/'.$text1.'.'.$text2.'" style="width:125px; hight:125px;"/></td>
                    <td><a href="'.$text4.'.php" target=_blanck>'.$text4.'</a></td>
                    <td>'. $text5 .'</td>
                    <td>'. $text6.' </td>
                    <td>'. $text7.'<br/>
                        <a href="'.$map.'" target=_blanck> إضغط هنا </a></td>
                    <td>'. $text8 .'</td>
                    <td>
                    <a href="'.$text4.'_training_request.php" target=_blanck> تقديم طلب </a>
                    </td>
                </tr>
              </tbody>
             ';
                    
                  }
               }
                  }
                  
                    
                   ?>
                    </table>
                </div>
              </div>
            </div>
       
          </div>
        </div>
      </div>

          </div>
       </div>
     
      
      <!--  footer -->
      <footer>
         <div class="footer" style="marign-top:165px; background:#3bac49;" >
            <div class="copyright">
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

