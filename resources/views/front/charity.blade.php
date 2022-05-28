@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/dog_charity.css')}}">
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
            <div>浪浪公益</div>
        </h1>
    </div>
</div>
<div class="container py-5">

    <div class="first">
        <div class="pad">
            <p class="first_word">捐血狗?</p>
            <div class="my-3 my-md-5">
                <div class="first_des">
                    五、六年前，賴媽偶然在網路上看到有狗狗缺血需要幫助，她就想著要幫這個狗狗，
                    賴媽秉持著一個信念，希望自己的浪浪們有能力的話，就去救助自己的同類們，同時也是給這些浪浪們積福報，
                    於是帶著浪浪去捐血，而且賴媽是完全不收取任何費用的，直到現在賴媽的浪浪們一共救助了30幾隻狗狗了，
                    浪浪們只要捐血一次，就需要休息三個月，期間所有的補品都是由賴媽自己承擔
                </div>
            </div>
            <p class="first_word">捐血狗列表</p>

            <div class="row ">
                <div class="col-6 col-md-4 p-3">
                    <a href="/dog/15">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{asset('dog_pic/018.jpg')}}" class="dog_img" alt="...">
                            </div>
                            <div class="px-3 px-md-5 py-2 text-center">
                                <div class="border">
                                    大頭
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 p-3">
                    <a href="/dog/10">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{asset('dog_pic/013.jpg')}}" class="dog_img" alt="...">
                            </div>
                            <div class="px-3 px-md-5 py-2 text-center">
                                <div class="border">
                                    熊哥
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 p-3">
                    <a href="/dog/12">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{asset('dog_pic/015.jpg')}}" class="dog_img" alt="...">
                            </div>
                            <div class="px-3 px-md-5 py-2 text-center">
                                <div class="border">
                                    陽陽
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-6 col-md-4 p-3">
                    <a href="/dog/14">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{asset('dog_pic/017.jpg')}}" class="dog_img" alt="...">
                            </div>
                            <div class="px-3 px-md-5 py-2 text-center">
                                <div class="border">
                                    哈利
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 p-3">
                    <a href="/dog/16">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{asset('dog_pic/019.jpg')}}" class="dog_img" alt="...">
                            </div>
                            <div class="px-3 px-md-5 py-2 text-center">
                                <div class="border">
                                    寶寶
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 p-3">
                    <a href="/dog/28">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{asset('dog_pic/031.jpg')}}" class="dog_img" alt="...">
                            </div>
                            <div class="px-3 px-md-5 py-2 text-center">
                                <div class="border">
                                    多多
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <p class="first_word py-5">捐血照片</p>
            <div class="d-flex justify-content-center">
                <div class="col d-flex justify-content-end">
                    <img src="{{asset('pic/dog_donate_blood-1.jpg')}}" alt="..." class="dog_donate_blood_img">
                </div>
                <div class="col">
                    <div class="row">
                        <div class="d-flex flex-column">
                            <img src="{{asset('pic/dog_donate_blood-2.jpg')}}" alt="..." class="dog_donate_blood_img">
                        </div>
                        <div class="col-12">
                            <img src="{{asset('pic/dog_donate_blood-3.jpg')}}" alt="..." class="dog_donate_blood_img gray">
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</div>


@endsection