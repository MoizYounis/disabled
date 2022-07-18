@extends('layouts.app_auth')

@section('content')

    <style>
        h4 {
            margin-bottom: 40px;
        }

        .forgotpass {
            text-align: right;
            font-weight: 400;
            margin-bottom: 30px;
        }

        span {
            color: #00796B;
        }

        .app-button {
            width: 300px;
        }

        .appa {
            color: #5D4037;
            transition: 0.25s;
            cursor: pointer;
        }

        .appa:hover {
            color: #00796B;
            text-decoration: underline;
        }

        .appa_active {
            color: #5D4037;
        }

        .footer {
            text-align: right;
            margin-bottom: 20px
        }

        .footer a {
            color: #5D4037;
        }

        .footer a:hover {
            color: #00796B;
            text-decoration: underline;
        }

        h4 {
            font-weight: 500
        }

        input {
            width: 85%;
            background: #e9e9ed;
        }

        input:focus~.bar:before,
        input:focus~.bar:after {
            width: 136%;
        }

    </style>

    <div class="body">
        <div class="card-secondary">

            @include('layouts.user_app_header')

            <div class="card-secondary__body">
                <h4> Welcome <span> back</span> </h4>

                <div class="card-secondary__body__content">
                    <form method="POST" action="{{ route('userLogin') }}" style="margin-left: 70px;">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger p-0">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        <div class="group">
                            <input id="email" type="text" class="@error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label for="email">Email</label>
                        </div>

                        <div class="group">
                            <input type="password" id="password" class="@error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label for="password">Password</label>
                        </div>

                        {{--  @if (Route::has('password.request'))
                            <p class="footer">
                                <a href="#">Forgot Your Password?</a>
                            </p>
                        @endif  --}}

                        <div class="text-center">
                            <button type="submit" class="app-button">Login &nbsp;<i
                                    class="fa fa-angle-right"></i></button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

@endsection
