@extends('Layouts.template') @section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <div class="d-flex align-items-center">
                      <div class="ps-3">
                        <h5> Welcome {{ session('jabatan') }}! </h5>
                      </div>
                    </div>
  
                  </div>
                </div>
  
              </div><!-- End Customers Card -->

            <!-- Admin Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
  
                  <div class="card-body" style="align-self: center;">
                    <h5 class="card-title">Admin <span> | For Now </span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-user-gear"></i>
                      </div>
                      <div class="ps-3">
                        <h6 style="text-align: center">{{ $data_admin }}</h6>
                        <a href="{{ route('Admin') }}" class="small-box-footer" style="text-align: center">More info</a>
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Admin Card -->

            <!-- Pengguna Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body" style="align-self: center;">
                  <h5 class="card-title">Pengguna <span> | For Now </span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="ps-3">
                      <h6 style="text-align: center">{{ $data_pengguna }}</h6>
                      <a href="{{ route('Pengguna') }}" class="small-box-footer" style="text-align: center">More info</a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengguna Card -->

            <!-- Tiket Sepak Bola Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card customers-card">
                <div class="card-body" style="align-self: center">
                  <h5 class="card-title">Tiket Sepak Bola<span> | For Now </span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa fa-ticket"></i>
                    </div>
                    <div class="ps-3">
                      <h6 style="text-align: center">{{ $data_tiketsepakbola }}</h6>
                      <a href="{{ route('TiketSepakBola') }}" class="small-box-footer" style="text-align: center">More info</a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Tiket Sepak Bola Card -->

            <!-- Tiket Futsal Card -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card customers-card">
  
                  <div class="card-body" style="align-self: center;">
                    <h5 class="card-title">Tiket Futsal<span> | For Now </span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fa fa-ticket"></i>
                      </div>
                      <div class="ps-3">
                        <h6 style="text-align: center">{{ $data_tiketfutsal }}</h6>
                        <a href="{{ route('TiketFutsal') }}" class="small-box-footer" style="text-align: center">More info</a>
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Tiket Futsal Card -->  

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">
          <!-- Data Diagram -->
          <div class="card">
            <div class="card-body pb-0">
              <h5 class="card-title">Data Diagram <span> | For Now </span></h5>
              <div class="activity"></div>
              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Data',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: {{ $data_timhome }},
                          name: 'Tim Home'
                        },
                        {
                          value: {{ $data_timaway }},
                          name: 'Tim Away'
                        },
                        {
                          value: {{ $data_stadion }},
                          name: 'Stadion'
                        },
                        {
                          value: {{ $data_gor }},
                          name: 'Gor'
                        },
                        {
                          value: {{ $data_kompetisi }},
                          name: 'Kompetisi'
                        }
                      ]
                    }]
                  });
                });
              </script>
            </div>
          </div><!-- End Data Diagram -->

        </div><!-- End Right side columns -->

      </div>
    </section>

@endsection