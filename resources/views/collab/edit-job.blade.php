@extends('collab_layout')
@section('collab_content')
<div class="clearfix"></div>

<!-- Header Title Start -->
<section class="inner-header-title blank">
    <div class="container">
        <h1>Chỉnh sửa thông tin việc làm</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Header Title End -->

<!-- General Detail Start -->
<div class="detail-desc section">
    <div class="container white-shadow">
        <div class="row bottom-mrg">
            <form action="{{route('collab.update-job', $jobdata->job_id)}}" method="POST" class="add-feild"
                style="padding-top:15px;">
                {{csrf_field()}}
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="input-group">
                        <label>Tên việc làm: </label>
                        <input type="text" class="form-control" name="job_name" value="{{$jobdata->job_name}}"
                            placeholder="Nhập tên việc làm" required>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="input-group">
                        <label>Danh mục việc làm: </label>
                        <select id="jobcategory" name="job_category_id" class="form-control input-lg">
                            @foreach ($jobcategorydata as $cate)
                                <option value="{{$cate->job_category_id}}"
                                    {{$cate->job_category_id == $jobdata->job_category_id ? 'selected' : ''}}>
                                    {{$cate->job_category_name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="input-group">
                        <label>Mức lương thỏa thuận: </label>
                        <input type="text" class="form-control" name="salary" value="{{$jobdata->salary}}"
                            placeholder="Mức lương thỏa thuận" required>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="input-group">
                        <label>Thành phố: </label>
                        <select name="city_id" class="form-control input-lg">
                            @foreach ($citydata as $city)
                                <option value="{{$city->city_id}}" {{$city->city_id == $jobdata->city_id ? 'selected' : ''}}>
                                    {{$city->city_name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="input-group">
                        <label>Địa điểm làm việc: </label>
                        <input type="text" class="form-control" name="location" value="{{$jobdata->location}}"
                            placeholder="Địa chỉ" required>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="input-group">
                        <label>Điều kiện ứng tuyển: </label>
                        <input type="text" class="form-control" name="requirement" value="{{$jobdata->requirement}}"
                            placeholder="Điều kiện" required>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12" style="margin-bottom:15px">
                    <label>Chi tiết công việc: </label>
                    <textarea class="form-control" name="content" id="content"
                        placeholder="Chi tiết công việc"> {{$jobdata->content}}</textarea>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-arrow-up"></i> Đăng tin
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- General Detail End -->
<!-- Modal chứa iframe của File Manager -->
<div id="lfmModal"
    style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%,-50%); width:80%; height:80%; background:white; border:1px solid #ccc; z-index:1000;">
    <iframe id="lfmIframe" src="/file-manager?type=image" style="width:100%; height:90%; border:none;"></iframe>
</div>

<!-- Nền tối phía sau modal (tuỳ chọn) -->
<div id="modalOverlay"
    style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:999;">
</div>
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content', {
        filebrowserImageBrowseUrl: '/file-manager?type=Images',
        filebrowserBrowseUrl: '/file-manager?type=Files',
        filebrowserUploadUrl: '/file-manager/upload?type=Images&_token={{ csrf_token() }}',
        filebrowserImageUploadUrl: '/file-manager/upload?type=Images&_token={{ csrf_token() }}',
        height: 500,
        width: '100%'
    });

    // var initialUrl = $('#image').val();
    // if (initialUrl) {
    //     $('#holder').attr('src', initialUrl);
    // } else {
    //     $('#holder').attr('src', '/storage/photos/shares/job_image/no-image.jpg');
    // }
    // $('#lfm').filemanager('image');
    // $('#lfm').on('click', function () {
    //     var route_prefix = '/file-manager';
    //     window.open(route_prefix + '?type=image', 'FileManager', 'width=700,height=400');
    //     window.SetUrl = function (items) {
    //         var url = items[0].url;
    //         $('#holder').attr('src', url);
    //         var urlPush = url.replace("http://127.0.0.1:8000", "");
    //         $('#image').val(urlPush);
    //     };
    // });

</script>


@endsection