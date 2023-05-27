@extends('layouts.app')

@section('content')
@extends('layouts.guest')

@section('content')
    <div class="bmd-layout-container bmd-drawer-f-l avam-container animated ">
        <main class="bmd-layout-content">
            <div class="container-fluid">
                <div class="main_wrapper">


                    <!-- form -->

                    <div class="row ">
                        <div class="col-md-5 card shade mw-center mh-center">
                            <img src="{{asset("assets/svg/logo.jpg")}}" alt="..." class="mw-center " height="130" width="300">
                            <hr class="hr-dashed m-0">
                            <form class="" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group m-0">
                                    <label for="exampleInputEmail1">{{ __('Email Address') }}</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"  id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email" name="email"
                                         value="admin@admin.com" required autocomplete="email" autofocus>
                                    
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group m-0">
                                    <label for="exampleInputPassword1">{{ __('Password') }}</label>
                                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1"
                                        placeholder="{{ __('Password') }}" value="123456789">
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-check pt-2">
                                        <input class="form-check-input" {{ __('Password') }}"checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">{{ __('Remember Me') }}</label>
                                </div>
                                <button type="submit" class="btn shade f-primary btn-block">{{ __('Login') }}</button>
                            </form>
                        </div>

                    </div>
                    <!--  -->


                </div>

            </div>
        </main>
    </div>
@endsection

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" {{ __('Password') }}"checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
