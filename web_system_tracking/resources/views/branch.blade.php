@extends('layout.master')

@section('title', 'Cabang')

@section('header')
    @parent
    <style type="text/css">
        .map-responsive{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-responsive iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            
            position:absolute;
        }
    </style>
@endsection

@section('content')   
<!--Start Promotions Area  -->
<section class="promotions_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                <div class="page_title text-center">
                    <h2>{{ $model->branch_name }}</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 ">
                <div class="single_contact">
                    <div class="s_contuct_icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h3>address</h3>
                    <p>{{ $model->address }}</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 ">
                <div class="single_contact">
                    <div class="s_contuct_icon">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <h3>e-mail</h3>
                    <p>{{ $model->email }}</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 ">
                <div class="single_contact">
                    <div class="s_contuct_icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h3>phone</h3>
                    <p>{{ $model->phone_number }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Promotions Area-->
<section class="map_area">
    <div class="contact-map">
        <div class="map-responsive">
        {!! $model->maps !!}
        </div>
    </div>
</section>

<!--End Get in Tuch area-->
@endsection

@section('script')
<!-- jquery js -->
<script src="{{ asset('asset/js/vendor/jquery-1.11.2.min.js') }}"></script>
<!--Bootstrap-->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!--Carousel Slider-->
<script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<!--Revolation Slider-->
<script src="{{ asset('asset/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
<script src="{{ asset('asset/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>       
<!--Mobile Menu Js-->
<script src="{{ asset('asset/js/jquery.slicknav.min.js') }}"></script>
<!--Active jQuery-->
<script src="{{ asset('asset/js/main.js') }}"></script>
@endsection