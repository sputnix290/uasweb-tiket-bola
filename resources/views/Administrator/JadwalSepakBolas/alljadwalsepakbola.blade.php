@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Detail Data Jadwal Sepak Bola</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Jadwal</li>
        <li class="breadcrumb-item"><a href="{{ route('JadwalSepakBola') }}"></a>Jadwal Sepak Bola</li>
        <li class="breadcrumb-item active">Detail Data Jadwal Sepak Bola</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('allJadwalSepakBola', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="id" class="form-label">ID Jadwal Sepak Bola</label>
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
            <label for="id_stadion" class="form-label">Stadion</label>
            <input type="text" class="form-control" id="id_stadion" name="id_stadion" value="{{ $data->stadion->nama_stadion }}" readonly>
          </div>
        </form>
      </div>
    </div>
@endsection