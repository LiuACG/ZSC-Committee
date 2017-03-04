<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>电子科技大学中山学院团委 | @yield('title', 'Title')</title>

    <!-- Style Sheet -->
    <link rel="stylesheet" href="{{ URL('asset/css/reset.css') }}">
    <link rel="stylesheet" href="{{ URL('asset/css/style.css?_t=5') }}">
    @yield('style-sheet')

    <!-- JavaScript -->
    <script type="text/javascript" src="{{ URL('asset/js/jquery-3.1.1.js') }}"></script>
    @yield('preload-script')
    <script type="text/javascript" src="{{ URL('asset/js/main.js?') }}"></script>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <ul class="nav nav-left">
                <li><a href="{{ URL('/') }}">首页</a></li>
                <li><a href="{{ URL('/intro') }}">团委介绍</a></li>
                <li><a href="{{ URL('/youth') }}">青年在线</a></li>
                <li><a href="{{ URL('/practice') }}">社会实践</a></li>
                <li><a href="{{ URL('/message') }}">留言板</a></li>
                <li><a href="{{ URL('http://www.zsc.edu.cn/') }}">学校主页</a></li>
            </ul>

            <ul class="nav nav-right">
                <li>
                    <div class="search clean-fix">
                        <input class="search-text" type="text" title="搜索" placeholder="Search...">
                        <button class="search-btn" type="button">搜索</button>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="header">
        <div class="container">
            <div class="header-logo">
                <img src="{{ URL('asset/image/header-logo.png') }}" alt="共青团电子科技大学中山学院团委">
            </div>

            <div class="header-title">
                <img src="{{ URL('asset/image/header-title.png') }}" alt="共青团电子科技大学中山学院团委">
            </div>
        </div>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <div class="qr-code">
        <div class="qr-small">
            {{--<img src="{{ URL('asset/image/qr-small.png') }}" alt="点击查看二维码">--}}
        </div>
        <div class="qr-main">
            <img src="{{ URL('asset/image/qr-main.jpg') }}" alt="扫描二维码关注我们">
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <p class="text-center">共青团电子科技大学中山学院委员会</p>
            <p class="text-center copy-right">&copy; <a href="http://www.LiuACG.com">LiuACG</a></p>
        </div>
    </div>

    <!-- JavaScript -->
    @yield('script')
</body>
</html>
<!-- Code & Design & Power by LiuACG ~ (www.LiuACG.com) -->
