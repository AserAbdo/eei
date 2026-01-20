@extends('dashboard.app')
@section('content')
    <div class="main-content">
        <br>
        <form class="settings-form" action="{{ route('certificate.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                    value="{{ old('title', $settings->title ?? '') }}">
            </div>

            <div class="form-group mb-4">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" placeholder="Description" name="description">{{ old('description', $settings->description ?? '') }}</textarea>
            </div>

            <div class="form-group mb-4">
                <label for="hero">Hero Image</label>
                <input type="file" class="form-control" id="hero" placeholder="Hero Image" name="hero" accept="image/*"
                    onchange="previewImage(event)">
                <img id="hero-preview"
                    src="{{ isset($settings->hero) ? asset('storage/' . $settings->hero) : '' }}"
                    alt="Hero Preview"
                    style="width: 100px; height: auto; object-fit: cover; display: {{ isset($settings->hero) ? 'block' : 'none' }};">
            </div>

            <div class="form-group mb-4">
                <label for="gallery">Gallery</label>
                <select class="form-control" id="gallery" name="gallery">
                    <option value="">Select Gallery</option>
                    @foreach($gallery as $item)
                        <option value="{{ $item->id }}" {{ old('gallery', $settings->gallery ?? '') == $item->id ? 'selected' : '' }}>
                            {{ $item->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Update">
        </form>
    </div>

    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const preview = document.getElementById(event.target.id + '-preview');
                preview.src = reader.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
