@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Detail Data Pengguna</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pengguna</li>
        <li class="breadcrumb-item"><a href="{{ route('Pengguna') }}"></a>Data Pengguna</li>
        <li class="breadcrumb-item active">Detail Data Pengguna</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('allPengguna', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="id" class="form-label">ID Pengguna</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ $data->id }}" readonly>
          </div>
          <div class="col-12">
            <label for="nama_pengguna" class="form-label">Nama Pengguna</label>
            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" value="{{ $data->nama_pengguna }}" readonly>
          </div>
          <div class="col-12">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $data->username }}" readonly>
          </div>
          <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}" readonly>
          </div>
          <div class="col-12">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ $data->password }}" readonly>
          </div>
          <div class="col-12">
            <label for="no_telp" class="form-label">No Telepon</label>
            <input type="number" class="form-control" id="no_telp" name="no_telp" value="{{ $data->no_telp }}" readonly>
          </div>
        </form>
      </div>
    </div>
@endsection