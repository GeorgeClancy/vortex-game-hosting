<header class="rts-header style-three header__default">
    <div class="container">
        <div class="row">
            <div class="rts-header__wrapper">
                <!-- FOR LOGO -->
                <div class="rts-header__logo">
                    <a href="{{ route('home') }}" class="site-logo">
                        <img class="logo-white" src="{{asset('assets/images/logo/logo-2.svg')}}" alt="Hostie">
                        <img class="logo-dark" src="{{asset('assets/images/logo/logo-4.svg')}}" alt="Hostie">
                    </a>
                </div>
                <!-- FOR NAVIGATION MENU -->
                @include('Frontend.Includes.Partials.navbar')
                <!-- FOR HEADER RIGHT -->
                <div class="rts-header__right">
                    <div class="button-area">
                        <div class="login-btn has-dropdown">
                            <a href="{{ route('signIn') }}" class="login__btn transparent"><i class="fa-regular fa-user"></i>Login</a>
                        </div>
                        <a href="{{ route('signUp') }}" class="get-started__btn">Get Started</a>
                    </div>
                    <button id="menu-btn" class="mobile__active menu-btn"><i class="fa-sharp fa-solid fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>