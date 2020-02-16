@extends('master')


@section('links')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
<!-- Bootstrap Core CSS -->
<link href="{{asset('admin/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Menu CSS -->
<link href="{{asset('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">

<!-- chartist CSS -->
<link href="{{asset('admin/plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
<!-- Vector CSS -->
<link href="{{asset('admin/plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
<!-- animation CSS -->
<link href="{{asset('admin/css/animate.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
<!-- color CSS -->
<link href="{{asset('admin/css/colors/default.css')}}" id="theme" rel="stylesheet">
@endsection

@section('page-title')
    Dashboard
@endsection
@section('main-section')

<div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('adminpanel.includes.navbar')
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('adminpanel.includes.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
                @include('adminpanel.includes.dashboardSection')
                    <!-- /.container-fluid -->
            <footer class="footer text-center"> 2020 &copy; MKSoft </footer>

        </div>
        <!-- /#page-wrapper -->
    </div>



@endsection

@section('scripts')
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{asset('admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('admin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--Counter js -->
    <script src="{{asset('admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{asset('admin/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('admin/js/jquery.slimscroll.js')}}"></script>

    <!--Wave Effects -->
    <script src="{{asset('admin/js/waves.js')}}"></script>



    <!-- sparkline chart JavaScript -->
    <script src="{{asset('admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('admin/js/custom.min.js')}}"></script>
    <script src="{{asset('admin/js/dashboard3.js')}}"></script>
    <!--Style Switcher -->
    <script src="{{asset('admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endsection
