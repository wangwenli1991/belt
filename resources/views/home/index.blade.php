@extends('home.header') 

@section('shouye') 

    <!-- Start slider area -->
    <div id="mu-slider">
        <div class="mu-slide">
            <!-- Start single slide  -->
            <div class="mu-single-slide">
                <img src="{{ asset('belt/images/slider-img-1.jpg') }}" alt="slider img">
                <div class="mu-single-slide-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mu-single-slide-content">
                                    <h1>Welcome to b-hero</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    <a class="mu-primary-btn" href="#">Read more <span class="fa fa-long-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single slide  -->

            <!-- Start single slide  -->
            <div class="mu-single-slide">
                <img src="{{ asset('belt/images/slider-img-2.jpg') }}" alt="slider img">
                <div class="mu-single-slide-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mu-single-slide-content">
                                    <h1>We Promote Your Business</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    <a class="mu-primary-btn" href="#">Read more <span class="fa fa-long-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single slide  -->

            <!-- Start single slide  -->
            <div class="mu-single-slide">
                <img src="{{ asset('belt/images/slider-img-3.jpg') }}" alt="slider img">
                <div class="mu-single-slide-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mu-single-slide-content">
                                    <h1>Free Multipurpose Template</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    <a class="mu-primary-btn" href="#">Read more <span class="fa fa-long-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single slide  -->
        </div>
    </div>
    <!-- End Slider area -->

    
    <!-- Start main content -->
    <main>
        <!-- Start About -->
        <section id="mu-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-about-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-title">
                                        <h2>Who we are</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Feature Content -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mu-about-left">
                                        <img class="" src="{{ asset('belt/images/about-us.jpg') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-about-right">
                                        <ul>
                                            <li>
                                                <h3>Our Mission</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                            </li>
                                            <li>
                                                <h3>Our Vision</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                            </li>
                                            <li>
                                                <h3>Our Valuse</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Feature Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About -->

        <!-- Call to Action -->
        <div id="mu-call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-call-to-action-area">
                            <div class="mu-call-to-action-left">
                                <h2>This is a simple hero unit, a simple jumbotron-style</h2>
                                <p>component for calling extra attention to featured content or information.</p>
                            </div>
                            <a href="#" class="mu-primary-btn mu-quote-btn">Get a Quote <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Start Services -->
        <section id="mu-service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-service-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-title">
                                        <h2>Our exclusive services</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Service Content -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-service-content">
                                        <div class="row">
                                            <!-- Start single service -->
                                            <div class="col-md-4">
                                                <div class="mu-single-service">
                                                    <div class="mu-single-service-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                                                    <div class="mu-single-service-content">
                                                        <h3>E-Commerce</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single service -->
                                            <!-- Start single service -->
                                            <div class="col-md-4">
                                                <div class="mu-single-service">
                                                    <div class="mu-single-service-icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
                                                    <div class="mu-single-service-content">
                                                        <h3>Online Marketing</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single service -->
                                            <!-- Start single service -->
                                            <div class="col-md-4">
                                                <div class="mu-single-service">
                                                    <div class="mu-single-service-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
                                                    <div class="mu-single-service-content">
                                                        <h3>Web Design</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single service -->
                                            <!-- Start single service -->
                                            <div class="col-md-4">
                                                <div class="mu-single-service">
                                                    <div class="mu-single-service-icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                                                    <div class="mu-single-service-content">
                                                        <h3>Mobile Development</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single service -->
                                            <!-- Start single service -->
                                            <div class="col-md-4">
                                                <div class="mu-single-service">
                                                    <div class="mu-single-service-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                                                    <div class="mu-single-service-content">
                                                        <h3>Customer Support</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single service -->
                                            <!-- Start single service -->
                                            <div class="col-md-4">
                                                <div class="mu-single-service">
                                                    <div class="mu-single-service-icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
                                                    <div class="mu-single-service-content">
                                                        <h3>Customization</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single service -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services -->

        <!-- Start Video -->
        <div id="mu-video">
            <div class="row">
                <div class="col-md-6">
                    <div class="mu-video-left">
                        <a href="#" class="mu-video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mu-video-right">
                        <p>In this video from our "Talking business" series, our expert discusses the role a business plan can play in the success of your business.</p>
                    </div>
                </div>
            </div>

            <!-- Start Video Popup -->
            <div class="mu-video-popup">
                <div class="mu-video-iframe-area">
                    <a class="mu-video-close-btn" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/n9AVEl9764s" allowfullscreen></iframe>
                </div>
            </div>
            <!-- End Video Popup -->

        </div>
        <!-- End Video -->

        <!-- Start Portfolio -->
        <section id="mu-portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-portfolio-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-title">
                                        <h2>Our Recent Project</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                    <!-- Start Portfolio Filter -->
                                    <div class="mu-portfolio-filter-area">
                                        <ul class="mu-simplefilter">
                                            <li class="active" data-filter="all">All<span>/</span></li>
                                            <li data-filter="1">Web design<span>/</span> </li>
                                            <li data-filter="2">Mobile Development<span>/</span></li>
                                            <li data-filter="3">E-commerces<span>/</span></li>
                                            <li data-filter="4"> Arts<span>/</span> </li>
                                            <li data-filter="5">Branding</li>
                                        </ul>
                                    </div>

                                    <!-- Start Portfolio Content -->
                                    <div class="mu-portfolio-content">
                                        <div class="filtr-container">

                                            <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="4">
                                               <a class="mu-imglink" href="assets/images/portfolio/img-1.jpg" title="PAINTING">
                                                    <img class="img-responsive" src="assets/images/portfolio/img-1.jpg" alt="image">
                                                    <div class="mu-filter-item-content">
                                                        <h4 class="mu-filter-item-title">PAINTING</h4>
                                                        <span class="fa fa-long-arrow-right"></span>
                                                    </div>
                                               </a>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="5">
                                                <a class="mu-imglink" href="assets/images/portfolio/img-2.jpg" title="BRANDING">
                                                    <img class="img-responsive" src="assets/images/portfolio/img-2.jpg" alt="image">
                                                    <div class="mu-filter-item-content">
                                                        <h4 class="mu-filter-item-title">BRANDING</h4>
                                                        <span class="fa fa-long-arrow-right"></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="3">
                                                <a class="mu-imglink" href="assets/images/portfolio/img-3.jpg" title="E-COMMERCE">
                                                    <img class="img-responsive" src="assets/images/portfolio/img-3.jpg" alt="image">
                                                    <div class="mu-filter-item-content">
                                                        <h4 class="mu-filter-item-title">E-COMMERCE</h4>
                                                        <span class="fa fa-long-arrow-right"></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="1">
                                                <a class="mu-imglink" href="assets/images/portfolio/img-4.jpg" title="WEB DESIGN">
                                                    <img class="img-responsive" src="assets/images/portfolio/img-4.jpg" alt="image">
                                                    <div class="mu-filter-item-content">
                                                        <h4 class="mu-filter-item-title">WEB DESIGN</h4>
                                                        <span class="fa fa-long-arrow-right"></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="2">
                                                <a class="mu-imglink" href="assets/images/portfolio/img-5.jpg" title="MOBILE DEVELOPMENT">
                                                    <img class="img-responsive" src="assets/images/portfolio/img-5.jpg" alt="image">
                                                    <div class="mu-filter-item-content">
                                                         <h4 class="mu-filter-item-title">MOBILE DEVELOPMENT</h4>
                                                         <span class="fa fa-long-arrow-right"></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="5">
                                               <a class="mu-imglink" href="assets/images/portfolio/img-6.jpg" title="BRANDING">
                                                    <img class="img-responsive" src="assets/images/portfolio/img-6.jpg" alt="image">
                                                    <div class="mu-filter-item-content">
                                                        <h4 class="mu-filter-item-title">BRANDING</h4>
                                                        <span class="fa fa-long-arrow-right"></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="3">
                                               <a class="mu-imglink" href="assets/images/portfolio/img-7.jpg" title="E-COMMERCE">
                                                    <img class="img-responsive" src="assets/images/portfolio/img-7.jpg" alt="image">
                                                    <div class="mu-filter-item-content">
                                                        <h4 class="mu-filter-item-title">E-COMMERCE</h4>
                                                        <span class="fa fa-long-arrow-right"></span>
                                                    </div>
                                               </a>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="4">
                                                <a class="mu-imglink" href="assets/images/portfolio/img-8.jpg" title="PAINTING">
                                                    <img class="img-responsive" src="assets/images/portfolio/img-8.jpg" alt="image">
                                                    <div class="mu-filter-item-content">
                                                        <h4 class="mu-filter-item-title">PAINTING</h4>
                                                        <span class="fa fa-long-arrow-right"></span>
                                                    </div>
                                                </a>
                                            </div>

                                              <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="1">
                                                <a class="mu-imglink" href="assets/images/portfolio/img-4.jpg" title="WEB DESIGN">
                                                    <img class="img-responsive" src="assets/images/portfolio/img-4.jpg" alt="image">
                                                    <div class="mu-filter-item-content">
                                                        <h4 class="mu-filter-item-title">WEB DESIGN</h4>
                                                        <span class="fa fa-long-arrow-right"></span>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End Portfolio Content -->
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio -->

        <!-- Start Counter -->
        <section id="mu-counter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-counter-area">

                            <div class="mu-counter-block">
                                <div class="row">

                                    <!-- Start Single Counter -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mu-single-counter">
                                            <span class="fa fa-suitcase"></span>
                                            <div class="mu-single-counter-content">
                                                <div class="counter-value" data-count="250">0</div>
                                                <h5 class="mu-counter-name">Project</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / Single Counter -->

                                    <!-- Start Single Counter -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mu-single-counter">
                                            <span class="fa fa-user"></span>
                                            <div class="mu-single-counter-content">
                                                <div class="counter-value" data-count="56">0</div>
                                                <h5 class="mu-counter-name">Clients</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / Single Counter -->

                                    <!-- Start Single Counter -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mu-single-counter">
                                            <span class="fa fa-coffee"></span>
                                            <div class="mu-single-counter-content">
                                                <div class="counter-value" data-count="15">0</div>
                                                <h5 class="mu-counter-name">Stuff</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / Single Counter -->

                                    <!-- Start Single Counter -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="mu-single-counter">
                                            <span class="fa fa-clock-o"></span>
                                            <div class="mu-single-counter-content">
                                                <div class="counter-value" data-count="290">0</div>
                                                <h5 class="mu-counter-name">Day</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / Single Counter -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter -->

        <!-- Start Pricing Table -->
        <section id="mu-pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-pricing-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-title">
                                        <h2>Our Pricing Table</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mu-pricing-content">
                                        <ul class="mu-pricing-table">
                                            <li>
                                                <div class="mu-pricing-single">
                                                    <div class="mu-pricing-single-icon">
                                                        <span class="fa fa-user"></span>
                                                    </div>
                                                    <div class="mu-pricing-single-title">
                                                        <h3>Basic</h3>
                                                    </div>
                                                    <div class="mu-pricing-single-content">
                                                        <ul>
                                                            <li>Lorem ipsum dolor sit amet.</li>
                                                            <li>Consectetuer elit aeneaneget dolor.</li>
                                                            <li>Aenean massa cum sociis natoque.</li>
                                                            <li>Penatibus.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="mu-single-pricebox">
                                                        <h4>29$<span>/month</span></h4>
                                                    </div>
                                                    <a class="mu-buy-now-btn" href="#">Buy now</a>
                                                </div>
                                            </li>
                                            <li class="mu-standard-pricing">
                                                <div class="mu-pricing-single">
                                                    <div class="mu-pricing-single-icon">
                                                        <span class="fa fa-lock"></span>
                                                    </div>
                                                    <div class="mu-pricing-single-title">
                                                        <h3>Standard</h3>
                                                    </div>
                                                    <div class="mu-pricing-single-content">
                                                        <ul>
                                                            <li>Lorem ipsum dolor sit amet.</li>
                                                            <li>Consectetuer elit aeneaneget dolor.</li>
                                                            <li>Aenean massa cum sociis natoque.</li>
                                                            <li>Penatibus.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="mu-single-pricebox">
                                                        <h4>99$<span>/month</span></h4>
                                                    </div>
                                                    <a class="mu-buy-now-btn" href="#">Buy now</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mu-pricing-single">
                                                    <div class="mu-pricing-single-icon">
                                                        <span class="fa fa-paper-plane"></span>
                                                    </div>
                                                    <div class="mu-pricing-single-title">
                                                        <h3>Premium</h3>
                                                    </div>
                                                    <div class="mu-pricing-single-content">
                                                        <ul>
                                                            <li>Lorem ipsum dolor sit amet.</li>
                                                            <li>Consectetuer elit aeneaneget dolor.</li>
                                                            <li>Aenean massa cum sociis natoque.</li>
                                                            <li>Penatibus.</li>
                                                        </ul>
                                                    </div>
                                                    <div class="mu-single-pricebox">
                                                        <h4>229$<span>/month</span></h4>
                                                    </div>
                                                    <a class="mu-buy-now-btn" href="#">Buy now</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
        <!-- End Pricing Table -->

        <!-- Start Client Testimonials -->
        <section id="mu-testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-testimonials-area">
                            <h2>What Our Client Says</h2>

                            <div class="mu-testimonials-block">
                                <ul class="mu-testimonial-slide">

                                    <li>
                                        <img class="mu-rt-img" src="assets/images/traveler-1.jpg" alt="img">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa</p>
                                        <h5 class="mu-rt-name">Emma Marshall</h5>
                                        <span class="mu-rt-title">Web Developer </span>
                                    </li>

                                    <li>
                                        <img class="mu-rt-img" src="assets/images/traveler-2.jpg" alt="img">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa</p>
                                        <h5 class="mu-rt-name">Jhon Doe</h5>
                                        <span class="mu-rt-title">UI/UX Designer</span>
                                    </li>

                                    <li>
                                        <img class="mu-rt-img" src="assets/images/traveler-3.jpg" alt="img">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa</p>
                                        <h5 class="mu-rt-name">Jessica Doe</h5>
                                        <span class="mu-rt-title">Web Designer </span>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Client Testimonials -->

        <!-- Start from blog -->
        <section id="mu-from-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-from-blog-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-title">
                                        <h2>From Our Blog</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mu-from-blog-content">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <article class="mu-blog-item">
                                                    <a href="#"><img src="assets/images/blog-img-1.jpg" alt="blgo image"></a>
                                                    <div class="mu-blog-item-content">
                                                        <ul class="mu-blog-meta">
                                                            <li>BY: ADMIN </li>
                                                            <li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
                                                            <li><i class="fa fa-heart-o"></i>250</li>
                                                        </ul>
                                                        <h2 class="mu-blog-item-title"><a href="#">Seeing the big picture of information and information management</a></h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
                                                        <a class="mu-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4">
                                                <article class="mu-blog-item">
                                                    <a href="#"><img src="assets/images/blog-img-2.jpg" alt="blgo image"></a>
                                                    <div class="mu-blog-item-content">
                                                        <ul class="mu-blog-meta">
                                                            <li>BY: ADMIN </li>
                                                            <li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
                                                            <li><i class="fa fa-heart-o"></i>250</li>
                                                        </ul>
                                                        <h2 class="mu-blog-item-title"><a href="#">Vestibulum lacinia elit sed elit ultrices consequat.</a></h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
                                                        <a class="mu-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4">
                                                <article class="mu-blog-item">
                                                    <a href="#"><img src="assets/images/blog-img-3.jpg" alt="blgo image"></a>
                                                    <div class="mu-blog-item-content">
                                                        <ul class="mu-blog-meta">
                                                            <li>BY: ADMIN </li>
                                                            <li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
                                                            <li><i class="fa fa-heart-o"></i>250</li>
                                                        </ul>
                                                        <h2 class="mu-blog-item-title"><a href="#">Aliquam consectetur sem sed ante semper, ut convallis risus ullamcorper.</a></h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis. </p>
                                                        <a class="mu-blg-readmore-btn" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End from blog -->

        <!-- Start Newsletter -->
        <section id="mu-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-newsletter-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-title">
                                        <h2>Subscribe Our newsletter</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mu-newsletter-content">
                                        <form class="mu-subscribe-form">
                                            <input type="email" placeholder="Write your e-mail here">
                                            <button class="mu-subscribe-btn">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Newsletter -->

        <!-- Start Clients -->
        <div id="mu-clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-clients-area">

                            <!-- Start Clients brand logo -->
                            <div class="mu-clients-slider">

                                <div class="mu-clients-single">
                                    <img src="assets/images/client-brand-1.jpg" alt="Brand Logo">
                                </div>

                                <div class="mu-clients-single">
                                    <img src="assets/images/client-brand-2.jpg" alt="Brand Logo">
                                </div>

                                <div class="mu-clients-single">
                                    <img src="assets/images/client-brand-3.jpg" alt="Brand Logo">
                                </div>

                                <div class="mu-clients-single">
                                    <img src="assets/images/client-brand-4.jpg" alt="Brand Logo">
                                </div>

                                <div class="mu-clients-single">
                                    <img src="assets/images/client-brand-5.jpg" alt="Brand Logo">
                                </div>

                                <div class="mu-clients-single">
                                    <img src="assets/images/client-brand-6.jpg" alt="Brand Logo">
                                </div>
                            </div>
                            <!-- End Clients brand logo -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Clients -->

    </main>
    
    <!-- End main content -->   
            
 

 @endsection