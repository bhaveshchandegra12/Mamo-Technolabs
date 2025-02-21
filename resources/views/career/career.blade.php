@extends('layout.app')
@section('main')
  <!-- Navbar Start -->
  <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Career</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Career</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <!-- Content Section -->
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <h5 class="fw-bold text-primary text-uppercase">Vacancies</h5>
                    <h1 class="mb-4">Build an Awesome Career with MaMo Technolabs LLP</h1>
                    <p class="mb-4">
                        At MaMo Technolabs LLP, we believe in creating opportunities that inspire growth and innovation.
                        Join a team where your ideas are valued, and your contributions make a difference. Explore a
                        workplace that promotes cooperation, diversity, and career progression.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Competitive Salary Packages</li>
                        <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Flexible Work Environment</li>
                        <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Ongoing Training and Development
                        </li>
                        <li class="mb-3"><i class="fa fa-check text-primary me-2"></i>Diverse and Inclusive Culture</li>
                    </ul>
                    {{-- <a href="#" class="btn btn-primary py-3 px-4">View Openings</a> --}}
                </div>

                <!-- Image Section -->
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <img class="img-fluid rounded shadow" src="img/vacancies.png" alt="Vacancies at MaMo Technolabs">
                </div>
            </div>
        </div>
        <div class="container py-5">
            <!-- Section Title -->
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Careers</h5>
                <h1 class="mb-0">Why You’ll Love Working Here</h1>
            </div>

            <!-- Why You'll Love Section -->
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-lightbulb text-white"></i>
                            </div>
                            <h4>Innovative Environment</h4>
                            <p class="mb-0">We foster creativity and innovation, offering a platform to explore your ideas
                                and contribute to meaningful projects.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-chart-line text-white"></i>
                            </div>
                            <h4>Career Growth</h4>
                            <p class="mb-0">We focus on your professional development with training, mentorship, and
                                opportunities to take your career to the next level.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                            src="{{ asset('img/career-feature.png') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-heart text-white"></i>
                            </div>
                            <h4>Employee Well-being</h4>
                            <p class="mb-0">Your well-being matters. We offer flexible work arrangements, wellness
                                programs, and a supportive community.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-hands-helping text-white"></i>
                            </div>
                            <h4>Inclusive Culture</h4>
                            <p class="mb-0">We celebrate diversity and inclusion, creating a workplace where everyone
                                feels valued and respected.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Current Openings Section -->
            <div class="section-title text-center position-relative pb-3 mt-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Current Openings</h5>
                <h1 class="mb-0">Join Our Team</h1>
            </div>
            <br>
            <div class="row g-5">
                <!-- SharePoint Developer -->
                <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                    <div class="bg-light rounded shadow p-4 text-center h-100">
                        <i class="fa fa-share-alt text-primary fa-3x mb-3"></i>
                        <h4>SharePoint Developer</h4>
                        <p>We are seeking a skilled SharePoint Developer to design, develop, and manage solutions in
                            SharePoint.</p>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
                <!-- Node.js with Angular -->
                <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                    <div class="bg-light rounded shadow p-4 text-center h-100">
                        <i class="fa fa-code text-primary fa-3x mb-3"></i>
                        <h4>Node.js with Angular Developer</h4>
                        <p>Join us as a Node.js with Angular Developer to build full-stack applications with robust
                            frontends.</p>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
                <!-- .Net with Angular Developer -->
                <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-light rounded shadow p-4 text-center h-100">
                        <i class="fa fa-desktop text-primary fa-3x mb-3"></i>
                        <h4>.Net with Angular Developer</h4>
                        <p>Looking for a .Net with Angular Developer to build dynamic and scalable enterprise-level
                            solutions.</p>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
                <!-- Python Developer -->
                <div class="col-md-4 wow zoomIn" data-wow-delay="0.8s">
                    <div class="bg-light rounded shadow p-4 text-center h-100">
                        <i class="fa fa-python text-primary fa-3x mb-3"></i>
                        <h4>Python Developer</h4>
                        <p>Looking for a Python Developer to work on data-driven applications and backend systems.</p>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
                <!-- Penetration Tester -->
                <div class="col-md-4 wow zoomIn" data-wow-delay="1.0s">
                    <div class="bg-light rounded shadow p-4 text-center h-100">
                        <i class="fa fa-shield-alt text-primary fa-3x mb-3"></i>
                        <h4>Penetration Tester</h4>
                        <p>Join our team as a Penetration Tester to identify security vulnerabilities and enhance system
                            defenses.</p>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>		
@endsection