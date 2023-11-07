@extends('layouts.auth_app')

@section('content')

<div class="theme-layout">
    <div class="container-fluid pdng0">
        <div class="row merged">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="land-featurearea">
                    <div class="land-meta">
                        <img src="{{asset('assets/images/logo-banner.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="login-reg-bg">
                    <div class="log-reg-area reg">
                        <h2 class="log-title">{{__('Register')}}</h2>



                            {{-- BEGAIN REG FORM --}}
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                            {{-- NAME --}}
                        <div class="form-group">
                            <input id="name"
                                    type="text"
                                    class=" @error('name') is-invalid @enderror"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    autocomplete="name"
                                    autofocus>
                            <label class="control-label" for="input">{{ __('Name') }}</label><i class="mtrl-select"></i>
                            @error('name')
                            <small class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </small>
                            @enderror
                        </div>

                            {{-- EMAIL  --}}
                            <div class="form-group">
                            <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                            <label class="control-label" for="input">{{ __('Email Address') }}</label><i class="mtrl-select"></i>

                            @error('email')
                            <small class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                            </div>
                            {{-- PASSWORD  --}}

                            <div class="form-group">


                                <input id="password"
                                type="password"
                                class=" @error('password') is-invalid @enderror"
                                name="password"
                                required
                                autocomplete="new-password">

                            <label class="control-label" for="input">{{ __('Password') }}</label><i class="mtrl-select"></i>

                            @error('password')
                            <small class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                            </div>

                            {{-- CONFIRM PASSWORD  --}}
                            <div class="form-group">


                                <input id="password-confirm"
                                           type="password"

                                           name="password_confirmation"
                                           required
                                           autocomplete="new-password">

                            <label class="control-label" for="input">{{ __('Confirm Password') }}</label><i class="mtrl-select"></i>

                            @error('password')
                            <small class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                            </div>
                            <a href="{{route('login')}}" title="" class="already-have">Already have an account</a>

                            {{-- BUTTON SUMBIT  --}}
                            <div class="submit-btns">
                                <button class="mtr-btn " type="submit"><span>Register</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
