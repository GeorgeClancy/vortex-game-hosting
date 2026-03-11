 <header class="rts-header style-one header__default">
    <div class="container">
        <div class="row">
            <div class="rts-header__wrapper">
                <!-- FOR LOGO -->
                <div class="rts-header__logo">
                    <a href="{{ route('home') }}" class="site-logo">
                        <img class="logo-white" src="{{asset('assets/images/logo/logo__game.svg')}}" alt="Hostie">
                        <img class="logo-dark" src="{{asset('assets/images/logo/logo-4.svg')}}" alt="Hostie">
                    </a>
                </div>
                <!-- FOR NAVIGATION MENU -->
                @include('Frontend.Includes.Partials.navbar')
                <!-- FOR HEADER RIGHT -->
                <div class="rts-header__right">
                    <a href="https://hostie-whmcs.themewant.com/" class="login__btn" target="_blank">login</a>
                    <button id="menu-btn" class="mobile__active menu-btn"><i class="fa-sharp fa-solid fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>