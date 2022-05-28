@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/member_setting.css')}}">
@endsection

@section("main")
<div class="container-fluid pt-5 mt-5">
    <div class="d-flex flex-wrap justify-content-center">
        <div class="col-12 my-3">
       
                <div class="member_setting text-center">帳號設定</div>
           
        </div>
        <div class="col-12 col-md-10 d-flex flex-wrap justify-content-center" >

            <div class="row mehr col-9 col-sm-11">
                <div class="col-8 col-sm-4">
                    <p class="p_font px-2">會員姓名</p>
                </div>
                <div class="col-8 col-sm-5 px-3 px-sm-0">
                    <input class="c_font my-2 my-sm-5" type="text" readonly="readonly" value="@php echo Session::get('name') @endphp">
                </div>
                <div class="dis">
                    <button class="i my-2 my-sm-5" data-toggle="modal" data-target="#editname"><i class="fas fa-pencil-alt"></i></button>
                </div>
            </div>
            <div class="row mehr col-9 col-sm-11">
                <div class="col-8 col-sm-4">
                    <p class="p_font px-2">手機</p>
                </div>
                <div class="col-8 col-sm-5 px-3 px-sm-0">
                    <input class="c_font my-2 my-sm-5" type="text" readonly="readonly" value="@php echo Session::get('phone') @endphp" pattern="09\d{8}" required>
                </div>
                <div class="dis">
                    <button class="i my-2 my-sm-5" data-toggle="modal" data-target="#edittel"><i class="fas fa-pencil-alt"></i></button>
                </div>
            </div>
            <div class="row mehr col-9 col-sm-11">
                <div class="col-8 col-sm-4">
                    <p class="p_font px-2">電子郵件</p>
                </div>
                <div class="col-8 col-sm-5 px-3 px-sm-0">
                    <input class="c_font my-2 my-sm-5" type="text" readonly="readonly" value="@php echo Session::get('email') @endphp">
                </div>
            </div>
            <div class="row mehr col-9 col-sm-11">
                <div class="col-8 col-sm-4">
                    <p class="p_font px-2">帳號</p>
                </div>
                <div class="col-8 col-sm-5 px-3 px-sm-0">
                    <input class="c_font my-2 my-sm-5" type="text" readonly="readonly" value="@php echo Session::get('email') @endphp">
                </div>

            </div>
            <div class="row col-9 col-sm-11">
                <div class="col-8 col-sm-4">
                    <p class="p_font px-2">密碼</p>
                </div>
                <div class="col-8 col-sm-5 px-3 px-sm-0">
                    <input class="c_font my-2 my-sm-5" type="text" readonly="readonly" value="更改密碼">
                </div>
                <div class="dis">
                    <button class="i my-2 my-sm-5" data-toggle="modal" data-target="#editpwd"><i class="fas fa-pencil-alt"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- 更改姓名 -->
    <div class="modal fade" id="editname" tabindex="-1" role="dialog" aria-labelledby="nameTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTitle">更改姓名</h5>
                    <button type="button" class="close" data-dismiss="modal"><img src="{{asset('pic/cross.png')}}" alt="" style="width:30px"></button>
                </div>
                <div class="modal-body">
                    <form id='nameform' method='post' action="member_setting/editname">
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <p class="p_font px-2">姓名</p>
                            </div>
                            <div class="col-5">
                                <input class="c_font" name="name" type="text" value="@php echo Session::get('name') @endphp" required maxlength="10">
                            </div>
                        </div>
                </div>
                <div class="modal-footer justify-content-around">
                    <input class="modal_btn" type="submit" value="修改">
                    </form>
                    <button class="modal_btn" type="button" data-dismiss="modal">取消</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 更改手機 -->
    <div class="modal fade" id="edittel" tabindex="-1" role="dialog" aria-labelledby="nameTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTitle">更改電話號碼</h5>
                    <button type="button" class="close" data-dismiss="modal"><img src="{{asset('pic/cross.png')}}" alt="" style="width:30px"></button>
                </div>
                <div class="modal-body">
                    <form id='telform' method='post' action="member_setting/edittel">
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <p class="p_font px-2">電話號碼</p>
                            </div>
                            <div class="col-5">
                                <input class="c_font" oninput = "value=value.replace(/[^\d]/g,'')" type="text" name="tel" value="@php echo Session::get('phone') @endphp" pattern="09\d{8}" required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer justify-content-around">
                    <input class="modal_btn" type="submit" value="修改">
                    </form>
                    <button class="modal_btn" type="button" data-dismiss="modal">取消</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 更改密碼 -->
    <div class="modal fade" id="editpwd" tabindex="-1" role="dialog" aria-labelledby="nameTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTitle">更改密碼</h5>
                    <button type="button" class="close" data-dismiss="modal"><img src="{{asset('pic/cross.png')}}" alt="" style="width:30px"></button>
                </div>
                <div class="modal-body">
                    <form id='pwdform' method='post' action="member_setting/editpwd">
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <p class="p_font px-2">舊密碼</p>
                            </div>
                            <div class="col-5">
                                <input class="c_font" type="password" name="oldpassword" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <p class="p_font px-2">新密碼</p>
                            </div>
                            <div class="col-5">
                                <input class="c_font" type="password" name="newpassword" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <p class="p_font px-2">確認密碼</p>
                            </div>
                            <div class="col-5">
                                <input class="c_font"  type="password" name="checkpassword" required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer justify-content-around">
                    <input class="modal_btn" type="submit" value="修改">
                    </form>
                    <button class="modal_btn" type="button" data-dismiss="modal">取消</button>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection