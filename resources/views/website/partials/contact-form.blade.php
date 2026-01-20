<div class="contact" style="background-repeat: no-repeat; background-size: cover;">
    <div class="container" >
        <div class="row container" style="margin-top: 20%; padding-top: 8%; padding-bottom: 5%; transform: scale(.9);">
            <?php
            $settings = App\Models\Setting::find(1);
            ?>
            <div class="col-lg-6
            col-sm-12
            " style="margin-bottom: 25px;">
                <h4
                    style="font-size: 36px; font-weight: 700; line-height: 48px; color: rgba(255, 255, 255, 1);
             display: flex; justify-content: start; align-items: start; padding-bottom: 20px;">
                    Contact Us</h4>

                <ul>

                    <div style="display: flex; padding: 10px;">
                        <div><img src="{{ asset('assets/img/location_1.svg') }}" alt=""
                                style="width: 25px; height: 25px;">
                        </div>
                        <div
                            style="font-size: 18px; font-weight: 300; line-height: 32px; color: rgba(255, 255, 255, 1); padding-left: 10px;">
                            {{ $settings->address }}</div>
                    </div>

                    <div style="display: flex; padding: 10px;">
                        <div><img src="{{ asset('assets/img/phone.svg') }}" alt=""
                                style="width: 25px; height: 25px;"></div>
                        <div
                            style="font-size: 18px; font-weight: 300; line-height: 32px; color: rgba(255, 255, 255, 1); padding-left: 10px;">
                            {{ $settings->phone }}</div>
                    </div>

                    <div style="display: flex; padding: 10px;">
                        <div><img src="{{ asset('assets/img/email.svg') }}" alt=""
                                style="width: 25px; height: 25px;"></div>
                        <div
                            style="font-size: 18px; font-weight: 300; line-height: 32px; color: rgba(255, 255, 255, 1); padding-left: 10px;">
                            {{ $settings->email }}</div>

                    </div>

                </ul>

            </div>
            <style>
                .contact .contact-form {
                    padding: 20px !important;
                    /* max-width: auto; */
                    width: 130%;
                    /* min-width: 350px; */
                }

                .contact {
                    background-image: url({{ asset('storage/' . $settings->footer) }});
                }

                @media (max-width: 715px) {
                    .contact .contact-form {
                        width: 350px;
                    }
                }
            </style>

            <div class="col-lg-6 col-sm-12">
                <h4
                    style="font-size: 36px; font-weight: 700; line-height: 48px; color: rgba(255, 255, 255, 1); padding-bottom: 20px;">
                    Send us a question</h4>
                <div class="contact-form container">


                    <div class="box-contact m-3">
                        <div class="d-flex justify-content-center items-center gap-4">
                        <div class="w-100">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="i.e. John Doe">
                        </div>


                        <div class="w-100">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="i.e. john@mail.com">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center items-center gap-4 mt-4">

                        <div class="w-100">
                            <label for="exampleFormControlInput1" class="form-label">Phone </label>
                            <input type="phone" class="form-control" id="exampleFormControlInput1"
                                placeholder="i.e. 123-456-7890">
                        </div>


                        <div class=" w-100">
                            <label for="exampleFormControlInput1" class="form-label"> Your Question </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Write Your Question ">
                        </div>
                        </div>

                        <div class="mt-4">
                            <div class="botton-sub">
                                <button type="submit" class="btn btn-primary d-flex justify-content-center items-center"
                                    style="width: 100%; border: none; background-color:rgba(225, 44, 33, 1) ; height: 50px; ">send</button>
                            </div>

                        </div>

                    </div>


                </div>
            </div>


        </div>
    </div>
</div>
