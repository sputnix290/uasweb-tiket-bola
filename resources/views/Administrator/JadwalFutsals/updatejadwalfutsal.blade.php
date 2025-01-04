@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Jadwal Futsal</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Jadwal</li>
        <li class="breadcrumb-item"><a href="{{ route('JadwalFutsal') }}"></a>Jadwal Futsal</li>
        <li class="breadcrumb-item active">Ubah Data Jadwal Futsal</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updateJadwalFutsal', $data->id) }}" method="POST">
        @csrf
        <div class="col-12">
          <label for="id_tim_home" class="form-label">Nama Tim Home</label>
          <select id="id_tim_home" class="form-control" name="id_tim_home" required>
              <option value="">-- Select --</option>
              @foreach ($data_timhome as $row) 
                <option value="{{ $row->id }}" {{ $row->id == $data->id_tim_home ? 'selected' : '' }}>{{ $row->nama_tim_home }}
              @endforeach
          </select>
        </div>
        <div class="col-12">
          <label for="id_tim_away" class="form-label">Nama Tim Away</label>
            <select id="id_tim_away" class="form-control" name="id_tim_away" required>
              <option value="">-- Select --</option>
                @foreach ($data_timaway as $row)
                  <option value="{{ $row->id }}" {{ $row->id == $data->id_tim_away ? 'selected' : '' }}>{{ $row->nama_tim_away }}
                @endforeach
            </select>
        </div>
        <div class="col-12">
          <label for="id_kompetisi" class="form-label">Kompetisi</label>
            <select id="id_kompetisi" class="form-control" name="id_kompetisi" required>
              <option value="">-- Select --</option>
                @foreach ($data_kompetisi as $row)
                  <option value="{{ $row->id }}" {{ $row->id == $data->id_kompetisi ? 'selected' : '' }}>{{ $row->nama_kompetisi }}
                @endforeach
            </select>
        </div>
          <div class="col-12">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $data->tanggal }}" required>
          </div>
          <div class="col-12">
            <label for="waktu_mulai" class="form-label">Waktu Mulai</label>
            <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai" value="{{ $data->waktu_mulai }}" required>
          </div>
          <div class="col-12">
            <label for="id_gor" class="form-label">Gor</label>
              <select id="id_gor" class="form-control" name="id_gor" required>
                <option value="">-- Select --</option>
                  @foreach ($data_gor as $row)
                    <option value="{{ $row->id }}" {{ $row->id == $data->id_gor ? 'selected' : '' }}>{{ $row->nama_gor }}
                  @endforeach
              </select> 
          </div> 
            <div class="text-center">
              <button type="submit" class="btn btn-success float-left" style="width: 20%;">Update</button>
              <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
            </div>
        </form>
      </div>
    </div>
@endsection