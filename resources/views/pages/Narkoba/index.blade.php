@extends ('templates.admin')
@section('content')
<div class="widget-body">
  <h5 class="box-title">Bordered Table</h5>
    <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
      <table class="table table-bordered">
            <thead>
             <tr>
              <th>NO</th>
              <th>Nama</th>
              <th>Jenis</th>
              <th>Golongan</th>
              <th>Efek</th>
              <th>Keterangan</th>
              <th>Gambar</th>
            </tr>
            </thead>
            <tbody>
             <tr>
             <td></td>
             <td></td>
             <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <a href="#" class="lihat" <i class="fa fa-eye" ></i></a>
                <a href="#" class="ubah"> <i class="fa fa-edit"></i> </a>
                <a href="#" class="hapus"> <i class="lnr lnr-trash md-18"></i></a>
             </td>
              </tr>



  </tbody>
</table>
</div>
@endsection
