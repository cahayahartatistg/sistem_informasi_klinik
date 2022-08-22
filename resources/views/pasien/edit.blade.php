@extends('layout.boostrap1')
@include('components1.sidebar');
@section('content')

    <style>
        .img-ku {
            position: absolute;
            top: 0;
            width: 100%;
            z-index: -1;
        }
    </style>
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6" style="padding-top: 50px">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">EDIT DATA PASIEN</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('pasien.update', $pasien->id) }}">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama pasien</label>
                                            <input type="text" class="form-control" name="nama_pasien"
                                                value="{{ $pasien->nama_pasien }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" id=""
                                                value="{{ $pasien->alamat }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">No Telp</label>
                                            <input type="number" class="form-control" name="no_telp"
                                                value="{{ $pasien->no_telp }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Keluhan</label>
                                            <input type="text" class="form-control" name="keluhan"
                                                value="{{ $pasien->keluhan }}">
                                        </div>
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-primary pull-right" name="masuk">Simpan</button>
                                <a href="{{ url('pasien') }}" class="btn btn-danger pull-right mr-3">Kembali</a>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- <img class="img-ku" src="{{ asset('template1/assets/img/dompet.jpg') }}"> --}}

@stop
