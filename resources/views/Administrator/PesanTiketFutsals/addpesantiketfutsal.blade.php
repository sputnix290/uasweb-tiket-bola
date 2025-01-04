@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Pesan Tiket Futsal</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pesan Tiket</li>
        <li class="breadcrumb-item"><a href="{{ route('PesanTiketFutsal') }}"></a>Data Pesan Tiket Futsal</li>
        <li class="breadcrumb-item active">Tambah Data Pesan Tiket Futsal</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertPesanTiketFutsal') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="id_tiket_futsal" class="form-label">ID Tiket Futsal</label>
              <select id="id_tiket_futsal" class="form-control" name="id_tiket_futsal" required>
                <option value="">-- Select --</option>
                  @foreach ($data_tiketfutsal as $row)
                    <option value="{{ $row->id }}">{{ $row->id }}</option>
                  @endforeach
              </select>
        </div>
        <div class="col-12">
          <label for="id_pengguna" class="form-label">Nama Pengguna</label>
            <select id="id_pengguna" class="form-control" name="id_pengguna" required>
              <option value="">-- Select --</option>
                @foreach ($data_pengguna as $row)
                  <option value="{{ $row->id }}">{{ $row->nama_pengguna }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
          <label for="tanggal_pesan" class="form-label">Tanggal Pesan</label>
          <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" required>
        </div>
          <div class="col-12">
            <label for="jumlah_pesan" class="form-label">Jumlah Pesan</label>
            <input type="number" class="form-control" id="jumlah_pesan" name="jumlah_pesan" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection