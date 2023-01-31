@extends('admin.layouts.admin')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Forms</h4>
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
                <a href="#">Forms</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Basic Form</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('karyawan.store')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Isi Data Karyawan</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email2">NIK</label>
                            <input type="number" name="nik" class="form-control" id="email2" placeholder="Enter NIK">
                            <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="password">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="password">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="password">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Nama">
                        </div>
                        <div class="form-check">
                            <label>Jenis Kelamin</label><br/>
                            <label class="form-radio-label">
                                <input class="form-radio-input" type="radio" name="jenis_kelamin" value="laki-laki"  checked="">
                                <span class="form-radio-sign">Laki-laki</span>
                            </label>
                            <label class="form-radio-label ml-3">
                                <input class="form-radio-input" type="radio" name="jenis_kelamin" value="perempuan">
                                <span class="form-radio-sign">Perempuan</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Agama</label>
                            <select class="form-control" id="gol" name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Budha">Budha</option>
                                <option value="None">None</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Golongan</label>
                            <select class="form-control" id="gol" name="golongan">
                                <option value="1">Golongan 1</option>
                                <option value="2">Golongan 2</option>
                                <option value="3">Golongan 3</option>
                                <option value="4">Golongan 4</option>
                                <option value="5">Golongan 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <button class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection