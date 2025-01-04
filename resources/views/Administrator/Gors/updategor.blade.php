@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Gor</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Tempat Pertandingan</li>
        <li class="breadcrumb-item"><a href="{{ route('Gor') }}"></a>Gor</li>
        <li class="breadcrumb-item active">Ubah Data Gor</li>
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
        <form class="row g-3" action="{{ route('updateGor', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="nama_gor" class="form-label">Nama Gor</label>
            <input type="text" class="form-control" id="nama_gor" name="nama_gor" value="{{ $data->nama_gor }}" required>
            @error('nama_gor')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-12">
            <label for="lokasi_gor" class="form-label">Lokasi Gor</label>
            <input type="text" class="form-control" id="lokasi_gor" name="lokasi_gor" value="{{ $data->lokasi_gor }}" required>
          </div>
          <div class="col-12">
            <label for="kapasitas_gor" class="form-label">Kapasitas Gor</label>
            <input type="number" class="form-control" id="kapasitas_gor" name="kapasitas_gor" value="{{ $data->kapasitas_gor }}" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success float-left" style="width: 20%;">Update</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection