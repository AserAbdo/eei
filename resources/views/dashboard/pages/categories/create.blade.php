@extends('dashboard.app')

@section('content')
    <div class="main-content">
        <br>
        <br>
        <h3>New Category</h3>
        <br>
        <form class="settings-form" action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter service name" name="name"
                    required>
            </div>

            <div class="form-group mb-4">
                <label for="description">Description</label>
                <textarea id="description" class="form-control" name="description" required></textarea>
            </div>

            <div class="form-group mb-4">
                <label for="image">image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>

            <div class="form-group mb-4">
                <label for="icon">icon</label>
                <input type="file" class="form-control" id="icon" name="icon" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Create Service</button>
        </form>
        <br>
    </div>
@endsection
