@extends('layout.app')
@section('main')
<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Hire Dedicated Developers</h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Hire Dedicated Developers</a>
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
                    <!-- First Section: Overview of Dedicated Developers -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6">
                            <h1>Hire Dedicated Developers</h1>
                            <p>
                                At MaMo Technolabs, we recognize the importance of having the right talent to bring your
                                Projects to life.
                                Our dedicated developers are not just skilled professionals-they are your technology.
                                partners,
                                committed to delivering excellence. Whether you need a single developer or an entire team,
                                we provide flexible hiring models according to your project goals.
                            </p>
                            <h3>Why Choose MaMo Technolabs?</h3>
                            <ul>
                                <li><strong>Expertise Across Technologies:</strong> Our developers are well-versed in web
                                development,
                                mobile app development, AI, blockchain, and more. Regardless of what your project's
                                complexity,
                                we have the know-how to guarantee success.</li>
                                <li><strong>Flexible Hiring Models:</strong> Available part-time, full-time, or
                                    project-based options
                                    to easily scale your team according to the needs of projects.</li>
                                <li><strong>Direct Communication:</strong> Work directly with your developers for better
                                    project outcomes,
                                    complete control, and transparency.</li>
                                <li><strong>Cost-Effective Solutions:</strong> Dedicated Developers from MaMo
                                    Technolabs minimizes
                                    your development costs with quality work./li>
                                <li><strong>Focus on Core Business:</strong> We manage the technical details, allowing you
                                    to focus
                                    on business growth. Our developers will code, test, and deliver projects on time
                                    delivery.</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/hiring.png') }}"
                                alt="Dedicated Developer Hiring" loading="lazy">
                        </div>
                    </div>

                    <!-- Second Section: Our Hiring Process -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6 order-md-2">
                            <h3>Our Hiring Process</h3>
                            <ul>
                                <li><strong>Requirements Analysis:</strong> We first understand the needs of your project,
                                    Identifying the skills and expertise needed.</li>
                                <li><strong>Developer Shortlist:</strong> We provide a list of developers best-suited for
                                    your project.
                                    Review profiles and choose the best fit.</li>
                                <li><strong>Interview and Selection:</strong> Conduct interviews with candidates to find the
                                    right match.</li>
                                <li><strong>Onboarding:</strong> After selection, developers join your project as part of your
                                    team,
                                    integrating seamlessly.</li>
                                <li><strong>Project Start:</strong> Project Development begins, workflow is under your control
                                    with periodic updates and progress reports. </li>
                            </ul>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/hiring-2.png') }}" alt="Hiring Process"
                                loading="lazy">
                        </div>
                    </div>

                    <!-- Third Section: Technical Proficiency -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>We Are Technically Proficient</h3>
                            <ul>
                                <li><strong>Web Development:</strong> HTML, CSS, JavaScript, Angular, React, Vue.js, and
                                    more.</li>
                                <li><strong>Mobile Application Development:</strong> iOS, Android, React Native, Flutter,
                                    Ionic.</li>
                                <li><strong>Backend Development:</strong> Node.js, Python, PHP, Ruby on Rails, .NET.</li>
                                <li><strong>E-Commerce Development:</strong> Magento, Shopify, WooCommerce.</li>
                                <li><strong>AI & Machine Learning:</strong> TensorFlow, PyTorch, Scikit-Learn.</li>
                                <li><strong>Blockchain Development:</strong> Ethereum, Hyperledger, smart contracts.</li>
                                <li><strong>CMS Development:</strong> WordPress, Joomla, Drupal.</li>
                                <li><strong>DevOps & Cloud:</strong> AWS, Azure, Google Cloud, CI/CD, Kubernetes.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Fourth Section: Benefits of Hiring Dedicated Developers -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Benefits of Hiring Dedicated Developers from MaMo Technolabs</h3>
                            <ul>
                                <li><strong>Tailored Solutions:</strong> Solutions that are custom-fit to your business
                                needs.</li>
                                <li><strong>High Standards:</strong> Adherence to industry best practices ensures quality
                                output.</li>
                                <li><strong>Easy collaboration:</strong> Flexible to use tools and platforms of your choice.
                                </li>
                                <li><strong>Submission deadlines:</strong> Commitment to delivering projects on time.</li>
                                <li><strong>Ongoing Support:</strong> Continuous support and maintenance post-project
                                completion.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Fifth Section: Industries Served -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Industries We Serve</h3>
                            <ul>
                                <li>Healthcare</li>
                                <li>Finance</li>
                                <li>Retail and E-commerce</li>
                                <li>Education</li>
                                <li>Real Estate</li>
                                <li>Travel and Hospitality</li>
                                <li>Entertainment and Media</li>
                                <li>Logistics and Transportation</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Sixth Section: Call to Action -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Ready to Get Started?</h3>
                            <p>
                                Bring your ideas to life by partnering with MaMo Technolabs. Whether you’re a startup,
                                Our committed developers are here to help elevate your project for SME, or enterprise.
                                <strong>Contact us</strong> today to talk about your requirements and create something amazing.
                                Together!
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ url('/contact-us') }}" class="btn btn-primary contact-us-btn">Contact Us</a>
        </div>
    </div>
    <!-- Blog End -->		
@endsection