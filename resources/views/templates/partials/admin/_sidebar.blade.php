<aside class="site-sidebar scrollbar-enabled" data-suppress-scroll-x="true">
    <!-- Sidebar Menu -->
    <nav class="sidebar-nav">
        <ul class="nav in side-menu">
            <li class="menu-item-has-children current-page active"><a href="{{route('laporan.index')}}">
              <i class="list-icon lnr lnr-home"></i>
               <span class="hide-menu" >Dashboard</span></a>
                <ul class="list-unstyled sub-menu">
                    <li>
                      <a href="{{route('rehabilitasi.index')}}">Rehabilitasi</a>
                    </li>
                  </li>
                  <li>
                    <a href="{{route('statistik.index')}}">Statistik</a>
                  </li>
                    <li><a href="{{route('hukum.index')}}">Dasar Hukum</a>
                    </li>
                    <li><a href="{{route('dampak.index')}}">Dampak Negatif</a>
                    </li>
                    <li><a href="{{route('pencegahan.index')}}">Upaya Pencegahan</a>
                    </li>
                    <li>
                      <a href="{{route('user.index')}}">User</a>
                    </li>
                    <li>
                      <a href="{{route('laporan.index')}}">Laporan</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);"><i class="list-icon lnr lnr-list"></i>
              <span class="hide-menu">Narkoba</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="{{route('narkotika.index')}}">Narkotika</a>
                    </li>
                    <li><a href="{{route('ps.index')}}">Psikotropika</a>
                    </li>
                    <li><a href="{{route('bhn_adiktif.index')}}">Zat Adiktif</a>
                    </li>

                </ul>
            </li>


        </ul>
        <!-- /.side-menu -->
    </nav>
    <!-- /.sidebar-nav -->
</aside>
