@extends('Frontend.Layouts.app')
@section('title', 'Contact')
@section('content')
    <!-- HEADER AREA -->
        @include('Frontend.Includes.Headers.headerFive')
    <!-- HEADER AREA END -->

    <!-- contact banner -->
    <div class="rts-hosting-banner rts-hosting-banner-bg banner-default-height">
        <div class="container">
            <div class="row">
                <div class="banner-area">
                    <div class="rts-hosting-banner rts-hosting-banner__content w-530 contact__banner">
                        <span class="starting__price">Get In Touch</span>
                        <h1 class="banner-title">
                            Contact Us
                        </h1>
                        <p class="slogan">Our support team is available 24/7. Submit a ticket, send us an email, or browse our help resources — we'll get back to you fast.</p>
                        <div class="hosting-action">
                            <a href="https://vortexgamehosting.co.uk/billing/submitticket.php" class="btn__two secondary__bg secondary__color" target="_blank" rel="noopener noreferrer">Submit a Ticket <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="rts-hosting-banner__image contact">
                        <img src="{{asset ('assets/images/banner/banner__contact__image.svg') }}" alt="">
                        <img class="shape one" src="{{asset ('assets/images/banner/banner__contact__image-sm1.svg') }}" alt="">
                        <img class="shape two top-bottom2" src="{{asset ('assets/images/banner/banner__contact__image-sm2.svg') }}" alt="">
                        <img class="shape three" src="{{asset ('assets/images/banner/banner__contact__image-sm3.svg') }}" alt="">
                        <img class="shape four left-right2" src="{{asset ('assets/images/banner/banner__contact__image-sm4.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact banner end-->

    <!-- CONTACT START -->
    <section class="rts-contact-form no-bg pt--120 pb--120">
        <div class="container">
            <div class="row g-30 pb--120 justify-content-sm-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-contact-method">
                        <div class="method">
                            <div class="icon">
                                <i class="fa-thin fa-ticket"></i>
                            </div>
                            <div class="content w-220">
                                <h5 class="info mb-0">
                                    <a href="https://vortexgamehosting.co.uk/billing/submitticket.php" target="_blank" rel="noopener noreferrer">Submit a Support Ticket</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-contact-method">
                        <div class="method">
                            <div class="icon">
                                <i class="fa-thin fa-envelope-open"></i>
                            </div>
                            <div class="content w-220">
                                <h5 class="info mb-0">
                                    <a href="mailto:support@vortexgamehosting.co.uk">support@vortexgamehosting.co.uk</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-contact-method">
                        <div class="method">
                            <div class="icon">
                                <i class="fa-thin fa-clock"></i>
                            </div>
                            <div class="content w-220">
                                <h5 class="info mb-0">
                                    Support available 24/7 — we're always online.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-30 justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class="contact-form">
                        <div class="contact-form__content" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">
                            <div class="contact-form__content--image">
                                <img src="{{asset ('assets/images/contact/contact-form.png') }}" width="260" height="188" alt="">
                            </div>
                            <h1 class="contact-form__content--title">
                                Ask a
                                Question
                            </h1>
                            <p class="contact-form__content--description">
                                Have a question before ordering? Fill in the form and our team will get back to you within a few hours.
                            </p>
                            <div class="contact__shape support-page">
                                <img src="{{asset ('assets/images/contact/contact__animated__arrow.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 col-md-10">
                    <div class="form">
                        <h5>Send a message</h5>
                        <form class="form__content" method="post" action="https://vortexgamehosting.co.uk/billing/submitticket.php">
                            <div class="form__control">
                                <input type="text" class="input-form" name="name" id="name" placeholder="Your name" required>
                                <input type="email" class="input-form" name="email" id="email" placeholder="Email address" required>
                            </div>
                            <input type="text" class="input-form" name="subject" id="subject" placeholder="Subject" required style="width:100%;margin-bottom:20px;">
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="How can we help you?" required></textarea>
                            <button type="submit" class="submit__btn">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT END -->

    <!-- FOOTER AREA -->
    @include('Frontend.Includes.Footers.footerFive')
    <!-- FOOTER AREA END -->
@endsection
