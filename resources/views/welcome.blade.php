@extends('layouts.base')

@section('title', '首页')

@section('content')
    <div class="container wrapper-1">
        <div class="banner">

        </div>
    </div>

    <div class="container wrapper-2">
        Wrapper-2
    </div>
@endsection

@section('script')
    <script id="banner-data" type="application/json" class="json-inline">
        [
            { "text": "banner-1", "url": "", "image": "" },
            { "text": "banner-2", "url": "", "image": "" }
        ]
    </script>

    <script>
        var bannerData = JSON.parse(document.getElementById('banner-data').innerText);
        console.log(bannerData);
    </script>
@endsection