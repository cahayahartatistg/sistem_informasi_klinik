@extends('layout.boostrap1');
@include('components1/navbar');
@section('content');

    <div class="main-panel">

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">DATA PASIEN</h4>
                                <a href="{{ route('pasien.create') }}" class="btn btn-primary float-left"> Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <tr>

                                                <th>ID </th>
                                                <th>Nama Pasien</th>
                                                <th>Alamat Pasien</th>
                                                <th>No Telp</th>
                                                <th>Keluhan</th>

                                                <th class="text-center">
                                                    Aksi
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no=1; @endphp
                                            @foreach ($pasien as $key)
                                                {{-- @if ($key->pengguna->email == $email2) --}}
                                                <tr>
                                                    <td>{{ $no++ }}
                                                    <td>{{ $key->nama_pasien }}</td>
                                                    <td>{{ $key->alamat }}</td>
                                                    <td>{{ $key->no_telp }}</td>
                                                    <td>{{ $key->keluhan }}</td>


                                                    <td class="d-flex justify-content-around">
                                                        <a class="btn btn-primary pull-right"
                                                            href="{{ route('pasien.edit', $key->id) }}">Edit</a>
                                                        <form action="{{ route('pasien.destroy', $key->id) }}"
                                                            method="post" onsubmit="return confirm('yakin hapus data?') ">
                                                            @csrf
                                                            @method('delete')

                                                            <button type="submit"
                                                                class="btn btn-danger pull-right mr-3">Hapus</button>
                                                        </form>
                                                    </td>
                                                    </td>
                                                </tr>
                                                {{-- @endif --}}
                                            @endforeach


                                    </table>

                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="https://creative-tim.com/presentation">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                </div>
            </div>
        </footer>
    </div>

@stop
