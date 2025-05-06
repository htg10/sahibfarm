@extends('layouts.frontend.app')

@section('meta')
    <title>Contact Us | Sahib Farms and Resorts</title>
@endsection

@section('style')
    <style>

    </style>
@endsection
<style>

</style>

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay text-center">
            <h1>Contact Sahib Farms and Resorts</h1>
            <p class="lead">Experience nature and comfort. Let us know how we can help you.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-md-6">
                <h2>Send Us a Message</h2>
                <form action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your full name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Type your message here..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-success px-4">Send Message</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="col-md-6">
                <h2>Reach Us</h2>
                <p><strong>Address:</strong> Bani road, shubash chowk, near nirmal hospital, Bakhtawarpur, Delhi, 110036</p>
                <p><strong>Phone:</strong> +91-99993-14143</p>
                <p><strong>Email:</strong> info@sahibfarmsandresorts.com</p>
                {{-- <p><strong>Hours:</strong> Mon–Sun: 9:00 AM – 9:00 PM</p> --}}

                <!-- Google Map -->
                <div class="map-responsive mt-4">
                    {{-- <iframe src="https://maps.google.com/maps?q=punjab%20resort&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        allowfullscreen loading="lazy"></iframe> --}}
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3496.0499203057593!2d77.1670046!3d28.807586199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390dab0cf25b78d7%3A0x98639094a17b82c2!2sSAHIB%20FARMS%20%26%20RESORTS!5e0!3m2!1sen!2sin!4v1735976961668!5m2!1sen!2sin"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
