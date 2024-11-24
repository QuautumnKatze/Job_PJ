@extends('homepage_layout')
@section('homepage_content')
<div class="clearfix"></div>

<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url({{asset('img/banner-10.jpg')}});">
    <div class="container">
        <h1>Đơn ứng tuyển</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<div class="container">
    <div class="item-click">
        <article>
            <div class="brows-job-list">
                <div class="col-md-1 col-sm-2 small-padding">
                    <div class="brows-job-company-img">
                        <a href="{{route('homepage.job-detail', $jobdata->job_id)}}"><img
                                src="{{$jobdata->recruiter->account->avatar}}" class="img-responsive" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="brows-job-position">
                        <a href="{{route('homepage.job-detail', $jobdata->job_id)}}">
                            <h3>{{$jobdata->job_name}}</h3>
                        </a>
                        <p>
                            <span>{{$jobdata->recruiter->company_name}}</span><span class="brows-job-sallery"><i
                                    class="fa fa-money"></i>{{$jobdata->salary}}</span>
                            <span class="job-type cl-success bg-trans-success">{{$jobdata->quantity}} vị trí</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="brows-job-location">
                        <p class="single-line"><i class="fa fa-map-marker"></i>{{$jobdata->location}}</p>
                    </div>
                </div>
            </div>
            <span class="tg-themetag tg-featuretag">Premium</span>
        </article>
    </div>
</div>

<!-- Tab Section Start -->
<section class="tab-sec">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <div class="First-tab tool-tab">
                <ul class="nav simple nav-tabs" id="simple-design-tab">
                    <li class="active"><a href="#sectionA">Chọn CV có sẵn</a></li>
                    <li><a href="#sectionB">Tải lên CV</a></li>
                </ul>
                <div class="tab-content">

                    <div id="sectionA" class="tab-pane fade in active">
                        <section class="full-detail">
                            <div class="container">
                                <div class="row bottom-mrg extra-mrg">
                                    <form id="ApplyFormByOwnedCV" action="{{route('homepage.apply-submit')}}"
                                        method="POST">
                                        @csrf
                                        <h2 class="detail-title">Chọn CV có sẵn</h2>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                                <select name="cv_id" class="form-control input-lg">
                                                    @if ($cvdata->isEmpty())
                                                        <option>Bạn chưa có CV nào cả!</option>
                                                    @else
                                                        @foreach ($cvdata as $cv)
                                                            <option value="{{$cv->cv_id}}">{{$cv->cv_name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input type="text" name="description" class="form-control"
                                                    placeholder="Lời nhắn">
                                            </div>
                                        </div>

                                        <input type="hidden" name="job_id" value="{{$jobdata->job_id}}">

                                        <input type="hidden" name="submitType" value="1">

                                        <div class="row bottom-mrg extra-mrg">
                                            <div class="col-md-12">
                                                @if ($cvdata->isEmpty())
                                                    <button type="submit" class="btn btn-success btn-primary small-btn"
                                                        disabled="">Gửi đơn ứng
                                                        tuyển</button>
                                                @else
                                                    <button type="submit" class="btn btn-success btn-primary small-btn">Gửi
                                                        đơn ứng
                                                        tuyển</button>
                                                @endif

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div id="sectionB" class="tab-pane fade">
                        <section class="full-detail">
                            <div class="container">
                                <div class="row bottom-mrg extra-mrg">
                                    <form id="ApplyFormByUploadCV" action="{{route('homepage.apply-submit')}}"
                                        method="POST">
                                        @csrf
                                        <h2 class="detail-title">Tải lên CV</h2>
                                        <div class="col-md-10 col-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                                <input type="text" id="cv_path" name="cv_path" class="form-control"
                                                    placeholder="CV" required="" readonly="">
                                            </div>

                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                            <button type="button" id="lfm" data-input="image" data-preview="holder"
                                                class="btn bg-primary">Tải
                                                lên từ thiết
                                                bị</button>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input type="text" name="description" class="form-control"
                                                    placeholder="Lời nhắn">
                                            </div>
                                        </div>

                                        <input type="hidden" name="cv_name"
                                            value="CV ứng tuyển cho {{$jobdata->job_name}}">

                                        <input type="hidden" name="job_id" value="{{$jobdata->job_id}}">

                                        <input type="hidden" name="submitType" value="2">

                                        <div class="row bottom-mrg extra-mrg">
                                            <div class="col-md-12">
                                                <button type="submit" id="submitBtn2"
                                                    class="btn btn-success btn-primary small-btn" disabled>Gửi
                                                    đơn ứng
                                                    tuyển</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- <div id="sectionC" class="tab-pane fade">
                        <h3>section C</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum sed diam ac
                            fermentum. Mauris nec pellentesque neque. Cras nec diam euismod, congue sapien eu,
                            fermentum
                            libero. Vestibulum quis sem.</p>
                    </div> -->

                </div>
            </div>
        </div>

    </div>
</section>
<!-- Tab section End -->
@endsection
@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $(document).ready(function () {
        $('#ApplyFormByOwnedCV').on('submit', function (e) {
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

    $(document).ready(function () {
        $('#ApplyFormByUploadCV').on('submit', function (e) {
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

    var initialUrl = $('#cv_path').val();
    $('#lfm').filemanager('file');
    $('#lfm').on('click', function () {
        var route_prefix = '/file-manager';
        window.open(route_prefix + '?type=file', 'FileManager', 'width=700,height=400');
        window.SetUrl = function (items) {
            var url = items[0].url;
            var urlPush = url.replace("http://127.0.0.1:8000", "");
            $('#cv_path').val(urlPush);
            $('#submitBtn2').removeAttr('disabled');
        };
    });
</script>

@endsection