
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
                    <div class="col-lg-100 d-flex align-items-stretch">
                        <div class="card w-100">

                            <div class="table-container">
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="btn btn-primary btn-add">Tambah Data</button>
                                    <div class="input-group" style="width: 200px;">
                                        <span class="input-group-text">Search:</span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>

                                <table class="table table-bordered mt-3">
                                    <thead class="table-light">
                                        <tr>
                                        <th style="width: 50px;">No.</th>
                                          <th>kategori retribusi</th>
                                             <th style="width: 150px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>kategori retribusi 1</td>

                                            <td>
                                                <button class="btn btn-primary btn-sm">Ubah</button>
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                            </td>
                                        </tr>
                                        <!-- Repeat rows as needed -->
                                    </tbody>
                                </table>
                            </div>

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
