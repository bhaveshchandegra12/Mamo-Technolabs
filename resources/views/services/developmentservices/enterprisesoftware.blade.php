@extends('layout.app')
@section('main')
<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Enterprise Software Development
                    </h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Enterprise Software Development
                    </a>
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

                    <!-- First Section: Web Portal Development Services -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6">
                            <h1>Web Portal Development Services</h1>
                            <p>
                                MaMo Technolabs provides web portal solutions that are in line with the requirements of
                                businesses and individuals.
                            </p>
                            <ul>
                                <li>
                                    <strong>B2B and B2C Portals:</strong> We develop dynamic portals for the purpose of enriching
                                    Communication, facilitate transactions, and business growth.
                                </li>
                                <li>
                                    <strong>E-commerce Portals:</strong> Our e-commerce portals have streamlined the buying and
                                    From product catalogs to payment gateways, the selling process, ensuring a seamless shopping experience
                                    experience.
                                </li>
                                <li>
                                    <strong>Corporate Intranet Portals:</strong> Improve internal communication and
                                    productivity with portals designed to centralize information and foster a collaborative
                                    work environment.
                                </li>
                                <li>
                                    <strong>Customer Portals:</strong> Give your customers exclusive access to
                                    services, order tracking, and support to increase customer satisfaction and loyalty.
                                </li>
                                <li>
                                    <strong>Vendor Portals:</strong> Manage vendor relationships efficiently with platforms
                                    that facilitate communication, order management, and procurement processes.
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/enterprise-1.png') }}"
                                alt="Web Portal Development" loading="lazy">
                        </div>
                    </div>

                    <!-- Second Section: Our Development Process -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Our Development Process</h3>
                            <ul>
                                <li>
                                    <strong>Consultation and Requirement Analysis:</strong> We start by understanding your
                                    Business needs, as a result of thorough analysis in ensuring alignment with your objectives.
                                </li>
                                <li>
                                    <strong>Design and prototyping:</strong> Our designers make prototypes and mockups
                                    Refined on the design incorporating your thoughts on feedback towards ensuring expectations were met.
                                </li>
                                <li>
                                    <strong>Development and Integration:</strong> Our developers use modern technologies and
                                    best practices, in a seamless manner with existing systems.
                                </li>
                                <li>
                                    <strong>Testing and Quality Assurance:</strong> We test very hard to identify
                                    and resolve any issues, thus ensuring a secure, reliable, and high-performing portal.
                                </li>
                                <li>
                                    <strong>Deployment and Support:</strong> We take care of deployment and ongoing
                                    The other support and maintenance to keep your portal up-to-date and functioning properly.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Third Section: Call to Action -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Get Started with MaMo Technolabs</h3>
                            <p>
                                Whether it is a straightforward consumer portal or an enterprise-wide solution, MaMo
                                Technolabs can assist. Our experience with web portal development can help ensure an effective solution that meets
                                and beyond your expectations. <strong>Contact us</strong> today for your project and
                                It's a first step toward a more efficient and user-friendly digital presence.
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