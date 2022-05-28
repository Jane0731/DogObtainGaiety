@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/financial_statements.css')}}">
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
            <div>愛心佈告欄</div>
        </h1>
    </div>
</div>
<div class="container py-5">
    <div id="month" style="display:none">{{$month}}</div>
    <div id="year" style="display:none">{{$year}}</div>

    <div class="d-flex justify-content-center align-items-center py-4">
        <div><a href="/financial_statements?status=1&month={{$month}}&year={{$year}}" class="fa f_change px-3"><i class="fas fa-caret-left"></i></a></div>
        <div class="ftitle">{{$year}}年{{$month}}月</div>
        <div id="next"><a href="/financial_statements?status=2&month={{$month}}&year={{$year}}" class="fa f_change px-3"><i class="fas fa-caret-right"></i></a></div>
    </div>
    <div class="border py-4">
        <div class="d-sm-flex d-none justify-content-between justify-content-md-evenly align-items-start align-items-sm-center px-2 pb-4">
            <div class="ftitle col-sm-2 d-flex justify-content-center">暱稱</div>
            <div class="ftitle col-sm-2 d-flex justify-content-center">項目</div>
            <div class="ftitle col-sm-2 d-flex justify-content-center">金額/數目</div>
            <div class="ftitle col-sm-5 col-lg-3 d-flex justify-content-center">日期</div>
        </div>
        @if(empty($send_item)&&empty($donate_item)&&empty($dog))
        <div class="d-flex justify-content-around align-items-center p-2">
            <div class="fcontent">無紀錄</div>
        </div>
        @endif
        @if(!empty($send_item))
        @foreach($send_item as $send_item)
        <div class="d-flex justify-content-center p-2">
            <div class="col-5 col-sm-12 d-flex d-sm-none flex-column justify-content-between align-items-start align-items-sm-center">
                <div class="ftitle col-sm-2 d-flex justify-content-center">暱稱</div>
                <div class="ftitle col-sm-2 d-flex justify-content-center">項目</div>
                <div class="ftitle col-sm-2 d-flex justify-content-center">數目</div>
                <div class="ftitle col-sm-5 col-lg-3 d-flex justify-content-center">日期</div>
            </div>
            <div class="col-5 col-sm-12 d-flex flex-column flex-sm-row justify-content-between justify-content-md-evenly align-items-start align-items-sm-center">
                <div class="fcontent col-sm-2 d-flex justify-content-start justify-content-sm-center">{{$send_item->name}}</div>
                <div class="fcontent col-sm-2 d-flex justify-content-start justify-content-sm-center">{{$send_item->item_name}}</div>
                <div class="fcontent col-sm-2 d-flex justify-content-start justify-content-sm-center">{{$send_item->total}}份</div>
                <div class="fcontent col-sm-5 col-lg-3 d-flex justify-content-start justify-content-sm-center">{{$send_item->created_at}}</div>
            </div>
        </div>
        @endforeach
        @endif
        @if(!empty($donate_item))
        @foreach($donate_item as $donate_item)
        <div class="d-flex justify-content-center p-2">
            <div class="col-5 col-sm-12 d-flex d-sm-none flex-column justify-content-between align-items-start align-items-sm-center">
                <div class="ftitle col-sm-2 d-flex justify-content-center">暱稱</div>
                <div class="ftitle col-sm-2 d-flex justify-content-center">項目</div>
                <div class="ftitle col-sm-2 d-flex justify-content-center">金額</div>
                <div class="ftitle col-sm-5 col-lg-3 d-flex justify-content-center">日期</div>
            </div>
            <div class="col-5 col-sm-12 d-flex flex-column flex-sm-row justify-content-between justify-content-md-evenly align-items-start align-items-sm-center">
                <div class="fcontent col-sm-2 d-flex justify-content-start justify-content-sm-center">{{$donate_item->name}}</div>
                <div class="fcontent col-sm-2 d-flex justify-content-start justify-content-sm-center">{{$donate_item->item_name}}</div>
                <div class="fcontent col-sm-2 d-flex justify-content-start justify-content-sm-center">${{$donate_item->total*$donate_item->item_price}}</div>
                <div class="fcontent col-sm-5 col-lg-3 d-flex justify-content-start justify-content-sm-center">{{$donate_item->created_at}}</div>
            </div>
        </div>
        @endforeach
        @endif
        @if(!empty($dog))
        @foreach($dog as $dog)
        <div class="d-flex justify-content-center p-2">
            <div class="col-5 col-sm-12 d-flex d-sm-none flex-column justify-content-between align-items-start align-items-sm-center">
                <div class="ftitle col-sm-2 d-flex justify-content-center">暱稱</div>
                <div class="ftitle col-sm-2 d-flex justify-content-center">項目</div>
                <div class="ftitle col-sm-2 d-flex justify-content-center">金額</div>
                <div class="ftitle col-sm-5 col-lg-3 d-flex justify-content-center">日期</div>
            </div>
            <div class="col-5 col-sm-12 d-flex flex-column flex-sm-row justify-content-between justify-content-md-evenly align-items-start align-items-sm-center">
                <div class="fcontent col-sm-2 d-flex justify-content-start justify-content-sm-center">{{$dog->name}}</div>
                <div class="fcontent col-sm-2 d-flex justify-content-start justify-content-sm-center">助養</div>
                <div class="fcontent col-sm-2 d-flex justify-content-start justify-content-sm-center">${{$dog->times*200}}</div>
                <div class="fcontent col-sm-5 col-lg-3 d-flex justify-content-start justify-content-sm-center">{{$dog->created_at}}</div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
<script type="text/javascript" src="{{asset('js/financial_statements.js')}}"></script>

@endsection