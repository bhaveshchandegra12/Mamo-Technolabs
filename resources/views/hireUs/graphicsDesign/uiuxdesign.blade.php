@extends('layout.app')
@section('main')
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
                <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Hire UI/UX Designer</h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Hire UI/UX Designer</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
            <div class="row g-5">
                <div class="container py-5">
                    <!-- First Section: Image on the Right -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6">
                            <h1 class="display-5 mb-4 text-primary">Hire UI/UX Designers with <span class="text-dark">MaMo Technolabs</span></h1>
                            <p class="lead mb-4">
                                Elevate your brand and improve user experiences with visually appealing and user-friendly interfaces crafted by MaMo Technolabs. We combine creativity and strategy to deliver designs that align with your business goals.
                            </p>
                            <h3 class="mb-4 text-primary">Why Choose Our UI/UX Designers?</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <strong class="text-dark">UI/UX Design Expertise:</strong> Our designers specialize in creating intuitive interfaces and seamless user journeys tailored to your audience.
                                </li>
                                <li class="mb-3">
                                    <strong class="text-dark">Personalized Design Solutions:</strong> We create unique designs that reflect your brand identity and address specific business needs.
                                </li>
                                <li class="mb-3">
                                    <strong class="text-dark">Usability and Aesthetics:</strong> We balance functionality and aesthetics to deliver designs that are both beautiful and practical.
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid w-100 rounded shadow-lg" src="{{ asset('user/img/hireus/graphics/uiux-1.png') }}" alt="UI/UX Design" loading="lazy">
                        </div>
                    </div>

                    <!-- Second Section: Image on the Left -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6 order-md-2">
                            <h3 class="mb-4 text-primary">Our UI/UX Design Services</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <strong class="text-dark">Custom UI/UX Design:</strong> Tailored solutions that integrate modern trends to create visually appealing and functional designs.
                                </li>
                                <li class="mb-3">
                                    <strong class="text-dark">Wireframing and Prototyping:</strong> Detailed wireframes and prototypes to visualize and refine designs before implementation.
                                </li>
                                <li class="mb-3">
                                    <strong class="text-dark">Responsive and Adaptive Design:</strong> Designs that work seamlessly across all devices and platforms for a consistent user experience.
                                </li>
                                <li class="mb-3">
                                    <strong class="text-dark">User Research and Analysis:</strong> In-depth analysis of user behavior to create designs that resonate with your audience.
                                </li>
                                <li class="mb-3">
                                    <strong class="text-dark">Design Optimization:</strong> Continuous improvement based on feedback and performance metrics for long-term success.
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <img class="img-fluid w-100 rounded shadow-lg" src="{{ asset('user/img/hireus/graphics/uiux-2.png') }}" alt="UI/UX Design Services" loading="lazy">
                        </div>
                    </div>

                    <!-- Third Section: No Image -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3 class="mb-4 text-primary">Why MaMo Technolabs?</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <strong class="text-dark">Creative Team:</strong> Our designers bring innovation and creativity to every project, ensuring your designs stand out.
                                </li>
                                <li class="mb-3">
                                    <strong class="text-dark">Collaborative Approach:</strong> We work closely with you, incorporating your feedback at every stage to exceed expectations.
                                </li>
                                <li class="mb-3">
                                    <strong class="text-dark">Timely Delivery:</strong> Our efficient processes ensure your project is delivered on time without compromising quality.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Fourth Section: Call to Action -->
                    <div class="row mb-0 text-center"> <!-- Changed mb-5 to mb-0 to remove bottom margin -->
                        <div class="col-md-12">
                            <h3 class="mb-4 text-primary">Hire UI/UX Designers Now</h3>
                            <p class="lead">
                                Partner with MaMo Technolabs to access experienced UI/UX designers who will transform your digital presence. Whether you need a fresh design or want to improve an existing one, we’re here to help. Contact us today to bring your design ideas to life and create exceptional user experiences.
                            </p>
                            <a href="#contact" class="btn btn-primary btn-lg px-5 py-3">Contact Us</a>
                        </div>
                    </div>

                    // Contact Us Form
                    
                    Hire Contact Form
                    One of our Business Consultants will get back to you in a few hours

                    Your Name    Your Email
                    Subject
                    Message

                    Send Message (botton)
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection