<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{config('apps.user.title')}}</h2>
        <ol class="breadcrumb" style="margin-bottom:10px;">
            <li>
                <a href="{{route('dashboard.index')}}">Dashboard</a>
            </li>
            <li class="active"><strong>{{config('apps.user.title')}}</strong></li>
        </ol>
    </div>
</div>



<div class="row mt20">
  
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>{{config('apps.user.tableHeading')}} </h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Config option 1</a>
                    </li>
                    <li><a href="#">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
            <div class="filter">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <div class="perpage">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <select name="perpage"  class="form-control input-sm perpage filter mr10">
                            @for ($i= 20;$i<=200;$i+=20)
                            <option value="{{ $i }}"> {{ $i }} bản ghi</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="action">
                    <div class="uk-flex uk-flex-middle">
                        <select name="user_catalogue_id"  class="form-control mr10">
                            <option value="0" selected="selected" >Chọn Nhóm Thành Viên</option>
                            <option value="1">Quản trị viên</option>
                        </select>
                    <div class="uk-search uk-flex uk-flex-middle mr10">
                        <div class="input-group">
                            <input type="text" name="keyword" value="" placeholder="Nhập Từ khoá bạn muốn tìm kiếm" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-primary mb0 btn-sm">Tìm Kiếm</button>
                            </span>
                        </div>
                    </div>
                    <a href="" class="btn btn-danger"><i class="fa fa-plus"></i>Thêm Mới</a>
                    </div>
                </div>
            </div>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                <tr >
                    <th >
                        <input type="checkbox" value="" id="checkAll" class="input-checkbox">
                    </th>
                    <th >Họ Tên</th>
                    <th>Email</th>
                    <th>Số Điện Thoại</th>
                    <th >Địa Chỉ</th>
                    <th class="text-center">Tình Trạng</th>
                    <th class="text-center">Thao Tác</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <input type="checkbox" value="" id="checkAll" class="input-checkbox checkBoxItem text-center">
                    </td>


                    <td>
                       Nguyễn Văn Khoa
                    </td>
                    <td>
                        kamenrider@gmail.com
                    </td>
                    <td>
                        0987654321
                    </td>
                    <td>
                        Số 16@#4@ Dương Nội, Hà Đông, Hà Nội
                    </td>
                    <td class="text-center">
                        <input type="checkbox" class="js-switch" checked />
                    </td>
                    <td class="text-center">
                            <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                    
                </tr>
              
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


<script>
    $(document).ready(function(){
        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394' });
    })
</script>