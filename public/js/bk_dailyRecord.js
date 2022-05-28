$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$("#adddaily").on("click", function () {
    $.get('/modals/addDaily', function (modal) {
        $("#modal").html(modal);
        $("#bkaddDailyRecordModal").modal("show");

        $("#bkaddDailyRecordModal").on("hidden.bs.modal", function () {
            $("#bkaddDailyRecordModal").modal("dispose");
            $("#modal").html("");
        });
    });
});

function edit_dailyrecord(dog_id) {
    $.get(`/modals/bk_dailyRecord/${dog_id}`, function (modal) {
        $("#modal").html(modal);
        $("#bkeditDailyRecordModal").modal("show");

        $("#bkeditDailyRecordModal").on("hidden.bs.modal", function () {
            $("#bkeditDailyRecordModal").modal("dispose");
            $("#modal").html("");
        });
    });
}

function del_dailyrecord(dog_id) {
    var yes = confirm("確認是否刪除此筆資料");
    if (yes) {
        $.ajax({
            type: "delete",
            url: `/back/bk_dailyRecord/${dog_id}`,
            success: function () {
                location.reload();
            },
        });
    }    
}
