@extends('admin.layouts.admin')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">DataTables.Net</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Tables</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Datatables</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Jumlah Potongan</th>
                                    <th>Jumlah Lembur</th>
                                    <th>Jumlah Gaji</th>
                                    <th>Total</th>
                                    <th>Dibuat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gaji as $item)    
                                    <tr>
                                        <td>{{$item->tanggal}}</td>
                                        <td>{{$item->karyawan->nama}}</td>
                                        <td>{{$item->potongan}}</td>
                                        <td>{{$item->jumlah_lembur}}</td>
                                        <td>{{$item->jumlah_gaji}}</td>
                                        <td>{{$item->total_terima}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td><button class="btn btn-sm btn-primary">Detail</button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('add-scripts')
    <!-- Datatables -->
	<script src="{{url('theme-padang/assets/js/plugin/datatables/datatables.min.js')}}"></script>
    <script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});
		});
	</script>
@endpush