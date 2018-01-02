<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="renderer" content="webkit">
    <title>{{ config('app.name') }} - @yield('page_title')</title>
    <link href="/backtools/css/style.css" rel="stylesheet">
    <link href="/backtools/css/style-responsive.css" rel="stylesheet">
    @yield('style')
</head>
<body class="sticky-header">
    <section>
        @include('backtools.sidebar')
        <div class="body-content">
            @include('backtools.header')
            @include('backtools.title')
            <div class='wrapper'>
                @include('backtools.message')
                @yield('content')
            </div>
        </div>
    </section>
    <script src="/backtools/js/jquery.js"></script>
    <script src="/backtools/js/bootstrap.js"></script>
    <script src="/backtools/js/scripts.js"></script>
    @yield('script')
</body>
