@extends('collab_layout')
@section('collab_content')
<style>
    .manage-cndt .cndt-status.reject {
        background: rgba(255, 99, 71, .2);
        color: #de0032;
    }

    .two-lines {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* Giới hạn tối đa 2 dòng */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        /* Hiển thị dấu "..." nếu vượt quá */

        /* Cố định chiều cao để luôn chiếm 2 dòng */
        line-height: 1.5em;
        /* Chiều cao mỗi dòng */
        max-height: 3em;
        /* Chiều cao tối đa cho 2 dòng */
        min-height: 3em;
        /* Chiều cao tối thiểu cho 2 dòng */
    }
</style>
<div class="clearfix"></div>

<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url({{asset('/img/banner-10.jpg')}});">
    <div class="container">
        <h1>Quản lý ứng tuyển</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- Member list start -->
<section class="member-card gray">
    <div class="container">
        <!-- Job -->
        <article>
            <div class="mng-company">
                <div class="col-md-2 col-sm-2">
                    <div class="mng-company-pic">
                        @foreach($recruiterdata as $acc)
                            @if ($acc->recruiter->recruiter_id == $jobdata->recruiter_id)
                                <a href="{{route('homepage.job-detail', $jobdata->job_id)}}" data-toggle="tooltip"><img
                                        src="{{$acc->avatar}}" class="img-responsive" alt="" /></a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="mng-company-name">
                        <h4><a href="{{route('homepage.job-detail', $jobdata->job_id)}}"
                                data-toggle="tooltip">{{$jobdata->job_name}}</a> </h4>
                        <span class="cmp-time">{{$jobdata->salary}}</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="mng-company-location">
                        <p><i class="fa fa-map-marker"></i> {{$jobdata->location}}</p>
                    </div>
                </div>
            </div>
        </article>

        <!-- search filter -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="search-filter">

                    <div class="col-md-4 col-sm-5">
                        <div class="filter-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search…">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default">Go</button>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-7">
                        <div class="short-by pull-right">
                            Short By
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <i
                                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Short By Date</a></li>
                                    <li><a href="#">Short By Views</a></li>
                                    <li><a href="#">Short By Popular</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- search filter End -->

        <div class="row" id="list">
            @foreach ($applicationdata as $apply)
                <article>


                    <div class="col-md-4 col-sm-4">
                        <div class="manage-cndt">
                            @if ($apply->status == 0)
                                <div class="cndt-status pending">Đang chờ</div>
                            @elseif ($apply->status == 1)
                                <div class="cndt-status available">Đã chấp nhận</div>
                            @else
                                <div class="cndt-status reject">Đã từ chối</div>
                            @endif

                            <div class="cndt-caption">
                                <div class="cndt-pic">
                                    <a href="{{route('homepage.user-profile', $apply->cv->user->account_id)}}"
                                        data-toggle="tooltip">
                                        <img src="{{asset($apply->cv->user->account->avatar)}}" class="img-responsive"
                                            alt="" />
                                    </a>
                                </div>
                                <h4><a href="{{route('homepage.user-profile', $apply->cv->user->account_id)}}"
                                        data-toggle="tooltip">{{$apply->cv->user->account->full_name}}</a> </h4>
                                <span>SĐT: {{$apply->cv->user->phone}}</span>
                                <p class="two-lines">{{$apply->description}}</p>
                            </div>
                            <a href="{{route('collab.view-application', $apply->application_id)}}" title=""
                                class="cndt-profile-btn">Xem hồ sơ ứng tuyển</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="row" id="pagination-controls">
        </div>

    </div>
</section>
<!-- Member List End -->
@endsection
@section('scripts')
<script>
    $(document).ready(function () {
        const rowsPerPage = 9; // Số bản ghi trên mỗi trang
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
@endsection