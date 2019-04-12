<footer class="footer_area ">
    <div class="footer_top_area  section_dark">
        <div class="container">
            <div class="row footer_padding_top">
                <div class="col-md-4 col-lg-4">
                    <div class="footer_adddress s_footer">
                        <div><i class="fa fa-home"></i></div>
                        <p class="uppercase">Alamat Head Office</p>
                        <p>{{ $global->where('variable_name', 'address')->first()->text_contain }}</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 ">
                    <div class="footer_call_us s_footer">
                        <div><i class="fa fa-phone"></i></div>
                        <p class="uppercase">Kontak</p>
                        <p>{{ $global->where('variable_name', 'phone_number_1')->first()->string_contain }}</p>
                        <p>{{ $global->where('variable_name', 'phone_number_2')->first()->string_contain }}</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="footer_email_us s_footer">
                        <div><i class="fa fa-envelope-o"></i></div>
                        <p class="uppercase">Email</p>
                        <p>{{ $global->where('variable_name', 'email')->first()->string_contain }}</p>
                     </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="footer_border"></div>
                </div>
            </div>
            <div class="row footer_padding_bottom">
                <div class="col-md-3 col-lg-3">
                    <div class="footer_discription">
                        <h3>Tentang Kami</h3>
                        <p>{{ $global->where('variable_name', 'about_me')->first()->text_contain }}</p>
                        <div class="footer_social_bookmark">
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
                <div class="col-md-6 col-lg-6">
                    <div class="footer_list">
                        <h3>our service</h3>
                        <div class="col-md-6 col-lg-6">
                            <ul>
                                <li><a href="#">Armada Truck Terbaru</a></li>
                                <li><a href="#">Kapal Laut Untuk Antar Pulau</a></li>
                                <li><a href="#">Tim yang Solid Melayani Anda</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <ul>
                                <li><a href="#">Tools Support Standar Nasional</a></li>
                                <li><a href="#">Sistem IT Terbaik</a></li>
                                <li><a href="#">Fokus Kepuasan Customer</a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="footer_opening_time">
                        <h3>Jam Operasional</h3>
                        <p>{{ $global->where('variable_name', 'working_hour_1')->first()->string_contain }}</p>
                        <p>{{ $global->where('variable_name', 'working_hour_2')->first()->string_contain }}</p>
                        <p>Libur:<br>Hari Minggu <br> Hari libur nasional</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="footer_copyright">
                        <p>Copyright <a target="_blank" href="https://4eachsoftware.com" style="color:white;">&copy;</a> Foreach Software 2019. All Right Reserved.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                   <div class="footer_menu">
                        <nav>
                            <ul>
                                <li><a href="{{ url('/home') }}">Beranda</a></li>
                                <li>I</li>
                                <li><a href="{{ url('/price') }}">Tarif</a></li>
                                <li>I</li>
                                <li><a href="{{ url('/tracking') }}">Tracking</a></li>
                                <li>I</li>
                                <li><a href="{{ url('/news') }}">Berita</a></li>
                                <li>I</li>
                                <li><a href="{{ url('/contact') }}">Kontak</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>