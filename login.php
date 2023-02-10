<?php include("includes/header.php"); ?>
<body>
  <div class="bg-secondary vh-100 d-flex align-items-center">
    <div class="container">
        <div class="col-md-6 m-auto">
            <div class="card bg-dark text-light">
              <h1 class='card-header text-center' style='background-color: rgb(48, 48, 48);'>LOGIN</h1>
              <div class='card-body text-start bg-dark'>
                  <form action="login.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label>Email Address</label>
                          <input type="email" class="form-control" name="c_email" required>
                      </div>
                      <div class="form-group">
                          <label>Enter Password</label>
                          <input type="password" class="form-control" name="c_pass" required>
                      </div>
                      <div class="text-center mt-2">
                          <button type="submit" name="login" value="login" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i> Login</button>
                      </div>
                      <small class="fw-bolder"><i>Forgot Password? <a href="forget_password.php">Click here</a></i></small><br>
                      <small class="fw-bolder"><i>Don't have an account? <a href="registration.php">Click here</a></i></small>
                    </form>
                </div>
          </div>
      </div>
  </div>
  <?php include("includes/footer.php"); ?>


