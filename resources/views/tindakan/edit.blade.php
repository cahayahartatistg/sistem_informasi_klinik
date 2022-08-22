@extends('layout.boostrap1')
@include('components.sidebar');
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6" style="padding-top: 50px">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">EDIT DATA TINDAKAN</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('tindakan.update', $tindakan->id) }}">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Pasien </label>
                                            <select name="id_pasien">
                                                @foreach ($pasien as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama_pasien }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Keluhan</label>
                                            <select name="id_pasien">
                                                @foreach ($pasien as $item)
                                                    <option value="{{ $item->id }}">{{ $item->keluhan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Tindakan</label>
                                            <input type="text" class="form-control" name="tindakan"
                                                value="{{ $tindakan->tindakan }}">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right" name="masuk">Simpan</button>
                                <a href="{{ url('tindakan') }}" class="btn btn-danger pull-right mr-3">Kembali</a>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop
