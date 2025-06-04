@extends('frontend.layouts.main')
@section('content')
    <div class="page-title-area bg-25">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href="index-2.html">
                            Home
                        </a>
                    </li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="contact-info-area bg-color pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us:</h3>

                        <a href="#">ayaanlogistics100@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us:</h3>
                        <a href="tel:9517917779">Tel. 9517917779</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-location-plus"></i>
                        <h3>Punjab</h3>
                        <a href="#">PLOT NO 91, OPP TELEPHONE EXCHANGE, LINK ROAD,
                            TRANSPORT NAGAR, Ludhiana, Punjab, 141003
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-support"></i>
                        <h3>Live Chat</h3>
                        <a href="#">Live Chat All The Time With Our Company 24/7</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="main-contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Drop Us A Message For Any Query</h2>
            </div>
            <form id="contactForm">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required
                                data-error="Please enter your name" placeholder="Your Name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required
                                data-error="Please enter your email" placeholder="Your Email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required
                                data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                data-error="Please enter your subject" placeholder="Your Subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" required
                                data-error="Write your message" placeholder="Your Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group checkboxs">
                            <input type="checkbox" id="chb2">
                            <p>
                                Accept <a href="terms-conditions.html">Terms & Conditions</a> And <a
                                    href="privacy-policy.html">Privacy Policy.</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="default-btn btn-two">
                            <span>Send Message</span>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>


    <!--<div class="map-area">

</div>-->


    <section class="shipment-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="shipment-content">
                <h2>So, If you are planning to relocate then give us a Call<br> on <a href="tel:+919517917779"
                        style="color:#ff7e00">+91 9517917779</a> or click on</h2>
                <div class="shipment-btn">
                    <a href="requestquote.html" class="default-btn">
                        <span>Get A Quote</span>
                    </a>

                </div>
            </div>
        </div>
    </section>

@endsection