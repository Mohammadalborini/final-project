<?php

session_start();

include("coniction.php");


if($_SERVER['REQUEST_METHOD']== "POST")
{
	//something was posted
	$username= $_POST['username'];
	$password= $_POST['password'];
	

	if(($username)&&!empty($password))
{
	//read from the database
	$query="select * from student where Student_id = '$username' limit 1";

	$result = mysqli_query($con,$query);

    if($result && mysqli_num_rows($result) > 0)
    {
        $user_data =mysqli_fetch_assoc($result);
        
        if($user_data['Password']===$password)
        {
            $_SESSION['user_id'] = $user_data['user_id'];
            header("Location: student.php");
            die;
        }else{
            $error = "Wrong username or password";
            header("Location: WISE.php");
          
        }
    }else
    {
        $error = "Wrong username or password";
    }

}
else
{
	$error = "please enter valid data";
}

}


?>