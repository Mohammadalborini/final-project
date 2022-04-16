<?php
session_start();
if ($_SESSION['error'] == ""){
    $_SESSION['error'] = "";
}else{
    $error = $_SESSION['error'];
}

include("coniction.php");




?>

<!DOCTYPE html>
<html dir="rtl">
<head>
	<title>
	الخدمات الأكاديمية والتسجيل الذاتي
	  </title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="icon" href="http://grades.wise.edu.jo:8889/assets/images/wiseicon.ico">
		<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;700;900&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="style/style.css">
	<style>
		.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}
.alert {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}

span{
	margin-right: 9rem;
}

		</style>
</head>
	<body>

	  <div class="container px-4 py-5 mx-auto">
		  <div class="card card0">
			  <div class="d-flex flex-lg-row flex-column-reverse">

				  <div class="card card1">
					<img style=" width:20%; margin:0 auto 0 auto; padding-top:10%; padding-bottom:0px;" src="http://grades.wise.edu.jo:8889/assets/images/logo.png" alt="">

					  <form method="post" action="login.php">
						<input type="hidden" name="alfa_token" value="38ca51eeb239de6a0cb5e17dc10d77c4">
						  <div class="row justify-content-center ">

							<div class="col-lg-8 my-4">
								<h5 class="mb-3" style="text-align:center;">جامعة العلوم الإسلامية العالمية</h5> <small class="text-muted"></small>
								<h5 class="mb-3" style="text-align:center;font-weight: bold;"> الخدمات الأكاديمية والتسجيل الذاتي</h5> <small class="text-muted"></small>

								<div class="form-group mt-5"> <input type="text" name="username" id="name" class="form-control" required=""> <label class="form-control-placeholder" for="name">	اسم المستخدم</label> </div>
								<div class="form-group mt-4"> <input type="password" name="password" id="mail" class="form-control" required=""> <label class="form-control-placeholder" for="mail">كلمة المرور</label> </div>
								<div class="row justify-content-center my-3"> <button type="submit" name="login" value="login" class="btn btn-success rounded-pill pr-5 pl-5">الدخول</button> </div>
							</div>					  
						  </div>
					  </form>
					  <?php if (isset($error)): ?>
						<div class="alert alert-danger" role="alert" style="display:unset !important">
										<span>	<?php echo $error; ?>  </span>
										</div>
                   				<?php
								$_SESSION['error'] = null; 
								endif ?>
					
				  </div>

				<div class="card card2"> <img id="image" src="http://grades.wise.edu.jo:8889/assets/images/man3.png" alt="wise"> </div>

			  </div>
		  </div>
		  		<footer dir="ltr" class="text-center text-md-start" style="background-color: #eee;">
			<!-- Copyright -->
			<div class="text-center p-3">
				All Rights Reserved © 2008 - 2022<a class="text-dark" href="https://www.wise.edu.jo" target="_blank"> The World Islamic Sciences and Education University</a>
				- Computer Center -v2.0
			</div>
			<!-- Copyright -->
		</footer>	  </div>
	

</body></html>