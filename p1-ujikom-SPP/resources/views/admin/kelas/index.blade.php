@extends('layouts.backend.app')
@section('title', 'Data Kelas')
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
    <h1 class="h3 mb-5 text-gray-800">Data Kelas</h1>
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            @can('create-kelas')
                <a href="javascript:void(0)" class="btn btn-primary"
                data-toggle="modal" data-target="#createModal">
                    Tambah Kelas
                </a>
            @endcan
        </div>
        <div class="card-body">
            <table id="dataTable2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kelas</th>
                  <th>Kompetensi Keahlian</th>
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
                <label for="nama_kelas_create">Nama Kelas:</label>
                <input required type="" name="nama_kelas" id="nama_kelas_create" class="form-control">
                </div>
                <div class="form-group">
                <label for="kompetensi_keahlian_create">Komptensi Keahlian:</label>
                <input required type="" name="kompetensi_keahlian" id="kompetensi_keahlian_create" class="form-control">
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
                <label for="nama_kelas_edit">Nama Kelas:</label>
                <input required type="hidden" readonly="" name="id" id="id_edit" class="form-control">
                <input type="" name="nama_kelas" id="nama_kelas_edit" class="form-control">
                </div>
                <div class="form-group">
                <label for="kompetensi_keahlian_edit">Komptensi Keahlian:</label>
                <input type="" name="kompetensi_keahlian" id="kompetensi_keahlian_edit" class="form-control">
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
  @include('admin.kelas.ajax')
  @endpush
