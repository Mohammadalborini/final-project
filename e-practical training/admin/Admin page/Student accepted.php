<?php include "header.php" ?>
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Approvals from students</h4>
            </div>
            <div class="card-body">

              <div id="typography">
                <?php
                     $result = $con->query("SELECT * FROM student_accepted") or die($conn->error);
                   ?>
                   <?php $queryResult = mysqli_num_rows($result); 
                   $_SESSION['numrow'] = $queryResult;
                   ?>
                <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Full Name
                        </th>
                        <th>
                          ID Student
                        </th>
                        <th>
                        Specialization
                        </th>
                        <th>
                        Company name
                        </th>
                        <th>
                        PDF
                        </th>
                        <th>
                        </th>
                      </thead>
                      <tbody>
                      <?php while ($row = $result->fetch_assoc()):?> 
                        <tr>
                          <td>
                          <?php echo $row['id']; ?> 
                          </td>
                          <td>
                          <?php echo $row['student_name']; ?> 
                          </td>
                          <td>
                          <?php echo $row['student_id']; ?> 
                          </td>
                          <td>
                          <?php echo $row['Specialization']; ?> 
                          </td>
                          <td>
                          <?php echo $row['Company_name']; ?> 
                          </td>
                          <td>
                            <?php $namepdf = $row['pdf_name']; 
                        echo  ' <a download href="../../pdf/'.$namepdf.'.pdf" >محمد عبدالحكيم توفيق عبدالله</a>';
                          ?>
                          </td>
                          <td>
                          <form action="" method="POST" style="display: inline">
                              <button type="submit" name="accept" class="btn btn-primary">Edit</button>
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
      
<?php include "footer.php" ?>
      
<?php

if (isset($_POST['delete'])){
  $id = $_POST['del'];
  $result = $con->query("SELECT * FROM student_accepted WHERE id='$id' ") or die($con->error);
    while ($row = $result->fetch_assoc()){
      $id = $row['id'];
    $sql = "DELETE FROM student_accepted WHERE id='$id' ";
            mysqli_query($con, $sql); 
            echo "<script> alert('The company has been removed.') </script>";
}

}
?>