

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot  Password</title>
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
         <div class="col-md-6 justify-content-center col-md-offset-3 col-lg-offset-3">
         <h1 class="page-title text-center text-info">Forgot your Password? <br> </h1>
       <p><small> <span>Change your password in three easy steps. This will help you to secure your password!</span> </small></p>
       <ol>
         <li>Enter your email address below</li>
         <li> Our system will send you a temporary link</li>
         <li>Use the link to reset your Password</li>
       </ol>
       <hr class="mt-3">
       <p class="text-center" id="response"></p>
       <form class="">
         <div class="form-group">
           <label for="email"> Account Emaill address</label>
           <input type="text" id="email" placeholder="Email Address" class="form-control" autocomplete="off">
           <span id="email_error"></span>
         </div>
         <button type="button" id="reset-link-btn" value="submit" class="btn btn-primary">Send Reset Link</button>
         <p class="text-warning text-bold">Enter the email address you used during the resgistration on this website. Then we'll email a link to you</p>
  <br />
  <p style="margin-top:10px;color:red"> Remember Password ? <a href="login.php"> Login</a> </p>
       </form>
      </div>

    </div>

  </div>


<script src="bootstrap/jquery-3.3.1.min.js">

</script>
<script type="text/javascript" src="sendlink.js">

</script>
</body>
</html>
