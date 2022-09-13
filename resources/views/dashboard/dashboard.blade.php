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
<section class=" col-lg-12 connectedSortable">
        <div class="row">
        @foreach ($wm as $key => $item)
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary border border-primary">
              <div class="inner">
               
                <h3><sup style="font-size: 20px"></sup>3126862</h3>
                <p><strong> Nama  :</strong> {{ $item -> nama }}<br> <strong> Alamat :</strong> {{ $item -> alamat }}<br> <strong> GOL :</strong> {{ $item -> gol }}<br><H4>Meter : <strong> {{ round(($item -> kubikasi / 1000) + $item -> m_cutOff) }}</strong><br>Pakai : <strong> {{ round($item->kubikasi / 1000) }}</strong> m3 <br>Debit : <strong>{{ $item -> flow }}</strong> L/m</H4>
              </div>
              <div class="icon">
                <i class="ion ion-ios-speedometer">m3</i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          @endforeach
         
          <div class="col-lg-8 ">
            <!-- small box -->
            <div class="card col-lg-12 col-12 border border-success">
              
            <canvas id="myChart" height="258px"></canvas>
              
            </div>
          </div>
        </div>
  </section>
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
                } 
                
              ?>
				],
				datasets : [{
					label : "DEBIT",
          fill : true,
          backgroundColor : "rgba(52, 231, 43, .3)",
          borderColor : "rgba(52,231,43, 1)",
					data : [
						<?php 
              foreach ($flow as $lit) 
              {
                echo $lit->flow.',' ;
              } 
            ?>
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
				options : option
			}) ;


		</script>

<script>
  $(function(){
    $('body').addClass('sidebar-collapse');


  });


</script>

@endpush