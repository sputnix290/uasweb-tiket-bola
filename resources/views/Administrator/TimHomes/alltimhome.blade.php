@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Detail Data Tim Home</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Tim</li>
        <li class="breadcrumb-item"><a href="{{ route('TimHome') }}"></a>Tim Home</li>
        <li class="breadcrumb-item active">Detail Data Tim Home</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('allTimHome', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="id" class="form-label">ID Tim Home</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ $data->id }}" readonly>
          </div>
          <div class="col-12">
            <label for="nama_tim_home" class="form-label">Nama Tim Home</label>
            <input type="text" class="form-control" id="nama_tim_home" name="nama_tim_home" value="{{ $data->nama_tim_home }}" readonly>
          </div>
        </form>
      </div>
    </div>
@endsection