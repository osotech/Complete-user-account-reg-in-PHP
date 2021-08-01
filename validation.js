$(document).ready(function(){
  $("#submit-btn").on("click", function(event){
    //event.preventDefault();
    let first_name = $("#first_name").val();
    let last_name = $("#last_name").val();
    let email = $("#email").val();
    let password = $("#password").val();
    let cpassword = $("#re_password").val();
    let submit =   $("#submit-btn").val();
    let countError = false;


    if (first_name.trim().length =="" && last_name.trim().length=="" && email.trim().length=="" && password.trim().length=="" && cpassword.trim().length=="") {
      countError = true;
      $("#first_name_error").html("First Name is Required!").css({color:"red"});
        $("#last_name_error").html("Last Name is Required!").css({color:"red"});
        $("#email_error").html("Your Email is Required!").css({color:"red"});
        $("#password_error").html("Password is Required!").css({color:"red"});
        $("#cpassword_error").html("Confirm Password is Required!").css({color:"red"});
    }else{
        $("#first_name_error").html("");
          $("#first_name").css({border:"2px solid green"});
            $("#last_name_error").html("");
          $("#email_error").html("");
            $("#password_error").html("");
              $("#cpassword_error").html("");
          $("#last_name").css({border:"2px solid green"});
          $("#email").css({border:"2px solid green"});
          $("#password").css({border:"2px solid green"});
          $("#re_password").css({border:"2px solid green"});
    }

    if (password !== cpassword) {
      $("#cpassword_error").html("Passwords not Match").css({color:"red"});
      $("#password").css({border:"1px solid red"});
      $("#re_password").css({border:"1px solid red"});
      counterError = true;
    }

    if (first_name!=="" && last_name!=="" && email!=="" && password!=="" && cpassword!=="") {
      //sedn to server using ajax
      $.ajax({
        url:"insert.php",
        method:"POST",
        data:{
          first_name:first_name,
          last_name:last_name,
          email:email,
          password:password,
          submit:submit
        },
        success:function(data){
          $("#response").html(data);
          console.log(data);
        }
      })

    }else{
      event.preventDefault();
    }


  })
})
