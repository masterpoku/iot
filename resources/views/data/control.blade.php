@extends('layouts.backend')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Device</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <!-- Table with outer spacing -->
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Device ID</th>
                                <th>Nama Device</th>
                                <th>Alamat IP</th>
                                <th>Waktu</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Router 1</td>
                                <td>192.168.1.1</td>
                                <td>2021-01-01 00:00:00</td>
                                <td>
                                    <button class="btn btn-outline-success onoff" data-id="1" data-status="off">
                                        <span class="on d-none">ON <i class="bi bi-toggle-on"></i></span>
                                        <span class="off">OFF <i class="bi bi-toggle-off"></i></span>
                                    </button>
                                    <script>
                                        $(document).ready(function() {
                                            $('.onoff[data-id="1"]').click(function() {
                                                var el = $(this).children();
                                                var status = $(this).data('status');

                                                if (status == 'off') {
                                                    el.removeClass('off').addClass('on').children('i').removeClass('bi-toggle-off').addClass('bi-toggle-on');
                                                    $(this).data('status', 'on');
                                                } else {
                                                    el.removeClass('on').addClass('off').children('i').removeClass('bi-toggle-on').addClass('bi-toggle-off');
                                                    $(this).data('status', 'off');
                                                }
                                            });
                                        });
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Router 2</td>
                                <td>192.168.1.2</td>
                                <td>2021-01-01 00:00:00</td>
                                <td>
                                    <button class="btn btn-outline-success onoff" data-id="2" data-status="off">
                                        <span class="on d-none">ON <i class="bi bi-toggle-on"></i></span>
                                        <span class="off">OFF <i class="bi bi-toggle-off"></i></span>
                                    </button>
                                    <script>
                                        $(document).ready(function() {
                                            $('.onoff[data-id="2"]').click(function() {
                                                var el = $(this).children();
                                                var status = $(this).data('status');

                                                if (status == 'off') {
                                                    el.removeClass('off').addClass('on').children('i').removeClass('bi-toggle-off').addClass('bi-toggle-on');
                                                    $(this).data('status', 'on');
                                                } else {
                                                    el.removeClass('on').addClass('off').children('i').removeClass('bi-toggle-on').addClass('bi-toggle-off');
                                                    $(this).data('status', 'off');
                                                }
                                            });
                                        });
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Router 3</td>
                                <td>192.168.1.3</td>
                                <td>2021-01-01 00:00:00</td>
                                <td>
                                    <button class="btn btn-outline-success onoff" data-id="3" data-status="off">
                                        <span class="on d-none">ON <i class="bi bi-toggle-on"></i></span>
                                        <span class="off">OFF <i class="bi bi-toggle-off"></i></span>
                                    </button>
                                    <script>
                                        $(document).ready(function() {
                                            $('.onoff[data-id="3"]').click(function() {
                                                var el = $(this).children();
                                                var status = $(this).data('status');

                                                if (status == 'off') {
                                                    el.removeClass('off').addClass('on').children('i').removeClass('bi-toggle-off').addClass('bi-toggle-on');
                                                    $(this).data('status', 'on');
                                                } else {
                                                    el.removeClass('on').addClass('off').children('i').removeClass('bi-toggle-on').addClass('bi-toggle-off');
                                                    $(this).data('status', 'off');
                                                }
                                            });
                                        });
                                    </script>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection