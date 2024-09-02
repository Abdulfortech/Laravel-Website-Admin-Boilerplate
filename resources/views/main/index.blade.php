<!DOCTYPE html>
<link rel="icon" type="image/jpg" href="https://res.cloudinary.com/dqxaizgsd/image/upload/c_thumb,w_200,g_face/v1717573934/Logo/kaid/sh3fetidm22yf1ctpvk5.jpg">
@extends('layout.mainLayout')
@section('title', 'Home')
@php( $page = 'index')
@section('contents')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Giving is </h1>
          <h2 data-aos="fade-up" data-aos-delay="400">The Best Charity</h2>
          <h3 data-aos="fade-up" data-aos-delay="400">Be a part of something beneficial.</h3>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Donate</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('main/img/kaid/bg (1).jpeg')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about bg-white">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-11 mx-auto d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <h3 class="text-center">Who Are We ?</h3>
              <p>
                KAID charity is a non-governmental organisation founded by some muslim members of the community with the aim of helping muslims
                  that are in need. Allahy says in Quran 2 verse 227 "Those who belive, and do deeds of righteousness, and establish regular prayers
                  and regular charity, will have their reward with their Lord. On them shall be no fear, nor shall they grieve."
              </p>
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Mission & Vision Section ======= -->
    <section id="features" class="features">

      <div class="container p-0" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-6">
            <img src="{{asset('main/img/kaid/bg (2).jpg')}}" class="img-fluid features-img" alt="">
          </div>

          <div class="col-lg-6 mt-lg-0 d-flex">
             <div class="row py-4 gy-4">
              <h3 style="color:#005542"><b>Our Mission</b></h3>

              <div class="mission col-md-12" data-aos="zoom-out" data-aos-delay="200">
                <div class="d-flex align-items-left">
                  <p>KAID charity's goal is helping people (mothers, needy students, orphans) in dire need need of assistance in providing
                    solutions to important matters such as raising funds, etc. We also help in setting up a channel through which the needy
                    get access to basic amenities of life. Distribution of food and clothing parcels donated through the organisation.</p>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->

        <div class="row">

          <div class="col-lg-6 mt-lg-0 d-flex">
            <div class="row py-4 gy-4">
              <div class="vision col-md-12" data-aos="zoom-out" data-aos-delay="200">
                <br>
                <h3><b>Our Vision</b></h3>
                <div class="d-flex align-items-left">
                  <p>Our vision focuses on impactin lives through humintarian services like food and charity drive.
                      Kaid Charity intends to promoting the act of charity amongst people. And we also make sure we help
                      in fostering a brighter, more inclusive future for all.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <img src="{{asset('main/img/kaid/bg (3).jpg')}}" class="img-fluid features-img" alt="">
          </div>

        </div> <!-- / row -->


      </div>

    </section><!-- End Features Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <header class="section-header">
        <h3 style="color: #005542;"><b>Our Impact</b></h3>
      </header>
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <center>
                <i class="bi bi-people"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="{{$impact->beneficiaries}}" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Beneficiaries</p>
                </div>
              </center>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <center>
                <i class="bi bi-cash-stack"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="{{$impact->fund_raisings}}" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Fund Rasings</p>
                </div>
              </center>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <center>
                <i class="bi bi-geo"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="{{$impact->state}}" data-purecounter-duration="1" class="purecounter"></span>
                  <p>States</p>
                </div>
              </center>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <center>
                <i class="bi bi-hourglass-split"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="{{$impact->years}}" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Years of Service</p>
                </div>
              </center>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Project Section ======= -->
    <section id="projects" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 style="color: #005542;"><b>Our Projects</b></h3>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">
            @foreach ($projects as $project)

                <div class="swiper-slide">
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
                </div><!-- End testimonial item -->
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->



    <!-- ======= services Section ======= -->
    <section id="service" class="service" style="margin-top: -10%;">

      <div class="container p-0" data-aos="fade-up">

        <!-- Feature Icons -->
        <div class="row service-icons" data-aos="fade-up">

          <header class="section-header">
            <h3 style="color: #005542;"><b>Our Services</b></h3>
          </header>
          <div class="row">

            <div class="col-xl-6 mb-3 text-center" data-aos="fade-right" data-aos-delay="100">
              <img src="{{asset('main/img/kaid/bg (5).jpeg')}}" class="img-fluid service-img" alt="">
            </div>

            <div class="col-xl-6 d-flex content">
              <div class="row align-self-center gy-4">

                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="ri-star-line"></i>
                  <div>
                    <h4>Orphans</h4>
                    <p>We offer services to orphans by crowdfunding to support their education</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="ri-star-line"></i>
                  <div>
                    <h4>Ramadan Feeding</h4>
                    <p>We offer services to help the fasting muslims break their fast and those in need.</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="ri-star-line"></i>
                  <div>
                    <h4>Widow Support</h4>
                    <p>We offer services to widows by crowdfunding to support their family.</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="ri-star-line"></i>
                  <div>
                    <h4>Prison Inmates</h4>
                    <p>We offer services to muslim prison inmates to support and release them.</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="ri-star-line"></i>
                  <div>
                    <h4>Ramadan Feeding</h4>
                    <p>We offer services to hepl the fasting muslims break their fast and those in need.</p>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div><!-- End Feature Icons -->

      </div>

    </section><!-- End Services Section -->

    <!-- ======= Help Section ======= -->
    <section id="pricing" class="pricing">

      <header class="section-header">
        <h2 style="color: #005542;"><b>How can you be of help ?</b></h2>
        <h3 style="color: #005542;">Donating your money is not the only way you can support us</3>
      </header>

      <div class="container" data-aos="fade-up">


        <header class="section-header">
          <h2></h2>
          <p></p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <center>
                <span class="badge p-3 d-flex align-items-center justify-content-center badge-pill rounded-circle" >
                  <i class="bi bi-alarm-fill"></i>
                </span>
              </center><br>
              <h2 style="color: #B4D100;">Give your time</h2>
              <p>Help us share and repost our crowdfunding flyer always. This goes a long way to get fund!</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <center>
                <span class="badge p-3 d-flex align-items-center justify-content-center badge-pill rounded-circle" >
                  <i class="bi bi-cash-stack"></i>
                </span>
              </center><br>
              <h2 style="color: #B4D100;">Give your money</h2>
              <p>Your donation will go a long way in feeding, sponsoring and supporting the muslim Ummah.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="box">
              <center>
                <span class="badge p-3 d-flex align-items-center justify-content-center badge-pill rounded-circle" >
                  <i class="bi bi-cash-stack"></i>
                </span>
              </center>

              <h2 style="color: #B4D100;">Give your skill</h2><br>
              <p>Attend our program events and help us in disseminating our services to the Ummah. Come, lets earc reward!</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Help Section -->

    <!-- ======= Volunteer Section ======= -->
    <section id="volunteer" class="contact home-contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 style="color: #B4D100;"><b>Want to be of help ?</b></h3>
          <h4 style="color: #fff;">Would you like to volunteer in any of our appeal. If yes fill the information.</h4>
        </header>

          <div class="col-lg-12" style="background-color: #005542;">
            <form action="{{route('main.volunteer')}}" style="background-color: #005542;" method="post" class="php-email-form">
              @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="FullName" required>
                  @error('name')
                  <span class="text-danger small">{{ $message}}</span>
                  @enderror
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                  @error('email')
                  <span class="text-danger small">{{ $message}}</span>
                  @enderror
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="state" placeholder="State" required>
                  @error('state')
                  <span class="text-danger small">{{ $message}}</span>
                  @enderror
                </div>

                <div class="col-md-6">
                  <input type="number" class="form-control" name="phone" placeholder="Phone Number" required>
                  @error('phone')
                  <span class="text-danger small">{{ $message}}</span>
                  @enderror
                </div>

                <div class="col-md-12 text-center">
                  @if (session()->has('message-volunteer'))
                    <div class="sent-message">{{ session('message-volunteer') }}. Thank you!</div>
                  @endif
                  <button type="submit">Volunteer</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Volunteer Section -->

    <!-- ======= Supponsors Section ======= -->
    <section id="sponsors" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 style="color: #005542;"><b>Our Sponsors</b></h3>
          <h4 style="color: #005542;">Some of our sponsors we can't do this without them.</h4>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            @foreach($sponsors as $sponsor)
            <div class="swiper-slide"><img src="{{asset('storage/'. $sponsor->picture)}}" class="img-fluid" alt="{{$sponsor->name}}"></div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->

    
    <!-- ======= Gallery Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 style="color: #005542;"><b>Gallery</b></h3>
          <h4 style="color: #005542;">Picture of some of our past projects.</h4>
        </header>

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
        <div class="col-12 mt-4">
          <center>
            <a href="{{route('main.gallery')}}" class="general-btn text-white" >View More</a>
          </center>
        </div>

      </div>

    </section><!-- End Gallery Section -->

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
        <div class="col-12 mt-4">
          <center>
            <a href="{{route('main.testimonials')}}" class="general-btn text-white" >Read More</a>
          </center>
        </div>
      </div>

    </section><!-- End Team Section -->