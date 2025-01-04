@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Detail Data Pesan Tiket Futsal</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pesan Tiket</li>
        <li class="breadcrumb-item"><a href="{{ route('TiketFutsal') }}"></a>Pesan Tiket Futsal</li>
        <li class="breadcrumb-item active">Detail Data Pesan Tiket Futsal</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('allPesanTiketFutsal', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="id" class="form-label">ID Pesan Tiket Futsal</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ $data->id }}" readonly>
          </div>
          <div class="col-12">
            <label for="id_tiket_futsal" class="form-label">ID Tiket Futsal</label>
            <input type="text" class="form-control" id="id_tiket_futsal" name="id_tiket_futsal" value="{{ $data->id_tiket_futsal }}" readonly>
          </div>
          <div class="col-12">
            <label for="id_pengguna" class="form-label">Nama Pengguna</label>
            <input type="text" class="form-control" id="id_pengguna" name="id_pengguna" value="{{ $data->pengguna->nama_pengguna }}" readonly>
          </div>
          <div class="col-12">
            <label for="tanggal_pesan" class="form-label">Tanggal Pesan</label>
            <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" value="{{ $data->tanggal_pesan }}" readonly>
          </div>
          <div class="col-12">
            <label for="jumlah_pesan" class="form-label">Jumlah Pesan</label>
            <input type="number" class="form-control" id="jumlah_pesan" name="jumlah_pesan" value="{{ $data->jumlah_pesan }}" readonly>
          </div>
        </form>
      </div>
    </div>
@endsection