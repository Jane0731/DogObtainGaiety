@extends("layouts.bk")
@section("css")
<link rel="stylesheet" href="{{asset('css/bk.css')}}">
@endsection

@section("main")

<caption style="text-align:center">
    <h1><i class="fas fa-check-square" style="margin-right: 15px"></i>捐款物資審核</h1>
</caption>
<table class="table borderless table-hover text-center" style="word-break:break-all; word-wrap:break-all;font-size:15px" data-toggle="table" data-sortable="true" data-sort-class="table-active" data-search="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-show-columns-toggle-all="true" class="text-center">
    <thead>
        <tr>
            <th class="col-sm-auto" data-field="donate_id" data-sortable="true">捐款編號</th>
            <th class="col-sm-auto" data-field="user_id" data-sortable="true">會員編號</th>
            <th class="col-sm-2" data-field="total" data-sortable="true">份數</th>
            <th class="col-sm-auto" data-field="status" data-sortable="true">狀態</th>
            <th class="col-sm-auto">審核</th>
        </tr>
    </thead>

    <tbody>
        @foreach($BKsendItem as $sendItem)
        <tr>            
            <td>{{$sendItem->donate_id}}</td>
            <td>{{$sendItem->user_id}}</td>
            <td>{{$sendItem->total}}</td>
            <td class="status">{{$sendItem->status}}</td>
            <td>
                <button onclick="confirm_sendItem('{{$sendItem->id}}')"  style="border:0 #F3EEE6 none;">
                    <i class="fas fa-check-circle" style="color:#000;font-size:25px"></i>
                </button>
            </td>
        </tr>
        
        @endforeach
        
    </tbody>
    
</table>
<br>
<div class="pagination">
    {{$BKsendItem->links()}}
</div>

@endsection