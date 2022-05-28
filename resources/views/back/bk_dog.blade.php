@extends("layouts.bk")
@section("css")
<link rel="stylesheet" href="{{asset('css/bk.css')}}">
@endsection

@section("main")
<!-- 新增狗資料 -->
<button style="border:0 #f4f3ef none;background-color:#f4f3ef;float: right;" id="adddog">
    <i class="fas fa-plus" style="color:#000;font-size:25px"></i>
</button>
<caption style="text-align:center">
    <h1><i class="fas fa-dog" style="margin-right: 15px"></i>狗狗資料管理表</h1>
</caption>
<table class="table borderless table-hover text-center" style="word-break:break-all; word-wrap:break-all;font-size:15px" data-toggle="table" data-sortable="true" data-sort-class="table-active" data-search="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-show-columns-toggle-all="true" class="text-center">
    <thead>
        <tr>
            <th class="col-sm-auto" data-field="name" data-sortable="true">狗狗名字</th>
            <th class="col-sm-auto" data-field="kind" data-sortable="true">種類</th>
            <th class="col-sm-2" data-field="pic" data-sortable="true">照片</th>
            <th class="col-sm-auto" data-field="sex" data-sortable="true">性別</th>
            <th class="col-sm-auto" data-field="birthday" data-sortable="true">生日</th>
            <th class="col-sm-auto" data-field="personality" data-sortable="true">個性</th>
            <th class="col-sm-auto" data-field="story" data-sortable="true">小故事</th>
            <th class="col-sm-auto">編輯</th>
            <th class="col-sm-auto">刪除</th>
        </tr>
    </thead>

    <tbody>
        @foreach($BKdog as $dog)
        <tr>
            <td>{{$dog->name}}</td>
            <td>{{$dog->kind}}</td>
            <td><img src="{{asset('dog_pic/'.$dog->pic)}}" alt="" style="width:60%"></td>
            <td class="sex">{{$dog->sex}}</td>
            <td>{{$dog->birthday}}</td>
            <td>{{$dog->personality}}</td>
            <td>{{$dog->story}}</td>
            <td>
                <button onclick="edit_dog('{{$dog->dog_id}}')"  style="border:0 #F3EEE6 none;">
                    <i class="fas fa-edit" style="color:#000;font-size:25px"></i>
                </button>
            </td>
            <td>   
                <button onclick="del_dog('{{$dog->dog_id}}')" style="border:0 #F3EEE6 none;">
                    <i class="fas fa-trash-alt" style="color:#000;font-size:25px"></i>
                </button>
            </td>
        </tr>
        
        @endforeach
        
    </tbody>
    
</table>
<br>
<div class="pagination">
    {{$BKdog->links()}}

</div>

@endsection