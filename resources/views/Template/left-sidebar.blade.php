<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
          <img src="{{ asset('Modernnize/src/assets/images/logos/dark-logo.svg')}}" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-home nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./index.html" aria-expanded="false">
              <span>
                <i class="ti ti-home"></i>
              </span>
              <span class="hide-menu">beranda</span>
            </a>

          <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
              <span>
                <i class="ti ti-wallet"></i>
              </span>
              <span class="hide-menu">Rekening pembayaran
                retribusi</span>
            </a>

          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
              <span>
                <i class="ti ti-alert-circle"></i>
              </span>
              <span class="hide-menu">Kategori retribusi</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
              <span>
                <i class="ti ti-cards"></i>
              </span>
              <span class="hide-menu">Wajib retribusi</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
              <span>
                <i class="ti ti-file-description"></i>
              </span>
              <span class="hide-menu">kapal wajib retribusi</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
              <span>
                <i class="ti ti-typography"></i>
              </span>
              <span class="hide-menu">pembayaran retribusi</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
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
                    <i class="ti ti-mood-happy"></i>
                  </span>
                  <span class="hide-menu">belum membayar retribusi</span>
                </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('logout')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-logout"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
