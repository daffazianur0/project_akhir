<!doctype html>
<html lang="en">

<head>
    @include('Template.head')
</head>

<body>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar -->
        @include('Template.left-sidebar')

        <!-- Main Wrapper -->
        <div class="body-wrapper">
            <!-- Header -->
            <header class="app-header">
                @include('Template.navbar')
            </header>

            <div class="container-fluid">
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="table-container p-3">
                                <!-- Search & Add Button -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <button class="btn btn-primary btn-add">Tambah Data</button>
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
                                            <th>Nama Lengkap</th>
                                            <th>Rekening</th>
                                            <th>Bukti</th>
                                            <th>Tanggal Bayar</th>
                                            <th>Tanggal Tindak Lanjut</th>
                                            <th>Tindak Lanjut User</th>
                                            <th style="width: 150px;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pembayaran as $data)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $data->nama_rekening }}</td>
                                            <td class="text-center">{{ $data->no_rekening }}</td>
                                            <td class="text-center">
                                                @if ($data->file_bukti)
                                                <img src="{{ asset('storage/' . $data->file_bukti) }}" alt="Bukti Pembayaran"
                                                    class="rounded img-fluid" style="max-width: 80px;">
                                                @else
                                                <span class="text-muted">No Image Available</span>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $data->created_at->format('d-m-Y') }}</td>
                                            <td class="text-center">{{ $data->tanggal_tindak_lanjut ?? 'Belum Ditindak' }}</td>
                                            <td class="text-center">{{ $data->tindak_lanjut_user ?? 'Belum Ada' }}</td>
                                            <td class="text-center">
                                                @if ($data->status === 'Y')
                                                    <span class="badge bg-success">Sesuai</span>
                                                @elseif ($data->status === 'N')
                                                    <span class="badge bg-danger">Tidak Sesuai</span>
                                                @else
                                                
                                                <form action="{{ route('konfirmasi-bayar.update-status', $data->id) }}" method="POST" class="d-flex justify-content-start">
                                                    @csrf

                                                    <button type="submit" name="status" value="sesuai" class="btn btn-success btn-sm me-2">Sesuai</button>
                                                    <button type="submit" name="status" value="tidak_sesuai" class="btn btn-danger btn-sm">Tidak Sesuai</button>
                                                </form>

                                                @endif

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- End Card -->
                    </div> <!-- End Column -->
                </div> <!-- End Row -->
            </div> <!-- End Container Fluid -->

            @include('Template.footer')
        </div> <!-- End Body Wrapper -->
    </div> <!-- End Page Wrapper -->

    @include('Template.script')

    <script>
        // JavaScript Search Functionality
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('search-input');
            if (searchInput) {
                searchInput.addEventListener('input', function () {
                    const filter = this.value.toLowerCase();
                    const rows = document.querySelectorAll('#data-table tbody tr');

                    rows.forEach(row => {
                        const rowText = row.textContent.toLowerCase();
                        row.style.display = rowText.includes(filter) ? '' : 'none';
                    });
                });
            }
        });
    </script>
</body>

</html>
