@extends('layouts.header')
@extends('layouts.footer')
@extends('layouts.sidebar')
@section('main')
<!-- <div class="loader"></div>--->
<div id="app">
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
              <h4 class="page-title m-b-0">Data Tables</h4>
            </li>
            <li class="breadcrumb-item">
              <a href="index-2.html">
                <i data-feather="home"></i></a>
            </li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item">Data Tables</li>
          </ul>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <div class="col-md-7">
                    <h2>User Details</h2>
                      </div>

                      <div class="col-md-5 mt-2">
                      <a href="{{ asset('newtable')}}" class="btn btn-info text-dark btn-sm
                    float-end">View All</a>
                      </div>
                  </div>
                  <!-- @if(session()->has('success'))
                    <div class="alert alert-info text-dark" role="alert">
                      <strong>{{ session()->get('success') }}</strong>
                    </div>
                  @endif -->
                  <div class="card-body">
                    <div class="table-responsive">
                    <div class="container">
                        <div class="card mt-2">
                            <form action="/user_show/{{ $user->id }}" method="GET"
                            enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="row mb-3 p-2">

                                        <label class="col-sm-2 col-label-form"><h4
                                         class="text-warning fw-bold">Task
                                          Name</h4></label>
                                        <div class="col-sm-10 ">
                                            <h4 class="text-info">{{ $user->name }}</h4>
                                        </div>
                                    </div>
                                    <div class="row mb-3 p-2">
                                        <label class="col-sm-2 col-label-form">
                                        <h4
                                         class="text-warning fw-bold">Progress</h4></label>
                                        <div class="col-sm-10">
                                        <h4 class="text-info">{{ $user->progress }}</h4>
                                        </div>
                                    </div>
                                    <div class="row mb-3 p-2 ">
                                        <label class="col-sm-2 col-label-form mt-5">
                                        <h4 class="text-warning fw-bold">Members</h4></label>
                                        <div class="col-sm-10">
                                            <img src="{{ asset('uploads/images/'.$user->members) }}" alt="" width="150px" height="150px">
                                        </div>
                                    </div>
                                    <div class="row mb-3 p-2">
                                        <label class="col-sm-2 col-label-form"><h4
                                         class="text-warning fw-bold">Due
                                            Date</h4></label>
                                        <div class="col-sm-10">
                                        <h4 class="text-info">{{ $user->date }}</h4>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
  </div>
  @endsection
