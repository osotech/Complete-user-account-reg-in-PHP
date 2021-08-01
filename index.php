
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
      <h1 class="page-title text-center text-info"> Complete user Registration with Email Confirmation Using PDO in PHP</h1>
<form class="" id="register_form mb-3" action="" method="post">
<p class="text-center mb-3" id="response"></p>
<div class="form-group">
  <label for="">Frist Name</label>
  <input type="text" id="first_name" placeholder="First Name" autocomplete="off" class="form-control">
  <span id="first_name_error"></span>
</div>
<div class="form-group">
  <label for="">Last Name</label>
  <input type="text" id="last_name" placeholder="Last Name" autocomplete="off" class="form-control">
  <span id="last_name_error"></span>
</div>
<div class="form-group">
  <label for="">Email</label>
  <input type="text" id="email" placeholder="Email Address" autocomplete="off" class="form-control">
  <span id="email_error"></span>
</div>
<div class="form-group">
  <label for="">Password</label>
  <input type="password" id="password" placeholder="Password" autocomplete="off" class="form-control">
  <span id="password_error"></span>
</div>
<div class="form-group">
  <label for="">Confirm Password</label>
  <input type="password" id="re_password" placeholder="Confirm Password" autocomplete="off" class="form-control">
  <span id="cpassword_error"></span>
</div>
<button type="button" id="submit-btn" value="submit"  class="btn btn-primary ">Register Now</button>
<br>
<p style="margin-top:12px; color:green;">Already a Member ? <a href="login.php"> Login</a> </p>
</form>

    </div>

  </div>

</div>
<script src="bootstrap/jquery-3.3.1.min.js">

</script>
<script src="validation.js">

</script>
</body>
</html>
