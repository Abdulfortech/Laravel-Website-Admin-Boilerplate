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
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h3 style="color: #005542;"><b>Our Blog Articles</b></h3>
            <h4 style="color: #005542;">Articles sssssssss s  s  s s s </h4>
          </header>

          <div class="row">
            <div class="col-lg-8 entries mx-auto">
              
              @foreach ($blogs as $blog)
                <article class="entry">
    
                  <div class="entry-img">
                    <img src="{{asset('storage/' . $blog->picture)}}" alt="" class="img-fluid">
                  </div>
    
                  <h2 class="entry-title">
                    <a href="#">{{$blog->title}}</a>
                  </h2>
    
                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{$blog->author}}</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{substr($blog->created_at,0,10)}}</time></a></li>
                      {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> --}}
                    </ul>
                  </div>
    
                  <div class="entry-content">
                    <p>
                      {!!substr($blog->body,0,100)!!}
                    </p>
                    <div class="read-more">
                      <a href="#" class="btn-get-started">Read More</a>
                    </div>
                  </div>
    
                </article><!-- End blog entry -->
              @endforeach
              {{-- <div class="blog-pagination">
                <ul class="justify-content-center">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                </ul>
              </div>
   --}}
            </div><!-- End blog entries list -->
  
          </div>
        </div>
    </section>

</main>