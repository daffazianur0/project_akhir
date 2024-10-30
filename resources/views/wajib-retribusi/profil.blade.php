<!doctype html>
<html lang="en">

<head>
    @include('Template.head')
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('Template.left-sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        @include('Template.navbar')
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->

        <div class="row">
          <div class="col-sm-6 col-xl-4">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
              </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">jumlah sudah bayar</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">50 <span class="ms-2 fw-normal text-muted fs-3"></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-xl-4">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
              </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">jumlah belum bayar</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">$650 <span class="ms-2 fw-normal text-muted fs-3"></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-xl-4">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
              </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">jumlah pemasukan</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">$150 <span class="ms-2 fw-normal text-muted fs-3">web</span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>


          {{-- </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="../assets/images/products/s11.jpg" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">$285 <span class="ms-2 fw-normal text-muted fs-3"><del>$345</del></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
        @include('Template.footer')
      </div>
    </div>
  </div>
  @include('Template.script')
</body>

</html>
