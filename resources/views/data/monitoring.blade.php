@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Monitoring Data</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Device ID</th>
                                <th>Nama Device</th>
                                <th>Alamat IP</th>
                                <th>Waktu</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Router 1</td>
                                <td>192.168.1.1</td>
                                <td>2021-01-01 00:00:00</td>
                                <td>25.1 C</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Router 2</td>
                                <td>192.168.1.2</td>
                                <td>2021-01-01 00:00:00</td>
                                <td>24.9 C</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Router 3</td>
                                <td>192.168.1.3</td>
                                <td>2021-01-01 00:00:00</td>
                                <td>24.8 C</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Router 4</td>
                                <td>192.168.1.4</td>
                                <td>2021-01-01 00:00:00</td>
                                <td>25.0 C</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Router 5</td>
                                <td>192.168.1.5</td>
                                <td>2021-01-01 00:00:00</td>
                                <td>25.2 C</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection