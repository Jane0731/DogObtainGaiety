let qnum;
let questions;
let score = 0;
$(document).ready(function () {
    if (confirm("以下測驗題目皆為『認識浪浪』的知識點\n1、每次測驗共五題\n2、皆為是非題")) {
        qnum = 0;
        questions = JSON.parse(
            document.getElementById("questions").dataset.questions
        );
        printquestion();
        document.getElementsByClassName("border")[0].style.display = "flex"
    }
    else{
        document.location.href = "popular_science";
    }
    // console.log(JSON.parse(questions)[0]["id"]);
});
function printquestion() {
    document.getElementById("number").innerHTML = "Q" + (qnum + 1) + ".";
    document.getElementById("question").innerHTML = questions[qnum]["question"];
    //console.log(document.getElementById("yes"));
}
function answer(ans) {
    document.getElementById("annotation").innerHTML =
        questions[qnum]["annotation"];
    if (parseInt(ans) == parseInt(questions[qnum]["answer"])) {
        document.getElementById("ModalTitle").innerHTML = "正確";
        $(".modal-content").removeClass("incorrect");
        $(".modal-content").addClass("correct");
        score += 1;
    } else {
        document.getElementById("ModalTitle").innerHTML = "錯誤";
        $(".modal-content").removeClass("correct");
        $(".modal-content").addClass("incorrect");
    }
    qnum++;
}
function next() {
    if (qnum < 5) {
        printquestion(qnum);
    } else if (qnum == 5) {
            setTimeout(function () {
            $(".modal-content").removeClass("incorrect");
            $(".modal-content").removeClass("correct");
            document.getElementById("ModalTitle").innerHTML = "浪浪學堂下課!!";
            document.getElementById("annotation").innerHTML ="成績：" + score + "/5";
            document.getElementsByClassName("modal_btn_c")[0].innerHTML =
                "回認識浪浪";
            qnum++;
            $("#answer").modal({
                keyboard: false,
                backdrop: "static",
            });
            $("#answer").modal("show");
        }, 500);
    } else {
        document.location.href = "popular_science";
    }
}
