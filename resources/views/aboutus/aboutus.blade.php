@extends('layout.app')
@section('main')


    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">About Us</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Process Area -->
    <section class="process section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <video src="{{ asset('img/mamo-technolabs-llp.mp4') }}" alt="#">
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h4>About Us</h4>
                        <h2>A Team of<br> Experienced Professionals</h2>
                        <p>MaMo Technolabs LLP is a leading provider of offshore software development services,
                            specializing in SaaS products, mobile solutions, and PaaS implementations. We prioritize
                            compliance, scalability, and protection of intellectual property, providing an expert team for
                            Software development, testing, support, and maintenance. With an experience of over a decade;
                            we deliver top talent, managed services, and consulting, ensuring optimal performance for
                            modern software and QA teams.</p>
                        <p> Our offerings are designed for organizations of all sizes, optimizing investments throughout
                            the software development lifecycle. Executives can trust our development process, reducing
                            micromanagement and allowing focus on strategic decisions.</p>
                        {{-- <div class="list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="single-list">
                                        <div class="list-icon">
                                            <i class="lni lni-users"></i>
                                        </div>
                                        <h4>Why Choose MaMo Technolabs LLP?</h4>
                                        <p>Quis autem vel eum reprehenderit</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="single-list">
                                        <div class="list-icon">
                                            <i class="lni lni-bolt-alt"></i>
                                        </div>
                                        <h4>Finalize & Publish</h4>
                                        <p>Quis autem vel eum reprehenderit</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Process Area -->

    <!-- Start About Area -->
    <section class="about section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h4>Why Choose MaMo Technolabs LLP?</h4>
                        
                            <ul>
                                <li>Proven management practices and thought leadership</li>
                                <li>Quick delivery with an employee turnover rate of 7%</li>
                                <li>Extensive operating history with satisfied clients</li>
                                <li>Effective recruitment and vetting processes</li>
                                <li>Solutions that are suited to client specifications</li>
                                <li>Professional learning and training on an ongoing basis for our workforce</li>
                                <li>Comprehensive code audits</li>
                            </ul>
                            <p>
                                While we excel in various industries, we have notable expertise in:
                            </p>

                            
                            <ul>
                                <li>Consumer Products</li>
                                <li>Manufacturing</li>
                                <li>Cyber Security Services</li>
                                <li>Public Safety</li>
                                <li>SaaS</li>
                            </ul>

                            <h3>Our Services Include:</h3>
                        <ul>
                            <li>Flexible Software Solutions</li>
                            <li>Increased Output & Cost Efficiency</li>
                            <li>Skilled Agile Engineering Teams</li>
                            <li>High-Quality Code Standards</li>
                            <li>Industry-Compliant Solutions</li>
                            <li>Continuous Client Satisfaction</li>
                        </ul>
                        
                        {{-- <ul class="why-choose-list">
                            <li>
                                <span class="number">1</span>
                                <div class="list-content">
                                    <h3>Fast Working Process</h3>
                                    <p>Corporate headquarters is the part of a corporate
                                        structure that deals with important</p>
                                </div>
                            </li>
                            <li>
                                <span class="number">2</span>
                                <div class="list-content">
                                    <h3>Dedicated Team</h3>
                                    <p>Corporate headquarters is the part of a corporate
                                        structure that deals with important</p>
                                </div>
                            </li>
                            <li>
                                <span class="number">2</span>
                                <div class="list-content">
                                    <h3>24/7 Hours Support</h3>
                                    <p>Corporate headquarters is the part of a corporate
                                        structure that deals with important</p>
                                </div>
                            </li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <img src="{{ asset('img/about.png') }}" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Achievement App -->
    {{-- <section class="achievement section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Our achievement </h2>
                        <p>There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-achievement align-center wow fadeInUp" data-wow-delay=".2s">
                                <h3 class="counter">
                                    <svg class="shape" width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M47.1868 15.7745C42.7476 11.5909 36.9073 9.25816 30.9507 9.28958C24.9941 9.32099 19.4092 11.714 15.4245 15.942C11.4399 20.1701 9.38191 25.887 9.70335 31.835C10.0248 37.783 12.6993 43.4748 17.1386 47.6585L32.1627 31.7165L47.1868 15.7745Z"
                                            fill="#FF4E79" />
                                    </svg>
                                    <span id="secondo1" class="countup" cup-end="100">100</span>%
                                </h3>
                                <p>Satisfaction</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-achievement align-center wow fadeInUp" data-wow-delay=".4s">
                                <h3 class="counter">
                                    <svg class="shape" width="35" height="38" viewBox="0 0 35 38" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M34.2973 10.7613C30.436 7.90726 25.6931 6.5768 21.1119 7.06265C16.5308 7.54849 12.4866 9.81085 9.86915 13.352C7.25169 16.8932 6.27532 21.4231 7.15483 25.9452C8.03433 30.4673 10.6977 34.6112 14.559 37.4653L24.4281 24.1133L34.2973 10.7613Z"
                                            fill="#FE8432" fill-opacity="0.83" />
                                    </svg>
                                    <span id="secondo2" class="countup" cup-end="120">120</span>K
                                </h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-achievement align-center wow fadeInUp" data-wow-delay=".6s">
                                <h3 class="counter">
                                    <svg class="shape" width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M47.1868 15.7745C42.7476 11.5909 36.9073 9.25816 30.9507 9.28958C24.9941 9.32099 19.4092 11.714 15.4245 15.942C11.4399 20.1701 9.38191 25.887 9.70335 31.835C10.0248 37.783 12.6993 43.4748 17.1386 47.6585L32.1627 31.7165L47.1868 15.7745Z"
                                            fill="#B998FF" />
                                    </svg>
                                    <span id="secondo3" class="countup" cup-end="500">500</span>+
                                </h3>
                                <p>Projects Done</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Achievement App -->

    <!-- Start Testimonials Area -->
    {{-- <section class="testimonials style2 section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Customer Reviews</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Testimonials</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row testimonial-slider">
                <div class="col-lg-6 col-12 ">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <img class="shape1" src="assets/images/testimonial/shape-1.svg" alt="#">
                        <img class="shape2" src="assets/images/testimonial/shape-2.svg" alt="#">
                        <div class="inner-content">
                            <div class="qote-icon">
                                <i class="lni lni-quotation"></i>
                            </div>
                            <div class="text">
                                <h4>On the other hand denoun with righteous
                                    and disliks men who are beguiled demorae
                                    momentc blinded by desire that can</h4>
                            </div>
                            <div class="author">
                                <img src="assets/images/testimonial/testi-1.png" alt="#">
                                <h4 class="name">Somalia D Silva
                                    <span class="deg">Business Manager</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-6 col-12 ">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <img class="shape1" src="assets/images/testimonial/shape-1.svg" alt="#">
                        <img class="shape2" src="assets/images/testimonial/shape-2.svg" alt="#">
                        <div class="inner-content">
                            <div class="qote-icon">
                                <i class="lni lni-quotation"></i>
                            </div>
                            <div class="text">
                                <h4>On the other hand denoun with righteous
                                    and disliks men who are beguiled demorae
                                    momentc blinded by desire that can</h4>
                            </div>
                            <div class="author">
                                <img src="assets/images/testimonial/testi-2.png" alt="#">
                                <h4 class="name">David Warner
                                    <span class="deg">Web Developer</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-6 col-12 ">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <img class="shape1" src="assets/images/testimonial/shape-1.svg" alt="#">
                        <img class="shape2" src="assets/images/testimonial/shape-2.svg" alt="#">
                        <div class="inner-content">
                            <div class="qote-icon">
                                <i class="lni lni-quotation"></i>
                            </div>
                            <div class="text">
                                <h4>On the other hand denoun with righteous
                                    and disliks men who are beguiled demorae
                                    momentc blinded by desire that can</h4>
                            </div>
                            <div class="author">
                                <img src="assets/images/testimonial/testi-3.png" alt="#">
                                <h4 class="name">Jems Gilario
                                    <span class="deg">Graphics Designer</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-6 col-12 ">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <img class="shape1" src="assets/images/testimonial/shape-1.svg" alt="#">
                        <img class="shape2" src="assets/images/testimonial/shape-2.svg" alt="#">
                        <div class="inner-content">
                            <div class="qote-icon">
                                <i class="lni lni-quotation"></i>
                            </div>
                            <div class="text">
                                <h4>On the other hand denoun with righteous
                                    and disliks men who are beguiled demorae
                                    momentc blinded by desire that can</h4>
                            </div>
                            <div class="author">
                                <img src="assets/images/testimonial/testi-2.png" alt="#">
                                <h4 class="name">David Warner
                                    <span class="deg">Web Developer</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
                <div class="col-lg-6 col-12 ">
                    <!-- Start Single Testimonial -->
                    <div class="single-testimonial">
                        <img class="shape1" src="assets/images/testimonial/shape-1.svg" alt="#">
                        <img class="shape2" src="assets/images/testimonial/shape-2.svg" alt="#">
                        <div class="inner-content">
                            <div class="qote-icon">
                                <i class="lni lni-quotation"></i>
                            </div>
                            <div class="text">
                                <h4>On the other hand denoun with righteous
                                    and disliks men who are beguiled demorae
                                    momentc blinded by desire that can</h4>
                            </div>
                            <div class="author">
                                <img src="assets/images/testimonial/testi-3.png" alt="#">
                                <h4 class="name">Jems Gilario
                                    <span class="deg">Graphics Designer</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial -->
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Testimonial Area -->

    <!-- Start Team Area -->
    <section class="team section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Team Members</h3>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Professional Stuffs Ready to Help Your Business.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Team -->
                    <div class="single-team">
                        <div class="team-image">
                            <img src="img/team-1.jpg" alt="#">
                        </div>
                        <div class="content">
                            <h4>Full Name
                                <span>Designation</span>
                            </h4>
                            
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Team -->
                    <div class="single-team">
                        <div class="team-image">
                            <img src="img/team-2.jpg" alt="#">
                        </div>
                        <div class="content">
                            <h4>Full Name
                                <span>Designation</span>
                            </h4>
                            
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Team -->
                    <div class="single-team">
                        <div class="team-image">
                            <img src="img/team-3.jpg" alt="#">
                        </div>
                        <div class="content">
                            <h4>Full Name
                                <span>Designation</span>
                            </h4>
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Team Area -->

    {{-- <!-- Start Clients Logo Area -->
    <div class="client-logo">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-12 text-center">
                    <div class="single-logo">
                        <img src="assets/images/client-logo/graygrids-logo.svg" alt="#">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 text-center">
                    <div class="single-logo">
                        <img src="assets/images/client-logo/lineicons-logo.svg" alt="#">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 text-center">
                    <div class="single-logo">
                        <img src="assets/images/client-logo/pagebulb-logo.svg" alt="#">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 text-center">
                    <div class="single-logo">
                        <img src="assets/images/client-logo/uideck-logo.svg" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients Logo Area --> --}}



    <!-- ========================= scroll-top ========================= -->
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
    <script>
        //========= testimonial 
        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 1,
                },
                992: {
                    items: 1,
                },
                1170: {
                    items: 2,
                }
            }
        });

        //====== counter up 
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();
    </script>
</body>

</html> 
@endsection