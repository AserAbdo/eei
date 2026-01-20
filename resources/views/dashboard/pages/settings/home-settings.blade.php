@extends('dashboard.app')
@section('content')
    <div class="main-content">
        <form class="settings-form" action="{{ route('home.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4 form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="title" name="title"
                    value="{{ old('title', $allSettings[0]['title'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="slider1">First Slider</label>
                <div class="d-flex align-items-center">
                    <input type="file" class="form-control me-3" id="slider1" placeholder="slider1" name="slider1"
                        accept="image/*" onchange="previewImage(event)">
                    <img id="slider1-preview"
                        src="{{ isset($allSettings[0]['slider1']) ? asset('storage/' . $allSettings[0]['slider1']) : '' }}"
                        alt="Slider Preview"
                        style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($allSettings[0]['slider1']) ? 'block' : 'none' }};">
                </div>
            </div>
            <div class="mb-4 form-group">
                <label for="slider2">Second Slider</label>
                <div class="d-flex align-items-center">
                    <input type="file" class="form-control me-3" id="slider2" placeholder="slider2" name="slider2"
                        accept="image/*" onchange="previewImage(event)">
                    <img id="slider2-preview"
                        src="{{ isset($allSettings[0]['slider2']) ? asset('storage/' . $allSettings[0]['slider2']) : '' }}"
                        alt="Slider Preview"
                        style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($allSettings[0]['slider2']) ? 'block' : 'none' }};">
                </div>
            </div>
            <div class="mb-4 form-group">
                <label for="slider2">Who We Are Image (1)</label>
                <div class="d-flex align-items-center">
                    <input type="file" class="form-control me-3" id="who_we_are_img_first" placeholder="slider2" name="who_we_are_img_first" accept="image/*"
                        onchange="previewImage(event)">
                    <img id="who_we_are_img_first-preview"
                        src="{{ isset($allSettings[0]['who_we_are_img_first']) ? asset('storage/' . $allSettings[0]['who_we_are_img_first']) : '' }}"
                        alt="Slider Preview"
                        style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($allSettings[0]['who_we_are_img_first']) ? 'block' : 'none' }};">
                </div>
            </div>
            <div class="mb-4 form-group">
                <label for="slider2">Who We Are Image (2)</label>
                <div class="d-flex align-items-center">
                    <input type="file" class="form-control me-3" id="who_we_are_img_second" placeholder="slider2" name="who_we_are_img_second" accept="image/*"
                        onchange="previewImage(event)">
                    <img id="who_we_are_img_second-preview"
                        src="{{ isset($allSettings[0]['who_we_are_img_second']) ? asset('storage/' . $allSettings[0]['who_we_are_img_second']) : '' }}"
                        alt="Slider Preview"
                        style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($allSettings[0]['who_we_are_img_second']) ? 'block' : 'none' }};">
                </div>
            </div>
            <div class="mb-4 form-group">
                <label for="slider2">Why EEI Image</label>
                <div class="d-flex align-items-center">
                    <input type="file" class="form-control me-3" id="why_eei_image" placeholder="slider2" name="why_eei_image" accept="image/*"
                        onchange="previewImage(event)">
                    <img id="why_eei_image-preview"
                        src="{{ isset($allSettings[0]['why_eei_image']) ? asset('storage/' . $allSettings[0]['why_eei_image']) : '' }}"
                        alt="Slider Preview"
                        style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($allSettings[0]['why_eei_image']) ? 'block' : 'none' }};">
                </div>
            </div>
            <div class="mb-4 form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" placeholder="description" name="description"
                    value="{{ old('description', $allSettings[0]['description'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="who_we_are_desc">Who We Are Description</label>
                <input type="text" class="form-control" id="who_we_are_desc" placeholder="who_we_are_desc"
                    name="who_we_are_desc" value="{{ old('who_we_are_desc', $allSettings[0]['who_we_are_desc'] ?? '') }}">
            </div>
 <div class="mb-4 form-group">
    <label for="services">Services</label>
    <textarea
        class="form-control"
        id="services"
        placeholder="Services (press Enter for new line)"
        name="services"
        rows="6"
        style="white-space: pre-wrap;">{{ old('services', $allSettings[0]['services'] ?? '') }}</textarea>
    <small class="form-text text-muted">Press Enter to create a new line. All line breaks will be preserved.</small>
</div>
            <div class="mb-4 form-group">
                <label for="feature1_title">Feature 1 Icon</label>
                <input type="text" class="form-control" id="feature1_icon" placeholder="feature1_icon" name="feature1_icon"
                    value="{{ old('feature1_icon', $allSettings[0]['feature1_icon'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="feature1_title">Feature 1 Title</label>
                <input type="text" class="form-control" id="feature1_title" placeholder="feature1_title"
                    name="feature1_title" value="{{ old('feature1_title', $allSettings[0]['feature1_title'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="feature1_desc">Feature 1 Description</label>
                <input type="text" class="form-control" id="feature1_desc" placeholder="feature1_desc"
                    name="feature1_desc" value="{{ old('feature1_desc', $allSettings[0]['feature1_desc'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="feature2_title">Feature 2 Icon</label>
                <input type="text" class="form-control" id="feature2_icon" placeholder="feature2_icon" name="feature2_icon"
                    value="{{ old('feature2_icon', $allSettings[0]['feature2_icon'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="feature2_title">Feature 2 Title</label>
                <input type="text" class="form-control" id="feature2_title" placeholder="feature2_title"
                    name="feature2_title" value="{{ old('feature2_title', $allSettings[0]['feature2_title'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="feature2_desc">Feature 2 Description</label>
                <input type="text" class="form-control" id="feature2_desc" placeholder="feature2_desc"
                    name="feature2_desc" value="{{ old('feature2_desc', $allSettings[0]['feature2_desc'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="feature3_title">Feature 3 Icon</label>
                <input type="text" class="form-control" id="feature3_title" placeholder="feature3_icon" name="feature3_icon"
                    value="{{ old('feature3_icon', $allSettings[0]['feature3_icon'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="feature3_title">Feature 3 Title</label>
                <input type="text" class="form-control" id="feature3_title" placeholder="feature3_title"
                    name="feature3_title" value="{{ old('feature3_title', $allSettings[0]['feature3_title'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="feature3_desc">Feature 3 Description</label>
                <input type="text" class="form-control" id="feature3_desc" placeholder="feature3_desc"
                    name="feature3_desc" value="{{ old('feature3_desc', $allSettings[0]['feature3_desc'] ?? '') }}">
            </div>

            <div class="mb-4 form-group">
                <label for="feature3_desc">Why EEI (Description)</label>
                <input type="text" class="form-control" id="feature3_desc" placeholder="Why EEI (Description)" name="why_eei_desc"
                    value="{{ old('why_eei_desc', $allSettings[0]['why_eei_desc'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="why_eei_points">Why EEI (Points)</label>
                <textarea type="text" class="form-control" id="why_eei_points" style="height: 250px;" placeholder="Why EEI (Points)" name="why_eei_points"
                    >{{ old('why_eei_points', $allSettings[0]['why_eei_points'] ? $allSettings[0]['why_eei_points']  : '- ') }}</textarea>
            </div>
            <input type="submit" name="time" class="mb-3 btn btn-primary">
        </form>
    </div>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const previewId = event.target.id + '-preview'; // Dynamically get the ID of the preview element
            const preview = document.getElementById(previewId);

            if (file && preview) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else if (preview) {
                preview.style.display = 'none';
            }
        }
    </script>

<script>
    document.getElementById("why_eei_points").addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
        event.preventDefault(); // Prevent default new line behavior
        let cursorPos = this.selectionStart;
        let text = this.value;

        // Insert "- " at the new line position
        let beforeText = text.substring(0, cursorPos);
        let afterText = text.substring(cursorPos);

        this.value = beforeText + "\n- " + afterText;
        this.selectionStart = this.selectionEnd = cursorPos + 3; // Move cursor after "- "
    }
});
</script>
@endsection
