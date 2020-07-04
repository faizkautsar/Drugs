@extends('templates.admin')
@section('content')

<div class="widget-list row">
  <div class="widget-holder col-3">
      <div class="widget-bg">
          <div class="widget-body bg-success text-inverse px-4 pt-3 pb-4 radius-3">
              <div class="icon-box icon-box-centered flex-1 my-0 p-0">
                  <header class="align-self-center"><a href="{{route('laporan.index')}}" class="bg-grey fs-30 text-muted"><i class="lnr lnr-store icon-lg"></i></a>
                  </header>
                  <section class="mt-0">
                      <h6 class="icon-box-title my-0">$<span class="counter" id="counter-0">{{count($laporan)}}</span></h6>
                      <p class="mb-0">Orders Value</p>
                  </section>
              </div>
              <!-- /.icon-box -->
          </div>
          <!-- /.widget-body -->
      </div>
      <!-- /.widget-bg -->
  </div>
  <!-- /.widget-holder -->
  <div class="widget-holder col-3">
      <div class="widget-bg">
          <div class="widget-body bg-secondary text-inverse px-4 pt-3 pb-4 radius-3">
              <div class="icon-box icon-box-centered flex-1 my-0 p-0">
                  <header class="align-self-center"><a href="#" class="bg-grey fs-30 text-muted"><i class="lnr lnr-cart icon-lg"></i></a>
                  </header>
                  <section class="mt-0">
                      <h6 class="icon-box-title my-0">$<span class="counter" id="counter-1">492</span></h6>
                      <p class="mb-0">Average Order</p>
                  </section>
              </div>
              <!-- /.icon-box -->
          </div>
          <!-- /.widget-body -->
      </div>
      <!-- /.widget-bg -->
  </div>
  <!-- /.widget-holder -->
  <div class="widget-holder col-3">
      <div class="widget-bg">
          <div class="widget-body bg-danger text-inverse px-4 pt-3 pb-4 radius-3">
              <div class="icon-box icon-box-centered flex-1 my-0 p-0">
                  <header class="align-self-center"><a href="#" class="bg-grey fs-30 text-muted"><i class="lnr lnr-cart icon-lg"></i></a>
                  </header>
                  <section class="mt-0">
                      <h6 class="icon-box-title my-0"><span class="counter" id="counter-2">7,248</span></h6>
                      <p class="mb-0">Daily Visits</p>
                  </section>
              </div>
              <!-- /.icon-box -->
          </div>
          <!-- /.widget-body -->
      </div>
      <!-- /.widget-bg -->
  </div>
  <!-- /.widget-holder -->
  <div class="widget-holder col-3">
      <div class="widget-bg">
          <div class="widget-body bg-info px-4 pt-3 pb-4">
              <div class="icon-box icon-box-centered flex-1 my-0 p-0 radius-3">
                  <header class="align-self-center"><a href="#" class="bg-grey fs-30 text-muted"><i class="lnr lnr-users icon-lg"></i></a>
                  </header>
                  <section class="mt-0">
                      <h6 class="icon-box-title my-0 text-white"><span class="counter" id="counter-3">325</span></h6>
                      <p class="mb-0">New Users</p>
                  </section>
              </div>
              <!-- /.icon-box -->
          </div>
          <!-- /.widget-body -->
      </div>
      <!-- /.widget-bg -->
  </div>
  <!-- /.widget-holder -->
</div>
@endsection
