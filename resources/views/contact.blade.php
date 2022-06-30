@extends('layouts.layout')


@section('content')

<section class="section section-bg" id="call-to-action" style="background-image: url(/images/banner-image-1-1920x500.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Feel free to <em>Contact Us</em></h2>
                    <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Features Item Start ***** -->
<section class="section" id="features">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>contact <em> info</em></h2>
                    <img src="/images/line-dec.png" alt="waves">
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="icon">
                    <i class="fa fa-phone"></i>
                </div>

                <h5><a href="#">+1 333 4040 5566</a></h5>

                <br>
            </div>

            <div class="col-md-4">
                <div class="icon">
                    <i class="fa fa-envelope"></i>
                </div>

                <h5><a href="#">contact@company.com</a></h5>

                <br>
            </div>

            <div class="col-md-4">
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>

                <h5>Erbil - 60m - Dream City</h5>

                <br>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Item End ***** -->

<!-- ***** Contact Us Area Starts ***** -->
<section class="section" id="contact-us" style="margin-top: 0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103031.5868330358!2d43.938922942349784!3d36.197275397761494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400722fe13443461%3A0x3e01d63391de79d1!2sErbil%2C%20Iraq!5e0!3m2!1sen!2sus!4v1621695562199!5m2!1sen!2sus" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="contact-form section-bg" style="background-image: url(/images/contact-1-720x480.jpg)">
                    <form id="contact" action="" method="post">
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12 col-sm-12">
                          <fieldset>
                            <input name="subject" type="text" id="subject" placeholder="Subject">
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button">Send Message</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Us Area Ends ***** -->
    
@endsection