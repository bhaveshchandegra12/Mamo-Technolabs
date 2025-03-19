@extends('layout.app')
@section('main')
	<!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Zero Trust</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Zero Trust</li>
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
            </div>
            <div class="col-lg-6 col-12">
                <img src="{{ asset('img/zero-trust.png') }}" alt="#">
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
                <img src="{{ asset('img/integrations.png') }}" alt="#">
            </div>
            <div class="col-lg-6 col-12">
                <div class="content">
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
</section>
<!-- End Process Area -->

<!-- Start Process Area -->
<section class="process section">
    <div class="container">
                <div class="row text-center">
                    <div class="col-md-4">
                        <img src="{{ asset('img/tech1.jpeg') }}" alt="#">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('img/tech2.jpeg') }}" alt="#">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('img/tech3.jpeg') }}" alt="#">
                    </div>   
                </div>
    </div>
</section>
<!-- End Process Area -->



@endsection