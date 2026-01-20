@extends('website.master')

@section('content')
<style>
    .asdasd {
        transform: scale(.9)
    }
</style>
    <!-- Start certificate  -->
    {{-- <div class="img-cover" id="img-cover"
        style="margin-top: 110px;background-image:url({{ asset('storage/' . $settings->hero) }})">
        <div class="container">
            <div class="row ">
                <p
                    style="display: flex; justify-content: start; padding-top: 90px; color: rgba(225, 44, 33, 1); font-size: 55px; font-weight: 700;
                      line-height: 32px; letter-spacing: 2px;">
                    {{ $settings->title }}</p>
                <div class="d-flex">
                    <span style="color: #475569;">Home > &nbsp;</span> <span>{{ $settings->title }}</span>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="img-cover" id="img-cover"
        style="margin-top: 110px; background-image :url({{ asset('storage/' . $settings2->hero_image) }})">
        <div class="container">
            <div class="row ">
                <p style="display: flex; justify-content: start; padding-top: 90px; color: rgba(225, 44, 33, 1); font-size: 55px; font-weight: 700;
                             line-height: 32px; letter-spacing: 2px;">
                    {{ $settings->title }}</p>
                <div class="d-flex">
                    <span style="color: #475569;">Home > &nbsp;</span> <span>{{ $settings->title }}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End certificate -->

    <!-- Start text certificate  -->
    <div class="pt-5 pb-5 ">
        <div class="container">
            <p class="m-auto mb-5 text-center "
                style="color: rgba(71, 85, 105, 1); font-weight: 400; font-size: 18px; line-height: 29px;">
                {{ $settings->description }}
            </p>
        </div>
    </div>
    <!-- End text certificate -->

    <!-- Start cards -->
    <div class="pt-5 pb-5 text-center cards">
        <div class="container">
            <div class="row">
                @if (count($gallery) != 0)
                    @foreach ($gallery as $i)
                        <div class="col-md-6 col-lg-4" style="display: flex; justify-content: center; align-items: center;">
                            <div class="asdasd"
                                style="padding-bottom: 35px; width: 329px; height: auto; padding: 15px; margin-bottom: 20px;">
                                <div class="curser-pointer ">
                                    <!-- Use a unique ID for each modal trigger -->
                                    <img src="{{ asset('storage/' . $i->title) }}" style="width: 317px; height: 272px;"
                                        data-bs-toggle="modal" data-bs-target="#myModal{{ $i->id }}"
                                        class="zoom-effect" />
                                </div>

                                <!-- Modal with a unique ID for each item -->


                                <div class="mt-3 mb-3"
                                    style="font-weight: 700; font-size: 26px; line-height: 32px; color: rgba(22, 28, 45, 1);">
                                    {{ $i->name }}
                                </div>
                                <p class=""
                                    style="color: rgba(144, 144, 144, 1); font-size: 20px; font-weight: 300; line-height: 36px;">
                                    {{ $i->description }}
                                </p>
                            </div>
                        </div>
                        <div class="modal fade" id="myModal{{ $i->id }}" tabindex="-1" aria-labelledby="myModalLabel{{ $i->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img src="{{ asset('storage/' . $i->title) }}" alt="certification" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    @endforeach
                @else
                    <!-- Handle empty gallery case -->
                    <p>No gallery items found.</p>
                @endif
            </div>
        </div>
    </div>
    <!-- End cards -->
@endsection
