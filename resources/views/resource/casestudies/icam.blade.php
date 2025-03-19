@extends('layout.app')
@section('main')
 <!-- Start Breadcrumbs -->
 <div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">ICam</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li>ICam</li>
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
                <div class="content">
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
            </div>
            <div class="col-lg-6 col-12">
                <img src="{{ asset('img/incident-commander.png') }}" alt="#">
            </div>
        </div>
    </div>
</section>
<!-- End Process Area -->

<!-- Start Process Area -->
<section class="process section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <img src="{{ asset('img/challenges.png') }}" alt="#">
            </div>
            <div class="col-lg-6 col-12">
                <div class="content">
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
            </div>
        </div>
    </div>
</section>
<!-- End Process Area -->

<!-- Start Process Area -->
<section class="process section">
    <div class="container">
        <div class="row align-items-center">
                <div class="content">
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
</section>
<!-- End Process Area -->

<!-- Start Process Area -->
<section class="process section">
    <div class="container">
                <div class="row text-center">
                    <div class="col-md-4">
                        <img src="{{ asset('img/icam1.png') }}" alt="#">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('img/icam2.png') }}" alt="#">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('img/icam3.png') }}" alt="#">
                    </div>   
                </div>
    </div>
</section>
<!-- End Process Area -->

@endsection