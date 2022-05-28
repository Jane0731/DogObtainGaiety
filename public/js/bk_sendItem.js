$(document).ready(function () {
    let statuss = document.getElementsByClassName("status");
    statuss.forEach(status => {
        console.log(status);

        if(parseInt(status.innerHTML)==0){
            status.innerHTML="尚未審核";
        }
        else{
            status.innerHTML="已審核";
        }
    });
});

function confirm_sendItem(id) {
    var yes = confirm("確認是否確認此筆資料");
    if (yes) {
        $.ajax({
            url: `/back/bk_sendItem/${id}`,
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

