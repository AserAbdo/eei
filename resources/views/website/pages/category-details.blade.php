@extends('website.master')

@section('content')
    <!-- card-details  -->
    {{-- <div class="img-cover" id="img-cover" style="margin-top: 40px;">
        <div class="container">
            <div class="row ">
                <p
                    style="display: flex; justify-content: start; padding-top: 90px; color: rgba(225, 44, 33, 1); font-size: 55px; font-weight: 700;
          line-height: 32px; letter-spacing: 2px;">
                    MCCB </p>
                <div class="d-flex">
                    <span style="color: #475569;">Home > &nbsp;</span> <span style="color: #475569;">Categories >
                        &nbsp;</span>
                    <span style="color: #475569;"> {{ $category->name }}</span>
                </div>
            </div>
        </div>

    </div> --}}
    <div class="img-cover" id="img-cover"
        style="margin-top: 110px; background-image :url({{ asset('storage/' . $settings->hero_image) }})">
        <div class="container">
            <div class="row ">
<p style="display: flex; justify-content: start; padding-top: 90px; color: rgba(225, 44, 33, 1); font-size: 55px; font-weight: 700;
                          line-height: 32px; letter-spacing: 2px;">
                    MCCB </p>
                <div class="d-flex">
                    <span style="color: #475569;">Home > &nbsp;</span> <span style="color: #475569;">Categories >
                                            &nbsp;</span>
                                        <span style="color: #475569;"> {{ $category->name }}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- card-details  -->

    <div class="container mt-5">
        {{-- <div class="row">
            <div class="col" style="display: flex; justify-content: center; align-items: center;">


                <div class="mb-3 card"
                    style="max-width: 1112px; background: rgba(255, 255, 255, 1);

        box-shadow: 0px 4px 64.2px 0px rgba(0, 0, 0, 0.05); margin-top: 50px; border: none; padding: 23px; border-radius: 10px;">
                    <div class="row ">
                        <div class="col-md-4" style="display: flex; justify-content: center; align-items: center;">
                            <img src="{{ asset('storage/' . $category->image) }}" class="img-fluid rounded-start"
                                alt="..." style="width: 200px; height:304px ;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"
                                    style="color: rgba(22, 28, 45, 1); font-weight: 700; font-size: 30px; line-height: 32px; text-align: right;">
                                    {{ $category->name }}</h5>
                                <p class="card-text"
                                    style="color: rgba(71, 85, 105, 1); font-weight: 300; font-size: 18px; line-height: 28.8px; text-align: right; ">
                                    {{ $category->description }}
                                </p>

                                <div class="asdasdasdfdsfdf"
                                    style="text-align: right; display: flex; justify-content: end; gap: 15px;">
                                    <a href="#" class="btn btn-primary"
                                        style="background-color: rgba(255, 255, 255, 1); border-radius: 25px;
            color: rgba(240, 36, 24, 1); border: 1px solid rgba(240, 36, 24, 1); padding-left: 10px; padding-right: 10px; ">
                                        Contact us
                                    </a>

                                    <a href="#" class="btn btn-primary"
                                        style="background-color: rgba(240, 36, 24, 1); border-radius: 25px;
         color: rgba(255, 255, 255, 1); border: 1px solid rgba(240, 36, 24, 1); padding-left: 10px; padding-right: 10px;">
                                        Get Service
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div> --}}

        <div class="cate-box">
            <div class="text-cate">
                <h3>{{ $category->name }}</h3>
                <h5>{{ $category->description }}</h5>
                <div class="links-serveice-contact">
                    <a href="/">Contact</a>
                    <a href="/">Get Service</a>
                </div>
            </div>
            <div class="img-cate">
                <img src="{{ asset('storage/' . $category->image) }}" alt="404">
            </div>
        </div>
    </div>

    <style>
        .cate-box {
            width: 100%;
            height: auto;
            padding: 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 12px;
            background-color: rgba(244, 247, 250, 1);
        }

        .img-cate img {
            width: 320px;
            height: auto;
            border-radius: 12px;
        }

        .text-cate h3 {
            font-size: 1.9em;
           font-weight: bold;
           margin-bottom: 11px;

        }

        .text-cate h5 {
            font-size: 1em;
        }

        .links-serveice-contact {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            margin-top: 20px;
            gap: 12px;
        }

        .links-serveice-contact a {
            padding: 10px;
            width: 120px;
            text-align: center;
            background-color: rgba(240, 36, 24, 1);
            border-radius: 8px;
            color: white;
        }


.swiper {
    width: 88%;
    height: auto;
    }



    .swiper-button-next,
    .swiper-button-prev {
    color: rgba(255, 0, 0, 0.9);
    }

    .swiper-wrapper {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        margin-left: 30px;
    }

    .uisisiisis {
        margin-left: 60px;
    }

    .asdkaklii {
        width: 100%;
        padding: 40px;
        border-radius: 10px;
        background: rgba(244, 247, 250, 1);
    }

        @media (max-width: 767px) {

            .card-body h5,
            .card-body p {
                margin-top: 10px;
                text-align: center !important;
            }

            .asdasdasdfdsfdf {
                justify-content: center !important;
                align-items: center;
            }
        }


    </style>

    <!-- Start text details -->

    <!-- End text details -->

    <!--start other cards-->
        <div class="pb-5 boxess">
            <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper uisisiisis">
                <!-- Slides -->
                @foreach ($service as $item)

                <div class="swiper-slide">
                   <div class="card-outer">
                    <div class="img-mcbb">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="404">
                        <div class="overlay">
                            <a href="/service-details/{{ $item->id }}" class="view-more">View More</a>
                        </div>
                    </div>
                    <div class="card-inner-text">
                        <h3>{{ $item->name }}</h3>
                        <h5>{{ Str::limit($item->description, 150) }}</h5>
                    </div>
                </div>

                </div>
                @endforeach
<style>
    .card-outer {
    width: 250px;
    height: auto;
    padding: 20px;
    position: relative;
    }

    .img-mcbb {
    width: 100%;
    padding: 30px;
    background-color: rgba(244, 247, 250, 1);
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 12px;
    position: relative;
    overflow: hidden;
    }

    .img-mcbb img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease-in-out;
    }

    /* Overlay effect */
    .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    }

    /* View More button */
    .view-more {
    color: white;
    font-size: 1em;
    text-decoration: none;
    background: rgba(255, 255, 255, 0.2);
    padding: 10px 20px;
    border-radius: 5px;
    transition: background 0.3s ease-in-out;
    }

    .view-more:hover {
        color: rgba(255, 0, 0, 0.9);
    background: rgba(255, 255, 255, 0.4);
    }

    /* Hover Effect */
    .img-mcbb:hover .overlay {
    opacity: 1;
    }

    .img-mcbb:hover img {
    transform: scale(1.1);
    }
    .card-inner-text {
                margin-top: 10px;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                }

    .card-inner-text h5{
        font-size: .9em;
    }
</style>
            </div>
            <!-- If we need pagination -->

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            </div>
        </div>
    <!--end other cards-->
    <div class="container items-center pb-5 boxess d-flex justify-content-center">
        <div class="asdkaklii">
        <h3 style="text-align: center;">Suggested Produts</h3>
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach ($service_all as $item)

                        <div class="swiper-slide">
                            <div class="card-outer">
                                <div class="img-mcbb">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="404">
                                    <div class="overlay">
                                        <a href="/service-details/{{ $item->id }}" class="view-more">View More</a>
                                    </div>
                                </div>
                                <div class="card-inner-text">
                                    <h3>{{ $item->name }}</h3>
                                    <h5>{{ Str::limit($item->description, 150) }}</h5>
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
<style>
    @media (max-width: 850px) {
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .uisisiisis, .swiper-wrapper {
            margin-left: 0;
        }
    }
</style>
<script>
    // Initialize Swiper
    let swiper = new Swiper('.swiper', {
        loop: true,
        slidesPerView: window.innerWidth <= 850 ? 1 : 3,
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
