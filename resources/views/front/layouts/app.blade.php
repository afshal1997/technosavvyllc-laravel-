<!doctype html>
<html lang="en">

<?php

$base_url = $_SERVER['HTTP_HOST'];
$self = $_SERVER['PHP_SELF'];
$arr = explode("/", $self);
$with_ext = $arr['1'];
$arr2 = explode(".", $with_ext);
$page = $arr2['0'];
$port_page = $arr2['0'];

?>

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

    <title>Techno Savvy | Providing Sound Successful Solutions to All</title>
    
    @include('front.layouts.css')
</head>


<body class="page basepage basicpage <?php echo $page ?>">
    @include('front.layouts.header')
    @yield('content')
    @include('front.layouts.footer')

    @include('front.layouts.js')
</body>

</html>