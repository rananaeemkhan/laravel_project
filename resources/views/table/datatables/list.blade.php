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
                        <h4>Basic DataTables</h4>
                      </div>
                      <div class="col-md-5">
                        <a href="{{ asset('create_record') }}" class="float-end btn btn-info text-dark">Add New Record</a>
                      </div>
                  </div>
                  @if(session()->has('success'))
                    <div class="alert alert-info text-dark" role="alert">
                      <strong>{{ session()->get('success') }}</strong>
                    </div>
                  @endif
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">S.No</th>
                            <th>User Id</th>
                            <th>Task Name</th>
                            <th>Progress</th>
                            <th>Members</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                          <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td class="align-middle">{{ $user->progress }}</td>
                            <td class="text-center">
                            <a target="_blank" href="{{ asset('uploads/images/'.$user->members) }}"><img src="{{ asset('uploads/images/'.$user->members) }}"
                            alt="" width="70px" height="70px" class="rounded-circle">
                            </td>
                            <td>{{ $user->date }}</td>
                            <td>
                              <div class="badge badge-success badge-
                              shadow">Completed</div>
                            </td>
                            <td>
                              <a href="user_show-{{ $user->id }}" class="btn btn-info btn-sm text-dark"><i class="fa fa-eye" aria-hidden="true"></i></a>

                              <a href="user_edit-{{ $user->id }}" class="btn btn-warning btn-sm text-dark"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                              <a href="user_delete-{{ $user->id }}" class="btn btn-danger btn-sm text-dark" onclick="return confirm('are you sure you want to delete this record')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
  </div>
  @endsection
