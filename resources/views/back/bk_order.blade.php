@extends("layouts.bk")
@section("css")
<link rel="stylesheet" href="{{asset('css/bk.css')}}">
@endsection

@section("main")
<caption style="text-align:center">
    <h1><i class="fas fa-shopping-bag" style="margin-right: 15px"></i>訂單資料管理表</h1>
</caption>
<table class="table borderless table-hover" style="word-break:break-all; word-wrap:break-all;font-size:15px" data-toggle="table" data-sortable="true" data-sort-class="table-active" data-search="true" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-show-columns-toggle-all="true" class="text-center">
    <thead>
        <tr>
            <th class="col-sm-auto" data-field="name" data-sortable="true">會員姓名</th>
            <th class="col-sm-auto" data-field="information_dog" data-sortable="true">訂單資訊(狗狗)</th>
            <th class="col-sm-auto" data-field="information_donate" data-sortable="true">訂單資訊(物資)</th>
            <th class="col-sm-auto" data-field="time" data-sortable="true">訂單時間</th>
            <th class="col-sm-auto" data-field="paid" data-sortable="true">付款狀態</th>
            <th class="col-sm-auto" data-field="price" data-sortable="true">總金額</th>
        </tr>
    </thead>

    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->name}}</td>
            <td>
                <ul>
                    @foreach(unserialize($order->cart_donate) as $item)
                    <li>{{$item['item']['name']}}*{{$item['qty']}}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                <ul>
                    @if(!empty(unserialize($order->cart)))
                    @foreach(unserialize($order->cart) as $donate_item)
                    <li>{{$donate_item['item']['item_name']}}*{{$donate_item['qty']}}</li>
                    @endforeach
                    @endif
                </ul>
            </td>
            <td>{{$order->created_at}}</td>
            <td class="paid">{{$order->paid}}</td>
            <td>{{$order->total}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
<div class="pagination">
    {{$orders->links()}}

</div>

@endsection