<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designarc.biz/demos/logic-cargo/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Aug 2020 10:11:32 GMT -->

<head>
    @include('warehouse.layouts.head')
</head>

<body>

    <!-- Start header -->
    @include('warehouse.layouts.header')
    <!-- End header  -->

    <!-- Start mainmenu -->
    @include('warehouse.layouts.nav')
    <!-- End mainmenu -->

    @include('warehouse.layouts.banner')


    <section>
        <div class="container">
            @yield('content')
        </div>
        </div>
    </section>




    <section class="footer-top">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h3>Logistic and cargo</h3>
                        <p>Contact us now to get quote for all your global <br>shipping and cargo need.</p>
                    </div>
                    <div class="col-md-6">
                        <a class="thm-btn" href="contact.html">Contact Us <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer id="footer" class="sec-padding">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-3 col-sm-6 footer-widget">
                    <div class="about-widget">
                        <a href="#"><img src="images/footer-logo.png" alt="Awesome Image" /></a>
                        <p>Lorem ipsum dolor sit amet, consecte- tur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et.</p>
                        <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 footer-widget">
                    <div class="pl-30">
                        <div class="title">
                            <h3><span>Our Services</span></h3>
                        </div>
                        <ul class="link-list">
                            <li><a href="#">Sea Freight</a></li>
                            <li><a href="#">Road Transportation</a></li>
                            <li><a href="#">Air Freight</a></li>
                            <li><a href="#">Railway Logistics</a></li>
                            <li><a href="#">Packaging & Storage</a></li>
                            <li><a href="#">Warehousing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 footer-widget">
                    <div class="title">
                        <h3><span>Quick Links</span></h3>
                    </div>
                    <ul class="link-list">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 footer-widget">
                    <div class="title">
                        <h3><span>Quick Links</span></h3>
                    </div>
                    <ul class="contact-infos">
                        <li>
                            <div class="icon-box">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="text-box">
                                <p><b>Logis Cargo Ltd.</b> <br> 42B, Tailstoi Town 5248 MT, Australia</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="text-box">
                                <p>+ 01865 524 8503 / 1254 954 7854</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="text-box">
                                <p>contact@logiccargo.com</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-box">
                                <i class="icon icon-Timer"></i>
                            </div>
                            <div class="text-box">
                                <p>Monday - Friday : 8.00 - 19.00</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <section class="bottom-bar">
        <div class="thm-container clearfix">
            <div class="pull-left">
                <p>Copyright © Logic Cargo 2016. All rights reserved.</p>
            </div>
            <div class="pull-right">
                <p>Created by: DesignArc</p>
            </div>
        </div>
    </section>

    @include('warehouse.layouts.scripts')
</body>

<!-- Mirrored from designarc.biz/demos/logic-cargo/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Aug 2020 10:11:37 GMT -->

</html>