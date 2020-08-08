@extends ('templates.admin2')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Psikotropika</h5>
<a href="{{route('ps.tambah')}}" class="btn btn-info">Tambah</a>
</div>
<div class="rows">
  <div class="col-12">
  <table class="table table-bordered" id="myTable">
            <thead>
             <tr>
              <th>NO</th>
              <th>Nama</th>
              <th>Golongan</th>
              <th>Dampak</th>
              <th>Keterangan</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
             @foreach($psikotropika as $ps)
             <tr>
             <td>{{$loop->iteration}}</td>
             <td>{{$ps->nama}}</td>
              <td>{{$ps->golongan}}</td>
              <td>{!!str_limit($ps->dampak, 50, '...')!!}</td>
              <td>{!!str_limit($ps->keterangan, 50, '...')!!}</td>
              <td><img src="{{asset('uploads/narkoba/psikotropika/'.$ps->gambar)}}" width="100" height="100" alt=""> </td>
              <td>
                <a href="{{route('ps.lihat', $ps->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                <a href="{{route('ps.ubah', $ps->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                <!-- <a href="{{route('ps.hapus', $ps->id)}}" onclick="return confirm('Apakah anda yakin ingin menghapus?')"
                  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a> -->
                  <form action="{{route('ps.hapus', $ps->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus?')"><i class="fa fa-remove"></i></button>
                  </form>
             </td>
           </tr>

@endforeach

  </tbody>
</table>
</div>
</div>

@endsection
