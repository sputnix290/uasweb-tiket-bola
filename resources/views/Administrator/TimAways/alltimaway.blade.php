@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Detail Data Tim Away</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Tim</li>
        <li class="breadcrumb-item"><a href="{{ route('TimAway') }}"></a>Tim Away</li>
        <li class="breadcrumb-item active">Detail Data Tim Away</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('allTimAway', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="id" class="form-label">ID Tim Away</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ $data->id }}" readonly>
          </div>
          <div class="col-12">
            <label for="nama_tim_away" class="form-label">Nama Tim Away</label>
            <input type="text" class="form-control" id="nama_tim_away" name="nama_tim_away" value="{{ $data->nama_tim_away }}" readonly>
          </div>
        </form>
      </div>
    </div>
@endsection