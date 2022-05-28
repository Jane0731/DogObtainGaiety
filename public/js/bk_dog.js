$(document).ready(function () {
    let sexs = document.getElementsByClassName("sex");
    sexs.forEach(sex => {
        console.log(sex);

        if(parseInt(sex.innerHTML)==0){
            sex.innerHTML="母";
        }
        else{
            sex.innerHTML="公";
        }
    });
});

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$("#adddog").on("click", function () {
    $.get("/modals/addDog", function (modal) {
        $("#modal").html(modal);
        $("#bkaddModal").modal("show");

        $("#bkaddModal").on("hidden.bs.modal", function () {
            $("#bkaddModal").modal("dispose");
            $("#modal").html("");
        });
    });
});

function edit_dog(dog_id) {
    $.get(`/modals/bk_dog/${dog_id}`, function (modal) {
        $("#modal").html(modal);
        $("#bkeditModal").modal("show");

        $("#bkeditModal").on("hidden.bs.modal", function () {
            $("#bkeditModal").modal("dispose");
            $("#modal").html("");
        });
    });
}

function del_dog(dog_id) {
    var yes = confirm("確認是否刪除此筆資料");
    if (yes) {
        $.ajax({
            type: "delete",
            url: `/back/bk_dog/${dog_id}`,
            success: function () {
                location.reload();
            },
        });
    }
}
