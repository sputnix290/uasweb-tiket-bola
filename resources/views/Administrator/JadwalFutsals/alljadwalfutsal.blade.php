@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Detail Data Jadwal Futsal</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Jadwal</li>
        <li class="breadcrumb-item"><a href="{{ route('JadwalFutsal') }}"></a>Jadwal Futsal</li>
        <li class="breadcrumb-item active">Detail Data Jadwal Futsal</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('allJadwalFutsal', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="id" class="form-label">ID Jadwal Futsal</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ $data->id }}" readonly>
          </div>
          <div class="col-12">
            <label for="id_tim_home" class="form-label">Tim Home</label>
            <input type="text" class="form-control" id="id_tim_home" name="id_tim_home" value="{{ $data->tim_home->nama_tim_home }}" readonly>
          </div>
          <div class="col-12">
            <label for="id_tim_away" class="form-label">Tim Away</label>
            <input type="text" class="form-control" id="id_tim_away" name="id_tim_away" value="{{ $data->tim_away->nama_tim_away }}" readonly>
          </div>
          <div class="col-12">
            <label for="id_kompetisi" class="form-label">Kompetisi</label>
            <input type="text" class="form-control" id="id_kompetisi" name="id_kompetisi" value="{{ $data->kompetisi->nama_kompetisi }}" readonly>
          </div>
          <div class="col-12">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $data->tanggal }}" readonly>
          </div>
          <div class="col-12">
            <label for="waktu_mulai" class="form-label">Waktu Mulai</label>
            <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai" value="{{ $data->waktu_mulai }}" readonly>
          </div>
          <div class="col-12">
            <label for="id_gor" class="form-label">Gor</label>
            <input type="text" class="form-control" id="id_gor" name="id_gor" value="{{ $data->gor->nama_gor }}" readonly>
          </div>
        </form>
      </div>
    </div>
@endsection