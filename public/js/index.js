$(document).ready(function () {
    $("body, html").scrollTop(0);
    center();
    let numberOfListItem = $(".nav li").length;
    let currentItem = 1;
    let isMoving = 0;
    $("html, body")
    .stop()
    .animate(
        {
            scrollTop: $(".p01").offset().top,
        },
        function () {
            isMoving = 0;
        }
    );
    //myanimate(1);
    // 滑鼠滾輪捲動時，移動圖片
    $(window).mousewheel(debounce((e) => scrollToCurrentItem(e), 100, true));
    function scrollToCurrentItem(e) {
        if (isMoving === 0) {
            isMoving = 1;
            if (e.deltaY < 0) {
                if (currentItem < numberOfListItem) {
                    currentItem++;
                }
            } else {
                if (currentItem > 1) {
                    currentItem--;
                }
            }
        }

        $("html, body")
            .stop()
            .animate(
                {
                    scrollTop: $(".p0" + currentItem).offset().top,
                },
                function () {
                    isMoving = 0;
                }
            );
    }

    //  點選右方導覽列時會到指定圖片
    for (var i = 0; i <= numberOfListItem; i++) {
        $(".nav li:eq(" + i + ")").click({ id: i }, function (e) {
            $(".nav li").removeClass("active");
            var page = e.data.id + 1;
            $("html,body").animate({
                scrollTop: $(".p0" + page).offset().top,
            });
            $(this).addClass("active");
            currentItem = e.data.id + 1;
        });
    }

    //  縮放網頁時，重新將導覽列置中
    $(window).resize(function () {
        center();
    });

    //  計算導覽列垂直置中的高度
    function center() {
        var pos = $(window).height() / 2 - $(".nav").height() / 2;
        $(".nav").css("top", pos);
    }

    // 監控 window scroll 事件，用來改變右方導覽列 active 的項目
    $(window).scroll(function () {
        // console.log("scroll", $(window).scrollTop());
        if (
            $(window).scrollTop() >= $(".p01").offset().top &&
            $(window).scrollTop() < $(".p02").offset().top
        ) {
            //除了被點擊到的游標，其他都恢復成原來的顏色
            $(".nav li").removeClass("active");
            $(".nav li:eq(0)").addClass("active");
        } else if (
            $(window).scrollTop() >= $(".p02").offset().top &&
            $(window).scrollTop() < $(".p03").offset().top
        ) {
            $(".nav li").removeClass("active");
            $(".nav li:eq(1)").addClass("active");
        } else if (
            $(window).scrollTop() >= $(".p03").offset().top &&
            $(window).scrollTop() < $(".p04").offset().top
        ) {
            $(".nav li").removeClass("active");
            $(".nav li:eq(2)").addClass("active");
        } else if (
            $(window).scrollTop() >= $(".p04").offset().top &&
            $(window).scrollTop() < $(".p05").offset().top
        ) {
            $(".nav li").removeClass("active");
            $(".nav li:eq(3)").addClass("active");
        } else if ($(window).scrollTop() >= $(".p05").offset().top) {
            $(".nav li").removeClass("active");
            $(".nav li:eq(4)").addClass("active");
        }
    });
});

/**
 * 將要 debounce 的函式代入 func 中，不用 invoke
 * wait，設定時間（毫秒）
 * immeditate 如果是 true 則在事件觸發時會立即執行，
 * 但事件結束時不會執行；如果是 false 則事件觸發時不會立即執行，
 * 但事件結束時會執行。
 **/
function debounce(func, wait, immediate) {
    var timeout;
    return function () {
        var context = this,
            args = arguments;
        var later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}
