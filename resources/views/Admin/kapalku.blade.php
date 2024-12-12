<!doctype html>
<html lang="en">

<head>
    @include('Template.head')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('Template.left-sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                @include('Template.navbar')
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="row">

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Kapal Wajib Retribusi</h5>
                                <hr>
                                @if (auth()->user()->level == 'admin')
                                    <div class="d-flex justify-content-between mb-2">
                                        <a href="{{ route('kapalku.create') }}" class="btn btn-primary">Tambah Data</a>
                                        <input type="text" id="searchInput" class="form-control w-25"
                                            placeholder="Cari...">
                                    </div>
                                @endif
                                <div class="table-responsive table-bordered">
                                    <table class="table table-border" id="datatables">
                                        <thead class="table-light">
                                            <tr class="border-2 border-bottom border-primary border-0">
                                                <th scope="col" class="text-center">No.</th>
                                                <th scope="col" class="text-center">Nama pemilik</th>
                                                <th scope="col" class="text-center">Nama kapal</th>
                                                <th scope="col" class="text-center">jenis kapal</th>
                                                <th scope="col" class="text-center">ukuran</th>

                                                @if (auth()->user()->level == 'admin')
                                                    <th scope="col" class="text-center">Aksi</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            @foreach ($kapal as $index => $data)
                                                <tr>
                                                    <td scope="col" class="text-center">{{ $index + 1 }}.</td>
                                                    <td scope="col" class="text-center">{{ $data->wajibRetribusi->nama ?? 'N/A' }}</td>
                                                    <td scope="col" class="text-center">{{ $data->nama_kapal }}</td>
                                                    <td scope="col" class="text-center">{{ $data->jenisKapal->jenis_kapal ?? 'N/A' }}</td>
                                                    <td scope="col" class="text-center">{{ $data->ukuran }}</td>

                                                    @if (auth()->user()->level == 'admin')
                                                        <td scope="col" class="text-center">
                                                            <a href="{{ route('kapalku.edit', $data->id) }}"
                                                                class="btn btn-primary btn-sm m-1">Ubah</a>

                                                            <form
                                                                action="{{ route('kapalku.destroy', $data->id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm m-1"
                                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                            </form>
                                                        </td>
                                                    @endif
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
