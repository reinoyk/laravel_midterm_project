@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="about_section layout_padding margim_90">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="about_taital">About Hospital</h1>
                <p class="about_text">Aeon Medical Center is a premier healthcare facility committed to providing top-tier medical services with a personalized touch. With state-of-the-art technology and a compassionate team of professionals, we offer comprehensive care that prioritizes your well-being. Whether it’s preventative care, diagnostics, or specialized treatments, we are dedicated to ensuring the best outcomes for our patients—because your health matters.</p>
            </div>
            <div class="col-md-6">
                <div class="about_img">
                    <img src="{{ asset('images/about-img.png') }}" alt="About Hospital">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
