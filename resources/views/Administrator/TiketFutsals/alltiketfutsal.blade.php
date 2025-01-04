@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Detail Data Tiket Futsal</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Tiket</li>
        <li class="breadcrumb-item"><a href="{{ route('TiketFutsal') }}"></a>Tiket Futsal</li>
        <li class="breadcrumb-item active">Detail Data Tiket Futsal</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('allTiketFutsal', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="id" class="form-label">ID Tiket Futsal</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ $data->id }}" readonly>
          </div>
          <div class="col-12">
            <label for="id_jadwal_futsal" class="form-label">ID Jadwal Futsal</label>
            <input type="text" class="form-control" id="id_jadwal_futsal" name="id_jadwal_futsal" value="{{ $data->id_jadwal_futsal }}" readonly>
          </div>
          <div class="col-12">
            <label for="kategori_tiket" class="form-label">Kategori Tiket</label>
            <input type="" class="form-control" id="kategori_tiket" name="kategori_tiket" value="{{ $data->kategori_tiket }}" readonly>
          </div>
          <div class="col-12">
            <label for="harga_tiket" class="form-label">Harga Tiket</label>
            <input type="number" class="form-control" id="harga_tiket" name="harga_tiket" value="{{ $data->harga_tiket }}" readonly>
          </div>
        </form>
      </div>
    </div>
@endsection