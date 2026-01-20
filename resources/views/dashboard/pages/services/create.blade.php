@extends('dashboard.app')

@section('content')
    <div class="main-content" style="margin-top: 50px">
        <h3>Create New Service</h3>
        <br>
        <form class="settings-form" action="{{ route('store.service') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- service Selection -->
            <div class="mb-4 form-group">
                <label for="category_id">Category</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    <option value="">Select Category</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- service name Name -->
            <div class="mb-4 form-group">
                <label for="title">service Name</label>
                <input type="text" class="form-control" id="title" name="name" placeholder="Enter service title" required>
            </div>

            <!-- service Description -->
            <div class="mb-4 form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter Description" required></textarea>
            </div>

            <!-- service Description -->
            <div class="mb-4 form-group">
                <label for="pakage_size">Package size</label>
                <input type="number" class="form-control" id="image" name="pakage_size" required>
            </div>

            <!-- service content -->
            <div class="mb-4 form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="description" name="content" rows="4" placeholder="Enter content" required></textarea>
            </div>

            <!-- Main Image -->
            <div class="mb-4 form-group">
                <label for="image">Main Image (Must Be 420x420)</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>

            <!-- status -->
            <div class="mb-4 form-group">
                <label for="status">Main Status</label>
                <input type="number" class="form-control" id="status" name="status"  required>
            </div>


            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create service</button>
            </div>
        </form>
    </div>
@endsection
