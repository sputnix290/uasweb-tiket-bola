@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Detail Data Gor</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Tempat Pertandingan</li>
        <li class="breadcrumb-item"><a href="{{ route('Gor') }}"></a>Gor</li>
        <li class="breadcrumb-item active">Detail Data Gor</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('allGor', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="id" class="form-label">ID Gor</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ $data->id }}" readonly>
          </div>
          <div class="col-12">
            <label for="nama_gor" class="form-label">Nama Gor</label>
            <input type="text" class="form-control" id="nama_gor" name="nama_gor" value="{{ $data->nama_gor }}" readonly>
          </div>
          <div class="col-12">
            <label for="lokasi_gor" class="form-label">Lokasi Gor</label>
            <input type="text" class="form-control" id="lokasi_gor" name="lokasi_gor" value="{{ $data->lokasi_gor }}" readonly>
          </div>
          <div class="col-12">
            <label for="kapasitas_gor" class="form-label">Kapasitas Gor</label>
            <input type="number" class="form-control" id="kapasitas_gor" name="kapasitas_gor" value="{{ $data->kapasitas_gor }}" readonly>
          </div>
        </form>
      </div>
    </div>
@endsection