@extends('layout.app')
@section('main')
	<!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Hire .Net developer</h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Hire .Net developer</a>
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
                            <h1>Hire .NET Developers with MaMo Technolabs</h1>
                            <p>
                                MaMo Technolabs provides a team of professional.NET developers, ready to be assigned to work on
                                your most challenging projects.
                                Our developers can build robust, scalable, and secure applications on the
                                .NET framework.
                                Whether you require enterprise-level solutions or a custom application tailored to your
                                Business needs,
                                our .NET experts are equipped to deliver outstanding results.
                            </p>
                            <h3>Why Choose Our .NET Developers?</h3>
                            <ul>
                                <li><strong>Massive Experience:</strong> Our developers have years of experience working
                                using the .NET framework-from simple applications to the most complex enterprise solutions.
                                </li>
                                <li><strong>Tailored Solutions:</strong> We know that each project is different. Our
                                developers work closely with you to create solutions customized for your specific
                                requirements.</li>
                                <li><strong>Timely Delivery:</strong> We prioritize deadlines, ensuring timely project
                                delivery without compromising on quality.</li>
                                <li><strong> Cost-Effective:</strong> We have flexible hiring models that enable you to
                                Choose the best option for your project needs and budget.</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/net-developer.png') }}"
                                alt=".NET Development" loading="lazy">
                        </div>
                    </div>

                    <!-- Second Section: Image on the Left -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6 order-md-2">
                            <h3>Our .NET Development Services</h3>
                            <ul>
                                <li><strong>Custom.NET Application Development:</strong> Our team is excellent at developing
                                custom.NET applications that cater to your business needs. We guarantee the
                                applications are scalable, secure and easy to maintain.
                                Enterprise.NET Solutions: We offer enterprise-level solutions
                                that will enhance your business operations and seamlessly integrate with your existing
                                systems.</li>
                                <li><strong>.NET Migration Services:</strong> If you’re looking to upgrade or migrate
                                Your current applications to the.NET framework our developers ensure an easy transition of
                                efficient transition with little downtime.</li>
                                <li><strong>.NET Integration Services:</strong>  Our developers are well versed in
                                Integrate.NET applications with third-party tools and services for seamless
                                system collaboration.</li>
                                <li><strong>.NET Maintenance and Support:</strong> We offer comprehensive maintenance
                                and support services to ensure that your.NET applications stay up-to-date,
                                secure, and perform optimally at all times.</li>
                            </ul>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/net-developer-2.png') }}"
                                alt=".NET Development Services" loading="lazy">
                        </div>
                    </div>

                    <!-- Third Section: No Image -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Flexible Hiring Models</h3>
                            <p>
                                We realize each project is a little different in MaMo Technolabs and provide
                                flexible hiring models to suit your specific requirements:
                                </p>
                            <ul>
                                <li><strong>Dedicated Developers:</strong>  Hire a team of dedicated.NET developers who
                                will work on your project exclusively.</li>
                                <li><strong>Hourly Basis:</strong> If your project requires specific expertise for a
                                limited time to hire .NET developers on an hourly basis.</li>
                                <li><strong>Project-Based:</strong> For clearly defined projects with defined deliverables,
                                you can consider our project-based hiring model.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Fourth Section: How to Get Started -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Why Partner with MaMo Technolabs?</h3>
                            <p>
                                This is a client-centric approach. My satisfaction comes first. We work
                                closely with you to ensure that our solutions align with your business goals.
                                <strong>Transparency:</strong> We keep open communication throughout the
                                development process, which ensures that you are always updated about the progress.
                                <strong>Quality Assurance:</strong> Our team follows strict quality standards to
                                ensure that every project we deliver meets your expectations.
                            </p>
                        </div>
                    </div>

                    <!-- Fifth Section: Call to Action -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Get Started Today</h3>
                            <p>
                                Ready to take your project to the next level? Contact MaMo Technolabs today to hire
                                Expert.NET developers who will turn your ideas into reality.
                                We are committed to providing solutions that ensure your business is successful.
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