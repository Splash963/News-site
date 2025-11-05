<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.spinner')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: linear-gradient(to bottom, #134686, #F4F6FF);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .background {
            width: 70%;
            display: flex;
            height: 80vh;
            flex-direction: row;
            padding: 0;
            border-radius: 20px;
            box-shadow: 2px 4px 10px 0 rgba(0, 0, 0, 0.5);
        }

        .background.reverse .flex-1 {
            transform: translateX(100%);
            border-radius: 0 20px 20px 0;
            width: 100%;
        }

        .background.reverse .flex-2 {
            transform: translateX(-100%);
            border-radius: 20px 0 0 20px;
            width: 100%;
        }

        .flex-1 {
            width: 100%;
            background-color: #F4F6FF;
            transition: all 0.9s ease;
            border-radius: 20px 0 0 20px;
        }

        .flex-2 {
            width: 100%;
            background-color: #134686;
            transition: all 0.9s ease;
            border-radius: 0 20px 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .textfields {
            background-color: transparent;
            border-radius: 20px;
            color: white;
        }

        .form-box {
            display: none;
            transition: all 0.3s ease;
        }

        .form-box.active {
            display: block;
        }

        input {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 8px;
        }

        button {
            background-color: transparent;
            padding: 8px 12px;
            margin-top: 10px;
            border: solid 2px white;
            border-radius: 20px;
            color: white;
        }

        @media (max-width: 768px) {
            .background {
                flex-direction: column;
            }

            .background.reverse .flex-1 {
                transform: translateY(100%);
            }

            .background.reverse .flex-2 {
                transform: translateY(-100%);
            }

            .flex-1,
            .flex-2 {
                width: 100%;
                height: 50%;
            }
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="flex-1">
            <img src="images/Gemini_Generated_Image_f2zj1lf2zj1lf2zj.png" class="img-fluid" alt="...">
        </div>
        <div class="flex-2">
            <div class="form-wrapper">

                <!-- Login Form -->
                <div class="form-box login-box active row justify-content-center">
                    <div class="title mb-5">
                        <p class="fs-1 text-white" style="display: flex; justify-content: center; align-items: center; font-family: 'Poppins', sans-serif; font-weight: 400;">Login</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4" style="display: flex; align-items: center; justify-content: center; color: white;">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="textfields @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4" style="display: flex; align-items: center; justify-content: center; color: white;">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class=" textfields @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-12 p-0" style="display: flex; justify-content: center; align-items: center;">
                                <button type="submit" style="width: 80%;">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-12 p-0" style="display: flex; justify-content: center; align-items: center;">
                                <button id="showRegister" style="width: 80%;">Go to Registration</button>
                            </div>
                            <div class="col-12 p-0" style="display: flex; justify-content: center; align-items: center;">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Registration Form -->
                <div class="form-box register-box row justify-content-center">
                    <div class="title mb-5">
                        <p class="fs-1 text-white" style="display: flex; justify-content: center; align-items: center;">Registration</p>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-12" style="display: flex; justify-content: center; align-items: center;">
                                <button type="submit" style="width: 80%;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <div class="col-12" style="display: flex; justify-content: center; align-items: center;">
                                <button style="width: 80%;" id="showLogin">Back to Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <script>
        document.getElementById('showRegister').addEventListener('click', function() {
            document.querySelector('.login-box').classList.remove('active');
            document.querySelector('.register-box').classList.add('active');
            document.querySelector('.background').classList.toggle('reverse');
        });

        document.getElementById('showLogin').addEventListener('click', function() {
            document.querySelector('.register-box').classList.remove('active');
            document.querySelector('.login-box').classList.add('active');
            document.querySelector('.background').classList.toggle('reverse');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>