<?php

session_start();

include("../../coniction.php");

$_SESSION['error'] = '';

if($_SERVER['REQUEST_METHOD']== "POST")
{
	//something was posted
	$username= $_POST['username'];
	$password= $_POST['password'];
	

	if(($username)&&!empty($password))
{
	//read from the database
	$query="select * from admin_page where username = '$username' limit 1";

	$result = mysqli_query($con,$query);

    if($result && mysqli_num_rows($result) > 0)
    {
        $user_data =mysqli_fetch_assoc($result);
        
        if($user_data['password']===$password)
        {
            $_SESSION['username'] = $user_data['username'];
            header("Location: user.php");
            die;
        }else{
            
            $_SESSION['error'] = "اسم المستخدم أو كلمة المرور خطأ";
            header("Location: Employee Services.php");
          
        }
    }else
    {
        $_SESSION['error'] = "اسم المستخدم أو كلمة المرور خطأ";
        header("Location: Employee Services.php");
    }

}
else
{
	$error = "please enter valid data";
}

}


?>