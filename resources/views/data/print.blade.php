@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Hasil Hari ini</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Device ID</th>
                            <th>Nama Device</th>

                            <th>Waktu</th>
                            <th>Data (Liter)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Router 1</td>

                            <td>2021-01-01 00:00:00</td>
                            <td>25.1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Router 2</td>

                            <td>2021-01-01 00:00:00</td>
                            <td>24.9</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Router 3</td>

                            <td>2021-01-01 00:00:00</td>
                            <td>24.8</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Router 4</td>

                            <td>2021-01-01 00:00:00</td>
                            <td>25.0</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Router 5</td>

                            <td>2021-01-01 00:00:00</td>
                            <td>25.2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection