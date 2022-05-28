$("#editname").click(function () {
    if($('#name').attr("readonly")){
        $("#name").removeAttr("readonly");
        $("#name").css({ border: "3px solid black" });
    }
    else{
        $("#name").attr("readonly","readonly");
        $("#name").css({ border: "0"});
    }
  
});
$("#editpassword").click(function () {
    if($('#password').attr("readonly")){
        $("#password").removeAttr("readonly");
        $("#pw").css("display","block");
    }
    else{
        $("#password").attr("readonly","readonly");
        $("#pw").css("display","none");
    }
});
$("#editemail").click(function () {
    if($('#email').attr("readonly")){
        $("#email").removeAttr("readonly");
        $("#email").css({ border: "3px solid black" });
    }
    else{
        $("#email").attr("readonly","readonly");
        $("#email").css({ border: "0"});
    }
});
$("#editphone").click(function () {
    if($('#phone').attr("readonly")){
        $("#phone").removeAttr("readonly");
        $("#phone").css({ border: "3px solid black" });
    }
    else{
        $("#phone").attr("readonly","readonly");
        $("#phone").css({ border: "0"});
    }
});
