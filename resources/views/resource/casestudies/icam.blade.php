@extends('layout.app')
@section('main')
  <!-- Navbar Start -->
  <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Icams</h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Icams</a>
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
                            <h1>Challenge: Securing Credentials for Incident Commanders</h1>
                            <p>
                                The United States has experienced a number of extreme events in recent years, including
                                record-breaking fires, natural disasters, mass shootings, and a major global pandemic. These
                                events have strained the resources of local jurisdictions, requiring them to coordinate and
                                seek assistance from other agencies, jurisdictions, and disciplines.
                            </p>
                            <p>
                                Incident Commanders (ICs) play a critical role in coordinating these efforts. They need to
                                be able to identify and secure the personnel with the right credentials quickly and easily
                                from several regions. They also have to be able to coordinate cooperation between First
                                Responder communities and establish a consent-related trust mechanism.
                            </p>
                            <h3>Organizations that Benefit from Secure Credentials</h3>
                            <p>
                                A few organizations that may benefit from secure credentials for ICs include:
                            <ul>
                                <li>First Responders</li>
                                <li>Public Safety and Security Communities</li>
                                <li>Federal agencies</li>
                                <li>Interoperable efficiencies between federal agencies through the Trustmark framework</li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/incident-commander.png') }}"
                                alt="Incident Commanders Security" loading="lazy">
                        </div>
                    </div>

                    <!-- Second Section: Image on the Left -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6 order-md-2">
                            <h3>Challenges in Securing IC Credentials</h3>
                            <p>
                                There are several challenges that need to be addressed to secure credentials for ICs, such
                                as identity management, access control, and data protection. To address these challenges,
                                solutions such as identity and access management (IAM), zero trust architecture, and data
                                protection technologies can be employed.
                            </p>
                            <p>
                                These solutions ensure that Incident Commanders have the secure credentials they need to
                                respond to extreme events efficiently and effectively.
                            </p>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/challenges.png') }}"
                                alt="Challenges in Securing Credentials" loading="lazy">
                        </div>
                    </div>

                    <!-- Third Section: No Image -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Impact: Enhancing Incident Response and Security</h3>
                            <p>
                                MaMo Technolabs LLP provides a cost-effective and secure solution to stabilize incident
                                Activities to foster interoperable communications and privacy for public safety
                                personnel, reduce identity fraud and hacking, and proactively mitigate cyberattacks and
                                network intrusions.
                            </p>
                            <p>
                                Benefits to the Customer:
                            <ul>
                                <li>Accelerated and improved incident stabilization.</li>
                                <li>Enhanced effectiveness of emergency responders and first responders.</li>
                                <li>Validated identification of first responders from diverse regions and companies.
                                </li>
                                <li>Secure protection, sharing, and maintenance of records.</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Three Images in Horizontal Line Section -->
        <div class="container py-5">
            <div class="row text-center">
                <!-- Image 1 -->
                <div class="col-md-4">
                    <img class="img-fluid" src="{{ asset('img/icam1.png') }}" alt="Technology 1" loading="lazy">
                </div>
                <!-- Image 2 -->
                <div class="col-md-4">
                    <img class="img-fluid" src="{{ asset('img/icam2.png') }}" alt="Technology 2" loading="lazy">
                </div>
                <!-- Image 3 -->
                <div class="col-md-4">
                    <img class="img-fluid" src="{{ asset('img/icam3.png') }}" alt="Technology 3" loading="lazy">
                </div>
            </div>
        </div>

        <!-- Horizontal Section for Headline Technologies and Image -->
        <div class="container py-5">
            <div class="row align-items-center">
                <!-- Headline Text -->
                <div class="col-md-6">
                    <h2>Technologies</h2>
                </div>
                <!-- Image -->
                <div class="col-md-12">
                    <img class="img-fluid" src="{{ asset('img/technologies-1.png') }}" alt="Technologies Image"
                        loading="lazy">
                </div>
            </div>
        </div>

    </div>
    <!-- Blog End -->		
@endsection