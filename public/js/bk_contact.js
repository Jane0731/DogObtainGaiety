$(document).ready(function () {
    let statuss = document.getElementsByClassName("situation");
    let types = document.getElementsByClassName("type");

    statuss.forEach(status => {
        console.log(status.innerHTML);

        if(parseInt(status.innerHTML)==0){
            status.innerHTML="尚未回復";
        }
        else{
            status.innerHTML="已回復";
        }
    });

    types.forEach(type => {
        console.log(type);

        if(parseInt(type.innerHTML)==1){
            type.innerHTML="助養";
        }
        else if(parseInt(type.innerHTML)==2){
            type.innerHTML="物資";
        }
        else if(parseInt(type.innerHTML)==3){
            type.innerHTML="捐款";
        }
        else if(parseInt(type.innerHTML)==4){
            type.innerHTML="其他";
        }
    });
});

function reply_contact(id) {
    
    const url = `https://doghouse.nutc.edu.tw/back/bk_contact/${id}`;
    console.log(url)
    var yes = confirm("確認是否回復此筆資料");
    if (yes) {
        $.ajax({
            url: url,
            method:"PATCH",
            success: function () {
                location.reload();
            },error:function(jqXHR){
                if (jqXHR.status===405){
                    location.reload();
                }
            }
        });
    }  
}

