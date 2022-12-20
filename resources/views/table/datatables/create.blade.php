@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card mt-2 bordered border-4 border-dark" style="background-color:#353c48;">
        <div class="card-header">
            <div class="row p-1">
                <div class="col col-md-8">
                    <h1 class="text-secondary">User Details</h1>
                </div>
                <div class="col col-md-4 mt-2">
                    <a href="{{ asset('newtable') }}" class="btn btn-secondary btn-sm float-end">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="/user_store" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label for="" class="form-label text-info">Task Name</label>
                    <input type="text" name="name" class="form-control bg-dark text-info
                    outline-none border-0" placeholder="Enter your task">
                </div>
                @if($errors->has('name'))
                    <p class="text-warning">{{ $errors->first('name') }}</p>
                @endif
                <div class="mb-3">
                    <label for="" class="form-label text-info">Progress</label>
                    <input type="text" class="form-control bg-dark text-info outline-none
                    border-0" name="progress" placeholder="Make sure your Progress">
                </div>
                @if($errors->has('progress'))
                    <p class="text-warning">{{ $errors->first('progress') }}</p>
                @endif
                <div class="mb-3">
                    <label for="" class="form-label text-info">Members</label>
                    <input type="file" class="form-control bg-dark text-info outline-none
                    border-0" name="members">
                </div>
                @if($errors->has('members'))
                    <p class="text-warning">{{ $errors->first('members') }}</p>
                @endif
                <div class="mb-3">
                    <label for="" class="form-label text-info">Due Date</label>
                    <input type="date" class="form-control bg-dark text-info outline-none
                    border-0" name="date">
                </div>
                @if($errors->has('date'))
                    <p class="text-warning">{{ $errors->first('date') }}</p>
                @endif
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
