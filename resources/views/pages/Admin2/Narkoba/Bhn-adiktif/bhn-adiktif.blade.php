@extends ('templates.admin2')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Bahan Adiktif</h5>
  <a href="{{route('bhn_adiktif.tambah')}}"class="btn btn-info">Tambah</a>
</div>
<div class="row">
  <div class="col-60">
    <table class="table table-bordered" id="myTable">
          <thead>
           <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Dampak</th>
            <th>Keterangan</th>
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            @foreach($bhn_adiktif as $bhn_a)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$bhn_a->nama}}</td>
              <td>{!!str_limit($bhn_a->dampak, 45, '...')!!}</td>
              <td>{!!str_limit($bhn_a->keterangan, 45, '...')!!}</td>
              <td> <img src="{{asset('uploads/narkoba/BahanAdiktif/'.$bhn_a->gambar)}}" width="100" height="100" alt=""> </td>
              <td>
                <a href="{{route('bhn_adiktif.lihat', $bhn_a->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                <a href="{{route('bhn_adiktif.ubah', $bhn_a->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                <a href="{{route('bhn_adiktif.hapus', $bhn_a->id)}}" onclick="return confirm('Apakah Anda Yakin Ingin Dihapus?')"
                class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
              </td>
            </tr>
            @endforeach
  </div>
</div>
@endsection
