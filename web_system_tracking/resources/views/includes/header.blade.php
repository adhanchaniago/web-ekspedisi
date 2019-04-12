<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--Responsive Meta-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Title-->
<title>{{ $global->where('variable_name', 'organization_name')->first()->string_contain }} | @yield('title')</title>
<!--Bootstrap Css-->
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<!--Font-awesome-->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!--Fonts Form Google Web Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,900,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>
<!--Responsive Mobile Menu-->
<link rel="stylesheet" href="{{ asset('asset/css/slicknav.css') }}" />
<!--Revolation Slider-->
<link href="{{ asset('asset/rs-plugin/css/settings.css') }}" rel="stylesheet">
<!--Carousel Slider-->
<link href="{{ asset('asset/css/owl.carousel.css') }}" rel="stylesheet">
<!--Main Style Css-->
<link href="{{ asset('style.css') }}" rel="stylesheet">
<!--Responsive-->
<link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('asset/css/select2.min.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('asset/img/favicon.ico') }}">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->