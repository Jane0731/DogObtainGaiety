@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/sponsor_record.css')}}">
@endsection

@section("main")
<div class="container-fluid p-0">
    <div class="cover">
        <div class="row">
            <div class="col-sm-8" style="margin-top: 2%">
                <div class="row justify-content-end">
                    <div class="col-sm-2 col-md-auto " style="border-top:2px;border-radius: 12px;background-color: rgb(160, 160, 160);"></div>
                    <div class="col-sm-1 col-md-auto"></div>
                </div>
            </div>
        </div>
        <h1 class="word">
            <div>助養紀錄</div>
        </h1>
    </div>
</div>
<div class="container py-5">
    <div class="border ">
        <div class="row text-center py-4 border_title">
            <div class="col-4" style="font-weight:bold;">
                浪浪名字
            </div>
            <div class="col-4" style="font-weight:bold;">
                日期
            </div>
            <div class="col-4" style="font-weight:bold;">
                金額
            </div>
        </div>
        <div class="border_hr"></div>
        @if(empty($data))
        <div class="row text-center py-3 border_content ">
            <div class="col align-self-center">
               暫無紀錄
            </div>
        </div>
        @else
        @foreach($data as $dog_sponsor_record)
        <div class="row text-center py-3 border_content ">
            <div class="col-4 align-self-center">
                {{$dog_sponsor_record->name}}
            </div>
            <div class="col-4 align-self-center">
                {{$dog_sponsor_record->created_at}}
            </div>
            <div class="col-4 align-self-center">
                {{$dog_sponsor_record->times*200}}
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>


@endsection