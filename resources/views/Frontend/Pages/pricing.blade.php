@extends('Frontend.Layouts.app')
@section('title', 'Pricing')
@section('content')
    <!-- HEADER AREA -->
        @include('Frontend.Includes.Headers.headerFive')
    <!-- HEADER AREA END -->

    <!-- shared hosting banner -->
    <div class="rts-hosting-banner rts-hosting-banner-bg banner-default-height">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-area">
                        <div class="rts-hosting-banner rts-hosting-banner__content pricing__banner">
                            <span class="starting__price" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">Comparison Pricing</span>
                            <h1 class="banner-title" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">
                                Vortex Game Hosting
                                Server Plans
                            </h1>
                            <div class="feature mb-0" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
                                <ul class="feature__list">
                                    <li class="feature__item">24/7 Expert Support</li>
                                    <li class="feature__item">DDoS Protection Included</li>
                                    <li class="feature__item">Instant Server Deployment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="rts-hosting-banner__image pricing-compare">
                            <img src="{{asset ('assets/images/banner/pricing/banner__pricing__image.svg') }}" alt="">
                            <div class="shape__image">
                                <img src="{{asset ('assets/images/banner/pricing/shape__star.svg') }}" alt="" class="shape__image--one show-hide">
                                <img src="{{asset ('assets/images/banner/pricing/shape__dollar.svg') }}" alt="" class="shape__image--two top-bottom">
                                <img src="{{asset ('assets/images/banner/pricing/shape__dollar-2.svg') }}" alt="" class="shape__image--three">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shared hosting banner end-->

    <!-- PRICING PLAN START -->
    <div class="rts-pricing-plan pricing-comparison alice__blue section__padding">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center">
                    <h4 class="title fw-bold mb--25">Game Server Pricing</h4>
                    <div class="rts-pricing-plan__tab pricing__tab">
                        <div class="tab__button"><div class="tab__button__item">
                                <button class="active tab__btn" data-tab="monthly">monthly</button>
                                <button class="tab__btn" data-tab="yearly">yearly</button>
                        </div></div>
                        <div class="discount"><p>20% save</p></div>
                    </div>
                </div>

                <!-- PRICING PLAN MONTHLY -->
                <div class="col-lg-12">
                    <div class="tab__content  open" id="monthly">
                        <table class="table table-hover table-responsive">
                            <thead class="heading__bg"><tr>
                                    <th class="cell">Game</th>
                                    <th class="cell">Monthly Price</th>
                                    <th class="cell"></th>
                                </tr></thead>
                            <tbody class="table__content">
                                <tr>
                                    <td class="package"><strong>Minecraft</strong><br><small class="text-muted">Survival, creative & modded play</small></td>
                                    <td class="price">£{{ $prices[20]["monthly"] ?? '1.49' }}<small>/mo</small></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=20" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>Palworld</strong><br><small class="text-muted">Open-world creature survival</small></td>
                                    <td class="price">£{{ $prices[23]["monthly"] ?? '1.49' }}<small>/mo</small></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=23" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>Garry's Mod</strong><br><small class="text-muted">Physics sandbox multiplayer</small></td>
                                    <td class="price">£{{ $prices[21]["monthly"] ?? '2.24' }}<small>/mo</small></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=21" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>Valheim</strong><br><small class="text-muted">Viking survival multiplayer</small></td>
                                    <td class="price">£{{ $prices[28]["monthly"] ?? '3.75' }}<small>/mo</small></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=28" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>ARK: Survival Evolved</strong><br><small class="text-muted">Dino survival open world</small></td>
                                    <td class="price">£{{ $prices[18]["monthly"] ?? '4.49' }}<small>/mo</small></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=18" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>Arma 3</strong><br><small class="text-muted">Military tactical simulation</small></td>
                                    <td class="price">£{{ $prices[16]["monthly"] ?? '5.25' }}<small>/mo</small></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=16" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>Arma Reforger</strong><br><small class="text-muted">Modern military sandbox</small></td>
                                    <td class="price">£{{ $prices[17]["monthly"] ?? '5.25' }}<small>/mo</small></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=17" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>The Forest</strong><br><small class="text-muted">Horror survival & building</small></td>
                                    <td class="price">£{{ $prices[25]["monthly"] ?? '6.00' }}<small>/mo</small></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=25" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>Scum</strong><br><small class="text-muted">Open-world hardcore survival</small></td>
                                    <td class="price">£{{ $prices[29]["monthly"] ?? '7.50' }}<small>/mo</small></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=29" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>DayZ</strong><br><small class="text-muted">Post-apocalyptic survival</small></td>
                                    <td class="price">£{{ $prices[19]["monthly"] ?? '7.86' }}<small>/mo</small></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=19" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>7 Days to Die</strong><br><small class="text-muted">Zombie survival & tower defence</small></td>
                                    <td class="price">£{{ $prices[1]["monthly"] ?? '10.99' }}<small>/mo</small></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=1" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>The Isle</strong><br><small class="text-muted">Dinosaur survival simulation</small></td>
                                    <td class="price">£{{ $prices[26]["monthly"] ?? '15.01' }}<small>/mo</small></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=26" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>Unturned</strong><br><small class="text-muted">Open-world zombie survival</small></td>
                                    <td class="price">£{{ $prices[27]["monthly"] ?? '19.51' }}<small>/mo</small></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=27" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                            </tbody></table>
                        <div class="additional-content"><div class="plan-extra"><p class="text-capitalize text-center font-small">all plans include</p></div></div>
                        <table class="table table-hover table-responsive table-bottom"><tbody class="table__content">
                                <tr>
                                    <td class="package"><span class="content"><span class="text"><i class="fa-regular fa-check"></i> DDoS Protection</span></span></td>
                                    <td class="process"><span class="content"><span class="text"><i class="fa-regular fa-check"></i> Instant Deployment</span></span></td>
                                    <td class="ram"><span class="content"><span class="text"><i class="fa-regular fa-check"></i> TCAdmin Panel</span></span></td>
                                    <td class="storage"><span class="content"><span class="text"><i class="fa-regular fa-check"></i> 24/7 Support</span></span></td>
                                </tr>
                        </tbody></table>
                    </div>
                </div>

                <!-- PRICING PLAN YEARLY -->
                <div class="tab__content" id="yearly">
                    <table class="table table-hover table-responsive">
                        <thead class="heading__bg"><tr>
                                <th class="cell">Game</th>
                                <th class="cell">Yearly Price (billed annually)</th>
                                <th class="cell"></th>
                            </tr></thead>
                        <tbody class="table__content">
                                <tr>
                                    <td class="package"><strong>Minecraft</strong><br><small class="text-muted">Survival, creative & modded play</small></td>
                                    <td class="price">£{{ $prices[20]["annually"] ?? '1.19' }}<small>/mo</small> <span class="badge bg-success" style="font-size:0.7em;">20% off</span></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=20&billingcycle=annually" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>Palworld</strong><br><small class="text-muted">Open-world creature survival</small></td>
                                    <td class="price">£{{ $prices[23]["annually"] ?? '1.19' }}<small>/mo</small> <span class="badge bg-success" style="font-size:0.7em;">20% off</span></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=23&billingcycle=annually" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>Garry's Mod</strong><br><small class="text-muted">Physics sandbox multiplayer</small></td>
                                    <td class="price">£{{ $prices[21]["annually"] ?? '1.79' }}<small>/mo</small> <span class="badge bg-success" style="font-size:0.7em;">20% off</span></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=21&billingcycle=annually" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>Valheim</strong><br><small class="text-muted">Viking survival multiplayer</small></td>
                                    <td class="price">£{{ $prices[28]["annually"] ?? '3.00' }}<small>/mo</small> <span class="badge bg-success" style="font-size:0.7em;">20% off</span></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=28&billingcycle=annually" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>ARK: Survival Evolved</strong><br><small class="text-muted">Dino survival open world</small></td>
                                    <td class="price">£{{ $prices[18]["annually"] ?? '3.59' }}<small>/mo</small> <span class="badge bg-success" style="font-size:0.7em;">20% off</span></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=18&billingcycle=annually" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>Arma 3</strong><br><small class="text-muted">Military tactical simulation</small></td>
                                    <td class="price">£{{ $prices[16]["annually"] ?? '4.20' }}<small>/mo</small> <span class="badge bg-success" style="font-size:0.7em;">20% off</span></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=16&billingcycle=annually" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>Arma Reforger</strong><br><small class="text-muted">Modern military sandbox</small></td>
                                    <td class="price">£{{ $prices[17]["annually"] ?? '4.20' }}<small>/mo</small> <span class="badge bg-success" style="font-size:0.7em;">20% off</span></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=17&billingcycle=annually" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>The Forest</strong><br><small class="text-muted">Horror survival & building</small></td>
                                    <td class="price">£{{ $prices[25]["annually"] ?? '4.80' }}<small>/mo</small> <span class="badge bg-success" style="font-size:0.7em;">20% off</span></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=25&billingcycle=annually" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>Scum</strong><br><small class="text-muted">Open-world hardcore survival</small></td>
                                    <td class="price">£{{ $prices[29]["annually"] ?? '6.00' }}<small>/mo</small> <span class="badge bg-success" style="font-size:0.7em;">20% off</span></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=29&billingcycle=annually" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>DayZ</strong><br><small class="text-muted">Post-apocalyptic survival</small></td>
                                    <td class="price">£{{ $prices[19]["annually"] ?? '6.29' }}<small>/mo</small> <span class="badge bg-success" style="font-size:0.7em;">20% off</span></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=19&billingcycle=annually" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>7 Days to Die</strong><br><small class="text-muted">Zombie survival & tower defence</small></td>
                                    <td class="price">£{{ $prices[1]["annually"] ?? '8.79' }}<small>/mo</small> <span class="badge bg-success" style="font-size:0.7em;">20% off</span></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=1&billingcycle=annually" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>The Isle</strong><br><small class="text-muted">Dinosaur survival simulation</small></td>
                                    <td class="price">£{{ $prices[26]["annually"] ?? '12.01' }}<small>/mo</small> <span class="badge bg-success" style="font-size:0.7em;">20% off</span></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=26&billingcycle=annually" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                                <tr>
                                    <td class="package"><strong>Unturned</strong><br><small class="text-muted">Open-world zombie survival</small></td>
                                    <td class="price">£{{ $prices[27]["annually"] ?? '15.61' }}<small>/mo</small> <span class="badge bg-success" style="font-size:0.7em;">20% off</span></td>
                                    <td><a href="https://vortexgamehosting.co.uk/billing/cart.php?a=add&pid=27&billingcycle=annually" class="btn__two primary__btn" target="_blank" rel="noopener noreferrer">Order Now</a></td>
                                </tr>
                        </tbody></table>
                    <div class="additional-content"><div class="plan-extra"><p class="text-capitalize text-center font-small">all plans include</p></div></div>
                    <table class="table table-hover table-responsive table-bottom"><tbody class="table__content">
                                <tr>
                                    <td class="package"><span class="content"><span class="text"><i class="fa-regular fa-check"></i> DDoS Protection</span></span></td>
                                    <td class="process"><span class="content"><span class="text"><i class="fa-regular fa-check"></i> Instant Deployment</span></span></td>
                                    <td class="ram"><span class="content"><span class="text"><i class="fa-regular fa-check"></i> TCAdmin Panel</span></span></td>
                                    <td class="storage"><span class="content"><span class="text"><i class="fa-regular fa-check"></i> 24/7 Support</span></span></td>
                                </tr>
                    </tbody></table>
                </div>

            </div></div></div>
    <!-- PRICING PLAN END -->

    <!-- FAQ -->
    <div class="rts-hosting-faq section__padding"><div class="container">
        <div class="row justify-content-center"><div class="col-lg-8">
            <div class="rts-section text-center">
                <h2 class="rts-section__title mb-0">Frequently asked questions</h2>
            </div>
            <div class="rts-faq__accordion"><div class="accordion accordion-flush" id="rts-accordion">
                <div class="accordion-item active"><div class="accordion-header" id="first">
                    <h4 class="accordion-button collapse show" data-bs-toggle="collapse" data-bs-target="#item__one">How quickly can I get my server up and running?</h4>
                </div><div id="item__one" class="accordion-collapse collapse show" data-bs-parent="#rts-accordion">
                    <div class="accordion-body">Your server is deployed instantly after payment. You'll receive your TCAdmin login details by email and can be in-game within minutes.</div>
                </div></div>
                <div class="accordion-item"><div class="accordion-header" id="two">
                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__two">Can I upgrade or change my server later?</h4>
                </div><div id="item__two" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                    <div class="accordion-body">Yes. You can upgrade your server resources at any time from your client area. Changes take effect immediately with no data loss.</div>
                </div></div>
                <div class="accordion-item"><div class="accordion-header" id="three">
                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__three">Is DDoS protection included on all plans?</h4>
                </div><div id="item__three" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                    <div class="accordion-body">Yes. All game servers come with DDoS protection included at no extra cost, keeping your server online during attacks.</div>
                </div></div>
                <div class="accordion-item"><div class="accordion-header" id="four">
                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__four">Can I install mods and plugins?</h4>
                </div><div id="item__four" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                    <div class="accordion-body">Absolutely. Our servers fully support mods, plugins, and custom configurations including CurseForge, Bukkit/Spigot, and Steam Workshop.</div>
                </div></div>
                <div class="accordion-item"><div class="accordion-header" id="five">
                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#item__five">How do I get support if I have an issue?</h4>
                </div><div id="item__five" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                    <div class="accordion-body">Submit a support ticket from your client area or our contact page. Our team is available 24/7 to help with any server issues.</div>
                </div></div>
            </div></div>
        </div></div>
    </div></div>
    <!-- FAQ END -->

    <!-- CTA -->
    <div class="rts-cta-two shared-page-bg"><div class="container"><div class="row">
        <div class="rts-cta-two__wrapper"><div class="cta__shape"></div>
            <div class="cta-content">
                <span>Need help choosing a plan?</span>
                <h4>Not sure which server is right for you?</h4>
            </div>
            <div class="cta-btn">
                <a href="{{route('contact')}}" class="contact__us primary__btn btn__two secondary__bg secondary__color">Contact Us</a>
            </div>
        </div>
    </div></div></div>
    <!-- CTA END -->

    <!-- FOOTER AREA -->
    @include('Frontend.Includes.Footers.footerFive')
    <!-- FOOTER AREA END -->
@endsection
