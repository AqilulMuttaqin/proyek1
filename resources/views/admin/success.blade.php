@extends('layoutsAdmin.template')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Home Page</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Jumlah Pendaki</th>
                <th scope="col">Nominal</th>
                <th scope="col">Mulai</th>
                <th scope="col">Sampai</th>
                <th scope="col">Bukti</th>
              </tr>
            </thead>
            <tbody>
                @foreach($data as $i => $d)
              <tr>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->jumlah_pendaki }}</td>
                <td>{{ "Rp " . number_format($d->nominal,2,',','.') }}</td>
                <td>{{ $d->tanggal_berangkat }}</td>
                <td>{{ $d->tanggal_pulang }}</td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bukti{{ ++$i }}">
                    Lihat
                  </button></td>
              </tr>
              <div class="modal fade" id="bukti{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img src="{{ asset('storage/' . $d->bukti_pembayaran) }}" width="450" alt="Bukti Pembayaran">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              
              @endforeach
              <tr>
                <td colspan="2">Total:</td>
                <td colspan="4">{{ "Rp " . number_format($total,2,',','.') }}</td>
              </tr>
            </tbody>
          </table>
          <div>{{ $data->links() }}</div>
    </section>
  </div>
@endsection