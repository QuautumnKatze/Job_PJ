@extends("admin_layout")
@section("admin_content")
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <a href="{{route('jobC.index')}}">
            <span class="text-muted fw-light">Quản lý tin tuyển dụng/</span>
        </a>
        Thêm mới

    </h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Việc làm mới</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('job.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label class="form-label" for="">Tên việc làm</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-category"></i></span>
                                <input type="text" class="form-control" name="job_name" id="basic-icon-default-fullname"
                                    placeholder="Nhập tên danh mục" aria-label=""
                                    aria-describedby="basic-icon-default-fullname2" required />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Danh mục bài viết</label>
                            <select class="form-select" name="job_category_id" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                @foreach ($cate as $cat)
                                    <option value="{{$cat->job_category_id}}">
                                        {{$cat->job_category_name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Danh mục bài viết</label>
                            <select class="form-select" name="recruiter_id" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                @foreach ($recruiter as $rec)
                                    <option value="{{$rec->recruiter_id}}">
                                        {{$rec->company_name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Lương</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-category"></i></span>
                                <input type="text" class="form-control" name="salary" id="basic-icon-default-fullname"
                                    placeholder="Nhập tên danh mục" aria-label=""
                                    aria-describedby="basic-icon-default-fullname2" required />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Địa chỉ</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-category"></i></span>
                                <input type="text" class="form-control" name="location" id="basic-icon-default-fullname"
                                    placeholder="Nhập tên danh mục" aria-label=""
                                    aria-describedby="basic-icon-default-fullname2" required />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Danh mục bài viết</label>
                            <select class="form-select" name="city_id" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                @foreach ($city as $c)
                                    <option value="{{$c->city_id}}">
                                        {{$c->city_name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="">Điều kiện kinh nghiệm</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-category"></i></span>
                                <input type="text" class="form-control" name="requirement"
                                    id="basic-icon-default-fullname" placeholder="Nhập tên danh mục" aria-label=""
                                    aria-describedby="basic-icon-default-fullname2" required />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Số lượng tuyển dụng</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-notepad"></i></span>
                                <input type="text" class="form-control" name="quantity" id="basic-icon-default-fullname"
                                    placeholder="Nhập ghi chú" aria-label=""
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="content">Nội dung bài viết</label>
                            <div class="input-group input-group-merge">
                                <textarea class="form-control" name="content" id="content" required></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Trạng thái</label>
                            <select id="defaultSelect" name="status" class="form-select">
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>
                </div>
                <div class="mx-4 mb-3">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('scripts')
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

    var initialUrl = $('#image').val();
    if (initialUrl) {
        $('#holder').attr('src', initialUrl);
    } else {
        $('#holder').attr('src', '/storage/photos/shares/post_title_image/no-image.jpg');
    }
    $('#lfm').filemanager('image');
    $('#lfm').on('click', function () {
        var route_prefix = '/file-manager';
        window.open(route_prefix + '?type=image', 'FileManager', 'width=700,height=400');
        window.SetUrl = function (items) {
            var url = items[0].url;
            $('#holder').attr('src', url);
            var urlPush = url.replace("http://127.0.0.1:8000", "");
            $('#image').val(urlPush);
        };
    });


</script>
@endsection