@extends('layouts.frontend.app')

@section('meta')
    <title>Home | SahibFarm</title>
@endsection

@section('style')
    <style>
        .slick-prev,
        .slick-next {
            font-size: 30px;
            color: #fff;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .slick-prev {
            left: 0px;
        }

        .slick-next {
            right: 0px;
        }

        /* Hover effects for arrows */
        .slick-prev:hover,
        .slick-next:hover {
            background-color: rgba(0, 0, 0, 0.8);
            color: #f1f1f1;
        }

        /* Optional: Style for icons inside buttons (if you want to change the icon size) */
        .slick-prev i,
        .slick-next i {
            font-size: 20px;
        }
    </style>
@endsection

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide home-banner" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/frontend/images/slider/23.avif') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h1>Sahib Farms & Resorts</h1>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/frontend/images/slider/21.avif') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h1>Sahib Farms & Resorts</h1>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/frontend/images/slider/24.avif') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h1>Sahib Farms & Resorts</h1>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/frontend/images/slider/20.avif') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h1>Sahib Farms & Resorts</h1>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/frontend/images/slider/22.avif') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h1>Sahib Farms & Resorts</h1>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- slider1 --}}
    <section class="slider1">
        <div class="container">
            <div class="slider-one">
                <div class="card">
                    <div class="row d-flex">
                        <div class="col-3">
                            <img src="{{ asset('assets/frontend/images/slider/26.avif') }}" alt="">
                        </div>
                        <div class="col-7 d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <h3>Unparalleled Luxury, Exclusive Privileges</h3>
                                <p>Pre-purchase hotel credit and enjoy enhanced benefits at Oberoi Hotels & Resorts in
                                    India.</p>
                            </div>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <a href="#" class="btn btn-primary">KNOW MORE</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row d-flex">
                        <div class="col-3">
                            <img src="{{ asset('assets/frontend/images/slider/26.avif') }}" height="150" width="100%"
                                alt="">
                        </div>
                        <div class="col-7 d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <h3>Unparalleled Luxury, Exclusive Privileges</h3>
                                <p>Pre-purchase hotel credit and enjoy enhanced benefits at Oberoi Hotels & Resorts in
                                    India.</p>
                            </div>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <a href="#" class="btn btn-primary">KNOW MORE</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row d-flex">
                        <div class="col-3">
                            <img src="{{ asset('assets/frontend/images/slider/26.avif') }}" height="150" width="100%"
                                alt="">
                        </div>
                        <div class="col-7 d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <h3>Unparalleled Luxury, Exclusive Privileges</h3>
                                <p>Pre-purchase hotel credit and enjoy enhanced benefits at Oberoi Hotels & Resorts in
                                    India.</p>
                            </div>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <a href="#" class="btn btn-primary">KNOW MORE</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Experience --}}
    <div class="container d-none d-md-block">
        <div class="row justify-content-between align-items-end">
            <div class="col">
                <h1>May we offer a little persuasion?</h1>
                <p>A few tempting reasons that might allow us to welcome you soon.</p>
            </div>
            <div class="col text-end">
                <h5><a href="#" style="color: #da7b26">VIEW ALL OFFERS<i
                            class="fa-solid fa-angle-right ms-1"></i></a>
                </h5>
            </div>
        </div>
    </div>

    {{--  --}}
    <section class="design d-none d-md-block">
        <div class="container">
            <div class="row d-flex">
                <div class="col-3 first d-flex justify-content-center align-items-center">
                    <div class="">
                        <h2> SahibFarm Resorts</h2>
                        <p>Enjoy the benefits of booking directly on Oberoihotels.com</p>
                    </div>
                </div>
                <div class="col-2 second d-flex justify-content-center align-items-center mt-3">
                    <div class="text-center">
                        <i class="fa-solid fa-award" style="color: #eed886; font-size: 50px; margin-bottom: 30px;"></i>
                        <p>Best Rate Guarantee</p>
                        <a href="#" class="btn btn-primary" style="border-radius: 0%">Know More<i
                                class="fa-solid fa-angle-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-3 justify-content-center align-items-center mt-3">
                    <div class="d-flex">
                        <i class="fa-solid fa-user pe-4" style="font-size: 30px; color: rgb(216, 196, 85);"></i>
                        <p>Exclusive member rates</p>
                    </div>
                    <div class="d-flex mt-3">
                        <i class="fa-solid fa-wifi pe-3" style="font-size: 30px; color: rgb(216, 196, 85);"></i>
                        <p>Premium WiFi</p>
                    </div>
                </div>
                <div class="col-2 justify-content-center align-items-center mt-3">
                    <div class="d-flex">
                        <i class="fa-solid fa-clock pe-4" style="font-size: 30px; color: rgb(216, 196, 85);"></i>
                        <p>Late check out</p>
                    </div>
                    <div class="d-flex mt-3">
                        <i class="fa-solid fa-address-card pe-3" style="font-size: 30px; color: rgb(216, 196, 85);"></i>
                        <p>Complimentary stays and
                            upgrades.</p>
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary" style="border-radius: 0%">Know More<i
                                class="fa-solid fa-angle-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-2 justify-content-center align-items-center mt-3">
                    <div class="d-flex">
                        <i class="fa-solid fa-clock pe-4" style="font-size: 30px; color: rgb(216, 196, 85);"></i>
                        <p>Late check out</p>
                    </div>
                    <div class="d-flex mt-3">
                        <i class="fa-solid fa-person-digging pe-3" style="font-size: 30px; color: rgb(216, 196, 85);"></i>
                        <p>Complimentary stays and
                            upgrades.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- slider 2 --}}
    <section class="slider2">
        <div class="container mb-4">
            <div class="row justify-content-between align-items-end">
                <div class="col">
                    <h1>Our special services</h1>
                    {{-- <p>A few tempting reasons that might allow us to welcome you soon.</p> --}}
                </div>
                <div class="col text-end">
                    <h5><a href="#" style="color: #da7b26">VIEW ALL SERVICES<i
                                class="fa-solid fa-angle-right ms-1"></i></a></h5>
                </div>
            </div>
        </div>
        <div class="slider-two">
            <div class="card">
                <img src="{{ asset('assets/frontend/images/slider/slider2.webp') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text mb-0">Our special services</p>
                    <h2 class="card-title">Marriage Functions.</h2>
                    <p>{{ Str::limit('Seamlessly planned weddings that turn dreams into reality.', 70) }}
                    </p>
                    <div class="">
                        <a href="#" class="card-link" style="color: #6ab8d9">EXPLORE <i
                                class="fa-solid fa-angle-right ms-1"></i></a>
                        <a href="#" class="card-link" style="color: #da7b26">BOOK NOW <i
                                class="fa-solid fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('assets/frontend/images/slider/card2.webp') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text mb-0">Our special services</p>
                    <h2 class="card-title">Sagan Ceremony</h2>
                    <p>{{ Str::limit('Thoughtfully arranged for a perfect family celebration.', 70) }}
                    </p>
                    <div class="">
                        <a href="#" class="card-link" style="color: #6ab8d9">EXPLORE <i
                                class="fa-solid fa-angle-right ms-1"></i></a>
                        <a href="#" class="card-link" style="color: #da7b26">BOOK NOW <i
                                class="fa-solid fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('assets/frontend/images/slider/card3.webp') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text mb-0">Our special services</p>
                    <h2 class="card-title">Reception</h2>
                    <p>{{ Str::limit('Elegant settings to celebrate the start of your new journey.', 70) }}
                    </p>
                    <div class="">
                        <a href="#" class="card-link" style="color: #6ab8d9">EXPLORE <i
                                class="fa-solid fa-angle-right ms-1"></i></a>
                        <a href="#" class="card-link" style="color: #da7b26">BOOK NOW <i
                                class="fa-solid fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('assets/frontend/images/slider/card4.webp') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text mb-0">Our special services</p>
                    <h2 class="card-title">Haldi</h2>
                    <p>{{ Str::limit('A colorful and traditional setup to brighten your special day.', 100) }}
                    </p>
                    <div class="">
                        <a href="#" class="card-link" style="color: #6ab8d9">EXPLORE <i
                                class="fa-solid fa-angle-right ms-1"></i></a>
                        <a href="#" class="card-link" style="color: #da7b26">BOOK NOW <i
                                class="fa-solid fa-angle-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- slider 3 --}}
    <section class="slider3">
        <div class="container">
            <div class="row justify-content-between align-items-end mb-4">
                <div class="col">
                    {{-- <p class="mb-0">Our Rooms</p> --}}
                    <h1 class=""><i>Our Rooms</i></h1>
                </div>
                <div class="col text-end">
                    <h5><a href="#" style="color: #da7b26">VIEW ALL ROOMS<i
                                class="fa-solid fa-angle-right ms-1"></i></a></h5>
                </div>
            </div>
            <div class="slider-three py-3">
                <div class="card">
                    <img src="{{ asset('assets/frontend/images/slider/room1.webp') }}" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text mb-0">ROOM</p>
                        <h2 class="card-title"><i>Villa</i>
                        </h2>
                        <p>Villa</p>
                        {{-- <p>{{ Str::limit(
                            'Nita Mukesh Ambani Cultural centre brings to the city',
                            70,
                        ) }}
                        </p> --}}
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('assets/frontend/images/slider/room2.webp') }}" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text mb-0">ROOM</p>
                        <h2 class="card-title"><i>Deluxe</i>
                        </h2>
                        <p>Deluxe</p>
                        {{-- <p>{{ Str::limit(
                            'Nita Mukesh Ambani Cultural centre brings to the city a vibrant space for the world of music,
                                                                                                     dance, visual arts, and boundless imagination',
                            70,
                        ) }}
                        </p> --}}
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('assets/frontend/images/slider/room4.webp') }}" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text mb-0">ROOM</p>
                        <h2 class="card-title"><i>Suite Room</i>
                        </h2>
                        <p>Suite Room</p>
                        {{-- <p>{{ Str::limit(
                            'Nita Mukesh Ambani Cultural centre brings to  ',
                            70,
                        ) }}
                        </p> --}}
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('assets/frontend/images/slider/room6.webp') }}" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text mb-0">ROOM</p>
                        <h2 class="card-title"><i>Villa</i>
                        </h2>
                        <p>Villa</p>
                        {{-- <p>{{ Str::limit(
                            'Nita Mukesh Ambani Cultural centre brings to  ',
                            70,
                        ) }}
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="all-images">
        <div class="container mb-4">
            <div class="row justify-content-between align-items-end">
                <div class="col">
                    <h1><i>Sahib Farms</i> by you.</h1>
                    <p>Staying at the Sahib Farms, as captured by our guests. <br>
                        Share your own experiences with #SahibFarms.</p>
                </div>
                <div class="col text-end">
                    <h5><a href="#" style="color: #da7b26">VIEW ALL<i class="fa-solid fa-angle-right ms-1"></i></a>
                    </h5>
                </div>
            </div>
        </div>
        <div class="view-all">
            <div class="image-container">
                <img src="{{ asset('assets/frontend/images/slider/11.webp') }}" alt="">
                <div class="bottom-content">
                    <p>@mehadi</p>
                </div>
            </div>
            <div class="image-container">
                <img src="{{ asset('assets/frontend/images/slider/12.webp') }}" alt="">
                <div class="bottom-content">
                    <p>@farms</p>
                </div>
            </div>
            <div class="image-container">
                <img src="{{ asset('assets/frontend/images/slider/13.webp') }}" alt="">
                <div class="bottom-content">
                    <p>@menhadistage</p>
                </div>
            </div>
            <div class="image-container">
                <img src="{{ asset('assets/frontend/images/slider/14.webp') }}" alt="">
                <div class="bottom-content">
                    <p>@dance</p>
                </div>
            </div>
            <div class="image-container">
                <img src="{{ asset('assets/frontend/images/slider/15.webp') }}" alt="">
                <div class="bottom-content">
                    <p>@wedding</p>
                </div>
            </div>
            <div class="image-container">
                <img src="{{ asset('assets/frontend/images/slider/16.webp') }}" alt="">
                <div class="bottom-content">
                    <p>@welcome</p>
                </div>
            </div>
            <div class="image-container">
                <img src="{{ asset('assets/frontend/images/slider/17.webp') }}" alt="">
                <div class="bottom-content">
                    <p>@haldi</p>
                </div>
            </div>
        </div>

    </section>

    {{-- <div class="jay">
        <h3>Jay Kushwah</h3>
    </div> --}}
@endsection

@section('script')
    <script>
        $('.slider-one').slick({
            infinite: true,
            autoplay: true,
            autoplaySpeed: 4000,
            nextArrow: '<i class="bi bi-arrow-right-square-fill slick-next"></i>',
            prevArrow: '<i class="bi bi-arrow-left-square-fill slick-prev"></i>'
        });
    </script>
    <script>
        $('.slider-two').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            focusOnSelect: true,
            autoplaySpeed: 4000,
            nextArrow: '<i class="bi bi-arrow-right-square-fill slick-next"></i>',
            prevArrow: '<i class="bi bi-arrow-left-square-fill slick-prev"></i>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 960,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
    <script>
        $('.slider-three').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            nextArrow: '<i class="bi bi-arrow-right-square-fill slick-next"></i>',
            prevArrow: '<i class="bi bi-arrow-left-square-fill slick-prev"></i>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 960,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>

    <script>
        $('.view-all').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            nextArrow: '<i class="bi bi-arrow-right-square-fill slick-next"></i>',
            prevArrow: '<i class="bi bi-arrow-left-square-fill slick-prev"></i>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 960,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
@endsection
