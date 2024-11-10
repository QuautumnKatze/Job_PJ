@extends('collab_layout')
@section('collab_content')
<div class="clearfix"></div>
<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url({{asset('/img/banner-10.jpg')}});">
    <div class="container">
        <h1>Quản lý việc làm</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- Manage Company List Start -->
<section class="manage-company gray">
    <div class="container">

        <!-- search filter -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="search-filter">
                    <div class="col-md-4 col-sm-5">
                        <div class="filter-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default">Tìm</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-7">
                        <div class="short-by pull-right">
                            Sort By
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

        <div class="row">
            <div id="list" class="col-md-12">
                @foreach ($jobdata as $job)
                    <article id="job-{{$job->job_id}}">
                        <div class="mng-company">
                            <div class="col-md-2 col-sm-2">
                                <div class="mng-company-pic">
                                    @foreach($accountdata as $acc)
                                        @if ($acc->recruiter->recruiter_id == $job->recruiter_id)
                                            <a href="{{route('homepage.jobdetail', $job->job_id)}}" data-toggle="tooltip"><img
                                                    src="{{$acc->avatar}}" class="img-responsive" alt="" /></a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="mng-company-name">
                                    <h4><a href="{{route('homepage.jobdetail', $job->job_id)}}"
                                            data-toggle="tooltip">{{$job->job_name}}</a> </h4>
                                    <span class="cmp-time">{{$job->salary}}</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="mng-company-location">
                                    <p><i class="fa fa-map-marker"></i> {{$job->location}}</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="mng-company-action">
                                    <a href="{{route('collab.job-application', $job->job_id)}}" data-toggle="tooltip"
                                        title="Đơn ứng tuyển"><i class="fa fa-users"></i></a>
                                    <a href="{{route('collab.edit-job', $job->job_id)}}" data-toggle="tooltip"
                                        title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0)" class="btn-delete" data-toggle="tooltip" title="Delete"
                                        data-id="{{$job->job_id}}">
                                        <i class="fa fa-trash-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="row" id="pagination-controls">
        </div>

    </div>
</section>
<!-- Manage Company List End -->
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
        $('body').on('click', '.btn-delete', function (e) {
            e.preventDefault();
            const id = $(this).data('id');
            Swal.fire({
                title: "Xác nhận xóa công việc này?",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Xóa",
                cancelButtonText: "Hủy",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/collab/delete-job/" + id,
                        type: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            toastr.success(response.message);
                            $('#job-' + id).remove();
                        },
                        error: function (xhr) {
                            toastr.error('Có lỗi khi xóa bài viết');
                        }
                    });
                }
            });
        })

        setTimeout(function () {
            $("#myAlert").fadeOut(500);
        }, 3500);
    })

    $(document).ready(function () {
        const rowsPerPage = 10; // Số bản ghi trên mỗi trang
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