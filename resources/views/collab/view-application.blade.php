@extends('collab_layout')
@section('collab_content')
<style>
    .detail-pannel-footer-btn a.footer-btn.red-btn {
        background: #de0032;
    }

    .pdf {
        width: 100%;
        aspect-ratio: 4 / 3;
    }

    .pdf,
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>
<div class="clearfix"></div>

<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url({{asset('/img/banner-10.jpg')}});">
    <div class="container">
        <h1>Thông tin ứng tuyển</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- Company Detail Start -->
<section class="detail-desc">
    <div class="container white-shadow">

        <div class="row">
            <div class="detail-pic">
                <img src="{{asset($applicationdata->cv->user->account->avatar)}}" class="img" alt="" />
            </div>
            <div class="detail-status">
                <span>{{$timeAgo}}</span>
            </div>
        </div>

        <div class="row bottom-mrg">

            <div class="col-md-8 col-sm-8">
                <div class="detail-desc-caption">
                    <h4>{{$applicationdata->cv->user->account->full_name}}</h4>
                    <span class="designation">Số điện thoại: {{$applicationdata->cv->user->phone}}</span>
                    <p>{{$applicationdata->description}}</p>
                </div>
            </div>

            <!-- <div class="col-md-4 col-sm-4">
                <div class="get-touch">
                    <h4>Get in Touch</h4>
                    <ul>
                        <li><i class="fa fa-map-marker"></i><span>Menlo Park, CA</span></li>
                        <li><i class="fa fa-envelope"></i><span>danieldax704@gmail.com</span></li>
                        <li><i class="fa fa-globe"></i><span>microft.com</span></li>
                        <li><i class="fa fa-phone"></i><span>0 123 456 7859</span></li>
                        <li><i class="fa fa-users"></i><span>1000 -1200</span></li>
                    </ul>
                </div>
            </div> -->

        </div>

        <div class="row no-padd">
            <div class="detail pannel-footer">

                <div class="col-md-4 col-sm-4">
                    <ul class="detail-footer-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>

                <div class="col-md-8 col-sm-8">
                    <div class="detail-pannel-footer-btn pull-right" id="button-zone">
                        @if ($applicationdata->status == 0)

                            <a href="#" class="footer-btn red-btn" title="" id="rejectBtn"
                                data-id="{{ $applicationdata->application_id }}">Từ chối</a>
                            <a href="#" class="footer-btn blu-btn" title="" id="approveBtn"
                                data-id="{{ $applicationdata->application_id }}">Phê duyệt</a>
                        @elseif ($applicationdata->status == 2)
                            <a href="javascript:void(0)" class="footer-btn red-btn" title="">Đã bị từ chối chối</a>
                        @elseif ($applicationdata->status == 1)
                            <a href="javascript:void(0)" class="footer-btn blu-btn" title="">Đã được phê duyệt</a>
                        @endif

                    </div>
                </div>
                <div>
                    <object class="pdf" data="<?php echo 'http://127.0.0.1:8000' . $applicationdata->cv->cv_path ?>"
                        width="800" height="500">
                    </object>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- Company Detail End -->
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function () {
        // Xử lý sự kiện khi nhấn nút chấp nhận
        $('#approveBtn').click(function () {
            let applicationId = $(this).data('id');
            Swal.fire({
                title: 'Bạn có chắc chắn phê duyệt?',
                text: "Hành động này không thể hoàn tác!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Có, phê duyệt!',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/collab/approve-application',  // URL đến hàm approve trong Controller
                        method: 'POST',
                        data: {
                            application_id: applicationId,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            toastr.success(response.success);
                            $('#button-zone').html('<a href="javascript:void(0)" class="footer-btn blu-btn" title="">Đã được phê duyệt</a>');
                        },
                        error: function (xhr) {
                            toastr.error(xhr.responseJSON.error);
                        }
                    });
                }
            });
        });

        // Xử lý sự kiện khi nhấn nút từ chối
        $('#rejectBtn').click(function () {
            let applicationId = $(this).data('id');

            Swal.fire({
                title: 'Bạn có chắc chắn từ chối?',
                text: "Hành động này không thể hoàn tác!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Có, từ chối!',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/collab/reject-application',  // URL đến hàm reject trong Controller
                        method: 'POST',
                        data: {
                            application_id: applicationId,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            toastr.success(response.success);
                            $('#button-zone').html('<a href="javascript:void(0)" class="footer-btn red-btn" title="">Đã bị từ chối chối</a>');
                        },
                        error: function (xhr) {
                            toastr.error(xhr.responseJSON.error);
                        }
                    });
                }
            });
        });
    });
</script>
@endsection