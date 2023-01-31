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
        <div class="col-md-4 mb-4">
            <a href="{{route('karyawan.create')}}" class="btn btn-primary">+ Tambah</a>
        </div>
        <div class="col-md-12">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Umur</th>
                                    <th>Dibuat</th>
                                    <th>Golongan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($karyawan as $item)    
                                    <tr>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->jenis_kelamin}}</td>
                                        <td>{{$item->tanggal_lahir}}</td>
                                        <td>{{$item->tanggal_lahir}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->golongan_id}}</td>
                                        <td><button class="btn btn-sm btn-primary">Edit</button></td>
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