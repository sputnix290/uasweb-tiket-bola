@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Tiket Sepak Bola</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Tiket</li>
        <li class="breadcrumb-item"><a href="{{ route('TiketSepakBola') }}"></a>Tiket Sepak Bola</li>
        <li class="breadcrumb-item active">Ubah Data Tiket Sepak Bola</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updateTiketSepakBola', $data->id) }}" method="POST">
        @csrf
        <div class="col-12">
          <label for="id_jadwal_sepak_bola" class="form-label">ID Jadwal Sepak Bola</label>
          <select id="id_jadwal_sepak_bola" class="form-control" name="id_jadwal_sepak_bola" required>
              <option value="">-- Select --</option>
              @foreach ($data_jadwalsepakbola as $row) 
                <option value="{{ $row->id }}" {{ $row->id == $data->id_jadwal_sepak_bola ? 'selected' : '' }}>{{ $row->id }}
              @endforeach
          </select>
        </div>
        <div class="col-12">
          <label for="kategori_tiket" class="form-label">Kategori Tiket</label>
            <select class="form-select" id="kategori_tiket" name="kategori_tiket" value="{{ $data->kategori_tiket }}" required>
              <option value="Ekonomi">Ekonomi</option>
              <option value="VIP">VIP</option>
              <option value="VVIP">VVIP</option>
          </select>
        </div>
          <div class="col-12">
            <label for="harga_tiket" class="form-label">Waktu Mulai</label>
            <input type="number" class="form-control" id="harga_tiket" name="harga_tiket" value="{{ $data->harga_tiket }}" required>
          </div>
            <div class="text-center">
              <button type="submit" class="btn btn-success float-left" style="width: 20%;">Update</button>
              <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
            </div>
        </form>
      </div>
    </div>
@endsection