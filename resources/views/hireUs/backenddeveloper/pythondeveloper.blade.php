@extends('layout.app')
@section('main')
  <!-- Navbar Start -->
  <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Hire Python developer</h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Hire Python developer</a>
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
                    <!-- First Section: Image on the Right -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6">
                            <h1>Hire Python Developers with MaMo Technolabs</h1>
                            <p>
                            Looking for experienced Python developers to bring your vision to life?
                            At MaMo Technolabs, we provide you with a team of professional Python developers.
                            ready to deliver innovative, scalable, and robust solutions tailored to your needs.
                            Whether it is to develop web applications, automate processes, or manage data,
                            our developers know how to make it happen.
                            </p>
                            <h3>Why Choose MaMo Technolabs for Python Development?</h3>
                            <ul>
                                <li><strong>Expert Python Developers:</strong> Skilled in creating efficient, scalable
                                    applications, from simple scripts to complex systems.</li>
                                <li><strong>Custom Solutions:</strong> Tailored Python solutions designed to meet your
                                    unique business needs and goals.</li>
                                <li><strong>Flexible Engagement:</strong> Choose full-time, part-time, or project-based
                                    developers to fit your requirements.</li>
                                <li><strong>Cost-Effective Services:</strong> Competitive pricing with no compromise on
                                    quality.</li>
                                <li><strong>Timely Delivery:</strong> Structured processes ensure on-time delivery without
                                    sacrificing quality.</li>
                            </ul>

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/python-1.png') }}"
                                alt="Python Development" loading="lazy">
                        </div>
                    </div>

                    <!-- Second Section: Image on the Left -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6 order-md-2">
                            <h3>Our Python Development Services</h3>
                            <ul>
                                <li><strong>Web Development:</strong> Build scalable web apps using Django, Flask, and other
                                    Python frameworks.</li>
                                <li><strong>Data Science & AI:</strong> Harness Python for data analysis, machine learning,
                                    and AI with libraries like Pandas and TensorFlow.</li>
                                <li><strong>Automation:</strong> Streamline workflows with custom Python scripts for
                                    repetitive tasks.</li>
                                <li><strong>API Development:</strong> Create secure, reliable APIs or integrate with
                                    third-party services.</li>
                                <li><strong>Support & Maintenance:</strong> Ensure peak performance with updates, bug fixes,
                                    and optimization.</li>
                            </ul>

                        </div>
                        <div class="col-md-6 order-md-1">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/python-2.png') }}"
                                alt="Python Development Services" loading="lazy">
                        </div>
                    </div>

                    <!-- Third Section: No Image -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>How We Work</h3>
                            <p>
                                Our structured approach ensures success in Python development:
                            </p>
                            <ul>
                                <li><strong>Understanding Your Requirements:</strong> We start by analyzing your
                                    business goals and project requirements to tailor our Python development services to
                                    meet your specific needs.</li>
                                <li><strong>Planning & Strategy:</strong> Our team creates a detailed project plan and
                                    strategy to ensure efficient execution. We outline the timeline, milestones, and
                                    deliverables to keep everything on track.</li>
                                <li><strong>Development:</strong> Our Python developers get to work, using the latest
                                    tools and frameworks to build your application. We maintain clear communication
                                    throughout the development process to keep you informed.</li>
                                <li><strong>Testing & Quality Assurance:</strong> We rigorously test your application to
                                    ensure it meets the highest quality standards. Our QA team checks for bugs,
                                    performance issues, and ensures the application is ready for deployment.</li>
                                <li><strong>Deployment and Support:</strong> Once the application is ready, we handle
                                    deployment and provide ongoing support to ensure a smooth transition. Our team
                                    remains available to address any issues or improvements as needed.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Fourth Section: Call to Action -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Start with MaMo Technolabs</h3>
                            <p>
                                Ready to hire experienced Python developers? Contact us today to discuss your project
                                and learn how MaMo Technolabs can help you achieve your goals.
                                Our team is dedicated to providing high-quality Python development services that deliver
                                results. Let’s bring your ideas to life!
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