<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Login | {{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style>
        .c-app {
            background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('{{ asset('images/bg-login.png') }}');
            background-color: #fff;
            background-size: cover;
            background-position: center;
        }
    </style>

</head>

<body class="c-app flex-row align-items-center">
<div class="container">
    <div class="row mb-3">
    </div>
    <div class="row justify-content-center">
        <div class="{{ Route::has('register') ? 'col-md-8' : 'col-md-5' }}">
            @if(Session::has('account_deactivated'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('account_deactivated') }}
                </div>
            @endif
            <div class="card-group">
                <div class="card p-4 border-0 shadow-sm" style="border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
                    <div class="card-body">
                        <form method="post" action="{{ url('/login') }}">
                            @csrf
                            <div class="col-12 d-flex justify-content-center">
                            <img width="250" src="{{ asset('images/logo-dark.png') }}" alt="Logo">
                            </div>
                            <h1 style="text-align: center; margin-top: 1rem; font-weight: bold">Login</h1>
                            <h5 style="text-align: center; margin-bottom: 2rem;">Sistem Inventory dan POS</h5>


                            <p class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>silahkan masuk</span></p>
                            
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="bi bi-person"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}"
                                       placeholder="Email">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="bi bi-lock"></i>
                                    </span>
                                </div>
                                <input type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       placeholder="Password" name="password">
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <button class="btn btn-primary px-4" type="submit">Masuk</button>
                                </div>
                                <div class="col-8 text-right">
                                    <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                        Lupa Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if(Route::has('register'))
                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>Daftar</h2>
                            <p>Sign in to start your session</p>
                            <a class="btn btn-lg btn-outline-light mt-3" href="{{ route('register') }}">Daftar Sekarang!</a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- CoreUI -->
<script src="{{ mix('js/app.js') }}" defer></script>

</body>
</html>
