@extends('layout.app')
@section('main')
 <!-- Start Breadcrumbs -->
 <div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Mustard</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li>Mustard</li>
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
                    <h1>Mustad Project</h1>
                    <p>
                        Mustad Project is built for the Swiss-based world's largest manufacturer and seller of
                        hoof care products, serving farriers, horse owners, and veterinarians worldwide.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <img src="{{ asset('img/mustad-2.png') }}" alt="#">
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
                <img src="{{ asset('img/mustad-3.png') }}" alt="#">
            </div>
            <div class="col-lg-6 col-12">
                <div class="content">
                    <h3>Objective</h3>
                    <p>
                        Create affordable digital transformation for Manufacturing Unit.
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
</section>
<!-- End Process Area -->

@endsection