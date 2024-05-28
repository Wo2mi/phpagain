@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']])

@include('backend.auth.alert')


<form action="{{ route('user.destroy', $user->id) }}" method="POST" class="box">

    @csrf
    @method('DELETE')
    <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-5">
            <div class="panel-head">
                <div class="panel-title">Thông tin chung</div>
                <div class="panel-description">
                    <p>- Bạn đang muốn xóa thành viên có email là: {{ $user->email}}</p>
                    <p>- Lưu ý: Không thể khôi phục khi đã xóa. Hãy chắc chắn bạn muốn thực hiện chức năng này! <span class="text-danger">(*)</span> là bắt buộc</p>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="row mb-15">
                        <div class="col-lg-6">
                            <div class="form-row">
                                <label for="" class="control-label text-left">Email <span class="text-danger">(*)</span></label>
                                <input type="text" name="email" value="{{ old('email', ($user->email) ?? '')  }}" class="form-control" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-row">
                                <label for="" class="control-label text-left">Họ Tên <span class="text-danger">(*)</span></label>
                                <input type="text" name="name" value="{{ old('name', ($user->name) ?? '') }}" class="form-control" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="text-right">
        <button class="btn btn-danger" type="submit" name="send" value="send">Xóa dữ liệu</button>
    </div>
    </div>
</form>


