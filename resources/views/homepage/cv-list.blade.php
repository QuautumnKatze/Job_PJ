@extends('homepage_layout')
@section('homepage_content')
<div class="clearfix"></div>

<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url({{asset('/img/banner-10.jpg')}});">
    <div class="container">
        <h1>Danh sách CV</h1>
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
            @foreach ($cvdata as $cv)
                <div class="item-click">
                    <article>
                        <div class="brows-job-list">
                            <div class="col-md-1 col-sm-2 small-padding">
                                <div class="brows-job-company-img">
                                    <a href="{{route('homepage.cv-detail', $cv->cv_id)}}">
                                        <img src="{{asset('storage\photos\shares\default\cv.jpg')}}"
                                            class="img-responsive" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <div class="brows-job-position">
                                    <a href="{{route('homepage.cv-detail', $cv->cv_id)}}">
                                        <h3>{{$cv->cv_name}}</h3>
                                    </a>

                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="brows-job-link">
                                    <a href="{{route('homepage.cv-detail', $cv->cv_id)}}" class="btn btn-default">Xem</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>


        <!--/.row-->
        <div class="row" id="pagination-controls">
        </div>

    </div>
</section>
@endsection