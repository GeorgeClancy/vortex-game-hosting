<footer class="rts-footer game-footer section__padding">
    <div class="container">
        <div class="row">
            <!-- widget: brand -->
            <div class="col-lg-3 col-md-5 col-sm-6 rts-footer__widget--column">
                <div class="rts-footer__widget footer__widget w-300">
                    <a href="{{ route('indexSeven') }}" class="footer__logo">
                        <img src="{{asset('assets/images/logo/footer__game__logo.svg')}}" alt="Vortex Game Hosting">
                    </a>
                    <p class="brand-desc">Premium game server hosting with 99.9% uptime. Deploy your server in seconds and dominate the competition.</p>
                    <div class="separator site-default-border"></div>
                    <div class="payment__method">
                        <h5>Payment Method</h5>
                        <ul>
                            <li><img src="{{asset('assets/images/payment/visa.svg')}}" alt="Visa"></li>
                            <li><img src="{{asset('assets/images/payment/master-card.svg')}}" alt="Mastercard"></li>
                            <li><img src="{{asset('assets/images/payment/paypal.svg')}}" alt="PayPal"></li>
                            <li><img src="{{asset('assets/images/payment/american-express.svg')}}" alt="American Express"></li>
                            <li><img src="{{asset('assets/images/payment/wise.svg')}}" alt="Wise"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- widget end -->
            <!-- widget: company -->
            <div class="col-lg-2 col-md-3 col-sm-6 rts-footer__widget--column">
                <div class="rts-footer__widget footer__widget extra-padding">
                    <h5 class="widget-title">Company</h5>
                    <div class="rts-footer__widget--menu">
                        <ul>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('pricing') }}">Pricing</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('knowledgebase') }}">Knowledgebase</a></li>
                            <li><a href="{{ route('technology') }}">Technology</a></li>
                            <li><a href="{{ route('dataCenter') }}">Data Centers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- widget end -->
            <!-- widget: server features -->
            <div class="col-lg-2 col-md-4 col-sm-6 rts-footer__widget--column">
                <div class="rts-footer__widget footer__widget extra-padding">
                    <h5 class="widget-title">Server Features</h5>
                    <div class="rts-footer__widget--menu">
                        <ul>
                            <li><a href="{{ route('dataCenter') }}">DDoS Protection</a></li>
                            <li><a href="{{ route('technology') }}">NVMe SSDs</a></li>
                            <li><a href="{{ route('technology') }}">Instant Setup</a></li>
                            <li><a href="http://cp.vortexgamehosting.co.uk:8880/" target="_blank" rel="noopener noreferrer">TCAdmin Panel</a></li>
                            <li><a href="{{ route('dataCenter') }}">Global Locations</a></li>
                            <li><a href="{{ route('contact') }}">24/7 Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- widget end -->
            <!-- widget: game servers -->
            <div class="col-lg-2 col-md-6 col-sm-6 rts-footer__widget--column">
                <div class="rts-footer__widget footer__widget">
                    <h5 class="widget-title">Game Servers</h5>
                    <div class="rts-footer__widget--menu">
                        <ul>
                            <li><a href="https://vortexgamehosting.co.uk/billing/index.php?rp=/store/game-servers/minecraft" target="_blank" rel="noopener noreferrer">Minecraft</a></li>
                            <li><a href="https://vortexgamehosting.co.uk/billing/index.php?rp=/store/game-servers/valheim" target="_blank" rel="noopener noreferrer">Valheim</a></li>
                            <li><a href="https://vortexgamehosting.co.uk/billing/index.php?rp=/store/game-servers/dayz" target="_blank" rel="noopener noreferrer">DayZ</a></li>
                            <li><a href="https://vortexgamehosting.co.uk/billing/index.php?rp=/store/game-servers/ark-se" target="_blank" rel="noopener noreferrer">Ark SE</a></li>
                            <li><a href="https://vortexgamehosting.co.uk/billing/index.php?rp=/store/game-servers/palworld" target="_blank" rel="noopener noreferrer">Palworld</a></li>
                            <li><a href="https://vortexgamehosting.co.uk/billing/index.php?rp=/store/game-servers/7dtd" target="_blank" rel="noopener noreferrer">7 Days to Die</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- widget end -->
            <!-- widget: newsletter -->
            <div class="col-lg-3 col-md-6 rts-footer__widget--column">
                <div class="rts-footer__widget footer__widget">
                    <h5 class="widget-title">Stay Connected</h5>
                    <p>Get updates on new games, deals and server news.</p>
                    <form action="#" class="newsletter mx-40">
                        <input type="email" class="home-one" name="email" placeholder="Enter your email" required>
                        <span class="icon"><i class="fa-regular fa-envelope-open"></i></span>
                        <button type="submit"><i class="fa-regular fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
            <!-- widget end -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="rts-footer__copyright text-center">
                <p>&copy; Copyright 2025 Vortex Game Hosting. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
