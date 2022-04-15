<?php

session_start();

include("coniction.php");

$student_id = $_SESSION['Student_id'];

?>

<!DOCTYPE html>
<html dir="rtl">

		<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<?php
			$sql = "SELECT Fall_name FROM student where Student_id = $student_id ";
				$result = mysqli_query($con, $sql);
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
							$text1 = $row['Fall_name'];
							echo '<title>';
	   					    echo $text1;     
						    echo '</title>';  		
							}
						}
				?>
	
		
		<!-- google font -->
		<link rel="icon" href="http://grades.wise.edu.jo:8889/assets/images/wiseicon.ico">

		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;700;900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

		<!-- my css style sheet -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="style/student.css">

		
		
		<!-- fontasome website for icons that i use -->
		<script src="https://kit.fontawesome.com/764830c237.js" crossorigin="anonymous"></script>
		
		<!-- java scrept from bootstrap-->
		
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		
		
		<script src="js/windows.js"> </script>
		<script src="js/validate.js"> </script>
		<style>
			body{
      font-family: 'Cairo', sans-serif;
      text-align: right;
			}
	</style>
		
	</head>	
	<body onfocus="validatePage('ih3i0verml03pv2u9nns8jujq7+3180605071','2022-03-21 20:25:34')">

		<div class="container">
			<div class="main-body">
				<!-- Breadcrumb -->
				<nav aria-label="breadcrumb" class="main-breadcrumb">
					<ol class="breadcrumb" style=" margin-top: -2rem;">
					<li class="breadcrumb-item"><a href="student.php">بوابة الطالب</a></li>
					<li class="breadcrumb-item active" aria-current="page">الرئيسية</li>
					</ol>
				</nav>
				<!-- /Breadcrumb -->

				<div class="row gutters-sm">
					<div class="col-lg-4 col-md-12 mb-3">
						<div class="card">
								<div class="badger-overlay" >
								<span class="top-left badger bg-primary" style="background:#ffc107!important;">متوقع تخرجه</span>
							</div>

							<div class="card-body">
								<div class="d-flex flex-column align-items-center text-center">
								<?php
											$sql = "SELECT * FROM student where Student_id = $student_id ";
											$result = mysqli_query($con, $sql);
										   if (mysqli_num_rows($result) > 0) {
											   while ($row = mysqli_fetch_assoc($result)) {
												   $text7 = $row['imagename'];
												   $text8 = $row['Acte'];

												   echo '<img src="image/'.$text7.'.'.$text8.'" alt="محمد عبد الحكيم توفيق عبد الله" class="rounded-circle" width="120" height="120" loading="lazy">';
												   
											   }
											}
										?>
									<div class="mt-3">
										<?php
											$sql = "SELECT Fall_name FROM student where Student_id = $student_id ";
											$result = mysqli_query($con, $sql);
										   if (mysqli_num_rows($result) > 0) {
											   while ($row = mysqli_fetch_assoc($result)) {
												   $text1 = $row['Fall_name'];
												   echo '<h4>';
												   echo $text1;     
												   echo '</h4>';  		
											   }
											}
										?>
										
										
										<p class="text-secondary mb-1 mt-3">التخصص</p>
										<?php
											$sql = "SELECT Specialization FROM student where Student_id = $student_id ";
											$result = mysqli_query($con, $sql);
										   if (mysqli_num_rows($result) > 0) {
											   while ($row = mysqli_fetch_assoc($result)) {
												   $text2 = $row['Specialization'];
												   echo '<P class="text-muted font-size-sm">';
												   echo $text2;     
												   echo '</P>';  		
											   }
											}
										?>
										
										
										<p class="text-secondary mb-1 mt-3">الرقم الجامعي</p>
										<?php
											$sql = "SELECT Student_id FROM student where Student_id = $student_id ";
											$result = mysqli_query($con, $sql);
										   if (mysqli_num_rows($result) > 0) {
											   while ($row = mysqli_fetch_assoc($result)) {
												   $text3 = $row['Student_id'];
												   echo '<P class="text-muted font-size-sm">';
												   echo $text3;     
												   echo '</P>';  		
											   }
											}
										?>
										

										<p class="text-secondary mb-1 mt-3">المرشد الأكاديمي</p>
										<?php
											$sql = "SELECT Academic_advisor FROM student where Student_id = $student_id ";
											$result = mysqli_query($con, $sql);
										   if (mysqli_num_rows($result) > 0) {
											   while ($row = mysqli_fetch_assoc($result)) {
												   $text3 = $row['Academic_advisor'];
												   echo '<P class="text-muted font-size-sm">';
												   echo $text3;     
												   echo '</P>';  		
											   }
											}
										?>
								

										<p class="text-muted font-size-sm">
										<?php
											$sql = "SELECT * FROM student where Student_id = $student_id ";
											$result = mysqli_query($con, $sql);
										   if (mysqli_num_rows($result) > 0) {
											   while ($row = mysqli_fetch_assoc($result)) {
												   $text4 = $row['Email'];
												   $text5 = $row['outlook'];

												   echo '<a href="';
												   echo $text5;
												   echo '" dir="ltr">';

												   echo $text4;
												   echo '</a></p>';
												   
												    		
											   }
											}
										?>	
										
										
										<form method="POST" action="logout.php">
											<button type="submit" name="submit" value="الخروج من النظام" class="btn btn-outline-primary">تسجيل الخروج</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="card mt-3">
							<ul class="list-group list-group-flush">

								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0">
										<i class="fa fa-lock"></i>
										<a href="changeStudentPassword.php">
											<medium>تغيير كلمة المرور</medium>
										</a>
									</h6>
								</li>
								
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0">
										<i class="fas fa-money-check"></i>
										<a href="http://evaluation.wise.edu.jo:8889/login.php" target="_blank">
											<medium>تقيم اعضاء الهيئة التدريسة</medium>
										</a>
									</h6>
								</li>

								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0">
										<i class="fab fa-internet-explorer"></i>
										<a href="https://learn.wise.edu.jo/mlms20212/" target="_blank">
											<span>التعليم الالكتروني</span>
										</a>
									</h6>

								</li>
								
								
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0">
										<i class="far fa-envelope"></i>
										<a href="https://outlook.office.com/owa" target="_blank">
											<span>البريد الإلكتروني</span>
										</a>
									</h6>
								</li>

								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0">
										<i class="far fa-sticky-note"></i>
										<a href="https://docs.google.com/forms/d/e/1FAIpQLScVfyxwY_YQlwSs5MQHzagj4jLILhBI6dgCmserF_IncGQBJQ/viewform" target="_blank">
											<span style="line-height: 1.5rem;"> استبانة قياس مستوى رضى الطلبة عن معايير النزاهة الوطنية في الجامعة</span>
										</a>
									</h6>
								</li>

															</ul>
						</div>
					</div>
					<div class="col-lg-8 col-md-12">
						<div class="row gutters-sm">													
							<div class="col-12 mb-3">
								<div class="card h-100">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 col-sm-12">
												<h6 class="d-flex align-items-center mb-3" style="text-align:center;font-weight: bold;">
													<i class="material-icons text-info mr-2"></i>كل ما يخص التسجيل
												</h6>
												<hr>

												<i class="fas fa-pen"></i>
												<a onclick="return studentClasses('3180605071');"  href="">
													<medium>التسجيل الذاتي</medium>
												</a>
												<hr>
												
												<i class="far fa-sticky-note"></i>
												<a onclick="return availableClasses('3180605071');" href="">
													<medium>الشعب المتاحة</medium>
												</a>
												<hr>
												
												<i class="far fa-clock"></i>
												<a onclick="return reg_date('3180605071')" href="">
													<medium>مواعيد التسجيل</medium>
												</a>
												<hr>
												
												<i class="far fa-calendar-alt"></i>
												<a onclick="return final_exam('3180605071');" href="">
													<medium>مواعيد الامتحانات</medium>
												</a>
												<hr>
												
												<i class="far fa-calendar-alt"></i>
												<a href="levelexamsdates.php">
													<medium>مواعيد امتحانات المستوى</medium>
												</a>
												<hr>
												
												<i class="fas fa-coins"></i>
												<a onclick="return res_hours('3180605071')" href="">
													<medium>تحديد عدد ساعات الدفع</medium>
												</a>
												<hr>
												
												<i class="far fa-copy fa-fw "></i>
												<a onclick="return openofferedCourses()" href="#">
													<medium>جريدة المواد </medium>
												</a>	
                                                <hr>
												<?php
											$sql = "SELECT The_number_of_hours_spent FROM student where Student_id = $student_id ";
											$result = mysqli_query($con, $sql);
										   if (mysqli_num_rows($result) > 0) {
											   while ($row = mysqli_fetch_assoc($result)) {
												   $text9 = $row['The_number_of_hours_spent'];
												   if ($text9 >=90){

													$sql = "SELECT id_student FROM practical_training";
														$result = mysqli_query($con, $sql);
										   				if (mysqli_num_rows($result) > 0) {
											  				 while ($row = mysqli_fetch_assoc($result)) {
												   					$text10 = $row['id_student'];
																if ($text10 == $student_id) {
																	echo ' <i class="fas fa-copy"></i>
																	<a href="indexs.php" target="_blanke">
																		<medium>التدريب العملي </medium>
																	</a>';
																}else{
																	/*echo '<i class="fas fa-copy"></i>'; */ 
													  			 echo '
													   				<P>
														   				<medium>التدريب العملي </medium>
													  			    </P>';
																}
															}
														}
												   }else{
													   /*echo '<i class="fas fa-copy"></i>'; */ 
													   echo '
													   <P>
														   <medium>التدريب العملي </medium>
													  </P>';

												   }	
											   }
											}
										?>
																			
											</div>
											
											<div class="col-md-6 col-sm-12">
												<h6 class="d-flex align-items-center mb-3" style="text-align:center;font-weight: bold;">
													<i class="material-icons text-info mr-2"></i>كل ما يخص الطالب
												</h6>
												<hr>
												
												<i class="fas fa-info"></i>
												<a class="open_popup btn btn-xs" >
													<medium>بيانات حساباتي</medium>
												</a>
												<hr>
												
												<i class="fas fa-table"></i>
												<a onclick="return printStudentClasses('3180605071')" href="">
													<medium>جدول الطالب</medium>
												</a>
												<hr>
												
												<i class="fas fa-solar-panel" style="padding-left: 2px"></i>
												<a onclick="open('suggestCourses.php?3180605071','','height=600,width=800,scrollbars=yes,menubar=yes,resizable=yes'); return false;"   href="#">
													<medium>الخطة الدراسية</medium>
												</a>
												<hr>
												
												<i class="fas fa-info"></i>
												<a onclick="return openpenalty('3180605071');" href="">
													<span>العقوبات التأديبية</span>
												</a>
												
												<hr>
												
												<div class="dropdown">
												<i class="fas fa-spell-check"></i>
													<button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<medium >العلامات</medium>
													</button>
													<div class="dropdown-menu shadow dropdown-menu-right"aria-labelledby="dropdownMenu2" style="width:100%">
														<a class="dropdown-item text-right" onclick="return openmarks('3180605071');" href="">
															<medium>كشف العلامات</medium>
														</a>
														
														<a href="gradesFinal.php" class="dropdown-item text-right">
															<medium>علامات الفصل النهائية</medium>
														</a>
														
														<a href="gradesPrefinal.php" class="dropdown-item text-right">
															<medium>العلامات الفصلية</medium>
														</a>
														
														
														<a class="dropdown-item text-right" onclick="return levelexams('3180605071');" href="#">
															<medium>نتائج امتحانات المستوى</medium>
														</a>
													
													</div>
												</div>
													
												<hr>
											
												<div class="dropdown">
													<i class="fas fa-paper-plane"></i>
													<button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<medium >الطلبات الإلكترونية</medium>
													</button>
													<div class="dropdown-menu shadow dropdown-menu-right"aria-labelledby="dropdownMenu2" style="width:100%">
														<a class="dropdown-item text-right"  href="/studentRequestOpenClass.php">
															<medium>طلب فتح شعبة</medium>
														</a>														
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>

							<div class="col-12 mb-3">
								<div class="card h-100">
									<div class="card-body">
										<h6 class="d-flex align-items-center mb-3" style="text-align:center;font-weight: bold;">
											<i class="material-icons text-info mr-2"></i>ملاحظات
										</h6>
										<hr>
										<medium style="color:#DA0037">ملاحظة هامة: يرجى العلم بأن الغرامة المالية تُستحق على الطالب اذا دفع في فترة السحب والاضافة</medium>

									</div>
								</div>
							</div>
							
							
						</div>
					</div>
				</div>

			</div>
		</div>


		
		<div id="myModal" class="modal fade" role="dialog" style="width:100%">
			<div class="modal-dialog" style="width: 60%;">
				<div class="modal-content" >
					<div class="modal-header">
						<medium style="font-weight: bold">اسم المستخدم</medium>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-12">
								3180605071							</div>
						</div>
					</div>
					
					<div class="modal-header">
						<medium style="font-weight: bold">رقم الهاتف</medium>
					</div>
					<div class="modal-body">
						<div class="row">
							<div id="studentPhoneNumber" class="col-6">
								942****078							</div>
							<div class="col-6">
								<button class="btn btn-default btn-sm" onclick="openChangePhoneModal();"><span class="fa fa-pen"></span></button>
							</div>
						</div>
					</div>
					
					<div class="modal-header">
						<medium style="font-weight: bold">حساب التعليم الإلكتروني</medium>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-6">
								اسم المستخدم:<br><bdi>3180605071</bdi><br>
								كلمة المرور:<br><bdi> <span id="elpass">bu153</span></bdi>
							</div>
							
							
							
							<div class="col-6">
								<button id="showTextBtnEl" class="btn btn-default btn-sm" onclick="showText('el', 'bu153');"><span class="fa fa-eye"></span> </button>
								<button id="hideTextBtnEl" class="btn btn-default btn-sm" onclick="hideText('el');" style="display:none;"><span class="fa fa-eye-slash"></span> </button>
								<button id="copyTextBtnEl" class="btn btn-default btn-sm" onclick="copyText('bu153');"><span class="fa fa-clipboard"></span> </button>
						
							</div>
							
							
						
							
						</div>
						
					</div>
					
					<div class="modal-header" style="font-weight: bold">
						<medium>كلمة المرور البريد الإلكتروني <span class="badge badge-warning">لأول مرة, ويجب اعادة تعيينها</span></medium>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-6">
								<span id="epass">********</span>
							</div>
							<div class="col-6">
								<button id="showTextBtnE" class="btn btn-default btn-sm" onclick="showText('e', 'pass@20304');"><span class="fa fa-eye"></span> </button>
								<button id="hideTextBtnE" class="btn btn-default btn-sm" onclick="hideText('e');" style="display:none;"><span class="fa fa-eye-slash"></span> </button>
								<button id="copyTextBtnE" class="btn btn-default btn-sm" onclick="copyText('pass@20304');"><span class="fa fa-clipboard"></span> </button>
						
							</div>
						</div>
						
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
					</div>
				</div>
			</div>
		</div>
		
		<div id="changePhoneModal" class="modal fade" role="dialog" style="width:100%">
			<div class="modal-dialog" style="width: 60%;">
				<div class="modal-content" >
					<div class="modal-header">
						<h5 class="modal-title">تغيير رقم الهاتف</h5>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-3">
								<h6 class="mb-0" style="padding-bottom:30px;">رقم الهاتف الجديد</h6>
							</div>
							<div dir="ltr" class="col-sm-9 text-secondary">
								<input id="phoneNumber" type="text" class="form-control">
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
						<button type="button" class="btn btn-primary" onclick="openConfirmPhoneModal()">حفظ</button>
					</div>
				</div>
			</div>
		</div>

		<div id="confirmPhoneModal" class="modal fade" role="dialog" style="width:100%">
			<div class="modal-dialog" style="width: 60%;">
				<div class="modal-content" >
					<div class="modal-header">
						<h5 class="modal-title">هل أنت متأكد؟</h5>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-4">
								<h6 class="mb-0" style="padding-bottom:30px;">رقم الهاتف الجديد</h6>
							</div>
							<div class="col-sm-8 text-secondary">
								<div id="phoneNumberConfirm"></div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
						<button type="button" class="btn btn-primary" onclick="confirmChangePhoneModal()">حفظ</button>
					</div>
				</div>
			</div>
		</div>
		
				
				
				
				<footer dir="ltr" class="text-center text-md-start"  style="background-color: #eee;">
			<!-- Copyright -->
			<div class="text-center p-3">
				All Rights Reserved © 2008 - 2022				<a class="text-dark" href="https://www.wise.edu.jo" target="_blank"> The World Islamic Sciences and Education University</a>
				- Computer Center -v2.0
			</div>
			<!-- Copyright -->
		</footer>	
		<script type="text/javascript" src="assets/js/script.js"></script>
		<script type="text/javascript" src="assets/js/imask.js"></script>
	</body>
</html>