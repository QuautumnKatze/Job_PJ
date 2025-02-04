@extends("admin_layout")
@section("admin_content")
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-6">
            <h4 class="fw-bold py-3 mb-4">Quản lý danh mục tuyển dụng</h4>
        </div>
        <div class="col-lg-6 d-flex flex-row-reverse">
            <button class="btn">
                <a class="btn btn-primary" href="{{route('jobC.create')}}">Thêm mới</a>
            </button>
        </div>
        <!-- Hiển thị -->

    </div>


    <!-- Striped Rows -->
    <div class="card">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="card-header">Danh sách danh mục tuyển dụng</h5>
            </div>
            <div class="col-lg-5 my-auto ms-5">
                <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input type="text" id="searchInput" class="form-control border-0 shadow-none"
                        placeholder="Tìm kiếm..." aria-label="Search..." />
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table id="table" class="table table-striped">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Ghi chú</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $i = 1
                    @endphp
                    @foreach ($jobcategorydata as $item)
                                        <tr id="jobC-{{$item->job_category_id}}">
                                            <td>{{$i++}}</td>
                                            <td>{{$item->job_category_name}}</td>
                                            <td>
                                                {{$item->description}}
                                            </td>
                                            <td>
                                                @php
                                                    if ($item->status == 1) {
                                                        echo '<i class="text-success menu-icon tf-icons bx bx-check-circle"></i>';
                                                    } else {
                                                        echo '<i class="text-danger menu-icon tf-icons bx bx-x-circle"></i>';
                                                    }
                                                @endphp
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{route('jobC.edit', $item->job_category_id)}}"><i
                                                                class="bx bx-edit-alt me-1"></i> Chỉnh sửa</a>
                                                        <button type="button" class="dropdown-item btn-delete"
                                                            data-id="{{$item->job_category_id}}">
                                                            <i class="bx bx-trash me-1"></i>
                                                            Xóa
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="pagination-controls" class="d-flex justify-content-end my-3 me-3"></div>
        </div>
    </div>
    <!--/ Striped Rows -->

    <hr class="my-5" />
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .custom-title {
        color: black;
        /* Đổi màu tiêu đề thành màu đen */
    }
</style>
<script>
    $(document).ready(function () {
        $('body').on('click', '.btn-delete', function (e) {
            e.preventDefault();
            const id = $(this).data('id');
            Swal.fire({
                title: "Xác nhận xóa danh mục?",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Xóa",
                cancelButtonText: "Hủy",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/admin/job-categories/delete/" + id,
                        type: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            toastr.success(response.message);
                            $('#jobC-' + id).remove();
                        },
                        error: function (xhr) {
                            toastr.error('Có lỗi khi xóa danh mục');
                        }
                    });
                }
            });
        })

        setTimeout(function () {
            $("#myAlert").fadeOut(500);
        }, 3500);
    })

    document.getElementById("searchInput").addEventListener("keyup", function () {
        let filter = this.value.toLowerCase();
        let rows = document.querySelectorAll("#table tbody tr");

        rows.forEach(row => {
            let name = row.cells[1].textContent.toLowerCase();

            if (name.includes(filter)) {
                row.style.display = "";  // Hiển thị dòng phù hợp
            } else {
                row.style.display = "none";  // Ẩn dòng không phù hợp
            }
        });
    });
</script>

@endsection