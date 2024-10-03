@extends('layouts.backend')

@section('content')
<h1>Daftar Role</h1>
<table class="table" style="background-color: white;">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach(['admin', 'management', 'kepala'] as $role)
        <tr>
            <td>{{ $role }}</td>
            <td>Aksi apa saja {{ $role }}</td>
            <td>
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#roleEditModal" data-role="{{ $role }}">
                    Sunting
                </button>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="roleEditModal" tabindex="-1" role="dialog" aria-labelledby="roleEditModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roleEditModalLabel">Sunting Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editRoleForm" method="POST" action="#">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="roleName">Nama Role</label>
                        <input type="text" class="form-control" id="roleName" name="roleName" readonly>
                    </div>
                    <div class="form-group">
                        <label for="roleDescription">Deskripsi Role</label>
                        <input type="text" class="form-control" id="roleDescription" name="roleDescription" placeholder="Deskripsi role">
                    </div>
                    <div class="form-group">
                        <label>Akses yang diberikan:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="read" id="accessRead" name="access[]">
                            <label class="form-check-label" for="accessRead">
                                Read (Baca)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="write" id="accessWrite" name="access[]">
                            <label class="form-check-label" for="accessWrite">
                                Write (Tulis)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="delete" id="accessDelete" name="access[]">
                            <label class="form-check-label" for="accessDelete">
                                Delete (Hapus)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="edit" id="accessEdit" name="access[]">
                            <label class="form-check-label" for="accessEdit">
                                Edit (Sunting)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $('#roleEditModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var role = button.data('role'); // Extract info from data-* attributes

        var modal = $(this);
        modal.find('.modal-title').text('Sunting Role: ' + role);
        modal.find('#roleName').val(role);
    });

    $('#editRoleForm').submit(function(e) {
        e.preventDefault();

        // Here you would typically send the data using AJAX, for example:
        // $.ajax({...});

        alert('Form submitted for role: ' + $('#roleName').val());
        $('#roleEditModal').modal('hide');
    });
</script>
@endsection