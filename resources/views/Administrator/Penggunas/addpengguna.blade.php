@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Pengguna</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pengguna</li>
        <li class="breadcrumb-item"><a href="{{ route('Pengguna') }}"></a>Data Pengguna</li>
        <li class="breadcrumb-item active">Tambah Data Pengguna</li>
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
        <form class="row g-3" action="{{ route('insertPengguna') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="nama_pengguna" class="form-label">Nama Pengguna</label>
            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" required>
          </div>
          <div class="col-12">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
            @error('username')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="col-12">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="col-12">
            <label for="no_telp" class="form-label">No Telepon</label>
            <input type="number" class="form-control" id="no_telp" name="no_telp" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection