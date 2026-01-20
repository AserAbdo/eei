<?php
$category = App\Models\Category::with(['services'])->get();
?>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="{{ asset('assets/img/logo.svg') }}" alt="img" />
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class="">Home</a></li>
                <li><a href="/about">About</a></li>
                <li class="dropdown"><a href="#Services"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        @if (count($category) > 0)
                            @foreach ($category as $item)
                                <li class="dropdown allslslsllll"><a href="{{ route('website.category.details', ['id' => $item->id]) }}"><span>{{ $item->name }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        @foreach ($item->services as $service)
                                            <li><a href="{{ route('website.service.details', ['id' => $service->id]) }}">{{ $service->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        @else
                            <li><a href="#">No Services Available</a></li>
                        @endif
                    </ul>
                </li>
                <li><a href="/certificate">Certificates</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
        </nav>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

        <a class="btn-getstarted bg-danger" href="/services">Get Services</a>

    </div>
</header>


<style>
@media (min-width: 1200px) {
    .allslslsllll {
        position: relative !important;
        transition: all 0.5s ease;
    }

    .allslslsllll > ul {
        position: absolute !important;
        top: 0 !important;
        left: 100% !important; /* Aligns to the right */
        background: white !important;
        padding: 10px !important;
        list-style: none !important;
        display: block !important; /* Always block, but hide with opacity */
        opacity: 0;
        visibility: hidden;
        min-width: 200px !important;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1) !important;
        border-radius: 5px !important;
        margin: 0 !important; /* Remove margin to prevent gap */
        transition: opacity 0.3s ease;
        z-index: 999; /* Make sure it stays above */
        
    }

    /* When screen width <= 690px, align dropdown to the left */
    .allslslsllll.left-dropdown > ul {
        left: auto !important;
        right: 100% !important;
    }

    /* Show dropdown smoothly on hover */
    .allslslsllll:hover > ul {
        opacity: 1;
        visibility: visible;
    }
}

</style>

