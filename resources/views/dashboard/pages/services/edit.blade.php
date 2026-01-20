@extends('dashboard.app')

@section('content')
    <div class="main-content" style="margin-top: 50px">
        <h3>Edit Service</h3>
        <br>
        <form class="settings-form" action="{{ route('service.update', ['id' => $service->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <!-- Category Selection -->
            <div class="mb-4 form-group">
                <label for="category_id">Category</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    <option value="">Select Category</option>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}"
                            {{ old('category_id', $service->category_id) == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Service Name -->
            <div class="mb-4 form-group">
                <label for="name">Service Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Service Name"
                    value="{{ old('name', $service->name) }}" required>
            </div>

            <!-- Service Description -->
            <div class="mb-4 form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter Description"
                    required>{{ old('description', $service->description) }}</textarea>
            </div>

            <!-- Package Size -->
            <div class="mb-4 form-group">
                <label for="pakage_size">Package Size</label>
                <input type="number" class="form-control" id="pakage_size" name="pakage_size"
                    placeholder="Enter Package Size" value="{{ old('pakage_size', $service->pakage_size) }}" required>
            </div>

            <!-- Service content -->
            <div class="mb-4 form-group">
                <label for="content">content</label>
                <textarea class="form-control" id="description" name="content" rows="4" placeholder="Enter content"
                    required>{{ old('content', $service->content) }}</textarea>
            </div>

             <!-- status  -->
             <div class="mb-4 form-group">
                <label for="status">Package Size</label>
                <input type="number" class="form-control" id="status" name="status"
                    placeholder="status" value="{{ old('status', $service->status) }}" required>
            </div>

            <!-- Main Image -->
            <div class="mb-4 form-group">
                <label for="image">Main Image (Must Be 420x420)</label>
                @if ($service->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $service->image) }}" alt="Current Image" style="max-width: 200px;">
                    </div>
                @endif
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>


            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Service</button>
            </div>
        </form>
    </div>
@endsection
