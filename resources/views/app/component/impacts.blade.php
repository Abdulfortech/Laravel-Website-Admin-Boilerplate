<!DOCTYPE html>
@extends('layout.appLayout')
@section('title', 'Impacts')
@php( $page = 'components')
@section('contents')
<div class="min-height-300 bg-success position-absolute w-100"></div>
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
                    @if($state == "add")
                        <form id="addClientForm" enctype="multipart/form-data" action="{{route('components.impacts.add')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group my-0">
                                        <label for="example-text-input" class="form-control-label">Beneficiaries</label>
                                        <input class="form-control" name="beneficiaries" id="addFtitle" type="number" required>
                                        @error('beneficiaries')
                                        <span class="text-danger small">{{ $message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group my-0">
                                        <label for="example-text-input" class="form-control-label">Number of Fund Raisings</label>
                                        <input class="form-control" name="fund_raisings" id="addFfund_raisings" type="number" required>
                                        @error('fund_raisings')
                                        <span class="text-danger small">{{ $message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group my-0">
                                        <label for="example-text-input" class="form-control-label">Number of States</label>
                                        <input class="form-control" type="number" name="state" id="addstate" required>
                                        @error('state')
                                        <span class="text-danger small">{{ $message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group my-0">
                                        <label for="example-text-input" class="form-control-label">Number of LGAs</label>
                                        <input class="form-control" type="number" name="lga" id="addlga" required>
                                        @error('lga')
                                        <span class="text-danger small">{{ $message}}</span>
                                        @enderror
                                        <div ></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group my-0">
                                        <label for="optiona">Years of Work </label>
                                        <input class="form-control" name="years" id="addFauthor" type="number" required>
                                        @error('years')
                                        <span class="text-danger small">{{ $message}}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <center>
                                <button type="submit" class="btn btn-success my-4" id="addAdminButton">Submit</button>
                            </center>
                        </form>
                    @else
                        <form id="addClientForm" enctype="multipart/form-data" action="{{route('components.impacts.edit', [$impact->id])}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group my-0">
                                        <label for="example-text-input" class="form-control-label">Beneficiaries</label>
                                        <input class="form-control" name="beneficiaries" id="addFtitle" type="number" value="{{$impact->beneficiaries}}" required>
                                        @error('beneficiaries')
                                        <span class="text-danger small">{{ $message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group my-0">
                                        <label for="example-text-input" class="form-control-label">Number of Fund Raisings</label>
                                        <input class="form-control" name="fund_raisings" id="addFfund_raisings" type="number" value="{{$impact->fund_raisings}}" required>
                                        @error('fund_raisings')
                                        <span class="text-danger small">{{ $message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group my-0">
                                        <label for="example-text-input" class="form-control-label">Number of States</label>
                                        <input class="form-control" type="number" name="state" id="addstate" value="{{$impact->state}}" required>
                                        @error('state')
                                        <span class="text-danger small">{{ $message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group my-0">
                                        <label for="example-text-input" class="form-control-label">Number of LGAs</label>
                                        <input class="form-control" type="number" name="lga" id="addlga" value="{{$impact->lga}}" required>
                                        @error('lga')
                                        <span class="text-danger small">{{ $message}}</span>
                                        @enderror
                                        <div ></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group my-0">
                                        <label for="optiona">Years of Work </label>
                                        <input class="form-control" name="years" id="addFauthor" type="number" value="{{$impact->years}}" required>
                                        @error('years')
                                        <span class="text-danger small">{{ $message}}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <center>
                                <button type="submit" class="btn btn-success my-4" id="addAdminButton">Submit</button>
                            </center>
                        </form>
                    @endif
                  </div>
                </div>
            </div>
        </div>
  </div>
    @include('components.footer')
    </div>
  </main>
