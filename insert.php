<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$company = "Osotech Coding Platform";
$response="";
if (isset($_POST['submit'])) {
  require 'functions.php';

  $first_name = clean_input($_POST['first_name']);
  $last_name = clean_input($_POST['last_name']);
  $email = clean_input($_POST['email']);
  $password = clean_input($_POST['password']);

if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$response = "<p class='alert alert-danger text-danger'> Your email address is not valid</p>";
}else if(strlen($password) < 6){
$response = "<p class='alert alert-danger text-danger'> Password should be six characters long at least</p>";
}else{
  //check if the user already registered with the same email address
  require 'dbconn.php';
  $dbh = dbConnect();

  $checkEmail = $dbh->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
  $checkEmail->execute(array($email));
  if ($checkEmail->rowCount()==1) {
    //email already taken
  $response = "<p class='alert alert-danger text-danger'> This email address alreaady Exists</p>";
}else{
  //email not taken
  $activation_code = confirmationCode(15);
  //encrypt the user password
$passwordHashed = password_hash($password,PASSWORD_DEFAULT);
//save to db
$registered_date = date("Y-m-d");
$insert = $dbh->prepare("INSERT INTO users (first_name,last_name,email,password,activation_code,created_at) VALUES (?,?,?,?,?,?);");
if ($insert->execute(array($first_name,$last_name,$email,
$passwordHashed,$activation_code,$registered_date))) {
//activation link

$activationLink = "http://localhost/tut001/activate-account.php?email=$email&acode=".md5($activation_code);
$subject ="Account Activation at ".$company;
$message = "<p>Hello <b>".$first_name."</b>.<br />
            Thank you for your registration with us at ".$company.".<br />
            Please click the link below to confirm your account. <br /> <a href='".$activationLink."'> Confirm </a><br />
            <br />Regards.<br /><b>". $company."</b></p>";
            //send the user activation email
            /*  require 'PHPMailer/PHPMailer.php';
              require 'PHPMailer/SMTP.php';
              require 'PHPMailer/Exception.php';
              //new instance of PHPMailer
              require 'mail_config.php';

              $mail = new PHPMailer(true);

              //smtp settings
              $mail->SMTPDebug=0;
              $mail->IsSMTP();
              $mail->Host= "smtp.gmail.com";
              $mail->SMPTAuth = true;
              $mail->Username = _MY_USER_NAME;//this is your gmail account address example@gmail.com
              $mail->Password = _MY_USER_PASS;
              $mail->Port = 465;
              $mail->SMTPSecure = "ssl";

            // email setting

            $mail->setFrom(_MY_USER_NAME,$company);
            $mail->addAddress($email,$first_name);
            $mail->IsHTML(true);
            $mail->Subject=$subject;
            $mail->Body =$message;
            $mail->AltBody = $message;
            if ($mail->send()) {*/
              $response ="<b class='text-warning'>Hi,".$first_name."! Your account has been registered with Us,</b> but we need to verify your email.<br /> Verification code has been sent to <span class='text-info'>".$email.". </span> Click the link on the email to verify your Account
                    ";
            /*}else{
            $response ="<p class='text-warning'> Error Occured While Sending Activation Code :".$mail->ErrorInfo."</p>";
            }*/

              }else{
            $response = "<p class='alert alert-danger text-danger'> Internal Server Error Occured Try again...</p>";
              }
            }

            }
            echo $response;
            unset($dbh);

            }
