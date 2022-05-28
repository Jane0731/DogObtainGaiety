<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="{{asset('css/image1x1.css')}}">
    <script src="https://kit.fontawesome.com/2853c21d86.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://d3js.org/d3.v7.min.js"></script>
    @yield("css")
    <link rel="stylesheet" href="{{asset('css/public.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">

    <title>留住浪浪</title>
    <link href="{{asset('pic/LOGO.png')}}" rel="icon" type="image/x-icon">
</head>

<body>
    <header>
        <div class="header">
            <a href="/"><img class="logo" src="{{asset('pic/LOGO-2.png')}}" alt="logo"></a>
            <div class="menu">
                <div class="list">
                    <div class="option">
                        <a href="/dog" class="hidelist">浪浪園地</a>
                        <a href="/donate" class="hidelist">浪浪物資</a>
                        <a href="/charity" class="hidelist">浪浪公益</a>
                        <a href="/popular_science" class="hidelist">認識浪浪</a>
                        <a href="/information" class="hidelist">聯絡我們</a>
                    </div>
                    <div class="burger"><img id="list" src="{{asset('pic/burger.png')}}" alt=""></div>
                </div>
                @if(session()->has('user_id'))
                <a class="member" href="/cart"><img src="{{asset('pic/shopping-cart.png')}}" alt="">
                    <div>
                        @if((session()->has('cart'))&&(session()->has('cart_donate')))
                        {{session()->get('cart')->totalQty+session()->get('cart_donate')->totalQty}}

                        @elseif((session()->has('cart'))&&(!session()->has('cart_donate')))
                        {{session()->get('cart')->totalQty}}

                        @elseif((!session()->has('cart'))&&(session()->has('cart_donate')))
                        {{session()->get('cart_donate')->totalQty}}

                        @else
                        0
                        @endif
                    </div>
                </a>
                <a class="member" href="/member"><img src="{{asset('pic/user.png')}}" alt=""></a>
                <a class="member" href="/logout"><img src="{{asset('pic/logout.png')}}" alt=""></a>
                @else
                <a class="member" href="/login"><img src="{{asset('pic/enter.png')}}" alt=""></a>
                @endif
            </div>
        </div>
        <script type="text/javascript" src="{{asset('js/header.js')}}"></script>
    </header>
    <div class="main ">
        @yield("main")
    </div>
    <footer>
        <div class="container-xl">
            <div class="row footer py-5">
                <div class="row col-12 col-lg-3 f1">
                    <h2 class="col-12 pb-4">浪花之家</h2>
                    <p class="col-6 col-lg-12">電話：0926-007713</p>
                    <p class="col-6 col-lg-12">地址：台中市霧峰區中坑巷（原五光路）附近</p>
                </div>
                <div class="row col-12 col-lg-8 f2">
                    <div class="col-lg-2 mt-3 mx-2">
                        <h3 class="col-2 col-lg-12 title">浪浪園地</h3>
                        <div class="row col-12 ml-4 g-2">
                            <a href="/dog" class="col-4 col-lg-12">浪浪資訊</a>
                            <a href="/charity" class="col-4 col-lg-12">捐血狗資訊</a>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3 mx-2">
                        <h3 class="col-2 col-lg-12 title">浪浪物資</h3>
                        <div class="row col-12 ml-4 g-2">
                            <a href="/donate" class="col-4 col-lg-12">物資資訊</a>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3 mx-2">
                        <h3 class="col-2 col-lg-12 title">浪浪愛心</h3>
                        <div class="row col-12 ml-4 g-2">
                            <a href="/financial_statements" class="col-4 col-lg-12">愛心布告欄</a>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3 mx-2">
                        <h3 class="col-2 col-lg-12 title">認識浪浪</h3>
                        <div class="row col-12 ml-4 g-2">
                            <a href="/popular_science" class="col-4 col-lg-12">浪浪科普</a>
                            <a href="/test" class="col-4 col-lg-12">浪浪學堂</a>
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3 mx-2">
                        <h3 class="col-2 col-lg-12 title">聯絡我們</h3>
                        <div class="row col-12 ml-4 g-2">
                            <a href="/information" class="col-4 col-lg-12">聯絡表單</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>

</html>