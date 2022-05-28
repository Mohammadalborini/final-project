<?php include('header.php') ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Users</h4>
                </div>
                <div class="card-body">
                  <button class="btn btn-primary">Add User</button>
                  <table class="table table-hover">
                    <thead>
                      <th>ID</th>
                      <th>Full name</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Phone number</th>
                      <th>Date of birth</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Ali Ahmed</td>
                        <td>Ali@email.com</td>
                        <td>Ali123</td>
                        <td>0777367847</td>
                        <td>12/4/1995</td>
                        <td>
                          <button class="btn btn-primary">Edit</button>
                          <button class="btn btn-danger">Delete</button>
                        </td>
                        
                      </tr>
                  </tbody>
                  </table>
                </div>
              </div>
            </div>
       
          </div>
        </div>
      </div>
      <?php include('footer.php') ?>
