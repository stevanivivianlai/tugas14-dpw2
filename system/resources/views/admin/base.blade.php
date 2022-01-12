<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Mazer </title>
    <!-- Bootstrap Styles-->
    <link href="{{url('public')}}/admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{url('public')}}/admin/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{url('public')}}/admin/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{url('public')}}/admin/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="{{url('public')}}/admin/assets/js/jquery.js" type="text/javascript"></script>
    <script src="{{url('public')}}/admin/assets/js/bootstrap.js" type="text/javascript"></script>  
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('public')}}/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('public')}}/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">


</head>

<body>
    <div id="wrapper">
        <!-- navbar-->
        @include('admin.section.header')
        <!-- /navbar-->

        <!-- sidebar-->
        @include('admin.section.sidebar')
        <!-- /sidebar-->
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @include('admin.utils.notif')
                        </div>
                    </div>
                </div>
                @yield('content')
               
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{url('/public')}}/admin/assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="{{url('/public')}}/admin/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="{{url('/public')}}/admin/assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="{{url('/public')}}/admin/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="{{url('/public')}}/admin/assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="{{url('/public')}}/admin/assets/js/custom-scripts.js"></script>

    <script src="{{url('/public')}}/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{url('/public')}}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="{{url('/public')}}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('/public')}}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('/public')}}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{url('/public')}}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(".table-datatable").DataTable();
    </script>


</body>

</html>