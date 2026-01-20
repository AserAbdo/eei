{{-- =========================================
    Footer - Figma Design
    ========================================= --}}
@php
    $settings = App\Models\Setting::find(1);
    $categories = App\Models\Category::all();
@endphp

<footer class="footer-new">
    <div class="container">
        <div class="row">
            {{-- Logo & Description --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="footer-logo">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="EEI Logo">
                </div>
                <p class="footer-text">
                    Egyptian Company for Electrical Industries - Your trusted partner in electrical solutions, 
                    providing high-quality products and services since establishment.
                </p>
            </div>
            
            {{-- Company Links --}}
            <div class="col-lg-2 col-md-6 mb-4">
                <div class="footer-links">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="/about">About us</a></li>
                        <li><a href="/contact">Contact us</a></li>
                        <li><a href="/certificate">Certificates</a></li>
                        <li><a href="/services">Services</a></li>
                    </ul>
                </div>
            </div>
            
            {{-- Services Links --}}
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="footer-links">
                    <h5>Services</h5>
                    <ul>
                        @foreach($categories->take(5) as $category)
                            <li><a href="/category-details/{{ $category->id }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
            {{-- Contact Info --}}
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="footer-links">
                    <h5>Contact Us</h5>
                    <ul>
                        @if($settings)
                            <li>
                                <i class="bi bi-envelope me-2 text-danger"></i>
                                {{ $settings->email ?? 'info@eei.com' }}
                            </li>
                            <li>
                                <i class="bi bi-telephone me-2 text-danger"></i>
                                {{ $settings->phone ?? '+1234567890' }}
                            </li>
                            <li>
                                <i class="bi bi-geo-alt me-2 text-danger"></i>
                                {{ $settings->address ?? 'Address' }}
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Footer Bottom --}}
    <div class="footer-bottom-new">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p>© {{ date('Y') }} EEI. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-social" style="display: inline-flex; gap: 15px;">
                        @if($settings && $settings->facebook)
                            <a href="{{ $settings->facebook }}" target="_blank" style="background: transparent; color: white;">
                                <i class="bi bi-facebook"></i>
                            </a>
                        @endif
                        @if($settings && $settings->instagram)
                            <a href="{{ $settings->instagram }}" target="_blank" style="background: transparent; color: white;">
                                <i class="bi bi-instagram"></i>
                            </a>
                        @endif
                        @if($settings && $settings->linkedin)
                            <a href="{{ $settings->linkedin }}" target="_blank" style="background: transparent; color: white;">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
