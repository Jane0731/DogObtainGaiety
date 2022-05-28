var startApp = function () {
    gapi.load("auth2", function () {
        auth2 = gapi.auth2.init({
            client_id:
                "671492114846-gi026mq6jqqafmltmnp30vb56ptcdi8c.apps.googleusercontent.com", // 用戶端 ID
            cookiepolicy: "single_host_origin",
        });
        attachSignin(document.getElementById("GOOGLE_login"));
    });
};

function attachSignin(element) {
    auth2.attachClickHandler(
        element,
        {},
        // 登入成功
        function (googleUser) {
            var profile = googleUser.getBasicProfile(),
                $target = $("#GOOGLE_STATUS_2"),
                html = "";

            html += "ID: " + profile.getId() + "<br/>";
            html += "會員暱稱： " + profile.getName() + "<br/>";
            html += "會員頭像：" + profile.getImageUrl() + "<br/>";
            html += "會員 email：" + profile.getEmail() + "<br/>";
            $target.html(html);
            document.location.href='member';

        },
        // 登入失敗
        function (error) {
            $("#GOOGLE_STATUS_2").html("");
            alert(JSON.stringify(error, undefined, 2));
        }
    );
}

startApp();

// 點擊登入
$("#GOOGLE_login").click(function () {
    // 進行登入程序
    startApp();
});

// 點擊登出
$("#GOOGLE_logout").click(function () {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        // 登出後的動作
        $("#GOOGLE_STATUS_2").html("");
    });
});
