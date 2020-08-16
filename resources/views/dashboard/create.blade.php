@extends('layouts.dashboard')

@section('main')
<form action="{{route('dashboard.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="title" class="text-light">Title</label>
        <input type="text" name="title" id="form-title" class="form-control">
    </div>
    <div class="form-row align-items-center">
        <div class="col-auto">
            <label for="firstName" class="text-light">First Name</label>
            <input type="text" name="firstName" id="form-firstName" class="form-control">
        </div>
        <div class="col-auto">
            <label for="lastName" class="text-light">Last Name</label>
            <input type="text" name="lastName" id="form-lastName" class="form-control">
        </div>

    </div>
    <div class="form-group pt-3">
        <label for="tags" class="text-light">Select Tag</label>
        <input list="tags" name="tag">
        <datalist id="tags">
            <option>Politics</option>
            <option>Reviews</option>
            <option>Motivation</option>
            <option>Clap-back</option>
            <option>In My Backyard</option>
        </datalist>
    </div>

    <div class="form-group">
        <label for="post" class="text-light">Post</label>
        <textarea name="post" id="texteditor"></textarea>

    </div>
    <div class="form-group">
        <label for="cover_image" class="text-light">Upload Cover Image</label>
        <input type="file" class="form-control-file text-light" name="cover_image">
    </div>
    <button type="submit" class="btn btn-primary">Post</button>
</form>


@endsection