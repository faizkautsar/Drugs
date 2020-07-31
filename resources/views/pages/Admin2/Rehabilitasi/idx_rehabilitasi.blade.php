@extends ('templates.admin2')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Rehabilitasi</h5>
<a href="{{route('rehabilitasi.tambah')}}" class="btn btn-info">Tambah</a>
</div>
<div class="row">
  <div class="col-12">
    <table class="" id="myTable">
            <thead>
             <tr>
              <th>NO</th>
              <th>Inisial</th>
              <th>Tanggal Lahir</th>
              <th>Keterangan</th>
              <th>Rujukan</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
             @foreach($rehabilitasi as $r)
             <tr>
             <td>{{$loop->iteration}}</td>
             <td>{{$r->inisial}}</td>
             <td>{{$r->tanggal_lahir}}</td>
              <td>{{$r->keterangan}}</td>
              <td>{{$r->rujukan}}</td>
              <td>
                <a href="{{route('rehabilitasi.ubah', $r->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                <a href="{{route('rehabilitasi.hapus', $r->id)}}" onclick="return confirm('Apakah anda yakin ingin menghapus?')"
                  class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>

             </td>

           </tr>
           @endforeach

         </tbody>
       </table>
     </div>
     </div>

@endsection
