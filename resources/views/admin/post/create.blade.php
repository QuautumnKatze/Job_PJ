@extends("admin_layout")
@section("admin_content")
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <a href="{{route('postC.index')}}">
            <span class="text-muted fw-light">Quản lý bài viết/</span>
        </a>
        Thêm mới

    </h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Bài viết mới</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('post.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Hình ảnh minh họa</label>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <img id="holder" class="shadow rounded img-fluid h-50" style="width:100%">
                                        <input id="image" class="form-control" type="hidden" name="image">
                                    </div>
                                    <span class="input-group-btn">
                                        <button type="button" id="lfm" data-input="image" data-preview="holder"
                                            class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Chọn ảnh
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-3 align-self">
                                <div class="mb-3">
                                    <label class="form-label" for="">Tiêu đề</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-category"></i></span>
                                        <input type="text" class="form-control" name="title"
                                            id="basic-icon-default-fullname" placeholder="Nhập tên danh mục"
                                            aria-label="" aria-describedby="basic-icon-default-fullname2" required />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Danh mục bài viết</label>
                                    <select class="form-select" name="post_category_id" id="exampleFormControlSelect1"
                                        aria-label="Default select example">
                                        @foreach ($postcategorydata as $cate)
                                            <option value="{{$cate->post_category_id}}">
                                                {{$cate->post_category_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="">Tóm tắt bài</label>
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-category"></i></span>
                                        <textarea class="form-control" name="shorten" id="exampleFormControlTextarea1"
                                            rows="5" style="resize:none"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Trạng thái</label>
                            <select id="defaultSelect" name="status" class="form-select">
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="">Nội dung bài viết</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-category"></i></span>
                                <textarea class="form-control" name="shorten" id="content" rows="5"
                                    style="resize:none"></textarea>
                            </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function () {
        $('#content').summernote({
            height: 300, // Đặt chiều cao của trình soạn thảo
            callbacks: {
                onImageUpload: function (files) {
                    // Xử lý tải ảnh lên
                    uploadImage(files[0]);
                }
            },
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });

    $('#lfm').filemanager('image', { prefix: '/file-manager' });
    var initialUrl = $('#image').val();
    if (initialUrl) {
        $('#holder').attr('src', initialUrl);
    } else {
        $('#holder').attr('src', '/storage/photos/post_title_image/no-image.jpg');
    }
    $('#lfm').filemanager('image');
    $('#lfm').on('click', function () {
        var route_prefix = '/file-manager';
        window.open(route_prefix + '?type=image', 'FileManager', 'width=700,height=400');
        window.SetUrl = function (items) {
            var url = items[0].url;
            $('#holder').attr('src', url);
            $('#image').val(url);
        };
    });
</script>
@endsection