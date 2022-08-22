@extends('layout.boostrap')
@include('components/navbar');
@section('content')

    <style>
        .img-ku {
            position: absolute;
            top: 0;
            width: 100%;
            z-index: -1;
        }
    </style>
    <div class="content-center">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6" style="padding-top: 50px">
                    <div class="card">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title">TAMBAH DATA OBAT</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('obat.store') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Obat </label>
                                            <input type="text" class="form-control" name="nama_obat" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Jenis Obat</label>
                                            <input type="text" class="form-control" name="jenis_obat" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Stok Obat</label>
                                            <input type="number" class="form-control" name="stok_obat" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Harga</label>
                                            <input type="number" class="form-control" name="harga" id="">
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary pull-right" name="masuk">Simpan</button>
                                <a href="{{ url('obat') }}" class="btn btn-danger pull-right mr-3">Kembali</a>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>@include('components/footer')
            </div>
        </div>

    </div>

@stop
