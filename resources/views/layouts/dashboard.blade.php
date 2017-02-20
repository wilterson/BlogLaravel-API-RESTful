<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Blog Laravel - {{$titulo or 'Painel Admin'}}</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{url('/css/bootstrap.css')}}">

    <!-- Theme -->
    <link rel="stylesheet" href="{{url('/css/painel_style.min.css')}}"/>
    <link rel="stylesheet" href="{{url('/css/painel_style2.min.css')}}"/>

    <!-- Icon Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery UI -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

    <script src="{{url('/js/jquery-1.12.3.min.js')}}"></script>

    @yield('styles-head')

</head>
<body class='skin-blue sidebar-mini'>

<div class="wrapper">
    <!-- Main Header -->
@include('includes.barra-topo')

<!-- Menu -->
@include('includes.menu')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('title')

            @yield('breadcrumb')
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
</div>

@include('includes.footer')

@yield('scripts-footer')


<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
{{--<script src="{{url('/assets/js/bootstrap.min.js')}}"></script>--}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="{{url('/js/admin.js')}}"></script>
</body>
</html>