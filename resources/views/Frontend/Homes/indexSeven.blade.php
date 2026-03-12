@extends('Frontend.Layouts.app')
@section('title', 'Game Server Hosting')
@section('content')
    <!-- HEADER AREA -->
        @include('Frontend.Includes.Headers.headerFive')
    <!-- HEADER AREA END -->

    <!-- HERO BANNER ONE -->
    <section class="rts-hero game-banner">
        <div class="container">
            <div class="row align-items-end position-relative">
                <div class="col-lg-7">
                    <div class="rts-hero__content w-750">
                        <h6 data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
                            <img src="{{ asset ('assets/images/icon/game.svg') }}" alt="">
                            First Month 20% Off — Instant Server Deploy
                        </h6>
                        <h1 class="heading" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">Dominate Every Game with Lightning-Fast Server Hosting <img src="{{ asset ('assets/images/icon/game-4.svg') }}" alt="">
                        </h1>

                        <div class="rts-hero-two__content--btn sal-animate" data-sal="slide-down" data-sal-delay="500" data-sal-duration="800">
                            <a href="https://vortexgamehosting.co.uk/billing/cart.php" class="rts-btn btn__long secondary__bg secondary__color" target="_blank" rel="noopener noreferrer">
                                Get Started

                            </a>
                            <a href="{{route('pricing')}}" class="rts-btn btn__long border__white white__color">
                                View Plans
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="rts-hero__images position-relative">
                        <div class="rts-hero-main">
                            <div class="image-main ">
                                <img class="main top-bottom2" src="{{ asset ('assets/images/banner/banner__seven__image.png') }}" alt="">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HERO BANNER ONE END -->

    <!-- popular game server -->
    <div class="popular-game section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="rts-section text-center">
                    <div class="rts-section__two">
                        <h2 class="title" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">Why Choose Vortex Game Hosting</h2>
                        <p class="rts-section-description" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">
                            From Minecraft to DayZ, we host the games you love. High-performance servers with instant deployment and 24/7 expert support.
                        </p>

                    </div>
                </div>
            </div>
            <div class="row g-5">
                <!-- single server -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single__server">
                        <div class="single__server--content">
                            <div class="single__server--content__icon">
                                <img src="{{ asset ('assets/images/icon/game-1.svg') }}" width="73" height="73" alt="">
                            </div>
                            <h4 class="single__server--content__link">
                                <a href="#">DDoS Protection</a>
                            </h4>
                            <p class="single__server--content__description">
                                Enterprise-grade DDoS mitigation on every plan. Your server stays online 24/7, no matter the attack.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single server end -->
                <!-- single server -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single__server">
                        <div class="single__server--content">
                            <div class="single__server--content__icon">
                                <img src="{{ asset ('assets/images/icon/game-2.svg') }}" width="73" height="73" alt="">
                            </div>
                            <h4 class="single__server--content__link">
                                <a href="#">High-Speed Storage</a>
                            </h4>
                            <p class="single__server--content__description">
                                High-performance dedicated hardware delivers the low latency your game server demands — no lag, no excuses.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single server end -->
                <!-- single server -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single__server">
                        <div class="single__server--content">
                            <div class="single__server--content__icon">
                                <img src="{{ asset ('assets/images/icon/game-3.svg') }}" width="73" height="73" alt="">
                            </div>
                            <h4 class="single__server--content__link">
                                <a href="#">Instant Server Deploy</a>
                            </h4>
                            <p class="single__server--content__description">
                                Deploy your game server in under 60 seconds. TCAdmin control panel gives you full control from day one.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single server end -->
            </div>
        </div>
    </div>
    <!-- popular game server end -->

    <!-- game banner -->
    <div class="game-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="game__banner__content" style="background-image: url({{ asset ('assets/images/game/banner__bg.png') }});">
                        <div class="game__banner__content__box">
                            <div class="game__banner__content__box--purchase">
                                <span><img src="{{ asset ('assets/images/icon/game.svg') }}" alt=""></span>Launch Your Server
                            </div>
                            <h2 class="game__banner__content__box--title">
                                Start Your Server Today — Play in Minutes
                            </h2>
                            <p class="game__banner__content__box--description">
                                Stop waiting and start playing. Vortex Game Hosting delivers instant server deployment with NVMe storage, DDoS protection, and 24/7 support — all in one powerful package.
                            </p>
                            <div class="game__banner__content__box--button">
                                <a href="https://vortexgamehosting.co.uk/billing/cart.php" class="primary__btn" target="_blank" rel="noopener noreferrer">Get Your Server</a>
                            </div>
                        </div>
                        <div class="game__banner__content__image">
                            <img src="{{ asset ('assets/images/game/banner__image.png') }}" alt="banner__image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- game banner end -->

    <!-- feature -->
    <div class="rts-feature section__padding">
        <div class="container">
            <div class="row justify-content-md-center g-5">
                <div class="col-lg-7 col-md-10">
                    <div class="feature__image">
                        <img src="{{ asset ('assets/images/game/feature.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-10">
                    <div class="feature__content__box">
                        <h3 class="feature__content__box--title">
                            Vortex Game Hosting — Built for Gamers, Powered by Performance
                        </h3>
                        <div class="feature__content__box__list">

                            <div class="feature__content__box__list__single">
                                <div class="icon">
                                    <img src="{{ asset ('assets/images/icon/feature-1.svg') }}" alt="">
                                </div>
                                <h4 class="content">
                                    High-Performance Dedicated Hardware
                                </h4>
                            </div>
                            <div class="feature__content__box__list__single">
                                <div class="icon">
                                    <img src="{{ asset ('assets/images/icon/feature-2.svg') }}" alt="">
                                </div>
                                <h4 class="content">
                                    Full Mod &amp; Plugin Support
                                </h4>
                            </div>
                            <div class="feature__content__box__list__single">
                                <div class="icon">
                                    <img src="{{ asset ('assets/images/icon/feature-3.svg') }}" alt="">
                                </div>
                                <h4 class="content">
                                    24/7 Expert Technical Support
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature end -->

    <!-- PRICING PLAN -->
    <div class="rts-pricing-plan game-pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="rts-section text-center">
                        <h2 class="rts-section__title" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">Premium Game Servers, <br>Affordable Prices.</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="rts-pricing-plan__tab">
                        <div class="tab__button">
                            <div class="tab__button__item">
                                <button class="active tab__btn" data-tab="monthly">monthly</button>
                                <button class="tab__btn" data-tab="yearly">yearly</button>
                            </div>
                        </div>
                        <div class="discount">
                            <span class="line">
                                <img src="{{ asset ('assets/images/pricing/offer__vactor-2.svg') }}" height="20" width="85" alt=""></span>
                            <p>20% save</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PRICING PLAN -->
            <div class="tab__content open" id="monthly">
                <div class="row monthly g-30">
                    <!-- single pricing plan -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-plan">
                            <div class="single-plan__content">
                                <div class="plan-game-image">
                                    <img src="{{ asset('assets/images/game/collection/01.jpg') }}" alt="Minecraft" style="width:100%;height:160px;object-fit:cover;border-radius:8px 8px 0 0;">
                                </div>
                                <h4 class="plan-title" style="margin-top:16px;">Minecraft</h4>
                                <p class="description">Survival, creative & modded play</p>
                                <div class="border-separator"></div>
                                <div class="plan-feature">
                                    <ul class="plan-feature__list">
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span>
                                            Vanilla &amp; Modded Support
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> Plugins &amp; Mods (CurseForge)
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> DDoS Protection
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> 24/7 Support
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=20" class="buy__plan btn__two" target="_blank" rel="noopener noreferrer">
                                    From £{{ $prices[20]["monthly"] ?? "1.49" }}/mo — Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single pricing end -->
                    <!-- single pricing plan -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-plan active">
                            <div class="single-plan__content">
                                <div class="plan-game-image">
                                    <img src="{{ asset('assets/images/game/collection/04.jpg') }}" alt="Valheim" style="width:100%;height:160px;object-fit:cover;border-radius:8px 8px 0 0;">
                                </div>
                                <h4 class="plan-title" style="margin-top:16px;">Valheim</h4>
                                <p class="description">Viking survival multiplayer</p>
                                <div class="border-separator"></div>
                                <div class="plan-feature">
                                    <ul class="plan-feature__list">
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span>
                                            Dedicated Server Instance
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> Mods &amp; Custom Config
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> DDoS Protection
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> 24/7 Support
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=28" class="buy__plan btn__two" target="_blank" rel="noopener noreferrer">
                                    From £{{ $prices[28]["monthly"] ?? "3.75" }}/mo — Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single pricing end -->
                    <!-- single pricing plan -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-plan">
                            <div class="single-plan__content">
                                <div class="plan-game-image">
                                    <img src="{{ asset('assets/images/game/collection/02.jpg') }}" alt="DayZ" style="width:100%;height:160px;object-fit:cover;border-radius:8px 8px 0 0;">
                                </div>
                                <h4 class="plan-title" style="margin-top:16px;">DayZ</h4>
                                <p class="description">Open-world hardcore survival</p>
                                <div class="border-separator"></div>
                                <div class="plan-feature">
                                    <ul class="plan-feature__list">
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span>
                                            High Performance Dedicated
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> Mods via Steam Workshop
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> DDoS Protection
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> 24/7 Support
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=19" class="buy__plan btn__two" target="_blank" rel="noopener noreferrer">
                                    From £{{ $prices[19]["monthly"] ?? "7.86" }}/mo — Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single pricing end -->
                </div>
            </div>
            <div class="tab__content" id="yearly">
                <div class="row yearly g-30">
                    <!-- single pricing plan -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-plan">
                            <div class="single-plan__content">
                                <div class="plan-game-image">
                                    <img src="{{ asset('assets/images/game/collection/01.jpg') }}" alt="Minecraft" style="width:100%;height:160px;object-fit:cover;border-radius:8px 8px 0 0;">
                                </div>
                                <h5 class="plan-title" style="margin-top:16px;">Minecraft</h5>
                                <p class="description">Survival, creative &amp; modded play</p>
                                <div class="border-separator"></div>
                                <div class="plan-feature">
                                    <ul class="plan-feature__list">
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span>
                                            Vanilla &amp; Modded Support
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> Plugins &amp; Mods (CurseForge)
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> DDoS Protection
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> 24/7 Support
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=20&billingcycle=annually" class="buy__plan btn__two" target="_blank" rel="noopener noreferrer">
                                    From £{{ $prices[20]["annually"] ?? "1.19" }}/mo — Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single pricing end -->
                    <!-- single pricing plan -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-plan active">
                            <div class="single-plan__content">
                                <div class="plan-game-image">
                                    <img src="{{ asset('assets/images/game/collection/04.jpg') }}" alt="Valheim" style="width:100%;height:160px;object-fit:cover;border-radius:8px 8px 0 0;">
                                </div>
                                <h5 class="plan-title" style="margin-top:16px;">Valheim</h5>
                                <p class="description">Viking survival multiplayer</p>
                                <div class="border-separator"></div>
                                <div class="plan-feature">
                                    <ul class="plan-feature__list">
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span>
                                            Dedicated Server Instance
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> Mods &amp; Custom Config
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> DDoS Protection
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> 24/7 Support
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=28&billingcycle=annually" class="buy__plan btn__two" target="_blank" rel="noopener noreferrer">
                                    From £{{ $prices[28]["annually"] ?? "3.00" }}/mo — Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single pricing end -->
                    <!-- single pricing plan -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-plan">
                            <div class="single-plan__content">
                                <div class="plan-game-image">
                                    <img src="{{ asset('assets/images/game/collection/02.jpg') }}" alt="DayZ" style="width:100%;height:160px;object-fit:cover;border-radius:8px 8px 0 0;">
                                </div>
                                <h5 class="plan-title" style="margin-top:16px;">DayZ</h5>
                                <p class="description">Open-world hardcore survival</p>
                                <div class="border-separator"></div>
                                <div class="plan-feature">
                                    <ul class="plan-feature__list">
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span>
                                            High Performance Dedicated
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> Mods via Steam Workshop
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> DDoS Protection
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-check"></i> </span> 24/7 Support
                                        </li>
                                    </ul>
                                </div>
                                <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=19&billingcycle=annually" class="buy__plan btn__two" target="_blank" rel="noopener noreferrer">
                                    From £{{ $prices[19]["annually"] ?? "6.29" }}/mo — Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single pricing end -->
                </div>
            </div>
        </div>
    </div>
    <!-- PRICING PLAN END -->

    <!-- game collection -->
    <div class="game-collection section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="rts-section text-center">
                        <h2 class="rts-section__title" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">Supported Games</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="game__tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all-games" type="button" role="tab" aria-controls="all-games" aria-selected="true">All Games</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-action" aria-controls="nav-action">Survival</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-strategy" aria-controls="nav-strategy">FPS</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#puzzle" type="button" role="tab" aria-controls="puzzle" aria-selected="true">Sandbox</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-horror" aria-controls="nav-horror">Roleplay</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-multiplayer" aria-controls="nav-multiplayer">Creative</button>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="all-games" role="tabpanel">
                    <div class="row g-5">
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/01.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £1.49/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=20" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Minecraft</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £1.49/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/02.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £7.86/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=19" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">DayZ</a>
                                        </h4>
                                        <div class="game__single__box__meta__flex">
                                            <div class="game__single__box__meta--pricing">
                                                <span class="current__pricing">From £7.86/mo</span>
                                            </div>
                                            <div class="game__single__box__meta__rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/03.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £4.49/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=18" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Ark SE</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £4.49/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/04.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £3.75/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=28" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Valheim</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £3.75/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/05.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £1.49/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=23" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Palworld</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £1.49/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/06.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £7.50/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=29" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Scum</a>
                                        </h4>
                                        <div class="game__single__box__meta__flex">
                                            <div class="game__single__box__meta--pricing">
                                                <span class="current__pricing">From £7.50/mo</span>
                                            </div>
                                            <div class="game__single__box__meta__rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/07.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £10.99/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=1" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">7 Days to Die</a>
                                        </h4>
                                        <div class="game__single__box__meta__flex">
                                            <div class="game__single__box__meta--pricing">
                                                <span class="current__pricing">From £10.99/mo</span>
                                            </div>
                                            <div class="game__single__box__meta__rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/08.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £2.24/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=21" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Garry's Mod</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £2.24/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/09.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £5.25/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=16" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Arma 3</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £5.25/mo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/10.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £5.25/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=17" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Arma Reforger</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £5.25/mo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/11.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £5.25/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=22" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Rust</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £5.25/mo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/12.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £5.25/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=24" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Squad</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £5.25/mo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/13.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £6.00/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=25" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">The Forest</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £6.00/mo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/14.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £15.01/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=26" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">The Isle</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £15.01/mo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/15.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £19.51/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=27" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Unturned</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £19.51/mo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/16.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £4.99/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=30" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Abiotic Factor</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £4.99/mo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-action" role="tabpanel">
                    <div class="row g-5">
                        <!-- single game -->
                         
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/06.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £7.50/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=29" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Scum</a>
                                        </h4>
                                        <div class="game__single__box__meta__flex">
                                            <div class="game__single__box__meta--pricing">
                                                <span class="current__pricing">From £7.50/mo</span>
                                            </div>
                                            <div class="game__single__box__meta__rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/03.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £4.49/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=18" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Ark SE</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £4.49/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/05.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £1.49/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=23" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Palworld</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £1.49/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/01.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £1.49/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=20" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Minecraft</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £1.49/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/07.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £10.99/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=1" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">7 Days to Die</a>
                                        </h4>
                                        <div class="game__single__box__meta__flex">
                                            <div class="game__single__box__meta--pricing">
                                                <span class="current__pricing">From £10.99/mo</span>
                                            </div>
                                            <div class="game__single__box__meta__rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/08.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £2.24/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=21" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Garry's Mod</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £2.24/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/11.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £5.25/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=22" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Rust</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £5.25/mo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/13.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £6.00/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=25" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">The Forest</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £6.00/mo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/14.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £15.01/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=26" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">The Isle</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £15.01/mo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/15.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £19.51/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=27" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Unturned</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £19.51/mo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/16.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £4.99/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=30" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Abiotic Factor</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £4.99/mo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-strategy" role="tabpanel">
                    <div class="row g-5">
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/01.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £1.49/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=20" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Minecraft</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £1.49/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/03.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £4.49/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=18" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Ark SE</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £4.49/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/05.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £1.49/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=23" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Palworld</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £1.49/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/06.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £7.50/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=29" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Scum</a>
                                        </h4>
                                        <div class="game__single__box__meta__flex">
                                            <div class="game__single__box__meta--pricing">
                                                <span class="current__pricing">From £7.50/mo</span>
                                            </div>
                                            <div class="game__single__box__meta__rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/07.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £10.99/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=1" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">7 Days to Die</a>
                                        </h4>
                                        <div class="game__single__box__meta__flex">
                                            <div class="game__single__box__meta--pricing">
                                                <span class="current__pricing">From £10.99/mo</span>
                                            </div>
                                            <div class="game__single__box__meta__rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                    </div>
                </div>
                <div class="tab-pane fade" id="puzzle" role="tabpanel">
                    <div class="row g-5">
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/01.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £1.49/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=20" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Minecraft</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £1.49/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/04.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £3.75/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=28" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Valheim</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £3.75/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/05.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £1.49/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=23" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Palworld</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £1.49/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/06.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £7.50/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=29" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Scum</a>
                                        </h4>
                                        <div class="game__single__box__meta__flex">
                                            <div class="game__single__box__meta--pricing">
                                                <span class="current__pricing">From £7.50/mo</span>
                                            </div>
                                            <div class="game__single__box__meta__rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/07.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £10.99/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=1" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">7 Days to Die</a>
                                        </h4>
                                        <div class="game__single__box__meta__flex">
                                            <div class="game__single__box__meta--pricing">
                                                <span class="current__pricing">From £10.99/mo</span>
                                            </div>
                                            <div class="game__single__box__meta__rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/08.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £2.24/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=21" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Garry's Mod</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £2.24/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-horror" role="tabpanel">
                    <div class="row g-5">
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/01.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £1.49/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=20" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Minecraft</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £1.49/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/02.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £7.86/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=19" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">DayZ</a>
                                        </h4>
                                        <div class="game__single__box__meta__flex">
                                            <div class="game__single__box__meta--pricing">
                                                <span class="current__pricing">From £7.86/mo</span>
                                            </div>
                                            <div class="game__single__box__meta__rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/04.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £3.75/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=28" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Valheim</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £3.75/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/05.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £1.49/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=23" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Palworld</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £1.49/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/07.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £10.99/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=1" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">7 Days to Die</a>
                                        </h4>
                                        <div class="game__single__box__meta__flex">
                                            <div class="game__single__box__meta--pricing">
                                                <span class="current__pricing">From £10.99/mo</span>
                                            </div>
                                            <div class="game__single__box__meta__rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/08.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £2.24/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=21" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Garry's Mod</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £2.24/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-multiplayer" role="tabpanel">
                    <div class="row g-5">
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/02.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £7.86/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=19" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">DayZ</a>
                                        </h4>
                                        <div class="game__single__box__meta__flex">
                                            <div class="game__single__box__meta--pricing">
                                                <span class="current__pricing">From £7.86/mo</span>
                                            </div>
                                            <div class="game__single__box__meta__rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/05.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £1.49/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=23" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Palworld</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £1.49/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/06.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £7.50/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=29" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Scum</a>
                                        </h4>
                                        <div class="game__single__box__meta__flex">
                                            <div class="game__single__box__meta--pricing">
                                                <span class="current__pricing">From £7.50/mo</span>
                                            </div>
                                            <div class="game__single__box__meta__rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/07.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £10.99/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=1" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">7 Days to Die</a>
                                        </h4>
                                        <div class="game__single__box__meta__flex">
                                            <div class="game__single__box__meta--pricing">
                                                <span class="current__pricing">From £10.99/mo</span>
                                            </div>
                                            <div class="game__single__box__meta__rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                        <!-- single game -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="game__single">
                                <div class="game__single__box">
                                    <div class="game__single__box__image">
                                        <a href="{{route('gameDetails')}}">
                                            <img src="{{ asset ('assets/images/game/collection/08.jpg') }}" alt="">
                                        </a>
                                        <div class="game__single__box__image__meta">
                                            <div class="off">From £2.24/mo</div>
                                            <a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=21" class="cart__btn" target="_blank" rel="noopener noreferrer"><i class="fa-light fa-cart-shopping"></i> Order Now</a>
                                        </div>
                                    </div>
                                    <div class="game__single__box__meta">
                                        <h4 class="game__single__box__meta--title">
                                            <a href="{{route('gameDetails')}}">Garry's Mod</a>
                                        </h4>
                                        <div class="game__single__box__meta--pricing">
                                            <span class="current__pricing">From £2.24/mo</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- single game end -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- game collection end -->

    <!-- TESTIMONIAL -->
    <section class="rts-testimonial game-testimonial">
        <div class="container">
            <div class="row ">
                <div class="col-12 d-flex justify-content-center">
                    <div class="rts-section w-460 text-center">
                        <h3 class="rts-section__title" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">Our Customers Love Us</h3>
                        <p class="rts-section__description" data-sal="slide-down" data-sal-delay="400" data-sal-duration="800">From instant deployment to rock-solid uptime, thousands of gamers trust Vortex to keep their servers running.</p>
                    </div>
                </div>
            </div>
            <!-- testimonial -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-testimonial__slider testimonial__slider--first">
                        <div class="swiper-wrapper">
                            <!-- single testimonial -->
                            <div class="swiper-slide">
                                <div class="rts-testimonial__single">
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="content">
                                        <p>Outstanding game server hosting. Instant setup, zero downtime, and the support team genuinely cares about keeping your server running at its best.</p>
                                    </div>
                                    <div class="author__meta">
                                        <div class="author__meta--image">
                                            <img src="{{ asset ('assets/images/testimonials/author.png') }}" alt="">
                                        </div>
                                        <div class="author__meta--details">
                                            <a href="#">Jamie Knop</a>
                                            <span>Minecraft Server Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial end -->
                            <!-- single testimonial -->
                            <div class="swiper-slide">
                                <div class="rts-testimonial__single">
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="content">
                                        <p>Outstanding game server hosting. Instant setup, zero downtime, and the support team genuinely cares about keeping your server running at its best.</p>
                                    </div>
                                    <div class="author__meta">
                                        <div class="author__meta--image">
                                            <img src="{{ asset ('assets/images/testimonials/author-2.png') }}" alt="">
                                        </div>
                                        <div class="author__meta--details">
                                            <a href="#">Jahed Khan</a>
                                            <span>Rust Community Leader</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial end -->
                            <!-- single testimonial -->
                            <div class="swiper-slide">
                                <div class="rts-testimonial__single">
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="content">
                                        <p>Outstanding game server hosting. Instant setup, zero downtime, and the support team genuinely cares about keeping your server running at its best.</p>
                                    </div>
                                    <div class="author__meta">
                                        <div class="author__meta--image">
                                            <img src="{{ asset ('assets/images/testimonials/author-3.png') }}" alt="">
                                        </div>
                                        <div class="author__meta--details">
                                            <a href="#">Samira Khan</a>
                                            <span>DayZ Community Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial end -->
                            <!-- single testimonial -->
                            <div class="swiper-slide">
                                <div class="rts-testimonial__single">
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="content">
                                        <p>Outstanding game server hosting. Instant setup, zero downtime, and the support team genuinely cares about keeping your server running at its best.</p>
                                    </div>
                                    <div class="author__meta">
                                        <div class="author__meta--image">
                                            <img src="{{ asset ('assets/images/testimonials/author.png') }}" alt="">
                                        </div>
                                        <div class="author__meta--details">
                                            <a href="#">Jamie Knop</a>
                                            <span>Minecraft Server Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial end -->
                        </div>
                        <!-- pagination dot -->
                        <div class="rts-dot__button slider-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIAL END -->

    <!-- SHARED HOSTING FAQ -->
    <div class="rts-hosting-faq game-faq pt--120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="rts-section text-center">
                        <h2 class="rts-section__title mb-0" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">Frequently asked questions</h2>
                    </div>
                    <div class="rts-faq__accordion" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">
                        <div class="accordion accordion-flush" id="rts-accordion">
                            <div class="accordion-item active">
                                <div class="accordion-header" id="first">
                                    <h4 class="accordion-button collapse show" data-bs-toggle="collapse" data-bs-target="#item__one" aria-expanded="false" aria-controls="item__one">
                                        How quickly is my server deployed after purchase?
                                    </h4>
                                </div>
                                <div id="item__one" class="accordion-collapse collapse collapse show" aria-labelledby="first" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Your game server is deployed instantly — typically within 60 seconds of payment. You'll receive login details for your TCAdmin control panel straight away so you can start configuring and playing immediately.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="two">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__two" aria-expanded="false" aria-controls="item__two">
                                        Which games do you support?
                                    </h4>
                                </div>
                                <div id="item__two" class="accordion-collapse collapse" aria-labelledby="two" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        We support a wide range of games including Minecraft, DayZ, Ark SE, Valheim, Scum, Palworld, Garry's Mod, 7 Days to Die, Arma 3, Squad, The Forest, and more. New game support is added regularly — contact us if your game isn't listed.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="three">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__three" aria-expanded="false" aria-controls="item__three">
                                        Can I install mods and plugins on my server?
                                    </h4>
                                </div>
                                <div id="item__three" class="accordion-collapse collapse" aria-labelledby="three" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Yes! Our Advanced and Pro plans include full mod and plugin support. The TCAdmin control panel gives you a built-in file manager and FTP access, so you can install and manage mods, modpacks, and plugins with ease.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header" id="four">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__four" aria-expanded="false" aria-controls="item__four">
                                        Do you offer a money-back guarantee?
                                    </h4>
                                </div>
                                <div id="item__four" class="accordion-collapse collapse" aria-labelledby="four" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Yes — we offer a 24-hour money-back guarantee on all plans. If you're not happy within the first 24 hours of your purchase, contact our support team and we'll process a full refund, no questions asked.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="five">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__five" aria-expanded="false" aria-controls="item__five">
                                        How do I manage and control my server?
                                    </h4>
                                </div>
                                <div id="item__five" class="accordion-collapse collapse" aria-labelledby="five" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        All servers are managed through our TCAdmin control panel at <a href="http://cp.vortexgamehosting.co.uk:8880/" target="_blank" rel="noopener noreferrer">cp.vortexgamehosting.co.uk:8880</a>. From there you can start, stop, and restart your server, edit config files, view logs, manage files, schedule tasks, and more — all from your browser.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- SHARED HOSTING FAQ END -->

    <!-- FOOTER AREA -->
    @include('Frontend.Includes.Footers.footerFive')
    <!-- FOOTER AREA END -->
@endsection