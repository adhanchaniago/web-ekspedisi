@extends('layout.master')

@section('title', 'Kontak')

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
<!--Start Get in Tuch area-->
<section class="get_in_tuch_area section_padding">
    <div class="container">
        @if(Session::has('successMessage'))
        <div class="alert alert-primary alert-dismissable" style="color:#ffffff; background-color:#10c2f1;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="color:white;">×</button>
            {{ Session::get('successMessage') }}
        </div>
        @endif

        @if($errors->has('errorMessage'))
        <div class="alert alert-danger alert-dismissable" style="color:#ffffff; background-color:#fc5a1a;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="color:white;">×</button>
            {{ $errors->first('errorMessage') }}
        </div>
        @endif
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                <div class="get_in_tuch ">
                    <h3>Dengan senang hati kami berdiskusi dengan Anda</h3>
                    <div class="get_in_tuch_form">    
                        <form action="{{ url('/contact/send-message') }}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" placeholder="YOUR NAME" name="name" required value="{{ count($errors) > 0 ? old('name') : '' }}">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="email" placeholder="YOUR E-MAIL" name="email" required value="{{ count($errors) > 0 ? old('email') : '' }}">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" placeholder="YOUR PHONE NUMBER" name="phone" required value="{{ count($errors) > 0 ? old('phone') : '' }}">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea name="message" id="example" cols="30" rows="10" placeholder="YOUR MESSAGE" required>{{ count($errors) > 0 ? old('message') : '' }}</textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <p>Answer this question {{ captcha_img() }}</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <input type="text" name="captcha" required>
                                </div>
                                <input name="submit" type="submit" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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