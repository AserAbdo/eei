@extends('website.master')

@section('content')
   <div class="img-cover" id="img-cover"
    style="margin-top: 110px; background-image :url({{ Storage::url($settings->contact_hero) }})">
    <div class="container">
        <div class="row ">
            <p style="display: flex; justify-content: start; padding-top: 90px; color: rgba(225, 44, 33, 1); font-size: 55px; font-weight: 700;
                         line-height: 32px; letter-spacing: 2px;">
                Contact Us</p>
            <div class="d-flex">
                <span style="color: #475569;">Home > &nbsp;</span> <span>Contact Us</span>
            </div>
        </div>
    </div>
</div>

<style>
    .contactImg {
        widows: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px;
    }

    .contactImgholder {
        /* position: absolute; */
        width: 80%;
        border-radius: 10px;
    }
</style>

<div class="contactImg">
    <img src="{{ Storage::url($settings->contact_img) }}" class="contactImgholder" alt="404">
</div>

@endsection
