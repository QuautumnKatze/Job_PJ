<!doctype html>
<html lang="en">

<!-- signup42:17-->

<head>
    <!-- Basic Page Needs
	================================================== -->
    <title>Job Stock - Responsive Job Portal Bootstrap Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
	================================================== -->
    <link rel="stylesheet" href="{{asset('plugins/css/plugins.css')}}">

    <!-- Custom style -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="{{asset('css/colors/green-style.css')}}">
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body class="simple-bg-screen" style="background-image:url({{asset('img/banner-10.jpg')}});">
    <div class="Loader"></div>
    <div class="wrapper">

        <!-- Title Header Start -->
        <section class="signup-screen-sec">
            <div class="container">
                <div class="signup-screen" style="margin:0 auto 0">
                    <a href="/home"><img src="{{asset('img/logo.png')}}" class="img-responsive" alt=""></a>
                    <form id="registerForm" action="{{route('collab.register.submit')}}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <input type="text" class="form-control" style="margin-bottom:0" id="user_name"
                                name="user_name" placeholder="Nhập tên tài khoản" required />
                            <span id="userNameFeedback" style="margin-bottom:12px; margin-top:0"></span>
                        </div>
                        <div class="mb-2">
                            <input type="email" class="form-control" style="margin-bottom:0" id="email" name="email"
                                placeholder="Nhập email của bạn" required />
                            <span id="emailFeedback" style="margin-bottom:12px; margin-top:0"></span>
                        </div>
                        <div class="mb-2 form-password-toggle">
                            <input type="password" id="password" class="form-control" style="margin-bottom:0"
                                name="password" placeholder="Mật khẩu" aria-describedby="password" required />
                            <span id="passwordFeedback" style="color: red; margin-bottom:12px; margin-top:0"></span>
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" style="margin-bottom:0" name="full_name"
                                placeholder="Tên của bạn" required>
                            <span></span>
                        </div>
                        <div class="mb-2">
                            <input type="text" id="phone" class="form-control" style="margin-bottom:0" name="phone"
                                placeholder="Số điện thoại" required>
                            <span id="phoneFeedback" style="margin-bottom:12px; margin-top:0"></span>
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" style="margin-bottom:0" name="company_name"
                                placeholder="Tên công ty" required>
                            <span></span>
                        </div>
                        <div class="mb-2">
                            <select id="defaultSelect" name="city_id" class="form-control" style="margin-bottom:0">
                                @foreach ($citydata as $item)
                                    <option value="{{$item->city_id}}">{{$item->city_name}}</option>
                                @endforeach
                            </select>
                            <span></span>
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" style="margin-bottom:0" name="location"
                                placeholder="Địa chỉ công ty" required>
                            <span></span>
                        </div>

                        <button class="btn btn-login" id="submitBtn" type="submit">Đăng ký</button>
                        <span>Đã có tài khoản? <a href="{{route('collab.login')}}"> Đăng nhập</a></span>
                    </form>
                </div>
            </div>
        </section>
        <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog"
                aria-hidden="true"></i></button>
        <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
            <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
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

        <!-- Custom Js -->
        <script src="{{asset('js/custom.js')}}"></script>
        <script src="{{asset('js/jQuery.style.switcher.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#styleOptions').styleSwitcher();
            });
        </script>
        <script>
            function openRightMenu() {
                document.getElementById("rightMenu").style.display = "block";
            }

            function closeRightMenu() {
                document.getElementById("rightMenu").style.display = "none";
            }
        </script>

        <script>
            $(document).ready(function () {
                $('#email').on('input', function () {
                    var email = $(this).val();
                    if (email.length > 0) {
                        $.ajax({
                            url: '{{ route('collab.check.email') }}',
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                email: email
                            },
                            success: function (response) {
                                if (email.length === 0) {
                                    $('#emailFeedback').text('');
                                } else if (email.length < 7) {
                                    $('#emailFeedback').text('Email phải nhiều hơn 6 ký tự').css('color', 'red');
                                } else if (response.emailExists) {
                                    $('#emailFeedback').text('Email đã tồn tại').css('color', 'red');
                                } else {
                                    $('#emailFeedback').text('Email có thể sử dụng').css('color', 'green');
                                }
                            }
                        });
                    } else {
                        $('#emailFeedback').text('');
                    }
                });

                $('#email').on('input', function () {
                    // Loại bỏ dấu cách trắng
                    $(this).val($(this).val().replace(/\s+/g, ''));
                });

                $('#email').on('keydown', function (e) {
                    // Ngăn không cho nhập dấu cách
                    if (e.keyCode === 32) {
                        e.preventDefault();
                    }
                });

                $('#email').on('input', function () {
                    let email = $(this).val();

                    // Kiểm tra nếu email chứa @gmail.com hoặc @yahoo.com
                    if (email.includes('@gmail.com')) {
                        // Chỉ giữ lại phần trước @gmail.com
                        email = email.split('@gmail.com')[0] + '@gmail.com';
                    } else if (email.includes('@yahoo.com')) {
                        // Chỉ giữ lại phần trước @yahoo.com
                        email = email.split('@yahoo.com')[0] + '@yahoo.com';
                    }

                    // Cập nhật lại giá trị của ô nhập email
                    $(this).val(email);
                });

                $('#password').on('keyup', function () {
                    var password = $(this).val();
                    // Gửi yêu cầu AJAX kiểm tra mật khẩu
                    if (password.length === 0) {
                        $('#passwordFeedback').text('');
                    } else if (password.length < 4) {
                        $('#passwordFeedback').text('Mật khẩu phải nhiều hơn 3 ký tự').css('color', 'red');
                    } else {
                        $('#passwordFeedback').text('Mật khẩu có thể dùng').css('color', 'green');
                    }
                });

                $('#password').on('input', function () {
                    // Loại bỏ dấu cách trắng
                    $(this).val($(this).val().replace(/\s+/g, ''));
                });

                $('#password').on('keydown', function (e) {
                    // Ngăn không cho nhập dấu cách
                    if (e.keyCode === 32) {
                        e.preventDefault();
                    }
                });

                $('#password').on('keyup', function () {
                    var password = $(this).val();
                    // Gửi yêu cầu AJAX kiểm tra mật khẩu
                    if (password.length === 0) {
                        $('#passwordFeedback').text('');
                    } else if (password.length < 4) {
                        $('#passwordFeedback').text('Mật khẩu phải nhiều hơn 3 ký tự').css('color', 'red');
                    } else {
                        $('#passwordFeedback').text('Mật khẩu có thể dùng').css('color', 'green');
                    }
                });

                $('#phone').on('input', function () {
                    var phone = $(this).val();
                    if (phone.length > 0) {
                        $.ajax({
                            url: '{{ route('collab.check.phone') }}',
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                phone: phone
                            },
                            success: function (response) {
                                if (phone.length === 0) {
                                    $('#phoneFeedback').text('');
                                } else if (phone.length < 10) {
                                    $('#phoneFeedback').text('Số điện thoại có tối thiểu 10 số').css('color', 'red');
                                } else if (response.phoneExists) {
                                    $('#phoneFeedback').text('Số điện thoại này đã được đăng ký').css('color', 'red');
                                } else {
                                    $('#phoneFeedback').text('Số điện thoại này có thể sử dụng').css('color', 'green');
                                }
                            }
                        });
                    } else {
                        $('#phoneFeedback').text('');
                    }
                });

                $('#user_name').on('input', function () {
                    var user_name = $(this).val();
                    if (user_name.length > 0) {
                        $.ajax({
                            url: '{{ route('collab.check.username') }}',
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                user_name: user_name
                            },
                            success: function (response) {
                                if (user_name.length === 0) {
                                    $('#userNameFeedback').text('');
                                } else if (user_name.length < 4) {
                                    $('#userNameFeedback').text('Tên đăng nhập phải nhiều hơn 3 ký tự').css('color', 'red');
                                } else if (response.userNameExists) {
                                    $('#userNameFeedback').text('Tên đăng nhập này đã tồn tại').css('color', 'red');
                                } else {
                                    $('#userNameFeedback').text('Tên đăng nhập này có thể sử dụng').css('color', 'green');
                                }
                            }
                        });
                    } else {
                        $('#userNameFeedback').text('');
                    }
                });

                $('#phone').on('keydown', function (e) {
                    // Lấy mã phím đã nhấn
                    const key = e.keyCode;

                    // Chỉ cho phép các phím số (48-57 là phím số 0-9, 96-105 là phím số 0-9 trên numpad)
                    // Cho phép phím backspace, tab, delete, và các phím điều hướng (trái, phải)
                    if (
                        (key < 48 || key > 57) && // Phím số trên bàn phím chính
                        (key < 96 || key > 105) && // Phím số trên numpad
                        key !== 8 && // Phím backspace
                        key !== 9 && // Phím tab
                        key !== 46 && // Phím delete
                        (key < 37 || key > 40) // Phím điều hướng (trái, phải, lên, xuống)
                    ) {
                        e.preventDefault(); // Ngăn không cho nhập các phím không hợp lệ
                    }
                });

                $('#registerForm').on('submit', function (e) {
                    e.preventDefault();
                    // Disable all inputs and button to prevent multiple submissions
                    $('#registerForm').find('input, select').attr('readonly', true);
                    $('#submitBtn').addClass('bg-secondary').attr('disabled', true);
                    $.ajax({
                        url: $(this).attr('action'),
                        method: 'POST',
                        data: $(this).serialize(),
                        success: function (response) {
                            if (response.success) {
                                toastr.success(response.success);
                                // Chuyển hướng đến trang đăng nhập sau 2 giây
                                setTimeout(function () {
                                    window.location.href = "/collab/login";
                                }, 1000);
                            }
                        },
                        error: function (response) {
                            if (response.status === 422) {
                                let errors = response.responseJSON.errors;

                                $('#emailFeedback').text('');
                                $('#passwordFeedback').text('');
                                $('#phoneFeedback').text('');

                                if (errors.phone) {
                                    $('#phoneFeedback').text(errors.phone[0]);
                                    toastr.error('Đăng ký thất bại. Vui lòng thử lại.');
                                }
                                if (errors.email) {
                                    $('#emailFeedback').text(errors.email[0]);
                                    toastr.error('Đăng ký thất bại. Vui lòng thử lại.');
                                }
                                if (errors.password) {
                                    $('#passwordFeedback').text(errors.password[0]);
                                    toastr.error('Đăng ký thất bại. Vui lòng thử lại.');
                                }
                            } else {
                                toastr.error('Đăng ký thất bại. Vui lòng thử lại.');
                            }
                            $('#registerForm')[0].reset();
                        },
                        // complete: function () {
                        //     // Mở lại các input và nút sau khi tác vụ hoàn thành
                        //     $('#registerForm').find('input, button, select').attr('disabled', false);
                        // }
                    });
                });
            });


        </script>
    </div>
</body>

<!-- signup42:17-->

</html>