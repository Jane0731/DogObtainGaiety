@extends("layouts.hf")
@section("css")
<link rel="stylesheet" href="{{asset('css/test.css')}}">
@endsection

@section("main")
<div class="container align-self-center">
    <div class="border px-3 px-md-5 justify-content-center flex-column">
        <div class="questionbox col-12 col-md-10 mt-3 mt-md-5 align-self-center">
            <div id="number" class="px-1 question_content"></div>
            <div id="question" class="mx-2 mx-md-5 question_content"></div>
        </div>
        <div class="answer col-10 col-sm-8 my-5 align-self-center">
            <button id="Yes" onclick="answer(1)">
                <div data-toggle="modal" data-target="#answer">
                    Yes
                </div>
            </button>
            <button id="No" onclick="answer(0)">
                <div data-toggle="modal" data-target="#answer">
                    No
                </div>
            </button>
        </div>
        <div class="modal fade" id="answer" tabindex="-1" role="dialog" aria-labelledby="sponsorTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalTitle"></h5>
                    </div>
                    <div class="modal-body">
                        <div id="annotation" class="container py-4">
                        </div>
                    </div>
                        <div class="modal-footer justify-content-around">
                            <button type="button" class="modal_btn_c" data-dismiss="modal" onclick="next()">下一題</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/test.js')}}"></script>
<div id="questions" data-questions="{{$questions}}" style="display:none;"></div>
@endsection