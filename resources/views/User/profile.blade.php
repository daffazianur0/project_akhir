
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

                    <!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>User Profile Form</title>
                                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                                <style>
                                    .form-container {
                                        max-width: 600px;
                                        margin: 20px auto;
                                        padding: 20px;
                                        border: 1px solid #ccc;
                                        border-radius: 8px;
                                        background-color: #f8f9fa;
                                    }
                                    .form-group label {
                                        font-weight: bold;
                                    }
                                    .form-control {
                                        background-color: #e2edf7;
                                    }
                                </style>
                            </head>
                            <body>

                            <div class="form-container">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" value="arulrf_" readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="hakAkses">Hak Akses</label>
                                            <input type="text" class="form-control" id="hakAkses" value="Administrator" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nik">NIK</label>
                                            <input type="text" class="form-control" id="nik" value="3674938217278893" readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="namaLengkap">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="namaLengkap" value="Arul Rachman Faruqhy" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="telepon">Telepon</label>
                                            <input type="text" class="form-control" id="telepon" value="081234567890" readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" value="Ds. Kemantren" readonly>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="passwordLama">Password Lama</label>
                                            <input type="password" class="form-control" id="passwordLama">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="passwordBaru">Password Baru</label>
                                            <input type="password" class="form-control" id="passwordBaru">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="konfirmasiPasswordBaru">Konfirmasi Password Baru</label>
                                            <input type="password" class="form-control" id="konfirmasiPasswordBaru">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                </form>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
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
