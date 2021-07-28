<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/vendor/core/core.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/fonts/feather-font/css/iconfont.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/vendor/flag-icon-css/css/flag-icon.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/css/style.css')}}">
</head>
<body class="sidebar-dark">
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pr-md-0">
                                    <div class="auth-left-wrapper">

                                    </div>
                                </div>
                                <div class="col-md-8 pl-md-0">
                                    @yield("content")
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script type="text/javascript" src="{{asset('public/admin/vendor/core/core.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/admin/vendor/feather-icons/feather.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/admin/js/template.js')}}"></script>
</body>
</html>
