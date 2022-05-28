@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/cart.css')}}">
@endsection

@section("main")
<div class="container-fluid">
    <div class="border px-3 py-1 t_head">
        <div class="row text-center">
            <div class="offset-4 col-2 cart_o">單價</div>
            <div class="col-2 cart_o">數量</div>
            <div class="col-2 cart_o">小計</div>
            <div class="col-2 cart_o">更多</div>
        </div>
    </div>
    <form action="" method="post">
        @csrf
        <div class="border mt-3">
            @if(isset($carts)==0 && isset($carts_donate)==0)
            <div class="px-1 my-3 p-md-3">
                <div class="text-center">暫無資料</div>
            </div>
            @endif

            @if(isset($carts)!=0)
            @foreach ($carts as $cart)
            <div class="px-1 my-2 p-md-3">
                <div class="d-flex justify-content-around">
                    <div class="d-flex col-4 col-md-2">
                        <input type="checkbox" name="cart[]" id="check" value="{{$cart['item']['dog_id']}}" class="check_box_dog align-self-center">
                        <label for="check"></label>
                        <img src="{{asset('dog_pic/'.$cart['item']['pic'])}}" alt="" class="col-8 mx-1 dog_img align-self-center">
                    </div>
                    <div class="col-6 col-md-8 mx-1 mx-md-0 d-flex flex-wrap flex-md-nowrap">
                        <div class="col-12 col-md-3 my-1 cart_o d-flex align-items-center justify-content-start justify-content-md-center">
                            {{$cart['item']['name']}}
                        </div>
                        <div class="col-12 col-md-3 cart_o d-flex align-items-center justify-content-start justify-content-md-center">
                            <div class="d-block d-md-none">單價：</div>
                            <div class="item_name_text">
                                $
                            </div>
                            <div class="">
                                200
                            </div>
                        </div>
                        <div class="col-12 col-md-3 cart_o d-flex align-items-center justify-content-start justify-content-md-center">
                            <a href="/decrease-one-item/{{$cart['item']['dog_id']}}" class='act'>－</a>
                            <input type='text' name='quantity ' value='{{$cart["qty"]}}' class='dog_qty col-5' disabled />
                            <a href="/increase-one-item/{{$cart['item']['dog_id']}}" class='act'>＋</a>
                        </div>
                        <div class="col-12 col-md-3 cart_o item_total_price d-flex align-items-center justify-content-start justify-content-md-center">
                            <div class="item_name_text">
                                $
                            </div>
                            <div class="dog_price">
                                {{$cart["price"]}}
                            </div>
                        </div>
                    </div>
                    <div class="col-1 col-md-2 cart_o d-flex align-items-start align-items-md-center justify-content-end justify-content-md-center">
                        <a href="javascript:void(0);" onclick="del_cart('{{$cart['item']['dog_id']}}');">
                            <img src="{{asset('pic/delete.png')}}" alt="" height="25px">
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif

            @if(isset($carts_donate)!=0)
            @foreach ($carts_donate as $cart_donate)
            <div class="px-1 my-2 p-md-3">

                <div class="d-flex justify-content-around">

                    <div class="d-flex col-4 col-md-2">
                        <input type="checkbox" name="cart_donate[]" id="check" value="{{$cart_donate['item']['donate_id']}}" class="check_box_item align-self-center">
                        <label for="check"></label>
                        <img src="{{asset('donate_item_pic/'.$cart_donate['item']['item_pic'])}}" alt="" class="col-8 mx-1 dog_img align-self-center">
                    </div>
                    <div class="col-6 col-md-8 mx-1 mx-md-0 d-flex flex-wrap flex-md-nowrap">
                        <div class="col-12 col-md-3 my-1 cart_o d-flex align-items-center justify-content-start justify-content-md-center">
                            {{$cart_donate['item']['item_name']}}
                        </div>
                        <div class="col-12 col-md-3 cart_o d-flex align-items-center justify-content-start justify-content-md-center">
                            <div class="d-block d-md-none">單價：</div>
                            <div class="item_name_text">
                                $
                            </div>
                            <div class="">
                                {{$cart_donate['item']['price']}}
                            </div>
                        </div>
                        <div class="col-12 col-md-3 cart_o d-flex align-items-center justify-content-start justify-content-md-center">
                            <a href="/increase-one-item_donate/{{$cart_donate['item']['donate_id']}}" class='act'>＋</a>
                            <input type='text' name='quantity ' value='{{$cart_donate["qty"]}}' class='donate_qty col-5' disabled />
                            <a href="/decrease-one-item_donate/{{$cart_donate['item']['donate_id']}}" class='act'>－</a>
                        </div>
                        <div class="col-12 col-md-3 cart_o item_total_price d-flex align-items-center justify-content-start justify-content-md-center">
                            <div class="item_name_text">
                                $
                            </div>
                            <div class="donate_price">
                                {{$cart_donate["price"]}}
                            </div>
                        </div>
                    </div>
                    <div class="col-1 col-md-2 cart_o d-flex align-items-start align-items-md-center justify-content-end justify-content-md-center">
                        <a href="javascript:void(0);" onclick="del_cartdonate('{{$cart_donate['item']['donate_id']}}');">
                            <img src="{{asset('pic/delete.png')}}" alt="" height="25px">
                        </a>
                    </div>

                </div>
            </div>
            @endforeach
            @endif
        </div>

        <div class="my-3">
            <div class="border">
                <div class="row p-2 mx-3 mx-sm-5 mx-md-0">
                    <div class="col-12 col-md-4 align-self-center justify-content-around d-flex my-md-0 my-2 my-sm-0">
                        <div class="d-flex mx-1"><input type="checkbox" value="donate" id="checkdonate" class="align-self-center" /><span class="cart_o mx-1">物資</span></div>
                        <div class="d-flex mx-1"><input type="checkbox" value="dog" id="checkdog" class="align-self-center" /><span class="cart_o mx-1">浪浪</span></div>
                        <div class="d-flex mx-1"><input type="checkbox" value="donate" id="checkAll" class="align-self-center" /><span class="cart_o mx-1">全選</span></div>
                    </div>
                    <div class="col-7 col-md-5 d-flex justify-content-start justify-content-md-center">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="cart_t mx-2">總金額</div>
                            <div class="d-flex ">
                                <div class="cart_t">(</div>
                                <div class="cart_t" id="total">0</div>
                                <div class="cart_t">份愛心):</div>
                            </div>
                            <div class="d-flex mx-4 align-self-center">
                                <div class="col cart_p">$</div>
                                <div class="col cart_p" id="price">0</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-5 col-md-3 d-flex justify-content-end flex-wrap ">
                        <a href="/clear-cart" class="cart_b mx-1 align-self-center my-1 my-md-0">
                            <div>清空</div>
                        </a>
                        <input type="submit" class="cart_b mx-1 align-self-center" value="送出愛心">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="{{asset('js/cart.js')}}"></script>

@endsection