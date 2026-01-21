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
            {{-- Company Links --}}
            <div class="col-lg-2 col-md-4 mb-4">
                <div class="footer-links">
                    <h5 class="footer-heading">Company</h5>
                    <ul>
                        <li><a href="/about">About us</a></li>
                        <li><a href="/contact">Contact us</a></li>
                        <li><a href="/certificate">Certificates</a></li>
                    </ul>
                </div>
            </div>
            
            {{-- Services Links --}}
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="footer-links">
                    <h5 class="footer-heading">Services</h5>
                    <ul>
                        @foreach($categories->take(3) as $category)
                            <li><a href="/category-details/{{ $category->id }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
            {{-- Contact Info --}}
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="footer-links">
                    <h5 class="footer-heading">Contact us</h5>
                    <ul class="footer-contact-simple">
                        @if($settings)
                            <li>{{ $settings->email ?? 'info@eei.com.eg' }}</li>
                            <li>0020 {{ $settings->phone ?? '01144508585' }}</li>
                        @else
                            <li>info@eei.com.eg</li>
                            <li>0020 01144508585</li>
                        @endif
                    </ul>
                </div>
            </div>
            
            {{-- Logo on Right --}}
            <div class="col-lg-4 col-md-12 mb-4 text-lg-end">
                <div class="footer-logo-right">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="EEI Logo">
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
