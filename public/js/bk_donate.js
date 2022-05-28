$("#adddonate").on("click",function(){
    $.get("/modals/addDonate",function(modal){
        $("#modal").html(modal)
        $("#bkaddDonateModal").modal("show")
    
        $("#bkaddDonateModal").on("hidden.bs.modal",function(){
            $("#bkaddDonateModal").modal("dispose")
            $("#modal").html("")
        })
    })
})

function edit_donate(id) {
    $.get(`/modals/bk_donate/${id}`, function (modal) {
        $("#modal").html(modal);
        $("#bkaddDonateModal").modal("show");

        $("#bkaddDonateModal").on("hidden.bs.modal", function () {
            $("#bkaddDonateModal").modal("dispose");
            $("#modal").html("");
        });
    });
}

function del_donate(id) {
    var yes = confirm("確認是否刪除此筆資料");
    if (yes) {
        $.ajax({
            type: "delete",
            url: `/back/bk_donate/${id}`,
            success: function () {
                location.reload();
            },
        });
    }    
}
