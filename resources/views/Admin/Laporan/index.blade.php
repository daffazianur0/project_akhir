<!doctype html>
<html lang="en">

<head>
    @include('Template.head')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('Template.left-sidebar')
        <div class="body-wrapper">
            <header class="app-header">
                @include('Template.navbar')
            </header>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">FORM CARI LAPORAN</div>
                    </div>
                    <form action="" method="get">
                        @csrf
                        <div class="card-body">
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label for="nama">TANGGAL AWAL</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="date" class="form-control @error('tanggal_awal') is-invalid @enderror"
                                        name="tanggal_awal" value="{{ old('tanggal_awal', now()->startOfMonth()->toDateString()) }}">
                                    <div class="invalid-feedback">
                                        @error('tanggal_awal') {{ $message }} @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label for="nama">TANGGAL AKHIR</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="date" class="form-control @error('tanggal_akhir') is-invalid @enderror"
                                        name="tanggal_akhir" value="{{ old('tanggal_awal', now()->toDateString()) }}">
                                    <div class="invalid-feedback">
                                        @error('tanggal_akhir') {{ $message }} @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary btn-sm">cari data</button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Laporan Pembayaran Retribusi</h5>
                                <hr>
                                <div class="table-responsive table-bordered">
                                    <table class="table text-nowrap align-middle mb-0 table-striped" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No.</th>
                                                <th class="text-center">Nama Wajib Retribusi</th>
                                                <th class="text-center">Tanggal Bayar</th>
                                                <th class="text-center">Nominal Total Retribusi</th>
                                                <th class="text-center">Bank</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($pembayaran as $data)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center">{{ $data->nama_rekening }}</td>
                                                    <td class="text-center">{{ $data->tgl_bayar }}</td>
                                                    <td class="text-center">Rp {{ number_format($data->nominal_transfer, 2, ',', '.') }}</td>
                                                    <td class="text-center">{{ $data->refBank->nama_bank }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">Tidak ada data pembayaran.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('Template.footer')
            </div>
        </div>
        @include('Template.script')

        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable({
                    language: {
                        search: "Cari:",
                        lengthMenu: "Tampilkan _MENU_ entri",
                        info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                        infoEmpty: "Tidak ada data tersedia",
                        zeroRecords: "Tidak ada data ditemukan",
                        paginate: {
                            first: "Awal",
                            last: "Akhir",
                            next: "Berikutnya",
                            previous: "Sebelumnya"
                        }
                    }
                });
            });
        </script>
        @if (session('success'))
            <script>
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif
    </div>
</body>

</html>
