<div class="modal fade" id="bkaddTestModal" tabindex="-1" role="dialog" aria-labelledby="ModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="ModalCenter" style="text-align:center">{{$modal_header}}</h5>
            </div>
            <form id="add_test_form" method="post" class="form-horizontal" action="{{$action}}" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @isset($method)
                        @method($method)
                    @endisset
                    <div class="form-group">
                        <label class="col-lg-3 control-label">問題內容</label>
                        <div class="col-lg-12">
                            <textarea name="question" rows="3" class="form-control" required>{{$question}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">答案</label>
                        <div class="col-lg-12">
                            <input required type="radio" name="answer" value="1">正確 &nbsp
                            <input required type="radio" name="answer" value="0" >錯誤                        
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">解釋</label>
                        <div class="col-lg-12">
                            <textarea name="annotation" rows="3" class="form-control" required >{{$annotation}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="dogadd" value="儲存">
                </div>
            </form>
        </div>
    </div>
</div>
