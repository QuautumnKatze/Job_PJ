@extends('homepage_layout')
@section('homepage_content')
<!-- Title Header Start -->
<section class="inner-header-title" style="background-image:url({{asset('img/banner-10.jpg')}});">
    <div class="container">
        <h1>Bài viết</h1>
    </div>
</section>
<div class="clearfix"></div>
<!-- Title Header End -->

<!-- All blog List Start -->
<section class="section">
    <div class="container">
        <div class="row .no-mrg">
            <!-- Start Blogs -->
            <div class="col-md-8">
                @foreach ($blogdata as $blog)
                    <article class="blog-news">
                        <div class="short-blog">
                            <figure class="img-holder">
                                <a href="{{route('homepage.blog-detail', $blog->post_id)}}"><img
                                        src="{{asset($blog->image)}}" class="img-responsive" alt="News"></a>
                                <div class="blog-post-date">
                                    {{$blog->created_at}}
                                </div>
                            </figure>
                            <div class="blog-content">
                                <div class="post-meta">Đăng bởi: <span
                                        class="author">{{$blog->admin->account->full_name}}</span>
                                    | 10
                                    Comments </div>
                                <a href="{{route('homepage.blog-detail', $blog->post_id)}}">
                                    <h2>{{$blog->title}}</h2>
                                </a>
                                <div class="blog-text">
                                    <p>{{$blog->shorten}}</p>
                                    <div class="post-meta">Filed Under: <span class="category"><a
                                                href="#">Technology</a></span></div>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
            <!-- End Blogs -->

            <!-- Sidebar Start -->
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
            <!-- End Sidebar Start -->
        </div>
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
<!-- All Blog List End -->
@endsection
@section('scripts')

@endsection