@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Jadwal Sepak Bola</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Jadwal</li>
        <li class="breadcrumb-item"><a href="{{ route('JadwalSepakBola') }}"></a>Data Jadwal Sepak Bola</li>
        <li class="breadcrumb-item active">Tambah Data Jadwal Sepak Bola</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertJadwalSepakBola') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="id_tim_home" class="form-label">Nama Tim Home</label>
              <select id="id_tim_home" class="form-control" name="id_tim_home" required>
                <option value="">-- Select --</option>
                  @foreach ($data_timhome as $row)
                    <option value="{{ $row->id }}">{{ $row->nama_tim_home }}</option>
                  @endforeach
              </select>
        </div>
        <div class="col-12">
          <label for="id_tim_away" class="form-label">Nama Tim Away</label>
            <select id="id_tim_away" class="form-control" name="id_tim_away" required>
              <option value="">-- Select --</option>
                @foreach ($data_timaway as $row)
                  <option value="{{ $row->id }}">{{ $row->nama_tim_away }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
          <label for="id_kompetisi" class="form-label">Kompetisi</label>
            <select id="id_kompetisi" class="form-control" name="id_kompetisi" required>
              <option value="">-- Select --</option>
                @foreach ($data_kompetisi as $row)
                  <option value="{{ $row->id }}">{{ $row->nama_kompetisi }}</option>
                @endforeach
            </select>
        </div>
          <div class="col-12">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
          </div>
          <div class="col-12">
            <label for="waktu_mulai" class="form-label">Waktu Mulai</label>
            <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai" required>
          </div>
          <div class="col-12">
            <label for="id_stadion" class="form-label">Stadion</label>
              <select id="id_stadion" class="form-control" name="id_stadion" required>
                <option value="">-- Select --</option>
                  @foreach ($data_stadion as $row)
                    <option value="{{ $row->id }}">{{ $row->nama_stadion }}</option>
                  @endforeach
              </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection