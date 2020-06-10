@extends('templates.admin')
@section('content')
<div class="widget-body clearfix">
  <h5 class="box-title mr-b-0">Memasukan Hukum</h5>
   <p class="text-muted">Hukum yang dimasukan sesuai garis besar berdasarkan dengan undang-undang narkotika no 35 tahun 2009</p>
    <form method="post" enctype="multipart/form-data" action="{{route('hukum.store')}}">
      @csrf
     <div class="form-group row">
        <label class="col-md-3 col-form-label" for="l0">Keterangan</label>
        <div class="col-md-9">
          <input class="form-control"
          name="keterangan"  placeholder="pasal" type="text" >
          </div>
      </div>
     <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l0">Isi</label>
              <div class="col-md-9">
                <textarea class="form-control"
                name="isi" id="basic-1" placeholder="isi" type="text"></textarea>
                </div>
      </div>
        <div class="form-actions">
            <div class="form-group row">
                <div class="col-md-9 ml-md-auto btn-list">
                    <button class="btn btn-primary btn-rounded" type="submit">Simpan</button>
                    <a type="button" onclick="return confirm('Apakah Anda Yakin Untuk Membatalkannya?')" href="{{route("hukum.index")}}"
                     class="btn btn-danger btn-rounded" name="button">Kembali</a>
                </div>
            </div>
        </div>
        </form>
        </div>
@endsection
