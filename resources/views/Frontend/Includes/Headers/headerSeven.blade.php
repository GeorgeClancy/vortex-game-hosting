<header class="rts-header header__with__bg header__default">
    <!-- HEADER TOP AREA -->
    <div class="rts-ht rts-ht__bg">
        <div class="container">
            <div class="row">
                <div class="rts-ht__wrapper">
                    <div class="rts-ht__email">
                        <a href="mailto:info@hostie.com"><img src="assets/images/icon/email.svg" alt="" class="icon">contact@hostie.com</a>
                    </div>
                    <div class="rts-ht__promo">
                        <p><img class="icon" src="assets/images/icon/tag--group.svg" alt=""> Hosting Flash Sale: Starting at <strong>$2.59/mo</strong> for a limited time</p>
                    </div>
                    <div class="rts-ht__links">
                        <div class="live-chat-has-dropdown">
                            <a href="#" class="live__chat"><img src="assets/images/icon/forum.svg" alt="" class="icon">Live Chat</a>
                        </div>
                        <div class="login-btn-has-dropdown">
                            <a href="#" class="login__link"><img src="assets/images/icon/person.svg" alt="" class="icon">Login</a>
                            <div class="login-submenu">
                                <form action="#">
                                    <div class="form-inner">
                                        <div class="single-wrapper">
                                            <input type="email" placeholder="Your email" required>
                                        </div>
                                        <div class="single-wrapper">
                                            <input type="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-btn">
                                            <button type="submit" class="primary__btn">Log In</button>
                                        </div>
                                        <a href="#" class="forgot-password">Forgot your password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER TOP AREA END -->
    <div class="rts-menu">
        <div class="container">
            <div class="row">
                <div class="rts-header__wrapper">
                    <!-- FOR LOGO -->
                    <div class="rts-header__logo">
                        <a href="{{ route('home') }}" class="site-logo">
                            <img class="logo-white" src="{{asset('assets/images/logo/logo-1.svg')}}" alt="Hostie">
                            <img class="logo-dark" src="{{asset('assets/images/logo/logo-4.svg')}}" alt="Hostie">
                        </a>
                    </div>
                    <!-- FOR NAVIGATION MENU -->
                    @include('Frontend.Includes.Partials.navbar')
                    <!-- FOR HEADER RIGHT -->
                    <div class="rts-header__right">
                        <a href="https://hostie-whmcs.themewant.com/" class="login__btn" target="_blank">Client Area</a>
                        <button id="menu-btn" class="mobile__active menu-btn"><i class="fa-sharp fa-solid fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>