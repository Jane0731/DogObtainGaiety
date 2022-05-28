@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/cart.css')}}">
@endsection

@section("main")
<div class="container-fluid">
    <div class="border px-3 py-1 t_head">
        <div class="row text-center offset-2">
            <div class="col"></div>
            <div class="col cart_o">單價</div>
            <div class="col cart_o">數量</div>
            <div class="col cart_o">小計</div>

        </div>
    </div>
    <div class="mt-3">
        <!-- 助養 -->
        @if(isset($checkdog_array))
        @foreach ($checkdog_array as $checkdog)
        <div class="border p-3 my-2">
            <div class="row">
                <div class="col-5 col-md-2 d-flex align-items-center justify-content-center">
                    <img src="{{asset('dog_pic/'.$checkdog['item']['pic'])}}" alt="" class="col-8 dog_img">
                </div>
                <div class="col-7 col-md d-flex flex-column flex-md-row">
                    <div class="col cart_o d-flex align-items-center justify-content-md-center">{{$checkdog['item']['name']}}</div>
                    <div class="col cart_o d-none d-md-flex align-items-center justify-content-md-center">$200</div>
                    <div class="col cart_o d-flex align-items-center justify-content-md-center">
                        <div class="d-block d-md-none">數量：</div>{{$checkdog["qty"]}}
                    </div>
                    <div class="col cart_o dog_price d-flex align-items-center justify-content-md-center">
                        <div class="d-block d-md-none">總金額：</div>${{$checkdog["price"]}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
        <!-- 物資 -->

        @if(isset($checkitem_array))
        @foreach ($checkitem_array as $checkitem)
        <div class="border p-3">
            <div class="row">
                <div class="col-5 col-md-2 d-flex align-items-center justify-content-center">
                    <img src="{{asset('donate_item_pic/'.$checkitem['item']['item_pic'])}}" alt="" class="col-8">
                </div>
                <div class="col-7 col-md d-flex flex-column flex-md-row">
                    <div class="col cart_o d-flex align-items-center justify-content-md-center">{{$checkitem['item']['item_name']}}</div>
                    <div class="col cart_o d-none d-md-flex align-items-center justify-content-md-center">${{$checkitem['item']['price']}}</div>
                    <div class="col cart_o d-flex align-items-center justify-content-md-center">
                        <div class="d-block d-md-none">數量：</div>{{$checkitem["qty"]}}
                    </div>
                    <div class="col cart_o d-flex donate_price align-items-center justify-content-md-center">
                        <div class="d-block d-md-none">總金額：</div>${{$checkitem["price"]}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>

    <div class="d-flex justify-content-end my-3">
        <div class="border p-2">
            <div class="d-flex justify-content-center">
                <div class="cart_o">總金額({{ $qty}}份愛心)：</div>
                <div class="cart_o">{{ $price}}</div>
            </div>
        </div>
    </div>


    <div class="mt-3 mb-3">
        <div class="border">
            <form method="post" action="/orders">
                @csrf
                <div class="d-flex flex-wrap my-3 mx-3">
                    <label class="cart_o col-12 col-md-1 d-flex justify-content-md-end m-1" for="name">姓名：</label>
                    <input class="cart_input_text col-12 col-md" name="name" id="name" type="text" placeholder="name" value="@php echo Session::get('name') @endphp">
                </div>
                <div class="d-flex flex-wrap my-3 mx-3">
                    <label class="cart_o col-12 col-md-1 d-flex justify-content-md-end m-1" for="name">電子郵件：</label>
                    <input class="cart_input_text col-12 col-md" name="mail" id="mail" type="mail" placeholder="mail" value="@php echo Session::get('email') @endphp">
                </div>
        </div>
        <div class="d-flex justify-content-center ">
            <a href="javascript:history.back()" class="m-3 cart_b">回上一頁</a>
            <button type="submit" class="m-3 cart_b">確認送出</button>
        </div>
        </form>
    </div>
</div>

@endsection