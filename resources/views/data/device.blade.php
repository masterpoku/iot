@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List Device</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Device ID</th>
                                <th>Nama Device</th>
                                <th>Status</th>
                                <th>Mode</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Device 1</td>
                                <td><span class="badge bg-success">ON</span></td>
                                <td><span class="badge bg-success">AUTO</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Device 2</td>
                                <td><span class="badge bg-danger">OFF</span></td>
                                <td><span class="badge bg-primary">MANUAL</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Device 3</td>
                                <td><span class="badge bg-success">ON</span></td>
                                <td><span class="badge bg-success">AUTO</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Device 4</td>
                                <td><span class="badge bg-danger">OFF</span></td>
                                <td><span class="badge bg-primary">MANUAL</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Device 5</td>
                                <td><span class="badge bg-success">ON</span></td>
                                <td><span class="badge bg-success">AUTO</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection