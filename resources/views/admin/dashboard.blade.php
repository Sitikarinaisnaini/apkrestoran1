@extends('layouts.admin')

@section('content')

<section class="content">
<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$pegawai}}</h3>

                <p>Pegawai</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-user"></i>
              </div>
              <a href="{{url('/pegawai')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$pelanggan}}<sup style="font-size: 20px"></sup></h3>

                <p>Pelanggan</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-user"></i>
              </div>
              <a href="{{url('/pelanggan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$menu}}</h3>

                <p>Menu</p>
              </div>
              <div class="icon">
                <i  class="nav-icon fas fa-utensils"></i>
              </div>
              <a href="{{url('/menu')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$reservation}}</h3>

                <p>Reservasi</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-laptop"></i>
              </div>
              <a href="{{url('/reservation')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Laporan</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
@push('script')
<script>
    $(document).ready(function() {

    
var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','August','September','October','November','Desember'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [0,0,0,0,0,0,0,0,0,0,0,0]
        },
      
      ]
    }
     let reservation = @json($groupReservation);
      Object.keys(reservation).map((val,i) => {
        let index = areaChartData.labels.indexOf(val);
        areaChartData.datasets[0].data[index] = reservation[val].length;
      })

    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, areaChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
  </script>
@endpush
</section>

@endsection

