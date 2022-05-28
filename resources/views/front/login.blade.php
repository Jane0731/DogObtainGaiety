@extends("layouts.footer")
@section("css")
<link rel="stylesheet" href="{{asset('css/login_regist.css')}}">
@endsection

@section("main")
<div class="box">
    <div class="container-fluid-login" id="lg">
        <div class="col offset-sm-1 col-sm-10 offset-lg-5 col-lg-6 bg-title" id="login">
            <form method="post" action="/login">
                @csrf
                <div style="padding-top: 3rem;">
                    <h1>登入</h1>
                </div>
                <div style="padding-top: 1rem;text-align: center;">
                    <input name="account" type="email" placeholder="帳號" size=24 required>
                </div>
                <div style="padding-top: 1rem;text-align: center;">
                    <input name="password" type="password" placeholder="密碼" size=24 required>
                </div>
                <div class="d-grid gap-2 col-4 mx-auto" style="padding-top: 2rem;text-align: center;">
                    <input class="send_btn" type="submit" value="登入">
                </div>
            </form>
            <div class="d-flex justify-content-center" style="padding-top: 1rem;text-align: center;">
                <div class="col">
                    <hr>
                </div>
                <div class="col-8 col-lg-4">
                    <p class="p_font">第三方登入</p>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>
            <div class="d-flex justify-content-center " style="padding-top: 1rem;text-align: center;">
                <div>
                    <a href="/google/auth"><img class="p-2" src="{{asset('pic/google.png')}}" width="100"></a>                
                </div>
                
            </div>
            <div class="d-flex justify-content-center " style="padding-top: 1rem;text-align: center;">
                <div class="p-2">
                    <button id="changeregist">
                        <p class="pp_font">新用戶註冊</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/login_regist.js')}}"></script>
<script src="https://apis.google.com/js/api:client.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>

@endsection