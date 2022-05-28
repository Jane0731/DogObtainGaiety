$(function () {
    // This button will increment the value
    $(".qtyplus").click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr("field");
        // Get its current value
        var currentVal = parseInt($("input[name=" + fieldName + "]").val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $("input[name=" + fieldName + "]").val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $("input[name=" + fieldName + "]").val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr("field");
        // Get its current value
        var currentVal = parseInt($("input[name=" + fieldName + "]").val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 1) {
            // Decrement one
            $("input[name=" + fieldName + "]").val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $("input[name=" + fieldName + "]").val(1);
        }
    });
    $("#checkdog").on("change", function () {
        let dog_qty = document.getElementsByClassName("dog_qty");
        let dog_qty_len = dog_qty.length;
        let dog_qty_all = 0;
        for (let i = 0; i < dog_qty_len; i++) {
            dog_qty_all += parseInt(dog_qty[i].value);
        }
        let dog_price = document.getElementsByClassName("dog_price");
        let dog_price_len = dog_price.length;
        let dog_price_all = 0;
        for (let n = 0; n < dog_price_len; n++) {
            dog_price_all += parseInt(dog_price[n].innerHTML);
        }
        let oldtotal = parseInt(document.getElementById("total").innerHTML);
        let oldprice = parseInt(document.getElementById("price").innerHTML);

        if (!$(this).is(":checked")) {
            let check_box_dogs =
                document.getElementsByClassName("check_box_dog");
            check_box_dogs.forEach((check_box_dog) => {
                check_box_dog.checked = false;
            });
            document.getElementById("checkAll").checked = false;
            document.getElementById("total").innerHTML = oldtotal - dog_qty_all;

            document.getElementById("price").innerHTML =
                oldprice - dog_price_all;
        } else {
            if ($("#checkdonate").is(":checked")) {
                document.getElementById("checkAll").checked = true;
            }
            let check_box_dogs =
                document.getElementsByClassName("check_box_dog");
            check_box_dogs.forEach((check_box_dog) => {
                check_box_dog.checked = true;
            });
            document.getElementById("total").innerHTML = oldtotal + dog_qty_all;

            document.getElementById("price").innerHTML =
                oldprice + dog_price_all;
        }
    });
    $("#checkdonate").on("change", function () {
        let donate_qty = document.getElementsByClassName("donate_qty");
        let donate_qty_len = donate_qty.length;
        let donate_qty_all = 0;
        for (let i = 0; i < donate_qty_len; i++) {
            donate_qty_all += parseInt(donate_qty[i].value);
        }
        let donate_price = document.getElementsByClassName("donate_price");
        let donate_price_len = donate_price.length;
        let donate_price_all = 0;
        for (let n = 0; n < donate_price_len; n++) {
            donate_price_all += parseInt(donate_price[n].innerHTML);
        }
        let oldtotal = parseInt(document.getElementById("total").innerHTML);
        let oldprice = parseInt(document.getElementById("price").innerHTML);

        if (!$(this).is(":checked")) {
            let check_box_items =
                document.getElementsByClassName("check_box_item");
            check_box_items.forEach((check_box_item) => {
                check_box_item.checked = false;
            });
            document.getElementById("checkAll").checked = false;
            document.getElementById("total").innerHTML =
                oldtotal - donate_qty_all;

            document.getElementById("price").innerHTML =
                oldprice - donate_price_all;
        } else {
            if ($("#checkdog").is(":checked")) {
                document.getElementById("checkAll").checked = true;
            }
            let check_box_items =
                document.getElementsByClassName("check_box_item");
            check_box_items.forEach((check_box_item) => {
                check_box_item.checked = true;
            });
            document.getElementById("total").innerHTML =
                oldtotal + donate_qty_all;

            document.getElementById("price").innerHTML =
                oldprice + donate_price_all;
        }
    });
    $("#checkAll").on("change", function () {
        if (!$(this).is(":checked")) {
            let check_box_dogs =
                document.getElementsByClassName("check_box_dog");
            check_box_dogs.forEach((check_box_dog) => {
                check_box_dog.checked = false;
            });
            let check_box_items =
                document.getElementsByClassName("check_box_item");
            check_box_items.forEach((check_box_item) => {
                check_box_item.checked = false;
            });
            document.getElementById("checkdog").checked = false;
            document.getElementById("checkdonate").checked = false;
            document.getElementById("total").innerHTML = 0;
            document.getElementById("price").innerHTML = 0;
        } else {
            let check_box_dogs =
                document.getElementsByClassName("check_box_dog");
            check_box_dogs.forEach((check_box_dog) => {
                check_box_dog.checked = true;
            });
            let check_box_items =
                document.getElementsByClassName("check_box_item");
            check_box_items.forEach((check_box_item) => {
                check_box_item.checked = true;
            });
            document.getElementById("checkdog").checked = true;
            document.getElementById("checkdonate").checked = true;
            //總數量
            let dog_qty = document.getElementsByClassName("dog_qty");
            let dog_qty_len = dog_qty.length;
            let dog_qty_all = 0;
            for (let i = 0; i < dog_qty_len; i++) {
                dog_qty_all += parseInt(dog_qty[i].value);
            }
            let donate_qty = document.getElementsByClassName("donate_qty");
            let donate_qty_len = donate_qty.length;
            let donate_qty_all = 0;
            for (let k = 0; k < donate_qty_len; k++) {
                donate_qty_all += parseInt(donate_qty[k].value);
            }
            document.getElementById("total").innerHTML =
                dog_qty_all + donate_qty_all;

            //總價格
            let dog_price = document.getElementsByClassName("dog_price");
            let dog_price_len = dog_price.length;
            let dog_price_all = 0;
            for (let n = 0; n < dog_price_len; n++) {
                dog_price_all += parseInt(dog_price[n].innerHTML);
            }

            let donate_price = document.getElementsByClassName("donate_price");
            let donate_price_len = donate_price.length;
            let donate_price_all = 0;
            for (let j = 0; j < donate_price_len; j++) {
                donate_price_all += parseInt(donate_price[j].innerHTML);
            }
            document.getElementById("price").innerHTML =
                dog_price_all + donate_price_all;
        }
    });
    $(".check_box_dog").on("change", function () {
        let oldtotal = parseInt(document.getElementById("total").innerHTML);
        let oldprice = parseInt(document.getElementById("price").innerHTML);
        let dog_qty = parseInt(
            $(this).parents()[1].getElementsByClassName("dog_qty")[0].value
        );
        let dog_price = parseInt(
            $(this).parents()[1].getElementsByClassName("dog_price")[0]
                .innerHTML
        );
        if (!$(this).is(":checked")) {
            document.getElementById("checkAll").checked = false;
            document.getElementById("checkdog").checked = false;
            document.getElementById("total").innerHTML = oldtotal - dog_qty;
            document.getElementById("price").innerHTML = oldprice - dog_price;
        } else {
            document.getElementById("total").innerHTML = oldtotal + dog_qty;
            document.getElementById("price").innerHTML = oldprice + dog_price;
            if (isSelectAll("check_box_dog") && isSelectAll("check_box_item")) {
                document.getElementById("checkAll").checked = true;
                document.getElementById("checkdog").checked = true;
            } else if (isSelectAll("check_box_dog")) {
                document.getElementById("checkdog").checked = true;
            }
        }
    });
    $(".check_box_item").on("change", function () {
        let oldtotal = parseInt(document.getElementById("total").innerHTML);
        let oldprice = parseInt(document.getElementById("price").innerHTML);
        let donate_qty = parseInt(
            $(this).parents()[1].getElementsByClassName("donate_qty")[0].value
        );
        let donate_price = parseInt(
            $(this).parents()[1].getElementsByClassName("donate_price")[0]
                .innerHTML
        );
        if (!$(this).is(":checked")) {
            document.getElementById("checkAll").checked = false;
            document.getElementById("checkdonate").checked = false;
            document.getElementById("total").innerHTML = oldtotal - donate_qty;
            document.getElementById("price").innerHTML =
                oldprice - donate_price;
        } else {
            document.getElementById("total").innerHTML = oldtotal + donate_qty;
            document.getElementById("price").innerHTML =
                oldprice + donate_price;
            if (isSelectAll("check_box_item")) {
                document.getElementById("checkdonate").checked = true;
                if (isSelectAll("check_box_dog")) {
                    document.getElementById("checkAll").checked = true;
                }
            }
        }
    });
    function isSelectAll(c) {
        let check_boxes = document.getElementsByClassName(c);
        let r = true;
        check_boxes.forEach((check_box) => {
            if (!check_box.checked) {
                r = false;
            }
        });
        return r;
    }
});
function del_cart(id) {
    var yes = confirm("確認是否清除此筆資料");
    if (yes) {
        location = "/remove-item/" + id;
    }
};
function del_cartdonate(id) {
    var yes = confirm("確認是否清除此筆資料");
    if (yes) {
        location = "/remove-item_donate/" + id;
    }
};
