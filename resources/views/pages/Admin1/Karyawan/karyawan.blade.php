@extends ('templates.admin1')
@section('content')
<div class="widget-body">
  <h5 class="box-title">User</h5>
<a href="{{route('karyawan.tambah')}}" class="btn btn-info">Tambah</a>
</div>
<div class="row">
  <div class="col-12">
    <table class="table table-bordered " id="myTable">
          <thead>
           <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Email</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Status</th>

          </tr>
          </thead>
          <tbody>
            @foreach($karyawan as $kw)
            <tr>
           <td>{{$kw->id}}</td>
           <th>{{$kw->nama}}</th>
           <th>{{$kw->ttl}}</th>
           <th>{{$kw->email}}</th>
           <th>{{$kw->no_telp}}</th>
           <th>{{$kw->alamat}}</th>
           <td>  <a href="{{route('karyawan.ubah', $kw->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>

            </td>
           </tr>
@endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
