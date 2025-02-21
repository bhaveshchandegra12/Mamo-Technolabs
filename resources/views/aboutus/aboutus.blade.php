@extends('layout.app')
@section('main')
  <!-- Navbar Start -->
  <div class="container-fluid position-relative p-0">
        
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="#" class="h5 text-white">About</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <section id="about-us" class="about-us py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="video-container mb-4 position-relative video-frame"> <!-- Added video-frame class -->
                        <img src="{{ asset('img/thumbnail.png') }}" alt="About Us" class="img-fluid rounded"
                            id="video-thumbnail" style="cursor: pointer;">
                        <video id="video-player" class="d-none" controls playsinline width="100%" height="auto">
                            <source src="{{ asset('img/mamo-technolabs-llp.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <a href="javascript:void(0)" class="video-play-button" id="play-button">
                            <span class="video-play-icon">&#9658;</span> <!-- Play icon -->

                        </a>
                    </div>

                    <style>
                        .video-container {
                            position: relative;
                            display: inline-block;
                            max-width: 640px;
                            /* Set maximum width for the container */
                            width: 100%;
                            /* Responsive */
                            overflow: hidden;
                            /* Prevent overflow */
                            border-radius: 8px;
                            /* Optional: rounded corners */
                        }

                        .video-frame {
                            border: 5px solid #000000;
                            /* Frame color and width */
                            border-radius: 10px;
                            /* Optional: rounded corners for the frame */
                            padding: 5px;
                            /* Padding between the frame and video */
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                            /* Optional: shadow for depth */
                        }

                        .video-play-button {
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            display: inline-block;
                            width: 70px;
                            height: 70px;
                            background-color: rgba(0, 0, 0, 0.5);
                            /* Semi-transparent background */
                            border-radius: 50%;
                            text-align: center;
                            line-height: 70px;
                            color: white;
                            font-size: 24px;
                            text-decoration: none;
                        }

                        video {
                            width: 100%;
                            /* Responsive width */
                            height: auto;
                            /* Maintain aspect ratio */
                        }
                    </style>

                    <script>
                        const playButton = document.getElementById('play-button');
                        const videoPlayer = document.getElementById('video-player');
                        const videoThumbnail = document.getElementById('video-thumbnail');

                        playButton.addEventListener('click', () => {
                            videoThumbnail.classList.add('d-none'); // Hide thumbnail
                            playButton.classList.add('d-none'); // Hide play button
                            videoPlayer.classList.remove('d-none'); // Show video player
                            videoPlayer.play(); // Start playing the video
                        });

                        // Optional: Handle mobile events for better compatibility
                        videoPlayer.addEventListener('ended', () => {
                            videoThumbnail.classList.remove('d-none'); // Show thumbnail when video ends
                            playButton.classList.remove('d-none'); // Show play button when video ends
                            videoPlayer.classList.add('d-none'); // Hide video player when video ends
                        });
                    </script>



                </div>
                <div class="col-lg-6">

                    <h2 class="mb-3">ABOUT US</h2>
                    <h3>A Team of <span class="text-primary">Experienced Professionals</span></h3>
                    <div class="about-us">
                        {{-- <h2>MaMo Technolabs LLP</h2> --}}
                        <p>
                            MaMo Technolabs LLP is a leading provider of offshore software development services,
                            specializing in SaaS products, mobile solutions, and PaaS implementations. We prioritize
                            compliance, scalability, and protection of intellectual property, providing an expert team for
                            Software development, testing, support, and maintenance. With an experience of over a decade;
                            we deliver top talent, managed services, and consulting, ensuring optimal performance for
                            modern software and QA teams.
                        </p>

                        <p>
                            Our offerings are designed for organizations of all sizes, optimizing investments throughout
                            the software development lifecycle. Executives can trust our development process, reducing
                            micromanagement and allowing focus on strategic decisions.
                        </p>
                    </div>

                    {{-- <div class="awards">
                        <div class="award-item">
                            <h4>10+</h4>
                            <p>Awards</p>
                        </div>
                        <div class="award-item">
                            <h4>100+</h4>
                            <p>Professional Staffs</p>
                        </div>
                        <div class="award-item">
                            <h4>350+</h4>
                            <p>Projects Done</p>
                        </div>
                    </div> --}}
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3>Why Choose MaMo Technolabs LLP?</h3>
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
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('img/about.png') }}" alt="About Us" class="img-fluid rounded"
                            style="cursor: pointer;">
                    </div>
                </div>

            </div>
        </div>
    </section>

    


    <!-- About Start 1-->
    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">The Best IT Solution With Decade Of Experience</h1>
                    </div>
                    <p class="mb-4">MaMo Technolabs LLP is a trusted choice for high-quality offshore software
                        development, specializing in building SaaS products, mobile business solutions, and PaaS
                        implementation. With a strong focus on compliance, scalability, and IP protection, we offer
                        expert teams for software development, testing, support, and maintenance.

                        With over a decade of combined experience in technical leadership and software development, we
                        deliver top-tier talent, managed services, and consulting. Our client and candidate engagement
                        process ensures optimal performance for modern software and QA teams, driving long-term success.
                    </p>

                    <p class="mb-4">
                        MaMo Technolabs LLP's software carrier offerings broadly appear as "excellent-of-breed" and are
                        aimed at organizations spanning from SMBs to large businesses to higher help:
                    </p>
                    <p class="mb-4">
                        Optimize investment all through the software program improvement life-cycle. Executives and
                        supervisors have confidence in the development manner, decreasing micromanagement and enabling
                        them to concentrate greater on business decisions.
                    </p>

                    <p class="mb-4">
                        What makes MaMo Technolabs LLP incredible?
                    </p>
                    <ol>
                        <li>Proven management practices imparting concept leadership, governance, and consulting
                            services.</li>
                        <li>The rapidity of the concept and answer delivery ends in a low worker turnover rate of 7%.
                        </li>
                        <li>Operating history and super customers.</li>
                        <li>Proven systems and techniques for recruiting and vetting candidates.</li>
                        <li>Align the answer with the patron's requirements.</li>
                        <li>Unique in our enterprise is the continuing control and supervision of professional
                            development and continued education for positioned assets.</li>
                        <li>We conduct exhaustive code audits.</li>
                    </ol>


                    <p class="mb-4">
                        MaMo Technolabs LLP is effective in any enterprise; however, the organization has acquired
                        significant traction and expertise in several high-profile sectors, such as:
                    </p>
                    <ul>
                        <li>Consumer Products</li>
                        <li>Manufacturing</li>
                        <li>Cyber Security Services</li>
                        <li>Public Safety</li>
                        <li>SaaS</li>
                    </ul>

                    <p class="mt-4 mb-2">About MaMo Technolabs LLP Services:</p>
                    <ul>
                        <li>Flexible Software Solutions</li>
                        <li>Increase Output</li>
                        <li>Increase Output & Decrease Cost</li>
                        <li>Skilled Agile Engineering Teams</li>
                        <li>High-Caliber Code Quality</li>
                        <li>Industry-Compliant Solutions</li>
                        <li>Constant Client Satisfaction</li>
                    </ul>



                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
                        data-wow-delay="0.9s">Request
                        A Quote</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            loading="lazy" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>

        </div>
    </div> --}}
    <!-- About End 1-->

    <!-- About Start 2-->
    {{-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            loading="lazy" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>

             
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">IT Outsourcing Services</h5>
                        <h2 class="mb-0">Transform Your Business with MaMo Technolabs
                        </h2>
                    </div>
                    <p class="mb-4">At MaMo Technolabs, we offer complete IT outsourcing answers designed to beautify
                        your enterprise operations, streamline procedures, and drive innovation. Our tailor-made
                        offerings are crafted to fulfill the unique needs of your company, making sure you stay
                        beforehand in an aggressive landscape.

                    </p>

                    <h2 class="mb-0">Why Choose IT Outsourcing?</h2>
                    <p class="mb-4">
                        Outsourcing your IT desires can liberate several blessings for your enterprise, together:
                    </p>
                    <p class="mb-4">
                        Optimize investment all through the software program improvement life-cycle. Executives and
                        supervisors have confidence in the development manner, decreasing micromanagement and enabling
                        them to concentrate greater on business decisions.
                    </p>

                    <p class="mb-4">
                        What makes MaMo Technolabs LLP incredible?
                    </p>

                    <ol>
                        <li><b>Cost Efficiency</b>: Reduce operational charges with the aid of leveraging our
                            information and
                            assets.</li>
                        <li><b>Focus on Core Business</b>: Allow your group to pay attention to strategic sports while
                            we take
                            care of the technical details.</li>
                        <li><b>Access to Expertise</b>: Gain admission to professional experts with specialized
                            knowledge in
                            diverse IT domains.</li>
                        <li><b>Scalability</b>: Quickly modify resources and services in line with your business needs
                            without
                            the hassle of hiring and training new staff.</li>
                    </ol>


                    <h2 class="mb-0">Our IT Outsourcing Services</h2>
                    <h2>Our Services</h2>
                    <ol>
                        <li>
                            <strong>IT Infrastructure Management:</strong>
                            We cope with the complexities of handling your IT infrastructure, ensuring smooth operation
                            and minimal downtime.
                            Our services encompass server management, network monitoring, and data center operations.
                        </li>
                        <li>
                            <strong>Application Development and Maintenance:</strong>
                            Our team delivers custom software solutions tailored to your business requirements. From
                            initial development to ongoing maintenance and updates,
                            we ensure your applications are robust, secure, and aligned with your goals.
                        </li>
                        <li>
                            <strong>Cloud Services:</strong>
                            Optimize your cloud environment with our end-to-end cloud services. We offer cloud strategy,
                            migration, management, and support to help your business harness the full potential of cloud
                            technology.
                        </li>
                        <li>
                            <strong>IT Support and Help Desk:</strong>
                            Experience seamless IT support with our dedicated help desk services. We provide timely
                            assistance, troubleshoot issues, and resolve technical problems to keep your operations
                            running smoothly.
                        </li>
                        <li>
                            <strong>Cybersecurity Solutions:</strong>
                            Protect your business from digital threats with our comprehensive cybersecurity services. We
                            implement advanced security measures, conduct regular audits, and respond to incidents to
                            safeguard your data and assets.
                        </li>
                        <li>
                            <strong>Data Management and Analytics:</strong>
                            Transform your data into actionable insights with our data management and analytics
                            services. We help you collect, store, and analyze data to make informed decisions and drive
                            business growth.
                        </li>
                    </ol>
                             
                    <h2>Why MaMo Technolabs?</h2>
                    <p>
                        At MaMo Technolabs, we're committed to delivering excellence in every project.
                        Our approach is centered around understanding your unique needs and providing solutions that add
                        value to your business.
                        With our team of experienced professionals and cutting-edge technology, we ensure the highest
                        standards of service and support.
                    </p>
            
                    <h2>Ready to Outsource?</h2>
                    <p>
                        Partner with MaMo Technolabs to experience the benefits of efficient and effective IT
                        outsourcing.
                        Contact us today to discuss how our services can help your business thrive.
                    </p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
                        data-wow-delay="0.9s">Request
                        A Quote</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- About End 2 -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" loading="lazy" alt="team-1-image">
                            {{-- <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div> --}}
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" loading="lazy" alt="team-2-image">
                            {{-- <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div> --}}
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" loading="lazy" alt="team-3-image">
                            {{-- <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div> --}}
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->		
@endsection