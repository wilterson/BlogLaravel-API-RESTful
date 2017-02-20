<!DOCTYPE html>
<html>
<head>
    <title>{{config('app.name', 'Login Blog Laravel')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Sliding Ui Forms template Responsive, Login form web template,Flat Pricing w3tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Custom Theme files -->
    <link href="/css/login_style.css" rel="stylesheet" type="text/css" media="all" />

    <!-- web font -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
    <!-- //web font -->

    <script>
        window.Laravel = <?php echo json_encode([
			'csrfToken' => csrf_token(),
		]); ?>
    </script>
</head>
<body>
<!-- main -->
<div class="main agileits-w3layouts">
    <h1>Blog Laravel</h1>
    <div class="main-agileinfo">
        <div class="wthree-box"></div>
        <div class="agileui-forms">
            @yield('content')

            @yield('contentForm')
        </div>
    </div>
</div>
<!-- //main -->
<!-- copyright -->
<div class="copyw3-agile">
    <p>  Blog Laravel - Developed by <a href="http://wilterson.com.br" target="_blank">Wilterson Garcia</a> &copy; {{date('Y')}} All rights reserved. </p>
</div>
<!-- //copyright -->
<!-- js -->
<script  src="/js/jquery-1.12.3.min.js"></script>
<script>
    $(".info-w3lsitem .btn").click(function() {
        $(".main-agileinfo").toggleClass("log-in");
    });
    $(".container-form .btn").click(function() {
        $(".main-agileinfo").addClass("active");
    });
</script>
<!-- //js -->
</body>
</html>