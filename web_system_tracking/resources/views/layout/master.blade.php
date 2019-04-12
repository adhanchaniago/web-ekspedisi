<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @section('header')
        @include('includes.header')
        @show
    </head>
    <body class="home-2">
       <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--Start Mobile Menu Area-->
		
        @include('includes.menu-mobile')
        
        <!--End Mobile Menu Area-->
        
        <!--Start Header area  -->
        @include('includes.header-area')
        
        <!--End Header Area-->
        <!--Start Slider Area  -->
        <section class="about_page_barner_area">
            <div class="barner_content">
                <div class="container">
                   <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="barner_text text-center">
                                <h2>@yield('title')</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('includes.menu')

        </section>

        <!--End Slider Area-->
        
        @yield('content')
        

        <!--End Newsletter Area-->
        <!-- Footer Area  -->
        @include('includes.footer')
        
        <!--End Footer Area-->
        
        <!--jQuery-->
        @section('script')
        @include('includes.script')
        @show
    </body>
</html>