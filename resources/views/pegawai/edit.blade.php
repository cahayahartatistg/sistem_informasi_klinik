@extends('layout.boostrap')
@include('components.sidebar');
@include('components/navbar');
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6" style="padding-top: 50px">
                    <div class="card">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title">EDIT DATA PEGAWAI</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('pegawai.update', $pegawai->id) }}">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Pegawai</label>
                                            <input type="text" class="form-control" name="nama_pegawai"
                                                value="{{ $pegawai->nama_pegawai }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" id=""
                                                value="{{ $pegawai->alamat }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">No Telp</label>
                                            <input type="number" class="form-control" name="no_telp"
                                                value="{{ $pegawai->no_telp }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Penempatan</label>
                                            <select name="id_wilayah" id="" class="form-control">
                                                @foreach ($wilayah as $data)
                                                    <option value="{{ $data->id }}">{{ $data->nama_daerah }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-primary pull-right" name="masuk">Simpan</button>
                                <a href="{{ url('pegawai') }}" class="btn btn-danger pull-right mr-3">Kembali</a>
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
