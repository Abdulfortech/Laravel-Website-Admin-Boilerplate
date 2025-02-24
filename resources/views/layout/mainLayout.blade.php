
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kaid Charity Foundation - @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('main/img/kaid_charity_logo_dg-transparent.png')}}" rel="icon">
  <link href="{{ asset('main/img/kaid_charity_logo_dg-transparent.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('main/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('main/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('main/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('main/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('main/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('main/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('assets/css/toastr.css') }}">
  <!-- Template Main CSS File -->
  <link href="{{ asset('main/css/style.css')}}" rel="stylesheet">
  {{-- css --}}
  <style>
    .text-justify{
      text-align: justify;
    }

    .blog-item{
      box-sizing: content-box;
      padding: 10px;
      margin: 15px 15px;
      box-shadow: 0px 0 20px rgba(1, 41, 112, 0.1);
      background: #fff;
      height: 350px;
      display: flex;
      flex-direction: column;
      text-align: left;
      transition: 0.3s;
    }
    .blog-item img{
      width: 100%;
      height: 250px;
    }
  </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="">
          <img src="{{asset('main/img/kaid_charity_logo_c.png')}}" width="70" alt="KAID">
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link active" href="/">Home</a></li>
            <li><a class="nav-link" href="/#about">About Us</a></li>
            <li><a class="nav-link" href="/#service">Services</a></li>
            <li><a class="nav-link" href="{{route('main.gallery')}}">Gallery</a></li>
            <li><a class="nav-link" href="{{route('main.projects')}}">Projects</a></li>
            <li><a href="{{route('main.blogs')}}">Blogs</a></li>
            <li><a class="nav-link" href="{{route('main.contact')}}">Contacts</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->

    @yield('contents')

 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-3 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{asset('main/img/kaid_charity_logo_d.png') }}" alt="">
            </a>
            <p>Giving is The Best Charity</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-3 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="{{route('main.index')}}">Home</a></li>
              <li><a href="/#about">About Us</a></li>
              <li><a href="{{route('main.contact')}}">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-3 footer-links">
            <h4>Our Work</h4>
            <ul>
              <li><a href="{{route('main.projects')}}">Projects</a></li>
              <li><a href="{{route('main.gallery')}}">Gallery</a></li>
              <li><a href="{{route('main.blogs')}}">Blog</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-3 footer-links">
            <h4>Get Involved</h4>
            <ul>
              <li><a href="/#volunteer">Volunteer</a></li>
              <li><a href="#">Donate</a></li>
              <li><a href="#">Give Testimony</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              <strong>Phone:</strong> +234 7042 3730 91<br>
              <strong>Email:</strong> kaidcharity@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kaid Charity Foundation</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('main/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('main/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('main/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('main/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('main/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('main/vendor/swiper/swiper-bundle.min.js') }}"></script>
  {{-- <script src="{{ asset('main/vendor/php-email-form/validate.js') }}"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{ asset('main/js/main.js') }}"></script>
  <!-- Toastr js -->
  <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/toastr.js') }}"></script>
  @if (session()->has('message'))
   <script>
            toastr.success("{{ session('message') }}");
    </script>
  @endif

</body>

</html>
