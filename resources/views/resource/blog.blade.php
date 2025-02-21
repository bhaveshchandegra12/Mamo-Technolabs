@extends('layout.app')
@section('main')
<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Blog</h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Blog</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <!-- Card Section -->
            <div class="row mb-5">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/mustad-project.png') }}" alt="Mustad Project"
                            loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Demystifying the Magic: Why Explainable AI is the Future</h5>
                            <p class="card-text">Why Explainable AI is the Future? An in-depth look into the need for
                                transparency in artificial intelligence systems.<br><br><br></p>
                            <a href="#blog1" class="btn btn-primary" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="blog1">Read More</a>
                            <div class="collapse" id="blog1">
                                <div class="card card-body">
                                    <h3>Why Explainable AI is the Future?</h3>
                                    <p>Explainable AI is a critical component of building trust in AI systems. It ensures
                                        transparency and makes the decision-making process more understandable, which is
                                        Critical for industries like health care, finance, and law enforcement. This blog
                                        explores the changing role of explainability in AI and its potential for shaping the
                                        future.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/goal.png') }}" alt="Objective Image" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">The Ethical Balancing Act: Bias, Fairness, and Privacy in AI-Powered
                                Software</h5>
                            <p class="card-text">The Ethical Balancing Act: Bias, Fairness, and Privacy in AI-Powered
                                Software. Analyzing the ethical implications of AI in modern software.</p>
                            <a href="#blog2" class="btn btn-primary" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="blog2">Read More</a>
                            <div class="collapse" id="blog2">
                                <div class="card card-body">
                                    <h3>The Ethical Balancing Act: Bias, Fairness, and Privacy in AI-Powered Software</h3>
                                    <p>Artificial Intelligence is transforming industries, but it also raises important
                                        ethical questions. How do we address bias, ensure fairness, and protect privacy in
                                        AI-powered software? This blog delves into these ethical challenges and discusses
                                        solutions for building AI systems that are both effective and ethical.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/product.png') }}" alt="Mustad Project"
                            loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">The Minimum Viable Product: Launching Your Dream App Without Breaking the
                                Bank</h5>
                            <p class="card-text">The Minimum Viable Product: Launching Your Dream App Without Breaking the
                                Bank. How to get your app to market fast and affordably.</p>
                            <a href="#blog3" class="btn btn-primary" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="blog3">Read More</a>
                            <div class="collapse" id="blog3">
                                <div class="card card-body">
                                    <h3>The Minimum Viable Product: Launching Your Dream App Without Breaking the Bank</h3>
                                    <p>Launching an app can be an intimidating task, but with a well-designed Minimum Viable Product
                                        (MVP), you can test the market without over-investing. This blog explains how to
                                        define an MVP, what features to prioritize, and how to launch your app with minimal
                                        risk and cost.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Blog End -->
		
@endsection