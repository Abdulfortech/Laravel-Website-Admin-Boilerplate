<!DOCTYPE html>
<link rel="icon" type="image/jpg" href="https://res.cloudinary.com/dqxaizgsd/image/upload/c_thumb,w_200,g_face/v1717573934/Logo/kaid/sh3fetidm22yf1ctpvk5.jpg">
@extends('layout.appLayout')
@section('title', 'Dashboard')
@php( $page = 'Dashboard')
@section('contents')
<div class="min-height-300 bg-success position-absolute w-100"></div>
    @include('components.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('components.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        @include('components.header')
      <div class="row">
        <!-- stats card -->
        <div class="col-xl-3 col-sm-6  mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Admins</p>
                    <h5 class="font-weight-bolder">
                      {{number_format($allAdmins)}}
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">
                        {{number_format($allAdmins)}}</span>
                      Total Admins
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="fa fa-users text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- stats card -->

        <!-- stats card -->
        <div class="col-xl-3 col-sm-6  mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Volunteers</p>
                    <h5 class="font-weight-bolder">
                      {{number_format($allVolunteers)}}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="fa fa-users text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col-12">
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">{{number_format($allVolunteers)}}</span>
                      Total Volunteers
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- stats card -->
        <div class="col-xl-3 col-sm-6  mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Projects</p>
                    <h5 class="font-weight-bolder">
                      {{number_format($allProjects)}}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="fa fa-briefcase text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col-12">
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">{{number_format($allProjects)}}</span>
                      Total Projects
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- stats card -->
        <div class="col-xl-3 col-sm-6  mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Donations</p>
                    <h5 class="font-weight-bolder">
                      {{-- {{number_format($allDonations)}} --}}
                      0
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="fa fa-credit-card text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col-12">
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">
                        {{-- {{number_format($allDonations)}} --}}
                    </span>
                      Total Donations
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- stats card -->
        <div class="col-xl-3 col-sm-6  mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Sponsors</p>
                    <h5 class="font-weight-bolder">
                      {{number_format($allSponsors)}}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="fa fa-briefcase text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col-12">
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">{{number_format($allSponsors)}}</span>
                      Total Sponsors
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- stats card -->
        <div class="col-xl-3 col-sm-6  mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Testimonials</p>
                    <h5 class="font-weight-bolder">
                      {{number_format($allTestimonials)}}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="fa fa-piggy-bank text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col-12">
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">{{number_format($allTestimonials)}}</span>
                      Total Testimonials
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- stats card -->
        <div class="col-xl-3 col-sm-6  mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Albums</p>
                    <h5 class="font-weight-bolder">
                      {{number_format($allAlbums)}}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="fa fa-credit-card text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col-12">
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">{{number_format($allGallery)}}</span>
                      Total Images
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  @include('components.footer')
    </div>
  </main>
