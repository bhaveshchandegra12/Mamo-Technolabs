@extends('layout.app')
@section('main')

 <!-- Navbar Start -->
 <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Hire Web Designer</h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Hire Web Designer</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="container py-5">
                    <!-- First Section: Image on the Right -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6">
                            <h1>Hire Web Designers with MaMo Technolabs</h1>
                            <p>
                                At MaMo Technolabs, we provide you with the best web design services according to your business needs.
                                needs. Our professional web designers are experts in developing visually attractive, user-friendly, and
                                Responsive websites that create lasting impressions and generate conversions.
                            </p>
                            <h3>Why Choose Our Web Designers?</h3>
                            <ul>
                                <li><strong>Artistic and Professional Designs:</strong> Our designers create innovative and
                                professional websites that align with your brand and captivate your audience.</li>
                                <li><strong>Tailored solutions:</strong>  We come up with designs tailored to your specific
                                Business
                                goals and user preferences, that the website developed will be remarkable.</li>
                                <li><strong> Responsive and Optimized Designs:</strong> Fully responsive web designs.
                                and optimized for all devices, and provides a smooth experience for the user.</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/webdesign-1.png') }}" alt="Web Design"
                                loading="lazy">
                        </div>
                    </div>      

                    <!-- Second Section: Image on the Left -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6 order-md-2">
                            <h3>Our Web Design Services</h3>
                            <ul>
                                <li><strong>Custom Website Design:</strong> Personalized designs to reflect your brand's
                                identity and appeal to your target audience.</li>
                                <li><strong>Responsive Web Design:</strong> Ensure that your website looks wonderful and works.
                                seamlessly on all devices, from desktops to smartphones.</li>
                                <li><strong>Landing Page Design:</strong> Creating conversion-focused landing pages to drive
                                effectively leads and sells.</li>
                                <li><strong>Redesign and Revamp:</strong> Update and modernize existing websites to meet
                                Current trends and user expectations.</li>
                                <li><strong>SEO-Friendly Design:</strong> Designing websites that are not only visually
                                appealing but also optimized for search engines to improve your online visibility.</li>
                            </ul>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/web-portal-1.png') }}"
                                alt="Web Design Services" loading="lazy">
                        </div>
                    </div>

                    <!-- Third Section: No Image -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Why MaMo Technolabs?</h3>
                            <ul>
                                <li><strong>Experienced Team:</strong> Our team of web designers brings years of experience
                                into make visually striking, highly functional web sites.</li>
                                <li><strong>Client-Centric Approach:</strong> We collaborate closely with you to ensure the
                                The final design aligns perfectly with your vision and business goals.</li>
                                <li><strong>Cost-Effective Solutions:</strong> Our pricing is competitive, and we provide
                                flexible engagement models to suit your budget.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Fourth Section: Call to Action -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Hire Web Designers Now</h3>
                            <p>
                                Partner with MaMo Technolabs to hire expert web designers who can bring your vision to life.
                                Whether you want a new website or redesign an existing one, our team is here to help.
                                you create a web presence that stands out. Contact us today to get started on your web
                                design travel.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Hiring Form Start -->
                
                <!-- Hiring Form End -->
            </div>
        </div>
    </div>
@endsection
 