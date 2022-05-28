<?php 
include "header.php";
?>
<?php 
if (isset($_POST['id'])){
  $id = $_POST['id'];
  $_SESSION['id'] = $id;
  $result = $con->query("SELECT * FROM student_accepted WHERE id='$id' ") or die($con->error);
    while ($row = $result->fetch_assoc()){

    $_SESSION['id'] = $row['id'];
    $_SESSION['student_name'] = $row['student_name'];
    $_SESSION['student_id'] = $row['student_id'];
    $_SESSION['Specialization'] = $row['Specialization'];
    $_SESSION['Company_name'] = $row['Company_name'];
    $_SESSION['pdf_name'] = $row['pdf_name'];
     
  }}?>




 <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
             
                  <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Student accepted </h4>
                </div>
                <div class="card-body">
<?php
      $imagename = $_SESSION['imagename'];
      $Exfile= $_SESSION['Exfile'];
?>
<form action="" method="POST" enctype="multipart/form-data">
    <label>Studetn Name</label>
    <input autocomplete="off" type="text" class="form-control" name="name" value="<?php echo $_SESSION['student_name']; ?>" >
    <label>ID Student</label>
    <input autocomplete="off" type="text" class="form-control" name="idstudent" value="<?php echo $_SESSION['student_id']; ?>" >
    <label>Specialization</label>
    <input autocomplete="off" type="text" class="form-control" name="Specialization" value="<?php echo $_SESSION['Specialization']; ?>" >
    <label>Company name</label>
    <input autocomplete="off" type="text" class="form-control" name="Company_name" value="<?php echo $_SESSION['Company_name']; ?>" >
    <label>PDF</label><br>
    <?php
    $namepdf =  $_SESSION['pdf_name'];
    echo '
    <a download href="../../pdf/'.$namepdf.'.pdf" >محمد عبدالحكيم توفيق عبدالله</a>
     ';?>
    <input name="file" type="file" class="form-control">
 
    

    <div class="mt-5">
        <button type="submit" name="edit" value="save" class="btn btn-primary">Save changes</button>
        <a href="Student accepted.php" onclick="javascript: return confirm('Are you sure?');" class="btn btn-danger">Cancel</a>
    </div>
    
  
</form>

</div>
</div>
</div>
</div>
</div>
</div>
<?php include "footer.php" ?>

<?php

if (isset($_POST['edit'])){

    $name = $_POST['name'];
    $The_Course = $_POST['The_Course'];
    $Training_method = $_POST['Training_method'];
    $Location = $_POST['Location'];
    $Training_type = $_POST['Training_type'];
    $Certificates = $_POST['Certificates'];

    $imagename = $_SESSION['imagename'];
    $Exfile = $_SESSION['Exfile'];

  if (empty($_POST['file'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
  
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $_SESSION['fileActualExt'] = $fileActualExt;

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 20000000) {
                  
    
                    $fileNameDB= $imagename;
                    $_SESSION['fileNameDB'] = $fileNameDB;
  
                    $fileNameNew=  $imagename.'.'.$fileActualExt;
                
                    $fileDestination = '../../upload/'.$fileNameNew;
  
                    move_uploaded_file($fileTmpName, $fileDestination);

                    $fileNameDB = $_SESSION['fileNameDB'];
                    $fileActualExt = $_SESSION['fileActualExt'];
        
                    $id1 = $_SESSION['id'];
                    $sql= "UPDATE student_accepted SET name='$name',The_Course ='$The_Course',Training_method='$Training_method',Location='$Location',
                    Training_type ='$Training_type', Certificates='$Certificates', imagename='$fileNameDB', Exfile='$fileActualExt' WHERE id = '$id1';";
                    mysqli_query($con, $sql);
                    echo "<script> alert('The data has been modified.') </script>";
                 
                }
              }
            }
          }

          $imagename = $_SESSION['imagename'];
          $Exfile = $_SESSION['Exfile'];
        
          $id1 = $_SESSION['id'];
          $sql= "UPDATE student_accepted SET name='$name', The_Course ='$The_Course', Training_method='$Training_method', Location='$Location',
          Training_type ='$Training_type', Certificates='$Certificates', imagename='$imagename', Exfile='$Exfile'  WHERE id = '$id1' ";
          mysqli_query($con, $sql);
          echo "<script> alert('The data has been modified.') </script>";
}
?>








