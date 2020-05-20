@extends ('templates.admin')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Statistik</h5>
<a href="{{route('statistik.tambah')}}" class="btn btn-info">Tambah</a>
</div>
<div class="rows">
  <div class="col-12">
    <table class="" id="myTable">
      <thead>
           <tr>
            <th>NO</th>
            <th>Daerah</th>
            <th>Kasus</th>
            <th>Tersangka</th>
            <th>Pasien</th>
            <th>Aksi<th>
          </tr>
      </thead>
      <tbody>
        <tr>
           @foreach($statistik as $s)
           <td>{{$s->id}}</td>
           <td>{{$s->daerah}}</td>
           <td>{{$s->kasus}}</td>
            <td>{{$s->tersangka}}</td>
            <td>{{$s->pasien}}</td>
            <td>
              <a href="{{route('statistik.ubah', $s->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
              <a href="{{route('statistik.hapus', $s->id)}}" onclick="return confirm('Apakah Anda Yakin Ingin Dihapus?')"
                class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
           </td>
         </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection
