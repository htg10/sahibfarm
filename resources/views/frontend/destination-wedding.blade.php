@extends('layouts.frontend.app')

@section('meta')
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Destination Wedding Sahib Farms and Resorts</title>

    <meta name="description"
        content="Experience the perfect blend of luxury and nature at Sahib Farms and Resort. Ideal for destination weddings, corporate events, and family celebrations. Our stunning venues and impeccable service ensure every occasion is memorable. Book your event today!" />

    <meta name="keywords"
        content="destination wedding resort, luxury resort, wedding venues, event planning, resort services, banquet hall, pre-wedding ceremonies, Sangeet, Mehendi, Haldi, wedding reception, family gatherings, corporate events, resort bookings, outdoor weddings, wedding destination Delhi" />
@endsection
@section('style')
    {{-- <link rel="icon" type="image/png" href="assets/images/logo/cropped-favicon.png"> --}}
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XJPCPJZSEH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-XJPCPJZSEH');
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P7QHJMW');
    </script>
    <!-- End Google Tag Manager -->

    <meta name="google-site-verification" content="tn6mFNKLffXHJUCBH9sVeVAgwMNbLrYGn7F8gG3ho48" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6GXQ093LWT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-6GXQ093LWT');
    </script>

    <style>
        .carousel-item {
            position: relative;
            height: 600px;
        }

        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 1.5rem;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            max-width: 80%;
        }

        /* Mobile View Adjustments */
        @media (max-width: 767px) {
            .carousel-item {
                height: 400px;
                /* Adjust height for mobile */
            }

            .carousel-item img {
                object-fit: cover;
                height: 100%;
            }

            .text-overlay {
                font-size: 14px;
                padding: 5px;
                max-width: 90%;
            }
        }
    </style>
@endsection

@section('content')
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/wedding/wedding13.png" class="d-block w-100" alt="...">
                <div class="text-overlay">Sahib Farms and Resort offers an unparalleled experience, blending luxury with
                    nature. Whether for a wedding or a getaway, our serene ambiance promises unforgettable moments.

                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/banner/02DSC00217.webp" class="d-block w-100" alt="...">
                <div class="text-overlay">At Sahib Farms and Resort, every celebration is elevated with elegance and
                    charm. From intimate gatherings to grand events, we craft unforgettable experiences.

                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/wedding/8aa.png" class="d-block w-100" alt="...">
                <div class="text-overlay">Host your events in a beautiful, picturesque setting at Sahib Farms and
                    Resort. We ensure every detail is perfect, creating memories that will last a lifetime.

                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div><br>

    <!-- google form start-->


    <div style="display: flex; justify-content: center; align-items: center; width: 100%; min-height: auto;">
        <div
            style="width: 60%; background: #f9f9f9; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px;">
            <h2>Inquire Now</h2>
            <!-- Contact form -->
            <form action="mail.php" method="post">
                <div class="row">
                    <div class="col-12 col-md-6 mb-3">
                        <input type="text" class="form-control input" name="name" placeholder="Name" required>
                    </div><br>
                    <div class="col-12 col-md-6 mb-3">
                        <input type="email" class="form-control input" name="email" placeholder="Email" required>
                    </div> <br>
                    <div class="col-12 col-md-6 mb-3">
                        <input type="text" class="form-control input" name="phone" onkeypress="phoneno()"
                            maxlength="10" id="phone" placeholder="Phone" required>
                    </div> <br>
                    <div class="col-12 col-md-6 mb-3">
                        <textarea class="form-control" placeholder="Leave a message here" name="message" required></textarea>
                    </div> <br>
                    <div class="col-12">
                        <button class="reactangle-blue-btn" name="submit" type="submit">Send Now</button>
                    </div> <br>
                </div>
            </form>
        </div>
    </div>
    <!-- google form end -->

    <div class="home3-online-network-section pt-100 pb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <img src="assets/images/Haldi/wedding13.png" alt="image">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="right-content">
                        <div class="top-section">
                            <h2 class="section-title">Destination Wedding at Sahib Farms & Resorts</h2>
                        </div>
                        <p>
                        <p>Host your special day at <strong> Sahib Farms & Resorts </strong>, a stunning destination
                            wedding
                            location that promises an unforgettable celebration. Enjoy breathtaking views, luxurious
                            amenities,
                            and exceptional service, all tailored to make your dream wedding come true.</p>

                        <p>Discover the finest hotels for wedding in Delhi NCR, offering luxurious wedding banquet for
                            your
                            special day. Experience elegance and exceptional service, ensuring a memorable celebration
                            in the
                            heart of Delhi NCR.</p>

                        <p>Celebrate your special day on our premium lawn for weddings, offering a picturesque and
                            elegant
                            setting. Enjoy a beautifully landscaped venue with top-notch amenities and exceptional
                            service for
                            a memorable wedding celebration.</p>

                        <p>We deliver the extraordinary.</p>
                        <a href="tel:+919999314143" class="reactangle-blue-btn"><span><i
                                    class="fa fa-solid fa-phone fa-lg fa-flip-horizontal"></i></span>
                            +91-9999314143</a>
                        </p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="home3-service-section pt-100 pb-70">
        <div class="container">
            <div class="top-section text-center pb-50">
                <h2 class="section-title">Our special services </h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="custom-card">
                        <img src="assets/images/banner/DSC00217.webp" alt="image">
                        <div class="text-content">
                            <h5 class="card-title"><a>Marriage Functions </a></h5>
                            <p>Seamlessly planned weddings that turn dreams into reality.</p>
                            <a href="tel:+919999314143" class="violate-btn"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="custom-card">
                        <img src="assets/images/wedding/_M3A5397.webp" alt="image">
                        <div class="text-content">
                            <h5 class="card-title"><a>Ring & Pre-Wedding Ceremony</a></h5>
                            <p>A perfect prelude to your happily ever after.</p>
                            <a href="tel:+919999314143" class="violate-btn"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="custom-card">
                        <img src="assets/images/wedding/CPA_3229.webp" alt="image">
                        <div class="text-content">
                            <h5 class="card-title"><a>Sagan Ceremony</a></h5>
                            <p>Thoughtfully arranged for a perfect family celebration.</p>
                            <a href="tel:+919999314143" class="violate-btn"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="custom-card">
                        <img src="assets/images/Sagan or cocktail/14.webp" alt="image">
                        <div class="text-content">
                            <h5 class="card-title"><a>Reception</a></h5>
                            <p>Elegant settings to celebrate the start of your new journey.</p>
                            <a href="tel:+919999314143" class="violate-btn"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="custom-card">
                        <img src="assets/images/wedding/42.webp" alt="image">
                        <div class="text-content">
                            <h5 class="card-title"><a>Haldi </a></h5>
                            <p>A colorful and traditional setup to brighten your special day.</p>
                            <a href="tel:+919999314143" class="violate-btn"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="custom-card">
                        <img src="assets/images/wedding/0D6A1232.webp" alt="image">
                        <div class="text-content">
                            <h5 class="card-title"><a>Mehendi </a></h5>
                            <p>Beautiful henna artistry in a vibrant and festive setup.</p>
                            <a href="tel:+919999314143" class="violate-btn"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="custom-card">
                        <img src="assets/images/wedding/RAJU5023.webp" alt="image">
                        <div class="text-content">
                            <h5 class="card-title"><a>Sangeet </a></h5>
                            <p>Celebrate with music, dance, and an ambiance full of joy and energy.</p>
                            <a href="tel:+919999314143" class="violate-btn"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="custom-card">
                        <img src="assets/images/wedding/_DSC1857.webp" alt="image">
                        <div class="text-content">
                            <h5 class="card-title"><a>Stage Decoration </a></h5>
                            <p>Eye-catching stage designs tailored to your theme and style.</p>
                            <a href="tel:+919999314143" class="violate-btn"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="custom-card">
                        <img src="assets/images/Sagan or cocktail/5.webp" alt="image">
                        <div class="text-content">
                            <h5 class="card-title"><a>Catering & Decoration </a></h5>
                            <p>Delicious menus paired with stunning décor to create unforgettable experiences.</p>
                            <a href="tel:+919999314143" class="violate-btn"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home3-choose-us-section pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <h2 class="section-title">Why do Our Clients Choose Us ? Because WE Offer Seamless Experiences and
                        Stunning Results.</h2>
                    <p>
                    <ol>
                        <li><strong>Unmatched Expertise </strong><br />
                            Our team brings years of experience in creating seamless and stunning events, ensuring every
                            detail
                            is perfect.</li>
                        <li style="list-style-type:decimal"><strong>Luxurious Ambiance</strong><br />
                            We provide breathtaking venues and premium décor to make your special moments truly
                            unforgettable.
                        </li>
                        <li style="list-style-type:decimal"><strong>Personalized Services</strong><br />
                            Every event is tailored to your preferences, making your celebration unique and memorable.
                        </li>
                        <li style="list-style-type:decimal"><strong>Hassle-Free Planning</strong><br />
                            From start to finish, we handle every aspect so you can enjoy stress-free celebrations with
                            your
                            loved ones.</p>
                            <div class="row">
                                <div class="col-lg-6 vol-md-6 col-sm-12 col-12">
                                    <h5 class="card-title"><span><i data-feather="check-circle"></i></span> <a
                                            href="#">Uncompromising Quality Standards</a></h5>
                                </div>
                                <div class="col-lg-6 vol-md-6 col-sm-12 col-12">
                                    <h5 class="card-title"> <span><i data-feather="clock"></i></span> <a
                                            href="#">On-Time
                                            Delivery</a></h5>
                                </div>
                                <div class="col-lg-6 vol-md-6 col-sm-12 col-12">
                                    <h5 class="card-title"><span><i data-feather="sliders"></i></span><a
                                            href="#">Tailored Event
                                            Solutions</a></h5>
                                </div>
                                <div class="col-lg-6 vol-md-6 col-sm-12 col-12">
                                    <h5 class="card-title"><span><i data-feather="smile"></i></span><a
                                            href="#">Customer
                                            Satisfaction Guaranteed</a></h5>
                                </div>
                                <div class="col-12">
                                    <a href="#" target="_blank" class="violate-btn"><span>Read More</span></a>
                                    <a href="tel:+919999314143" class="reactangle-blue-btn"><span><i
                                                class="fa fa-solid fa-phone fa-lg fa-flip-horizontal"></i></span>
                                        +91-9999314143</a>
                                </div>
                            </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <img src="assets/images/wedding/DSC04368.webp" alt="image">
                </div>
            </div>
        </div>
    </div>
    <!-- google form start-->


    <div
        style="display: flex; justify-content: center; align-items: center; width: 100%; min-height: auto; margin: 20px 0 20px 0;">
        <div
            style="width: 60%; background: #f9f9f9; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px;">
            <h2>Contact Us</h2>
            <!-- Contact form -->
            <form action="mail.php" method="post">
                <div class="row">
                    <div class="col-12 col-md-6 mb-3">
                        <input type="text" class="form-control input" name="name" placeholder="Name" required>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <input type="email" class="form-control input" name="email" placeholder="Email" required>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <input type="text" class="form-control input" name="phone" onkeypress="phoneno()"
                            maxlength="10" id="phone" placeholder="Phone" required>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <textarea class="form-control" placeholder="Leave a message here" name="message" required></textarea>
                    </div>
                    <div class="col-12">
                        <button class="reactangle-blue-btn" name="submit" type="submit">Send Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- google form end -->


    <section class="bg-light pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5 mb-4">
                    <h3 class="text-center"><strong>Hear From Our Happy Clients-</strong></h3>
                    <p class="text-center">Sahib Farms and Resort and our dedicated team have built a reputation for
                        creating
                        unforgettable experiences.
                        Take a look at what our guests say about their time with us and the exceptional service we
                        provide."
                    </p>
                </div>
            </div>
            <div class="owl-carousel owl-theme rating-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-1728px, 0px, 0px); transition: all 0.25s ease 0s; width: 5184px;">
                        <div class="owl-item cloned" style="width: 432px;">
                            <div class="card m-3 shadow p-3 text-center">
                                <img src="assets/images/7611770.png" width="80" class="img-fluid mx-auto">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“A truly magical experience! The resort's ambiance and staff made our wedding
                                    celebration
                                    unforgettable. Highly recommend!”</p>
                                <h5><strong>- Abhinav R Bhatia</strong></h5>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 432px;">
                            <div class="card m-3 shadow p-3 text-center">
                                <img src="assets/images/7611770.png" width="80" class="img-fluid mx-auto">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“The perfect destination for a relaxing getaway. The facilities are top-notch, and
                                    the team
                                    goes above and beyond to ensure comfort.”</p>
                                <h5><strong>- Rohit Madhan</strong></h5>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 432px;">
                            <div class="card m-3 shadow p-3 text-center">
                                <img src="assets/images/7611770.png" width="80" class="img-fluid mx-auto">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“Our anniversary celebration at Sahib Farms was absolutely stunning. From the décor
                                    to the
                                    service, everything was perfect!👍”
                                </p>
                                <h5><strong>- Jaswant Singh Ra</strong></h5>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 432px;">
                            <div class="card m-3 shadow p-3 text-center">
                                <img src="assets/images/7611770.png" width="80" class="img-fluid mx-auto">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“Thank you for making our corporate event seamless and professional. The venue was
                                    beautiful,
                                    and the staff was incredibly attentive.💐🙏.”</p>
                                <h5><strong>- Amit Pradhan</strong></h5>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 432px;">
                            <div class="card m-3 shadow p-3 text-center">
                                <img src="assets/images/7611770.png" width="80" class="img-fluid mx-auto">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“Such an amazing venue for our pre-wedding events! The Sangeet and Mehendi ceremonies
                                    were
                                    made even more special by the resort’s attention to detail.”</p>
                                <h5><strong>- Sneh Thakur</strong></h5>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 432px;">
                            <div class="card m-3 shadow p-3 text-center">
                                <img src="assets/images/7611770.png" width="80" class="img-fluid mx-auto">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“A hidden gem! Beautiful surroundings, great food, and impeccable service. We’ll
                                    definitely
                                    be back for more celebrations.”
                                </p>
                                <h5><strong>- Mudit Gupta</strong></h5>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 432px;">
                            <div class="card m-3 shadow p-3 text-center">
                                <img src="assets/images/7611770.png" width="80" class="img-fluid mx-auto">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“Had the most incredible time at Sahib Farms for our family reunion. The resort’s
                                    hospitality
                                    and scenic beauty made the event unforgettable.”</p>
                                <h5><strong>- Abhinav R Bhatia</strong></h5>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 432px;">
                            <div class="card m-3 shadow p-3 text-center">
                                <img src="assets/images/7611770.png" width="80" class="img-fluid mx-auto">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“The staff made our wedding day so special. From the Haldi ceremony to the reception,
                                    every
                                    detail was managed to perfection.”</p>
                                <h5><strong>- Rohit Madhan</strong></h5>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 432px;">
                            <div class="card m-3 shadow p-3 text-center">
                                <img src="assets/images/7611770.png" width="80" class="img-fluid mx-auto">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“An absolutely stunning place for a destination wedding! The views, the food, and the
                                    attention to detail were beyond our expectations.👍”
                                </p>
                                <h5><strong>- Jaswant Singh Ra</strong></h5>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 432px;">
                            <div class="card m-3 shadow p-3 text-center">
                                <img src="assets/images/7611770.png" width="80" class="img-fluid mx-auto">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“I can't thank the team enough for making our event run so smoothly. Every guest was
                                    amazed
                                    by the beautiful venue and excellent service.💐🙏.”</p>
                                <h5><strong>- Amit Pradhan</strong></h5>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 432px;">
                            <div class="card m-3 shadow p-3 text-center">
                                <img src="assets/images/7611770.png" width="80" class="img-fluid mx-auto">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“A perfect blend of luxury and nature. Sahib Farms offers the ideal setting for any
                                    occasion.
                                    Will definitely recommend to friends and family.”</p>
                                <h5><strong>- Sneh Thakur</strong></h5>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 432px;">
                            <div class="card m-3 shadow p-3 text-center">
                                <img src="assets/images/7611770.png" width="80" class="img-fluid mx-auto">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“Sahib Farms is the ultimate destination for anyone looking to host a memorable
                                    celebration.
                                    The venue, food, and service were outstanding.”
                                </p>
                                <h5><strong>- Mudit Gupta</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                            class="fa-solid fa-chevron-left"></i></button><button type="button" role="presentation"
                        class="owl-next"><i class="fa-solid fa-chevron-right"></i></button></div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </section>

    <script>
        $('.slot').click(function() {
            $('.slot').removeClass("slotactive");
            $(this).toggleClass("slotactive");
        });
    </script>

    <div class="container pb-50" style="overflow:hidden;">

    </div>
    <style>
        .taggbox {
            max-height: 500px;
            overflow-y: scroll;
        }

        #eapps-instagram-feed-1 img {
            filter: none;
        }

        .eapps-instagram-feed-popup-item-media-image img {
            filter: none;
        }

        .eapps-instagram-feed-posts-item-template-tile {
            padding: 5px;
        }
    </style>

    <style>
        .whatsapp_float {
            position: fixed;
            bottom: 80px;
            right: 25px;
        }

        .whatsapp_float img {
            filter: none;
        }

        .social-btn {
            position: fixed;
            bottom: 130px;
            right: 25px;
            z-index: 11;
        }

        .social-btn a {
            display: flex;
            /* background: #b86b77; */
            color: #fff;
            /* padding: 10px; */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            margin-bottom: 10px;
            font-size: 24px;
            /* border: 1px solid #fff; */
        }

        .social-btn a img {
            filter: none;
        }
    </style>

    <style>
        .popup-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            /* Change this color as needed */
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
        }

        .popup-content {
            text-align: center;
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 15px;
            font-size: 25px;
            cursor: pointer;
            color: #333;
            /* Adjust color as needed */
        }

        /* Add animation for a fade effect */
        .popup-container {
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>

    {{-- <div class="social-btn">
            <a href="https://www.facebook.com/sahibfarms/" target="_blank">
                <!--<i class="fab fa-facebook-f"></i>-->
                <img src="assets/images/fb_icon_325x325.png" class="img-fluid">
            </a>
            <a href="https://www.instagram.com/sahibfarms/?hl=en" target="_blank">
                <!--<i class="fab fa-instagram"></i>-->
                <img src="assets/images/Instagram_logo_2022.svg%20(1).png" class="img-fluid">
            </a>
            <a href="https://youtube.com/@sahibfarm1995?si=rHs56YI1_-mXO3Fa" target="_blank">
                <!--<i class="fab fa-youtube"></i>-->
                <img src="assets/images/channels4_profile.png" class="img-fluid">
            </a>
            <a href="https://wa.me/+919999314143" target="_blank"><img src="assets/images/whatsapp.png" width="50px"
                    class="whatsapp_float_btn" /></a>

            <a href="#" id="contactIcon">
                <img src="assets/images/images.png" width="50px" class="whatsapp_float_btn" />
            </a>
        </div> <br> --}}

    <!-- Popup container -->

    <div class="popup-container" id="popupContainer">
        <div class="popup-content">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <h2>Contact Us</h2>
            <!-- Contact form goes here -->
            <form action="" method="post">
                <div class="row">
                    <div class="col-12 col-md-6 mb-3">
                        <input type="text" class="form-control input" name="name" placeholder="Name" required>
                    </div>
                    <br>
                    <br>
                    <div class="col-12 col-md-6 mb-3">
                        <input type="email" class="form-control input" name="email" placeholder="Email" required>
                    </div>
                    <br>
                    <br>
                    <div class="col-12 col-md-6 mb-3">
                        <input type="text" class="form-control input" name="phone" onkeypress="phoneno()"
                            maxlength="10" id="phone" placeholder="Phone" required>
                    </div>
                    <br>
                    <br>
                    <div class="col-12 col-md-6 mb-3">
                        <textarea class="form-control" placeholder="Leave a message here" name="message" required></textarea>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="col-12">
                        <button class="reactangle-blue-btn" name="submit" type="submit">Send Now</button>
                    </div>
                </div>
            </form>

            <script>
                function phoneno() {
                    $('#phone').keypress(function(e) {
                        var a = [];
                        var k = e.which;

                        for (i = 48; i < 58; i++)
                            a.push(i);

                        if (!(a.indexOf(k) >= 0))
                            e.preventDefault();
                    });
                }
            </script>


        </div>
    </div>
    <div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3496.0499203057593!2d77.1670046!3d28.807586199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390dab0cf25b78d7%3A0x98639094a17b82c2!2sSAHIB%20FARMS%20%26%20RESORTS!5e0!3m2!1sen!2sin!4v1735976961668!5m2!1sen!2sin"
            width="100%" height="450" style="border:0; padding-left: 50px; padding-right: 50px;" allowfullscreen=""
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const contactIcon = document.getElementById("contactIcon");
            const popupContainer = document.getElementById("popupContainer");

            // Show popup when contact icon is clicked
            contactIcon.addEventListener("click", function() {
                popupContainer.style.display = "block";
            });

            // Function to close the popup
            window.closePopup = function() {
                popupContainer.style.display = "none";
            };

            // Prevent form submission (you can add form submission logic)
            const contactForm = document.getElementById("contactForm");
            contactForm.addEventListener("submit", function(event) {
                event.preventDefault();
                // Add your form submission logic here (e.g., sending an email)
                // Close the popup after submission
                closePopup();
            });
        });
    </script>
@endsection
