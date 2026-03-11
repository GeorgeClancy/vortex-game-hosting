<header class="rts-header style-five header__default">
    <div class="container p--0">
        <div class="row">
            <div class="rts-header__wrapper">
                <!-- FOR LOGO -->
                <div class="rts-header__logo">
                    <a href="{{ route('home') }}" class="site-logo">
                        <img src="{{asset('assets/images/logo/logo-3.svg')}}" alt="Hostie">
                    </a>
                </div>
                <!-- FOR NAVIGATION MENU -->
                @include('Frontend.Includes.Partials.navbar')
                <!-- FOR HEADER RIGHT -->
                <div class="rts-header__right">
                    <a href="{{ route('signUp') }}" class="login__btn">Get Started</a>
                    <button id="menu-btn" class="mobile__active menu-btn"><i class="fa-sharp fa-solid fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>