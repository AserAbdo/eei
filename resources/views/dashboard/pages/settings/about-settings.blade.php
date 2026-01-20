@extends('dashboard.app')
@section('content')
    <div class="main-content">
        <br>
        <h3>About Page Settings</h3>
        <form class="settings-form" action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
            <div class="mb-4 form-group">
                @csrf
            </div>
            <div class="mb-4 form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="hero title" name="title"
                    value="{{ old('title', $settings[0]['title'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="hero_img">Hero Image</label>
                <div class="d-flex align-items-center">
                    <input type="file" class="form-control me-3" id="hero_img" placeholder="slider" name="hero_image"
                        accept="image/*" onchange="previewImage(event, 'hero_img-preview')">
                    <img id="hero_img-preview"
                        src="{{ isset($settings[0]['hero_image']) ? asset('storage/' . $settings[0]['hero_image']) : '' }}"
                        alt="hero image Preview"
                        style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($settings[0]['hero_image']) ? 'block' : 'none' }};">
                </div>
            </div>
            <div class="mb-4 form-group">

                <label for="gallery_id">Select Certificates Category</label>
                <select class="form-control" id="gallery_id" name="gallery_id">
                    <option value="">Select Category</option>
                    @foreach ($gallery as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4 form-group">

                <label for="gallery_id">Select Value Category</label>
                <select class="form-control" id="gallery_id" name="gallery_value_id">
                    <option value="">Select Category</option>
                    @foreach ($gallery as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4 form-group">
                <label for="who_we_are">Who Are We</label>
                <textarea class="form-control" id="who_we_are" placeholder="who_we_are" name="who_we_are">{{ old('who_we_are', $settings[0]['who_we_are'] ?? '') }}</textarea>
            </div>
            <div class="mb-4 form-group">
                <label for="who_we_are_image">Who We Are Image</label>
                <div class="d-flex align-items-center">
                    <input type="file" class="form-control me-3" id="who_we_are_image" placeholder="who_we_are_image"
                        name="who_we_are_image" accept="image/*" onchange="previewImage(event, 'who_we_are_image-preview')">
                    <img id="who_we_are_image-preview"
                        src="{{ isset($settings[0]['who_we_are_image']) ? asset('storage/' . $settings[0]['who_we_are_image']) : '' }}"
                        alt="who we are image Preview"
                        style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($settings[0]['who_we_are_image']) ? 'block' : 'none' }};">
                </div>
            </div>
            {{-- <div class="mb-4 form-group">
                <label for="our_message">Our Message</label>
                <textarea class="form-control" id="our_message" placeholder="our_message" name="our_message">{{ old('our_message', $settings[0]['our_message'] ?? '') }}</textarea>
            </div>
            <div class="mb-4 form-group">
                <label for="our_message_image">Our Message Image</label>
                <div class="d-flex align-items-center">
                    <input type="file" class="form-control me-3" id="our_message_image" placeholder="our_message_image"
                        name="our_message_image" accept="image/*"
                        onchange="previewImage(event, 'our_message_image-preview')">
                    <img id="our_message_image-preview"
                        src="{{ isset($settings[0]['our_message_image']) ? asset('storage/' . $settings[0]['our_message_image']) : '' }}"
                        alt="our message image Preview"
                        style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($settings[0]['our_message_image']) ? 'block' : 'none' }};">
                </div>
            </div> --}}
            <div class="mb-4 form-group">
                <label for="our_vision">Our Vision</label>
                <textarea class="form-control" id="our_vision" placeholder="our_vision" name="our_vision">{{ old('our_vision', $settings[0]['our_vision'] ?? '') }}</textarea>
            </div>
            <div class="mb-4 form-group">
                <label for="our_vision_image">Our Vision Image</label>
                <div class="d-flex align-items-center">
                    <input type="file" class="form-control me-3" id="our_vision_image" placeholder="our_vision_image"
                        name="our_vision_image" accept="image/*" onchange="previewImage(event, 'our_vision_image-preview')">
                    <img id="our_vision_image-preview"
                        src="{{ isset($settings[0]['our_vision_image']) ? asset('storage/' . $settings[0]['our_vision_image']) : '' }}"
                        alt="our vision image Preview"
                        style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($settings[0]['our_vision_image']) ? 'block' : 'none' }};">
                </div>
            </div>
            <div class="mb-4 form-group">
                    <label for="our_vision_image">Our Vision Image (2)</label>
                    <div class="d-flex align-items-center">
                        <input type="file" class="form-control me-3" id="our_vision_image2" placeholder="our_vision_image2"
                            name="our_vision_image2" accept="image/*" onchange="previewImage(event, 'our_vision_image2-preview')">
                        <img id="our_vision_image2-preview"
                            src="{{ isset($settings[0]['our_vision_image2']) ? asset('storage/' . $settings[0]['our_vision_image2']) : '' }}"
                            alt="our vision image Preview"
                            style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($settings[0]['our_vision_image2']) ? 'block' : 'none' }};">
                    </div>
            </div>
            <!-- New Fields for Our Mission -->
 <div class="mb-4 form-group">
    <label for="our_mission">Our Mission</label>
    <textarea
        class="form-control"
        id="our_mission"
        placeholder="Our Mission (press Enter for new line)"
        name="our_mission"
        rows="6"
        style="white-space: pre-wrap;">{{ old('our_mission', $settings[0]['our_mission'] ?? '') }}</textarea>
    <small class="form-text text-muted">Press Enter to create a new line. All line breaks will be preserved.</small>
</div>
            <div class="mb-4 form-group">
                <label for="our_mission_image">Our Mission Image</label>
                <div class="d-flex align-items-center">
                    <input type="file" class="form-control me-3" id="our_mission_image" placeholder="our_mission_image"
                        name="our_mission_image" accept="image/*"
                        onchange="previewImage(event, 'our_mission_image-preview')">
                    <img id="our_mission_image-preview"
                        src="{{ isset($settings[0]['our_mission_image']) ? asset('storage/' . $settings[0]['our_mission_image']) : '' }}"
                        alt="our mission image Preview"
                        style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($settings[0]['our_mission_image']) ? 'block' : 'none' }};">
                </div>
            </div>

            <input type="submit" name="time" class="btn btn-primary">
        </form>
    </div>

    <script>
        function previewImage(event, previewId) {
            const file = event.target.files[0];
            const preview = document.getElementById(previewId);
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none';
            }
        }
    </script>
@endsection
