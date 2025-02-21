@extends('layout.app')
@section('main')
 <!-- Navbar Start -->
 <div class="container-fluid position-relative p-0">

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="{{ url('/contact') }}" class="h5 text-white">Contact</a>
        </div>
    </div>
</div>
</div>
<!-- Navbar End -->

<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container py-5">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
        <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
    </div>
    <div class="row g-5 mb-5">
        <div class="col-lg-4">
            <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                    style="width: 60px; height: 60px;">
                    <i class="fa fa-phone-alt text-white"></i>
                </div>
                <div class="ps-4">
                    <h6 class="mb-2" style="font-size: 14px;">Call to ask any question</h6>
                    <!-- Reduced text size -->
                    <h5 class="text-primary mb-0" style="font-size: 16px;">
                        <a href="tel:+919325910095" style="text-decoration: none; color: inherit;">
                            +91 932 591 0095
                        </a>
                    </h5>
                    <!-- Reduced size for number -->
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                    style="width: 60px; height: 60px;">
                    <i class="fa fa-envelope-open text-white"></i>
                </div>
                <div class="ps-4">
                    <h6 class="mb-2" style="font-size: 14px;">Email to get free quote</h6>
                    <!-- Reduced text size -->
                    <h5 class="text-primary mb-0" style="font-size: 16px;">
                        <a href="mailto:info@mamotechnolabs.com" style="text-decoration: none; color: inherit;">
                            info@mamotechnolabs.com
                        </a>
                    </h5>

                    <!-- Reduced size for email -->
                </div>
            </div>
        </div>

        {{-- <div class="col-lg-4">
            <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                    style="width: 60px; height: 60px;">
                    <i class="fa fa-map-marker-alt text-white"></i>
                </div>
                <div class="ps-4">
                    <h6 class="mb-2" style="font-size: 14px;">Visit our office</h6> <!-- Reduced text size -->
                    <h5 class="text-primary mb-0" style="font-size: 16px;">Vadodara, Gujarat 390011</h5>
                   
@endsection