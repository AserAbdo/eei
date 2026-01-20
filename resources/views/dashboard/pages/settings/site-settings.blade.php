@extends('dashboard.app')
@section('content')
    <div class="main-content">

        <form class="settings-form" action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
            <div class="mb-4 form-group">
                <br>
                @csrf
                <label for="siteName">Site Name</label>
                <input type="text" class="form-control" id="siteName" placeholder="Site Name" name="site-name"
                    value="{{ old('site-name', $settings[0]['site-name'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="logo">Logo</label>
                <input type="file" class="form-control" id="logo" placeholder="Logo" name="logo" accept="image/*"
                    onchange="previewImage(event)">
                <img id="logo-preview"
                    src="{{ isset($settings[0]['logo']) ? asset('storage/' . $settings[0]['logo']) : '' }}"
                    alt="logo Preview"
                    style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($settings[0]['logo']) ? 'block' : 'none' }};">

            </div>
            <div class="mb-4 form-group">
                <label for="favicon">Favicon</label>
                <input type="file" class="form-control" id="favicon" placeholder="Favicon" name="favicon"
                    accept="image/*" onchange="previewImage(event)">
                <img id="favicon-preview"
                    src="{{ isset($settings[0]['favicon']) ? asset('storage/' . $settings[0]['favicon']) : '' }}"
                    alt="favicon Preview"
                    style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($settings[0]['favicon']) ? 'block' : 'none' }};">
            </div>
            <div class="mb-4 form-group">
                <label for="contactHero">Contact Hero</label>
                <input type="file" class="form-control" id="contactHero" placeholder="Contact Hero" name="contact_hero"
                    accept="image/*" onchange="previewImage(event)">
                <img id="contactHero-preview"
                    src="{{ isset($settings[0]['contact_hero']) ? asset('storage/' . $settings[0]['contact_hero']) : '' }}"
                    alt="Contact Hero Preview"
                    style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($settings[0]['contact_hero']) ? 'block' : 'none' }};">
            </div>

            <div class="mb-4 form-group">
                <label for="contact_img">Contact Img</label>
                <input type="file" class="form-control" id="contact_img" placeholder="Contact Img" name="contact_img"
                    accept="image/*" onchange="previewImage(event)">
                <img id="contact_img-preview"
                    src="{{ isset($settings[0]['contact_img']) ? asset('storage/' . $settings[0]['contact_img']) : '' }}"
                    alt="Contact Img Preview"
                    style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($settings[0]['contact_img']) ? 'block' : 'none' }};">
            </div>

            <div class="mb-4 form-group">
                <label for="footer">Footer</label>
                <input type="file" class="form-control" id="footer" placeholder="footer" name="footer"
                    accept="image/*" onchange="previewImage(event)">
                <img id="location-preview"
                    src="{{ isset($settings[0]['footer']) ? asset('storage/' . $settings[0]['footer']) : '' }}"
                    alt="footer Preview"
                    style="width: 50px; height: 50px; object-fit: cover; display: {{ isset($settings[0]['footer']) ? 'block' : 'none' }};">

            </div>
            <div class="mb-4 form-group">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" id="phone" placeholder="Phone" name="phone"
                    value="{{ old('phone', $settings[0]['phone'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                    value="{{ old('email', $settings[0]['email'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="hours">working Hours</label>
                <input type="text" class="form-control" id="hours" placeholder="working Hours" name="working-hours"
                    value="{{ old('working-hours', $settings[0]['working-hours'] ?? '') }}">
            </div>
            <div class="mb-4 form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Address" name="address"
                    value="{{ old('address', $settings[0]['address'] ?? '') }}">
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-4 form-group">
                        <label for="Facebook">Facebook</label>
                        <input type="text" class="form-control" id="Facebook" placeholder="Facebook " name="facebook"
                            value="{{ old('facebook', $settings[0]['facebook'] ?? '') }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-4 form-group">
                        <label for="instagram">instagram</label>
                        <input type="text" class="form-control" id="instagram" placeholder="instagram" name="instagram"
                            value="{{ old('instagram', $settings[0]['instagram'] ?? '') }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-4 form-group">
                        <label for="Linkedin">Linkedin</label>
                        <input type="text" class="form-control" id="Linkedin" placeholder="Linked in"
                            name="linkedin" value="{{ old('linkedin', $settings[0]['linkedin'] ?? '') }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-4 form-group">
                        <label for="Youtube">Youtube</label>
                        <input type="text" class="form-control" id="Youtube" placeholder="Youtube" name="youtube"
                            value="{{ old('youtube', $settings[0]['youtube'] ?? '') }}">
                    </div>
                </div>
            </div>
            <input type="submit" name="time" class="btn btn-primary">
        </form>
    </div>
@endsection
