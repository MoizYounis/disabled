<div class="header">
    <div class="header__content">

        <div class="header__content__logo">
            <img src="{{ asset('assets/images/pwb-hub.png') }}" alt="Logo">
        </div>

        <div class="header__content__nav">
            @if (Route::has('userRegisterView'))
            <a href="{{ route('userRegisterView') }}" class="{{ request()->is('userRegisterView') ? '_active' : '' }}">Register</a>
            @endif
            @if (Route::has('userLoginView'))
            <a href="{{ route('userLoginView') }}" class="{{ request()->is('userLoginView') ? '_active' : '' }}">Login </a>
            @endif
        </div>

    </div>
</div>
