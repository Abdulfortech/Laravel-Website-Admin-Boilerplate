<!DOCTYPE html>
@extends('layout.appLayout')
@section('title', 'Add Impacts')
@php( $page = 'components')
@section('contents')
<div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include('components.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('components.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="container text-center"><h2 class="text-white">Impacts</h2></div>
        <div class="row">
            <div class="col-md-11 mx-auto">
                <div class="card">
                  <div class="card-header pb-0">
                    <div class="d-flex align-items-center ">
                      <h4 class="mb-0 fw-bold">Impacts</h4>
                    </div>
                  </div>
                  <div class="card-body">
                    
                  </div>
                </div>
            </div>
        </div>
  </div>
    <div class="modal" id="addRoleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Role</h4>
                    <button type="button" class="btn-close text-danger" data-bs-dismiss="modal">
                        <i class="fa fa-times" style="font-size:20px;"></i>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form id="addLgaForm" action="{{route('role.add')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Title</label>
                                    <input class="form-control" name="title" id="addTitle" type="text" required>
                                </div>
                            </div>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary" id="addRoleButton">Submit</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
    </div>
  </main>
