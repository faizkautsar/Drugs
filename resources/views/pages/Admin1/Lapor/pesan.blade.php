@extends ('templates.admin1')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Laporan</h5>
  <div class="box">
    <div class="box-header with-border">

    </div>

</div>
<div class="row">
  <div class="col-12">
    <table class="table table-bordered " id="myTable">
          <thead>
           <tr>
            <th>NO</th>
            <th>Foto</th>
            <th>Peran</th>
            <th>Nama </th>
            <th>Alamat </th>
            <th>Jenis Narkoba</th>
            <th>Pekerjaan</th>
            <th>Transaksi</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>

          </tr>
          </thead>
          <tbody>
            @foreach($laporan as $lp)
            <tr>
           <td>{{$lp->id}}</td>
           <td><img src="{{asset('uploads/laporan'.$lp->foto)}}" width="100" height="100"  </td>
           <th>{{$lp->peran}}</th>
           <th>{{$lp->nama}}</th>
           <th>{!!str_limit($lp->alamat, 20, '...')!!}</th>
           <th>{{$lp->jenis_narkoba}}</th>
           <th>{{$lp->pekerjaan}}</th>
           <th>{!!str_limit($lp->tmpt_transaksi, 10, '...')!!}</th>
           <th>{{$lp->created_at->format('d-m-Y')}}</th>
           <th>{{$lp->status ? 'Terkonfirmasi' : 'Belum Terkonfirmasi'}}</th>
           <td>
             <a href="#"></a>
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
