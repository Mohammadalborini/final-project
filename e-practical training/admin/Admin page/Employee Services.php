<?php

include("coniction.php");
session_start();

if ($_SESSION['error'] == ""){
    $_SESSION['error'] = "";
}else{
    $error = $_SESSION['error'];
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>   بوابة خدمات العاملين</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="http://grades.wise.edu.jo:8889/assets/images/wiseicon.ico">
</head>
<center>


       <p align=center><image src="http://hr.wise.edu.jo:8889/header.png" ></p><hr>
    
        
            <br><br><br><br>
     
        

<form method=POST action="login_admin.php" >
    <table width=400 style="border:2px solid black">
    <tr >    
         <td align=RIGHT > <img src="http://hr.wise.edu.jo:8889/se.jpg" width="250"></td>
         <td> <img src="http://hr.wise.edu.jo:8889/logo.jpg" width="80" height="70"> </td> 
    </tr> 
    <tr><td bgcolor="white" style="line-height:1px;" colspan=2 >&nbsp;</td></tr>   
        <tr><td bgcolor="black" style="line-height:1px;" colspan=2 >&nbsp;</td></tr> 
        <tr><td bgcolor="white" style="line-height:5px;" colspan=2 >&nbsp;</td></tr>     
    <tr >
        <td align=right><input type=text name=username size=30 
        style="height:25px;font-size:14pt;" dir=rtl></td> 
        <td  align=center style='font-family: Arial;'><b > الرقم الوظيفي </td>
    </tr>
    <tr><td bgcolor="white" style="line-height:5px;" colspan=2 >&nbsp;</td></tr>
    <tr>
        <td align=right><input type=password  name=password size=30 
        style="height:25px;font-size:14pt;" dir=rtl></td>
        <td  align=center style='font-family: Arial;'><b> كلمة المرور </td>
    </tr>
    <tr><td bgcolor="white" style="line-height:5px;" colspan=2 >&nbsp;</td></tr>
    <tr><td bgcolor="black" style="line-height:1px;" colspan=2 >&nbsp;</td></tr>
    <tr><td bgcolor="white" style="line-height:5px;" colspan=2 >&nbsp;</td></tr>
    <tr>
        <td align=center><input type=submit name=admin value="دخول" 
        style='width:80px;height:28px ;font-family: Arial,Helvetica,sans-serif; font-size:16px;
    font-weight:bold ;color:Blue; 
    cursor: pointer;'></td>
        <td> &nbsp </td>
    </tr>
    </table>
    </form>
    <?php if (isset($error)): ?>
						<div class="alert alert-danger" role="alert" style="display:unset !important">
										<span>	<?php echo $error; ?>  </span>
										</div>
                   				<?php
								$_SESSION['error'] = null; 
								endif ?>
    <br><br><br>
<div id="footer" align="center">
        
<p style='font-family: Arial,Helvetica,sans-serif; font-size:16px;
    font-weight:bold ;color:red; '>جميع الحقوق محفوظه  &copyجامعة العلوم الإسلامية العالمية  - مركز الحاسب والمعلومات 2013</p>

   <p style='font-family: Arial,Helvetica,sans-serif; font-size:16px;
    font-weight:bold ;color:blue; '> 
       تصميم وتطوير: عبدالله الزقيبه & الدكتور يس الشريف
       </p>



</div>
   </center>   
</body>

</html>