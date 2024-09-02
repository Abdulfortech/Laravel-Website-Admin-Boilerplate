<!DOCTYPE html>
<link rel="icon" type="image/jpg" href="https://res.cloudinary.com/dqxaizgsd/image/upload/c_thumb,w_200,g_face/v1717573934/Logo/kaid/sh3fetidm22yf1ctpvk5.jpg">
@extends('layout.mainLayout')
@section('title', 'Contact Us')
@php( $page = 'contact')
@section('contents')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero2">
    <div class="col-lg-12 d-flex flex-column justify-content-center hero-img-about mt-5" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{asset('main/img/kaid/bg (3).jpg')}}" class="img-fluid" alt="">
    </div>
  </section><!--END HERO-->

<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" >

        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h3 style="color: #005542;"><b>Contact Us</b></h3>
            <p>Do you have any question about</p>
            <h5>our ongoing or past appeal and you would like to speak to someone ? </h5>
          </header>
  
          <div class="row gy-4">
  
            <div class="col-lg-6">
  
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <p>No 000 Kaid Street<br>Our State, Nigeria.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-telephone"></i>
                    <h3>Call Us</h3>
                    <p>+234 7042 3730 91<br>+234 7042 3730 91</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>kaidcharity@gmail.com<br></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-clock"></i>
                    <h3>Open Hours</h3>
                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                  </div>
                </div>
              </div>
  
            </div>
  
            <div class="col-lg-6">
              <form action="#" method="post" class="php-email-form">
                <div class="row gy-4">
  
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                  </div>
  
                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                  </div>
  
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                  </div>
  
                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                  </div>
  
                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
  
                    <button type="submit">Send Message</button>
                  </div>
  
                </div>
              </form>
  
            </div>
  
          </div>
  
        </div>
  
    </section><!-- End Contact Section -->

</main>