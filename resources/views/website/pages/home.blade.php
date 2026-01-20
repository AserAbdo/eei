@extends('website.master')

@section('content')
<style>
    .asdasd i {
        font-size: .9em !important;
    }

    .slider-half img {
       height: 585px;
    }

    .slider-half {
        height: 90vh;
    }

    .carousel-caption {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-bottom: 145px;
    }

    .carousel-caption h1 {
        color: white;
        text-align: center;
        width: 483px;
    }

    .carousel-caption p {
        width: 483px;
        text-align: center;
    }
    @media (max-width: 600px) {
    .imgBox {
    width: 260px;
    }
    }

    .content {
        overflow-y: hidden;
    }

    .content::-webkit-scrollbar {
        display: none;
    }
</style>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner slider-half">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('storage/' . $settings->slider1) }}" class=" d-block w-100" alt="...">
                <div class="text-center carousel-caption">
                    <h1 class="fw-bold respon" >{{ $settings->title }}</h1>
                    <p class="respon">{{ $settings->description }}</p>
                    <a href="#Services" class="btn btn-danger">Explore Our Services</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('storage/' . $settings->slider2) }}" class=" d-block w-100" alt="...">
                <div class="carousel-caption text-start">
                    <h1 class="fw-bold respon" >{{ $settings->title }}</h1>
                    <p class="respon">{{ $settings->description }}</p>
                    <a href="#Services" class="btn btn-danger">Explore Our Services</a>
                </div>
            </div>
        </div>

        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true"
                style="width: 12px; height: 12px;"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                style="width: 12px; height: 12px;"></button>
        </div>
    </div>

    <div class="container">
        <div class="who-are-we row">
            <!-- Section 1: Text Content -->
            <div class="text-section col-xl-6 col-6 col-md-12">
                <h1>Who Are We</h1>
                <p>{{ $settings->who_we_are_desc }}
                </p>
                <a href="/about">More about us <span class="ms-2">&rarr;</span></a>
                <div class="mt-3 logo">
                    <img src="assets/img/logo.svg" alt="Company Logo">
                </div>
            </div>

            <!-- Section 2: Images -->
            <div class="m-auto image-section col-xl-6 col-6 col-md-12">
                <img src="{{ asset('storage/' . $settings->who_we_are_img_first) }}" class="mt-5" alt="Image 1">
                <img src="{{ asset('storage/' . $settings->who_we_are_img_second) }}" alt="Image 2">
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="text-center row">



            <div id="overlay" class="overlay">
                <img src="assets/img/loading.gif" alt="Loading..." class="overlay-gif" />
            </div>


            <div class="mt-4 col-md-4 service-animation">
                <div class="m-auto mb-3 text-white service-icon bg-danger w-25 asdasd" style="border-radius: 50%;padding: 8px;">
                    {!! $settings->feature1_icon !!}
                </div>
                <h4 class="service-title">{{$settings->feature1_title}}</h4>
                <p class="service-description">{{$settings->feature1_desc}}</p>
            </div>
            <div class="mt-4 col-md-4">
                <div class="m-auto mb-3 text-white service-icon bg-danger w-25 asdasd" style="border-radius: 50%;padding: 8px;">
                    {!! $settings->feature2_icon !!}
                </div>
                <h4 class="service-title">{{$settings->feature2_title}}</h4>
                <p class="service-description">{{$settings->feature2_desc}}</p>
            </div>
            <div class="mt-4 col-md-4">
                <div class="m-auto mb-3 text-white service-icon bg-danger w-25 asdasd" style="border-radius: 50%;padding: 8px;">
                    {!! $settings->feature3_icon !!}
                </div>
                <h4 class="service-title">{{$settings->feature3_title}}</h4>
                <p class="service-description">{{$settings->feature3_desc}}</p>
            </div>
        </div>
    </div>

    <div class="services-section">
        <h2 class="services-title fw-bold" id="Services">Our Services</h2>
        <p class="m-auto mb-5 text-center services-description w-75 ">
            {!! nl2br(e($settings->services)) !!}
        </p>



        <div class="container section-boex-vsd">
            <div class="section-boex-vsd">
                @if (count($category) > 0)
                    @foreach ($category as $item)
                        <div class="box" style="text-align: center ; color : #fff ; overflow: hidden; transform: scale(.9);">
                            <div class="imgBox d-flex align-items-center"
                                style="background-image: url({{ asset('storage/' . $item->image) }}) ; background-repeat: no-repeat;background-position:center ; display : flex ; justify-content :center ; align-items :center ; overflow : hidden">
                                <div class="data">
                                    <h3 class="fx-bold asdasdgggg">{{ $item->name }}</h3>
                                    <p class="py-5">{{ $item->description }}
                                    </p>
                                    <a href="/category-details/{{ $item->id }}" class="btn btn-danger">More About Service →</a>
                                </div>

                            </div>
                            <div class="content">
                                <ul>
                                    @foreach ($item->services as $service)
                                        <li><a style="color: #fff"
                                                href="/service-details/{{ $service->id }}">{{ $service->name }}</a></li>
                                    @endforeach

                                </ul>

                            </div>
                        </div>
                    @endforeach
                @endif

            </div>


        </div>

        <style>
            .section-boex-vsd {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 30px;
            }
        </style>


        <div class="mt-5">
            <a href="#Services">
                <button class="text-white rounded btn btn-getstarted bg-danger w-75">Show More Details</button>
            </a>
        </div>
    </div>

    <div class="container my-5">
        <div class="p-4 row align-items-center">
            <!-- Text Content -->
            <div class="col-lg-6">
                <h2 class="fw-bold">Why eei</h2>
                <p class="text-muted">
                    {{ $settings->why_eei_desc }}
                </p>
                <ul class="list-unstyled">
                    {{-- <li class="mb-3">
                        <i class="bi bi-check-circle-fill text-danger me-2"></i>
                        Free Consulting With Expert Saving Money
                    </li> --}}
                    @foreach(explode("\n", $settings->why_eei_points) as $feature)
                        <li class="mb-3">
                            <i class="bi bi-check-circle-fill text-danger me-2"></i>
                            {{ str_replace('- ', '', $feature) }}
                        </li>
                    @endforeach
                    {{-- <li class="mb-3">
                        <i class="bi bi-check-circle-fill text-danger me-2"></i>
                        Dui consectetur gravida platea ut dis diam. proin auctor
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-check-circle-fill text-danger me-2"></i>
                        Dui consectetur gravida plat
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-check-circle-fill text-danger me-2"></i>
                        Saving Money For The Future
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-check-circle-fill text-danger me-2"></i>
                        Dui consectetur gravida plat
                    </li> --}}
                </ul>
            </div>

            <!-- Image Section -->
            <div class="col-lg-6">
                <img src="{{ asset('storage/' . $settings->why_eei_image) }}" class="rounded img-fluid" alt="Industry image">
            </div>
        </div>
    </div>

    {{-- <div class="container my-5">
        <div class="mb-4 text-center">
            <h2 class="fw-bold">Frequently asked questions</h2>
            <p class="px-5 text-muted">
                Et pulvinar nec interdum integer id urna molestie porta nullam. A, donec ornare sed turpis pulvinar
                purus
                maecenas quam a. Erat porttitor pharetra sed in mauris elementum sollicitudin.
            </p>
        </div>
        <div class="accordion" id="faqAccordion">
            <!-- FAQ Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="bg-white accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Enim sodales consequat adipiscing facilisis massa venenatis, non lorem lobortis?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Venenatis nulla sagittis nunc, lobortis nec sollicitudin neque, dolor?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Vestibulum at eros. Nulla vitae elit libero, a pharetra augue.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Varius ultrices molestie tellus fermentum, viverra ipsum scelerisque etiam lorem?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Donec id elit non mi porta gravida at eget metus.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Nulla etiam vitae, at sagittis, nibh ultrices mattis feugiat faucibus?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                    </div>
                </div>
            </div>
            <!-- FAQ Item 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Sagittis consectetur gravida nec turpis eros, id sit et, dictum?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
