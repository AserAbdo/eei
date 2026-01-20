@extends('website.master')

@section('content')

{{-- =========================================
    Hero Section
    ========================================= --}}
<section class="hero-section">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            {{-- Slide 1 --}}
            <div class="carousel-item active">
                <img src="{{ asset('storage/' . ($settings->slider1 ?? 'placeholder.jpg')) }}" alt="Hero Image">
                <div class="hero-content">
                    <h1>Egyptian Company fo<br>Electrical Industries</h1>
                    <p>{{ $settings->description ?? 'With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.' }}</p>
                    <a href="#Services" class="btn-hero">
                        Explorer Our services
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            {{-- Slide 2 --}}
            <div class="carousel-item">
                <img src="{{ asset('storage/' . ($settings->slider2 ?? 'placeholder.jpg')) }}" alt="Hero Image">
                <div class="hero-content">
                    <h1>Egyptian Company fo<br>Electrical Industries</h1>
                    <p>{{ $settings->description ?? 'With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes.' }}</p>
                    <a href="#Services" class="btn-hero">
                        Explorer Our services
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        
        {{-- Indicators --}}
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        </div>
    </div>
</section>

{{-- =========================================
    Who Are We Section
    ========================================= --}}
<section class="who-are-we-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 position-relative" style="z-index: 1;">
                <h2 class="section-title">Who Are we</h2>
                <p class="section-text">
                    {{ $settings->who_we_are_desc ?? 'We are a leading electrical company dedicated to providing high-quality products and services. With years of experience, we have built a reputation for excellence and innovation in the electrical industry.' }}
                </p>
                <a href="/about" class="link-arrow">
                    More about us
                    <i class="bi bi-arrow-right"></i>
                </a>
                <div class="eei-logo-badge">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="EEI Logo">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3 justify-content-center">
                    <div class="col-6">
                        <img src="{{ asset('storage/' . ($settings->who_we_are_img_first ?? 'placeholder.jpg')) }}" 
                             class="img-fluid rounded-4 shadow" 
                             alt="About Image 1"
                             style="object-fit: cover; height: 350px; width: 100%;">
                    </div>
                    <div class="col-6 mt-5">
                        <img src="{{ asset('storage/' . ($settings->who_we_are_img_second ?? 'placeholder.jpg')) }}" 
                             class="img-fluid rounded-4 shadow" 
                             alt="About Image 2"
                             style="object-fit: cover; height: 350px; width: 100%;">
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Feature Cards --}}
        <div class="feature-cards">
            <div class="feature-card">
                <div class="feature-icon">
                    {!! $settings->feature1_icon ?? '<i class="bi bi-check-lg"></i>' !!}
                </div>
                <h4>{{ $settings->feature1_title ?? 'Unwavering Safety' }}</h4>
                <p>{{ $settings->feature1_desc ?? 'We prioritize safety in every product and service we deliver.' }}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    {!! $settings->feature2_icon ?? '<i class="bi bi-check-lg"></i>' !!}
                </div>
                <h4>{{ $settings->feature2_title ?? 'Contactless Assurance' }}</h4>
                <p>{{ $settings->feature2_desc ?? 'Modern solutions with minimal physical contact required.' }}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    {!! $settings->feature3_icon ?? '<i class="bi bi-check-lg"></i>' !!}
                </div>
                <h4>{{ $settings->feature3_title ?? 'Operational Efficiency' }}</h4>
                <p>{{ $settings->feature3_desc ?? 'Maximizing performance while minimizing resource usage.' }}</p>
            </div>
        </div>
    </div>
</section>

{{-- =========================================
    Our Services Section
    ========================================= --}}
<section class="services-section-new" id="Services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Services</h2>
            <p>{{ $settings->services ?? 'We provide comprehensive electrical solutions tailored to meet the diverse needs of our clients. Our services span across various sectors including industrial, commercial, and residential applications.' }}</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            @if(isset($category) && count($category) > 0)
                @foreach($category as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card-expand">
                            {{-- Default State - White Card --}}
                            <div class="service-card-default">
                                <h3>{{ $item->name }}</h3>
                                <p>{{ Str::limit($item->description, 100) }}</p>
                                <a href="/category-details/{{ $item->id }}" class="service-link">
                                    More About Service
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                            
                            {{-- Hover State - Image + Red Panel --}}
                            <div class="service-card-hover">
                                {{-- Left: Image with content --}}
                                <div class="service-hover-image" style="background-image: url('{{ asset('storage/' . $item->image) }}');">
                                    <div class="service-hover-overlay"></div>
                                    <div class="service-hover-content">
                                        <h3>{{ $item->name }}</h3>
                                        <p>{{ Str::limit($item->description, 80) }}</p>
                                        <a href="/category-details/{{ $item->id }}" class="service-link-white">
                                            More About Service
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                
                                {{-- Right: Red Panel with Services --}}
                                <div class="service-hover-panel">
                                    @if($item->services && count($item->services) > 0)
                                        <ul>
                                            @foreach($item->services->take(5) as $service)
                                                <li>
                                                    <a href="/service-details/{{ $service->id }}">
                                                        {{ $service->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <p class="text-muted">No services available at the moment.</p>
                </div>
            @endif
        </div>
    </div>
</section>

{{-- =========================================
    Why EEI Section
    ========================================= --}}
<section class="why-eei-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title">Why eei</h2>
                <p class="section-text">
                    {{ $settings->why_eei_desc ?? 'EEI stands as a trusted leader in the electrical industry, delivering quality products and exceptional service for decades.' }}
                </p>
                <ul class="check-list">
                    @if(isset($settings->why_eei_points) && $settings->why_eei_points)
                        @foreach(explode("\n", $settings->why_eei_points) as $point)
                            @if(trim($point))
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>{{ str_replace('- ', '', trim($point)) }}</span>
                                </li>
                            @endif
                        @endforeach
                    @else
                        <li><i class="bi bi-check-circle-fill"></i><span>Free Consulting With Expert Saving Money</span></li>
                        <li><i class="bi bi-check-circle-fill"></i><span>High Quality Products and Materials</span></li>
                        <li><i class="bi bi-check-circle-fill"></i><span>Customer-centric problem-solving culture</span></li>
                        <li><i class="bi bi-check-circle-fill"></i><span>Saving Money For The Future</span></li>
                    @endif
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="why-image">
                    <img src="{{ asset('storage/' . ($settings->why_eei_image ?? 'placeholder.jpg')) }}" 
                         alt="Why EEI" 
                         class="img-fluid rounded-4">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =========================================
    FAQ Section
    ========================================= --}}
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently asked questions</h2>
            <p>Find answers to common questions about our products, services, and company. If you can't find what you're looking for, feel free to contact us directly.</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion accordion-custom" id="faqAccordion">
                    {{-- FAQ 1 --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Enim sodales consequat adipiscing facilisis massa venenatis, non lorem lobortis?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Our team is dedicated to providing comprehensive answers and solutions to all your electrical needs.
                            </div>
                        </div>
                    </div>
                    
                    {{-- FAQ 2 --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Venenatis nulla sagittis nunc, lobortis nec sollicitudin neque, dolor?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We offer a wide range of electrical products and services designed to meet your specific requirements. Contact us for more detailed information.
                            </div>
                        </div>
                    </div>
                    
                    {{-- FAQ 3 --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Varius ultrices molestie tellus fermentum, viverra ipsum scelerisque etiam lorem?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our products undergo rigorous quality testing to ensure they meet the highest industry standards.
                            </div>
                        </div>
                    </div>
                    
                    {{-- FAQ 4 --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Nulla etiam vitae, at sagittis, nibh ultrices mattis feugiat faucibus?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we provide comprehensive warranty and after-sales support for all our products and services.
                            </div>
                        </div>
                    </div>
                    
                    {{-- FAQ 5 --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Sagittis consectetur gravida nec turpis eros, id sit et, dictum?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely! Our team is available to provide consultations and help you choose the right solutions for your needs.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
