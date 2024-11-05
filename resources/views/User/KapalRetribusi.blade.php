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
    
                <div class="row">
                    <div class="col-lg-100 d-flex align-items-stretch">
                        <div class="card w-100">

                            <div class="container my-4 container-custom">
                                <div class="d-flex justify-content-between mb-3">
                                    <button class="btn btn-primary btn-custom">Tambah Data</button>
                                    <div class="form-inline">
                                        <label for="search" class="mr-2">Search:</label>
                                        <input type="text" class="form-control" id="search" placeholder="Type to search...">
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>No.</th>
                                            <th>Kategori Retribusi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Kategori Retribusi 1</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary">Ubah</button>
                                                <button class="btn btn-sm btn-danger">Hapus</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> 
                            

                            

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