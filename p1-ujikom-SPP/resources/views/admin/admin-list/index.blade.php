@extends('layouts.backend.app')
@section('title', 'Data Siswa')
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<!-- Sweetalert 2 -->
<link rel="stylesheet" type="text/css" href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/sweetalert2/sweetalert2.min.css">
@endpush
@section('content')
<x-alert></x-alert>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Data Admin</h1>
    <div class="col-xl-3 col-md-6 mb-3" >
        <div class="card border-left-danger shadow h-100 py-2"  style="width: 600px;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <h5>Pemberitahuan!</h5>
                        <p>Admin adalah petugas yang memiliki akses penuh aplikasi, mengakses <br>
                        data admin sama dengan mengakses data petugas yang bersangkutan</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="javascript:void(0)" class="btn btn-primary"
            data-toggle="modal" data-target="#createModal">
                Tambah Admin
            </a>
        </div>
        <div class="card-body">
            <table id="dataTable2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama Petugas</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                </tbody>
              </table>
        </div>
    </div>

</div>
<!-- /.row -->

    <!-- Create Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createModalLabel">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="store">
        <div class="modal-body">
            <div class="alert alert-danger print-error-msg" style="display: none;">
              <ul></ul>
            </div>
            <div class="form-group">
              <label for="username">Username:</label>
              <input required="" type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
              <label for="nama_petugas">Nama Petugas:</label>
              <input required="" type="text" name="nama_petugas" id="nama_petugas" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save fa-fw"></i> SIMPAN
          </button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Create Modal -->

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="update">
        <div class="modal-body">
            <div class="alert alert-danger print-error-msg" style="display: none;">
              <ul></ul>
            </div>
            <div class="form-group">
              <label for="nama_petugas_edit">Nama Petugas:</label>
              <input required="" type="hidden" readonly="" name="id" id="id_edit" class="form-control">
              <input required="" type="text" name="nama_petugas" id="nama_petugas_edit" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save fa-fw"></i> UPDATE
          </button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit Modal -->

  @stop

  @push('js')
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- Sweetalert 2 -->
  <script type="text/javascript" src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
  @include('admin.admin-list.ajax')
  @endpush
