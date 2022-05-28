$(document).ready(function () {
    let answers = document.getElementsByClassName("answer");
    answers.forEach(answer => {
        console.log(answer);

        if(parseInt(answer.innerHTML)==0){
            answer.innerHTML="錯誤";
        }
        else{
            answer.innerHTML="正確";
        }
    });
});

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$("#addtest").on("click", function () {
    $.get('/modals/addTest', function (modal) {
        $("#modal").html(modal);
        $("#bkaddTestModal").modal("show");

        $("#bkaddTestModal").on("hidden.bs.modal", function () {
            $("#bkaddTestModal").modal("dispose");
            $("#modal").html("");
        });
    });
});

function edit_test(id) {
    $.get(`/modals/bk_test/${id}`, function (modal) {
        $("#modal").html(modal);
        $("#bkeditTestModal").modal("show");

        $("#bkeditTestModal").on("hidden.bs.modal", function () {
            $("#bkeditTestModal").modal("dispose");
            $("#modal").html("");
        });
    });
}

function del_test(id) {
    var yes = confirm("確認是否刪除此筆資料");
    if (yes) {
        $.ajax({
            type: "delete",
            url: `/back/bk_test/${id}`,
            success: function () {
                location.reload();
            },
        });
    }    
}
