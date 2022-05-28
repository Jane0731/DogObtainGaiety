<div class="modal fade" id="bkeditDailyRecordModal" tabindex="-1" role="dialog" aria-labelledby="ModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="ModalCenter" style="text-align:center">{{$modal_header}}</h5>
            </div>
            <form id="add_daily_form" method="post" class="form-horizontal" action="{{$action}}" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @isset($method)
                        @method($method)
                    @endisset
                    <div class="form-group">
                        <label class="col-lg-3 control-label">照片</label>
                        <div class="col-lg-12">
                            <input type="File" class="form-control-file" name="record_pic" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">描述</label>
                        <div class="col-lg-12">
                            <textarea name="des" rows="3" class="form-control" required >{{$des}}</textarea>
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
