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
            <th>Dari</th>
            <th>Nama Terlapor</th>
            <th>No Telpon</th>
            <th>Alamat Terlapor</th>
            <th>Jenis Narkoba</th>
            <th>Peran Terlapor</th>
            <th>Profesi/Pekerjaan</th>
            <th>Alamat Profesi </th>
            <th>Kendaraan</th>
            <th>Lokasi Penggunaan</th>
            <th>Lokasi Terlihat</th>
             
            <th>Informasi</th>

          </tr>
          </thead>
          <tbody>
            @foreach($user as $usr)
            <tr>
           <td>{{$usr->id}}</td>
           <th>{{$usr->nama}}</th>
           <th>{{$usr->email}}</th>
           <th>{{$usr->no_telp}}</th>
           <th>{{$usr->alamat}}</th>
           <th>{{$usr->desa}}</th>
           <th>{{$usr->kecamatan}}</th>
           <th>{{$usr->kode_pos}}</th>
           <td>
              <a href="{{route('narkotika.ubah', $usr->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
           </td>
         </tr>

@endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
