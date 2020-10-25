@extends ('templates.admin2')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Narkotika</h5>
<a href="{{route('narkotika.tambah')}}" class="btn btn-info">Tambah</a>
</div>
<div class="rows">
  <div class="col-12">
    <table class="table table-bordered " id="myTable">
          <thead>
           <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Golongan</th>
            <th>Dampak</th>
            <th>Keterangan</th>
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
          @foreach($narkotika as $n_dt)
           <tr>
           <td>{{$loop->iteration}}</td>
           <td>{{$n_dt->nama}}</td>
           <td>{{$n_dt->jenis == 'nss' ? 'Narkotika Semi Sensitis' : 'Narkotika'}}</td>
            <td>{{$n_dt->golongan}}</td>
            <td>{!!str_limit($n_dt->dampak,25, '...')!!}</td>
            <td>{!!str_limit($n_dt->keterangan, 25, '...')!!}</td>
            <td><img src="{{asset('uploads/narkoba/narkotika/'.$n_dt->gambar)}}" width="100" height="100" alt=""> </td>
            <td>
              <a href="{{route('narkotika.lihat', $n_dt->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
              <a href="{{route('narkotika.ubah', $n_dt->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
              <!-- <a href="{{route('narkotika.hapus', $n_dt->id)}}" onclick="return confirm('Apakah anda yakin ingin menghapus?')"
                class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a> -->
                <form action="{{route('narkotika.hapus', $n_dt->id)}}" method="post">
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
