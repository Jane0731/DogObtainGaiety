
$(".btn-special").on("click", function () {
  
    let daily_des = $(this).parents()[2].getElementsByClassName("daily_des")[0].innerHTML;
    let daily_time = $(this).parents()[2].getElementsByClassName("daily_time")[0].innerHTML;
    let daily_pic = $(this).parents()[2].getElementsByClassName("daily_pic")[0].src;
    console.log($(this).parents()[2].getElementsByClassName("daily_pic")[0]);
    document.getElementById("daily_pic").src=daily_pic;

    document.getElementById("daily_des").innerHTML=daily_des;
    document.getElementById("daily_time").innerHTML=daily_time;


});