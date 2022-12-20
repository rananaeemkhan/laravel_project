@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card mt-2 bordered border-4 border-dark" style="background-color:#353c48;">
        <div class="card-header">
            <div class="row p-1">
                <div class="col col-md-9">
                    <h1 class="text-secondary">Edit Details</h1>
                </div>
                <div class="col-md-3">
                    <a href="{{ asset('newtable')}}" class="btn btn-danger btn-sm">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="user_update-{{ $user->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
                <div class="mb-3">
                    <label for="" class="form-label text-info">Task Name</label>
                    <input type="text" name="name" class="form-control bg-dark text-info
                    outline-none border-0" placeholder="Enter your task" value="{{ $user->name}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label text-info">Progress</label>
                    <input type="text" class="form-control bg-dark text-info outline-none
                    border-0" name="progress" placeholder="Make sure your Progress" value="{{ $user->progress}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label text-info">Members</label>
                    <input type="file" class="form-control bg-dark text-info outline-none
                    border-0" name="members" value="{{ $user->name}}">
                    <img src="{{ asset('uploads/images/'.$user->members) }}"
              alt="" width="100px" height="70px">
                </div>


                <div class="mb-3">
                    <label for="" class="form-label text-info">Due Date</label>
                    <input type="date" class="form-control bg-dark text-info outline-none
                    border-0" name="date" value="{{ $user->date}}">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
