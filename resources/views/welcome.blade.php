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

        </div>
    </header>
</div>
</body>
</html>
