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

        <!-- Sidebar -->
        @include('Template.left-sidebar')
        {{-- @dd($kapals) --}}

        <!-- Main Wrapper -->
        <div class="body-wrapper">
            <header class="app-header">
                @include('Template.navbar')
            </header>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="table-container mt-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('kapalku.create') }}" class="btn btn-primary btn-add">Tambah Data</a>
                                </div>

                                <table class="table table-bordered mt-5" id="kapalTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="text-center" style="width: 5%;">No</th>
                                            <th class="text-center" style="width: 25%;">Nama</th>
                                            <th class="text-center" style="width: 25%;">Jenis Kapal</th>
                                            <th class="text-center" style="width: 20%;">Ukuran</th>
                                            <th class="text-center" style="width: 25%;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kapals as $index => $data)
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            <td class="text-center">{{ $data->nama_kapal }}</td>
                                            <td class="text-center">{{ $data->jenisKapal->jenis_kapal }}</td>
                                            <td class="text-center">{{ $data->ukuran }}</td>
                                            <td class="text-center">
                                                <!-- Edit Button -->
                                                <a href="" class="btn btn-primary btn-sm m-1">Ubah</a>

                                                <!-- Delete Button -->
                                                <form action="" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm m-1"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                        Hapus
                                                    </button>
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
                @include('Template.footer')
            </div>
        </div>
    </div>

    @include('Template.script')

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#kapalTable').DataTable({
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
</body>

</html>
