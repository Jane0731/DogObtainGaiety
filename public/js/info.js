$(".card").on('click',function(){
    $(".card").removeClass("selected_card");
    $(this).addClass("selected_card");
    let type=document.getElementsByClassName("selected_card")[0].dataset["type"];
    document.getElementsByName("Q-type")[0].value=type;
});