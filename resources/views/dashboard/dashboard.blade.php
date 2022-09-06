@extends('layouts.master')

@section('title')
    Dashboard
@endsection


@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Dashboard v1</li>
@endsection


@section('content')
<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-default border border-primary">
              <div class="inner">
               
                <h3><sup style="font-size: 20px">{{ $kubik }}</sup></h3>
               
                <p>Nama Pelanggan 1<br>Alamat<br>GOL</p>Meter Kini : 2223<br>Meter Lalu : 2209
              </div>
              <div class="icon">
                <i class="ion ion-ios-speedometer">m3</i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3><sup style="font-size: 20px">3000</sup></h3>


                <p>Nama Pelanggan 2<br>Alamat<br>GOL</p>Meter Kini : 2223<br>Meter Lalu : 2209
              </div>
              <div class="icon">
                <i class="ion ion-ios-speedometer">m3</i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><sup style="font-size: 20px">3000</sup></h3>


                <p>Nama Pelanggan 3<br>Alamat<br>GOL</p>Meter Kini : 2223<br>Meter Lalu : 2209
              </div>
              <div class="icon">
                <i class="ion ion-ios-speedometer">m3</i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3><sup style="font-size: 20px">3000</sup></h3>


                <p>Nama Pelanggan 4<br>Alamat<br>GOL</p>Meter Kini : 2223<br>Meter Lalu : 2209
              </div>
              <div class="icon">
                <i class="ion ion-ios-speedometer">m3</i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Sales
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
           
            <!--/.direct-chat -->

            <!-- TO DO List -->
            
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div>
@endsection

@push('scripts')
<script>
  $(function(){
    $('body').addClass('sidebar-collapse');


  });
</script>
@endpush