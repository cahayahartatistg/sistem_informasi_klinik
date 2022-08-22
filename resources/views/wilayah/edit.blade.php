@extends('layout.boostrap')
@include('components.sidebar');
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6" style="padding-top: 50px">
                    <div class="card">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title">EDIT DATA WILAYAH</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('wilayah.update', $wilayah->id) }}">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Kecamatan</label>
                                            <input type="text" class="form-control" name="nama_daerah"
                                                value="{{ $wilayah->nama_daerah }}">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right" name="masuk">Simpan</button>
                                <a href="{{ url('wilayah') }}" class="btn btn-danger pull-right mr-3">Kembali</a>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop
