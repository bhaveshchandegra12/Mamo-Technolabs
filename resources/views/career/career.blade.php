@extends('layout.app')
@section('main')
 <!-- Start Breadcrumbs -->
 <div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Career</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li>Career</li>
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
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <img src="{{ asset('img/vacancies.png') }}" alt="#">
            </div>
        </div>
    </div>
</section>
<!-- End Process Area -->
 
@endsection