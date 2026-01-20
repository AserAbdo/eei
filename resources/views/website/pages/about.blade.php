@extends('website.master')

@section('content')
<style>
    .mission-section-2 {
        background-color: rgba(255, 0, 0, 0.8);
    }

    .swiper {
        width: 100%;
        height: 320px;
    }

    .col-md-4 {
        width: unset !important;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: rgba(255, 0, 0, 0.9);
    }

    .swiper-pagination-bullet {
        background: rgba(255, 0, 0, 0.9);
    }
</style>
<div class="img-cover" id="img-cover"
    style="margin-top: 110px; background-image :url({{ asset('storage/' . $settings->hero_image) }})">
    <div class="container">
        <div class="row ">
            <p style="display: flex; justify-content: start; padding-top: 90px; color: rgba(225, 44, 33, 1); font-size: 55px; font-weight: 700;
                         line-height: 32px; letter-spacing: 2px;">
                {{ $settings->title }}</p>
            <div class="d-flex">
                <span style="color: #475569;">Home > &nbsp;</span> <span>About Us</span>
            </div>
        </div>
    </div>
</div>

<section class="container-fluid about-section">
    <div class="row align-items-center justify-content-center">
        <div class="mb-4 col-12 col-md-6 mb-md-0">
            <div class="m-auto w-75">
                <h2 class="fw-bold text-dark fs-1 centeratmobile">Who Are We</h2>
                <p class="about-text centeratmobile">
                    {{ $settings->who_we_are }}
                </p>
            </div>
        </div>
        <div class="col-12 col-md-6 about-image">
            <div class="w-100 d-flex justify-content-center align-items-center">
                <img src="{{ asset('storage/' . $settings->who_we_are_image) }}" alt="Electrical Work Image"
                    style="width: 350px;">
            </div>
        </div>
    </div>
</section>

<section class="container-fluid vision-section">
    <div class="container m-auto w-75">
        <h2 class="vision-title centeratmobile">Vision</h2>
        <p class="vision-text centeratmobile">
            {{ $settings->our_vision }}
        </p>
    </div>
    <div class="m-auto mt-5 container-fluid w-75">
        <div class="mt-5 row g-4 vision-images gapatmobile">
            <div class="m-auto col-12 col-md-6">
                <img src="{{ asset('storage/' . $settings->our_vision_image) }}" alt="Electrical Work">
            </div>
            <div class="m-auto col-12 col-md-6">
                <img src="{{ asset('storage/' . $settings->our_vision_image2) }}" alt="Power Station">
            </div>
        </div>
    </div>
</section>

<div class="mission-section-2">
    <div class="ablosute-img-about"
        style="background-image: url({{ asset('storage/' . $settings->our_mission_image) }})"></div>
    <div class="text-mission-section-2">
        <h2 class="">Our Mission</h2>
        <p class="">
            {{-- {{ $settings->our_mission }} --}}
            {!! nl2br(e($settings->our_mission)) !!}
        </p>
    </div>
</div>

<section class="values-section">
    <div class="container">
        <h2 class="mb-5 values-title fw-bolder text-dark">Our Values</h2>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach ($gallery2 as $item)

                    <div class="swiper-slide">
                        <div class="col-md-4">
                            <div class="card">
                                <img src={{ asset('storage/' . $item->title) }} class="card-img-top" alt="Value 1">
                                <div class="card-body">
                                    <p class="card-text">
                                        {{ $item->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- If we need pagination -->

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>

<div class="container my-5">
    <div class="p-4 row align-items-center">
        <!-- Text Content -->
        <div class="col-lg-6">
            <h2 class="fw-bolder text-dark">Why eei</h2>
            <p class="text-muted">
                {{ $settings2->why_eei_desc }}
            </p>
            <ul class="list-unstyled">
                @foreach(explode("\n", $settings2->why_eei_points) as $feature)
                <li class="mb-3">
                    <i class="bi bi-check-circle-fill text-danger me-2"></i>
                    {{ str_replace('- ', '', $feature) }}
                </li>
                @endforeach
            </ul>
        </div>

        <!-- Image Section -->
        <div class="col-lg-6">
            <img src="{{ asset('storage/' . $settings2->why_eei_image) }}" class="rounded img-fluid"
                alt="Industry image">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="align-middle d-flex justify-content-between">
            <h1 class="text-dark fw-bold">Certificates</h1>
            <a href="{{ route('certificate') }}"><span class="text-danger" style="margin-right: 15px;">View More <img src="assets/img/Vector33.svg"
                        alt="vector"></span></a>
        </div>

        @foreach ($gallery as $item)
        <div class="col-md-6 col-lg-4" style="display: flex; justify-content: center; align-items: center;">
            <div style="padding-bottom: 35px; width: 329px; height: 468px; padding-top: 35px; margin-bottom: 55px; transform: scale(.9);">
                <div class="curser-pointer">
                    <!-- Use a unique ID for each modal trigger -->
                    <img src="{{ asset('storage/' . $item->title) }}" style="width: 317px; height: 272px;"
                        data-bs-toggle="modal" data-bs-target="#myModal{{ $item->id }}" class="zoom-effect" />
                </div>

                <!-- Modal with a unique ID for each item -->
                <div class="modal fade" id="myModal{{ $item->id }}" tabindex="-1"
                    aria-labelledby="myModalLabel{{ $item->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="{{ asset('storage/' . $item->title) }}" alt="certification" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3 mb-3"
                    style="font-weight: 700; font-size: 26px; line-height: 32px; color: rgba(22, 28, 45, 1);">
                    {{ $item->name }}
                </div>
                <p class=""
                    style="color: rgba(144, 144, 144, 1); font-size: 20px; font-weight: 300; line-height: 36px;">
                    {{ $item->description }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    @media (max-width: 680px) {
    .swiper-slide {
        display: flex;
                justify-content: center;
                align-items: center;
    }
    }
</style>


<script>
    // Initialize Swiper
    let swiper = new Swiper('.swiper', {
        loop: true,
        slidesPerView: window.innerWidth <= 690 ? 1 : 3,
        spaceBetween: 30,
        initialSlide: 2,
        centeredSlides: true,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Function to update slidesPerView on window resize
    function updateSwiper() {
        const newSlidesPerView = window.innerWidth <= 690 ? 1 : 3;
        if (swiper.params.slidesPerView !== newSlidesPerView) {
            swiper.params.slidesPerView = newSlidesPerView;
            swiper.update();
        }
    }

    // Listen for window resize
    window.addEventListener('resize', updateSwiper);
</script>
@endsection
