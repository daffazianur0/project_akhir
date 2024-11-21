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

            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"></div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Kategori Retribusi</h5>
                                <hr>
                                <div class="d-flex justify-content-between mb-2">
                                    @if (auth()->user()->level == 'admin')
                                    <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Data</a>
                                    @endif
                                    <input type="text" id="searchInput" class="form-control w-25" placeholder="Cari...">
                                </div>
                                <table class="table table-bordered mt-2" id="dataTable">
                                    <thead>
                                        <tr class="border-2 border-bottom border-primary border-0">
                                            <th style="width: 50px;">No.</th>
                                            <th><center>Kategori Retribusi</center></th>
                                            @if (auth()->user()->level == 'admin')
                                            <th style="width: 200px;">Aksi</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kategori as $index => $data)
                                        <tr>
                                            <td scope="col" class="text-center">{{ $index + 1 }}.</td>
                                            <td scope="col" class="text-center">{{ $data->kategori }}</td>
                                            @if (auth()->user()->level == 'admin')
                                            <td scope="col" class="text-center">
                                                <a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-primary btn-sm m-1">Ubah</a>
                                                <form action="{{ route('kategori.destroy', $data->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm m-1" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                </form>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
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

    <!-- Script untuk fitur search -->
    <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll('#dataTable tbody tr');
            rows.forEach(row => {
                const rowText = row.textContent.toLowerCase();
                row.style.display = rowText.includes(filter) ? '' : 'none';
            });
        });
    </script>
</body>

</html>
