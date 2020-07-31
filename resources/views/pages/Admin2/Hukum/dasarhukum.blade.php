@extends ('templates.admin2')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Hukum</h5>
<a href="{{route('hukum.tambah')}}" class="btn btn-info">Tambah</a>
</div>
<div class="row">
  <div class="col-12">
      <table class="table table-bordered" id="myTable">
        <thead>
           <tr>
              <th>NO</th>
              <th>Keterangan</th>
              <th>Isi</th>
              <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
             @foreach($hukum as $h)
          <tr>
             <td>{{$loop->iteration}}</td>
             <td>{!!str_limit($h->keterangan,60, '...')!!}</td>
             <td>{!!str_limit($h->isi,60,'...')!!}</td>
             <td>
               <a href="{{route('hukum.ubah', $h->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
               <a href="{{route('hukum.hapus', $h->id)}}" onclick="return confirm('Apakah anda yakin ingin menghapus?')"
               class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
             </td>
           </tr>

@endforeach

  </tbody>
</table>
</div>
</div>
@endsection
