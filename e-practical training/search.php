<?php
session_start();

include("coniction.php");
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
                              <a href="Search for a company.php"><img src="images/header icon.png" alt="#" /></a>
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
                          
                              <form class="searchform mini-widget-searchform" role="search" method="POST" action="search.php">
                                 <input type="text" class="field searchform-s"  value="" placeholder=" ادخال اسم الشركة او نوع التدريب" title="Search form" name="search">
                                    <input type="submit" name="submit" class="assistive-text searchsubmit" value="Go!" style="background: #00aeef ;">
                              </form>
                           
                              <div class="sign_btn"><a href="logout.php">Log out</a></div>
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
                      <h2>نتائج البحث </h2>
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
                   <?php
                 if (isset($_POST['submit'])){
                    $search = mysqli_real_escape_string($con, $_POST['search']);
                    $sql = "SELECT * FROM companies WHERE name LIKE '%$search%' OR The_Course LIKE '%$search%'";
                    $result = mysqli_query($con, $sql);
                    $queryResult = mysqli_num_rows($result);
                    
                    if ($queryResult > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $text1 = $row['imagename'];
                            $text2 = $row['Exfile'];
                            $text3 = $row['id'];
                            $text4 = $row['name'];
                            $text5 = $row['The_Course'];
                            $text6 = $row['Training_method'];
                            $text7 = $row['Location'];
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
                        <td>'. $text7.'</td>
                        <td>'. $text8 .'</td>
                        <td>
                        <a href="'.$text4.'_training_request.php" target=_blanck> تقديم طلب </a>
                        </td>
                    </tr>
                  </tbody>
                 ';
                        }
                    } else {
                        echo '<p style="color:red; text-align:center; font-size:25px;">';
                        echo "There are no results matching your search!";
                        echo '</p>';
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

