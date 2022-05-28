<div class="modal fade" id="bkaddDonateModal" tabindex="-1" role="dialog" aria-labelledby="ModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="ModalCenter" style="text-align:center">{{$modal_header}}</h5>
            </div>
            <form id="add_donate_form" method="post" class="form-horizontal" action="{{$action}}" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @isset($method)
                        @method($method)
                    @endisset
                    <div class="form-group">
                        <label class="col-lg-3 control-label">捐款名稱</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="item_name" required  value="{{$item_name}}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">示意圖</label>
                        <div class="col-lg-12">
                            <input type="File" class="form-control-file" name="item_pic" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">主旨</label>
                        <div class="col-lg-12">
                            <textarea name="des" rows="3" class="form-control" required >{{$des}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">開放時間</label>
                        <div class="col-lg-12">
                            <input type="date" class="form-control" name="release_time" require value="{{$release_time}}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">截止時間</label>
                        <div class="col-lg-12">
                            <input type="date" class="form-control" name="deadline" require value="{{$deadline}}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">單價</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="price" required  value="{{$price}}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">目標份數</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="target_amount" required  value="{{$target_amount}}"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="adddonate" value="儲存">
                </div>
            </form>
        </div>
    </div>
</div>