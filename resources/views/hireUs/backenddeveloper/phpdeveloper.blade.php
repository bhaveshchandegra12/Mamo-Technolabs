@extends('layout.app')
@section('main')
<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Hire PHP developer</h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Hire PHP developer</a>
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
                            <h1>Hire PHP Developers with MaMo Technolabs</h1>
                            <p>
                                At MaMo Technolabs, we offer top-notch PHP development services tailored to satisfy your
                                enterprise wants.
                                Our team of experienced PHP developers is at your service to help build robust, scalable,
                                And protected net applications
                                that pressure success and increase your business.
                            </p>
                            <h3>Why Choose MaMo Technolabs for PHP Development?</h3>
                            <ul>
                                <li><strong>Expert PHP Developers:</strong> Our team comprises expert PHP developers
                                who are well versed in the latest PHP frameworks and technologies.</li>
                                <li><strong>Tailored Solutions:</strong> We recognize that every business has unique
                                requirements.</li>
                                <li><strong>Latest Technologies:</strong> Our developers are experienced in
                                frameworks like Laravel, Symfony, and CodeIgniter.
                                On time delivery as we have an established development process to
                                ensure timely delivery of your project</li>
                                <li><strong>Cost-Effective Solutions:</strong> Competitive pricing without compromise
                                on quality.</li>
                                <li><strong>Ongoing Support:</strong> We offer ongoing support and maintenance
                                post-project delivery.</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/php-developer-1.png') }}"
                                alt="PHP Development" loading="lazy">
                        </div>
                    </div>

                    <!-- Second Section: Image on the Left -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6 order-md-2">
                            <h3>Our PHP Development Services</h3>
                            <ul>
                                <li><strong>Custom PHP Development:</strong>Tailor-made solutions to satisfy your
                                enterprise needs.</li>
                                <li><strong>PHP Framework Development:</strong>Framework such as Laravel
                                Symfony, and CodeIgniter.</li>
                                <li><strong>E-commerce Solutions:</strong>Developing secure e-commerce solutions.
                                </li>
                                <li><strong>CMS Development:</strong>Custom Content Management Systems.</li>
                                <li><strong>API Integration:</strong> Seamless integration of third-party APIs.</li>
                                <li><strong>Maintenance and Support:</strong> Ongoing support for smooth operation.</li>
                            </ul>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/php-developer-2.png') }}"
                                alt="PHP Development Services" loading="lazy">
                        </div>
                    </div>

                    <!-- Third Section: No Image -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>How to Get Started</h3>
                            <p>
                                Getting started with MaMo Technolabs is very easy. Reach us to talk over your
                                project requirements
                                and we will provide you with a customized proposal. Our team is prepared to help you recruit the
                                right PHP developers
                                to bring your project to life.
                            </p>
                            <p>
                                <strong>Reach Out To Us Now</strong>
                                Let's work together to build exceptional PHP solutions for your business. Reach out to
                                us at [Your Contact Information]
                                or fill out our online form to get started.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Comment Form Start -->
               
                <!-- Comment Form End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->
		
@endsection