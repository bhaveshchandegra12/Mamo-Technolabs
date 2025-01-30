@extends('layout.app')
@section('main')
    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="main__circle"></div>
        <div class="main__circle2"></div>
        <div class="main__circle3"></div>
        <div class="main__circle4"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h1><span class="wow fadeInUp" data-wow-delay=".4s">A Complete Template</span>
                            <span class="wow fadeInUp" data-wow-delay=".8s">For SaaS</span>
                            <span class="wow fadeInUp" data-wow-delay="1.2s">And Startup</span>
                            <span class="color2 wow fadeInUp" data-wow-delay="1.6s">Websites</span>
                        </h1>
                        <p>Improve your daily UX work and create wireframes
                            and diagrams, prototypes, handoff documentation.</p>
                        <div class="button">
                            <a href="contact.html" class="btn ">Start 7 day free trial</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="app-image">
                        <div class="image-bg-shape"></div>
                        <img src="{{ asset('user\img\hero\app.svg') }}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Services Area -->
    <section class="services section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Service we provide</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Mix & match our tools<br> plan that fits</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <!-- Start Single Service -->
                    <div class="single-service one">
                        <div class="service-icon">
                            <i class="lni lni-android"></i>
                        </div>
                        <h3>Mobile auto layout</h3>
                        <p>We have auto mobile layout that help
                            you faster UI and wireframe design.</p>
                        <a href="javascript:void(0)">Learn More <i class="lni lni-arrow-right"></i></a>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <!-- Start Single Service -->
                    <div class="single-service two">
                        <div class="service-icon">
                            <i class="lni lni-heart"></i>
                        </div>
                        <h3>2500+ Free icons</h3>
                        <p>2500+ free vector svg icon for mobile &
                            desktop, every icon resized 24*24.</p>
                        <a href="javascript:void(0)">Learn More <i class="lni lni-arrow-right"></i></a>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12  wow fadeInUp" data-wow-delay=".8s">
                    <!-- Start Single Service -->
                    <div class="single-service three">
                        <div class="service-icon">
                            <i class="lni lni-pointer-top"></i>
                        </div>
                        <h3>Easy to use components</h3>
                        <p>Hundreds of vector cards, arrows and elements for creating quick sitemaps.</p>
                        <a href="javascript:void(0)">Learn More <i class="lni lni-arrow-right"></i></a>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- /End Services Area -->

    <!-- Start Pricing Table Area -->
    <section id="pricing" class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">pricing</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Pricing & Plans</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <!-- Single Table -->
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Starter</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="price">
                                <h2 class="amount"><span class="currency">$</span>0<span class="duration">/mo</span>
                                </h2>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Start free trial</a>
                        </div>
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <!-- Table List -->
                            <ul class="table-list">
                                <li>Cras justo odio.</li>
                                <li>Dapibus ac facilisis in.</li>
                                <li>Morbi leo risus.</li>
                                <li>Excepteur sint occaecat velit.</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <!-- Single Table -->
                    <div class="single-table middle">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Exclusive</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="price">
                                <h2 class="amount"><span class="currency">$</span>99<span class="duration">/mo</span>
                                </h2>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <div class="button">
                            <a href="javascript:void(0)" class="btn btn-alt">Start free trial</a>
                        </div>
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <!-- Table List -->
                            <ul class="table-list">
                                <li>Cras justo odio.</li>
                                <li>Dapibus ac facilisis in.</li>
                                <li>Morbi leo risus.</li>
                                <li>Excepteur sint occaecat velit.</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".8s">
                    <!-- Single Table -->
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Premium</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="price">
                                <h2 class="amount"><span class="currency">$</span>150<span class="duration">/mo</span>
                                </h2>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Start free trial</a>
                        </div>
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <!-- Table List -->
                            <ul class="table-list">
                                <li>Cras justo odio.</li>
                                <li>Dapibus ac facilisis in.</li>
                                <li>Morbi leo risus.</li>
                                <li>Excepteur sint occaecat velit.</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Pricing Table Area -->

    <!-- Start Call Action Area -->
    <section class="call-action">
        <div class="container">
            <div class="inner-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="text">
                            <h2>You are using free<br> Lite version of Blink.</h2>
                            <p style="color: #fff;" class="mt-20">Please, purchase full version of the template to get
                                all pages,
                                <br>features and commercial license.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-12">
                        <div class="button">
                            <a href="#" class="btn">Purchase Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call Action Area -->
@endsection
