<!doctype html>
<html lang="en">

<head>
    @include('Template.head')
</head>

<body>
    <!-- Page Wrapper -->
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
                <!-- Row for Table and Actions -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card w-100">
                            <div class="table-container p-3">
                                <!-- Search & Add Button -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="input-group" style="width: 300px;">

                                    </div>
                                </div>

                                <!-- Table -->
                                <table class="table table-border" id="datatables">
                                    <thead class="table-light">
                                        <tr>
                                            <tr class="border-2 border-bottom border-primary border-0">
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Rekening</th>
                                            <th class="text-center">Bukti</th>
                                            <th class="text-center">Tanggal Bayar</th>
                                            <th class="text-center">Tanggal Tindak Lanjut</th>
                                            <th class="text-center">Tindak Lanjut User</th>
                                            <th style="width: 150px;" class="text-center">status</th>
                                            <th style="width: 150px;" class="text-center">Aksi</th>
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
                                            <td class="text-center">{{ $data->tindaklanjut_tgl }}</td>
                                            <td class="text-center">{{ $data->tindaklanjut_user }}</td>
                                            <td class="text-center"><span
                                                class="badge {{ $data->status == 'Y' ? 'bg-success' : ($data->status == 'N' ? 'bg-danger' : 'bg-warning') }}">
                                                {{ $data->status == 'Y' ? 'Sesuai' : ($data->status == 'N' ? 'Tidak Sesuai' : 'Menunggu divalidasi') }}
                                            </span>
                                        </td>
                                            <td class="text-center">
                                                <form action="{{ route('Konfirmasibayar.update-status', $data->id) }}"
                                                    method="POST" class="d-flex justify-content-center">
                                                    @csrf
                                                    @if ($data->status == 'P' || $data->status == 'N')
                                                        <button type="submit" name="status" value="Y"
                                                            class="btn btn-sm me-2 btn-success">
                                                            Sesuai
                                                        </button>
                                                    @endif
                                                    @if ($data->status == 'P' || $data->status == 'Y')
                                                        <button type="submit" name="status" value="N" class="btn btn-sm btn-danger">
                                                            Tidak Sesuai
                                                        </button>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
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

    <!-- DataTable Initialization -->
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
