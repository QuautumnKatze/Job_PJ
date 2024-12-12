@extends('admin_layout')

@section('admin_content')
<div class="container">
    <h1>Thống kê</h1>

    <!-- Thống kê nhà tuyển dụng tiềm năng -->
    <h2>Top Nhà Tuyển Dụng Tiềm Năng</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên Công Ty</th>
                <th>Số Lượng Bài Đăng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($topRecruiters as $index => $recruiter)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $recruiter->company_name }}</td>
                    <td>{{ $recruiter->job_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Thống kê lĩnh vực theo số lượng nhà tuyển dụng -->
    <h2>Thống Kê Lĩnh Vực Theo Số Lượng Nhà Tuyển Dụng</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Lĩnh Vực</th>
                <th>Số Lượng Nhà Tuyển Dụng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($areasByRecruiters as $index => $area)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $area->area_name }}</td>
                    <td>{{ $area->recruiter_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Thống kê lĩnh vực theo số lượng bài đăng tuyển dụng -->
    <h2>Thống Kê Lĩnh Vực Theo Số Lượng Bài Đăng Tuyển Dụng</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Lĩnh Vực</th>
                <th>Số Lượng Bài Đăng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($areasByJobs as $index => $area)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $area->area_name }}</td>
                    <td>{{ $area->job_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection