@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Tim Away</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Tim</li>
        <li class="breadcrumb-item"><a href="{{ route('TimAway') }}"></a>Tim Away</li>
        <li class="breadcrumb-item active">Ubah Data Tim Away</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updateTimAway', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="nama_tim_away" class="form-label">Nama Tim Away</label>
            <input type="text" class="form-control" id="nama_tim_away" name="nama_tim_away" value="{{ $data->nama_tim_away }}" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success float-left" style="width: 20%;">Update</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection