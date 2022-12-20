@extends('layouts.master')
@section('content')


<section class="section">
    <div class="section-header">
        <h1>Data Laptop</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Data Laptop PPLG</div>
        </div>
    </div>
    <div class="section-body">
        <h3 class="section-title">Daftar Laptop<a href="{{route('createDataLaptop')}}" title="Tambah Data"
                style="float: right; margin-right: 2%" class="btn btn-primary mr-1">Tambah Data</a></h3>
        <table id="data-admin" class="table table-striped table-bordered table-md"
            style="width: 100%; margin-top:5%; padding:2%;" cellspacing="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Laptop</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;?>
                @foreach($data as $dt)

                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$dt->no_laptop}}</td>
                    <td>
                    
                    <a href="{{ route('deleteLaptopData', ['id' => $dt->id]) }}" class="btn btn-danger mr-1">Hapus Data</i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
<script src="../../assets/admin/dataTables/js/jquery.dataTables.min.js"></script>
<script src="../../assets/admin/dataTables/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#data-admin').DataTable({
            "iDisplayLength": 25
        });
    });

</script>


@endsection
