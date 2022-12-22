@extends('layouts.master')

@section('content');
  <section class="section">
    <div class="section-header">
      <h1>Edit Account Laboran</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('peminjaman') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Edit Accountn</a></div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Edit Account</h2>
      <p class="section-lead"></p>
      <br>
      <form method="POST" action="{{route('updateLaboranData', $data->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                    <h4>Form Laboran</h4>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-start">
                            <div class="col-sm-12">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="name" value="{{$data->name}}" >
                            </div>
                        </div>
                        <br>
                        <div class="row align-items-start">
                            <div class="col-sm-6">
                                <label>email</label>
                                <input type="email" class="form-control" name="email" value="{{$data->email}}">
                            </div>

                            <div class="col-sm-6">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <input type="hidden" name="is_admin" value="0">
                        <br>
                        <div class="row align-items-start">

                            <div class="col-sm-8"></div>
                            <div class="col-sm-4">
                                <input type="submit" value="Simpan" class="btn btn-block btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
  </section>
@endsection
