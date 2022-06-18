<?php 
include "header.php";
?>
<?php 
if (isset($_POST['id'])){
  $id = $_POST['id'];
  $_SESSION['id'] = $id;
  $result = $con->query("SELECT * FROM companies WHERE id='$id' ") or die($con->error);
    while ($row = $result->fetch_assoc()){

    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['The_Course'] = $row['The_Course'];
    $_SESSION['Training_method'] = $row['Training_method'];
    $_SESSION['Location'] = $row['Location'];
    $_SESSION['Loca_map'] = $row['Loca_map'];
    $_SESSION['Training_type'] = $row['Training_type'];
    $_SESSION['Certificates'] = $row['Certificates'];
    $_SESSION['imagename'] = $row['imagename'];
    $_SESSION['Exfile'] = $row['Exfile'];
     
  }}?>




 <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
             
                  <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit company information </h4>
                </div>
                <div class="card-body">
<?php
      $imagename = $_SESSION['imagename'];
      $Exfile= $_SESSION['Exfile'];
?>
<form action="" method="POST" enctype="multipart/form-data">
    <label>name</label>
    <input autocomplete="off" type="text" class="form-control" name="name" value="<?php echo $_SESSION['name']; ?>" >
    <label>The Course</label>
    <input autocomplete="off" type="text" class="form-control" name="The_Course" value="<?php echo $_SESSION['The_Course']; ?>" >
    <label>Training method</label>
    <input autocomplete="off" type="text" class="form-control" name="Training_method" value="<?php echo $_SESSION['Training_method']; ?>" >
    <label>Location</label>
    <input autocomplete="off" type="text" class="form-control" name="Location" value="<?php echo $_SESSION['Location']; ?>" >
    <label>Location map link</label>
    <input autocomplete="off" type="text" class="form-control" name="Loca_map" value="<?php echo $_SESSION['Loca_map']; ?>" >
    <label>Training_type</label>
    <input autocomplete="off" type="text" class="form-control" name="Training_type" value="<?php echo $_SESSION['Training_type']; ?>">
    <label>Certificates</label>
    <input autocomplete="off" type="text" class="form-control" name="Certificates" value="<?php echo $_SESSION['Certificates']; ?>">
    <label>Picture</label><br>
    <?php
    echo '
     <img src="../../upload/'.$imagename.'.'.$Exfile.'" width="100px" height="100px" alt="#"/>
     ';?>
    <input name="file" type="file" class="form-control">
 
    

    <div class="mt-5">
        <button type="submit" name="edit" value="save" class="btn btn-primary">Save changes</button>
        <a href="Available companies.php" onclick="javascript: return confirm('Are you sure?');" class="btn btn-danger">Cancel</a>
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
    $Loca_map = $_POST['Loca_map'];
    $Training_type = $_POST['Training_type'];
    $Certificates = $_POST['Certificates'];

    $imagename = $_SESSION['imagename'];
    $Exfile = $_SESSION['Exfile'];



  if (empty($_POST['file'])){

    $imagename = $_SESSION['imagename'];
    $Exfile = $_SESSION['Exfile'];
  
    $id1 = $_SESSION['id'];
    $sql= "UPDATE companies SET name='$name', The_Course ='$The_Course', Training_method='$Training_method', Location='$Location', Loca_map='$Loca_map',
    Training_type ='$Training_type', Certificates='$Certificates', imagename='$imagename', Exfile='$Exfile'  WHERE id = '$id1' ";
    mysqli_query($con, $sql); 
    echo "<script> alert('The data has been modified.') </script>";


}else {
            $file = $_FILES['file'];
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];
          
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
        
            $_SESSION['fileActualExt'] = $fileActualExt;
        
            $allowed = array('jpg', 'jpeg', 'png');
            
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
                            $sql= "UPDATE companies SET name='$name', The_Course ='$The_Course', Training_method='$Training_method', Location='$Location', Loca_map='$Loca_map',
                            Training_type ='$Training_type', Certificates='$Certificates', imagename='$fileNameDB', Exfile='$fileActualExt' WHERE id = '$id1'";
                            mysqli_query($con, $sql);
                            echo "<script> alert('The data has been modified.') </script>";
                         
                        }
                      }
                    }

        }
}
?>








