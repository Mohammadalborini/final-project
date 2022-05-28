<?php include('header.php') ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Companies offers</h4>
                </div>
                <div class="card-body">
                <?php
                     $result = $con->query("SELECT * FROM companies_offers") or die($conn->error);
                   ?>
                   <?php $queryResult = mysqli_num_rows($result); 
                   $_SESSION['numrow'] = $queryResult;
                   ?>
                  <table class="table table-hover">
                    <thead>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>The Course</th>
                      <th>Training method</th>
                      <th>Location</th>
                      <th>Training type</th>
                      <th>Certificates</th>
                      <th>Image</th>
                      <th></th>
                    </thead>
                    <tbody>
                    <?php while ($row = $result->fetch_assoc()):?> 
                      <tr>
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['name']; ?> </td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['The_Course']; ?></td>
                        <td><?php echo $row['Training_method']; ?></td>
                        <td><?php echo $row['Location']; ?></td>
                        <td><?php echo $row['Training_type']; ?></td>
                        <td><?php echo $row['Certificates']; ?></td>

                        <td>
                        <?php
                                $text1 = $row['imagename'];
                                $text2 = $row['Exfile'];
                                echo '<img src="../../upload/'.$text1.'.'.$text2.'" width="100px" height="100px" alt="#"/>';  ?> 
                          </td>
                        <td>
                        <form action="" method="POST" style="display: inline">
                              <button type="submit" name="accept" class="btn btn-primary">accept</button>
                              <input  type="hidden" name="id" value="<?php echo $row['id'];?>">
                            </form>
                            <form action="" method="POST" style="display: inline">
                              <input  type="hidden" name="del" value="<?php echo $row['id'];?>">
                              <button onclick="javascript: return confirm('Are you sure?');"  type="submit" name="delete" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        
                      </tr>
                  </tbody>
                  <?php endwhile; ?>
                  </table>
                </div>
              </div>
            </div>
       
          </div>
        </div>
      </div>
      <?php include('footer.php') ?>

<?php 

if (isset($_POST['accept'])) {
  $id = $_POST['id'];

  $result = $con->query("SELECT * FROM companies_offers WHERE id='$id' ") or die($con->error);
    while ($row = $result->fetch_assoc()){
    $name = $row['name'];
    $email =  $row['email'];
    $The_Course =  $row['The_Course'];
    $Training_method = $row['Training_method'];
    $Location =  $row['Location'];
    $Training_type = $row['Training_type'];
    $Certificates = $row['Certificates'];

    $imagename =   $row['imagename'];
    $Exfile = $row['Exfile'];
     
    $sql= "INSERT INTO companies(name, The_Course, Training_method, Location, Training_type, Certificates, imagename, Exfile)
     VALUES ('$name', '$The_Course', '$Training_method', '$Location', '$Training_type', '$Certificates',  '$imagename', '$Exfile') ";
      mysqli_query($con, $sql);
      echo "<script> alert('Successfully approved.') </script>";
      $sqls= "DELETE FROM `companies_offers` WHERE id = '$id'";
       mysqli_query($con, $sqls);
      

  }

}

?>

<?php

if (isset($_POST['delete'])){
  $id = $_POST['del'];
  $result = $con->query("SELECT * FROM companies_offers WHERE id='$id' ") or die($con->error);
    while ($row = $result->fetch_assoc()){
      $id = $row['id'];
    $sql = "DELETE FROM companies_offers WHERE id='$id' ";
            mysqli_query($con, $sql); 
            echo "<script> alert('The company has been removed.') </script>";
}

}
?>