<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
                @include('includes.header')



        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--Start Mobile Menu Area-->
        @include('includes.menu-mobile')
        <!--End Mobile Menu Area-->
        
        <!--Start Header area -->
        <div class="header_area">
             <div class="header_top_area">
                <div class="container">
                    <div class="row">  
                        <div class="col-md-4 col-lg-4">
                            <div class="header_top_menu">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Contact Us</a></li>
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
                                <a href="index.html"><img src="img/4each.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-md-offset-1 col-lg-offset-1">
                            <div class="opening_time s_header">
                                <div><i class="fa fa-clock-o"></i></div>
                                <p class="contact_title">Opening Hours</p>
                                <p class="uppercase">Mon to fri - 9:00 am to 9:00 pm</p>
                                <p class="uppercase">sat 9:00 am to 5:00 pm</p>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 ">
                            <div class="call_us s_header">
                                <div><i class="fa fa-phone"></i></div>
                                <p class="contact_title">Call Us</p>
                                <p>+123 456 789</p>
                                <p>+123 456 789</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 ">
                            <div class="email_us s_header">
                                <div><i class="fa fa-envelope-o"></i></div>
                                <p class="contact_title">Email Us</p>
                                <p class="uppercase">Info@itemmovers.com</p>
                                <p class="uppercase">Query@itemmovers.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Area-->
        <!--Start Slider Area -->
        <section class="about_page_barner_area">
            <div class="barner_content">
                <div class="container">
                   <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="barner_text text-center">
                                <h2>Get A Quate</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('includes.menu')

        </section>
        <!--End Slider Area-->
        <!--Start Sercice Area-->
        <section class="work_area section_padding ">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                        <div class="contact_information_form">
                            <h3>CONTACT INFORMATION</h3>
                            <form action="process.php">
                                <div class="top_contact">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <p>First Name*<br/><input type="text" required></p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <p>Last Name*<br/><input type="text" required></p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <p>Email Address*<br/><input type="email" required></p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <p>Phone*<br/><input type="text" required></p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <p>Address<br/><input type="text" ></p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <p>City<br/><input type="text" ></p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <p>State<br/><input type="text" ></p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <p>Zip<br/><input type="text" ></p>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom_details">
                               <h3>MOVE DETAILS</h3>
                                <div class="row">
                                    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                                    <p>Requested move date *<br/><input type="text" required></p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <p>moving from zip *<br/><input type="text" required></p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <p>describe the location *<br/><input type="text" required></p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <p>moving to zip *<br/><input type="text" required></p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <p>describe the location *<br/><input type="text" required></p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <p>type of residence<br/><input type="text" ></p>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <p>storage requested ?<br/><input type="text" ></p>
                                    </div>
                                </div>
                                <button type="submit">GET A QUATE</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="get_quate_sidebar">
                            <div class="s_sidebar">
                                <h3>our services</h3>
                                <ul class="quate_sidebar">
                                    <li class="quate_icon_1"><a href="">moving locally or interstate</a></li>
                                    <li class="quate_icon_2"><a href="">moving overseas</a></li>
                                    <li class="quate_icon_3"><a href="">corporate relocation</a></li>
                                    <li class="quate_icon_4"><a href="">commercial relocation</a></li>
                                    <li class="quate_icon_5"><a href="">packing</a></li>
                                    <li class="quate_icon_6"><a href="">storage</a></li>
                                </ul>
                                <div class="sidebar_img">
                                    <img src="img/get_quate/get_quate_1.jpg" alt="">
                                    <img src="img/get_quate/get_quate_2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Service Area-->
        <!-- Newsletter Area-->
        <section class="newsletter_area ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                       <div class="signup_newsletter">
                           <p>singup for our</p>
                           <h3>newsletter</h3>
                           <form action="process.php">
                               <input type="email" placeholder="e-mail address" required>
                               <input type="submit" value="suscribe">
                           </form>
                       </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Newsletter Area-->
        <!-- Footer Area  -->
        <footer class="footer_area ">
            <div class="footer_top_area  section_dark">
                <div class="container">
                    <div class="row footer_padding_top">
                        <div class="col-md-4 col-lg-4">
                            <div class="footer_adddress s_footer">
                                <div><i class="fa fa-home"></i></div>
                                <p class="uppercase">address</p>
                                <p>09 Movers and Packers,Design Street,Victoria,Australia</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 ">
                            <div class="footer_call_us s_footer">
                                <div><i class="fa fa-phone"></i></div>
                                <p class="uppercase">quick contact</p>
                                <p>+123 456 789 <br>+123 456 789</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer_email_us s_footer">
                                <div><i class="fa fa-envelope-o"></i></div>
                                <p class="uppercase">Email address</p>
                                <p>Info@ItemMovers.Com <br>Help@ItemMovers.Com</p>
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
                                <h3>About Us</h3>
                                <p>In a freak mishap Ranger 3 and its pilot Captain William Buck Rogers are blown out of their trajectory into an orbit which freezes his life support systems and returns Buck Rogers to Earth five-hundred years later. </p>
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
                                        <li><a href="#">Moving locally or Interstate</a></li>
                                        <li><a href="#">Moving Oversead</a></li>
                                        <li><a href="#">Commercial Relocation</a></li>
                                        <li><a href="#">Corporate Relocation</a></li>
                                        <li><a href="#">Packing</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <ul>
                                        <li><a href="#">Storage</a></li>
                                        <li><a href="#">Insurance</a></li>
                                        <li><a href="#">Additional Service</a></li>
                                        <li><a href="#">Contuct Us</a></li>
                                        <li><a href="#">Quality Policy Statement</a></li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="footer_opening_time">
                                <h3>buseness hour</h3>
                                <p>Monday To Friday:<br>9:00 am to 9:00 pm </p>
                                <p>Saturday:<br> 9:00 am to 5:00 pm</p>
                                <p>Vacations:<br>All Sundays <br> All Official Holydays</p>
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
                                <p>Copyright &copy;2015. All Right Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                           <div class="footer_menu">
                               <nav>
								   <ul>
										<li><a href="#">Home</a></li>
										<li>I</li>
										<li><a href="#">About Us</a></li>
										<li>I</li>
										<li><a href="#">Service</a></li>
										<li>I</li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Footer Area-->
        
        <!--jQuery-->
                @include('includes.script')

    </body>
</html>