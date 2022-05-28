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
      <title>تقديم عروض الشركات</title>
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

div, form, input, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      legend{
         text-align: right;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      form {
      width: 50%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622;
      margin-left: 25%; 
      margin-top: 75px; 
      }
      input {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      .item {
      position: relative;
      margin: 10px 0;
      text-align: right;
      }
      .item span {
      color: red;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:100%;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #006622;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #00b33c;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
      .collapse h2{
     color: #fff;
                                    font-size: 50px;
                                    font-weight: bold;
                                    line-height: 22px;
                                    margin-right: 350px;
                                    font-family: serif;
}
.condition p{
   color: #000;
   font-size: 25px;
   font-weight: bold;
   text-align: right;
   line-height: 10px;
   margin-top:  80px;
   margin-right: 380px;
   font-family: serif;
}
      </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader 
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      end loader -->
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
                           <div class="collapse navbar-collapse" id="navbarsExample04" >
                           <h2>تقديم عروض الشركات للتدريب</h2>
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

      <!--  form -->
      <div class="condition">
      <p>:الرجاء الالتزام بشروط التالية
  <br/><br/> <br/><br/>  الالتزام بمدة تدريب لا تقل عن 280 ساعة للطالب والسماح للمشرف السؤول عنه متابعة اخبار التدريب-
      </p>

      </div>
      <div class="testbox">
      <form method="POST" action="" enctype="multipart/form-data">
        <fieldset>
          <legend>الرجاء من الشركات ادخال كافة المعلومات</legend>
           <div class="colums">
          <div class="item" >
            <label > أسم الشركة<span>*</span></label>
            <input type="text" name="name" required/>
          </div>
          <div class="item">
            <label > الدورات التي تقدمها<span>*</span></label>
            <input type="text" name="cours" required/>
          </div>
            <div class="item">
            <label >طريقة التدريب (offline/online)<span>*</span></label>
            <input type="text"   name="method" required/>
          </div>
         <div class="item">
            <label >نوع التدريب (course/company)<span>*</span></label>
            <input type="text"   name="type" required/>
          </div>
          <div class="item">
            <label >الشهادات التي تقدمها<span>*</span></label>
            <input type="text"   name="Certi" required/>
          </div>
          <div class="item">
            <label >إيميل الشركة<span>*</span></label>
            <input type="text"   name="email" required/>
          </div>
          <div class="item">
            <label >موقع الشركة<span>*</span></label>
            <input type="text"   name="location" required/>
          </div>
          <div class="item">
            <label >Profile picture<span>*</span></label>
            <input type="file"  name="file" required/>
          </div>
                </fieldset>
        <div class="btn-block">
          <button type="submit" name="submit" href="/">Submit</button>
        </div>
      </form>
    </div>
     

      <!-- end form -->
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

<?php 

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $cours = $_POST['cours'];
    $method = $_POST['method'];
    $type = $_POST['type'];
    $Certi = $_POST['Certi'];
    $email = $_POST['email'];
    $location = $_POST['location'];


    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
  
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
  
    $allowed = array('jpg', 'jpeg', 'png');

    $result = $con->query("SELECT * FROM companies_offers") or die($con->error);
     $queryResult = mysqli_num_rows($result); 
     $numrow= $queryResult;
    
    
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 20000000) {
                  for ($i=-1; $i<=$numrow; $i++){
                 
                     $fileNameDB= "image".$i;
   
                     $fileNameNew=  "image".$i.'.'.$fileActualExt;
                 }
                    $fileDestination = 'upload/'.$fileNameNew;
  
                    move_uploaded_file($fileTmpName, $fileDestination);
            

      $sql = "INSERT into companies_offers (name, The_Course, Training_method, Location, Training_type, Certificates, email ,imagename, Exfile)
              VALUE ('$name','$cours','$method','$location','$type', '$Certi','$email', '$fileNameDB', '$fileActualExt')";
              mysqli_query($con, $sql);
              echo '<p style="position: absolute; top: 110px; margin-left: 400px; font-size: 30px; color: green;">';
              echo 'Submitted successfully
              Please wait for a reply to the email';
              echo '</p>';
              
  
  }else {
      echo '<p style="position: absolute; top: 110px; margin-left: 650px; font-size: 30px; color: red;">';
      echo '
      Your file is too big!';
      echo '</p>';
  }
  
  }else {
      echo '<p style="position: absolute; top: 110px; margin-left: 650px; font-size: 30px; color: red;">';
      echo '
      There was an error uploading your file!'; 
      echo '</p>';  }

}
}


?>