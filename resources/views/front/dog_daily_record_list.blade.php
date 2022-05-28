@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/dog_daily_record.css')}}">
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
            <div>浪浪紀錄</div>
        </h1>
    </div>
</div>
<div class="container py-5">
    <div class="d-flex flex-wrap justify-content-center">
        @foreach($data as $dog)
        <div class="col-6 col-md-4 d-flex justify-content-center">
            <a href="/member/dog_daily_record_list/{{$dog->dog_id}}" class="dog_name text-decoration-none text-dark text-nowrap fw-bold position-relative">
                @if(empty($dog->check_status))
                <i class="fas fa-exclamation-circle position-absolute"></i>
                @endif
                <div class="d-flex justify-content-center flex-column m-3 p-3">
                    <div class="col-12 circular--portrait border border-2 align-self-center">
                        <img src="{{asset('dog_pic/'.$dog->pic)}}" alt="..." class="col-12">
                    </div>
                    <div class="col align-self-center d-flex justify-content-center mt-2 mt-md-3 py-md-1 px-1 px-md-3 border border-secondary border-2 rounded-3">
                        {{$dog->name}}
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection