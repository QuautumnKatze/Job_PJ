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


        <!--/.row-->
        <div class="row">
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>

    </div>
</section>
<!-- ========== Begin: Brows job Category End ===============  -->
@endsection