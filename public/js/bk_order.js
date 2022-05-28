window.onload = function () {
    let paid = document.getElementsByClassName("paid");
    console.log();
    let cnt=0;
    paid.forEach(paids => {
        if(parseInt(paid[cnt].innerHTML)==0){
            document.getElementsByClassName("paid")[cnt].innerHTML="尚未付款";
        }
        else{
            document.getElementsByClassName("paid")[cnt].innerHTML="已付款";
        }
        cnt++;
    });
};
