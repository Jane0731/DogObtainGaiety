@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/daily_record_detail.css')}}">
@endsection

@section("main")
<div class="container align-self-center my-5">
    <div class="border px-2 px-md-5">
        <div class="d-flex justify-content-center py-2 my-2 py-md-5 my-md-5">
            @if(!empty($data_daily[0]->record_pic))
            <div class="col col-md-3 d-flex justify-content-center border border-5 mx-2 bg-light">
                <img src="{{asset('dog_daily_pic/'.$data_daily[0]->record_pic)}}" class="img_round align-self-center" title="{{$data_daily[0]->des}}" alt="{{$data_daily[0]->des}}">
            </div>
            @else
            @endif
            @if(!empty($data_daily[1]->record_pic))
            <div class="col col-md-3 d-flex justify-content-center border border-5 mx-2 bg-light">
                <img src="{{asset('dog_daily_pic/'.$data_daily[1]->record_pic)}}" class="img_round align-self-center" title="{{$data_daily[1]->des}}" alt="{{$data_daily[1]->des}}">
            </div>
            @else
            @endif
            @if(!empty($data_daily[2]->record_pic))
            <div class="d-none d-md-flex col-md-3 justify-content-center border border-5 mx-2 bg-light">
                <img src="{{asset('dog_daily_pic/'.$data_daily[2]->record_pic)}}" class="img_round align-self-center" title="{{$data_daily[2]->des}}" alt="{{$data_daily[2]->des}}">
            </div>
            @else
            @endif

        </div>

        <div class="act_record my-2 my-md-5">
            <div class="row">
                <div class="col justify-content-center act_record_title">日常活動紀錄</div>
                <div class="border_hr"></div>
                @foreach($data_daily as $daily)
                <div class="col">
                    <div class="row p-2 p-md-3">
                        <div class="col-9 col-md-9 d-flex flex-column flex-md-row">
                            <div class="col-11 col-md-7 tdword ">
                                <div class="des daily_des">
                                    {{$daily->des}}
                                </div>
                            </div>

                            <div class="col-11 col-md-5 tdword">
                                <div class="d-flex justify-content-end daily_time">
                                    {{$daily->record_time}}
                                </div>
                            </div>
                        </div>

                        <img class="daily_pic" src="{{asset('dog_daily_pic/'.$daily->record_pic)}}" alt="" style="display:none">

                        <div class="col-3 d-flex justify-content-center">
                            <button type="button" class="btn-special  align-self-center" data-toggle="modal" data-target="#daily">MORE</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="daily" tabindex="-1" role="dialog" aria-labelledby="sponsorTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-end">
                <button type="button" class="close" data-dismiss="modal"><img src="{{asset('pic/cross.png')}}" alt="" style="width:30px"></button>
            </div>
            <div class="modal-body mx-3">
                <div class="d-flex flex-column flex-md-row justify-content-around mb-3">
                    <img alt="" id="daily_pic" class="offset-1 col-10 col-md-5 rounded-3 border border-3">
                    <div class="offset-md-1 col align-self-center mt-3">
                        <div class="row">
                            <div class="col-12" id="daily_time"></div>
                            <div class="col-12" id="daily_des"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-around">
                <button type="button" class="modal_btn_c" data-dismiss="modal">關閉</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/dog_daily_record.js')}}"></script>

@endsection