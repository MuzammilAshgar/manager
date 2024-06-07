<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create New Account</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Css/signup.css">
</head>
  <body>
   <div class="sigup-form">
    <form action="../Php_work/signup.php" method="post">
        <div class="form-header">
        <h2>Sign Up</h2>
        <p>Sign Up to Mychat</p>
        </div>
        <div class="form-group">
        <label>Username</label>
        <input autocomplete="off" required class="form-control" type="text" name="username" placeholder="username">
        
    </div>
    <div class="form-group">
        <label>Password</label>
        <input maxlength="10" minlength="10" autocomplete="off" required class="form-control" type="password" name="spassword" placeholder="Enter 10 latter Password">
        
    </div>
    <div class="form-group">
        <label>Email</label>
        <input autocomplete="off" required class="form-control" type="email" name="semail" placeholder="@email.com">
        
    </div>
    <div class="form-group">
        <label>Country</label>
        <select class="form-select" name="Ucountry" required>
            <option selected>Select a Country</option>
            <option value="Pakistan">Pakistan</option>
            <option value="India">India</option>
            <option value="United States of America">Usa</option>
            <option value="china">Chin</option>
        </select>
    </div>
    <div class="form-group">
        <label>Gender</label>
        <select class="form-select" name="Ugender" required>
            <option selected>Select a Your Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="other">other</option>
            </select>
    </div>
    <div class="form-group">
        <label class="checkbox-inline"><input type="checkbox" required>  I accept the temp<a href="#">Terms of User</a>
        &amp;<a href="#"> Privacy Policy</a>
    </label>
    </div>

    
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block btn-lg"name="sign_up">Sign Up</button>
    </div>
    </form>
    <div class="text-center smail" style="color: while;">Already have an Account? <a href="../../signin.html">login Here</a></div>
</div>
</div>
   
  </body>
</html>