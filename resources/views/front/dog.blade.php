@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/dog_information.css')}}">
@endsection

@section("main")
<div class="info">
    <div class="container">
        <div class="row">
            @foreach($data as $dog)
            <img src="{{asset('dog_pic/'.$dog->pic)}}" alt="" class="offset-3 col-6 offset-sm-0 offset-md-1 col-md-4 col-md-3">
            <div class="col-12 col-sm">
                <h1 class="offset-2">{{$dog->name}}</h1><br><br>
                <div class="row">
                    <div class="offset-2 col-5">
                        <p>生日</p><br>
                        <p>性別</p><br>
                        <p>品種</p><br>
                    </div>
                    <div class="col-5">
                        <p>{{$dog->birthday}}</p><br>
                        <p>{{$dog->sex}}</p><br>
                        <p>{{$dog->kind}}</p><br>
                    </div>
                </div>
                <div class="row sponsor">
                    @if(session()->has('user_id'))
                    <div class="offset-2 col-4">
                        <button type="button" class="bu" data-toggle="modal" data-target="#sponsor">加入口袋</button>
                    </div>
                    <div class="offset-1 col-4">
                        <a href="/dog/{{$dog->dog_id}}/add-to-cart_r" class="bu">立即助養</a>
                    </div>
                    @else
                    <div class="offset-2 col-4">
                        <button type="button" class="bu" onclick="login()">加入口袋</button>
                    </div>
                    <div class="offset-1 col-4">
                        <button type="button" class="bu" onclick="login()">立即助養</button>
                    </div>
                    @endif
                <div class="offset-2 col-10 mt-3">
                    <span>※助養金額以一份200元為單位。</span>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="healthy">
    <div class="container">
        <div class="row">
            <h1 class="offset-md-1 col-md-3">健康狀況</h1>
            <div class="row">
                <div class="offset-2 col-5">
                    <p>晶片</p><br>
                    <p>結紮</p><br>
                    <p>施打疫苗</p><br>
                </div>
                <div class="col-3">
                    <p>未植入晶片</p><br>
                    <p>已結紮</p><br>
                    <p>已施打疫苗</p><br>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="story">
    <div class="container">
        <div class="row">
            <h1 class="offset-md-1 col-md-10 ">介紹</h1>
            <div class="row">
                <div class="offset-md-2 col-md-10">
                    <p class="introduce ">{{$dog->story}}</p><br>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 加入口袋名單 -->
<div class="modal fade" id="sponsor" tabindex="-1" role="dialog" aria-labelledby="sponsorTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{$dog->name}}</h5>
                <button type="button" class="close" data-dismiss="modal"><img src="{{asset('pic/cross.png')}}" alt="" style="width:30px"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <img src="{{asset('dog_pic/'.$dog->pic)}}" alt="" class="col-md-6  donate_img">
                    <div class="col px-3">
                        <div class="d-flex justify-content-center">
                            <div class="modal_title pb-3">助養數量</div>
                        </div>
                        <form id='myform' method='POST'>
                            @csrf
                            <div class="d-flex justify-content-center ">
                                <input type='button' value='-' class='qtyminus' field='quantity' />
                                <input type='text' name='quantity' value='1' class='qty ' />
                                <input type='button' value='+' class='qtyplus' field='quantity' />
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-around">
                <input type="submit" class="modal_btn_s" value="助養"></button>
                </form>
                <button type="button" class="modal_btn_c" data-dismiss="modal">關閉</button>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/dog.js')}}"></script>

@endsection