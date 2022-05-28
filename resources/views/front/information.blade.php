@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/info.css')}}">
@endsection

@section("main")
<div class="container-fluid p-0">
    <div class="cover">
        <div class="row ">
            <div class="col-sm-8" style="margin-top: 2%">
                <div class="row justify-content-end">
                    <div class="col-sm-2 col-md-auto " style="border-top:2px;border-radius: 12px;background-color: rgb(160, 160, 160);">
                    </div>
                    <div class="col-sm-1 col-md-auto"></div>
                </div>
            </div>

        </div>
        <h1 class="word">
            <div>聯絡我們</div>
        </h1>
    </div>
</div>
<div class="container">
    <div class="border mt-5 py-5 px-1 px-3 px-sm-5 mb-5 bg">
        <form class="form-horizontal" method="post">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 pb-3">
                    <div class="row word_input me-md-3">
                        姓名：
                        <div class="col-sm">
                            <input type="text" name="name" class="form-control" style="border-radius: 24px;" required>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 pb-3">
                    <div class="row word_input">
                        電話：
                        <div class="col-sm">
                            <input placeholder="0912345678" name="tel" type="text" class="form-control" style="border-radius: 24px;" pattern="09\d{8}" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row word_input">
                        電子郵件：
                        <div class="col-sm">
                            <input type="email" name="email" class="form-control" style="border-radius: 24px;" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-12  pt-3">
                    <div class="row word_input">
                        我想詢問：
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-center ">
                <div class="col-6 col-sm-5 col-xl-2 py-1 py-sm-3">
                    <a class="card mx-1 mx-sm-3 p-1 p-sm-3" data-type="1">
                        <div class="card-img-top rounded">
                            <img src="{{asset('pic/bff.png')}}">
                        </div>
                        <div class="card-body">
                            <p class="card-text">助養</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-5 col-xl-2 py-1 py-sm-3">
                    <a class="card mx-1 mx-sm-3 p-1 p-sm-3" data-type="2">
                        <div class="card-img-top rounded">
                            <img src="{{asset('pic/pet.png')}}">
                        </div>
                        <div class="card-body">
                            <p class="card-text">物資</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-5 col-xl-2 py-1 py-sm-3">
                    <a class="card mx-1 mx-sm-3 p-1 p-sm-3" data-type="3">
                        <div class="card-img-top rounded">
                            <img src="{{asset('pic/online-donation.png')}}">
                        </div>
                        <div class="card-body">
                            <p class="card-text">捐款</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-5 col-xl-2 py-1 py-sm-3">
                    <a class="card mx-1 mx-sm-3 p-1 p-sm-3" data-type="4">
                        <div class="card-img-top rounded">
                            <img src="{{asset('pic/charity.png')}}">
                        </div>
                        <div class="card-body">
                            <p class="card-text">其他</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-12">
                    <div class="row word_input">
                        內容：
                        <div class="col-sm">
                            <textarea class="form-control" name="des" style="border-radius: 24px;height: 200px;resize: none;" required id='memo'></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="Q-type" value="0">
            <div class="pt-5 send_btn_center">
                <input class="send_btn" type="submit" value="送出">
            </div>
        </form>
        <div class="iframe-rwd mt-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.626597324967!2d120.68158251536752!3d24.149748179319047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d68cf62e061%3A0x7091dd73273f6236!2z5ZyL56uL6Ie65Lit56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1629106881111!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/info.js')}}"></script>

@endsection