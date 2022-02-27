<div class="header">
    <div class="header__content">

        <div class="header__content__logo">
            <img src="{{ asset('assets/images/pwb-hub.png') }}" alt="Logo">
        </div>

        <div class="header__content__nav">
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="{{ request()->is('register') ? '_active' : '' }}">Register</a>
            @endif
            @if (Route::has('login'))
            <a href="{{ route('login') }}" class="{{ request()->is('login') ? '_active' : '' }}">Login</a>
            @endif
        </div>

    </div>
</div>
