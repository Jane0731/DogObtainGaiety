@extends("layouts.bk")
@section("css")
<link rel="stylesheet" href="{{asset('css/bk.css')}}">
@endsection

@section("main")
<!-- 新增小測驗資料 -->
<button style="border:0 #f4f3ef none;background-color:#f4f3ef;float: right;" id="addtest">
    <i class="fas fa-plus" style="color:#000;font-size:25px"></i>
</button>
<caption style="text-align:center">
    <h1><i class="fas fa-question-circle" style="margin-right: 15px"></i>學堂資料管理表</h1>
</caption>
<table class="table borderless table-hover text-center" style="word-break:break-all; word-wrap:break-all;font-size:15px" data-toggle="table" data-sortable="true" data-sort-class="table-active" data-search="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-show-columns-toggle-all="true" class="text-center">
    <thead>
        <tr>
            <th class="col-sm-2" data-field="question" data-sortable="true">問題內容</th>
            <th class="col-sm-auto" data-field="answer" data-sortable="true">答案</th>
            <th class="col-sm-auto" data-field="annotation" data-sortable="true">解釋</th>
            <th class="col-sm-auto">編輯</th>
            <th class="col-sm-auto">刪除</th>
        </tr>
    </thead>

    <tbody>
        @foreach($BKtest as $test)
        <tr>
            <td>{{$test->question}}</td>
            <td class="answer">{{$test->answer}}</td>
            <td>{{$test->annotation}}</td>
            <td>
                <button onclick="edit_test('{{$test->id}}')"  style="border:0 #F3EEE6 none;">
                    <i class="fas fa-edit" style="color:#000;font-size:25px"></i>
                </button>
            </td>
            <td>   
                <button onclick="del_test('{{$test->id}}')" style="border:0 #F3EEE6 none;">
                    <i class="fas fa-trash-alt" style="color:#000;font-size:25px"></i>
                </button>
            </td>
        </tr>
        
        @endforeach
        
    </tbody>
    
</table>
<br>
<div class="pagination">
    {{$BKtest->links()}}
</div>

@endsection