<nav class="main-menu-wrapper stricky">
    <div class="thm-container menu-gradient ">
        <div class="clearfix">
            <div class="nav-holder pull-left">
                <div class="nav-header">
                    <button><i class="fa fa-bars"></i></button>
                </div>
                <div class="nav-footer">
                    <ul class="nav">
                        <li class="has-submenu">
                            <a href="index-2.html">Home</a>
                            <ul class="submenu">
                                <li><a href="index-3.html">Home Two</a></li>
                                <li><a href="index-4.html">Home Three</a></li>
                                <li><a href="index-5.html">Home Four</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="about.html">about us</a>
                            <ul class="submenu">
                                <li><a href="team.html">Our Team</a></li>
                                <li><a href="company-history.html">Company History</a></li>
                                <li><a href="clients.html">Our Clients</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="career.html">Career</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="service.html">Services</a>
                            <ul class="submenu">
                                <li><a href="single-service.html">Service Details</a></li>
                                <li><a href="pricing.html">Our Pricing</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="fleet-gallery-1.html">Gallery</a>
                            <ul class="submenu">
                                <li><a href="fleet-gallery-1.html">Fleet Gallery One</a></li>
                                <li><a href="fleet-gallery-2.html">Fleet Gallery Two</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Pages</a>
                            <ul class="submenu">
                                <li><a href="404.html">Error 404 page</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="track-shipment.html">Track Your Shipment</a></li>
                                <li><a href="request-qoute.html">Request a Qoute</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="blog-left.html">blog</a>
                            <ul class="submenu">
                                <li><a href="blog-left.html">Blog Left Bar</a></li>
                                <li><a href="blog-right.html">Blog Right Bar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">contact us</a></li>
                        @if (auth('warehouse')->check())
                        <li class="has-submenu">
                            <a href="fleet-gallery-1.html">Profile</a>
                            <ul class="submenu">
                                <li><a href="{{ route('edit.warehouse.profile') }}">View Profile</a></li>
                                <li><a href="{{ route('warehouse.change.password') }}">Change Password</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="free-qoute-button pull-right">
                @if (auth('warehouse')->check())
                <a href="{{ route('warehouse.logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('warehouse.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @else
                <a href="{{ route('warehouse.login') }}">Login</a>
                @endif
            </div>
        </div>
    </div>
</nav>