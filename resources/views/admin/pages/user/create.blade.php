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
            <form action="{{route('user.store')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Isi Data User untuk Karyawan</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Karyawan</label>
                            <select class="form-control select2" id="karyawan_id" name="karyawan_id">
                                @foreach ($karyawan as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email2">Username</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Konfirmasi Password">
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

@push('add-scripts')
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endpush