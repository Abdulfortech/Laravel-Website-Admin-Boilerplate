<!DOCTYPE html>
@extends('layout.appLayout')
@section('title', 'Volunteers')
@php( $page = 'Volunteers')
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
        <div class="col-md-7 mx-auto">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h4 class="text-center">Add Volunteer</h4>
            </div>
            <div class="card-body px-2 pt-0 pb-2">
                <form id="addClientForm" action="{{route('volunteer.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Name</label>
                                <input class="form-control" name="name" id="addClientName" type="text" required>
                                @error('name')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">State</label>
                                <select class="form-control" name="state" id="addClientType" required>
                                    <option selected value="">Choose..</option>
                                    @include('components.state-list')
                                </select>
                                @error('state')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Phone Number</label>
                                <input class="form-control" type="text" name="phone" id="addClientPhone">
                                @error('phone')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Email</label>
                                <input class="form-control" type="text" name="email" id="addClientPhone" required>
                                @error('email')
                                <span class="text-danger small">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-success" id="addClientButton">Submit</button>
                    </center>
                </form>
            </div>
          </div>
        </div>
      </div>

      @include('components.footer')
    </div>
  </main>
