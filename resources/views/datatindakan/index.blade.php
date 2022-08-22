@extends('layout.boostrap');
@include('components/navbar');
@section('content');

    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">DATA TINDAKAN</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <tr>

                                                <th>ID </th>
                                                <th>Nama Pasien</th>
                                                <th>Keluhan</th>
                                                <th>Tindakan</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no=1; @endphp
                                            @foreach ($datatindakan as $key)
                                                <tr>
                                                    <td>{{ $no++ }}
                                                    <td>{{ $key->pasien->nama_pasien }}</td>
                                                    <td>{{ $key->pasien->keluhan }}</td>
                                                    <td>{{ $key->tindakan }}</td>



                                                    </td>
                                                </tr>
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
                    <a href="https://www.creative-tim.com" target="_blank">Cahaya Hartati Sitanggang</a>
                </div>
            </div>
        </footer>
    </div>

@stop
