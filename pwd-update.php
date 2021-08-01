
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Password</title>
   <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
 </head>
 <body>
   <div class="container">
     <div class="row">
       <div class="col-md-6 justify-content-center col-md-offset-3 col-lg-offset-3">
         <h1 class="page-title text-center text-info">Password Reset</h1>
         <hr class="mt-3">
   <form id="register_form mb-3">

     <center><p id="response"></p></center>
       <hr class="mb-3">
       <p class="text-warning text-bold">Just a few step more to finally reset your password</p>
   <div class="form-group">
     <label for="">Your Email</label>
     <input type="text" autocomplete="off" disabled id="email" class="form-control" value="osoetch@gmail.com" readonly>
     <input type="hidden" name="id" id="id" value="">
   </div>

   <div class="form-group">
     <label for="">New Password</label>
     <input type="text" autocomplete="off" id="password" class="form-control" placeholder="New Password">
     <span id="password_error"></span>

   </div>
   <div class="form-group">
     <label for="">Repeat Password</label>
     <input type="text" autocomplete="off" id="cpassword" class="form-control" placeholder="Repeat Password">
     <span id="cpassword_error"></span>

   </div>
   <button type="button" id="submitBtn" value="submit" class="btn btn-primary ">Update Password</button>
   <br />
   <p style="margin-top:10px;color:red"> Wanto to create new account ? <a href="index.php"> Click Here</a> </p>

   </form>
       </div>

     </div>
   </div>

 <script src="bootstrap/jquery-3.3.1.min.js">
 </script>
 <script src="script-update.js">
 </script>
   </body>
 </html>
