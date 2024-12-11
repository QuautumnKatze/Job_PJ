@extends('homepage_layout')
@section('homepage_content')
<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url({{asset($blogdata->image)}});">
    <div class="container">
        <h1 style="line-height:1.4">{{$blogdata->title}}</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- Blog Detail -->
<section class="section">
    <div class="container">
        <div class="row no-mrg">
            <div class="col-md-8">
                <article class="blog-news">
                    <div class="full-blog">

                        <figure class="img-holder">
                            <a href="blog-detail.html"><img src="{{asset($blogdata->image)}}" class="img-responsive"
                                    alt="News"></a>
                            <div class="blog-post-date">
                                $blogdata->created_at
                            </div>
                        </figure>

                        <div class="full blog-content">
                            <div class="post-meta">Đăng bởi: <span
                                    class="author">{{$blogdata->admin->account->full_name}}</span> | 10 Comments </div>
                            <a href="blog-detail.html">
                                <h2>{{$blogdata->title}}</h2>
                            </a>
                            <div class="blog-text">
                                {!!$blogdata->content!!}
                                <div class="post-meta">Filed Under: <span class="category"><a
                                            href="#">Technology</a></span></div>
                            </div>
                            <div class="row no-mrg">
                                <div class="blog-footer-social">
                                    <span>Share <i class="fa fa-share-alt"></i></span>
                                    <ul class="list-inline social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </article>
            </div>

            <!-- Start Sidebar -->
            <div class="col-md-4">
                <div class="blog-sidebar">

                    <form action="#">
                        <div class="search-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search…">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default">Go</button>
                                </span>
                            </div>
                        </div>
                    </form>

                    <div class="sidebar-widget">
                        <h4>Popular Category</h4>
                        <ul class="sidebar-list">
                            <li><a href="#">About Donation <span>(8)</span></a></li>
                            <li><a href="#">About Donation <span>(8)</span></a></li>
                            <li><a href="#">About Donation <span>(8)</span></a></li>
                            <li><a href="#">About Donation <span>(8)</span></a></li>
                            <li><a href="#">About Donation <span>(8)</span></a></li>
                            <li><a href="#">About Donation <span>(8)</span></a></li>
                        </ul>
                    </div>

                    <div class="sidebar-widget">
                        <h4>Popular Category</h4>
                        <div class="blog-item">
                            <div class="post-thumb"><a href="blog-detail.html"><img src="assets/img/blog/1.jpg"
                                        class="img-responsive" alt=""></a></div>
                            <div class="blog-detail">
                                <a href="#">
                                    <h4>Enim Ad Minim Veniam, Quis Nostrud Exercitation</h4>
                                </a>
                                <div class="post-info">Aug 10 2016</div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="post-thumb"><a href="blog-detail.html"><img src="assets/img/blog/2.jpg"
                                        class="img-responsive" alt=""></a></div>
                            <div class="blog-detail">
                                <a href="#">
                                    <h4>Enim Ad Minim Veniam, Quis Nostrud Exercitation</h4>
                                </a>
                                <div class="post-info">Aug 10 2016</div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="post-thumb"><a href="blog-detail.html"><img src="assets/img/blog/3.jpg"
                                        class="img-responsive" alt=""></a></div>
                            <div class="blog-detail">
                                <a href="#">
                                    <h4>Enim Ad Minim Veniam, Quis Nostrud Exercitation</h4>
                                </a>
                                <div class="post-info">Aug 10 2016</div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h4>Recent Category</h4>
                        <div class="blog-item">
                            <div class="post-thumb"><a href="blog-detail.html"><img src="assets/img/blog/1.jpg"
                                        class="img-responsive" alt=""></a></div>
                            <div class="blog-detail">
                                <a href="#">
                                    <h4>Enim Ad Minim Veniam, Quis Nostrud Exercitation</h4>
                                </a>
                                <div class="post-info">Aug 10 2016</div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="post-thumb"><a href="blog-detail.html"><img src="assets/img/blog/2.jpg"
                                        class="img-responsive" alt=""></a></div>
                            <div class="blog-detail">
                                <a href="#">
                                    <h4>Enim Ad Minim Veniam, Quis Nostrud Exercitation</h4>
                                </a>
                                <div class="post-info">Aug 10 2016</div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="post-thumb"><a href="blog-detail.html"><img src="assets/img/blog/3.jpg"
                                        class="img-responsive" alt=""></a></div>
                            <div class="blog-detail">
                                <a href="#">
                                    <h4>Enim Ad Minim Veniam, Quis Nostrud Exercitation</h4>
                                </a>
                                <div class="post-info">Aug 10 2016</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Start Sidebar -->
        </div>
    </div>
</section>
<!-- Blog Detail End -->
@endsection
@section('scripts')

@endsection