 <!-- start header area -->
 <header class="navbar-area">
    <div class="top-nav">
        <!-- header top -->
        <div class="container d-flex justify-content-between">
            <!-- top left -->
            <div class="top-left">
                <ul class="info-list">
                    <li>
                        <i class="envy envy-email"></i>
                        <a href="mailTo:{{$setting->email}}">{{$setting->email}}</a>
                    </li>
                    <li><i class="envy envy-wall-clock"></i>{{$setting->office_hour}}</li>
                </ul>
            </div>
            <!-- top right -->
            <div class="top-right">
                <div class="social-link">
                    @if (!empty($social->facebook))
                        <a href="{{$social->facebook}}" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    @endif
                    @if (!empty($social->twitter))
                        <a href="{{$social->twitter}}" target="_blank">
                            <i class="fab fa-tumblr"></i>
                        </a>
                    @endif
                    @if (!empty($social->youtube))
                        <a href="{{$social->youtube}}" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    @endif
                    @if (!empty($social->linkedin))
                        <a href="{{$social->linkedin}}" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    @endif
                    @if (!empty($social->instagram))
                        <a href="{{$social->instagram}}" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- menu for mobile device -->
    <div class="mobile-nav">
        <a href="{{route('index')}}" class="logo">
            <img src="{{asset('public/uploads/'.$theme->logo)}}" alt="{{$theme->website_name}}"/>
            <img src="{{asset('public/uploads/'.$theme->logo)}}" alt="{{$theme->website_name}}"/>
        </a>
    </div>
    <!-- menu for desktop device-->
    <div class="main-nav">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{route('index')}}">
                    <img src="{{asset('public/uploads/'.$theme->logo)}}" alt="{{$theme->website_name}}"/>
                    <img src="{{asset('public/uploads/'.$theme->logo)}}" alt="{{$theme->website_name}}"/>
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle active">Home</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link active">Home Page 1</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link">Home Page 2</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-3.html" class="nav-link">Home Page 3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link"> About </a>
                                </li>
                                <li class="nav-item">
                                    <a href="team.html" class="nav-link"> Team </a>
                                </li>
                                <li class="nav-item">
                                    <a href="testimonials.html" class="nav-link">
                                        Testimonials
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="coming-soon.html" class="nav-link">
                                        coming soon
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Projects
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="projects.html" class="nav-link">projects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="project-details.html" class="nav-link">projects details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="sign-in.html" class="nav-link"> Sign In </a>
                                </li>
                                <li class="nav-item">
                                    <a href="sign-up.html" class="nav-link"> Sign Up </a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-condition.html" class="nav-link">
                                        Terms & Conditions
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link"> FAQ </a>
                                </li>
                                <li class="nav-item">
                                    <a href="error-404.html" class="nav-link"> Error Page </a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link"> Contact </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="pricing.html" class="nav-link">pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">services</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="services.html" class="nav-link">Services grid</a>
                                </li>
                                <li class="nav-item">
                                    <a href="service-details.html" class="nav-link">Services details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog-grid.html" class="nav-link">Blog grid</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">blog details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">contact</a>
                        </li>
                    </ul>
                    <div class="search-item">
                        <div class="search-btn">
                            <i class="open-btn envy envy-magnify-glass"></i>
                            <i class="close-btn envy envy-close"></i>
                        </div>
                        <div class="search-overlay search-popup">
                            <form class="search-form">
                                <input class="search-input" name="search" placeholder="Search" type="text" />
                                <button class="btn btn-solid" type="submit">
                                    <i class="envy envy-magnify-glass"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="cta-btn">
                        <a href="sign-in.html" class="btn btn-solid">
                            <i class="envy envy-user"></i>
                            log in
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- end header area -->
