 <footer class="rts-footer site-footer-six">
    <div class="container position-relative z-1">
        <div class="row">
            <!-- widget -->
            <div class="col-xl-3 col-lg-2 col-md-4 col-sm-4 rts-footer__widget--column">
                <div class="rts-footer__widget footer__widget">
                    <h5 class="widget-title">Company</h5>
                    <div class="rts-footer__widget--menu ">
                        <ul>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('blog') }}">News Feed</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('affiliate') }}">Affiliate Program</a></li>
                            <li><a href="{{ route('technology') }}">Our Technology</a></li>
                            <li><a href="{{ route('knowledgebase') }}">Knowledgebase</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- widget end -->
            <!-- widget -->
            <div class="col-xl-3 col-lg-2 col-md-4 col-sm-4 rts-footer__widget--column">
                <div class="rts-footer__widget footer__widget extra-padding">
                    <h5 class="widget-title">Domain</h5>
                    <div class="rts-footer__widget--menu ">
                        <ul>
                            <li><a href="{{ route('domainChecker') }}">Domain Checker</a></li>
                            <li><a href="{{ route('domainTransfer') }}">Domain Transfer</a></li>
                            <li><a href="{{ route('domainRegister') }}">Domain Registration</a></li>
                            <li><a href="{{ route('dataCenter') }}">Data Centers</a></li>
                            <li><a href="{{ route('whois') }}">Whois</a></li>
                            <li><a href="{{ route('support') }}">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- widget end -->
            <!-- widget -->
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 rts-footer__widget--column">
                <div class="rts-footer__widget footer__widget">
                    <h5 class="widget-title">Hosting</h5>
                    <div class="rts-footer__widget--menu">
                        <ul>
                            <li><a href="{{ route('sharedHosting') }}">Shared Hosting</a></li>
                            <li><a href="{{ route('WordPressHosting') }}">Wordpress Hosting</a></li>
                            <li><a href="{{ route('vpsHosting') }}">VPS Hosting</a></li>
                            <li><a href="{{ route('resellerHosting') }}">Reseller Hosting</a></li>
                            <li><a href="{{ route('dedicatedHosting') }}">Dedicated Hosting</a></li>
                            <li><a href="{{ route('cloudHosting') }}">Cloud Hosting</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- widget end -->

            <!-- widget -->
            <div class="col-xl-4 col-lg-6 col-md-12 rts-footer__widget--column">
                <div class="rts-footer__widget footer__widget newsletter-style-six">
                    <h5 class="widget-title"><span><i class="fa-sharp fa-solid fa-paper-plane"></i></span>Join Our Newsletter</h5>
                    <p>We'll send you news and offers.</p>
                    <form action="#" class="newsletter">
                        <input type="email" name="email" placeholder="Enter mail">
                        <span class="icon"><i class="fa-regular fa-envelope-open"></i></span>
                        <button type="submit"><i class="fa-regular fa-arrow-right"></i></button>
                    </form>
                    <div class="social__media">
                        <h5>social media</h5>
                        <div class="social__media--list">
                            <a href="#" class="media"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="media"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="media"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" class="media"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#" class="media"><i class="fa-brands fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- widget end -->
        </div>
    </div>
</footer>
<div class="rts-footer__copyright-two style-four">
    <div class="container">
        <div class="row">
            <div class="rts-footer__copyright-two__wrapper">
                <p class="copyright">&copy; Copyright 2024. All Rights Reserved.</p>
                <div class="payment__method">
                    <ul>
                        <li><img src="{{asset('assets/images/payment/visa.svg')}}" alt=""></li>
                        <li><img src="{{asset('assets/images/payment/master-card.svg')}}" alt=""></li>
                        <li><img src="{{asset('assets/images/payment/paypal.svg')}}" alt=""></li>
                        <li><img src="{{asset('assets/images/payment/american-express.svg')}}" alt=""></li>
                        <li><img src="{{asset('assets/images/payment/wise.svg')}}" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>