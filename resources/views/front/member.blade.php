@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/member.css')}}">
@endsection

@section("main")
<div class="container-fluid p-0">
    <div class="cover">
        <div class="row">
            <div class="col-sm-8" style="margin-top: 2%">
                <div class="row justify-content-end">
                    <div class="col-sm-2 col-md-auto ti"></div>
                    <div class="col-sm-1 col-md-auto"></div>
                </div>
            </div>

        </div>
        <h1 class="word">
            <div>會員專區</div>
        </h1>
    </div>
    <div class="my-4 py-5">
        <div class="row justify-content-center">
            <div class="col-6 col-sm-4 col-md-3">
                <a href="/member/member_setting" class="card" title="資料修改">
                    <div class="card-img-top rounded">
                        <img src="{{asset('pic/charity.png')}}">
                    </div>
                    <div class="card-body">
                        <p class="card-text">資料修改</p>
                    </div>
                </a>
            </div>
            
            <div class="col-6 col-sm-4 col-md-3">
                <a href="/member/donate_record" class="card" title="物資紀錄">
                    <div class="card-img-top rounded">
                        <img src="{{asset('pic/pet.png')}}">
                    </div>
                    <div class="card-body">
                        <p class="card-text">物資紀錄</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-sm-4 col-md-3">
                <a href="/member/sponsor_record" class="card" title="助養紀錄">
                    <div class="card-img-top rounded">
                        <img src="{{asset('pic/bff.png')}}">
                    </div>
                    <div class="card-body">
                        <p class="card-text">助養紀錄</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3">
                <a href="/member/dog_daily_record_list" class="card" title="浪浪紀錄">
                    <div class="card-img-top rounded">
                        <img src="{{asset('pic/online-donation.png')}}">
                    </div>
                    <div class="card-body">
                        <p class="card-text">浪浪紀錄</p>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
</div>
@endsection