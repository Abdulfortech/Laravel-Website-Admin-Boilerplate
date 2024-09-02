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
    <!-- ======= Project Section ======= -->
    <section id="projects" class="testimonials">

        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h3 style="color: #005542;"><b>Our Projects</b></h3>
          </header>
  
          <div class="testimonials-slider row swiper" data-aos="fade-up" data-aos-delay="200">
            @foreach ($projects as $project)
            <div class="col-lg-4">
                <div class="testimonial-item">
                    <div class="profile mt-auto">
                    <img src="{{asset('storage/'. $project->image)}}" class="testimonial-img" alt="">
                    </div>
                    <br>
                    <div class="profile mt-auto">
                      <h3>{{$project->title}}</h3>
                    </div>
                      <p class="text-dark">
                      {{substr($project->body,0,100)}}
                      </p>
                    <div class="col-md-12">
                      <div class="goal-div">
                          <span class="float-start">Goal:{{number_format($project->target,0,".",",") ." / ". number_format($project->progress,0,".",",") . " (" .$project->target_label .")"}} </span>
                          <span class="float-end"><b class="d-flex-right"> {{$project->status}}</b></span>
                      </div>
                        {{-- <b style="font-size: 11px; color:#B4D100; margin-left: -08px;">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </b> --}}
                    </div>
                    {{-- <div class="progress" style="height: 06px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>&nbsp; --}}
                    <div class="align-items-right mt-4">
                    <a href="#" class="btn-buy float-end">Donate</a>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
  
        </div>
  
      </section><!-- End Testimonials Section -->
</main>