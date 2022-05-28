@extends("layouts.bk")
@section("css")
<link rel="stylesheet" href="{{asset('css/bk.css')}}">
@endsection

@section("main")
<!-- 新增捐款資料 -->
<button style="border:0 #f4f3ef none;background-color:#f4f3ef;float: right;" id="adddonate">
    <i class="fas fa-plus" style="color:#000;font-size:25px"></i>
</button>
<caption style="text-align:center;">
    <h1><i class="fas fa-dollar-sign" style="margin-right: 15px"></i>物資資料管理表</h1>
</caption>
<table class="table borderless table-hover text-center" style="word-break:break-all; word-wrap:break-all;font-size:15px" data-toggle="table" data-sortable="true" data-sort-class="table-active" data-search="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-show-columns-toggle-all="true" class="text-center">
    <thead>
        <tr>
            <th class="col-sm-auto" data-field="name" data-sortable="true">捐款名稱</th>
            <th class="col-sm-2" data-field="pic" data-sortable="true">示意圖</th>
            <th class="col-sm-auto" data-field="des" data-sortable="true">主旨</th>
            <th class="col-sm-auto" data-field="release_time" data-sortable="true">開放時間</th>
            <th class="col-sm-auto" data-field="deadline" data-sortable="true">截止時間</th>
            <th class="col-sm-auto" data-field="price" data-sortable="true">單價</th>
            <th class="col-sm-auto" data-field="target_amount" data-sortable="true">目標份數</th>
            <th class="col-sm-auto">編輯</th>
            <th class="col-sm-auto">刪除</th>
        </tr>
    </thead>
    
    <tbody>
    @foreach($BKdonate as $donate)
        <tr>
            <td>{{$donate->item_name}}</td>
            <td><img src="{{asset('donate_item_pic/'.$donate->item_pic)}}" alt="" style="width:60%"></td>
            <td>{{$donate->des}}</td>
            <td>{{$donate->release_time}}</td>
            <td>{{$donate->deadline}}</td>
            <td>{{$donate->target_amount}}</td>
            <td>{{$donate->price}}</td>
            <td>
                <button onclick="edit_donate('{{$donate->donate_id}}')"  style="border:0 #F3EEE6 none;">
                    <i class="fas fa-edit" style="color:#000;font-size:25px"></i>
                </button>
            </td>
            <td>   
                <button onclick="del_donate('{{$donate->donate_id}}')" style="border:0 #F3EEE6 none;">
                    <i class="fas fa-trash-alt" style="color:#000;font-size:25px"></i>
                </button>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>
<br>
<div class="pagination">
    {{$BKdonate->links()}}
</div>

@endsection