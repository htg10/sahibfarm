@extends('layouts.frontend.app')

@section('meta')
    <title>About Us | Sahib Farms and Resorts</title>
@endsection
@section('style')
    <style>

    </style>
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="hero1">
        <div class="hero1-overlay">
            <h1>About Sahib Farms and Resorts</h1>
            <p class="lead">Nature. Luxury. Harmony.</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section container">
        <div class="row align-items-center g-5">
            <div class="col-md-6">
                <img src="{{ asset('assets/frontend/images/aboutUs/MG1A4820.webp') }}" alt="Resort View" class="feature-img">
            </div>
            <div class="col-md-6">
                <h2 class="about-title">Our Story</h2>
                <p>Sahib Farms and Resorts is a luxurious nature retreat located on the serene outskirts of Delhi. Founded
                    with the vision of blending rural charm and modern hospitality, we offer guests an unforgettable escape
                    from city life.</p>
                <p>From scenic landscapes and organic farming to world-class amenities and personalized service, we ensure
                    every guest leaves with cherished memories.</p>
            </div>
        </div>
    </section>

    <!-- Vision & Values Section -->
    <section class="section-highlight text-center">
        <div class="container">
            <h2>Our Vision & Values</h2>
            <p class="lead mt-4">At Sahib Farms, we believe in sustainability, serenity, and service. Our resort is designed
                to offer you peace, relaxation, and a connection to nature while maintaining eco-conscious practices. We
                take pride in providing comfort with a conscience.</p>
        </div>
    </section>

    <!-- Team Section -->
    <section class="about-section container text-center">
        <h2 class="about-title">Meet Our Team</h2>
        <div class="row g-4">
            <div class="col-sm-6 col-lg-4">
                <img src="{{ asset('assets/frontend/images/user.png') }}" class="rounded-circle mb-3" width="120"
                    alt="Manager">
                <h5>Jay</h5>
                <p class="text-muted">General Manager</p>
            </div>
            <div class="col-sm-6 col-lg-4">
                <img src="{{ asset('assets/frontend/images/user.png') }}" class="rounded-circle mb-3" width="120"
                    alt="Chef">
                <h5>Jay</h5>
                <p class="text-muted">Head Chef</p>
            </div>
            <div class="col-sm-6 col-lg-4">
                <img src="{{ asset('assets/frontend/images/user.png') }}" class="rounded-circle mb-3" width="120"
                    alt="Host">
                <h5>Jay</h5>
                <p class="text-muted">Guest Relations</p>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
