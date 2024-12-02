
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
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="table-container p-3">
                                <!-- Search & Add Button -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="input-group" style="width: 300px;">
                                        <span class="input-group-text" id="search-label">Search:</span>
                                        <input type="text" id="search-input" class="form-control" placeholder="Search"
                                            aria-label="Search" aria-describedby="search-label">
                                    </div>
                                </div>

                                <!-- Table -->
                                <table class="table table-bordered" id="data-table">
                                    <thead class="table-light">
                                        <tr>
                                        <th style="width: 50px;">No.</th>
                                            <th>Nama kapal</th>
                                            <th>nilai retribusi</th>
                                            <th>tanggal pembayaran</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kapals as $key => $kapal)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $kapal->nama_kapal }}</td>
                                            <td>Rp
                                                {{ number_format($kapal->jenisKapal->biaya_retribusi, 0, ',', '.') ?? 'Tidak ada biaya' }}
                                            </td>
                                            <td>{{ $kapal->created_at->format('d F Y') }}</td>
                                        </tr>
                                        <!-- Repeat rows as needed -->
                                    </tbody>
                                    @endforeach
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
