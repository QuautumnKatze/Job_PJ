@extends("admin_layout")
@section("admin_content")
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-6">
            <h4 class="fw-bold py-3 mb-4">Quản lý nhà tuyển dụng</h4>
        </div>
        <div class="col-lg-6 d-flex flex-row-reverse">
            <button class="btn">
                <a class="btn btn-primary" href="{{route('postC.create')}}">Thêm mới</a>
            </button>
        </div>


    </div>


    <!-- Striped Rows -->
    <div class="card">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="card-header">Danh sách nhà tuyển dụng</h5>
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
                        <th>Mã nhà tuyển dụng</th>
                        <th>Tên công ty</th>
                        <th>Người đăng ký</th>
                        <th>Tình trạng</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($recruiterdata as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$item->recruiter->recruiter_id}}</td>
                                            <td>{{$item->recruiter->company_name}}</td>
                                            <td>{{$item->full_name}}</td>
                                            @php
                                                if ($item->recruiter->status == 0) {
                                                    echo '<td id="status-0"><div  id="statusOf-' . $item->account_id . '" ><a class="btn bg-warning text-white" href=""><i class="text-white menu-icon tf-icons bx bx-question-mark"></i> Chưa xác minh</a></div></td>';
                                                } else if ($item->recruiter->status == 1) {
                                                    echo '<td id="status-1"><div  id="statusOf-' . $item->account_id . '" ><a class="btn bg-success text-white" href=""><i class="text-white menu-icon tf-icons bx bx-check-shield"></i> Đã xác minh</a></div></td>';
                                                } else if ($item->recruiter->status == 2) {
                                                    echo '<td id="status-2"><div  id="statusOf-' . $item->account_id . '" ><a class="btn bg-secondary text-white" href=""><i class="text-white menu-icon tf-icons bx bx-no-entry"></i> Hết hạn</a></div></td>';
                                                } else if ($item->recruiter->status == 3) {
                                                    echo '<td id="status-3"><div  id="statusOf-' . $item->account_id . '" ><a class="btn bg-primary text-white" href=""><i class="text-white menu-icon tf-icons bx bx-diamond"></i> Premium</a></div></td>';
                                                }
                                            @endphp
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href=""><i class="bx bx-edit-alt me-1"></i> Xem chi
                                                            tiết</a>
                                                        @php
                                                            if ($item->recruiter->status == 0) {
                                                                echo '<div id="functionOf-' . $item->account_id . '"><button type="button" class="dropdown-item btn-verify" data-id="' . $item->account_id . '"><i class="bx bx-trash me-1"></i>Xác minh</button></div>';
                                                            }
                                                            if ($item->recruiter->status == 1 || $item->recruiter->status == 2) {
                                                                echo '<div id="functionOf-' . $item->account_id . '"><button type="button" class="dropdown-item btn-upgrade" data-id="' . $item->account_id . '"><i class="bx bx-trash me-1"></i>Nâng Premium</button></div>';
                                                            }
                                                        @endphp
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

<script>
    document.getElementById("searchInput").addEventListener("keyup", function () {
        let filter = this.value.toLowerCase();
        let rows = document.querySelectorAll("#table tbody tr");

        rows.forEach(row => {
            let id = row.cells[1].textContent.toLowerCase();
            let name = row.cells[2].textContent.toLowerCase();
            let statusCell = row.cells[4].id.toLowerCase();

            if (filter.startsWith("id:")) {
                // Lấy phần sau "id:" để tìm kiếm
                let searchId = filter.slice(3).trim();
                if (id.includes(searchId)) {
                    row.style.display = ""; // Hiển thị nếu mã sản phẩm khớp
                } else {
                    row.style.display = "none"; // Ẩn nếu không khớp
                }
            } else if (filter.startsWith("status:")) {
                // Lấy phần sau "status:" để tìm kiếm
                let searchStatus = filter.slice(7).trim();
                if (statusCell === `status-` + searchStatus) {
                    row.style.display = ""; // Hiển thị nếu id cột status khớp
                } else {
                    row.style.display = "none"; // Ẩn nếu không khớp
                }
            } else if (filter.startsWith("+verified")) {
                if (statusCell === `status-1`) {
                    row.style.display = ""; // Hiển thị nếu id cột status khớp
                } else {
                    row.style.display = "none"; // Ẩn nếu không khớp
                }
            } else if (filter.startsWith("+unverified")) {
                if (statusCell === `status-0`) {
                    row.style.display = ""; // Hiển thị nếu id cột status khớp
                } else {
                    row.style.display = "none"; // Ẩn nếu không khớp
                }
            } else if (filter.startsWith("+expired")) {
                if (statusCell === `status-2`) {
                    row.style.display = ""; // Hiển thị nếu id cột status khớp
                } else {
                    row.style.display = "none"; // Ẩn nếu không khớp
                }
            } else if (filter.startsWith("+premium")) {
                if (statusCell === `status-3`) {
                    row.style.display = ""; // Hiển thị nếu id cột status khớp
                } else {
                    row.style.display = "none"; // Ẩn nếu không khớp
                }
            } else {
                if (id.includes(filter) || name.includes(filter)) {
                    row.style.display = "";  // Hiển thị dòng phù hợp
                } else {
                    row.style.display = "none";  // Ẩn dòng không phù hợp
                }
            }
        });
    });

    $(document).ready(function () {
        $('body').on('click', '.btn-verify', function (e) {
            e.preventDefault();
            const id = $(this).data('id');
            Swal.fire({
                title: "Phê duyệt xác minh nhà tuyển dụng này?",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Có",
                cancelButtonText: "Hủy",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/admin/recruiter-verify/" + id,
                        type: "POST",
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            toastr.success(response.message);
                            $('#statusOf-' + id).html('<a class="btn bg-success text-white" href=""><i class="text-white menu-icon tf-icons bx bx-check-shield"></i> Đã xác minh</a>');
                            $('#functionOf-' + id).html(
                                `<button type="button" class="dropdown-item btn-upgrade" data-id="` + id + `"><i class="bx bx-trash me-1"></i>Nâng Premium</button>`
                            );
                        },
                        error: function (xhr) {
                            toastr.error('Có lỗi khi xác minh');
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
        $('body').on('click', '.btn-upgrade', function (e) {
            e.preventDefault();
            const id = $(this).data('id');
            Swal.fire({
                title: "Nâng cấp Premium nhà tuyển dụng này?",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Có",
                cancelButtonText: "Hủy",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/admin/recruiter-upgrade/" + id,
                        type: "POST",
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            toastr.success(response.message);
                            $('#statusOf-' + id).html('<a class="btn bg-primary text-white" href=""><i class="text-white menu-icon tf-icons bx bx-diamond"></i> Premium</a>');
                            $('#functionOf-' + id).remove();
                        },
                        error: function (xhr) {
                            toastr.error('Có lỗi khi xác minh');
                        }
                    });
                }
            });
        })

        setTimeout(function () {
            $("#myAlert").fadeOut(500);
        }, 3500);
    })
</script>

@endsection