<header class="rts-header style-one header__default">
    <div class="container">
        <div class="row">
            <div class="rts-header__wrapper">
                <!-- FOR LOGO -->
                <div class="rts-header__logo">
                    <a href="{{ route('home') }}" class="site-logo">
                        <img class="logo-white" src="{{asset('assets/images/logo/logo__game.svg')}}" alt="Vortex Game Hosting">
                        <img class="logo-dark" src="{{asset('assets/images/logo/logo__game.svg')}}" alt="Vortex Game Hosting">
                    </a>
                </div>
                <!-- FOR NAVIGATION MENU -->
                @include('Frontend.Includes.Partials.navbar')
                <!-- FOR HEADER RIGHT -->
                <div class="rts-header__right">
                    <a href="https://vortexgamehosting.co.uk/billing/clientarea.php" class="login__btn" target="_blank" rel="noopener noreferrer">Client Area</a>
                    <a href="http://cp.vortexgamehosting.co.uk:8880/" class="rts-btn btn__sm secondary__bg secondary__color ms-2" target="_blank" rel="noopener noreferrer" style="display:inline-block; padding: 8px 16px; border-radius: 4px; font-size: 14px; font-weight: 600;">Game Panel</a>
                    <button id="menu-btn" class="mobile__active menu-btn"><i class="fa-sharp fa-solid fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>