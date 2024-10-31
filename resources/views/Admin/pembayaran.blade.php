
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

                            <!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Data Table</title>
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
                                <style>
                                    .container {
                                        max-width: 900px;
                                        margin: auto;
                                        padding: 20px;
                                        background-color: #f8f9fa;
                                        border-radius: 8px;
                                        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                                    }
                                    .btn-tambah {
                                        background-color: #007bff;
                                        color: #fff;
                                        margin-bottom: 10px;
                                    }
                                    .form-control {
                                        background-color: #dceaf2;
                                    }
                                    .btn-yes {
                                        background-color: #28a745;
                                        color: white;
                                    }
                                    .btn-no {
                                        background-color: #dc3545;
                                        color: white;
                                    }
                                </style>
                            </head>
                            <body>
                            
                            <div class="container">
                                <div class="d-flex justify-content-between mb-3">
                                    <button class="btn btn-tambah">Tambah Data</button>
                                    <div class="input-group" style="max-width: 200px;">
                                        <span class="input-group-text">Search:</span>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Lengkap</th>
                                            <th>Rekening</th>
                                            <th>Bukti</th>
                                            <th>Tanggal Bayar</th>
                                            <th>Tanggal Tindak Lanjut</th>
                                            <th>Tindak Lanjut User</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Arul Rachman</td>
                                            <td>3254357572725</td>
                                            <td><img src="path/to/image.jpg" alt="Bukti" width="50" height="50"></td>
                                            <td>3254357572725</td>
                                            <td>15 Oktober 2024</td>
                                            <td>Admin</td>
                                            <td>
                                                <button class="btn btn-yes">Sesuai</button>
                                                <button class="btn btn-no">Tidak Sesuai</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                            </body>
                            </html>
                            
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
