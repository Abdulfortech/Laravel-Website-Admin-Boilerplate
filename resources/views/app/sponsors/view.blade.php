<!DOCTYPE html>
@extends('layout.appLayout')
@section('title', 'Sponsors')
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
      <div class="row" id="viewsponsorInfo">
        <div class="col-md-9 mx-auto">
          <div class="card mb-4">
            <div class="card-header text-center pb-0">
                @if(isset($sponsor->picture))
                    <img src="{{ asset('storage/' . $sponsor->picture) }}" class="rounded-circle" alt="sponsor-image" width="150" height="150">
                @else
                    <i class="far fa-user-circle" style="font-size: 80px"></i>
                @endif
              <h4 class="text-center">Sponsor Information</h4>
            </div>
            <div class="card-body pt-0 pb-2">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <b>Name : </b> <span id="firstName">{{$sponsor->name}}</span>
                            </li>
                        </ol>
                    </div>
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <b>Category : </b> <span id="middleName">{{$sponsor->category}}</span>
                            </li>
                        </ol>
                    </div>
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <b>Display : </b> <span id="lastName">{{($sponsor->display == 1)? "True": "False"}}</span>
                            </li>
                        </ol>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <b>Status : </b> <span id="middleName">{{$sponsor->status}}</span>
                            </li>
                        </ol>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <b>Created On : </b> <span id="middleName">{{$sponsor->created_at}}</span>
                            </li>
                        </ol>
                    </div>
                </div>
                <center>
                    <a href="{{route('sponsor.edit',[$sponsor->id])}}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                    <a href="{{route('sponsor.delete',[$sponsor->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
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
