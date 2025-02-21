@extends('layout.app')
@section('main')
	 <!-- Navbar Start -->
     <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Front End Development Services</h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Front End Development Services</a>
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

                    <!-- First Section: Front-End Development Services -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6">
                            <h1>Front-End Development Services</h1>
                            <p>
                                At MaMo Technolabs, we offer top-notch front-end development services, so your
                                website or
                                Web application stands out for its intuitive and visually appealing interface. Our expert
                                Developers focus on writing seamless user experience that attracts users and retains users,
                                driving
                                engagement and satisfaction.
                            </p>
                            
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/front-end-01.png') }}"
                                alt="Front-End Development" loading="lazy">
                        </div>
                    </div>

                    <!-- Second Section: Why Choose Our Front-End Development Services? -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6">
                            <h3>Why Choose Our Front-End Development Services?</h3>
                            <ul>
                                <li><strong>Expert Developers:</strong> Our developers are great at HTML5, CSS3, JavaScript, and
                                    frameworks like Angular, React, and Vue.js, ensuring your website is functional and
                                    visually
                                    engaging.
                                </li>
                                <li><strong>Responsive Design:</strong> We design giving a consistent user
                                    experience
                                    Across all devices, accessibility and user engagement.
                                </li>
                                <li><strong>User-Centric Approach:</strong> We design intuitive interfaces that ensure easy
                                    Navigation and Interaction.
                                </li>
                                <li><strong>Performance Optimization:</strong>Our focus on performance ensures fast load
                                    times
                                    and smooth transitions, thereby improving the user experience.
                                </li>
                                <li><strong>Cross-Browser Compatibility:</strong> We ensure your website works seamlessly
                                    across
                                    all browsers.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Third Section: Front-End Development Process -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Our Front-End Development Process</h3>
                            <ol>
                                <li><strong>Discovery and Planning:</strong> We begin by looking at your vision and
                                    setting goals
                                    to develop a comprehensive roadmap.
                                </li>
                                <li><strong>Design and Prototyping:</strong> Our designers create an intuitive, engaging
                                    design
                                    followed by a prototype to bring the ideas to life.
                                </li>
                                <li><strong>Development:</strong> Our developers implement the design with best practices,
                                    ensuring
                                    compatibility and performance.
                                </li>
                                <li><strong>Testing and Quality Assurance:</strong> Testing is done to ensure reliability and
                                    smooth user experience.
                                </li>
                                <li><strong>Launch and Support:</strong> We offer support at launch and provide
                                    post-launch
                                    maintenance for continuous success.
                                </li>
                            </ol>
                        </div>
                    </div>

                    <!-- Call to Action Section -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Ready to Enhance Your Web Presence?</h3>
                            <p>
                                Partner with MaMo Technolabs for quality front-end development services.
                                <strong>Contact us today</strong> and let us make your project come to life.
                            </p>
                        </div>
                    </div>

                    <!-- Contact Button -->
                    <div class="text-center">
                        <a href="{{ url('/contact-us') }}" class="btn btn-primary contact-us-btn">Contact Us</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
	
@endsection