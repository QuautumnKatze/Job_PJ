@extends("homepage_layout")
@section('homepage_content')
<div class="clearfix"></div>

<!-- Title Header Start -->
<section class="inner-header-page">
    <div class="container">

        <div class="col-md-8">
            <div class="left-side-container">
                <div class="freelance-image"><a href="company-detail.html"><img
                            src="{{$jobdata->recruiter->account->avatar}}" class="img-responsive" alt=""></a></div>
                <div class="header-details">
                    <h4>{{$jobdata->job_name}}</h4>
                    <p>{{$jobdata->recruiter->company_name}}</p>
                    <ul>
                        <li><a href="#"><i class="fa fa-user"></i> {{$jobdata->quantity}} vị trí</a></li>
                        <!-- <li>
                            <div class="star-rating" data-rating="4.2">
                                <span class="fa fa-star fill"></span>
                                <span class="fa fa-star fill"></span>
                                <span class="fa fa-star fill"></span>
                                <span class="fa fa-star fill"></span>
                                <span class="fa fa-star-half fill"></span>
                            </div>
                        </li> -->
                        <li><img class="flag" src="assets/img/gb.svg" alt=""> {{$jobdata->location}}</li>
                        <!-- <li>
                            <div class="verified-action">Verified</div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4 bl-1 br-gary">
            <div class="right-side-detail">
                <ul>
                    <li><span class="detail-info">Mức lương: </span>{{$jobdata->salary}}</li>
                    <li><span class="detail-info">Yêu cầu: </span>{{$jobdata->requirement}}</li>
                    <li><span class="detail-info">Trạng thái:
                        </span>{{$jobdata->status == 1 ? "Đang tuyển dụng" : "Hết hạn tuyển dụng"}}</li>
                </ul>
                <ul class="social-info">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>

    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- Job Detail Start -->
<section>
    <div class="container">

        <div class="col-md-8 col-sm-8">
            <div class="container-detail-box">

                <div class="apply-job-header">
                    <h4>{{$jobdata->job_name}}</h4>
                    <a href="company-detail.html" class="cl-success"><span><i
                                class="fa fa-building"></i>{{$jobdata->recruiter->company_name}}</span></a>
                    <span><i class="fa fa-map-marker"></i>{{$jobdata->location}}</span>
                </div>

                <div class="apply-job-detail">
                    {!! $jobdata->content !!}
                </div>

                <!-- <div class="apply-job-detail">
                    <h5>Skills</h5>
                    <ul class="skills">
                        <li>Css3</li>
                        <li>Html5</li>
                        <li>Photoshop</li>
                        <li>Wordpress</li>
                        <li>PHP</li>
                        <li>Java Script</li>
                    </ul>
                </div> -->

                <!-- <div class="apply-job-detail">
                    <h5>Requirements</h5>
                    <ul class="job-requirements">
                        <li><span>Availability</span> Hourly</li>
                        <li><span>Education</span> Graduate</li>
                        <li><span>Age</span> 25+</li>
                        <li><span>Experience</span> Intermidiate (3 - 5Year)</li>
                        <li><span>Language</span> English, Hindi</li>
                    </ul>
                </div> -->

                <a href="#" class="btn btn-success" id="openModal" data-toggle="modal" data-target="#applyModal">
                    Ứng tuyển công việc này
                </a>

            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" id="modalContent">
                    @if (!Auth::check() || Auth::user()->role != 'user')
                        <!-- Nội dung modal khi chưa đăng nhập hoặc là admin -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Yêu cầu đăng nhập tài khoản</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="apply-job-detail">
                                <div style="margin:10px">
                                    <p>Hãy đăng nhập với tài khoản ứng viên của bạn để ứng tuyển công việc
                                    </p>
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <a href="{{route('homepage.login')}}" class="btn btn-primary">Đăng nhập</a>
                        </div>
                    @elseif (Auth::user()->role === 'user')
                        <!-- Nội dung modal khi đã đăng nhập với vai trò user -->
                        <form id="applyForm" action="{{route('homepage.apply')}}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ứng tuyển công việc</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="apply-job-detail">
                                    <div style="margin:10px">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Chọn CV ứng tuyển</label>
                                            <select class="form-control" name="cv_id" id="exampleFormControlSelect1">
                                                @if ($cvdata)
                                                    @foreach ($cvdata as $cv)
                                                        <option value="{{$cv->cv_id}}">{{$cv->cv_name}}</option>
                                                    @endforeach
                                                @elseif ($cvdata == null)
                                                    <option>Hãy tạo cv</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Lời nhắn kèm theo (nếu có)</label>
                                            <textarea class="form-control" name="description"
                                                id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="job_id"
                                                value="{{$jobdata->job_id}}">
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-primary">Gửi ứng tuyển</button>
                            </div>
                        </form>

                    @endif
                </div>
            </div>
        </div>

        <!-- Sidebar Start-->
        <div class="col-md-4 col-sm-4">

            <!-- Job Detail -->
            <div class="sidebar-container">
                <div class="sidebar-box">
                    <span class="sidebar-status">Full Time</span>
                    <h4 class="flc-rate">20K - 30K</h4>
                    <div class="sidebar-inner-box">
                        <div class="sidebar-box-thumb">
                            <img src="assets/img/com-2.jpg" class="img-responsive" alt="" />
                        </div>
                        <div class="sidebar-box-detail">
                            <h4>Google Info</h4>
                            <span class="desination">App Designer</span>
                        </div>
                    </div>
                    <div class="sidebar-box-extra">
                        <ul>
                            <li>Php</li>
                            <li>Android</li>
                            <li>Html</li>
                            <li class="more-skill bg-primary">+3</li>
                        </ul>
                        <ul class="status-detail">
                            <li class="br-1"><strong>Canada</strong>Location</li>
                            <li class="br-1"><strong>748</strong>View</li>
                            <li><strong>03</strong>Post</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="btn btn-sidebar bt-1 bg-success">Apply For This</a>
            </div>

            <!-- Share This Job -->
            <div class="sidebar-wrapper">
                <div class="sidebar-box-header bb-1">
                    <h4>Share This Job</h4>
                </div>

                <ul class="social-share">
                    <li><a href="#" class="fb-share"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tw-share"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="gp-share"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="in-share"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="li-share"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="be-share"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>

        </div>
        <!-- End Sidebar -->

    </div>
</section>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('#applyForm').on('submit', function (e) {
            e.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: $(this).serialize(),
                success: function (response) {
                    if (response.success) {
                        toastr.success(response.msg);
                        setTimeout(function () {
                            window.location.href = '/home/applications';
                        }, 1000);
                    }
                },
                error: function (response) {
                    if (response.status === 422) {
                        let errors = response.responseJSON.errors;
                        toastr.error(errors.login ? errors.login[0] : 'Đã xảy ra lỗi.');
                    } else {
                        toastr.error('Lỗi.');
                    }
                }
            });
        });
    });

    @if (session('success'))
        toastr.success("{{ session('success') }}");
    @endif
    @if (session('error'))
        toastr.success("{{ session('error') }}");
    @endif
</script>
@endsection