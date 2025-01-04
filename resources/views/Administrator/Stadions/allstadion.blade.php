@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Detail Data Stadion</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Tempat Pertandingan</li>
        <li class="breadcrumb-item"><a href="{{ route('Stadion') }}"></a>Stadion</li>
        <li class="breadcrumb-item active">Detail Data Stadion</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('allStadion', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="id" class="form-label">ID Stadion</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ $data->id }}" readonly>
          </div>
          <div class="col-12">
            <label for="nama_stadion" class="form-label">Nama Stadion</label>
            <input type="text" class="form-control" id="nama_stadion" name="nama_stadion" value="{{ $data->nama_stadion }}" readonly>
          </div>
          <div class="col-12">
            <label for="lokasi_stadion" class="form-label">Lokasi Stadion</label>
            <input type="text" class="form-control" id="lokasi_stadion" name="lokasi_stadion" value="{{ $data->lokasi_stadion }}" readonly>
          </div>
          <div class="col-12">
            <label for="kapasitas_stadion" class="form-label">Kapasitas Stadion</label>
            <input type="number" class="form-control" id="kapasitas_stadion" name="kapasitas_stadion" value="{{ $data->kapasitas_stadion }}" readonly>
          </div>
        </form>
      </div>
    </div>
@endsection