@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/donate_list.css')}}">
@endsection

@section("main")
<div class="container-fluid p-0">
    <div class="cover">
        <div class="row">
            <div class="col-sm-8" style="margin-top: 2%">
                <div class="row justify-content-end">
                    <div class="col-sm-2 col-md-auto ti"></div>
                    <div class="col-sm-1 col-md-auto"></div>
                </div>
            </div>

        </div>
        <h1 class="word">
            <div>浪浪物資</div>
        </h1>
    </div>
</div>
<div class="container py-5">
    <div class="row  justify-content-center">
        @foreach($data as $donate)
        <div class="col-12 col-md-4 col-lg-3 p-3">
            <a href="/donate/{{$donate->donate_id}}">
                <div class="card px-1">
                    <div class="image-1x1 rounded card-img-top" style="background-image:url(/donate_item_pic/{{$donate->item_pic}})"></div>
                    <div class="card-body">
                        <h5 class="card-title">{{$donate->item_name}}</h5>
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title ct-l">目標份量：{{$donate->target_amount}}</h5>
                            </div>

                        </div>

                        <div class="progress progress-striped">
                            @if(empty($donate->total))
                            <div class="progress-bar progress-bar-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>

                            @else
                            <div class="progress-bar progress-bar-info" role="progressbar" style="{{'width:'.$donate->target_amount/$donate->total.'%'}}" aria-valuenow="{{$donate->target_amount/$donate->total}}" aria-valuemin="0" aria-valuemax="100">{{$donate->target_amount/$donate->total}}%</div>

                            @endif
                        </div>

                        <p class="des py-3">{{$donate->des}}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>

</div>
@endsection