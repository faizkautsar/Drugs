@extends ('templates.admin')
@section('content')
<div class="widget-body">
  <div class="row">
    <div class="col-md-12 mr-b-30">
      <div class="card blog-post-new">
        <div class="card-header sub-heading-font-family border-bottom-0 p-0">
          <figure>
            <a href="javascript:void(0);">
              <img class="card-img-top" src="{{asset('uploads/narkoba/dampak/'.$bahaya->gambar)}}" height="400" alt="">
            </a>
          </figure>
        </div>
        <div class="card-body sub-heading-font-family">
          <div class="col-sm-12 col-md-12">
            <div class="icon-box icon-box-side icon-box-circle icon-box-outline">
             <section>
                 <h6 class="icon-box-title">Keterangan</h6>
                 <p>{!!$bahaya->keterangan!!}</p>
             </section>
           </div>
         </div>

  </div>

  <div class="card-action">
    <button type="button" onclick="window.location='{{route("dampak.index")}}'" class="btn btn-info" name="button">Kembali</button>

  </div>

</div>
</div>
</div>
@endsection
