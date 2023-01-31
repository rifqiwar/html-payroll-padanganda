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
            <form action="{{route('gaji.store')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Isi Data Gaji Karyawan</div>
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
                            <label for="email2">Jumlah Gaji (Pokok)</label>
                            <input type="number" name="jumlah_gaji" class="form-control" id="jumlah_gaji" placeholder="Gaji pokok">
                        </div>
                        <div class="form-group">
                            <label for="password">Lembur</label>
                            <input type="number" name="jumlah_lembur" class="form-control" id="jumlah_lembur" placeholder="Lembur">
                        </div>
                        <div class="form-group">
                            <label for="password">Potongan</label>
                            <input type="number" name="potongan" class="form-control" id="potongan" placeholder="Potongan">
                            <br>
                            Jika tidak ada harap di isi 0
                        </div>
                        <div class="form-group">
                            <label for="password">Total</label>
                            <input type="number" name="total_terima" class="form-control" id="total_terima" readonly>
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
        
        $("#jumlah_gaji,#jumlah_lembur,#potongan").on("keyup", function(){
                var gaji = $("#jumlah_gaji").val();
                var lembur = $("#jumlah_lembur").val();
                var potongan = $("#potongan").val();
                var total_terima = parseInt(gaji)+parseInt(lembur)-parseInt(potongan);
                $("#total_terima").val(total_terima);
            });
    });

    function hitungTotalGaji() {
        var gaji = $("#jumlah_gaji").val();
        var lembur = $("#jumlah_lembur").val();
        var potongan = $("#potongan").val();
        var total_terima = parseInt(gaji)+parseInt(lembur)-parseInt(potongan);
        $("#total_terima").val(total_terima);
    }
</script>
@endpush