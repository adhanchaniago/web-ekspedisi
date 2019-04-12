<div class="header_area">
     <div class="header_top_area">
        <div class="container">
            <div class="row">  
                <div class="col-md-4 col-lg-4">
                    <div class="header_top_menu">
                        <ul>
                            <li><a href="#">SELAMAT DATANG DI OFFICAL WEBSITE AR KARYATI</a></li>
                        </ul>
                    </div>
                </div>  
                <div class="col-md-2 col-lg-2 col-md-offset-6 col-lg-offset-6">
                    <div class="header_social_bookmark">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img style="max-height:100px;" src="{{ asset('asset/img/ar-karyati.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-md-offset-1 col-lg-offset-1">
                    <div class="opening_time s_header">
                        <div><i class="fa fa-clock-o"></i></div>
                        <p class="contact_title">Jam Operasional</p>
                        <p class="uppercase">{{ $global->where('variable_name', 'working_hour_1')->first()->string_contain }}</p>
                        <p class="uppercase">{{ $global->where('variable_name', 'working_hour_2')->first()->string_contain }}</p>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 ">
                    <div class="call_us s_header">
                        <div><i class="fa fa-phone"></i></div>
                        <p class="contact_title">Hubungi Kami</p>
                        <p>{{ $global->where('variable_name', 'phone_number_1')->first()->string_contain }}</p>
                        <p>{{ $global->where('variable_name', 'phone_number_2')->first()->string_contain }}</p>

                        <!-- <p>+123 456 789</p> -->
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 ">
                    <div class="email_us s_header">
                        <div><i class="fa fa-envelope-o"></i></div>
                        <p class="contact_title">Email Kami</p>
                        <p class="uppercase">{{ $global->where('variable_name', 'email')->first()->string_contain }}</p>
                        <!-- <p class="uppercase">Query@itemmovers.com</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>