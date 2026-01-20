@extends('dashboard.app')

@section('content')
    <div class="main-content">
        <br>
        <br>
        <h3>Edit Category</h3>
        <br>
        <form class="settings-form" action="{{ route('categories.update', ['id' => $category->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') 

            <div class="form-group mb-4">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter category name" name="name"
                    required value="{{ $category->name }}">
            </div>

            <div class="form-group mb-4">
                <label for="description">Description</label>
                <textarea id="description" class="form-control" name="description" required>{{ $category->description }}</textarea>
            </div>

            <div class="form-group mb-4">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*"
                    onchange="previewImage(event, 'image-preview')">
                @if ($category->image)
                    <img id="image-preview" src="{{ asset('storage/' . $category->image) }}" alt="Category Image"
                        style="max-width: 80px; margin-top: 10px;">
                @else
                    <img id="image-preview" src="#" alt="Image Preview"
                        style="max-width: 80px; margin-top: 10px; display: none;">
                @endif
            </div>

            <div class="form-group mb-4">
                <label for="icon">Icon</label>
                <input type="file" class="form-control" id="icon" name="icon" accept="image/*"
                    onchange="previewImage(event, 'icon-preview')">
                @if ($category->icon)
                    <img id="icon-preview" src="{{ asset('storage/' . $category->icon) }}" alt="Category Icon"
                        style="max-width: 80px; margin-top: 10px;">
                @else
                    <img id="icon-preview" src="#" alt="Icon Preview"
                        style="max-width: 80px; margin-top: 10px; display: none;">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
        <br>
    </div>

    <script>
        function previewImage(event, previewId) {
            const reader = new FileReader();
            const imagePreview = document.getElementById(previewId);

            reader.onload = function() {
                if (reader.readyState === 2) {
                    imagePreview.src = reader.result;
                    imagePreview.style.display = 'block';
                }
            }

            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection