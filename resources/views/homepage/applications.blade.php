@extends('homepage_layout')
@section('homepage_content')
<div class="clearfix"></div>

<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url({{asset('/img/banner-10.jpg')}});">
    <div class="container">
        <h1>Công việc ứng tuyển</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- ========== Begin: Brows job Category ===============  -->
<section class="brows-job-category">
    <div class="container">
        <div id="list" class="col-lg-12 col-md-12 col-sm-12">
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


        <!--/.row-->
        <div class="row" id="pagination-controls">
        </div>

    </div>
</section>
@endsection
@section('scripts')
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
@endsection