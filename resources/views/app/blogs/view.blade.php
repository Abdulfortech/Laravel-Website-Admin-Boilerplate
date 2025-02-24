<!DOCTYPE html>
@extends('layout.appLayout')
@section('title', "Blog Article")
@php( $page = 'Sponsors')
@section('contents')
<div class="min-height-300 bg-success position-absolute w-100"></div>
    @include('components.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('components.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="container text-center"><h2 class="text-white">Blog Article</h2></div>
      <div class="row" id="viewsponsorInfo">
        <div class="col-md-9 mx-auto">
          <div class="card blog-view mb-4">
            <div class="card-header text-center pb-0">

              <h4 class="text-center">{{$blog->title}}</h4>
              <p>
                <span class="m-2"><i class="fa fa-user"></i> {{$blog->author}}</span>
                <span class="m-2"><i class="fa fa-sitemap"></i> {{$blog->category}}</span>
                <span class="m-2"><i class="fa fa-calendar"></i> {{substr($blog->created_at,0,10)}}</span>
              </p>
            </div>
            <div class="card-body pt-0 pb-2">
                <img src="{{asset('storage/'. $blog->image )}}" alt="">
                <div class="text-justify my-3">
                    {!!$blog->body!!}
                </div>
                <center>
                    <a href="{{route('blog.edit',[$blog->id])}}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                    <a href="{{route('blog.delete',[$blog->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                </center>
            </div>
          </div>
        </div>
      </div>
      @include('components.footer')
    </div>
  </main>
  @push('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

@endpush
