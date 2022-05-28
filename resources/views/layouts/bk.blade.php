<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>後台</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  @yield("css")
  <link rel="stylesheet" href="{{asset('css/image1x1.css')}}">
  <link rel="stylesheet" href="{{asset('css/public.css')}}">
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script src="https://kit.fontawesome.com/2853c21d86.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css">

  <title>留住浪浪</title>
  <link href="{{asset('pic/LOGO.png')}}" rel="icon" type="image/x-icon">
</head>

<body>
  <input type="checkbox" id="check">
  <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
  </label>
  <div class="sidebar">
    <header>後臺管理</header>
    <a href="/back/bk_user">
      <div class="d-flex">
        <div class="col-2 text-center"><i class="fas fa-user"></i></div>
        <div class="col-9 justify-content-start">會員資料管理</div>
      </div>
    </a>
    <a href="/back/bk_dog">
      <div class="d-flex">
        <div class="col-2 text-center"><i class="fas fa-dog"></i></div>
        <div class="col-9 justify-content-start">狗狗資料管理</div>
      </div>
    </a>
    <a href="/back/bk_donate">
      <div class="d-flex">
        <div class="col-2 text-center"><i class="fas fa-dollar-sign"></i></div>
        <div class="col-9 justify-content-start">物資資料管理</div>
      </div>
    </a>
    <a href="/back/bk_order">
      <div class="d-flex">
        <div class="col-2 text-center"><i class="fas fa-shopping-bag "></i></div>
        <div class="col-9 justify-content-start">訂單資料管理</div>
      </div>
    </a>
    <a href="/back/bk_dailyRecord">
      <div class="d-flex">
        <div class="col-2 text-center"><i class="fas fa-calendar"></i></div>
        <div class="col-9 justify-content-start">日常紀錄管理</div>
      </div>
    </a>
    <a href="/back/bk_test">
      <div class="d-flex">
        <div class="col-2 text-center"><i class="fas fa-question-circle"></i></div>
        <div class="col-9 justify-content-start">學堂資料管理</div>
      </div>
    </a>
    <a href="/back/bk_sendItem">
      <div class="d-flex">
        <div class="col-2 text-center"><i class="fas fa-check-square"></i></div>
        <div class="col-9 justify-content-start">捐款物資審核</div>
      </div>
    </a>
    <a href="/back/bk_contact">
      <div class="d-flex">
        <div class="col-2 text-center"><i class="fas fa-comment "></i></div>
        <div class="col-9 justify-content-start">聯絡我們管理</div>
      </div>
    </a>
    <a href="/logout">
      <div class="d-flex">
        <div class="col-2 text-center"><i class="fas fa-angle-right"></i></div>
        <div class="col-9 justify-content-start">登出</div>
      </div>
    </a>
  </div>

  <div class="container" style="padding:1rem 1rem;">
    @yield("main")
  </div>

  <div id="modal"></div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
<script type="text/javascript" src="{{asset('js/bk_dog.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bk_donate.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bk_dailyRecord.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bk_test.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bk_sendItem.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bk_order.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bk_contact.js')}}"></script>

</html>