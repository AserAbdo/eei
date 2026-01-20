@extends('website.master')

@section('content')
    <!-- Start service  -->

<div class="img-cover" id="img-cover"
    style="margin-top: 110px; background-image :url({{ asset('storage/' . $settings->hero_image) }})">
    <div class="container">
        <div class="row ">
            <p style="display: flex; justify-content: start; padding-top: 90px; color: rgba(225, 44, 33, 1); font-size: 55px; font-weight: 700;
                         line-height: 32px; letter-spacing: 2px;">
                Get Service</p>
            <div class="d-flex">
                <span style="color: #475569;">Home > &nbsp;</span> <span>Get Service</span>
            </div>
        </div>
    </div>
</div>

<style>
    .twoBoxesForSwitch {
        width: 100%;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 30px;
        padding-top: 50px;
    }

    .boxSwith {
        width: 150px;
        height: 150px;

        border: 1px solid rgba(225, 44, 33, 1);
        text-align: 'center';
        border-radius: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        color: rgba(225, 44, 33, 1);

        transition: all .5s ease;

    }

    .boxSwith:hover {
        background-color: rgba(225, 44, 33, 1);
        color: white;

    }

    #from2, #from1 {
        display: none;
    }
</style>

    <div class="twoBoxesForSwitch">
        <div class="boxSwith" id="boxSwith1">Get Service</div>
        <div class="boxSwith" id="boxSwith2">Join Our Team</div>
    </div>


    <form method="POST" id="from1" class="container service-form" style="transform: scale(.9);">

        <div class="service-form-div-inmg">
            <img src="./assets/img/1.jpg" alt="" style="max-width: 100%;">
        </div>


        <div class="p-5 box" style="height: auto; width: 100%;">
            <div class="mt-5 mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name"
                    style="height: 50px;">
            </div>

            <div class="mt-5 mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                <input type="phone" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number"
                    style="height: 50px;">
            </div>

            <div class="mt-5 mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email"
                    style="height: 50px;">
            </div>


            <div class="mt-5 mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Details</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write Your Details"
                    style="height: 140px;"></textarea>
            </div>

            <div class="mt-5 mb-4">
                <div class="botton-sub">
                    <button type="submit" class="btn btn-primary"
                        style="width: 100%; border: none; background-color:rgba(225, 44, 33, 1) ; height: 45px; font-size: 18px;">Send</button>
                </div>

            </div>

        </div>


    </form>
    <form method="POST" id="from2" class="container service-form" style="transform: scale(.9);">

        <div class="service-form-div-inmg">
            <img src="./assets/img/1.jpg" alt="" style="max-width: 100%;">
        </div>


        <div class="p-5 box" style="height: auto; width: 100%;">
            <div class="mt-5 mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name"
                    style="height: 50px;">
            </div>

            <div class="mt-5 mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                <input type="phone" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number"
                    style="height: 50px;">
            </div>

            <div class="mt-5 mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                {{-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email"
                    style="height: 50px;"> --}}
                                    <div class="d-flex align-items-center">
                    <input type="file" class="form-control me-3" id="why_eei_image" placeholder="slider2" name="why_eei_image" accept="image/*">
                </div>
            </div>


            <div class="mt-5 mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Where Do You Want to Grow and Develop</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Where Do You Want to Grow and Develop"
                    style="height: 140px;"></textarea>
            </div>

            <div class="mt-5 mb-4">
                <div class="botton-sub">
                    <button type="submit" class="btn btn-primary"
                        style="width: 100%; border: none; background-color:rgba(225, 44, 33, 1) ; height: 45px; font-size: 18px;">Apply</button>
                </div>

            </div>

        </div>


    </form>
    <!-- End service  -->

    <script>
        let form1 = document.getElementById('from1')
        let from2 = document.getElementById('from2');

        let btn1 = document.getElementById('boxSwith1');
        let btn2 = document.getElementById('boxSwith2');


        btn1.addEventListener('click', () => {
           from2.style.display = "none";
           from1.style.display = "block";
           btn1.style.backgroundColor = "rgba(225, 44, 33, 1)";
           btn1.style.color = "white";
           btn2.style.backgroundColor = "transparent";
           btn2.style.color = "rgba(225, 44, 33, 1)";

        });


        btn2.addEventListener('click', () => {
           from1.style.display = "none";
           from2.style.display = "block";
           btn1.style.backgroundColor = "transparent";
           btn1.style.color = "rgba(225, 44, 33, 1)";
           btn2.style.backgroundColor = "rgba(225, 44, 33, 1)";
           btn2.style.color = "white";

        });


    </script>
@endsection
