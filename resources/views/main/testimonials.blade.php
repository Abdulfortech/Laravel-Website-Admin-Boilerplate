<!DOCTYPE html>
<link rel="icon" type="image/jpg" href="https://res.cloudinary.com/dqxaizgsd/image/upload/c_thumb,w_200,g_face/v1717573934/Logo/kaid/sh3fetidm22yf1ctpvk5.jpg">
@extends('layout.mainLayout')
@section('title', 'Gallery')
@php( $page = 'gallery')
@section('contents')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero2">
    <div class="col-lg-12 d-flex flex-column justify-content-center hero-img-about mt-5" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{asset('main/img/kaid/bg (3).jpg')}}" class="img-fluid" alt="">
    </div>
  </section><!--END HERO-->

<main id="main">
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h3 style="color: #005542;"><b>Testimonials</b></h3>
            <h4 style="color: #005542;">Hear what our beneficiaries have to say</h4>
          </header>
  
          <div class="row gy-4">
            @foreach($testimonials as $testimony)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="{{asset('storage/'. $testimony->picture)}}" class="img-fluid" alt="">
                </div>
                <div class="member-info p-2">
                  <h4>{{$testimony->name}}</h4>
                  <p class="text-justify">{{$testimony->body}}</p>
                </div>
              </div>
            </div>
            @endforeach
  
  
          </div>
        </div>
  
      </section><!-- End Team Section -->
</main>