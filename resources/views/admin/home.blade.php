@extends('layoutsAdmin.template')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home Page</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
     <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $jumlah_booking }}</h3>

            <p>Jumlah Booking</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="/data_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
       
        
       
      </div>
      <div class="col-lg-3">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $data_diterima }}</h3>

            <p>Booking Diterima</p>
          </div>
          <div class="icon">
            <i class="ion ion-checkmark"></i>
          </div>
          <a href="/booking_success" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $data_pending }}</h3>

            <p>Booking Pending</p>
          </div>
          <div class="icon">
            <i class="ion ion-alert"></i>
          </div>
          <a href="/data_booking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3>{{ "Rp " . number_format($total_pendapatan,2,',','.') }}</h3>

            <p>Total Pendapatan</p>
          </div>
          <div class="icon">
            <i class="ion ion-cash"></i>
          </div>
          <a href="/booking_success" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
     </div>
    </section>
  </div>
@endsection
