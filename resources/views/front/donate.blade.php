@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/donate.css')}}">
@endsection

@section("main")
<div class="container pt-5">
    <div class="border my-5">
        @foreach($data as $donate)
        <div class="d-flex flex-wrap justify-content-center">
            <div class="d-flex col-10 col-md-6 px-3 justify-content-center justify-content-md-end align-items-start">
                <img src="{{asset('donate_item_pic/'.$donate->item_pic)}}" alt="" class="col-10 col-md-9 donate_img mt-5 rounded-3">
            </div>
            <div class="d-flex flex-column col-12 col-md-6 px-3">
                <div class="d-flex flex-column mx-3">
                    <h1 class="d_title py-3 py-md-5">{{$donate->item_name}}</h1>
                    <div class="col py-3">
                        <div class="d_content py-1">需求數量{{$donate->target_amount}}份</div>
                        <div class="d_content py-1">NT${{$donate->price}}</div>
                    </div>
                    <div>
                        <div class="progress progress-striped col-12 col-md-10 col-xl-8">
                            @if(empty($donate->total))
                            <div class="progress-bar progress-bar-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>

                            @else
                            <div class="progress-bar progress-bar-info" role="progressbar" style="{{'width:'.$donate->target_amount/$donate->total.'%'}}" aria-valuenow="{{$donate->target_amount/$donate->total}}" aria-valuemin="0" aria-valuemax="100">{{$donate->target_amount/$donate->total}}%</div>

                            @endif
                        </div>
                    </div>
                </div>
                @if(session()->has('user_id'))
                <div class="d-flex flex-wrap justify-content-around  justify-content-md-start align-items-end mt-5 mt-md-auto mx-2 mx-md-3">
                    <button class="bu my-3 py-3 py-md-2 py-lg-3 px-3 px-md-2 px-lg-3" data-toggle="modal" data-target="#donate">我要捐款</button>
                    <button class="bu my-3 py-3 py-md-2 py-lg-3 px-3 px-md-2 px-lg-3 offset-md-1 offset-xl-2" type="button" data-toggle="modal" data-target="#sponsor">我要捐贈</button>
                </div>
                @else
                <div class="d-flex flex-wrap justify-content-around  justify-content-md-start align-items-end mt-5 mt-md-auto mx-2 mx-md-3">
                    <button class="bu my-3 py-3 py-md-2 py-lg-3 px-3 px-md-2 px-lg-3" onclick="login()">我要捐款</button>
                    <button class="bu my-3 py-3 py-md-2 py-lg-3 px-3 px-md-2 px-lg-3 offset-md-1 offset-xl-2" type="button" onclick="login()">我要捐贈</button>
                </div>
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-center pb-0 pb-md-5 pt-5">
            <div class="col-md-9 description">
                <div class="bc">商品用途：</div>
                <div class="bc">{{$donate->des}}</div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- 捐贈 -->
<div class="modal fade" id="sponsor" tabindex="-1" role="dialog" aria-labelledby="sponsorTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{$donate->item_name}}</h5>
                <button type="button" class="close" data-dismiss="modal"><img src="{{asset('pic/cross.png')}}" alt="" style="width:30px"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="offset-1 offset-md-0 col-10 col-md-6 d-flex justify-content-center">
                        <img src="{{asset('donate_item_pic/'.$donate->item_pic)}}" alt="" class="col-12 donate_img">
                    </div>
                    <div class="col py-3 align-self-center">
                        <div class="d-flex justify-content-center">
                            <div class="modal_title pb-3">捐贈數量</div>
                        </div>
                        <form id='myform' method='POST' action='{{$donate->donate_id}}/send_supplies'>
                            @csrf
                            <div class="d-flex justify-content-center">
                                <input type='button' value='-' class='qtyminus' field='send_quantity' />
                                <input type='text' name='send_quantity' value='1' class='qty' />
                                <input type='button' value='+' class='qtyplus' field='send_quantity' />
                            </div>
                            <div class="offset-2 col-8 py-3 d-flex flex-column justify-content-center">
                                <span>
                                    寄送地址：
                                </span>
                                <span>
                                    台中市南區五權南路778號
                                </span>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-around">
                <input type="submit" class="modal_btn_s" value="捐贈">
                </form>
                <button type="button" class="modal_btn_c" data-dismiss="modal">關閉</button>

            </div>
        </div>
    </div>
</div>
<!-- 捐款 -->
<div class="modal fade" id="donate" tabindex="-1" role="dialog" aria-labelledby="donateTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{$donate->item_name}}</h5>
                <button type="button" class="close" data-dismiss="modal"><img src="{{asset('pic/cross.png')}}" alt="" style="width:30px"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="offset-1 offset-md-0 col-10 col-md-6 d-flex justify-content-center">
                        <img src="{{asset('donate_item_pic/'.$donate->item_pic)}}" alt="" class="col-12 donate_img">
                    </div>
                    <div class="col px-3 align-self-center">
                        <div class="d-flex justify-content-center">
                            <div class="modal_title pb-3">捐款數量</div>
                        </div>
                        <form id='myform' method='POST' action="{{$donate->donate_id}}/donate_supplies">
                            @csrf
                            <div class="d-flex justify-content-center">
                                <input type='button' value='－' class='qtyminus' field='donate_quantity' />
                                <input type='text' name='donate_quantity' value='1' class='qty' />
                                <input type='button' value='＋' class='qtyplus' field='donate_quantity' />
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-around">
                <input type="submit" class="modal_btn_s" value="捐款"></button>
                </form>
                <button type="button" class="modal_btn_c" data-dismiss="modal">關閉</button>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('js/donate.js')}}"></script>

@endsection