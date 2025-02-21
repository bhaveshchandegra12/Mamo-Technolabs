@extends('layout.app')
@section('main')
		<!-- Navbar Start -->
        <div class="container-fluid position-relative p-0">        
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Hire Laravel developer</h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Hire Laravel developer</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="container py-5">
                    <!-- First Section: Image on the Right -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6">
                            <h1>Hire Laravel Developers with MaMo Technolabs</h1>
                            <p>
                                Hiring top class Laravel experts would unlock your entire web application
                                from MaMo Technolabs.
                                Our dedicated team is very good at developing high-performing, scalable, and secure web
                                solutions tailored to meet your business needs.
                            </p>
                            <h3>Why Choose MaMo Technolabs for Laravel Development?</h3>
                            <ul>
                                <li><strong>Expert Developers:</strong> Our developers are experts with Laravel:
                                rich experience in building custom web applications in line with your business
                                goals.</li>
                                <li><strong>Low-cost solutions:</strong>Available with competitive pricing models that
                                cater to various budgets without sacrificing quality.</li>
                                <li><strong>Flexible Hiring Models:</strong> Choose from full-time, part-time, or
                                project-based models according to your project needs.</li>
                                <li><strong>Proven track record:</strong> We have successfully delivered numerous
                                Laravel projects across various industries with timely delivery and customer
                                satisfaction.</li>
                                <li><strong>Seamless Communication:</strong> We maintain clear and consistent
                                communication, providing regular updates and being responsive to your queries.</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/laravel-developer-1.png') }}"
                                alt="Laravel Development" loading="lazy">
                        </div>
                    </div>

                    <!-- Second Section: Image on the Left -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6 order-md-2">
                            <h3>Our Laravel Development Services</h3>
                            <ul>
                                <li><strong>Custom Laravel Web Development:</strong> Get bespoke web applications built
                                from scratch that are in line with your business goals.</li>
                                <li><strong>Laravel Enterprise Solutions:</strong> Scale your enterprise with powerful,
                                Secure, scalable, and stable Laravel applications designed for complex business operations.
                                </li>
                                <li><strong>Laravel eCommerce Development:</strong> Build feature-rich and scalable
                                eCommerce platforms that are user-friendly and have safe payment gateways.</li>
                                <li><strong>API Development & Integration:</strong> We build and integrate proprietary APIs
                                that allow your web applications to communicate with other systems with ease.
                                </li>
                                <li><strong>Laravel Support & Maintenance:</strong> Make sure your applications work
                                smoothly with our ongoing support, including bug fixes, updates, and performance
                                optimizations.</li>
                            </ul>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/laravel-developer-2.png') }}"
                                alt="Laravel Development Services" loading="lazy">
                        </div>
                    </div>

                    <!-- Third Section: No Image -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>How to Get Started</h3>
                            <p>
                                Getting started with MaMo Technolabs is easy. Contact us to discuss your project.
                                requirements,
                                and we will present you with a customized proposal. Our team is prepared to help you recruit the
                                right Laravel developers to bring your project to life.
                            </p>
                            <p>
                                <strong>Contact Us Today</strong><br>
                                Let's work together to build exceptional Laravel solutions for your business. Reach out
                                to us at [Your Contact Information]
                                or fill out our online form to get started.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Hiring Form Start -->
              
                <!-- Hiring Form End -->
            </div>
        </div>
    </div>

    <!-- Blog End -->

@endsection