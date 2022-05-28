
@extends("layouts.bk")
@section("css")
<link rel="stylesheet" href="{{asset('css/bk.css')}}">
@endsection

@section("main")

<caption style="text-align:center">
    <h1><i class="fas fa-comment" style="margin-right: 15px"></i>聯絡我們管理</h1>
</caption>
<table class="table borderless table-hover text-center" style="word-break:break-all; word-wrap:break-all;font-size:15px" data-toggle="table" data-sortable="true" data-sort-class="table-active" data-search="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-show-columns-toggle-all="true" class="text-center">
    <thead>
        <tr>
            <th class="col-sm-auto" data-field="name" data-sortable="true">會員名字</th>
            <th class="col-sm-2" data-field="tel" data-sortable="true">聯絡電話</th>
            <th class="col-sm-auto" data-field="type" data-sortable="true">類型</th>
            <th class="col-sm-auto" data-field="status" data-sortable="true">狀態</th>
            <th class="col-sm-2" data-field="email" data-sortable="true">電子信箱</th>
            <th class="col-sm-auto" data-field="des" data-sortable="true">描述</th>
            <th class="col-sm-auto">回復</th>
        </tr>
    </thead>

    <tbody>
        @foreach($BKcontact as $contact)
        <tr>            
            <td>{{$contact->name}}</td>
            <td>{{$contact->tel}}</td>
            <td class="type">{{$contact->type}}</td>
            <td class="situation">{{$contact->status}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->des}}</td>
            <td>
                <button onclick="reply_contact('{{$contact->id}}')"  style="border:0 #F3EEE6 none;">
                    <i class="fas fa-reply" style="color:#000;font-size:25px"></i>
                </button>
            </td>
        </tr>
        
        @endforeach
        
    </tbody>
    
</table>
<br>
<div class="pagination">
    {{$BKcontact->links()}}
</div>

@endsection