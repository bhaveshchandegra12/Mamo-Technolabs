@extends('layout.app')
@section('main')
  <!-- Navbar Start -->
  <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 0px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Mustad</h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Mustad</a>
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
                            <h1>Mustad Project</h1>
                            <p>
                                Mustad Project is built for the Swiss-based world's largest manufacturer and seller of
                                hoof care products, serving farriers, horse owners, and veterinarians worldwide.
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/mustad-2.png') }}"
                                alt="Mustad Project" loading="lazy">
                        </div>
                    </div>

                    <!-- Second Section: Image on the Left -->
                    <div class="row mb-5 align-items-center">
                        <div class="col-md-6 order-md-2">
                            <h3>Objective</h3>
                            <p>
                                Create affordable digital transformation for Manufacturing Unit.
                            </p>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <img class="img-fluid w-100 rounded" src="{{ asset('img/mustad-3.png') }}" alt="Objective Image"
                                loading="lazy">
                        </div>
                    </div>

                    <!-- Third Section: No Image -->
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3>Solution</h3>
                            <p>
                                MaMo Technolabs LLP developed multilingual and user-friendly web interfaces, applications,
                                Mobility Solutions, and backends. Most of the applications are used by daily workers and
                                supervisors who are more industry people but less tech-savvy. Our next-door easy apps have
                                helped them track ongoing processes so accurately that Mustad has reduced discrepancies by
                                25% in manufacturing activities and saved on time and cost.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Two Video Sections -->
        {{-- <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h3>Video 1: Introduction to Mustad Project</h3>
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID_1" title="Mustad Project Intro"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Video 2: Digital Transformation</h3>
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID_2"
                            title="Mustad Project - Digital Transformation" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>


    <!-- Blog End -->		
@endsection