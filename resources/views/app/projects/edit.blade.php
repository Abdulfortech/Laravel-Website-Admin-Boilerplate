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
            <div class="card-header text-center pb-0">
                @if(isset($project->image))
                    <img src="{{ asset('storage/' . $project->image) }}" class="rounded-circle" alt="employee-image" width="100" height="100">
                @else
                    <i class="ni ni-app" style="font-size: 80px"></i>
                @endif
              <h4 class="text-center">Edit Project</h4>
            </div>
            <div class="card-body px-2 pt-0 pb-2">
                <form id="addProjectForm" enctype="multipart/form-data" action="{{route('projects.edit', [$project->id])}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Title</label>
                                <input class="form-control" name="title" id="addProjecttitle" value="{{$project->title}}" type="text" required>
                                @error('title')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Target(Amount)</label>
                                <input class="form-control" type="number" name="target" value="{{$project->target}}" required>
                                @error('target')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Target Label</label>
                                <input class="form-control" type="text" name="target_label" value="{{$project->target_label}}" required>
                                @error('target_label')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Progress</label>
                                <input class="form-control" type="number" name="progress" placeholder="Enter 0 for starting" value="{{$project->progress}}" min="0" required>
                                @error('progress')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Category</label>
                                <select class="form-control" name="category" id="addProjectCategory" required>
                                    <option>{{$project->category}}</option>
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
                                <input class="form-control" type="date" name="start_date" value="{{$project->start_date}}" required>
                                @error('start_date')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">End Date</label>
                                <input class="form-control" type="date" name="end_date" value="{{$project->end_date}}" required>
                                @error('end_date')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Image</label>
                                <input type="file" class="form-control" name="image" >
                                @error('image')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Description</label>
                                <textarea class="form-control" name="body" id="addProjectStock" rows="5" required>{{$project->body}}</textarea>
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
