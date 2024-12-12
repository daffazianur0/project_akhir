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
                            <div class="container">
                                <div class="page-inner">
                                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"></div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Rekening pembayaran Retribusi</h5>
                                                <hr>
                                                <div class="d-flex justify-content-between mb-2">
                                                    <a href="{{ route('rekening.create') }}" class="btn btn-primary">Tambah Data</a>
                                                </div>
                                                <div class="table-responsive table-bordered">
                                                    <table class="table table-border" id="datatables">
                                                        <thead class="table-light">
                                                            <tr class="border-2 border-bottom border-primary border-0">
                                                                <th style="width: 50px;">No.</th>
                                                                <th><center>Jenis Bank</center></th>
                                                                <th><center>Nama Pemilik</center></th>
                                                                <th><center>Nomor Rekening</center></th>
                                                                <th style="width: 190px;"><center>aksi</center></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($rekening as $index => $data)
                                                            <tr>
                                                                <td scope="col" class="text-center">{{ $index + 1 }}</td>
                                                                <td scope="col" class="text-center">{{ $data->refBank->nama_bank }}</td>
                                                                <td scope="col" class="text-center">{{ $data->nama_akun }}</td>
                                                                <td scope="col" class="text-center">{{ $data->no_rekening }}</td>
                                                                <td scope="col" class="text-center">
                                                                    <a href="{{ route('rekening.edit', $data->id) }}"
                                                                        class="btn btn-primary btn-sm m-1">Ubah</a>
                                                                    <form action="{{ route('rekening.destroy', $data->id) }}"
                                                                        method="POST" style="display:inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger btn-sm m-1"
                                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> <!-- End Card -->
                                        </div> <!-- End Column -->
                                    </div> <!-- End Row 1 -->
                                </div>
                            </div>
                        </div>

                        @include('Template.footer')
                    </div> <!-- End Container Fluid -->
                </div> <!-- End Body Wrapper -->
            </div> <!-- End Page Wrapper -->

        @include('Template.script')

        <!-- Script untuk fitur search -->
        <script>
            $(document).ready(function () {
                $('#datatables').DataTable();
            });
        </script>

        <!-- Search Filter Script -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const searchInput = document.getElementById('searchInput');
                const table = document.getElementById('datatables');
                const rows = table.querySelectorAll('tbody tr');

                searchInput.addEventListener('input', () => {
                    const filter = searchInput.value.toLowerCase();

                    rows.forEach(row => {
                        const cells = row.querySelectorAll('td');
                        let match = false;

                        cells.forEach(cell => {
                            if (cell.textContent.toLowerCase().includes(filter)) {
                                match = true;
                            }
                        });

                        row.style.display = match ? '' : 'none';
                    });
                });
            });
        </script>
</body>

</html>
