@extends ('templates.admin2')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Laporan</h5>
  <div class="box">
    <div class="box-header with-border">

    </div>
</div>

<form class="" action="{{route('cetak_pdf')}}" method="get">
  <div class="row">
    <div class="col-3">
      <input type="date" name="tanggal_mulai" class="form-control form-control-sm" value="">
    </div>

    <div class="col-3">
      <input type="date" name="tanggal_selesai" class="form-control form-control-sm" value="">
    </div>

    <div class="col-3">
      <button type="submit" class="btn btn-primary" > <i class="fa fa-print"></i> </button>
    </div>
  </div>
</form>

<div class="row">
  <div class="col-12">
    <table class="table table-bordered " id="myTable">
          <thead>
           <tr>
            <th>NO</th>
            <th>Tanggal</th>
            <th>Peran</th>
            <th>Nama</th>
            <th>Alamat </th>
            <th>Jenis Narkoba</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Aksi</th>

          </tr>
          </thead>
          <tbody>
            @foreach($laporan as $lp)
            <tr>
           <td>{{$loop->iteration}}</td>
           <th>{{$lp->created_at->format('d/m/Y')}}</th>
           <th>{{$lp->peran}}</th>
           <th>{{$lp->nama}}</th>
           <th>{!!str_limit($lp->alamat, 20, '...')!!}</th>
           <th>{{$lp->jenis_narkoba}}</th>
           <td><img src="{{asset($lp->foto)}}" width="80" height="80"  </td>
           <th>{{$lp->status ? 'Terkonfirmasi' : 'Belum Terkonfirmasi'}}</th>
           <td>
              <a href="{{ route('lihat_laporan.index', $lp->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
              <a href="{{route('laporan.hapus', $lp->id)}}" onclick="return confirm('Apakah Anda Yakin Ingin Dihapus?')"
                class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>

           </td>
         </tr>

         @endforeach
      </tbody>
    </table>


  </div>
</div>
@endsection
