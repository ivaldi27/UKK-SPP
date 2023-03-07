@extends('layouts.backend.app')
@section('title', 'Data Petugas')
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
    <h1 class="h3 mb-5 text-gray-800">Data Petugas</h1>
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="javascript:void(0)" class="btn btn-primary"
            data-toggle="modal" data-target="#createModal">
                Tambah Petugas
            </a>
        </div>
        <div class="card-body">
            <table id="dataTable2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Petugas</th>
                  <th>Jenis Kelamin</th>
                  <th>Kode Petugas</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
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
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin:</label>
              <select required="" name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                  <option disabled="" selected="">- PILIH JENIS KELAMIN -</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
              </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save fa-fw"></i>
            SIMPAN
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
          <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
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
              <input required="" readonly="" type="hidden" name="id" id="id_edit" class="form-control">
              <input required="" type="text" name="nama_petugas" id="nama_petugas_edit" class="form-control">
            </div>
            <div class="form-group">
              <label for="jenis_kelamin_edit">Jenis Kelamin:</label>
              <select required="" name="jenis_kelamin" id="jenis_kelamin_edit" class="form-control">
                  <option disabled="" selected="">- PILIH JENIS KELAMIN -</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
              </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save fa-fw"></i>
            UPDATE
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
    @include('admin.petugas.ajax')
  @endpush
