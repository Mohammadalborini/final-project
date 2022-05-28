<?php include "header.php" ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Available companies</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <?php
                     $result = $con->query("SELECT * FROM companies") or die($conn->error);
                   ?>
                   <?php $queryResult = mysqli_num_rows($result); 
                   $_SESSION['numrow'] = $queryResult;
                   ?>
                    <table class="table">
                      <thead class=" text-primary">
                      <th>ID</th>
                      <th>Name</th>
                      <th>The Course</th>
                      <th>Training method</th>
                      <th>Location</th>
                      <th>Training type</th>
                      <th>Certificates</th>
                      <th>Image</th>
                        <th>
                        </th>
                      </thead>
                      <tbody>
                      <?php while ($row = $result->fetch_assoc()):?> 

                        <?php
                         $_SESSION['id'] = $row['id'];
                         $_SESSION['name'] = $row['name'];
                         $_SESSION['The_Course'] = $row['The_Course'];
                         $_SESSION['Training_method'] = $row['Training_method'];
                         $_SESSION['Location'] = $row['Location'];
                         $_SESSION['Training_type'] = $row['Training_type'];
                         $_SESSION['Certificates'] = $row['Certificates'];
                         $_SESSION['imagename'] = $row['imagename'];
                         $_SESSION['Exfile'] = $row['Exfile'];
                        ?>
                      <tr>
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['name']; ?> </td>
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
                        <form action="edit_Available_companies.php" method="POST" style="display: inline">
                              <button type="submit" class="btn btn-primary">Edit</button>
                              <input  type="hidden" name="id" value="<?php echo $row['id'];?>">
                          </form>
                            <form action="" method="POST" style="display: inline">
                              <input  type="hidden" name="del" value="<?php echo $row['id'];?>">
                              <button onclick="javascript: return confirm('Are you sure?');"  type="submit" name="delete" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        
                      </tr>
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
      </div>
<?php include "footer.php" ?>
      

<?php

if (isset($_POST['delete'])){
  $id = $_POST['del'];
  $result = $con->query("SELECT * FROM companies WHERE id='$id' ") or die($con->error);
    while ($row = $result->fetch_assoc()){
      $id = $row['id'];
    $sql = "DELETE FROM companies WHERE id='$id' ";
            mysqli_query($con, $sql); 
            echo "<script> alert('The company has been removed.') </script>";
}

}
?>