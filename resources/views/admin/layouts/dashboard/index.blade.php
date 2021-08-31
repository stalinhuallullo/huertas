<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Huertas &#8211; Inmobiliaria Huertas</title>

    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/vendor/core/core.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/vendor/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/fonts/feather-font/css/iconfont.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/vendor/flag-icon-css/css/flag-icon.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.css">
    @yield("style")
</head>
<body class="sidebar-dark">
    <div class="main-wrapper">
        @include("admin.includes.nav-bar.nav-left")

        <div class="page-wrapper">
            @include("admin.includes.nav-bar.nav-top")

            <div class="page-content">
                @yield("content")
            </div>
        </div>
    </div>

    @include("admin.includes.script")
    {{-- @yield("scripts") --}}
</body>
</html>
