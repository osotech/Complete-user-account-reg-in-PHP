$(document).ready(function(){
  $("#login-btn").on("click", function(event){
    //event.preventDefault();
    let username = $("#username").val();
    let password = $("#password").val();
    let submit =   $("#login-btn").val();
    let countError = false;


    if (username.trim().length =="" && password.trim().length=="") {
      countError = true;
      $("#username_error").html("Username is Required!").css({color:"red"});
        $("#username").css({border:"1px solid red"});

        $("#password_error").html("Password is Required!").css({color:"red"});
          $("#password").css({border:"1px solid red"});
    }else{
        $("#username_error").html("");
          $("#username").css({border:"2px solid green"});
            $("#password_error").html("");
          $("#password").css({border:"2px solid green"});
    }

    if (username!=="" && password!=="") {
      //sedn to server using ajax
      $.ajax({
        url:"login_process.php",
        method:"POST",
        data:{
          username:username,
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
