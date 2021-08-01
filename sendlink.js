$(document).ready(function(){
  $("#reset-link-btn").on("click", function(event){
    //event.preventDefault();
    let email = $("#email").val();
    let submit =   $("#reset-link-btn").val();
    let countError = false;


    if (email.trim().length =="") {
      countError = true;
      $("#email_error").html("Email Address is Required!").css({color:"red"});
        $("#email").css({border:"2px solid red"});
    }else{
        $("#email_error").html("");
          $("#email").css({border:"2px solid green"});

    }

    if (email!=="") {
      //sedn to server using ajax
      $.ajax({
        url:"send-link.php",
        method:"POST",
        data:{
          email:email,
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
