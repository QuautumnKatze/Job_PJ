<!doctype html>
<html lang="en">
<!-- index-540:42-->

<head>
    <!-- Basic Page Needs==================================================-->
    <title>Job Stock - Responsive Job Portal Bootstrap Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS==================================================-->
    <link rel="stylesheet" href="{{asset('plugins/css/plugins.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="{{asset('css/colors/green-style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="Loader"></div>
    <div class="wrapper">
        <nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i
                        class="fa fa-bars"></i></button>
                <div class="navbar-header"><a class="navbar-brand" href="/home"><img src="{{asset('img/logo.png')}}"
                            class="logo logo-scrolled" alt=""></a></div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="active"><input type="text" class="form-control" placeholder="Find Freelancer"></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Việc làm</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('homepage.job-list')}}">Tìm việc làm</a></li>
                                                    <li><a href="{{route('homepage.applications')}}">Việc làm đã ứng
                                                            tuyển</a></li>
                                                    <li><a href="">Việc làm phù hợp</a></li>
                                                    <li><a href="">Danh sách công ty</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hồ sơ & CV</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">

                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="{{route('homepage.cv')}}">CV của bạn</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        @if (Auth::check())
                            <li class="left-br"><a href="{{route('homepage.logout')}}" class="signin">Đăng xuất</a></li>
                        @else
                            <li class="left-br"><a href="{{route('homepage.login')}}" class="signin">Đăng nhập ngay</a></li>
                        @endif

                    </ul>
                </div>
            </div>
        </nav>
        @yield('homepage_content')

        <footer class="footer">
            <div class="row lg-menu">
                <div class="container">
                    <div class="col-md-4 col-sm-4"><img src="{{asset('img/footer-logo.png')}}" class="img-responsive"
                            alt="" />
                    </div>
                    <div class="col-md-8 co-sm-8 pull-right">
                        <ul>
                            <li><a href="index-2.html" title="">Home</a></li>
                            <li><a href="blog.html" title="">Blog</a></li>
                            <li><a href="404.html" title="">404</a></li>
                            <li><a href="faq.html" title="">FAQ</a></li>
                            <li><a href="contact.html" title="">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row no-padding">
                <div class="container">
                    <div class="col-md-3 col-sm-12">
                        <div class="footer-widget">
                            <h3 class="widgettitle widget-title">About Job Stock</h3>

                            <div class="textwidget">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>

                                <p>7860 North Park Place<br>San Francisco, CA 94120</p>

                                <p><strong>Email:</strong> Support@careerdesk</p>

                                <p><strong>Call:</strong> <a href="tel:+15555555555">555-555-1234</a></p>
                                <ul class="footer-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-widget">
                            <h3 class="widgettitle widget-title">All Navigation</h3>

                            <div class="textwidget">
                                <div class="textwidget">
                                    <ul class="footer-navigation">
                                        <li><a href="manage-company.html" title="">Front-end Design</a></li>
                                        <li><a href="manage-company.html" title="">Android Developer</a></li>
                                        <li><a href="manage-company.html" title="">CMS Development</a></li>
                                        <li><a href="manage-company.html" title="">PHP Development</a></li>
                                        <li><a href="manage-company.html" title="">IOS Developer</a></li>
                                        <li><a href="manage-company.html" title="">Iphone Developer</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-widget">
                            <h3 class="widgettitle widget-title">All Categories</h3>

                            <div class="textwidget">
                                <ul class="footer-navigation">
                                    <li><a href="manage-company.html" title="">Front-end Design</a></li>
                                    <li><a href="manage-company.html" title="">Android Developer</a></li>
                                    <li><a href="manage-company.html" title="">CMS Development</a></li>
                                    <li><a href="manage-company.html" title="">PHP Development</a></li>
                                    <li><a href="manage-company.html" title="">IOS Developer</a></li>
                                    <li><a href="manage-company.html" title="">Iphone Developer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-widget">
                            <h3 class="widgettitle widget-title">Connect Us</h3>

                            <div class="textwidget">
                                <form class="footer-form"><input type="text" class="form-control"
                                        placeholder="Your Name">
                                    <input type="text" class="form-control" placeholder="Email"><textarea
                                        class="form-control" placeholder="Message"></textarea>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row copyright">
                <div class="container">
                    <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                </div>
            </div>
        </footer>

        <div class="clearfix"></div>
        <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="tab" role="tabpanel">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#login" role="tab"
                                        data-toggle="tab">Sign
                                        In</a></li>
                                <li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myModalLabel2">
                                <div role="tabpanel" class="tab-pane fade in active" id="login">
                                    <img src="{{asset('img/logo.png')}}" class="img-responsive" alt="" />

                                    <div class="subscribe wow fadeInUp">
                                        <form class="form-inline" id="loginInlineForm"
                                            action="{{route('homepage.login.submit')}}" method="post">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="login" class="form-control"
                                                        placeholder="Tên đăng nhập hoặc email" required="">
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Password" required="">

                                                    <div class="center">
                                                        <button type="submit" id="login-btn" class="submit-btn"> Đăng
                                                            nhập
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="register">
                                    <img src="{{asset('img/logo.png')}}" class="img-responsive" alt="" />

                                    <form class="form-inline" method="post">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="Your Name" required=""><input type="email" name="email"
                                                    class="form-control" placeholder="Your Email" required=""><input
                                                    type="email" name="email" class="form-control"
                                                    placeholder="Username" required=""><input type="password"
                                                    name="password" class="form-control" placeholder="Password"
                                                    required="">

                                                <div class="center">
                                                    <button type="submit" id="subscribe" class="submit-btn"> Create
                                                        Account
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog"
                aria-hidden="true"></i></button>
        <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
            <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
            <ul id="styleOptions" title="switch styling">
                <li><a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a></li>
                <li><a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a></li>
                <li><a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a></li>
                <li><a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a></li>
                <li><a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a></li>
                <li><a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a></li>
                <li><a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a></li>
                <li><a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a></li>
            </ul>
        </div>
        <!-- Scripts==================================================-->
        <script type="text/javascript" src="{{asset('plugins/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/js/viewportchecker.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/js/bootsnav.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/js/select2.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/js/wysihtml5-0.3.0.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/js/bootstrap-wysihtml5.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/js/datedropper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/js/dropzone.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/js/loader.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/js/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/js/slick.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/js/gmap3.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/js/jquery.easy-autocomplete.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <script src="{{asset('js/jQuery.style.switcher.js')}}"></script>
        <!-- <script type="text/javascript">$(document).ready(function () {
                $('#styleOptions').styleSwitcher();
            });</script>
        <script>function openRightMenu() {
                document.getElementById("rightMenu").style.display = "block";
            }
            function closeRightMenu() {
                document.getElementById("rightMenu").style.display = "none";
            }
        </script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function () {
                $('#loginInlineForm').on('submit', function (e) {
                    e.preventDefault();

                    $.ajax({
                        url: $(this).attr('action'),
                        method: 'POST',
                        data: $(this).serialize(),
                        success: function (response) {
                            if (response.success) {
                                toastr.success(response.msg);
                                setTimeout(function () {
                                    window.location.href = '/home';
                                }, 1000);
                            }
                        },
                        error: function (response) {
                            if (response.status === 422) {
                                let errors = response.responseJSON.errors;
                                toastr.error(errors.login ? errors.login[0] : 'Lỗi đăng nhập.');
                            } else {
                                toastr.error('Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin.');
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

        @yield('scripts')
    </div>
</body>
<!-- index-540:45-->

</html>