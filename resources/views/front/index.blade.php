<!doctype html>
<html>

<head>
<meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <title>留住浪浪</title>
    <link href="{{asset('pic/LOGO.png')}}" rel="icon" type="image/x-icon">
</head>

<body>
    <header>
        <div class="header">
            <a href="/"><img class="logo" src="pic/LOGO-2.png" alt="logo"></a>
            <div class="menu">
                <div class="list">
                    <div class="option">
                        <a href="/dog" class="hidelist">浪浪園地</a>
                        <a href="/donate" class="hidelist">浪浪物資</a>
                        <a href="/charity" class="hidelist">浪浪公益</a>
                        <a href="/popular_science" class="hidelist">認識浪浪</a>
                        <a href="/information" class="hidelist">聯絡我們</a>
                    </div>
                    <div class="burger"><img id="list" src="pic/burger.png" alt=""></div>
                </div>
                @if(session()->has('user_id'))
                <a class="member" href="/cart"><img src="pic/shopping-cart.png" alt="">
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
                <a class="member" href="/member"><img src="pic/user.png" alt=""></a>
                <a class="member" href="/logout"><img src="pic/logout.png" alt=""></a>
                @else
                <a class="member" href="/login"><img src="pic/enter.png" alt=""></a>
                @endif
            </div>
        </div>
        <script type="text/javascript" src="js/header.js"></script>
    </header>
    <div class="">
        <div class="nav">
            <ul>
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="p01">
            <div class="index_text">
                <span>起初，賴媽是在一個工廠旁餵食流浪狗</span><br><span>後來此地被列為重劃區</span>
            </div>
            <div class="d-flex">
                <img src="index/index_1.jpg" id="index_1" class="img-fluid"></img>
            </div>
        </div>
        <div class="p02">
            <div class="index_text">
                <span>賴媽不捨這些孩子們沒有家</span><br><span>便帶著牠們去烏日重新建立一個家</span>
            </div>
            <img src="index/index_2.jpg" id="index_2" class="img-fluid">
        </div>
        <div class="p03">
            <div class="index_text">
                <span>不過後來被周遭鄰居抗議</span><br><span>賴媽只好帶著牠們在去尋找下一個家</span>
            </div>
            <img src="index/index_3.jpg" id="index_3" class="img-fluid">
        </div>
        <div class="p04">
            <div class="index_text">
                <span>但因為此地在山區，水資源短缺</span><br><span>且交通也不便，賴媽必須自行將物資運到山上</span>
            </div>
            <img src="index/index_4.jpg" id="index_4" class="img-fluid">
        </div>

        <div class="p05">
        <div class="index_text">
                <span>賴媽雖然沒辦法給它們很好的環境</span><br>
	            <span>但她總是盡自己的綿薄之力給予他們最舒適的環境，</span><br>
			    <span>並真正把這些浪浪當作自己的家人。</span>
            </div>
            <img src="index/index_5.jpg" id="index_5" class="img-fluid">

        </div>
    </div>

    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

</body>

</html>