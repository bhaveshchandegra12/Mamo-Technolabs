@extends('layout.app')
@section('main')
	<!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Zero Trust Security</h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Zero Trust Security</a>
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
                            <h1>Zero Trust Security and Identity Access Management (IAM)</h1>
                            <p>
                                Identity Access Management (IAM) forms the basis of a Zero Trust approach to cybersecurity.
                                Traditional network perimeters are no longer effective in securing assets distributed across
                                multiple clouds. Digital Risk Management (DRM) and the shift to a Zero Trust approach shift
                                security from being based on perimeters to being based on identities, safeguarding data and
                                services.
                            </p>
                            <p>
                                A comprehensive Zero Trust architecture should encompass all aspects, from end users to
                                specific applications and services, and should have the capability to define who, when,
                                where,
                                and how access is granted. The aim is to verify and authenticate identity PRIOR to granting
                                access, thereby preventing hacking, ransomware, and resisting attacks.
                            </p>
                            <h3>Zero Trust Zone Protected Perimeter</h3>
                            <p>
                                With Zero Trust Zone Protected Perimeter, all network attacks are thwarted by allowing ONLY
                                authorized and verified end users to have permissioned access to the protected application
                                Or
                                service contained within the Trust Zone(s).
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/zero-trust.png') }}"
                                alt="Zero Trust Security" loading="lazy">
                        </div>
                    </div>

                    <!-- Second Section: Image on the Left -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6 order-md-2">
                            <h3>Integrations with OKTA</h3>
                            <p>
                                MaMo Technolabs LLP has an advanced identity authentication solution, Zero Trust.
                                It ensures user privacy protection, information management compliance, and is a crucial
                                A component of any Zero Trust system, it permits the right individuals to access it securely.
                                relevant applications and services based on their authorization.
                            </p>
                            <p>
                                By implementing Zero Trust, organizations significantly enhance their security measures
                                beyond
                                The reliance on single usernames, passwords, or two-factor authentication. This solution
                                effectively mitigates the risk of cybercriminal activities, bolstering confidence in the
                                organization's overall safety.
                            </p>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/integrations.png') }}"
                                alt="Zero Trust OKTA Integration" loading="lazy">
                        </div>
                    </div>

                    <!-- Third Section: No Image -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>How Zero Trust Enhances Security</h3>
                            <p>
                                Zero Trust balances cybersecurity, identity verification, user privacy, and compliance. It
                                employs a Zero Knowledge Proof mechanism to verify critical user details, including name,
                                email,
                                phone number, work credentials, location, citizenship, and certificates. Most importantly,
                                this verification process does not reveal any sensitive information unless the user
                                explicitly
                                authorizes selective disclosure.
                            </p>
                            <p>
                                These solutions extend identity management beyond the traditional boundary of
                                on-premises systems. Interestingly, Zero Trust integrates with OKTA as one of its
                                custom
                                authenticators using OKTA's Devices SDK, the Zero Trust authenticator strengthens identity
                                Confidence in a mature identity platform with frictionless connectivity
                                between people and applications on any device, whether on premises or in the Cloud.
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
                    <img class="img-fluid" src="{{ asset('img/tech1.jpeg') }}" alt="Technology 1" loading="lazy">
                </div>
                <!-- Image 2 -->
                <div class="col-md-4">
                    <img class="img-fluid" src="{{ asset('img/tech2.jpeg') }}" alt="Technology 2" loading="lazy">
                </div>
                <!-- Image 3 -->
                <div class="col-md-4">
                    <img class="img-fluid" src="{{ asset('img/tech3.jpeg') }}" alt="Technology 3" loading="lazy">
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
                <div class="col-lg-12">
                    <img class="img-fluid" src="{{ asset('img/technologies-1.png') }}" alt="Technologies Image"
                        loading="lazy">
                </div>
            </div>
        </div>

    </div>

    <!-- Blog End -->	
@endsection