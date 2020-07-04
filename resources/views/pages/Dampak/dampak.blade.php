@extends ('templates.admin')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Dampak Negatif</h5>
<a href="{{route('dampak.tambah')}}" class="btn btn-info">Tambah</a>
      <table class="table table-bordered">
            <thead>
             <tr>
              <th>NO</th>
              <th>Keterangan</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
              <tr>
             @foreach($bahaya as $b)
             <td>{{$b->id}}</td>
             <td>{!!$b->keterangan!!}</td>
             <td><img src="{{asset('uploads/narkoba/dampak/'.$b->gambar)}}" width="100" height="100" alt=""></td>
             <td>
               <a href="{{route('dampak.lihat', $b->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
               <a href="{{route('dampak.ubah', $b->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
               <a href="{{route('dampak.hapus', $b->id)}}" onclick="return confirm('Apakah Anda Yakin Ingin Dihapus?')"
                 class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
             </td>
           </tr>
@endforeach

  </tbody>
</table>
</div>
@endsection
