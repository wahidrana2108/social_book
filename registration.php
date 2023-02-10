<?php include("includes/header.php"); ?>
<body class="bg-secondary">
  <div class="vh-100 d-flex align-items-center">
    <div class="container">

        <div class="col-md-6 m-auto">
            <div class="card bg-dark text-light">
              <h1 class='card-header text-center' style='background-color: rgb(48, 48, 48);'>Registration</h1>
              <div class='card-body text-start bg-dark'>
                <form action='registration.php' method='post' enctype='multipart/form-data'>
                    <div class='form-group'>               
                        <label>Full Name</label>               
                        <input type='text' class='form-control' name='c_name' required>                
                    </div>
                
                    <div class='form-group'>
                        <label>Email Address</label>               
                        <input type='email' class='form-control' name='c_email' required>                
                    </div>
                
                    <div class='form-group'>               
                        <label>Enter Password</label>               
                        <input type='password' class='form-control' name='n_pass' required>               
                    </div>
                
                    <div class='form-group'>                
                        <label>Confirm Password</label>                
                        <input type='password' class='form-control' name='c_n_pass' required>               
                    </div>
                
                
                    <div class='form-group'>
                        <label>Select Country</label>                
                        <input type='text' class='form-control' name='c_country' required>                
                    </div>
                
                
                    <div class='form-group'>               
                        <label>Your Contract</label>                
                        <input type='number' class='form-control' name='c_contact' required>                
                    </div>
                
                    <div class='form-group pt-2'>                
                        <label>Your Recent Photo</label>                
                        <input type='file' class='form-control' name='c_image' required>
                    </div>
                
                
                    <div class='text-center mt-2'>                
                        <button type='submit' name='register' class='btn btn-primary'>Register</button>                
                    </div>
                    <small class="fw-bolder"><i>Already an account? <a href="login.php">Click here</a></i></small>
                
                </form>
              </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>
