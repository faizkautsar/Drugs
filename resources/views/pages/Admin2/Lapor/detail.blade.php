@extends ('templates.admin2')
@section('content')
<div class="widget-body">
  <div class="row">
    <div class="col-md-12 mr-b-30">
        <div class="card-body sub-heading-font-family">
          <h5 class="card-title sub-heading-font-family mb-3">{{$laporan->peran}}</h5>
            <div class="col-sm-12 col-md-12">
              <div class="icon-box icon-box-side icon-box-circle icon-box-outline">
                  <header><a href="#" class="bw-3"><i class="lnr lnr-book"></i></a>
                  </header>
                  <section>
                      <h6 class="icon-box-title">Nama</h6>
                      <p>{!!$laporan->nama!!}</p>

                          <h6 class="icon-box-title">Nomer Telepon</h6>
                          <p>{!!$laporan->no_telp!!}</p>


                          <h6 class="icon-box-title">Alamat</h6>
                          <p>{!!$laporan->alamat!!}</p>


                          <h6 class="icon-box-title">Jenis Narkoba </h6>
                          <p>{!!$laporan->jenis_narkoba!!}</p>


                          <h6 class="icon-box-title">Pekerjaan</h6>
                          <p>{!!$laporan->pekerjaan!!}</p>


                          <h6 class="icon-box-title">Kegiatan/Sering Terlihat</h6>
                          <p>{!!$laporan->kegiatan!!}</p>


                          <h6 class="icon-box-title">Tempat Transaksi/Menggunakan Narkoba</h6>
                          <p>{!!$laporan->tmpt_transaksi!!}</p>

                  </section>

              </div>
          </div>

       </div>

            <div class="card-action">
              <button type="button" onclick="window.location='{{route("laporan.index")}}'" class="btn btn-secondary" name="button">Kembali</button>
            @if(!$laporan->status)
                <button type="button"  onclick="event.preventDefault();
                         document.getElementById('konfirmasi-laporan').submit();" class="btn btn-success" name="button">Konfirmasi</button>

                <form id="konfirmasi-laporan" action="{{ route('update.laporan', $laporan) }}" method="POST" style="display: none">
                   @csrf
                   @method("PATCH")
               </form>
              @endif
            </div>

        </div>
    </div>
</div>
@endsection
