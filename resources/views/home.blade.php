<!doctype html>
<html lang="en">

<head>
    @include('Template.head')
</head>

<body>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar Start -->
        @include('Template.left-sidebar')
        <!-- Sidebar End -->

        <!-- Main Wrapper -->
        <div class="body-wrapper">
            <!-- Header Start -->
            <header class="app-header">
                @include('Template.navbar')
            </header>
            <!-- Header End -->

            <div class="container-fluid">
                <!-- Row 1 -->

                            <div class="row">
                                <!-- Card 1 -->
                                <div class="col-sm-6 col-xl-4">
                                    <div class="card overflow-hidden rounded-2">
                                        <div class="card-body pt-3 p-4">
                                            <h6 class="fw-semibold fs-4">Jumlah Sudah Bayar</h6>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="fw-semibold fs-4 mb-0">{{ \App\Models\KonfirmasiBayar::count() }} <span class="ms-2 fw-normal text-muted fs-3"><del></del></span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div class="col-sm-6 col-xl-4">
                                    <div class="card overflow-hidden rounded-2">
                                        <div class="card-body pt-3 p-4">
                                            <h6 class="fw-semibold fs-4">Jumlah Belum Bayar</h6>
                                            <div class="d-flex align-items-center justify-content-between">

                                                <h6 class="fw-semibold fs-4 mb-0">650 <span class="ms-2 fw-normal text-muted fs-3"><del></del></span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div class="col-sm-6 col-xl-4">
                                    <div class="card overflow-hidden rounded-2">
                                        <div class="card-body pt-3 p-4">
                                            <h6 class="fw-semibold fs-4">Jumlah Pemasukan</h6>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="fw-semibold fs-4 mb-0">150 <span class="ms-2 fw-normal text-muted fs-3"><del></del></span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End Row -->
                        </div> <!-- End Card -->
                    </div> <!-- End Column -->
                </div> <!-- End Row 1 -->

                @include('Template.footer')
            </div> <!-- End Container Fluid -->
        </div> <!-- End Body Wrapper -->
    </div> <!-- End Page Wrapper -->

    @include('Template.script')
</body>

</html>
