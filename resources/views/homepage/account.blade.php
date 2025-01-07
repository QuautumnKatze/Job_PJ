@extends('homepage_layout')
@section('homepage_content')
<div class="clearfix"></div>

<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url({{asset('/img/banner-10.jpg')}});">
    <div class="container">
        <h1>Tài khoản</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- Candidate Profile Start -->
<section class="detail-desc advance-detail-pr gray-bg">
    <div class="container white-shadow">
        <div class="row">
            <div class="detail-pic"><img id="holder" src="{{$accdata->avatar}}" class="img" alt="" />
                <a href="javascript:void(0)" type="button" id="lfm" title="Sửa ảnh" data-input="image"
                    data-preview="holder" class="detail-edit">
                    <i class="fa fa-pencil"></i>
                </a>
                <input id="image" class="form-control" type="hidden" name="image" value="{{$accdata->avatar}}">
            </div>
        </div>

        <div class="row bottom-mrg">
            <div class="col-md-12 col-sm-12">
                <div class="advance-detail detail-desc-caption">
                    <h4>{{$accdata->full_name}}</h4>
                    <ul>
                        <li><strong class="j-shared">{{$countApplications}}</strong>Công việc đã ứng tuyển</li>
                        <li><strong class="j-applied">{{$approvedApplications}}</strong>Đơn ứng tuyển được chấp nhận
                        </li>
                        <li><strong class="j-view">{{$deniedApplications}}</strong>Đơn ứng tuyển bị từ chối</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row no-padd">
            <div class="detail pannel-footer">
                <div class="col-md-5 col-sm-5">
                    <ul class="detail-footer-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="full-detail-description full-detail gray-bg">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <div class="full-card">
                <div class="deatil-tab-employ tool-tab">
                    <ul class="nav simple nav-tabs" id="simple-design-tab">
                        <li class="active"><a href="#address">Thông tin cá nhân</a></li>
                        <li><a href="#post-job">Công việc đã ứng tuyển</a></li>
                        <li><a href="#settings">Đổi mật khẩu</a></li>
                    </ul>
                    <!-- Start All Sec -->
                    <div class="tab-content">

                        <!-- Start Address Sec -->
                        <div id="address" class="tab-pane fade in active">
                            <div class="row no-mrg">
                                <h3>Sửa đổi thông tin cá nhân</h3>
                                <div class="edit-pro">
                                    <form id="editProfileForm" method="post">
                                        <div class="col-md-4 col-sm-6">
                                            <label>Tên tài khoản</label>
                                            <input type="text" name="userName" class="form-control" placeholder="Tên tài khoản"
                                                value="{{$accdata->user_name}}" required>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Tên đầy đủ</label>
                                            <input type="text" name="fullName" class="form-control" placeholder="Tên đầy đủ"
                                                value="{{$accdata->full_name}}" required>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{$accdata->email}}"
                                                required>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Số điện thoại</label>
                                            <input type="text" name="phone" class="form-control" placeholder="SDT" value="{{$accdata->user->phone}}"
                                                required>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit" class="update-btn">Update Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Address Sec -->

                        <!-- Start Job List -->
                        <div id="post-job" class="tab-pane fade">
                            <h3>Bạn có {{$countApplications}} công việc đã ứng tuyển </h3>
                            <div class="row" id="list">
                            @foreach ($applications as $item)
                                    <div class="item-click">
                                        <article>
                                            <div class="brows-job-list">
                                                <div class="col-md-1 col-sm-2 small-padding">
                                                    <div class="brows-job-company-img">
                                                        <a href="{{route('homepage.job-detail', $item->job->job_id)}}">
                                                            <img src="{{$item->job->recruiter->account->avatar}}" class="img-responsive"
                                                                alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-4">
                                                    <div class="brows-job-position">
                                                        <a href="{{route('homepage.job-detail', $item->job->job_id)}}">
                                                            <h3>{{$item->job->job_name}}</h3>
                                                        </a>
                                                        <p>
                                                            <span>{{$item->job->recruiter->company_name}}</span>
                                                            @if ($item->status == 0)
                                                                <span class="job-type cl-warning bg-trans-warning">Đang chờ</span>
                                                            @elseif ($item->status == 1)
                                                                <span class="job-type cl-success bg-trans-success">Được chấp nhận</span>
                                                            @elseif ($item->status == 2)
                                                                <span class="job-type cl-danger bg-trans-danger">Bị từ chối</span>
                                                            @endif

                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="brows-job-location">
                                                        <p><i class="fa fa-file"></i>{{$item->cv->cv_name}}</p>
                                                    </div>
                                                    <div class="brows-job-location">
                                                        <p><i class="fa fa-envelope"></i>{{$item->description}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-2">
                                                    <div class="brows-job-link">
                                                        @if ($item->status == 0)
                                                            <button class="btn btn-default"><a
                                                                    href="{{route('homepage.edit-apply', $item->application_id)}}">Chỉnh
                                                                    sửa</a></button>
                                                        @else
                                                            <button class="btn btn-default" disabled>Chỉnh sửa</button>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach
                                
                            </div>
                            <div class="row" id="pagination-controls">
                            </div>
                        </div>
                        <!-- End Job List -->

                        <!-- Start Settings -->
                        <div id="settings" class="tab-pane fade">
                            <div class="row no-mrg">
                                <h3>Đổi mật khẩu</h3>
                                <div class="edit-pro">
                                    <form id="settings" method="post">
                                        @csrf
                                        <div class="col-md-4 col-sm-6">
                                            <label>Mật khẩu cũ</label>
                                            <input type="password" name="passOld" class="form-control"
                                                placeholder="*********">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Mật khẩu mới</label>
                                            <input type="password" name="passConfirm" class="form-control"
                                                placeholder="*********">
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <label>Nhập lại mật khẩu</label>
                                            <input type="password" name="reConfirm" class="form-control"
                                                placeholder="*********">
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit" class="update-btn">Update Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Settings -->
                    </div>
                    <!-- Start All Sec -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $(document).ready(function () {
        $('#lfm').on('click', function () {
            var route_prefix = '/file-manager';
            window.open(route_prefix + '?type=image', 'FileManager', 'width=700,height=400');
            window.SetUrl = function (items) {
                var url = items[0].url;
                $('#holder').attr('src', url);
                var urlPush = url.replace("http://127.0.0.1:8000", ""); // Adjust your base URL if needed
                $('#image').val(urlPush);

                // Perform AJAX request to update avatar
                $.ajax({
                    url: '{{ route("avatar.change") }}', // Define your route in web.php
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // CSRF token for security
                        image: urlPush // Send the image URL
                    },
                    success: function (response) {
                        if (response.success) {
                            toastr.success(response.message, 'Success');
                        } else {
                            toastr.error(response.message, 'Error');
                        }
                    },
                    error: function (xhr) {
                        toastr.error('An error occurred: ' + xhr.responseText, 'Error');
                    }
                });
            };
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#editProfileForm').on('submit', function (e) {
            e.preventDefault(); // Ngăn form submit truyền thống

            // Lấy dữ liệu từ form
            var formData = {
                _token: '{{ csrf_token() }}', // CSRF token để bảo mật
                userName: $('input[name="userName"]').val(),
                fullName: $('input[name="fullName"]').val(),
                email: $('input[name="email"]').val(),
                phone: $('input[name="phone"]').val(),
            };

            // Gửi AJAX request
            $.ajax({
                url: '{{ route("homepage.profile.edit") }}', // Đường dẫn tới controller
                method: 'POST',
                data: formData,
                success: function (response) {
                    if (response.success) {
                        toastr.success(response.message, 'Thành công');
                    } else {
                        toastr.error(response.message, 'Thất bại');
                    }
                },
                error: function (xhr) {
                    toastr.error('Có lỗi xảy ra. Vui lòng thử lại.', 'Lỗi');
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        const rowsPerPage = 5; // Số bản ghi trên mỗi trang
        let currentPage = 1;
        const $table = $('#list');
        const $rows = $table.find('article');
        const totalPages = Math.ceil($rows.length / rowsPerPage);

        function displayRows(page) {
            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;

            $rows.hide(); // Ẩn tất cả các dòng
            $rows.slice(start, end).show(); // Hiển thị các dòng của trang hiện tại
        }

        function setupPagination() {
            $('#pagination-controls').empty(); // Xóa điều khiển phân trang trước đó

            const pagination = $('<ul class="pagination"></ul>'); // Sử dụng lớp Bootstrap 'pagination'

            // Tạo nút "Trang Trước"
            if (currentPage > 1) {
                pagination.append(`<li><a class="page-link prev" href="#">&laquo;</a></li>`);
            }

            // Tạo các nút số trang
            for (let i = 1; i <= totalPages; i++) {
                pagination.append(`
                <li><a class="page-link page-num" href="#" data-page="${i}">${i}</a></li>
            `);
            }

            // Tạo nút "Trang Sau"
            if (currentPage < totalPages) {
                pagination.append(`<li><a class="page-link next" href="#">&raquo;</a></li>`);
            }

            $('#pagination-controls').append(pagination); // Thêm danh sách phân trang vào thẻ div
        }

        function updatePagination() {
            displayRows(currentPage); // Hiển thị các dòng của trang hiện tại
            setupPagination(); // Cập nhật nút phân trang
        }

        // Xử lý sự kiện khi nhấn nút phân trang
        $('#pagination-controls').on('click', '.page-link', function (e) {
            e.preventDefault();

            const page = $(this).data('page');
            if (page) {
                currentPage = page;
            } else if ($(this).hasClass('prev')) {
                currentPage = Math.max(currentPage - 1, 1);
            } else if ($(this).hasClass('next')) {
                currentPage = Math.min(currentPage + 1, totalPages);
            }
            updatePagination();
        });

        // Khởi động hiển thị trang đầu tiên
        updatePagination();
    });
</script>
<script>
    $(document).ready(function () {
        $('#changePasswordForm').on('submit', function (e) {
            e.preventDefault(); // Ngăn form submit truyền thống

            // Lấy dữ liệu từ form
            var formData = {
                _token: '{{ csrf_token() }}', // CSRF token để bảo mật
                passOld: $('input[name="passOld"]').val(),
                passNew: $('input[name="passNew"]').val(),
                reConfirm: $('input[name="reConfirm"]').val(),
            };

            // Gửi AJAX request
            $.ajax({
                url: '{{ route("homepage.password.change") }}', // Đường dẫn tới controller
                method: 'POST',
                data: formData,
                success: function (response) {
                    if (response.success) {
                        toastr.success(response.message, 'Thành công');
                    } else {
                        toastr.error(response.message, 'Thất bại');
                    }
                },
                error: function (xhr) {
                    toastr.error('Có lỗi xảy ra. Vui lòng thử lại.', 'Lỗi');
                }
            });
        });
    });
</script>



@endsection