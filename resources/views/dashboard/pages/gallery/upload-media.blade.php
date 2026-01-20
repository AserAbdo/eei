@extends('dashboard.app')

@section('content')
    <div class="main-content">
        <form class="settings-form" action="{{ route('store.media') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">

                <label for="gallery_category_id">Category</label>
                <select class="form-control" id="gallery_category_id" name="gallery_category_id">
                    <option value="">Select Category</option>
                    @foreach ($all as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-4">
                <label for="title">Image</label>
                <div class="d-flex align-items-center">
                    <input type="file" class="form-control me-3" id="title" name="title" accept="image/*"
                        onchange="previewImage(event)">
                </div>
            </div>
            <div class="form-group mb-4">
                <label for="name">Name</label>
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control me-3" id="name" name="name">
                </div>
            </div>
            <div class="form-group mb-4">
                <label for="description">description</label>
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control me-3" id="description" name="description">
                </div>
            </div>
            <input type="submit" name="time" class="btn btn-primary">
        </form>
    </div>
@endsection
