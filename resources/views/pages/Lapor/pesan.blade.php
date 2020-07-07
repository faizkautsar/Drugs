@extends ('templates.admin')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Laporan</h5>

</div>
<div class="row">
  <div class="col-12">
    <table class="table table-bordered " id="myTable">
          <thead>
           <tr>
            <th>NO</th>
            <th>Peran</th>
            <th>Nama </th>
            <th>Alamat </th>
            <th>Jenis Narkoba</th>
            <th>Pekerjaan</th>
            <th>Transaksi</th>
            <th>Status</th>
            <th>Aksi</th>

          </tr>
          </thead>
          <tbody>
            @foreach($laporan as $lp)
            <tr>
           <td>{{$lp->id}}</td>
           <th>{{$lp->peran}}</th>
           <th>{{$lp->nama}}</th>
           <th>{{$lp->alamat}}</th>
           <th>{{$lp->jenis_narkoba}}</th>
           <th>{{$lp->pekerjaan}}</th>
           <th>{{$lp->tmpt_transaksi}}</th>
           <th>{{$lp->status ? 'Terkonfirmasi' : 'Belum Terkonfirmasi'}}</th>
           <td>
             <a href="#"></a>
              <a href="{{ route('lihat_laporan.index', $lp->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
           </td>
         </tr>

@endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
