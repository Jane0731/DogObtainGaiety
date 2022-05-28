@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/reserve_search.css')}}">
@endsection

@section("main")
<div class="container-fluid p-0">
    <div class="cover">
        <div class="row">
            <div class="col-sm-8" style="margin-top: 2%">
                <div class="row justify-content-end">
                    <div class="col-sm-2 col-md-auto " style="border-top:2px;border-radius: 12px;background-color: rgb(160, 160, 160);"></div>
                    <div class="col-sm-1 col-md-auto"></div>
                </div>
            </div>
        </div>
        <h1 class="word">
            <div>預約查詢</div>
        </h1>
    </div>
</div>
<div class="container">    
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">預約詳情</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">    
                    <div class="row">
                        <div class="col-5">
                            <img src="{{asset('pic/reserve_search.jpg')}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-7">
                            <h5>狗ㄉ名字：阿巴阿巴</h5><br>
                            <h5>預約日期：yyyy/mm/dd</h5><br>
                            <h5>預約時間：13:00</h5> 
                        </div>
                    </div>    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary">修改預約</button>
                <button type="button" class="btn btn-primary">取消預約</button>
                </div>
            </div>
            </div>
        </div>     
            <div class="card" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="row g-0">          
                    <div class="col-4 col-sm-4 col-md-4 amos-box2">
                        <img src="{{asset('pic/reserve_search.jpg')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    
                    <div class="col-8 col-sm-8 col-md-8">
                        <div class="card-body">
                            <h5 class="card-title ctitlel">預約探訪：狗的名字...</h5>
                            <h5 class="card-title ctitlel">日期/時間：yyyy/mm/dd 下午1:30</h5>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
@endsection