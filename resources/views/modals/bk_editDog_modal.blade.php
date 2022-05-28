<div class="modal fade" id="bkeditModal" tabindex="-1" role="dialog" aria-labelledby="ModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="ModalCenter" style="text-align:center">{{$modal_header}}</h5>
            </div>
            <form id="add_dog_form" method="post" class="form-horizontal" action="{{$action}}" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @isset($method)
                        @method($method)
                    @endisset
                    <div class="form-group">
                        <label class="col-lg-3 control-label">狗狗名字</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="name" placeholder="姓名" required  value="{{$name}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">種類</label>
                        <div class="col-lg-12">
                            <select name="kind">
                                <option selected>博美犬</option>
                                <option>柯基</option>
                                <option>吉娃娃</option>
                                <option>黃金獵犬</option>
                                <option>法國鬥牛犬</option>
                                <option>柴犬</option>
                                <option>馬爾濟斯</option>
                                <option>牧羊犬</option>
                                <option>拉布拉多犬</option>
                                <option>德國牧羊犬</option>
                                <option>臘腸犬</option>
                                <option>羅威那</option>
                                <option>西施犬</option>
                                <option>杜賓犬</option>
                                <option>伯恩山犬</option>
                                <option>比熊犬</option>
                                <option>鬆獅犬</option>
                                <option>土狗</option>
                                <option>哈士奇</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">照片</label>
                        <div class="col-lg-12">
                            <input type="File" class="form-control-file" name="headshot" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">生日</label>
                        <div class="col-lg-12">
                            <input required type="date" class="form-control" name="birthday" value="{{$birthday}}"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-3 control-label">個性</label>
                        <div class="col-lg-12">
                            <textarea name="personality" rows="3" class="form-control" required >{{$personality}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">小故事</label>
                        <div class="col-lg-12">
                            <textarea name="story" rows="3" class="form-control" required >{{$story}}</textarea>
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
