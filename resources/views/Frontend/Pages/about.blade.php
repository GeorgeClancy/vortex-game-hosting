@extends('Frontend.Layouts.app')
@section('title', 'About')
@section('content')
    <!-- HEADER AREA -->
        @include('Frontend.Includes.Headers.headerFive')
    <!-- HEADER AREA END -->

    <!-- shared hosting banner -->
    <div class="rts-hosting-banner rts-hosting-banner-bg banner-default-height">
        <div class="container">
            <div class="row">
                <div class="banner-area">
                    <div class="rts-hosting-banner rts-hosting-banner__content about__banner">
                        <span class="starting__price" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">About Us</span>
                        <h1 class="banner-title" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">
                            The Team Behind Vortex Game Hosting
                        </h1>
                        <p class="slogan" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">We're a team of gamers who built the hosting service we always wanted — fast, reliable, and built for the community.</p>
                        <div class="hosting-action" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">
                            <a href="{{route('pricing')}}" class="btn__two secondary__bg secondary__color">View Plans <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="rts-hosting-banner__image about">
                        <img src="{{asset ('assets/images/banner/banner-hero-about.png') }}" width="562" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shared hosting banner end-->


    <!-- ABOUT RESELLER HOSTING -->
    <div class="rts-about-reseller section__padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 padding-bottom-75">
                    <div class="hosting-about-image-bg"></div>
                    <div class="hosting-about-image">
                        <div class="img-one">
                            <img src="{{asset ('assets/images/about/resell/image-1.png') }}" width="378" height="400" alt="">
                        </div>
                        <div class="img-two">
                            <img src="{{asset ('assets/images/about/resell/image-2.png') }}" width="247" height="347" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hosting-info">
                        <h3 class="hosting-info__title" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">About Vortex Game Hosting</h3>
                        <p class="description" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">We provide high-performance game servers with instant setup, DDoS protection, and 24/7 support — everything you need to host your community.</p>
                        <div class="single-about-info">
                            <div class="single" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">
                                <div class="icon">
                                    <img src="{{asset ('assets/images/about/resell/support.svg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h6>24/7 Expert Support</h6>
                                    <p class="mb-0">
                                        Real human support available around the clock to help with any server issue.
                                    </p>
                                </div>
                            </div>
                            <div class="single" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">
                                <div class="icon">
                                    <img src="{{asset ('assets/images/about/resell/speed-meter.svg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h6>TCAdmin Control Panel</h6>
                                    <p class="mb-0">
                                        Manage your game server with ease using the industry-standard TCAdmin panel.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('pricing')}}" class="btn__two btn__long secondary__bg secondary__color">View Plan <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT RESELLER HOSTING END -->

    <!-- ABOUT RESELLER HOSTING -->
    <div class="rts-about-reseller section__padding area-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hosting-info w-550 mt-md-0">
                        <h2 class="hosting-info__title" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">We invest in our
                            employees’ happiness.</h2>
                        <p class="description" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">We built Vortex Game Hosting because we were frustrated with laggy, overpriced game servers. Every feature we offer is something we wanted ourselves.</p>
                        <div class="feature" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
                            <ul class="feature__list gap-5">
                                <li class="feature__item">Instant Server Deployment</li>
                                <li class="feature__item">DDoS Protection Included</li>
                                <li class="feature__item">Reseller & Sub Accounts</li>
                                <li class="feature__item">Automated Backups</li>
                                <li class="feature__item">TCAdmin Control Panel</li>
                                <li class="feature__item">Custom Server Settings</li>
                                <li class="feature__item">24/7 Expert Support</li>
                                <li class="feature__item">UK-Based Infrastructure</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 padding-bottom-75">
                    <div class="hosting-about-image-bg"></div>
                    <div class="hosting-about-image">
                        <div class="img-one">
                            <img src="{{asset ('assets/images/about/resell/image-3.png') }}" width="378" height="400" alt="">
                        </div>
                        <div class="img-two">
                            <img src="{{asset ('assets/images/about/resell/image-4.png') }}" width="247" height="347" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT RESELLER HOSTING END -->



    <!-- COUNTER UP AREA -->
    <div class="rts-counter-up-area">
        <div class="container">
            <ul class="counter-up-area-inner">
                <li class="counter-up-list">
                    <div class="icon"><img src="{{asset ('assets/images/about/counter-01.svg') }}" alt=""></div>
                    <div class="counter-wrapper">
                        <h2 class="title-main"><span class="counter animated fadeInDownBig">50</span><span class="suffix">+</span></h2>
                        <p class="desc">
                            Game Servers Deployed
                        </p>
                    </div>
                </li>
                <li class="counter-up-list">
                    <div class="icon"><img src="{{asset ('assets/images/about/counter-02.svg') }}" alt=""></div>
                    <div class="counter-wrapper">
                        <h2 class="title-main"><span class="counter animated fadeInDownBig">500</span><span class="suffix">+</span></h2>
                        <p class="desc">
                            Happy Customers
                        </p>
                    </div>
                </li>
                <li class="counter-up-list">
                    <div class="icon"><img src="{{asset ('assets/images/about/counter-03.svg') }}" alt=""></div>
                    <div class="counter-wrapper">
                        <h2 class="title-main"><span class="counter animated fadeInDownBig">99.9</span><span class="suffix">%</span></h2>
                        <p class="desc">
                            Uptime Guarantee
                        </p>
                    </div>
                </li>
                <li class="counter-up-list">
                    <div class="icon"><img src="{{asset ('assets/images/about/counter-04.svg') }}" alt=""></div>
                    <div class="counter-wrapper">
                        <h2 class="title-main"><span class="counter animated fadeInDownBig">24</span><span class="suffix">/7</span></h2>
                        <p class="desc">
                            Support Available
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- COUNTER UP AREA END -->





    <!-- HOSTIE CTA -->
    <div class="rts-cta-two shared-page-bg pt--120">
        <div class="container">
            <div class="row">
                <div class="rts-cta-two__wrapper">
                    <div class="cta__shape"></div>
                    <div class="cta-content">
                        <span data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">Need help choosing a plan?</span>
                        <h4 data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">Need help?
                            We're always here for you.</h4>
                    </div>
                    <div class="cta-btn">
                        <a href="https://vortexgamehosting.co.uk/billing/submitticket.php" class="contact__us primary__btn btn__two secondary__bg secondary__color">Submit a Support Ticket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOSTIE CTA END -->

    <!-- FOOTER AREA -->
    @include('Frontend.Includes.Footers.footerFive')
    <!-- FOOTER AREA END -->
@endsection