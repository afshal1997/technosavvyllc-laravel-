<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Language" content="en" />
    <meta http-equiv="Expires" content="0" />
    <meta name="description" content="" />
    <meta name="keywords" content="Business Consulting Solutions, IT Services, digital transformation consulting" />
    <meta name="author" Content="Techno Savvy LLC" />
    <meta name="template" content="content-page" />

    <title></title>
    @include('front.layouts.css')
</head>

<body>
    @include('front.layouts.header')
    @yield('content')
    @include('front.layouts.footer')

    @include('front.layouts.js')
</body>

</html>