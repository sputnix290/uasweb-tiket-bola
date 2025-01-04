@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Stadion</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Tempat Pertandingan</li>
        <li class="breadcrumb-item"><a href="{{ route('Stadion') }}"></a>Data Stadion</li>
        <li class="breadcrumb-item active">Tambah Data Stadion</li>
      </ol>
    </nav>
</div><!-- End Page Title -->
{{-- Alert Success Delete --}}
@if (session()->has('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('danger') }}
</div>
@endif
<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertStadion') }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="nama_stadion" class="form-label">Nama Stadion</label>
            <input type="text" class="form-control" id="nama_stadion" name="nama_stadion" required>
            @error('nama_stadion')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-12">
            <label for="lokasi_stadion" class="form-label">Lokasi Stadion</label>
            <input type="text" class="form-control" id="lokasi_stadion" name="lokasi_stadion" required>
          </div>
          <div class="col-12">
            <label for="kapasitas_stadion" class="form-label">Kapasitas Stadion</label>
            <input type="number" class="form-control" id="kapasitas_stadion" name="kapasitas_stadion" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection