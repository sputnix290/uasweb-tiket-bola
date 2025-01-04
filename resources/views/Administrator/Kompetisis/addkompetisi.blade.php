@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Kompetisi</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Kompetisi</li>
        <li class="breadcrumb-item"><a href="{{ route('Kompetisi') }}"></a>Data Kompetisi</li>
        <li class="breadcrumb-item active">Tambah Data Kompetisi</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertKompetisi') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="nama_kompetisi" class="form-label">Nama Kompetisi</label>
            <input type="text" class="form-control" id="nama_kompetisi" name="nama_kompetisi" required>
          </div>
          <div class="col-12">
            <label for="tipe_kompetisi" class="form-label">Tipe Kompetisi</label>
            <input type="text" class="form-control" id="tipe_kompetisi" name="tipe_kompetisi" required>
          </div>
          <div class="col-12">
            <label for="musim_kompetisi" class="form-label">Musim Kompetisi</label>
            <input type="text" class="form-control" id="musim_kompetisi" name="musim_kompetisi" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection