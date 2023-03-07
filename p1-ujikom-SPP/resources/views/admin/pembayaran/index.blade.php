@extends('layouts.backend.app')
@section('title', 'Data Pembayaran')
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
        <h1 class="h3 mb-5 text-gray-800">Data Pembayaran</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('pembayaran.index') }}" class="btn btn-primary">Tambah Pembayaran</a>
            </div>
            <div class="card-body">
                <table id="dataTable2" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Nisn</th>
                    <th>Tanggal Bayar</th>
                    <th>Nama Petugas</th>
                    <th>Untuk Bulan</th>
                    <th>Untuk Tahun</th>
                    <th>Nominal</th>
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

  @stop

  @push('js')
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- Sweetalert 2 -->
  <script type="text/javascript" src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/sweetalert2/sweetalert2.min.js"></script>

  <script>
    $(function () {

     var table = $("#dataTable2").DataTable({
         processing: true,
         serverSide: true,
         "responsive": true,
         ajax: "{{ route('pembayaran-spp.index') }}",
         columns: [
             {data: 'DT_RowIndex' , name: 'id'},
             {data: 'siswa.nama_siswa', name: 'siswa.nama_siswa'},
             {data: 'siswa.kelas.nama_kelas', name: 'siswa.kelas.nama_kelas'},
             {data: 'nisn', name: 'nisn'},
             {data: 'tanggal_bayar', name: 'tanggal_bayar'},
             {data: 'petugas.nama_petugas', name: 'petugas.nama_petugas'},
             {data: 'bulan_bayar', name: 'bulan_bayar'},
             {data: 'tahun_bayar', name: 'tahun_bayar'},
             {data: 'jumlah_bayar', name: 'jumlah_bayar'},
             {data: 'action', name: 'action', orderable: false, searchable: true},
         ]
     });

   });

   // delete
   $("body").on('click', '.btn-delete', function() {
     var id = $(this).attr("id")

     Swal.fire({
       title: 'Yakin hapus data ini?',
       // text: "You won't be able to revert",
       icon: "warning",
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
       confirmButtonText: 'Hapus'
     }).then((result) => {
       if (result.isConfirmed) {
         $.ajax({
           url: "/admin/pembayaran-spp/"+id,
           method: "DELETE",
           success: function(response) {
             $('#dataTable2').DataTable().ajax.reload()
             Swal.fire(
               '',
               response.message,
               'success'
             )
           }
         })
       }
     })
   })
   </script>
   @endpush
