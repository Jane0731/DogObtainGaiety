@extends("layouts.footer")
@section("css")
<link rel="stylesheet" href="{{asset('css/forget.css')}}">
@endsection

@section("main")
<div class="container mb-5">
    <div class="border col col-md-10 offset-md-1 col-lg-8 offset-lg-2 ">
        
            <div class="forget_text py-3 ">忘記密碼</div>
            <div class="py-5 ">
                <img  class="img-fluid d-block mx-auto " src="{{asset('pic/lock.png')}}">
            </div>
            <div class="forget_text offset-1 col-10 offset-md-2 col-md-8">
                請輸入你的電子郵件地址以搜尋帳號，送出後至電子郵件查看備用密碼，使用備用密碼進行登入後請盡快更改密碼。
            </div>
            <div class="pt-4 text-center ">
                <form method="post">
                    @csrf
                    <div>
                        <input class="forget_input col-9 col-md-7" name="password" type="text" placeholder="帳號(電子郵件)">
                    </div>
                    <div class="pt-4 btn btn-lg col col-sm-4 col-lg-3">
                        <input class="forget_submit" type="submit" value="送出">
                    </div>
                </form>
            </div>
            <div class="forget_back mt-2">
                <button id="changelogin">返回登入</button>
            </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/login_regist.js')}}"></script>

@endsection