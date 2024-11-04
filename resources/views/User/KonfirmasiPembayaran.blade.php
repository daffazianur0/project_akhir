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
                                <meta http-equiv="X-UA-Compatible="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Payment Form</title>
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
                            </head>
                            <body style="background-color: #e0e0e0;">
                                <div class="container mt-5">
                                    <div class="p-4 bg-white rounded shadow-sm">
                                        <form>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="jenisBank" class="form-label">Jenis Bank</label>
                                                    <select id="jenisBank" class="form-select">
                                                        <option>Pilih</option>
                                                        <!-- Add more options here -->
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="nominalTransfer" class="form-label">Nominal Transfer</label>
                                                    <input type="text" id="nominalTransfer" class="form-control" value="Rp. 1.000.000" readonly>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label for="nomorRekening" class="form-label">Nomor Rekening</label>
                                                    <select id="nomorRekening" class="form-select">
                                                        <option>Pilih</option>
                                                        <!-- Add more options here -->
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="buktiPembayaran" class="form-label">Bukti Pembayaran</label>
                                                    <div class="input-group">
                                                        <input type="file" id="buktiPembayaran" class="form-control">
                                                        <button class="btn btn-secondary" type="button">Browse</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary">Kirim</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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