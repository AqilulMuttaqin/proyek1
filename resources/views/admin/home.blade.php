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

            <p>Total Booking</p>
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
            <h3>{{ $jumlah_pendaki }}</h3>

            <p>Total Pendaki</p>
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

            <p>Menunggu Konfirmasi</p>
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
          <a href="#" type="button" class="small-box-footer" data-toggle="modal" data-target="#exampleModalCenter">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
     </div>
    </section>
  </div>
@endsection
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Input Tanggal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/admin-dashboard">
      <div class="modal-body">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Start Date</label>
          <input type="date" class="form-control" id="exampleFormControlInput1" name="start_date">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput2" class="form-label">End Date</label>
          <input type="date" class="form-control" id="exampleFormControlInput2" name="end_date">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>