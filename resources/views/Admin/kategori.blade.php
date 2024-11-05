
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
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>UI Design</title>
                                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                     
                     <style>
                                    .container {
                                        background-color: #f8f9fa;
                                        border-radius: 10px;
                                        padding: 20px;
                                    }
                                    .action-buttons button {
                                        margin-right: 5px;
                                    }
                                </style>
                            </head>
                            <body>
                                <div class="container mt-5">
                                    <div class="d-flex justify-content-between mb-3">
                                        <button class="btn btn-primary">Tambah Data</button>
                                        <div class="form-inline">
                                            <label for="search" class="mr-2">Search:</label>
                                            <input type="text" id="search" class="form-control">
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
                                                <td class="action-buttons">
                                                    <button class="btn btn-sm btn-primary">Ubah</button>
                                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
                                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                            </body>
                            </html>
                            
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
