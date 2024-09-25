@extends('layouts.backend')

@section('title', 'Daftar Pengguna')

@section('content')
<h1>Daftar Pengguna</h1>

<table class="table" style="background-color: white;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#userDetailModal" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-email="{{ $user->email }}">
                    Detail
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="userDetailModal" tabindex="-1" aria-labelledby="userDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userDetailModalLabel">Detail Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">ID</div>
                    <div class="col-8" id="modal-user-id"></div>
                </div>
                <div class="row">
                    <div class="col-4">Nama</div>
                    <div class="col-8" id="modal-user-name"></div>
                </div>
                <div class="row">
                    <div class="col-4">Email</div>
                    <div class="col-8" id="modal-user-email"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $('#userDetailModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Tombol yang diklik
        var userId = button.data('id');
        var userName = button.data('name');
        var userEmail = button.data('email');

        var modal = $(this);
        modal.find('#modal-user-id').text(userId);
        modal.find('#modal-user-name').text(userName);
        modal.find('#modal-user-email').text(userEmail);
    });
</script>
@endsection