<!DOCTYPE html>
@extends('layout.appLayout')
@section('title', 'Components')
@php( $page = 'components')
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
            <!--card -->
            <div class="col-md-4 mb-4">
              <a class="card" href="{{route('business.profile')}}" style="text-decoration: none;">
                <div class="card-body py-4 p-3 d-flex justify-content-center align-items-center" style="height:150px">
                  <div class="col-12 row">
                    <div class="col-4 justify-content-center align-items-center text-center">
                      <i class="fa fa-bank text-success" aria-hidden="true" style="font-size: 30px;"></i>
                    </div>
                    <div class="col-8">
                      <div class="numbers">
                        <h6 class="font-weight-bolder">
                          Organization Profile
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!--card -->
            <div class="col-md-4 mb-4">
              <a class="card" href="{{route('components.impacts')}}" style="text-decoration: none;">
                <div class="card-body py-4 p-3 d-flex justify-content-center align-items-center" style="height:150px">
                  <div class="col-12 row">
                    <div class="col-4 justify-content-center align-items-center text-center">
                      <i class="fa fa-bank text-success" aria-hidden="true" style="font-size: 30px;"></i>
                    </div>
                    <div class="col-8">
                      <div class="numbers">
                        <h6 class="font-weight-bolder">
                          Organization Impacts
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          <!--card -->
          <div class="col-md-4 mb-4">
            <a class="card" href="{{route('components.category')}}" style="text-decoration: none;">
              <div class="card-body py-4 p-3 d-flex justify-content-center align-items-center" style="height:150px">
                <div class="col-12 row">
                  <div class="col-4 justify-content-center align-items-center text-center">
                    <i class="fa fa-sitemap text-success" aria-hidden="true" style="font-size: 30px;"></i>
                  </div>
                  <div class="col-8">
                    <div class="numbers">
                      <h6 class="font-weight-bolder">
                        Categories
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
  </div>
  @include('components.footer')
    </div>
  </main>
