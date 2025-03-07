@extends('layout.app')
@section('main')
 <!-- Start Breadcrumbs -->
 <div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Contact Us</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Contact Area -->
<div class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="contact-form">
                    <form class="form" method="post" action="assets/mail/mail.php">
                        <div class="form-group">
                            <label>Your name</label>
                            <input name="name"  type="text" placeholder="James Cameron" required="required">
                        </div>
                        <div class="form-group">
                            <label>Your Subject</label>
                            <input name="subject"  type="text" placeholder="Type your subject" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input name="email"  type="email" placeholder="james@email.com" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea placeholder="Write your message here" name="message" id="message-area"
                                class="form-control"></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" class="btn ">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="contact-widget-wrapper">
                    <div class="main-title">
                        <h2>We are always open<br> for help you.
                        </h2>
                        <p>There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered.</p>
                    </div>
                    <div class="contact-widget-block">
                        <h3 class="title">Call us</h3>
                        <p>+1-492-4918-395</p>
                        <p>+14-394-409-591</p>
                    </div>
                    <div class="contact-widget-block">
                        <h3 class="title">Email us</h3>
                        <p>info@mail.com</p>
                        <p>support@mail.com</p>
                    </div>
                    <div class="contact-widget-block">
                        <h3 class="title">Our Address</h3>
                        <p>34 Madison Street,</p>
                        <p>NY, USA 10005</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->


 {{-- <!-- Navbar Start -->
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
                    --}}
<a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
@endsection