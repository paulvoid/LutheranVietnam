<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title ?? "Lutheran Việt Nam"}}</title>
    <meta name="description"
          content="{{$description ?? "Sứ mệnh của chúng tôi là làm cho mọi người biết đến tình yêu của Chúa Giêsu"}}">
    <meta name="keywords" content="{{$keywords ?? "Lutheran Việt Nam, Chúa Giêsu, Tình yêu, Tình yêu của Chúa Giêsu"}}">
    <meta name="author" content="{{$author ?? "Lutheran Việt Nam"}}">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 days">
    <meta name="language" content="vi">
    <meta name="geo.placename" content="Hồ Chí Minh">
    <meta name="geo.position" content="10.73956, 106.70648">
    <meta name="geo.region" content="VN-SG">
    <meta name="ICBM" content="10.73956, 106.70648">
    <meta name="og:title" content="{{$title ?? "Lutheran Việt Nam"}}">
    <meta name="og:description"
          content="{{$description ?? "Sứ mệnh của chúng tôi là làm cho mọi người biết đến tình yêu của Chúa Giêsu"}}">
    <meta name="og:image" content="{{asset('images/logo.png')}}">
    <meta name="og:url" content="{{url()->current()}}">
    <meta name="og:site_name" content="Lutheran Việt Nam">
    <meta name="og:type" content="website">
    <meta name="og:locale" content="vi_VN">
    <meta property="fb:admins" content="100001379227827">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@lutheranvietnam">
    <meta name="twitter:title" content="{{$title ?? "Lutheran Việt Nam"}}">
    <meta name="twitter:description"
          content="{{$description ?? "Sứ mệnh của chúng tôi là làm cho mọi người biết đến tình yêu của Chúa Giêsu"}}">
    <meta name="twitter:image" content="{{asset('images/logo.png')}}">
    <meta name="twitter:creator" content="@lutheranvietnam">
    <meta name="twitter:domain" content="{{url()->current()}}">
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div id="app">
    <header>
        <div style="background-color: #005696">
            <div class="container-xl p-2">
                <div class="row">
                    <div class="col-3">
                        <a href="{{route('home')}}">
                            <img src="{{asset('images/logo.png')}}" alt="Lutheran Việt Nam" style="max-width: 100px">
                        </a>
                    </div>
                    <div class="col-9">
                        <div class="row h-100 d-flex align-items-center">
                            <div class="col-md-10">
                                <!-- form search -->
                                <form action="#" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="keyword"
                                               placeholder="Tìm kiếm...">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-2 align-items-center text-end p-3">
                                <ul class="d-block m-0 p-0 list-unstyled ">
                                    <li class="list-unstyled">
                                        <a href="#" class="btn btn-outline-light text-center">
                                            <i class="fa fa-lock d-block"></i>
                                            Đăng nhập
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="border-bottom: 3px solid #fbc83a;">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                            </li>
{{--                            aboutDropdown--}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Giới thiệu
                                </a>
                                <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                                    <a class="dropdown-item" href="#">Giới thiệu</a>
                                    <a class="dropdown-item" href="#">Tầm nhìn</a>
                                    <a class="dropdown-item" href="#">Sứ mệnh</a>
                                    <a class="dropdown-item" href="#">Đội ngũ</a>
                                    <a class="dropdown-item" href="#">Tuyển dụng</a>
                                </div>
                            </li>
{{--                            worshipDropdown--}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="worshipDropdown" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Thờ phượng
                                </a>
                                <div class="dropdown-menu" aria-labelledby="worshipDropdown">
                                    <a class="dropdown-item" href="#">Phụng Vụ Lutheran</a>
                                    <a class="dropdown-item" href="#">Học Kinh Thánh và Dâng Hiến</a>
                                    <a class="dropdown-item" href="#">Tin Tức</a>
                                    <a class="dropdown-item" href="#">Lịch Phụng Vụ</a>
                                    <a class="dropdown-item" href="#">Cầu Nguyện</a>
                                    <a class="dropdown-item" href="#">Bài Đọc Thánh Lễ</a>
                                    <a class="dropdown-item" href="#">Tóm Tắt Bài Đọc</a>
                                    <a class="dropdown-item" href="#">Nhạc Thờ Phượng</a>
                                    <a class="dropdown-item" href="#">Phương Tiện Truyền Thông</a>
                                    <a class="dropdown-item" href="#">Lời Chúa Mỗi Ngày</a>
                                    <a class="dropdown-item" href="#">Bài Giảng</a>
                                    <a class="dropdown-item" href="#">Tham Khảo Lên Kế Hoạch Cho Thánh Lễ</a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
    </header>
    <main class="container">
        @yield('content')
    </main>
</div>
@stack('scripts')
</body>
</html>
