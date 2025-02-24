<!DOCTYPE html>
@extends('layout.appLayout')
@section('title', 'Projects')
@php( $page = 'Projects')
@section('contents')
<style>


.image-preview {
    width: 150px;
    height: 150px;
    border: 2px solid #ddd;
    background-size: cover;
    background-position: center;
}
</style>
<div class="min-height-300 bg-success position-absolute w-100"></div>
    @include('components.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('components.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      @include('components.header')
      <div class="row">
        <div class="col-md-9 mx-auto">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h4 class="text-center">Add Project</h4>
            </div>
            <div class="card-body pt-0 pb-2">
                <form id="addProjectForm" enctype="multipart/form-data" action="{{route('projects.add')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Title</label>
                                <input class="form-control" name="title" id="addProjecttitle" type="text" required>
                                @error('title')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Target(Amount)</label>
                                <input class="form-control" type="number" name="target" required>
                                @error('target')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Target Label</label>
                                <input class="form-control" type="text" name="target_label" required>
                                @error('target_label')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Progress</label>
                                <input class="form-control" type="number" name="progress" placeholder="Enter 0 for starting" min="0" required>
                                @error('progress')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Category</label>
                                <select class="form-control" name="category" id="addProjectCategory" required>
                                    <option selected value="">Choose..</option>
                                    <option>Feeding</option>
                                    <option>Finance</option>
                                    <option>Freedom</option>
                                    <option>Education</option>
                                </select>
                                @error('category')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Start Date</label>
                                <input class="form-control" type="date" name="start_date" required>
                                @error('start_date')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">End Date</label>
                                <input class="form-control" type="date" name="end_date" required>
                                @error('end_date')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Image</label>
                                <input type="file" class="form-control" name="image"  required>
                                @error('image')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Description</label>
                                <textarea class="form-control" name="body" id="addProjectStock" required></textarea>
                                @error('body')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-success" id="addProjectButton">Submit</button>
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
  <script>
    function displayImage(input) {
        const preview = document.getElementById('imagePreview1');
        const file = input.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener('load', function () {
                preview.style.backgroundImage = `url(${reader.result})`;
            });

            reader.readAsDataURL(file);
        } else {
            preview.style.backgroundImage = 'none';
        }
    }

  </script>
  @endpush
