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
    <!-- ======= Gallery Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 style="color: #005542;"><b>Gallery</b></h3>
          <h4 style="color: #005542;">Pictures from some of our past projects.</h4>
        </header>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($gallery as $picture)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <img src="{{asset('storage/'. $picture->picture)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>{{$picture->project->title}}</h4>
                      <div class="portfolio-links">
                        <a href="{{asset('storage/'. $picture->picture)}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="{{$picture->alt}}"><i class="bi bi-plus"></i></a>
                        <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>

        </div>

      </div>

    </section><!-- End Gallery Section -->
</main>