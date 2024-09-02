<!DOCTYPE html>
@extends('layout.appLayout')
@section('title', 'Blogs')
@php( $page = 'Sponsors')
@section('contents')
<div class="min-height-300 bg-success position-absolute w-100"></div>
    @include('components.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('components.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="container text-center"><h2 class="text-white">Blogs</h2></div>
      <!-- statistics -->
      <div class="row">
        <!-- stats card -->
        <div class="col-xl-4 col-sm-6  mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">All</p>
                    <h5 class="font-weight-bolder">
                      {{number_format($allBlogs, 0, ',')}}
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder"></span>
                      All Blogs
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="fa fa-newspaper text-lg opacity-10" aria-hidden="true"></i>
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
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Active</p>
                    <h5 class="font-weight-bolder">
                      {{number_format($activeBlogs, 0, ',')}}
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder"></span>
                      Active Blogs
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="fa fa-newspaper text-lg opacity-10" aria-hidden="true"></i>
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
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Inactive</p>
                    <h5 class="font-weight-bolder">
                      {{number_format($inactiveBlogs, 0, ',')}}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="fa fa-newspaper text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col-12">
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder"></span>
                      Completed Blogs
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
              <h6 class="float-start">Blogs</h6>
              <a href="{{route('blog.add')}}" class="float-end btn btn-success btn-sm" class="float-end btn btn-success"><i class="fa fa-plus"></i> Add </a>
              {{-- <a href="{{route('blog.printAll')}}" class="float-end btn btn-success btn-sm mx-2"> <i class="fa fa-print"></i> Print </a> --}}
            </div>
            <div class="card-body p-2 pt-0 pb-2">
              <div class="row">
                @if($blogs->count() > 0)
                    @foreach($blogs as $blog)
                        {{-- single blog --}}
                        <div class="col-md-4">
                            <a href="{{route('blog.view', [$blog->id])}}" class="card blog-single">
                                <img src="{{asset('storage/'. $blog->image)}}" alt="">
                                <div class="card-body">
                                    <h6>{{$blog->title}}</h6>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <center><h5>There are no blogs available.</h5></center>
                    </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('components.footer')
    </div>
  </main>
