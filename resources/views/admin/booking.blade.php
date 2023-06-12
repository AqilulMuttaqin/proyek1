@extends('layoutsAdmin.template')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Booking Page</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
        <div class="row">
            @foreach($data as $i => $d)
            <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$d->nama}}</h5>
              <h6 class="card-subtitle mb-2 text-muted"><br>{{$d->jumlah_pendaki}} orang ({{ "Rp " . number_format($d->nominal,2,',','.') }})</h6>
              <p class="card-text">Mulai tanggal {{ $d->tanggal_berangkat }} sampai tanggal {{ $d->tanggal_pulang }}</p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bukti{{ ++$i }}">
                Lihat Bukti
              </button>
              <form action="/terima/{{ $d->id }}" id="terima{{ $i }}" method="post">
                @csrf
                <button class="btn btn-success" onclick="konfirmasiTerima({{ $i }})">Terima</button>
                
              </form>
              <form action="/tolak/{{ $d->id }}" id="tolak{{ $i }}" method="post">
                @csrf
                <button class="btn btn-danger" onclick="konfirmasiTolak({{ $i }})">Tolak</button>
              </form>
              
            </div>
          </div>
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
            </div>
        @endforeach
        </div>
    </section>
  </div>
  <script>
    function konfirmasiTerima(value){
        event.preventDefault();
        Swal.fire({
  title: 'Apakah kamu yakin?',
  text: "Kamu Akan Menerima Data Ini",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya'
}).then((result) => {
  if (result.isConfirmed) {
    let query = '#terima' + value
    document.querySelector(query).submit();
  }
})
    }

    function konfirmasiTolak(value){
        event.preventDefault();
        Swal.fire({
  title: 'Apakah kamu yakin?',
  text: "Kamu Akan Menolak Data Ini",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya'
}).then((result) => {
  if (result.isConfirmed) {
    let query = 'tolak' + value
    document.getElementById(query).submit();
  }
})
    }
  </script>
@endsection