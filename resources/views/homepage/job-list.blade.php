@extends("homepage_layout")
@section('homepage_content')
<style>
    .single-line {
        white-space: nowrap;
        /* Ngăn dòng mới, giữ toàn bộ nội dung trên một dòng */
        overflow: hidden;
        /* Ẩn phần nội dung bị tràn */
        text-overflow: ellipsis;
        /* Hiển thị dấu "..." nếu nội dung quá dài */
    }
</style>
<div class="clearfix"></div>

<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url({{asset('/img/banner-10.jpg')}});">
    <div class="container">
        <h1>Browse Jobs</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- ========== Begin: Brows job Category ===============  -->
<section class="brows-job-category">
    <div class="container">
        <!-- Company Searrch Filter Start -->
        <div class="row extra-mrg">
            <div class="wrap-search-filter">
                <form>
                    <div class="col-md-4 col-sm-4">
                        <input type="text" class="form-control" placeholder="Keyword: Name, Tag">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <input type="text" class="form-control" placeholder="Location: City, State, Zip">
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <select class="selectpicker form-control" multiple title="All Categories">
                            <option>Information Technology</option>
                            <option>Mechanical</option>
                            <option>Hardware</option>
                        </select>

                    </div>
                    <div class="col-md-2 col-sm-2">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Company Searrch Filter End -->
        <div id="list" class="col-lg-12 col-md-12 col-sm-12">
            @foreach ($jobdata as $job)
                <div class="item-click">
                    <article>
                        <div class="brows-job-list">
                            <div class="col-md-1 col-sm-2 small-padding">
                                <div class="brows-job-company-img">
                                    <a href="{{route('homepage.job-detail', $job->job_id)}}"><img
                                            src="{{$job->recruiter->account->avatar}}" class="img-responsive" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <div class="brows-job-position">
                                    <a href="{{route('homepage.job-detail', $job->job_id)}}">
                                        <h3>{{$job->job_name}}</h3>
                                    </a>
                                    <p>
                                        <span>{{$job->recruiter->company_name}}</span><span class="brows-job-sallery"><i
                                                class="fa fa-money"></i>{{$job->salary}}</span>
                                        <span class="job-type cl-success bg-trans-success">{{$job->quantity}} vị trí</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="brows-job-location">
                                    <p class="single-line"><i class="fa fa-map-marker"></i>{{$job->location}}</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="brows-job-link">
                                    <a href="job-apply-detail.html" class="btn btn-default">Apply Now</a>
                                </div>
                            </div>
                        </div>
                        <span class="tg-themetag tg-featuretag">Premium</span>
                    </article>
                </div>
            @endforeach
        </div>


        <!--/.row-->
        <div class="row" id="pagination-controls">
        </div>

    </div>
</section>
<!-- ========== Begin: Brows job Category End ===============  -->
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