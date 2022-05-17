<?php include "header.php" ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a class="btn btn-dark" href="./cv.php">See all CV's</a>  
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Jobs</h4>
                </div>
                <div class="card-body">
                <button class="btn btn-primary">Add</button>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Title
                        </th>
                        <th>
                          Experience
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Breaking News
                          </td>
                          <td>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, officia.
                          </td>
                          <td>
                            <img width="100px" height="100px" src="data:image/png;base64,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" alt="#">
                          </td>
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
      </div>
<?php include "footer.php" ?>
      