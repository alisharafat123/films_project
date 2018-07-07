<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "AdminLTE Dashboard" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.css")}}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset("/bower_components/admin-lte/plugins/daterangepicker/daterangepicker.css")}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset("/bower_components/admin-lte/plugins/datepicker/datepicker3.css")}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset("/bower_components/admin-lte/plugins/iCheck/all.css")}}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset("/bower_components/admin-lte/plugins/colorpicker/bootstrap-colorpicker.min.css")}}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{asset("/bower_components/admin-lte/plugins/timepicker/bootstrap-timepicker.min.css")}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset("/bower_components/admin-lte/plugins/select2/select2.min.css")}}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <link href="{{ asset('css/ratings.css') }}" rel="stylesheet">
    <link href="{{ asset("/css/style.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<div class="wrapper">

    <!-- Header -->
    @if (Auth::check())
    @include('includes.header')

    <!-- Sidebar -->
    @include('includes.sidebar')
@endif
    <!-- Content Wrapper. Contains page content -->
    @if (Auth::check())
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
               <section class="content-header">
            <h1>
                {{ $page_title or "Page Title" }}
                <small>{{ $page_description or null }}</small>
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home </a></li>
                <li class="active">{{ $page_title }}</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('includes.footer')
        @else
            <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    @endif

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- Select2 -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/select2/select2.full.min.js")}}"></script>
<!-- InputMask -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js")}}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js")}}"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js")}}"></script>
<script src="{{ asset("/bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{ asset("/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.min.js")}}"></script>
<!-- AdminLTE App -->
<script>
    var host = '{{url('/')}}';
</script>
<script src="{{ asset ("/bower_components/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/js/film_app.js") }}" type="text/javascript"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset("/bower_components/admin-lte/plugins/daterangepicker/daterangepicker.js") }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset("/bower_components/admin-lte/plugins/datepicker/bootstrap-datepicker.js")}}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset("/bower_components/admin-lte/plugins/colorpicker/bootstrap-colorpicker.min.js")}}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset("/bower_components/admin-lte/plugins/timepicker/bootstrap-timepicker.min.js")}}"></script>
<script>
    $(function () {
        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
</html>