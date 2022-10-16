@extends ('layout.auth')
@section('title', 'Login')
@section('image')
    {{ asset('img/pexels-pixabay-260352.jpg') }}
@endsection

@section('content')
    <div class="login-wrapper my-auto">
        <div class="login-title">Login</div>


        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" value="{{old('password')}}"required autocomplete="password" autofocus>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <button name="login" id="login" class="btn btn-block btn-danger" type="submit">{{ __('Login') }}</button>
                @if (Route::has('password.request'))
                    <a class="forgot-password-link" href="{{ route('password.request') }}">
                        {{ __('Perdeste a tua password?') }}
                    </a>
                @endif
            </div>
        </form>
        <p class="login-wrapper-footer-text">Não tem conta? <a href="{{ route('register') }}"
                class="text-reset">Regista-te</a></p>

    </div>
@endsection
