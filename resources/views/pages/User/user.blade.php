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
           <td>
             <button type="button" class="btn {{$usr->status ? 'btn-success' : 'btn-danger'}} btn-sm">{{$usr->status ? 'Aktif' : 'Tidak aktif'}}</button>
           </td>
           <td>
             <div class="checkbox checkbox-rounded checkbox-info">
                <label class="checkbox-checked">
              <input type="checkbox" checked="checked"> <span class="label-text">Aktif</span>
              </label>
              </div>
              <div class="checkbox checkbox-rounded checkbox-danger">
                 <label class="checkbox-checked">
               <input type="checkbox" checked="checked"> <span class="label-text">Tidak Aktif</span>
               </label>
               </div>
           </td>
         </tr>

@endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
