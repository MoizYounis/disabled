@extends('layouts.app_auth')

@section('content')
    <style>
        input, select {
            width: 100%;
            background: #e9e9ed;
        }
        /* active state */
        input:focus ~ .bar:before, input:focus ~ .bar:after {
            width:205%;
        }
        select:focus ~ .bar:before, input:focus ~ .bar:after {
            width:206%;
        }
        .app-button { width: 200px; }

    </style>

    <div class="register-page">
        <div class="register-page__main">

            @include('layouts.app_header')

            <div class="register-page__main__content">

                <h3 class="first-heading">Enter</h3>
                <h5 class="second-heading">Registration Details</h5>
                @include('flash-message')
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form">
                        <div class="form__main">

                            <div class="form__main__fields">
                                <div class="group">
                                    <input type="text" id="first_name" name="first_name" autofocus required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="first_name">First Name</label>
                                </div>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <input type="text" name="last_name" id="last_name" value="" autofocus required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="last_name">Last Name</label>
                                </div>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <input type="email" value="" id="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="email">Email</label>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <input type="text" id="phone" value="" id="phone" name="phone" autofocus required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="phone">Phone</label>
                                </div>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <?php
                            $provinces = \App\Models\Province::all();
                            ?>

                            <div class="form__main__fields">
                                <div class="group">
                                    <select name="province" id="" required style="margin-top: 2px; color: #000;">
                                        <option value="" selected style="color: #999;">-- Select Province --</option>
                                        @foreach ($provinces as $item)
                                        <option value="{{ $item->id }}" style="color: #5D4037;">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                </div>
                                @error('province')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <input type="text" name="city" value="" id="city" autofocus required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="city">City*</label>
                                </div>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <input type="text" name="address" id="address" value="" autofocus required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="address">Address</label>
                                </div>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <?php
                            $organization = \App\Models\OrganizationCategory::all();
                            ?>

                            <div class="form__main__fields">
                                <div class="group">
                                    <select name="organization_id" id="category" required style="margin-top: 2px; color: #000;">
                                        <option value="" selected style="color: #999">-- Registered As(Select Category) --</option>
                                        @foreach ($organization as $item)
                                        <option value="{{ $item->id }}" style="color: #5D4037">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                </div>
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <input type="password" name="password" id="password" value="" autofocus autocomplete="new-password" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="password">{{ __('Password') }}</label>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <input id="password-confirm" type="password" name="password_confirmation" required
                                        autocomplete="new-password">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="app-button">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
