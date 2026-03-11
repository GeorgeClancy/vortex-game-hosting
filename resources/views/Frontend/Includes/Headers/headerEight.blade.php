 <header class="rts-header top-0 header__style__eleven">
    <div class="container">
        <div class="row">
            <div class="rts-header__wrapper">
                <!-- FOR LOGO -->
                <div class="rts-header__logo">
                    <a href="{{ route('home') }}" class="site-logo">
                        <img class="logo__class" src="{{asset('assets/images/logo/logo-11-top.svg')}}" alt="Hostie">
                    </a>
                </div>
                <!-- FOR NAVIGATION MENU -->
                @include('Frontend.Includes.Partials.navbar')
                <!-- FOR HEADER RIGHT -->
                <div class="rts-header__right">
                    <div class="button-area d-flex gap-5 align-items-center">
                        <a href="{{ route('signIn') }}" class="login__btn d-flex gap-2 align-items-center"><i class="fa-regular fa-user"></i>Login</a>
                        <a href="{{ route('signUp') }}" class="get-started__btn">Get Started</a>
                    </div>
                    <button id="menu-btn" class="mobile__active menu-btn"><i class="fa-sharp fa-solid fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>