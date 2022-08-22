@extends('layout.app2')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Register</title>

    </head>

    <body class="bg-theme bg-theme1">
        <div class="card-title text-uppercase text-center py-3">Daftar</div>
        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputPassword" class="sr-only">Nama</label>
                <div class="position-relative has-icon-right">
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="sr-only">email</label>
                <div class="position-relative has-icon-right">

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" required placeholder="Masukan email anda">

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
                        name="password" required placeholder="Masukan Password">

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
            <div class="form-group">
                <label for="" class="">Gender</label>
                <div class="position-relative">
                    <div class="row">
                        <div class="col-6">
                            <input type="radio" id="lk" name="gender" value="laki-laki" checked>
                            <label for="lk">Laki-Laki</label><br>
                        </div>
                        <div class="col-6">
                            <input type="radio" id="pr" name="gender" value="perempuan">
                            <label for="pr">Perempuan</label><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword" class="sr-only"></label>
                <div class="position-relative has-icon-right">
                    <select name="role" id="" class="form-control">
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select>
                </div>
            </div>


            <button type="submit" class="btn btn-light btn-block">Submit</button><br>
            <div class="text-center">Jika sudah memiliki akun <br><a href="{{ route('login.index') }}">login disini</a>
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
