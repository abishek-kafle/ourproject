 <!-- start footer area -->
 <footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                <div class="footer-widget">
                    <div class="navbar-brand">
                        <a href="index.html">
                            <img src="{{asset('public/front/assets/img/logos/logo_dark.png')}}" alt="image" />
                        </a>
                    </div>
                    <p>Grursus mal suada faci Lorem to the ipsum dolarorit more ame tion more consectetu.</p>
                    <div class="social-link">
                        @if (!empty($social->facebook))
                            <a href="{{$social->facebook}}" class="bg-tertiary" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        @endif
                        @if (!empty($social->twitter))
                            <a href="{{$social->twitter}}" class="bg-success" target="_blank">
                                <i class="fab fa-tumblr"></i>
                            </a>
                        @endif
                        @if (!empty($social->youtube))
                            <a href="{{$social->youtube}}" class="bg-danger" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        @endif
                        @if (!empty($social->linkedin))
                            <a href="{{$social->linkedin}}" class="bg-info" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        @endif
                        @if (!empty($social->instagram))
                            <a href="{{$social->instagram}}" class="bg-pink" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                <div class="footer-widget">
                    <h5>Our Services</h5>
                    <ul class="footer-quick-links">
                        <li>
                            <a href="service-details.html">Interface Design</a>
                        </li>
                        <li>
                            <a href="service-details.html">SEO Optimizer</a>
                        </li>
                        <li>
                            <a href="service-details.html">Digital Marketing</a>
                        </li>
                        <li>
                            <a href="service-details.html">Market Monitor</a>
                        </li>
                        <li>
                            <a href="service-details.html">Graphic Design</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                <div class="footer-widget">
                    <h5>Other Resources</h5>
                    <ul class="footer-quick-links">
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="pricing.html">Pricing</a>
                        </li>
                        <li>
                            <a href="privacy-policy.html">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                <div class="footer-widget">
                    <h5>Contact info</h5>
                    <div class="contact-info">
                        <i class="envy envy-pin"></i>
                        <p>{{$setting->address}}</p>
                    </div>
                    <div class="contact-info">
                        <i class="envy envy-call"></i>
                        <p>
                            <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a>
                        </p>
                        <br>
                        <p>
                            <a href="{{$setting->alt_phone}}">{{$setting->alt_phone}}</a>
                        </p>
                    </div>
                    <div class="contact-info">
                        <i class="envy envy-plane"></i>
                        <p>
                            <a href="mailTo:{{$setting->email}}">{{$setting->email}}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer area -->

<!-- start copy right area -->
<div class="copy-right-area">
    <div class="container">
        <div class="copy-right-content">
            <p>
                Copyright @2021 Solit. Designed By

                <a href="https://hibootstrap.com/" target="_blank">
                    HiBootstrap.com
                </a>
            </p>
        </div>
    </div>
</div>
<!-- end copy right area-->
