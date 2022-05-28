@extends("layouts.bk")
@section("css")
<link rel="stylesheet" href="{{asset('css/bk.css')}}">
@endsection

@section("main")
<!-- 新增日常紀錄資料 -->
<button style="border:0 #f4f3ef none;background-color:#f4f3ef;float: right;" id="adddaily">
    <i class="fas fa-plus" style="color:#000;font-size:25px"></i>
</button>
<caption style="text-align:center">
    <h1><i class="fas fa-calendar" style="margin-right: 15px"></i>日常紀錄管理表</h1>
</caption>
<table class="table borderless table-hover text-center" style="word-break:break-all; word-wrap:break-all;font-size:15px" data-toggle="table" data-sortable="true" data-sort-class="table-active" data-search="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-show-columns-toggle-all="true" class="text-center">
    <thead>
        <tr>
            <th class="col-sm-auto" data-field="id" data-sortable="true">狗狗編號</th>
            <th class="col-sm-2" data-field="pic" data-sortable="true">照片</th>
            <th class="col-sm-auto" data-field="des" data-sortable="true">描述</th>
            <th class="col-sm-auto" data-field="recordtime" data-sortable="true">紀錄時間</th>
            <th class="col-sm-auto">編輯</th>
            <th class="col-sm-auto">刪除</th>
        </tr>
    </thead>

    <tbody>
        @foreach($BKdailyrecord as $dailyrecord)
        <tr>
            <td>{{$dailyrecord->dog_id}}</td>
            <td><img src="{{asset('dog_daily_pic/'.$dailyrecord->record_pic)}}" alt="" style="width:60%"></td>
            <td>{{$dailyrecord->des}}</td>
            <td>{{$dailyrecord->record_time}}</td>
            <td>
                <button onclick="edit_dailyrecord('{{$dailyrecord->id}}')"  style="border:0 #F3EEE6 none;">
                    <i class="fas fa-edit" style="color:#000;font-size:25px"></i>
                </button>
            </td>
            <td>   
                <button onclick="del_dailyrecord('{{$dailyrecord->id}}')" style="border:0 #F3EEE6 none;">
                    <i class="fas fa-trash-alt" style="color:#000;font-size:25px"></i>
                </button>
            </td>
        </tr>
        
        @endforeach
        
    </tbody>
    
</table>
<br>
<div class="pagination">
    {{$BKdailyrecord->links()}}

</div>

@endsection