<!DOCTYPE html>
@extends('layout.appLayout')
@section('title', 'edit Image')
@php( $page = 'Gallerys')
@section('contents')
<div class="min-height-300 bg-success position-absolute w-100"></div>
    @include('components.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('components.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="container text-center"><h2 class="text-white">Gallery</h2></div>
      <div class="row">
        <div class="col-md-9 mx-auto">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h4 class="text-center">Update Image</h4>
            </div>
            <div class="card-body pt-0 pb-2">
                <img src="{{asset('storage/'. $gallery->picture)}}" class="gallery-view" alt="">
                <form id="addClientForm" enctype="multipart/form-data" action="{{route('gallery.edit', $gallery->id)}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group my-0">
                                <label for="example-text-input" class="form-control-label">Project(Album)</label>
                                <select class="form-control" name="project" id="addProjectCategory">
                                    <option value="{{$gallery->id}}">{{$gallery->project->title}}</option>
                                    @foreach($projects as $project)
                                        <option value="{{$project->id}}">{{$project->title}}</option>
                                    @endforeach
                                </select>
                                @error('project')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group my-0">
                                <label for="example-text-input" class="form-control-label">Image</label>
                                <input class="form-control" type="file" name="pictures" id="addPicture">
                                @error('pictures')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group my-0">
                                <label for="optiona">Body(150 Characters) </label>
                                <textarea class="form-control" name="alt" rows="3" maxlength="150" required>{{$gallery->alt}}</textarea>
                                @error('alt')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
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
