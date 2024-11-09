<!doctype html>
<html lang="en">

<!-- login35:56-->

<head>
    <!-- Basic Page Needs
	================================================== -->
    <title>Job Stock - Responsive Job Portal Bootstrap Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
	================================================== -->
    <link rel="stylesheet" href="{{asset('/plugins/css/plugins.css')}}">

    <!-- Custom style -->
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="{{asset('/css/colors/green-style.css')}}">
    <!-- Other style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="simple-bg-screen" style="background-image:url({{asset('/img/banner-10.jpg')}});">
    <div class="Loader"></div>
    <div class="wrapper">

        <!-- Title Header Start -->
        <section class="login-screen-sec">
            <div class="container">
                <div class="login-screen">
                    <a href="index-2.html"><img src="{{asset('/img/logo.png')}}" class="img-responsive" alt=""></a>
                    <form id="loginForm" action="{{route('collab.login.submit')}}" method="POST">
                        @csrf
                        <input type="text" name="login" class="form-control" placeholder="Email đăng nhập" required>
                        <input type="password" name="password" class="form-control" placeholder="Mật khẩu" required>
                        <button class="btn btn-login" type="submit">Đăng nhập</button>
                        <span>Bạn chưa có tài khoản? <a href="{{route('collab.register')}}"> Tạo một tài khoản nhà tuyển
                                dụng</a></span>
                        <span><a href="#"> Quên mật khẩu</a></span>
                    </form>
                </div>
            </div>
        </section>
        <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog"
                aria-hidden="true"></i></button>
        <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
            <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Đóng &times;</button>
            <ul id="styleOptions" title="switch styling">
                <li>
                    <a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a>
                </li>
            </ul>
        </div>

        <!-- Scripts
			================================================== -->
        <script type="text/javascript" src="{{asset('/plugins/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/plugins/js/viewportchecker.js')}}"></script>
        <script type="text/javascript" src="{{asset('/plugins/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/plugins/js/bootsnav.js')}}"></script>
        <script type="text/javascript" src="{{asset('/plugins/js/select2.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/plugins/js/wysihtml5-0.3.0.js')}}"></script>
        <script type="text/javascript" src="{{asset('/plugins/js/bootstrap-wysihtml5.js')}}"></script>
        <script type="text/javascript" src="{{asset('/plugins/js/datedropper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/plugins/js/dropzone.js')}}"></script>
        <script type="text/javascript" src="{{asset('/plugins/js/loader.js')}}"></script>
        <script type="text/javascript" src="{{asset('/plugins/js/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/plugins/js/slick.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/plugins/js/gmap3.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/plugins/js/jquery.easy-autocomplete.min.js')}}"></script>

        <!-- Custom Js -->
        <script src="{{asset('/js/custom.js')}}"></script>
        <script src="{{asset('/js/jQuery.style.switcher.js')}}"></script>
        <script type="text/javascript">
            // $(document).ready(function () {
            //     $('#styleOptions').styleSwitcher();
            // });
        </script>
        <script>
            function openRightMenu() {
                document.getElementById("rightMenu").style.display = "block";
            }

            function closeRightMenu() {
                document.getElementById("rightMenu").style.display = "none";
            }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function () {
                $('#loginForm').on('submit', function (e) {
                    e.preventDefault();

                    $.ajax({
                        url: $(this).attr('action'),
                        method: 'POST',
                        data: $(this).serialize(),
                        success: function (response) {
                            if (response.success) {
                                toastr.success(response.msg);
                                setTimeout(function () {
                                    window.location.href = '/collab/home';
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
    </div>
</body>

<!-- login35:58-->

</html>