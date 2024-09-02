<!DOCTYPE html>
@extends('layout.appLayout')
@section('title', 'Add Sponsor')
@php( $page = 'Sponsors')
@section('contents')
<div class="min-height-300 bg-success position-absolute w-100"></div>
    @include('components.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('components.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="container text-center"><h2 class="text-white">Sponsors</h2></div>
      <div class="row">
        <div class="col-md-9 mx-auto">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h4 class="text-center">Add Sponsor</h4>
            </div>
            <div class="card-body pt-0 pb-2">
                <form id="addClientForm" enctype="multipart/form-data" action="{{route('sponsor.add')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group my-0">
                                <label for="example-text-input" class="form-control-label">Name</label>
                                <input class="form-control" name="name" id="addFname" type="text" required>
                                @error('name')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group my-0">
                                <label for="optiona">Category </label>
                                <select class="form-control" name="category" required>
                                    <option selected value="">Choose..</option>
                                    <option>Individual</option>
                                    <option>Goverment</option>
                                    <option>Company</option>
                                    <option>NGO</option>
                                </select>
                                @error('category')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group my-0">
                                <label for="example-text-input" class="form-control-label">Display(Show in Public)</label>
                                <select name="display" id="display"  class="form-control" >
                                    <option selected value="">Choose..</option>
                                    <option value="1">True</option>
                                    <option value="0">False</option>
                                </select>
                                @error('display')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group my-0">
                                <label for="example-text-input" class="form-control-label">Picture</label>
                                <input class="form-control" type="file" name="picture" id="addPicture" required>
                                @error('picture')
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
