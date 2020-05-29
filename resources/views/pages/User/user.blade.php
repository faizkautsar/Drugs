@extends ('templates.admin')
@section('content')
<div class="widget-body">
  <h5 class="box-title">User</h5>

</div>
<div class="row">
  <div class="col-12">
    <table class="table table-bordered " id="myTable">
          <thead>
           <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Desa</th>
            <th>Kecamatan</th>
            <th>Kode Pos</th>
            <th>Status</th>
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
