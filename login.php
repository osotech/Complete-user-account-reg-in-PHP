
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert User Data With Prepare Statement Using PDO in PHP</title>
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-6 justify-content-center col-md-offset-3 col-lg-offset-3">
      <h1 class="page-title text-center text-info"> Login</h1>
<form class="" id="login-form mb-3">
<p class="text-center mb-3" id="response"></p>
<div class="form-group">
  <label for="">Username</label>
  <input type="text" id="username" placeholder="Username or Email" autocomplete="off" class="form-control">
  <span id="username_error"></span>
</div>
<div class="form-group">
  <label for="">Password</label>
  <input type="password" id="password" placeholder="Password" autocomplete="off" class="form-control">
  <span id="password_error"></span>
</div>
<div class="form-group">
  <label for="rememberme"></label>
<input type="checkbox" id="rememberme" value="1" class="form-control-check"> <span class="text-warning">Remember Me</span>
</div>

<button type="button" id="login-btn" value="submit"  class="btn btn-primary">Login Now</button>
<p class="text-danger m-t-3 pull-right"> Forgot your password ? <a href="forgot-password.php" title="Click here to reset your password">Click Here</a> </p>
<br>
<p style="margin-top:12px; color:green;">Don't have an account ? <a href="index.php"> Register</a> </p>
</form>

    </div>

  </div>

</div>
<script src="bootstrap/jquery-3.3.1.min.js">

</script>
<script src="login.js">

</script>
</body>
</html>
