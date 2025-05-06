@extends('layouts.frontend.app')

@section('meta')
    <title>Gallery | Sahib Farms and Resorts</title>
@endsection
@section('style')
    <style>
    </style>
@endsection
@section('content')
    <!-- Hero2 Section -->
    <section class="hero2">
        <div class="hero2-overlay">
            <h1>Our Gallery</h1>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section container">
        <h2 class="gallery-title">Explore Sahib Farms and Resorts</h2>
        <div class="row g-4">
            <!-- Image Cards -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('assets/frontend/images/gallery/MG1A4765.webp')}}" class="gallery-img" data-bs-toggle="modal"
                    data-bs-target="#imageModal" data-bs-img="{{asset('assets/frontend/images/gallery/MG1A4765.webp')}}"
                    alt="Resort 1">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('assets/frontend/images/gallery/MG1A4768.webp')}}" class="gallery-img"
                    data-bs-toggle="modal" data-bs-target="#imageModal"
                    data-bs-img="{{asset('assets/frontend/images/gallery/MG1A4768.webp')}}" alt="Resort 2">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('assets/frontend/images/gallery/MG1A4827.webp')}}" class="gallery-img"
                    data-bs-toggle="modal" data-bs-target="#imageModal"
                    data-bs-img="{{asset('assets/frontend/images/gallery/MG1A4827.webp')}}" alt="Resort 3">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('assets/frontend/images/gallery/MG1A4833.webp')}}" class="gallery-img"
                    data-bs-toggle="modal" data-bs-target="#imageModal"
                    data-bs-img="{{asset('assets/frontend/images/gallery/MG1A4833.webp')}}" alt="Resort 4">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('assets/frontend/images/gallery/MG1A4846.webp')}}" class="gallery-img"
                    data-bs-toggle="modal" data-bs-target="#imageModal"
                    data-bs-img="{{asset('assets/frontend/images/gallery/MG1A4846.webp')}}" alt="Resort 4">
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('assets/frontend/images/gallery/MG1A4837.webp')}}" class="gallery-img"
                    data-bs-toggle="modal" data-bs-target="#imageModal"
                    data-bs-img="{{asset('assets/frontend/images/gallery/MG1A4837.webp')}}" alt="Resort 4">
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('assets/frontend/images/gallery/MG1A4865.webp')}}" class="gallery-img"
                    data-bs-toggle="modal" data-bs-target="#imageModal"
                    data-bs-img="{{asset('assets/frontend/images/gallery/MG1A4865.webp')}}" alt="Resort 4">
            </div>
             <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('assets/frontend/images/gallery/MG1A5064.webp')}}" class="gallery-img"
                    data-bs-toggle="modal" data-bs-target="#imageModal"
                    data-bs-img="{{asset('assets/frontend/images/gallery/MG1A5064.webp')}}" alt="Resort 4">
            </div>
            <!-- Add more images as needed -->
        </div>
    </section>

    <!-- Modal for Image View -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <img src="" id="modalImage" class="modal-img" alt="Enlarged image">
            </div>
        </div>
    </div>

    <!-- Bootstrap JS & Custom Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const imageModal = document.getElementById('imageModal');
        imageModal.addEventListener('show.bs.modal', event => {
            const triggerImg = event.relatedTarget;
            const imgSrc = triggerImg.getAttribute('data-bs-img');
            document.getElementById('modalImage').src = imgSrc;
        });
    </script>
@endsection
@section('script')
@endsection
