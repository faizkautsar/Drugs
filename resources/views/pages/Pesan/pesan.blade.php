@extends('templates.admin')
@section('content')
<div class="container">
  <div class="widget-list">
    <div class="row no-gutters">
      <div class="col-md-12 widget-holder widget-full-content mb-3">
        <div class="widget-bg">
          <div class="widget-body clearfix">
            <div class="chatbox row no-gutters" style="height: 90vh">
              <div class="chatbox-user-list col-sm-4 border-right bw-r-0-rtl border-left-rtl">
                  <div class="chatbox-header">
                      <div class="icon-box icon-box-side icon-box-circle icon-box-outline icon-box-lg align-items-center">
                          <header><a href="#" class="bw-1"><i class="lnr lnr-user icon-sm"></i></a>
                          </header>
                          <section>
                              <h6 class="icon-box-title mb-1">Friends</h6>
                              <p class="text-muted heading-font-family">376 Conversions</p>
                          </section>
                      </div>
                      <!-- /.icon-box -->
                  </div>
                  <!-- /.chatbox-header -->
                  <div class="chatbox-search px-3 mt-4">
                      <form>
                          <div class="form-group"><i class="lnr lnr-magnifier pos-absolute pos-right vertical-center pr-4 icon-sm"></i>
                              <input type="search" placeholder="Search for friends.." class="form-control form-control-rounded heading-font-family fs-12 pd-10 pd-r-50">
                          </div>
                          <!-- /.form-group -->
                      </form>
                  </div>
                  <!-- /.chatbox-search -->
                  <div class="chatbox-body scrollbar-enabled pr-0 ps ps--active-y">
                      <div class="user-list">
                          <div class="user-list-single">
                            <div class="row">
                              <div class="media align-items-center col-8">
                                  <figure class="thumb-xs2 mr-3 mr-0-rtl ml-3-rtl user--online">
                                      <img src="assets/demo/users/1.jpg" class="rounded-circle" alt="User 1">
                                  </figure>
                                  <div class="media-body overflow-hidden">
                                      <p class="user-name mb-0 heading-font-family fw-400">Nick Lampard</p>
                                      <small class="text-nowrap heading-font-family fw-400">Hi, I am going to Scotland something that we don't understand</small>
                                  </div>
                                  <!-- /.media-body -->
                                  <a href="#" class="pos-absolute pos-0 zi-1"></a>
                              </div>
                                  <!-- /.col-8 -->
                                  <div class="col-4">
                                      <div class="d-flex flex-column">
                                          <div class="text-right text-left-rtl">
                                            <span class="badge bg-success-contrast color-success">3</span>
                                              <div class="dropdown d-inline-block">
                                                  <button class="btn btn-link btn-link dropdown-toggle p-0 color-content-color d-inline-block" data-toggle="dropdown"><i class="lnr lnr-menu icon-sm text-muted"></i>
                                                  </button>
                                                  <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another Action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                                  </div>
                                                  <!-- /.dropdown-menu -->
                                              </div>
                                              <!-- /.dropdown -->
                                          </div><small class="heading-font-family fs-10 text-right text-left-rtl">5 min</small>
                                      </div>
                                      <!-- /.d-flex -->
                                  </div>
                                  <!-- /.col-4 -->
                              </div>
                              <!-- /.row -->
                          </div>
                          <!-- /.user-list-single -->
                          <div class="user-list-single">
                              <div class="row">
                                  <div class="media align-items-center col-8">
                                      <figure class="thumb-xs2 mr-3 mr-0-rtl ml-3-rtl user--online">
                                          <img src="assets/demo/users/2.jpg" class="rounded-circle" alt="User 2">
                                      </figure>
                                      <div class="media-body overflow-hidden">
                                          <p class="user-name mb-0 heading-font-family fw-400">Ashley Wilson</p><small class="text-nowrap heading-font-family fw-400">Can you help me with this ..</small>
                                      </div>
                                      <!-- /.media-body -->
                                      <a href="#" class="pos-absolute pos-0 zi-1"></a>
                                  </div>
                                  <!-- /.col-8 -->
                                  <div class="col-4">
                                      <div class="d-flex flex-column">
                                          <div class="text-right text-left-rtl"><span class="badge bg-success-contrast color-success">2</span>
                                              <div class="dropdown d-inline-block">
                                                  <button class="btn btn-link btn-link dropdown-toggle p-0 color-content-color d-inline-block" data-toggle="dropdown"><i class="lnr lnr-menu icon-sm text-muted"></i>
                                                  </button>
                                                  <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another Action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                                  </div>
                                                  <!-- /.dropdown-menu -->
                                              </div>
                                              <!-- /.dropdown -->
                                          </div><small class="heading-font-family fs-10 text-right text-left-rtl">23 min</small>
                                      </div>
                                      <!-- /.d-flex -->
                                  </div>
                                  <!-- /.col-4 -->
                              </div>
                              <!-- /.row -->
                          </div>
                          <!-- /.user-list-single -->
                          <!-- /.user-list-single -->
                          <!-- /.user-list-single -->
                      <!-- /.user-list -->
                  <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">
                    </div>
                  </div>
                  <div class="ps__rail-y" style="top: 0px; height: 382px; right: 0px;">
                      <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 368px;">
                      </div>
                    </div>
                  </div>
                  <!-- /.chatbox-body -->
              </div>
              <!-- /.col-sm-4 -->
              <div class="chatbox-chat-area col-sm-8">
                  <div class="chatbox-header d-flex align-items-center px-4 border-bottom">
                      <div class="media align-items-center mr-tb-30 flex-1">
                          <figure class="thumb-xs2 user--online mr-3 mr-0-rtl ml-3-rtl">
                              <a href="#">
                                  <img class="rounded-circle" src="assets/demo/users/7.jpg" alt="User 7">
                              </a>
                          </figure>
                          <div class="media-body">
                              <h6 class="mt-0 mb-1">Jerome Sallee</h6>
                              <p class="text-muted heading-font-family mb-0">Online</p>
                          </div>
                          <!-- /.media-body -->
                      </div>
                      <!-- /.media --> <a href="#" class="btn btn-circle btn-success fs-20 mr-2 mr-0-rtl ml-2-rtl"><i class="lnr lnr-phone-handset"></i></a>
                      <a href="#" class="btn btn-circle btn-outline-default fs-20 mr-2 mr-0-rtl ml-2-rtl"><i class="lnr lnr-camera-video"></i>
                      </a>
                      <div class="dropdown"><a href="#" class="btn btn-circle btn-outline-default fs-20 mr-2 mr-0-rtl ml-2-rtl dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-menu"></i></a>
                          <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">Action</a>  <a href="#" class="dropdown-item">Another Action</a>  <a href="#" class="dropdown-item">Something else here</a>
                          </div>
                          <!-- /.dropdown-menu -->
                      </div>
                      <!-- /.dropdown -->
                  </div>
                  <!-- /.chatbox-header -->
                  <div class="chatbox-body scrollbar-enabled scroll-to-bottom ps ps--active-y" style="max-height: 100%">
                      <div class="chatbox-messages">
                          <div class="message reply media">
                              <figure class="thumb-xs2">
                                  <a href="#">
                                      <img src="assets/demo/users/7.jpg" class="rounded-circle" alt="User 7">
                                  </a>
                              </figure>
                              <div class="media-body">
                                  <p>Epic Cheeseburgers come in all kinds of styles</p>
                              </div>
                              <!-- /.media-body -->
                          </div>
                          <!-- /.message -->
                          <div class="message media">
                              <figure class="thumb-xs2">
                                  <a href="#">
                                      <img src="assets/demo/users/1.jpg" class="rounded-circle" alt="User 1">
                                  </a>
                              </figure>
                              <div class="media-body">
                                  <p>Cheeseburgers make your knees weak</p>
                              </div>
                              <!-- /.media-body -->
                          </div>
                          <!-- /.message -->
                          <div class="message reply media">
                              <figure class="thumb-xs2">
                                  <a href="#">
                                      <img src="assets/demo/users/7.jpg" class="rounded-circle" alt="User 7">
                                  </a>
                              </figure>
                              <div class="media-body">
                                  <p>Cheeseburgers will never let you down.</p>
                                  <p>They'll also never run around or desert you.</p>
                              </div>
                              <!-- /.media-body -->
                          </div>
                          <!-- /.message -->
                          <div class="message media">
                              <figure class="thumb-xs2">
                                  <a href="#">
                                      <img src="assets/demo/users/1.jpg" class="rounded-circle" alt="User 1">
                                  </a>
                              </figure>
                              <div class="media-body">
                                  <p>A great cheeseburger is a gastronomical event.</p>
                              </div>
                              <!-- /.media-body -->
                          </div>
                          <!-- /.message -->
                          <div class="message reply media">
                              <figure class="thumb-xs2">
                                  <a href="#">
                                      <img src="assets/demo/users/7.jpg" class="rounded-circle" alt="User 7">
                                  </a>
                              </figure>
                              <div class="media-body">
                                  <p>There's a cheesy incarnation waiting for you no matter what your palate preferences are.</p>
                              </div>
                              <!-- /.media-body -->
                          </div>
                          <!-- /.message -->
                          <div class="message media">
                              <figure class="thumb-xs2">
                                  <a href="#">
                                      <img src="assets/demo/users/1.jpg" class="rounded-circle" alt="User 1">
                                  </a>
                              </figure>
                              <div class="media-body">
                                  <p>If you're vegan, we're sorry for your loss.</p>
                              </div>
                              <!-- /.media-body -->
                          </div>
                          <!-- /.message -->
                      </div>
                      <!-- /.chatbox-messages -->
                  <div class="ps__rail-x" style="left: 0px; bottom: -325px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 325px; height: 380px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 176px; height: 204px;"></div></div></div>
                  <!-- /.chatbox-body -->
                  <form class="chatbox-form p-3 border-top d-flex align-items-center pos-relative" action="#" method="post">
                      <button type="button" class="btn btn-sm btn-circle btn-outline-default bw-1"><i class="feather feather-plus"></i>
                      </button>
                      <div class="form-group flex-1 mb-0 ml-3">
                          <input type="text" class="form-control form-control-rounded pd-r-90">
                      </div>
                      <!-- /.form-group -->
                      <button type="submit" class="btn btn-sm btn-rounded btn-success pos-absolute pos-right vertical-center border-hidden text-uppercase px-3 mr-r-30">Submit</button>
                  </form>
                  <!-- /.chatbox-form -->
              </div>
              <!-- /.col-sm-8 -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /.widget-body -->
  </div>
      <!-- /.widget-bg -->
  </div>
      <!-- /.widget-holder -->
  </div>
    <!-- /.row -->
  </div>
  <!-- /.widget-list -->
  </div>
@endsection
