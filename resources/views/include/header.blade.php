<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Blink - Startup & SaaS Bootstrap 5 Template.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user\img\hero\logo.png') }}" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('user\css\bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user\css\LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('user\css\animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('user\css\tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('user\css\glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user\css\main.css') }}" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('user\img\logo\logo.png') }}" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
								<!-- Hire us -->
								<li class="nav-item">
									<a class="dd-menu collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#services-menu"
										aria-controls="services-menu" aria-expanded="false" aria-label="Toggle navigation">Hire us</a>
									<div class="sub-menu collapse custom-dropdown" id="services-menu" style="width:700px">
										<div class="row">
											<!-- Column 1 -->
											<div class="col-md-2">
												<h6>Graphic Designers</h6>
												<ul class="list-unstyled">
													<li><a href="#">UI/UX Designer</a></li>
													<li><a href="#">Web Designer</a></li>
												</ul>
											</div>
											<!-- Column 2 -->
											<div class="col-md-2">
												<h6>Frontend Developers</h6>
												<ul class="list-unstyled">
													<li><a href="#">React.js Developer</a></li>
													<li><a href="#">Angular Developer</a></li>
													<li><a href="#">Vue.js Developer</a></li>
												</ul>
											</div>
											<!-- Column 3 -->
											<div class="col-md-2">
												<h6>Backend Developers</h6>
												<ul class="list-unstyled">
													<li><a href="#">PHP Developer</a></li>
													<li><a href="#">Laravel Developer</a></li>
													<li><a href="#">.NET Developer</a></li>
													<li><a href="#">Node.js Developer</a></li>
													<li><a href="#">Python Developer</a></li>
												</ul>
											</div>
											<!-- Column 4 -->
											<div class="col-md-2">
												<h6>Mobile Developers</h6>
												<ul class="list-unstyled">
													<li><a href="#">iOS Developer</a></li>
													<li><a href="#">Android Developer</a></li>
													<li><a href="#">Ionic Developer</a></li>
													<li><a href="#">Flutter Developer</a></li>
													<li><a href="#">React Native Developer</a></li>
												</ul>
											</div>
											<!-- Column 5 -->
											<div class="col-md-2">
												<h6>CMS Developers</h6>
												<ul class="list-unstyled">
													<li><a href="#">WordPress Developer</a></li>
													<li><a href="#">Shopify Developer</a></li>
													<li><a href="#">Magento Developer</a></li>
													<li><a href="#">Drupal Developer</a></li>
												</ul>
											</div>
										</div>
									</div>
								</li>
                                <!-- Services-->
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#services-menu"
                                            aria-controls="services-menu" aria-expanded="false" aria-label="Toggle navigation">Services</a>
                                        <div class="sub-menu collapse custom-dropdown" id="services-menu" style="width:700px">
                                            <div class="row">
                                                <!-- Column 1 -->
                                                <div class="col-md-2">
                                                    <h6>Hire Services</h6>
                                                    <ul class="list-unstyled">
                                                        <li><a href="#">Hire Dedicated Developers</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Column 2 -->
                                                <div class="col-md-2">
                                                    <h6>Development Services</h6>
                                                    <ul class="list-unstyled">
                                                        <li><a href="#">Graphic Designers</a></li>
                                                        <li><a href="#">Web Application Development</a></li>
                                                        <li><a href="#">Web Portal Development Services</a></li>
                                                        <li><a href="#">Mobile App Development</a></li>
                                                        <li><a href="#">Front End Development</a></li>
                                                        <li><a href="#">Enterprise Software Development</a></li>
                                                        <li><a href="#">Offshore Software Development</a></li>
                                                        <li><a href="#">AI Software Development</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Column 3 -->
                                                <div class="col-md-2">
                                                    <h6>Support Services</h6>
                                                    <ul class="list-unstyled">
                                                        <li><a href="#">Digital Marketing</a></li>
                                                        <li><a href="#">Virtual Assistant</a></li>
                                                        <li><a href="#">Data Analytics & BI</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Column 4 -->
                                                <div class="col-md-2">
                                                    <h6>Testing Services</h6>
                                                    <ul class="list-unstyled">
                                                        <li><a href="#">QA & Software Testing Services</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Column 5 -->
                                                <div class="col-md-2">
                                                    <h6>Devops Services</h6>
                                                    <ul class="list-unstyled">
                                                        <li><a href="#">DevOps Consulting Services</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Resource</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item"><a href="about-us.html">Case Studies</a>
                                                <ul class="sub-menu collapse" id="submenu-1-2">
                                                    <li class="nav-item"><a href="about-us.html">Zero Trust</a></li>
                                                    <li class="nav-item"><a href="pricing.html">Mustard</a></li>
                                                    <li class="nav-item"><a href="services.html">ICam</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item"><a href="pricing.html">Testimonial</a></li>
                                            <li class="nav-item"><a href="services.html">Blog</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="contact.html" aria-label="Toggle navigation">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.html" aria-label="Toggle navigation">Career</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.html" aria-label="Toggle navigation">Contact us</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button">
                                <a href="signin.html" class="signin">Sign In</a>
                                <a href="signup.html" class="signup">Sign Up</a>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->