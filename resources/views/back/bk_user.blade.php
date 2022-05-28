@extends("layouts.bk")
@section("css")
<link rel="stylesheet" href="{{asset('css/bk.css')}}">
@endsection

@section("main")
<caption style="text-align:center">
    <h1><i class="fas fa-user" style="margin-right: 15px"></i>會員資料管理表</h1>
</caption>
<table class="table borderless table-hover" style="word-break:break-all; word-wrap:break-all;font-size:15px" data-toggle="table" data-sortable="true" data-sort-class="table-active" data-search="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-show-columns-toggle-all="true" class="text-center">
    <thead>
        <tr>
            <th class="col-sm-auto" data-field="id" data-sortable="true">會員編號</th>
            <th class="col-sm-auto" data-field="name" data-sortable="true">會員名字</th>
            <th class="col-sm-auto" data-field="phone" data-sortable="true">聯絡電話</th>
            <th class="col-sm-auto" data-field="email" data-sortable="true">電子信箱</th>
        </tr>
    </thead>
    
    <tbody>
    @foreach($BKuser as $user)
        <tr>
            <td>{{$user->user_id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->email}}</td>
        </tr>
    @endforeach
    </tbody>
<table>
<div class="pagination">
    {{$BKuser->links()}}

</div>

@endsection