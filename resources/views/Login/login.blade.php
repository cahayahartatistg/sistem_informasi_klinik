@extends('layout.app2')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>login</title>

    </head>

    <body class="bg-theme bg-theme1">
        <div class="card-title text-uppercase text-center py-3">Login</div>
        <form method="POST" action="{{ route('login.store') }}">
            @csrf

            <div class="form-group">
                <label for="email" class="sr-only">email</label>
                <div class="position-relative has-icon-right">

                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Masukan email anda">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-control-position">
                        <i class="icon-user"></i>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword" class="sr-only">Password</label>
                <div class="position-relative has-icon-right">

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Masukan Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <div class="form-control-position">
                        <i class="icon-lock"></i>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-light btn-block">Login</button>
            <div class="text-center mt-3">Jika belum mempunyai akun <br><a href="{{ route('register.index') }}">Daftar</a>
            </div>

            <div class="form-row mt-4">
                <div class="form-group mb-0 col-6">
                    <a href="/">
                        <button type="button" class="btn btn-light btn-block">
                            <a href="{{ url('home') }}">
                                <i class="zmdi zmdi-view-dashboard"></i>
                                Kembali</button>
                    </a>
                </div>
                <div class="form-group mb-0 col-6 text-right">
                    {{-- <a href="{{ route('LR.index') }}">
                        <button type="button" class="btn btn-light btn-block">
                            <i class="zmdi zmdi-view-dashboard"></i>
                            Login</button>
                    </a> --}}
                </div>
            </div>

        </form>
    </body>

    </html>
@endsection
{{-- <img class="img-ku" src="{{ asset('assets/img/cccc.jpg') }}"> --}}
