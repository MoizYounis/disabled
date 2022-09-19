@extends('layouts.app_auth')

@section('content')
    <style>
        input,
        select {
            width: 100%;
            background: #e9e9ed;
        }

        /* active state */
        input:focus~.bar:before,
        input:focus~.bar:after {
            width: 205%;
        }

        select:focus~.bar:before,
        input:focus~.bar:after {
            width: 206%;
        }

        .app-button {
            width: 200px;
        }
    </style>

    <div class="register-page">
        <div class="register-page__main">

            @include('layouts.app_header')

            <div class="register-page__main__content">

                <h3 class="first-heading">Enter</h3>
                <h5 class="second-heading">Registration Details</h5>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger p-0" style="color: red;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @include('flash-message')

                    <div class="form">
                        <div class="form__main">

                            <div class="form__main__fields">
                                <div class="group">

                                    {!! Form::text('first_name', null, ['id' => 'first_name', 'autofocus', 'required']) !!}
                                    {{-- <input type="text" id="first_name" name="first_name" autofocus > --}}
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
                                    {!! Form::text('last_name', null, ['id' => 'last_name', 'autofocus', 'required']) !!}
                                    {{-- <input type="text" name="last_name" id="last_name" value="" autofocus > --}}
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
                                    {!! Form::email('email', null, ['id' => 'email', 'autofocus', 'autocomplete' => 'email', 'required']) !!}

                                    {{-- <input type="email" value="" id="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus> --}}
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
                                    {!! Form::number('phone', null, ['id' => 'phone', 'autofocus', 'required']) !!}
                                    {{-- <input type="number" id="phone" value="" id="phone" name="phone" autofocus > --}}
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
                                    {{--  <select name="province" id="" style="margin-top: 2px; color: #000;">
                                        <option value="" selected style="color: #999;">-- Select Province --</option>
                                        @foreach ($provinces as $item)
                                            <option value="{{ $item->id }}" style="color: #5D4037;">{{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>  --}}
                                    {{--  {!! Form::label('province', 'Provinces: ') !!}  --}}
                                    @php($provinceArr = [])
                                    @php($provinceArr[''] = '-- Select Province --')
                                    @foreach ($provinces as $province)
                                        @php($provinceArr[$province->id] = $province->name)
                                    @endforeach
                                    {!! Form::select('province', $provinceArr, null, [ 'id' => 'province', 'required']) !!}

                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="province">Provinces</label>
                                </div>
                                @error('province')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    {!! Form::text('city', null, ['id' => 'city', 'autofocus', 'required']) !!}
                                    {{-- <input type="text" name="city" value="" id="city" autofocus > --}}
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
                                    {!! Form::text('address', null, ['id' => 'address', 'autofocus', 'required']) !!}
                                    {{-- <input type="text" name="address" id="address" value="" autofocus > --}}
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
                            $roles = \App\Models\Role::all();
                            ?>

                            <div class="form__main__fields">
                                <div class="group">
                                    {{--  <select name="role_id" id="role_id" style="margin-top: 2px; color: #000;">
                                        <option value="" style="color: #999">-- Registered As --</option>
                                        <option value="2" style="color: #999">-- NGO --</option>
                                        <option value="3" style="color: #999">-- School --</option>
                                        <option value="4" style="color: #999">-- Hospital --</option>
                                        <option value="7" style="color: #999">-- Store --</option>
                                        <option value="5" style="color: #999">-- Disabled User --</option>
                                        <option value="6" style="color: #999">-- User --</option>
                                    </select>  --}}

                                    @php($roleArr = [])
                                    @php($roleArr[''] = '-- Registered As --')
                                    {!! Form::select('role_id', ['' => '-- Registered As --', '2' => '-- NGO --', '3' => '-- School --', '4' => '-- Hospital --', '7' => '-- Store --', '5' => '-- Disabled User --', '6' => '-- User --'], null, [ 'id' => 'role_id', 'required']) !!}
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="role_id">Roles</label>
                                </div>
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    <input type="file" name="file" id="file" value="" autofocus
                                        autocomplete="file">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label
                                        for="file">{{ __('File, (Please Give Your Disability Or Organization Proof!)') }}</label>
                                </div>
                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form__main__fields">
                                <div class="group">
                                    {!! Form::password('password', null, ['id' => 'password', 'autofocus', 'autocomplete' => 'new-password', 'required' => true]) !!}
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
                                    {!! Form::password('password_confirmation', null, [
                                        'id' => 'password-confirm',
                                        'autofocus',
                                        'autocomplete' => 'new-password', 'required' => true
                                    ]) !!}
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
