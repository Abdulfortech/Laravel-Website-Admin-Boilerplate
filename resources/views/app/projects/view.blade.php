<!DOCTYPE html>
@extends('layout.appLayout')
@section('title', 'Projects')
@php( $page = 'Projects')
@section('contents')
<div class="min-height-300 bg-success position-absolute w-100"></div>
    @include('components.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('components.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4 p-2">
      @include('components.header')
      <div class="row" id="viewprojectInfo">
        <div class="col-md-12 mx-auto">
          <div class="card mb-4">
            <div class="card-header text-center pb-0">
              <h4 class="text-center">Project Information</h4>
            </div>
            <div class="card-body row pt-0 pb-2 p-3">
                <div class="col-md-5">
                    <img src="{{ asset('storage/' . $project->image) }}" class="project-img-big" alt="project-image">
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <b>Title : </b> {{$project->title}}
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <b>Target : </b> {{number_format($project->target) . " " . $project->target_label}}
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <b>Progress : </b> {{number_format($project->progress) . " " . $project->target_label}}
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <b>Category : </b> {{$project->category}}
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <b>Start Date : </b> {{$project->start_date}}
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <b>End Date : </b> {{$project->end_date}}
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <b>Status : </b> {{$project->status}}
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <b>Created On : </b> <span id="middleName">{{$project->created_at}}</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h5>Description :</h5>
                    <p class="text-justify">{{ $project->body }}</p>
                    <center>
                        <a href="{{route('projects.edit',[$project->id])}}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>

                        @if($project->status !== 'Completed')
                            @if($project->status == 'Active')
                                <a href="{{route('projects.deactivate',[$project->id])}}" class="btn btn-warning"><i class="fa fa-arrow-down"></i> Deactivate</a>
                            @else
                            <a href="{{route('projects.activate',[$project->id])}}" class="btn btn-primary"><i class="fa fa-arrow-up"></i> Activate</a>
                            @endif
                            <a href="{{route('projects.complete',[$project->id])}}" class="btn btn-success"><i class="fa fa-check"></i> Complete</a>
                        @endif
                        <a href="{{route('projects.delete',[$project->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                    </center>
                </div>
            </div>
          </div>
        </div>
      </div>
      @include('components.footer')
    </div>
  </main>
  @push('script')

  @endpush
