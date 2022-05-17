<?php include('header.php') ?>
<style>
    .feedback-text {
        text-overflow: ellipsis !important;
        white-space: nowrap !important;
        overflow: hidden !important;
        width:500px !important; 
    }
</style>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Feedback</h4>
                </div>
                <div class="card-body">
                  <button class="btn btn-primary">Add</button>
                  <table class="table table-hover">
                    <thead>
                      <th>User ID</th>
                      <th>Feedback</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><p class="feedback-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, sed?</p></td>
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
