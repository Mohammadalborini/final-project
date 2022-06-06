<?php include "header.php" ?>
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Student reviews</h4>
            </div>
            <div class="card-body">

              <div id="typography">
                <?php
                     $result = $con->query("SELECT * FROM companies_databases") or die($conn->error);
                   ?>
                   <?php $queryResult = mysqli_num_rows($result); 
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
                          Student ID
                        </th>
                        <th>
                        Commitment
                        </th>
                        <th>
                        The performance
                        </th>
                        <th>
                        Interaction
                        </th>
                        <th>
                        Secret assessment
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
                          <?php echo $row['evaluation1']; ?> 
                          </td>
                          <td>
                          <?php echo $row['evaluation2']; ?> 
                          </td>
                          <td>
                          <?php echo $row['evaluation3']; ?> 
                          </td>
                          <td>
                          <?php echo $row['secret_assessment']; ?> 
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
      
