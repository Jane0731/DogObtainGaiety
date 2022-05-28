@extends("layouts.footer")
@section("css")
<link rel="stylesheet" href="{{asset('css/login_regist.css')}}">
@endsection

@section("main")
<div class="box">
    <div class="container-fluid-regist" id="lg">
        <div class="col offset-sm-1 col-sm-10  col-lg-6 bg-title" id="regist">
            <form method="post">
                {!! csrf_field() !!}
                <div style="padding-top: 3rem;">
                    <h1>註冊</h1>
                </div>
                <div style="padding-top: 1rem;text-align: center;">
                    <input type="text" placeholder="暱稱" size=24 name="user[name]">
                </div>
                <div style="text-align: center;">
                    <p class="form-control-static text-danger">{{ $errors->first('user.name') }}</p>
                </div>

                <div style="padding-top: 1rem;text-align: center;">
                    <input type="text" placeholder="信箱" size=24 name="user[email]">
                </div>
                <div style="text-align: center;">
                    <p class="form-control-static text-danger">{{ $errors->first('user.email') }}</p>
                </div>

                <div style="padding-top: 1rem;text-align: center;">
                    <input type="text" oninput = "value=value.replace(/[^\d]/g,'')" placeholder="電話" size=24 name="user[phone]">
                </div>
                <div style="text-align: center;">
                    <p class="form-control-static text-danger">{{ $errors->first('user.phone') }}</p>
                </div>

                <div style="padding-top: 1rem;text-align: center;">
                    <input type="password"  placeholder="密碼" size=24 name="user[password]">
                </div>
                <div style="text-align: center;">
                    <p class="form-control-static text-danger">{{ $errors->first('user.password') }}</p>
                </div>

                <div style="padding-top: 1rem;text-align: center;">
                    <input type="password" placeholder="確認密碼" size=24 name="user[password_confirmation]">
                </div>
                <div style="text-align: center;">
                    <p class="form-control-static text-danger">{{ $errors->first('user.password_confirmation') }}</p>
                </div>

                <div class="d-grid gap-2 col-4 mx-auto" style="padding-top: 2rem;text-align: center;">
                    <input class="send_btn" type="submit" value="註冊">
                </div>

            </form>
            <div class="d-flex justify-content-center" style="padding-top: 1rem;text-align: center;">
                <div class="col">
                    <hr>
                </div>
                <div class="col-8 col-lg-4">
                    <p class="p_font">第三方註冊</p>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>
            <div class="d-flex justify-content-center " style="padding-top: 0.5rem;text-align: center;">
                <div>
                <a href="/google/auth"><img class="p-2" src="{{asset('pic/google.png')}}" width="105"></a>
                </div>
            </div>
            <div class="d-flex justify-content-center " style="padding-top: 1rem;text-align: center;">
                <div class="p-2">
                    <button id="changelogin">
                        <p class="pp_font">已有帳號?</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/login_regist.js')}}"></script>
@endsection