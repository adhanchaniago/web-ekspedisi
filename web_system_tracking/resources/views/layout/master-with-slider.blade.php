<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('includes.header')
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
        <section class="slider_area">
           <!--Start Slider Area-->

            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1500" >
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('asset/img/slider/1.jpg') }}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <!--Start Signup Area-->
                                <div class="container slider_area_signup_form">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                            <h2>TARIF KIRIM</h2>
                                            <div class="signup_form">
                                                <form action="{{ url('price') }}" method="POST">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                  <select class="form-control js-example-basic-single" id="startCity" name="startCity" required >
                                                    <option value="">Kota Asal</option>
                                                    @foreach($startCity as $data)
                                                    <option value="{{ $data['city_id'] }}">{{ $data['city_name'].' ['.$data['city_code'].'] - '.$data['province'] }}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <div class="form-group">
                                                  <select class="form-control js-example-basic-single" id="destinationCity" name="destinationCity" required>
                                                    <option value="">Kota Tujuan</option>
                                                    @foreach($destinationCity as $data)
                                                    <option value="{{ $data['city_id'] }}">{{ $data['city_name'].' ['.$data['city_code'].'] - '.$data['province'] }}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <input type="number" name="weight" placeholder="Weight (Kg)" required>
                                                <input type="number" name="long" placeholder="Long (Cm)" >
                                                <input type="number" name="width" placeholder="Width (Cm)" >
                                                <input type="number" name="height" placeholder="Height (Cm)" >
                                                <p class="text-left"><button type="submit">Cek Tarif</button></p>
                                                </form>
                                            </div>
                                        </div>
                                      <!--   <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" style="position:center;">
                                            <p>Komitmen</p>                                            
                                        </div> -->
                                    </div>
                                </div>
                            <!--End Signup Area-->

                        </li>
                        <!-- SLIDE  -->
                        <!-- SLIDE  -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000" >
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('asset/img/slider/2.jpg') }}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <!--Start Signup Area-->
                                <div class="container slider_area_signup_form">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                            <h2>TARIF KIRIM</h2>
                                            <div class="signup_form">
                                                <form action="{{ url('price') }}" method="POST">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                  <select class="form-control js-example-basic-single" id="startCity" name="startCity" required>
                                                    <option value="">Kota Asal</option>
                                                    @foreach($startCity as $data)
                                                    <option value="{{ $data['city_id'] }}">{{ $data['city_name'].' ['.$data['city_code'].'] - '.$data['province'] }}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <div class="form-group">
                                                  <select class="form-control js-example-basic-single" id="destinationCity" name="destinationCity" required>
                                                    <option value="">Kota Tujuan</option>
                                                    @foreach($destinationCity as $data)
                                                    <option value="{{ $data['city_id'] }}">{{ $data['city_name'].' ['.$data['city_code'].'] - '.$data['province'] }}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <input type="number" name="weight" placeholder="Weight (Kg)" required>
                                                <input type="number" name="long" placeholder="Long (Cm)" >
                                                <input type="number" name="width" placeholder="Width (Cm)" >
                                                <input type="number" name="height" placeholder="Height (Cm)" >
                                                <p class="text-left"><button type="submit">Cek Tarif</button></p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!--End Signup Area-->
                            
                        </li>
                    </ul>
                </div>
                 @if($errors->has('priceError'))
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ $errors->first('priceError') }}
                </div>
                @endif
            </div>
            <!--End Slider Area-->
            <!--Start Mainmenu-->
            @include('includes.menu')
            <!--End Mainmenu -->
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