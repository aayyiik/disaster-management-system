@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data User</h4>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                Tambah
            </button><br><br>
            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>status aktif</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $u)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->is_admin }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="basicModal" tabindex="-1" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Tambah Pengguna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="custom-validation" action="#" novalidate="">
                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" required="" placeholder="Masukkan nama">
                        </div>
                        <div class="mb-3">
                            <label for="email">E-Mail</label>
                            <input type="email" class="form-control" id="email" required="" parsley-type="email" placeholder="Masukkan alamat email">
                        </div>
                        <div class="mb-3">
                            <label for="role">Role</label>
                            <select class="form-control select2" id="role">
                                <option value="1">Administrator</option>
                                <option value="2">Petugas</option>
                                <option value="3">Warga</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="role">Admin?</label>
                            <select class="form-control select2" id="role">
                                <option value="1">Administrator</option>
                                <option value="2">Petugas</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="role">Status</label>
                            <select class="form-control select2" id="role">
                                <option value="1">Administrator</option>
                                <option value="2">Petugas</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    
@endsection
