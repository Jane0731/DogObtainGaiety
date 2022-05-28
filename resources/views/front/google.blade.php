<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="671492114846-gi026mq6jqqafmltmnp30vb56ptcdi8c.apps.googleusercontent.com"/>
<!--jQuery-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<!--Bootstrap-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"></link>

<script src="https://apis.google.com/js/api:client.js"></script>

<!--登入、登出按鈕-->
<button id="GOOGLE_login" class="btn btn-large btn-primary">GOOGLE 登入</button> <button id="GOOGLE_logout" class="btn btn-large btn-warning">GOOGLE 登出</button>

目前狀態：
<span id="GOOGLE_STATUS_2"></span>
<script>
// 進行登入程序
var startApp = function() {
gapi.load("auth2", function() {
auth2 = gapi.auth2.init({
client_id: "671492114846-gi026mq6jqqafmltmnp30vb56ptcdi8c.apps.googleusercontent.com", // 用戶端 ID
cookiepolicy: "single_host_origin"
});
attachSignin(document.getElementById("GOOGLE_login"));
});
};

function attachSignin(element) {
auth2.attachClickHandler(element, {},
// 登入成功
function(googleUser) {
var profile = googleUser.getBasicProfile(),
$target = $("#GOOGLE_STATUS_2"),
html = "";

html += "ID: " + profile.getId() + "<br/>";
html += "會員暱稱： " + profile.getName() + "<br/>";
html += "會員頭像：" + profile.getImageUrl() + "<br/>";
html += "會員 email：" + profile.getEmail() + "<br/>";
$target.html(html);
},
// 登入失敗
function(error) {
$("#GOOGLE_STATUS_2").html("");
alert(JSON.stringify(error, undefined, 2));
});
}

startApp();

// 點擊登入
$("#GOOGLE_login").click(function() {
// 進行登入程序
startApp();
});

// 點擊登出
$("#GOOGLE_logout").click(function() {
var auth2 = gapi.auth2.getAuthInstance();
auth2.signOut().then(function() {
// 登出後的動作
$("#GOOGLE_STATUS_2").html("");
});
});
</script>