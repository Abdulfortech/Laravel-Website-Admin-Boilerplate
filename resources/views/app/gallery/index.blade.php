<!DOCTYPE html>
@extends('layout.appLayout')
@section('title', 'Gallery')
@php( $page = 'Gallery')
@section('contents')
<style>
    /*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio #portfolio-flters {
  padding: 0;
  margin: 0 auto 25px auto;
  list-style: none;
  text-align: center;
  background: white;
  border-radius: 50px;
  padding: 2px 15px;
}

.portfolio #portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 8px 20px 10px 20px;
  font-size: 15px;
  font-weight: 600;
  line-height: 1;
  color: #444444;
  margin: 0 4px 8px 4px;
  transition: 0.3s;
  border-radius: 50px;
  border: 1px solid #fff;
}

.portfolio #portfolio-flters li:hover,
.portfolio #portfolio-flters li.filter-active {
  color: #B4D100;
  border-color: #B4D100;
}

.portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}

.portfolio .portfolio-wrap {
  transition: 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
  background: rgba(255, 255, 255, 0.75);
}

.portfolio .portfolio-wrap::before {
  content: "";
  background: rgba(255, 255, 255, 0.75);
  position: absolute;
  left: 30px;
  right: 30px;
  top: 30px;
  bottom: 30px;
  transition: all ease-in-out 0.3s;
  z-index: 2;
  opacity: 0;
}

.portfolio .portfolio-wrap img {
  transition: 1s;
}

.portfolio .portfolio-wrap .portfolio-info {
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  text-align: center;
  z-index: 3;
  transition: all ease-in-out 0.3s;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.portfolio .portfolio-wrap .portfolio-info::before {
  display: block;
  content: "";
  width: 48px;
  height: 48px;
  position: absolute;
  top: 35px;
  left: 35px;
  border-top: 3px solid rgba(1, 41, 112, 0.2);
  border-left: 3px solid rgba(1, 41, 112, 0.2);
  transition: all 0.5s ease 0s;
  z-index: 9994;
}

.portfolio .portfolio-wrap .portfolio-info::after {
  display: block;
  content: "";
  width: 48px;
  height: 48px;
  position: absolute;
  bottom: 35px;
  right: 35px;
  border-bottom: 3px solid rgba(1, 41, 112, 0.2);
  border-right: 3px solid rgba(1, 41, 112, 0.2);
  transition: all 0.5s ease 0s;
  z-index: 9994;
}

.portfolio .portfolio-wrap .portfolio-info h4 {
  font-size: 20px;
  color: darkgreen;
  font-weight: 700;
}

.portfolio .portfolio-wrap .portfolio-info p {
  color: darkgreen;
  font-weight: 600;
  font-size: 14px;
  text-transform: uppercase;
  padding: 0;
  margin: 0;
}

.portfolio .portfolio-wrap .portfolio-links {
  text-align: center;
  z-index: 4;
}

.portfolio .portfolio-wrap .portfolio-links a {
  color: #fff;
  background: darkgreen;
  margin: 10px 2px;
  width: 36px;
  height: 36px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  transition: 0.3s;
}

.portfolio .portfolio-wrap .portfolio-links a i {
  font-size: 24px;
  line-height: 0;
}

.portfolio .portfolio-wrap .portfolio-links a:hover {
  background: #B4D100;
}

.portfolio .portfolio-wrap:hover img {
  transform: scale(1.1);
}

.portfolio .portfolio-wrap:hover::before {
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 1;
}

.portfolio .portfolio-wrap:hover .portfolio-info {
  opacity: 1;
}

.portfolio .portfolio-wrap:hover .portfolio-info::before {
  top: 15px;
  left: 15px;
}

.portfolio .portfolio-wrap:hover .portfolio-info::after {
  bottom: 15px;
  right: 15px;
}

</style>
<div class="min-height-300 bg-success position-absolute w-100"></div>
    @include('components.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('components.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="container text-center"><h2 class="text-white">Gallery</h2></div>
      <!-- statistics -->
      <div class="row">
        <!-- stats card -->
        <div class="col-xl-4 col-sm-6  mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">All Albums</p>
                    <h5 class="font-weight-bolder">
                      {{number_format($albums->count(), 0, ',')}}
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder"></span>
                      All Albums
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="fa fa-image text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- stats card -->
        <div class="col-xl-4 col-sm-6  mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">All Images</p>
                    <h5 class="font-weight-bolder">
                      {{number_format($allGallery, 0, ',')}}
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder"></span>
                      All Images
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="fa fa-image text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- stats card -->
        <div class="col-xl-4 col-sm-6  mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Active Images</p>
                    <h5 class="font-weight-bolder">
                      {{number_format($activeGallery, 0, ',')}}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="fa fa-image text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col-12">
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder"></span>
                      Active Images
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6 class="float-start">Albums</h6>
              <a href="{{route('gallery.add')}}" class="float-end btn btn-success btn-sm" class="float-end btn btn-success"><i class="fa fa-plus"></i> Add </a>
              {{-- <a href="{{route('gallery.printAll')}}" class="float-end btn btn-success btn-sm mx-2"> <i class="fa fa-print"></i> Print </a> --}}
            </div>
            <div class="card-body px-2 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="datatable">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary font-weight-bolder">S/N</th>
                      <th class="text-uppercase text-secondary font-weight-bolder">Name</th>
                      <th class="text-uppercase text-secondary font-weight-bolder">Body</th>
                      <th class="text-uppercase text-secondary font-weight-bolder">Status</th>
                      <th class="text-uppercase text-secondary font-weight-bolder">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($count = 1)
                      @foreach($albums as $album)
                      <tr>
                          <td>{{$count}}</td>
                          <td>{{$album->project->title}}</td>
                          <td>{{number_format($album->total)}}</td>
                          <td>{{$album->status}}</td>
                          <td>
                            <a href="{{route('gallery.view',[$album->projectID])}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                          </td>
                      </tr>
                      @php($count++)
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- ======= Portfolio Section ======= -->
          <div class="card portfolio mb-4">
            <div class="card-header pb-0">
              <h6 class="float-start">Albums</h6>
              <a href="{{route('gallery.add')}}" class="float-end btn btn-success btn-sm" class="float-end btn btn-success"><i class="fa fa-plus"></i> Add </a>
              {{-- <a href="{{route('gallery.printAll')}}" class="float-end btn btn-success btn-sm mx-2"> <i class="fa fa-print"></i> Print </a> --}}
            </div>

            <div class="card-body px-2 pt-0 pb-2">
                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($gallery as $picture)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset('storage/' . $picture->picture)}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{$picture->project->title}}</h4>
                                <div class="portfolio-links">
                                    <a href="{{asset('storage/' . $picture->picture)}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="{{$picture->project->title}}"><i class="fa fa-eye" style="font-size:15px"></i></a>
                                    <a href="{{route('gallery.edit',$picture->id)}}" title="More Details"><i class="fa fa-edit" style="font-size:15px"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/kaid/bg (2).jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Ramadan Feeding</h4>
                        <div class="portfolio-links">
                            <a href="assets/img/kaid/bg (2).jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Ramadan Feeding"><i class="bi bi-plus"></i></a>
                            <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/kaid/bg (3).jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Ramadan Feeding</h4>
                        <div class="portfolio-links">
                            <a href="assets/img/kaid/bg (3).jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Ramadan Feeding"><i class="bi bi-plus"></i></a>
                            <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/kaid/bg (4).jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Ramadan Feeding</h4>
                        <div class="portfolio-links">
                            <a href="assets/img/kaid/bg (4).jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Ramadan Feeding"><i class="bi bi-plus"></i></a>
                            <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/kaid/bg (5).jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Ramadan Feeding</h4>
                        <div class="portfolio-links">
                            <a href="assets/img/kaid/bg (5).jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Ramadan Feeding"><i class="bi bi-plus"></i></a>
                            <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/kaid/bg (6).jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Ramadan Feeding</h4>
                        <div class="portfolio-links">
                            <a href="assets/img/kaid/bg (6).jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Ramadan Feeding"><i class="bi bi-plus"></i></a>
                            <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                        </div>
                        </div>
                    </div>
                    </div>

                </div>

            </div>

          </div><!-- End Portfolio Section -->

        </div>
      </div>
      @include('components.footer')
    </div>
  </main>
