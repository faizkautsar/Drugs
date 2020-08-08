@extends ('templates.admin2')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Pencegahan</h5>
<a href="{{route('pencegahan.tambah')}}" class="btn btn-info">Tambah</a>
      <table class="table table-bordered">
            <thead>
             <tr>
              <th>NO</th>
              <th>Aspek</th>
              <th>Keterangan</th>
              <th>Aksi</th>

            </tr>
            </thead>
            <tbody>

             @foreach($pencegahan as $up)
             <td>{{$loop->iteration}}</td>
             <td>{{str_limit($up->aspek,60, '...')}}</td>
             <td>{{str_limit($up->keterangan,60,'...')}}</td>
             <td>
               <a href="{{route('pencegahan.ubah', $up->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
               <!-- <a href="{{route('pencegahan.hapus', $up->id)}}" onclick="return confirm('Apakah anda yakin ingin menghapus?')"
                 class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a> -->
                 <form action="{{route('pencegahan.hapus', $up->id)}}" method="post">
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
@endsection
