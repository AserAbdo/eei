@extends('dashboard.app')
@section('content')
    <div class="main-content">
        <form class="settings-form" action="{{ route('media.gallery.categories.create') }}" method="POST">
            <br>
            <br>
            @csrf
            <div class="form-group mb-4">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="title" name="title">
            </div>
            <div class="form-group mb-4">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" placeholder="description" name="description">
            </div>
            <input type="submit" name="time" class="btn btn-primary">
        </form>
    </div>
@endsection
