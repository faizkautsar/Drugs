@extends ('templates.admin1')
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
             <a href="#" data-toggle="modal" data-target=".bs-modal-md-info{{$usr->id}}" class="mr-3 btn btn-sm {{$usr->status ? 'btn-danger' : 'btn-success'}}">{{$usr->status ? 'Non Aktifkan User' : 'Aktifkan User'}}</a>
           </td>
         </tr>
         <div class="modal modal-info fade bs-modal-md-info{{$usr->id}}" tabindex="-1" role="dialog" aria-labelledby="myMediumModalLabel2" aria-hidden="true" style="display: none">
              <div class="modal-dialog modal-md">
                  <div class="modal-content">
                      <div class="modal-header text-inverse {{$usr->status ? 'bg-danger' : 'bg-success'}}">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h5 class="modal-title">{{$usr->status ? 'Non Aktifkan User' : 'Aktifkan User'}}</h5>
                      </div>
                      <form class="" action="{{route('user.update', $usr)}}" method="post">
                        @csrf
                        @method('PATCH')
                      <div class="modal-body">
                        Apakah anda yakin akan {{$usr->status ? 'Non Aktifkan User' : 'Aktifkan User'}} {{$usr->nama}}
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-rounded ripple text-left" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn {{$usr->status ? 'bg-danger' : 'bg-success'}} btn-rounded text-white ripple text-left">Simpan</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
          </div>
@endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
