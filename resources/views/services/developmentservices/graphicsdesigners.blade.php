@extends('layout.app')
@section('main')
<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Graphic Designing Services
                    </h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Graphic Designing Services
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Blog Start -->
    <!-- Graphic Designing Services Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="container py-5">
                    <!-- Graphic Design Services Section -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6">
                            <h2>Graphic Design Services</h2>
                            <p>At MaMo Technolabs, we create visually appealing and impactful designs that bring your ideas to
                                life. Our graphic designers are talented in creating designs that are eye-catching, interactive, and memorable.
                                impressions.</p>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/graphic-1.png') }}"
                                alt="Graphic Design Services" loading="lazy">
                        </div>
                    </div>

                    <!-- Our Graphic Design Services Section -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6 order-md-2">
                            <h3>Our Graphic Design Services</h3>
                            <p>We offer a wide range of graphic design services to cater to your branding and creative
                                Whether it's enhancing your brand identity or designing standout marketing materials,
                                we’ve got you covered.</p>
                            <ul>
                                <li><strong>Logo Designing:</strong> Developing unique and memorable logos that define your brand
                                    identity.</li>
                                <li><strong>Brand Identity:</strong> Creating a consistent visual identity, including color
                                    Schemes, fonts, and style guides.</li>
                                <li><strong>Marketing Materials:</strong> Designing brochures, flyers, and banners to
                                    elevate your campaigns.</li>
                                <li><strong>Web Graphics:</strong> Design attractive graphics for a website and
                                    digital platforms.</li>
                                <li><strong>Social Media Graphics:</strong> Designing eye-catching visuals to enhance your
                                    online presence.</li>
                                <li><strong>Illustrations:</strong> Custom illustrations tailored to your creative needs.
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/graphic-2.png') }}"
                                alt="Graphic Design Examples" loading="lazy">
                        </div>
                    </div>

                    <!-- Why Choose MaMo Technolabs Section -->
                    <div class="row mb-5">
                        {{-- <div class="col-md-6">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/why-choose-us.jpg') }}"
                                alt="Why Choose Us" loading="lazy">
                        </div> --}}
                        <div class="col-md-12">
                            <h3>Why Choose MaMo Technolabs for Graphic Design?</h3>
                            <p>Our expertise and attention to detail set us apart. Here’s why businesses trust us with their
                                graphic design needs:</p>
                            <ul>
                                <li><strong>Experienced designers:</strong> Our team brings creativity and expertise to
                                    every project.</li>
                                <li><strong>Customized solutions:</strong> Our designs are tailor-made to your brand's
                                    vision.</li>
                                <li><strong>Creative Excellence:</strong> We deliver designs that not only look great but
                                    also resonate well with your listeners.
                                <li><strong>On-time delivery:</strong> We respect your time and assure you of delivering all
                                    projects.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Transform Your Brand with Design Section -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-12">
                            <h3>Transform Your Brand with Design</h3>
                            <p>Graphic design is the backbone of proper branding. In MaMo Technolabs, your brand
                                gets the creative edge to stand out. Let's make your ideas visually unforgettable.</p>
                        </div>
                    </div>

                    <!-- Get in Touch Section -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Get in Touch</h3>
                            <p>Ready to elevate your brand with exceptional designs? <strong>Contact MaMo
                                Technolabs</strong> Today to talk through your graphic design needs. Let's create something
                                remarkable together!</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ url('/contact-us') }}" class="btn btn-primary contact-us-btn">Contact Us</a>
        </div>
    </div>
    <!-- Graphic Designing Services End -->
    <!-- Blog End -->
		
@endsection