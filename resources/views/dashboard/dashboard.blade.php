@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('cjs/jquery-3.4.0.min.js') }}"></script>
<script type="text/javascript"src="{{ asset('cjs/jquery-latest.js') }}"></script>
@endpush
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('cjs/bootstrap.min.css') }}">
@endpush

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Dashboard v1</li>
@endsection


@section('content')
<div class="container-fluid">
<!-- Small boxes (Stat box) -->
        <div class="card row">
        <section class=" col-lg-6 connectedSortable">
        <p>Laravel 9 ChartJS Chart Example - ItSolutionStuff.com</p>
          <canvas id="myChart" height="100px"></canvas>

        </section>
        

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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
  
<script type="text/javascript">
			//baca ID canvas tempat grafik akan diletakkan
			var canvas = document.getElementById('myChart');
			// letakkan data tanggal dan suhu untuk grafik
			var data = {
				labels : [
					<?php 
          foreach ($tanggal as $tgl) 
                {
               
                   
                    echo '"'.$tgl->created_at.'",' ;
                } ?>
				],
				datasets : [{
					label : "Kubikasi",
					data : [
						<?php 
            foreach ($vol as $lit) {

             
              echo $lit->kubikasi.',' ;
 
          } ?>
					]
				}]

			} ;


			//option grafik
			var option = {
				showLines : true,
				animation : {duration : 0}
			} ;

			//cetak grafik kedalam canvas
			var myLineChart = Chart.Line(canvas, {
				data : data,
				option : option
			}) ;


		</script>

<script>
  $(function(){
    $('body').addClass('sidebar-collapse');


  });


</script>

@endpush