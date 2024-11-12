<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="{{ asset('Modernnize/src/assets/images/logos/logo.png')}}" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="
      ">
        <ul id="sidebarnav">
            @if (auth()->user()->level == "admin")
          {{-- <li class="nav-small-cap">
            <i class="ti ti-home nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li> --}}
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('home')}}" aria-expanded="false">
              <span>
                <i class="ti ti-home"></i>
              </span>
              <span class="hide-menu">beranda</span>
            </a>

          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('rekening.index') }}" aria-expanded="false">
              <span>
                <i class="ti ti-wallet"></i>
              </span>
              <span class="hide-menu">Rekening pembayaran
                <p>retribusi</p></span>
            </a>

          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('kategori.index')}}" aria-expanded="false">
              <span>
                <i class="ti ti-category"></i>
              </span>
              <span class="hide-menu">Kategori retribusi</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('wajib.index')}}" aria-expanded="false">
              <span>
                <i class="ti ti-cards"></i>
              </span>
              <span class="hide-menu">Wajib retribusi</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('kapalku.index') }}" aria-expanded="false">
              <span>
                <i class="ti ti-file-description"></i>
              </span>
              <span class="hide-menu">kapal wajib retribusi</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('pembayaran.index') }}" aria-expanded="false">
              <span>
                <i class="ti ti-typography"></i>
              </span>
              <span class="hide-menu">pembayaran retribusi</span>
            </a>

          </li>
          <li class="nav-small-cap">
            <i class="ti ti-star"></i>
            <span class="hide-menu">laporan</span>

          <li class="sidebar-item">
            <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
              <span>
                <i class="ti ti-user-plus"></i>
              </span>
              <span class="hide-menu">retribusi</span>
            </a>
            <li class="sidebar-item">
                <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-mood-angry"></i>
                  </span>
                  <span class="hide-menu">belum membayar
                    <p>retribusi</p></span>
                </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('logout')}}" aria-expanded="false">
                <span>

            @endif
            @if (auth()->user()->level == "karyawan")

          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('profil.index')}}" aria-expanded="false">
              <span>
                <i class="ti ti-user"></i>
              </span>
              <span class="hide-menu">profil</span>
            </a>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('kategori.index') }}" aria-expanded="false">
              <span>
                <i class="ti ti-wallet"></i>
              </span>
              <span class="hide-menu">kategori retribusi</span>
            </a>

          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('kapalku1.index') }}" aria-expanded="false">
              <span>
                <i class="ti ti-ship"></i>
              </span>
              <span class="hide-menu">Kapalku</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('kapalRetribusi.index') }}" aria-expanded="false">
              <span>
                <i class="ti ti-cards"></i>
              </span>
              <span class="hide-menu">kapal Wajib
                <p> retribusi</p></span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('KonfirmasiPembayran.index') }}" aria-expanded="false">
              <span>
                <i class="ti ti-file-description"></i>
              </span>
              <span class="hide-menu">konfirmasi pembayaran
                   <p> retribusi</p></span>
            </a>
          <li class="nav-small-cap">
            <i class="ti ti-report"></i>
            <span class="hide-menu">laporan</span>

          {{-- <li class="sidebar-item">
            <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
              <span>
                <i class="ti ti-user-plus"></i>
              </span>
              <span class="hide-menu">retribusi</span>
            </a>
            <li class="sidebar-item">
                <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-mood-angry"></i>
                  </span>
                  <span class="hide-menu">belum membayar retribusi</span>
                </a> --}}

            @endif

        </div>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>

