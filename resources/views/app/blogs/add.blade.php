<!DOCTYPE html>
@extends('layout.appLayout')
@section('title', 'Write a Blog Article')
@php( $page = 'Sponsors')
@section('contents')
@push('style')
<link href="{{asset('assets/vendors/summernote-0.8.18-dist/summernote-bs4.css')}}" rel="stylesheet">
@endpush
<div class="min-height-300 bg-success position-absolute w-100"></div>
    @include('components.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('components.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="container text-center"><h2 class="text-white">Blogs</h2></div>
      <div class="row">
        <div class="col-md-9 mx-auto">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h4 class="text-center">Write a Blog Article</h4>
            </div>
            <div class="card-body pt-0 pb-2">
                <form id="addClientForm" enctype="multipart/form-data" action="{{route('blog.add')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group my-0">
                                <label for="example-text-input" class="form-control-label">Title</label>
                                <input class="form-control" name="title" id="addFtitle" type="text" required>
                                @error('title')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group my-0">
                                <label for="example-text-input" class="form-control-label">Author</label>
                                <input class="form-control" name="author" id="addFauthor" type="text" required>
                                @error('author')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group my-0">
                                <label for="optiona">Category </label>
                                <input class="form-control" name="category" id="addFauthor" type="text" required>
                                @error('category')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group my-0">
                                <label for="example-text-input" class="form-control-label">Image</label>
                                <input class="form-control" type="file" name="image" id="addimage" required>
                                @error('image')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group my-0">
                                <label for="example-text-input" class="form-control-label">Body</label>
                                <textarea class="form-control" name="body" id="summernote" required></textarea>
                                @error('body')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                                <div ></div>
                            </div>
                        </div>

                    </div>
                    <center>
                        <button type="submit" class="btn btn-success my-4" id="addAdminButton">Submit</button>
                    </center>
                </form>
            </div>
          </div>
        </div>
      </div>

      @include('components.footer')
    </div>
  </main>

  @push('script')
  <script src="{{asset('assets/vendors/summernote-0.8.18-dist/summernote-bs4.js')}}"></script>
  <script>
    $(document).ready(function() {
    $('#summernote').summernote();
    });
  </script>
  @endpush
