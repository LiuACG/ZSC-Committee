@extends('layouts.base')

@section('title', '首页')

@section('style-sheet')
    <style>
        {{----}}
    </style>
@endsection

@section('content')
    <div class="container wrapper-1">
        <div class="banner-content">
            <div class="banner">
                <div class="banner-inner"></div>
                <div class="btn-prev"></div>
                <div class="btn-next"></div>
            </div>
        </div>
    </div>

    <div class="container wrapper-2">
        Wrapper-2
    </div>
@endsection

@section('script')
    <script id="banner-data" type="application/json" class="json-inline">
        [{ "text": "banner-1", "url": "#", "image": "{{ URL("asset/image/banner/1.jpg") }}" },
         { "text": "banner-2", "url": "#", "image": "{{ URL("asset/image/banner/2.jpg") }}" },
         { "text": "banner-3", "url": "#", "image": "{{ URL("asset/image/banner/3.jpg") }}" },
         { "text": "banner-4", "url": "#", "image": "{{ URL("asset/image/banner/4.jpg") }}" }]
    </script>

    <script>
        (function () {
            var tmp = $('.banner-content').find('.banner-inner').eq(0);
            var data = JSON.parse(document.getElementById('banner-data').innerText);
            data.forEach(function (item, idx) {
                var str = '<div class="item:active"><a href=":url"><div class="image"><img src=":image" alt=""></div><div class="text">:text</div></a></div>'
                            .replace(/:active/g, idx == 0 ? ' active' : '')
                            .replace(/:url/g, item.url)
                            .replace(/:text/g, item.text)
                            .replace(/:image/g, item.image);
                tmp.append(str);
            });

            new Banner('.banner-content');
        })();
    </script>
@endsection