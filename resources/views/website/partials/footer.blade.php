<div class="footer pb-5 pt-5" style="background-color: rgba(244, 247, 250, 1); margin-top: 5px;">
    <div class="container" style="padding: 20px;">
        <div class="row text-center text-md-start">



            <div class="col-lg-2 col-md-6 mb-4">
                <div
                    style="font-size: 15px; line-height: 26px; font-weight: 600; color: rgba(240, 36, 24, 1); padding-bottom: 20px; ">
                    Company</div>
                <ul class="list-unstyled text-white-50 m-auto">
                    <li class="mb-2"
                        style="color: rgba(22, 28, 45, 1); font-size: 17px; font-weight: 400; line-height: 40px;">
                        <a style="color:rgba(22, 28, 45, 1) " href="/about">About us</a>
                    </li>
                    <li class="mb-2"
                        style="color: rgba(22, 28, 45, 1); font-size: 17px; font-weight: 400; line-height: 40px;">
                        <a style="color:rgba(22, 28, 45, 1) " href="/contact">Contact us</a>
                    </li>
                    <li class="mb-2"
                        style="color: rgba(22, 28, 45, 1); font-size: 17px; font-weight: 400; line-height: 40px;">
                        <a style="color:rgba(22, 28, 45, 1) " href="/certificate">Certificates</a>
                    </li>

                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <?php
                    $categories = App\Models\Category::all();
                ?>
                <div
                    style="font-size: 15px; line-height: 26px; font-weight: 600; color: rgba(240, 36, 24, 1); padding-bottom: 20px;">
                    Services</div>
                <ul class="list-unstyled text-white-50 m-auto">
                    @foreach ($categories as $item)
                        <li class="mb-2"
                            style="color: rgba(22, 28, 45, 1); font-size: 17px; font-weight: 400; line-height: 40px;">
                            {{$item->name}}</li>
                    @endforeach
                </ul>
            </div>


            <div class="col-lg-3 col-md-6 mb-4">
                <?php
                $settings = App\Models\Setting::find(1);

                ?>
                <div
                    style="font-size: 15px; line-height: 26px; font-weight: 600; color: rgba(240, 36, 24, 1); padding-bottom: 20px;">
                    Contact us</div>
                <ul class="list-unstyled text-white-50 m-auto">
                    <li class="mb-2"
                        style="color: rgba(22, 28, 45, 1); font-size: 17px; font-weight: 400; line-height: 40px;">
                        {{ $settings->email }}
                    </li>
                    <li class="mb-2"
                        style="color: rgba(22, 28, 45, 1); font-size: 17px; font-weight: 400; line-height: 40px;">
                        {{ $settings->phone }}</li>

                </ul>
            </div>


            <div class="col-lg-4 col-md-6 mb-4">
                {{-- <img src="{{ asset('storage/' . $settings->logo) }}" alt="img"> --}}
                {{-- <iframe width="100%" height="300" style="border:0;" loading="lazy" allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed/v1/place?key={{ config('services.google_maps.key') }}&q={{ $settings->latitude }},{{ $settings->longitude }}">
                </iframe> --}}
                <iframe width="100%" height="300" style="border:0;" loading="lazy" allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed/v1/place?key={{ config('services.google_maps.key') }}&q=26.820553,30.802498">
                </iframe>

            </div>



        </div>


    </div>
</div>

<div style="background-color: rgba(240, 36, 24, 1);">
    <div class="container text-center">
        <div class="row" style="padding: 15px;">

            <div class="col">
                <div>
                    <div style="color: rgba(255, 255, 255, 1); font-size: 15px; font-weight: 300; line-height: 26px;">
                        © 2024 Copyright, All Right Reserved,<img src="{{ asset('assets/img/heart.svg') }}"
                            alt="" /></div>

                </div>
            </div>


            <div class="col">
                <div style="display: flex; justify-content: center; align-items: center; gap: 25px;">
                    <div>
                        <a href="{{ $settings->facebook }}">
                            <img src="{{ asset('assets/img/logo-facebook.svg') }}" alt=""
                                style="width: 19px; height: 19px;" />
                        </a>
                    </div>
                    <div>
                        <a href="{{ $settings->instagram }}">
                            <img src="{{ asset('assets/img/logo-instagram.svg') }}" alt=""
                                style="width: 19px; height: 19px;" />
                        </a>
                    </div>
                    <div>
                        <a href="{{ $settings->linkedin }}">
                            <img src="{{ asset('assets/img/logo-linkedin.svg') }}" alt=""
                                style="width: 19px; height: 19px;" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
