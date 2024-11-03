@extends("admin_layout")
@section("admin_content")
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <a href="{{route('jobC.index')}}">
            <span class="text-muted fw-light">Quản lý danh mục tuyển dụng/</span>
        </a>
        Chỉnh sửa

    </h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Chỉnh sửa danh mục</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('jobC.update', $jobcategorydata->job_category_id)}}" method="post">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label class="form-label" for="">Tên danh mục</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-category"></i></span>
                                <input type="text" class="form-control" name="job_category_name"
                                    id="basic-icon-default-fullname" value="{{$jobcategorydata->job_category_name}}"
                                    aria-label="" aria-describedby="basic-icon-default-fullname2" required />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Ghi chú</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-notepad"></i></span>
                                <input type="text" class="form-control" name="description"
                                    id="basic-icon-default-fullname" value="{{$jobcategorydata->description}}"
                                    aria-label="" aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Trạng thái</label>
                            <select id="defaultSelect" name="status" class="form-select">
                                <option value="1" {{$jobcategorydata->status == 1 ? 'selected' : ''}}>Hiện</option>
                                <option value="0" {{$jobcategorydata->status == 0 ? 'selected' : ''}}>Ẩn</option>
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