<?php 
include "header.php";
?>
<?php 
if (isset($_POST['id'])){
  $id = $_POST['id'];
  $_SESSION['id'] = $id;
  $result = $conn->query("SELECT * FROM slide_section WHERE id='$id' ") or die($conn->error);
    while ($row = $result->fetch_assoc()){
    $_SESSION['title'] = $row['title'];
     

    $_SESSION['sub_title'] =  $row['sub_title'];

    $_SESSION['description'] =  $row['description'];
      

    $_SESSION['name_of_blogger'] = $row['name_of_blogger'];
    

    $_SESSION['Date_of_publication'] =  $row['Data'];
    

    $_SESSION['imagename'] =   $row['imagename'];
      

    $_SESSION['Exfile'] = $row['Exfile'];
     
  }}?>




 <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
             
                  <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit</h4>
                </div>
                <div class="card-body">
<?php
      $imagename = $_SESSION['imagename'];
      $Exfile= $_SESSION['Exfile'];
?>
<form action="" method="POST" enctype="multipart/form-data">
    <label>Title</label>
    <input autocomplete="off" type="text" class="form-control" name="title" value="<?php echo $_SESSION['title']; ?>" >
    <label>Sub Title</label>
    <input autocomplete="off" type="text" class="form-control" name="sub_title" value="<?php echo $_SESSION['sub_title']; ?>" >
    <label>Description</label>
    <input autocomplete="off" type="text" class="form-control" name="description" value="<?php echo $_SESSION['description']; ?>" >
    <label>Name of blogger</label>
    <input autocomplete="off" type="text" class="form-control" name="Name_of_blogger" value="<?php echo $_SESSION['name_of_blogger']; ?>" >
    <label>Date of publication</label>
    <input autocomplete="off" type="date" class="form-control" name="Date_of_publication" value="<?php echo $_SESSION['Date_of_publication']; ?>">
    <label>Picture</label><br>
    <?php
    echo '
     <img src="../upload/'.$imagename.'.'.$Exfile.'" width="100px" height="100px" alt="#"/>
     ';?>
    <input name="file" type="file" class="form-control">
 
    

    <div class="mt-5">
        <button type="submit" name="edit_slide" value="save" class="btn btn-primary">Save changes</button>
        <a href="slide _section.php" class="btn btn-danger">Cancel</a>
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

if (isset($_POST['edit_slide'])){

    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $description = $_POST['description'];
    $Name_of_blogger = $_POST['Name_of_blogger'];
    $Date_of_publication = $_POST['Date_of_publication'];

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
                
                    $fileDestination = '../upload/'.$fileNameNew;
  
                    move_uploaded_file($fileTmpName, $fileDestination);

                    $fileNameDB = $_SESSION['fileNameDB'];
                    $fileActualExt = $_SESSION['fileActualExt'];
        
                    $id1 = $_SESSION['id'];
                    $sql= "UPDATE slide_section SET title='$title', sub_title='$sub_title', description ='$description', name_of_blogger='$Name_of_blogger', Data='$Date_of_publication', imagename='$fileNameDB', Exfile='$fileActualExt'  WHERE id = '$id1' ";
                    mysqli_query($conn, $sql);
                    echo "<script> alert('Slider Edited.') </script>";
                 
                }
              }
            }
          }

          $imagename = $_SESSION['imagename'];
          $Exfile = $_SESSION['Exfile'];
        
          $id1 = $_SESSION['id'];
          $sql= "UPDATE slide_section SET title='$title', sub_title='$sub_title', description ='$description', name_of_blogger='$Name_of_blogger', Data='$Date_of_publication', imagename='$imagename', Exfile='$Exfile'  WHERE id = '$id1' ";
          mysqli_query($conn, $sql);
          echo "<script> alert('Slider Edited.') </script>";
}
?>








