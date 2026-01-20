@extends('dashboard.app')

@section('content')
    <br/>
    <div class="main-content">
        <br>
        <h3>Edit Gallery</h3>
        <form action="{{ route('update.media', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" id="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $gallery->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control" onchange="previewImage(event)">
                <br>
                <img id="image-preview" src="{{ asset('storage/' . $gallery->title) }}" alt="Image Preview" style="width: 100px; height: 100px;">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('image-preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
