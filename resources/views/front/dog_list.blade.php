@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/dog_list.css')}}">
@endsection

@section("main")
<div class="container-fluid p-0">
    <div class="cover">
        <div class="row">
            <div class="col-sm-8" style="margin-top: 2%">
                <div class="row justify-content-end">
                    <div class="col-sm-2 col-md-auto " style="border-top:2px;border-radius: 12px;background-color: rgb(160, 160, 160);">
                    </div>
                    <div class="col-sm-1 col-md-auto"></div>
                </div>
            </div>

        </div>
        <h1 class="word">
            <div>浪浪園地</div>
        </h1>
    </div>
</div>
<div class="container my-3 my-md-5">

    <div class="d-flex flex-wrap justify-content-evenly pb-5 mx-1">
        @foreach($data as $dog)
        <div class="offset-sm-0 col-12 col-sm-6 col-md-4 col-lg col-xx p-3 d-flex justify-content-center">
            <a href="/dog/{{$dog->dog_id}}">
                <div class="card">
                    <div class="img_mask d-flex justify-content-center">
                        <img class="card-img-top d-flex justify-content-center algin-self-center" src="{{asset('dog_pic/'.$dog->pic)}}">
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <div class="t">名字：{{$dog->name}}</div>
                            <div class="t">性別：{{$dog->sex}}</div>
                            <div class="t">品種：{{$dog->kind}}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    
</div>


@endsection