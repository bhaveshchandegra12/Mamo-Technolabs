@extends('layout.app')
@section('main')
 <!-- Start Breadcrumbs -->
 <div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Contact Us</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Contact Area -->
<div class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="contact-form">
                    <form class="form" method="post" action="#">
                        <div class="form-group">
                            <label>Your name</label>
                            <input name="name"  type="text" placeholder="James Cameron" required="required">
                        </div>
                        <div class="form-group">
                            <label>Your Subject</label>
                            <input name="subject"  type="text" placeholder="Type your subject" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input name="email"  type="email" placeholder="james@email.com" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea placeholder="Write your message here" name="message" id="message-area"
                                class="form-control"></textarea>
                        </div>
                        /*<div class="button">
                            <button type="submit" class="btn ">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="contact-widget-wrapper">
                    <div class="main-title">
                        <h2>We are always open<br> for help you.
                        </h2>
                        <p>There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered.</p>
                    </div>
                    <div class="contact-widget-block">
                        <h3 class="title">Call us</h3>
                        <p>+1-492-4918-395</p>
                        <p>+14-394-409-591</p>
                    </div>
                    <div class="contact-widget-block">
                        <h3 class="title">Email us</h3>
                        <p>info@mail.com</p>
                        <p>support@mail.com</p>
                    </div>
                    <div class="contact-widget-block">
                        <h3 class="title">Our Address</h3>
                        <p>34 Madison Street,</p>
                        <p>NY, USA 10005</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

</body>
@endsection