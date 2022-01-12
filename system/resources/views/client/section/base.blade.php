<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Template</title>

    <link href="//fonts.googleapis.com/{{url('public')}}/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/{{url('public')}}/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/{{url('public')}}/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet">

    <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/all.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/style.css">
</head>

<body>
    <!-- Start Top Nav -->
    @include('client.section.navbar')
    <!-- Close Header -->

  
  @yield('content_front')





    <!-- Start Footer -->
  @include('client.section.footer')
    <!-- End Footer -->
@stack('script')
    </div>
        </div>

    </div>

    <script type="text/javascript" src="{{url('public')}}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url('public')}}/js/script.js"></script>
</body>
</html>