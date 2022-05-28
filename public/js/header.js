let nowclass="hidelist";
let newclass="showlist";
$('.option a').addClass(nowclass);
$(".burger").click(function(){
    $('.option a').removeClass(nowclass);
    $('.option a').addClass(newclass);
    let a=nowclass;
    nowclass=newclass;
    newclass=a;
})