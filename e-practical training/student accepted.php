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
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
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
                           <?php
			         $sql = "SELECT Fall_name FROM student where Student_id = $student_id ";
				$result = mysqli_query($con, $sql);
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
							$text1 = $row['Fall_name'];
							echo '<h1 style="margin-bottom: 55px;">';
	   					    echo $text1;     
						    echo '</h1>';  		
							}
						}
				?>
                              <div class="sign_btn"><a href="logout.php" style="margin-bottom: 55px;">Log out</a></div>
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

      <div class="signup-form">
    <form action="" method="POST" enctype="multipart/form-data">
		<h2>إرسال الموافقة </h2>
		<p class="hint-text">(PDF) الرجاء التأكد من تعبئة البيانات بشكل صحيح وإرفاق ملف بصيغة  </p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="name" placeholder="اسم الطالب" value="<?php echo $text1; ?>" required="required" style="text-align: right;" readonly></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="id" placeholder="الرقم الجامعي" value="<?php echo $student_id; ?>" required="required" style="text-align: right;" readonly>
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="Spec" placeholder="التخصص" required="required" style="text-align: right;">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="company" placeholder="اسم الشركة" required="required" style="text-align: right;">
        </div>   
        <div class="form-group">
            <input type="file" name="file" required="required">
        </div>       
		<div class="form-group">
            <button type="submit" name="submit" onclick="javascript: return confirm('هل أنت متأكد من المعلومات التي ادخلتها؟');" class="btn btn-success btn-lg btn-block">إرسال</button>
        </div>
        <a href="indexs.php" class="btn btn-success btn-lg btn-block">العودة الى الصفحة الرئيسية</a>
    </form>
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

<?php 

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $student_id = $_POST['id'];
    $Spec = $_POST['Spec'];
    $company = $_POST['company'];

    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
  
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
  
    $allowed = array('pdf');
    
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 20000000) {
                 
                    $fileNameDB= $name;
  
                    $fileNameNew=  $name.'.'.$fileActualExt;
                
                    $fileDestination = 'pdf/'.$fileNameNew;
  
                    move_uploaded_file($fileTmpName, $fileDestination);
            

      $sql = "INSERT into student_accepted (student_name, student_id, Specialization, Company_name, pdf_name)
              VALUE ('$name','$student_id','$Spec','$company', '$fileNameDB')";
              mysqli_query($con, $sql);
              echo '<p style="position: absolute; top: 110px; margin-left: 680px; font-size: 30px; color: green;">';
              echo 'تم إرسال بنجاح';
              echo '</p>';
              
  
  }else {
      echo '<p style="position: absolute; top: 110px; margin-left: 680px; font-size: 30px; color: red;">';
      echo '
      ملفك كبير جدًا';
      echo '</p>';
  }
  
  }else {
      echo '<p style="position: absolute; top: 110px; margin-left: 680px; font-size: 30px; color: red;">';
      echo '
      كان هناك خطأ في تحميل الملف الخاص بك'; 
      echo '</p>';  }

}
}


?>