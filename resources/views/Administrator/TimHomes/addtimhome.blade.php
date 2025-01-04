@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Tim Home</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Tim</li>
        <li class="breadcrumb-item"><a href="{{ route('TimHome') }}"></a>Data Tim Home</li>
        <li class="breadcrumb-item active">Tambah Data Tim Home</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertTimHome') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="nama_tim_home" class="form-label">Nama Tim Home</label>
            <input type="text" class="form-control" id="nama_tim_home" name="nama_tim_home" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection