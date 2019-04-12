@extends('layout.master-with-slider')

@section('title', 'Home')

@section('content')
<!-- Newsletter Area -->
<section class="newsletter_area ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
               <div class="signup_newsletter">
                   <p>Temukan Paket Anda</p>
                   <h3>Tracking</h3>
                    @if($errors->has('trackingError'))
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{ $errors->first('trackingError') }}
                        </div>
                    @endif
                   <form action="{{ url('tracking') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" placeholder="NOMOR RESI" name="resiNumber" size="60" required>
                        <input style="padding:6px !important" type="submit" value="TRACKING">
                   </form>
               </div>
            </div>
        </div>
    </div>
</section>
<!--End Newsletter Area-->

<!--Start Promotions Area  -->
<section class="promotions_area section_padding section_gray">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                <div class="page_title text-center">
                    <h2>SELAMAT DATANG DI EKSPEDISI {{ $global->where('variable_name', 'organization_name')->first()->string_contain }}</h2>
                    <h3>Komitmen Pada Pelayanan</h3>
                    <p>Kami merupakan penyedia jasa pengantaran barang yang terus berkembang dan telah memiliki rute pengantaran barang di seluruh Indonesia. Dengan pengalaman selama 20 tahun AR-Karyati berkomitmen menjadi ekspedisi terbaik yang amanah dan profesional.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 ">
                <div class="home_two_single_promotions text-center">
                    <div class="s_promotion_icon">
                        <img src="{{ asset('asset/img/home_2/truck_icon.png') }}" alt="">
                    </div>
                    <h2>Jaminan harga terbaik</h2>
                    <p>Sebagai partner bisnis terbaik dan pelayan bagi kebutuhan pribadi anda, kami memberikan penawaran terbaik disetiap pelayanan. </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 ">
                <div class="home_two_single_promotions text-center">
                    <div class="s_promotion_icon">
                        <img src="{{ asset('asset/img/home_2/hand_icon.png') }}" alt="">
                    </div>
                    <h2>Mengutamakan kepuasan pelanggan</h2>
                    <p>Ketika bisnis jasa telah menjadi bagian dari kehidupan kita, kami fokus pada orientasi pelayanan penuh kepada kepuasan pelanggan.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 ">
                <div class="home_two_single_promotions text-center">
                    <div class="s_promotion_icon icon_clock">
                        <img src="{{ asset('asset/img/home_2/clock_icon.png') }}" alt="">
                    </div>
                    <h2>Bekerja mengejar waktu</h2>
                    <p>Dengan kedisiplinan yang tinggi dan didukung dengan tim yang berpengalaman kami terbiasa untuk menjaga ketepatan waktu disetiap proses.</p>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End Promotions Area-->
<!--Start Contact Now Area  -->
<section class="contact_now_area">
    <div class="contact_now_area_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-md-offset-6 col-lg-offset-6">
                <div class="contact_now_text">
                    <div class="contact_now_display_table_cell">
                        <h3>Kami akan menjawab segala kebutuhan pengiriman barang anda. Berpengalaman lebih dari 20 tahun pada bidang ekspedisi pengiriman barang darat - laut</h3>
                        <a href="{{ url('/contact') }}" class="contact_button">HUBUNGI KAMI</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!--End Contact Now Area-->
<!--Start Work Area  -->
<section class="work_area section_padding">
    <div class="container">
       <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="page_title text-center">
                    <h2>Why we are best form other</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="work_area_img">
                    <img src="{{ asset('asset/img/work_man_two.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="single_work">
                    <a href="#"><img class="alignleft" src="{{ asset('asset/img/24_7.png') }}" alt=""></a>
                    <h4>24/4 Service</h4>
                    <p>Orang lapangan kami bekerja sehari penuh untuk mengantarkan paket anda</p>
                </div>
                <div class="single_work">
                    <a href="#"><img class="alignleft" src="{{ asset('asset/img/track_two.png') }}" alt=""></a>
                    <h4>Over 170 vehicles</h4>
                    <p>Kami memiliki 170 armada yang siap mengantarkan paket anda di seluruh Indonesia.</p>
                </div>
                <div class="single_work">
                    <a href="#"><img class="alignleft" src="{{ asset('asset/img/man_icon.png') }}" alt=""></a>
                    <h4>Over 400 Driver and Driver Assistant</h4>
                    <p>Kami memiliki 400 lebih sopir dan kernek</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="single_work">
                    <a href="#"><img class="alignleft" src="{{ asset('asset/img/fire_clock.png') }}" alt=""></a>
                    <h4>Price and Estamited delevery time</h4>
                    <p>Anda bisa mengetahui perhitungan biaya dan estimasi pengiriman</p>
                </div>
                <div class="single_work">
                    <a href="#"><img class="alignleft" src="{{ asset('asset/img/map_maker.png') }}" alt=""></a>
                    <h4>Live tracking</h4>
                    <p>Sistem kami dilengkapi tracking paket untuk mengetahui lokasi real paket anda</p>
                </div>
                <div class="single_work">
                    <a href="#"><img class="alignleft" src="{{ asset('asset/img/sms_mail.png') }}" alt=""></a>
                    <h4>Customer service support</h4>
                    <p>Dengan senang hati kami menjawab pertanyaan atau komplain anda</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Work Area-->
<!--Stert All Project Area -->
<section class="all_project_area">
   <div class="all_project_oerly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div class="single_project">
                    <div class="project_details">
                        <i class="fa fa-smile-o"><span>125.300</span> +</i>
                        <p>Transaksi Resi pertahun</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div class="single_project">
                    <img src="{{ asset('asset/img/home_2/project_2.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div class="single_project">
                    <div class="project_details">
                        <i class="fa fa-briefcase "><span>6.800</span> +</i>
                        <p>Manifest pertahun</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div class="single_project">
                    <img src="{{ asset('asset/img/home_2/project_4.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div class="single_project">
                    <img src="{{ asset('asset/img/home_2/project_4.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div class="single_project">
                    <div class="project_details">
                        <i class="fa fa-clock-o"><span>11.400</span> +</i>
                        <p>Delivery Order pertahun</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div class="single_project">
                    <img src="{{ asset('asset/img/home_2/project_6.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div class="single_project">
                    <div class="project_details">
                        <i class="fa fa-file-audio-o "><span>300</span> +</i>
                        <p>Pickup Order pertahun</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Stert All Project Area-->
<!--End Sercice Area -->
<section class="work_area section_padding section_gray">
    <div class="container">
       <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="page_title text-center">
                    <h2>Service we provide</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6">
                <div class="single_service">
                    <img src="{{ asset('asset/img/service_1.jpg') }}" alt="">
                    <div class="home_two_service_title">
                        <i class="fa fa-truck"></i>
                        <h4><a href="#">Armada Truck Terbaru</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">
                <div class="single_service">
                    <img src="{{ asset('asset/img/service_2.jpg') }}" alt="">
                    <div class="home_two_service_title">
                        <i class="fa fa-fighter-jet"></i>
                        <h4><a href="#">Kapal Laut Untuk Antar Pulau</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">
                <div class="single_service">
                    <img src="{{ asset('asset/img/team.png') }}" alt="">
                    <div class="home_two_service_title">
                        <i class="fa fa-briefcase"></i>
                        <h4><a href="#">Tim yang Solid Melayani Anda</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">
                <div class="single_service">
                    <img src="{{ asset('asset/img/service_4.jpg') }}" alt="">
                    <div class="home_two_service_title">
                        <i class="fa fa-dropbox"></i>
                        <h4><a href="#">Di dukung peralatan standar Nasional</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">
                <div class="single_service">
                    <img src="{{ asset('asset/img/it.png') }}" alt="">
                    <div class="home_two_service_title">
                       <i class="fa fa-dropbox"></i>
                        <h4><a href="#">Sistem IT Terbaik</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6">
                <div class="single_service">
                    <img src="{{ asset('asset/img/service_6.jpg') }}" alt="">
                    <div class="home_two_service_title">
                        <i class="fa fa-shopping-cart"></i>
                        <h4><a href="#">Fokus Kepuasan Customer</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service Area-->
<!--Our Process Area -->
<section class="process_area section_padding ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="page_title text-center">
                    <h2>Our Process</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="process_area_menu">
                <ul>
                    <li>
                        <a href="#"><img src="{{ asset('asset/img/process_1.png') }}" alt=""></a>
                        <p class="process_title">book our service</p>
                    </li>
                    <li>
                        <a href="#"><img src="{{ asset('asset/img/process_2.png') }}" alt=""></a>
                        <p class="process_title">we pack our things</p>
                    </li>
                    <li>
                        <a href="#"><img src="{{ asset('asset/img/process_3.png') }}" alt=""></a>
                        <p class="process_title">we move you things</p>
                    </li>
                    <li>
                        <a href="#"><img src="{{ asset('asset/img/process_4.png') }}" alt=""></a>
                        <p class="process_title">delevery you safely</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Our Process Area-->
<!--Our Great Team Area  -->
<section class="process_area section_padding section_gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="page_title text-center">
                    <h2>Our Great Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-6">
                <div class="single_team">
                    <img src="{{ asset('asset/img/team/riyadi.jpeg') }}" alt="">
                    <div class="team_discription">
                        <h3>M. Riyadi</h3>
                        <p>President Director</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">
                <div class="single_team">
                    <img src="{{ asset('asset/img/team/ari.jpg') }}" alt="">
                    <div class="team_discription">
                        <h3>M. Akbari</h3>
                        <p>Vice President Director</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">
                <div class="single_team">
                    <img src="{{ asset('asset/img/team/yati.jpg') }}" alt="">
                    <div class="team_discription">
                        <h3>Husniyati</h3>
                        <p>Vice President Director</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">
                <div class="single_team">
                    <img src="{{ asset('asset/img/team/arham.jpeg') }}" alt="">
                    <div class="team_discription">
                        <h3>Arham Latif</h3>
                        <p>Finance and Operational Officer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Our Great Team Area-->
<!--Client Discription Area  -->
<section class="client_discription_area section_padding ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="page_title text-center">
                    <h2>what out customer say about us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="single_client">
                    <div class="client_img">
                        <img src="{{ asset('asset/img/testi/mardinu.jpg') }}" alt="">
                    </div>
                    <div class="client_discription">
                        <h5>Mardinu Hendi</h5>
                        <p class="client_address">Kenjeran Surabaya</p>
                        <p>Karyati satu-satunya ekspedisi kelas partai paling murah, cepat dan amanah</p>
                        <div class="rating_area">
                            <p class="text-left">100% recomended</p>
                            <div class="ratting text-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="single_client">
                    <div class="client_img">
                        <img src="{{ asset('asset/img/testi/dina.jpg') }}" alt="">
                    </div>
                    <div class="client_discription">
                        <h5>Dina Wasilati</h5>
                        <p class="client_address">Bangil Pasuruan</p>
                        <p>Sudah 2 tahun berjalan berpartner dengan PT. AR Karyati, Alhamdulillah tidak ada kendala semuanya lancar. Semoga semakin baik dan maju lagi.</p>
                        <div class="rating_area">
                            <p class="text-left">100% recomended</p>
                            <div class="ratting text-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="single_client">
                    <div class="client_img">
                        <img src="{{ asset('asset/img/testi/khoir.jpg') }}" alt="">
                    </div>
                    <div class="client_discription">
                        <h5>Abdul Khoir</h5>
                        <p class="client_address">Kemang, Jakarta</p>
                        <p>Solusi kirim paket atau kendaraan dengan harga murah, sangat rekomended untuk yang merantau dan ingin mengirim barang yang banyak. </p>
                        <div class="rating_area">
                            <p class="text-left">100% recomended</p>
                            <div class="ratting text-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="single_client">
                    <div class="client_img">
                        <img src="{{ asset('asset/img/testi/ubaid.jpg') }}" alt="">
                    </div>
                    <div class="client_discription">
                        <h5>M. Ubaidillah</h5>
                        <p class="client_address">Lantebung Makassar</p>
                        <p>Kirim barang ke luar pulau sangat terjangkau, cepat dan akurat. Selain itu kita juga bisa tracking barang dengan sistem karyati. Benar-benar profesional..</p>
                        <div class="rating_area">
                            <p class="text-left">100% recomended</p>
                            <div class="ratting text-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Client Discription Area-->
<!--Blog Area  -->
<section class="blog_area section_padding section_gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="page_title text-center">
                    <h2>latest form our blog</h2>
                </div>
            </div>
        </div>
            @foreach($news as $new)
            <?php $date = new \DateTime($new->published_at) ?>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="single_blog">
                    <div class="blog_img">
                        <a href="{{ url('single-news').'/'.$new->title }}"><img src="{{ asset('asset/img/blog/'.$new->photo) }}" alt=""></a>
                        <div class="blog_date">
                            <p class="Blog_month">{{ $date->format('d') }} <span>{{ $date->format('M') }}</span></p>
                            <p class="blog_year">{{ $date->format('y') }}</p>
                        </div>
                    </div>
                    <div class="blog_content">   
                        <p class="blog_name">By/John Smith</p>
                        <h3><a href="{{ url('single-news').'/'.$new->title }}">{{ $new->title }}</a></h3>
                        <p>{!! substr($new->text_contain, 0, 300) !!}{{ strlen($new->text_contain) > 300 ? '.........' : '' }}</p>
                    </div>
                </div>
            </div>
        </div>
           @endforeach
    </div>
</section>
<!--End Blog Area-->
<!-- Slider Bottom Area  -->
<section class="slider_bottom_area section_padding ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="page_title text-center">
                    <h2>Our Clients</h2>
                    <p>Loyalitas pelanggan mengantarkan kami pada level pencapaian yang tidak dapat kami tempuh sendiri tanpa ada kontribusi besar dari pelanggan setia.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="slider_bottom">
                    <div class="single_slide"><a href="#"><img src="{{ asset('asset/img/client/1.png') }}" alt=""></a></div>
                    <div class="single_slide"><a href="#"><img src="{{ asset('asset/img/client/2.png') }}" alt=""></a></div>
                    <div class="single_slide"><a href="#"><img src="{{ asset('asset/img/client/3.png') }}" alt=""></a></div>
                    <div class="single_slide"><a href="#"><img src="{{ asset('asset/img/client/4.png') }}" alt=""></a></div>
                    <div class="single_slide"><a href="#"><img src="{{ asset('asset/img/client/5.png') }}" alt=""></a></div>
                    <div class="single_slide"><a href="#"><img src="{{ asset('asset/img/client/6.png') }}" alt=""></a></div>
                    <div class="single_slide"><a href="#"><img src="{{ asset('asset/img/client/7.png') }}" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Slider Bottom Area-->
<!-- Newsletter Area -->
<br>
<br>
<br>
<br>
<!--End Newsletter Area-->
@endsection

@section('script')
@parent
<script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
@endsection