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
                            <div class="table-container">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <button class="btn btn-primary btn-add">Tambah Data</button>
                                    <div class="input-group" style="width: 200px;">
                                        <span class="input-group-text">Search:</span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>

                                <table class="table table-bordered">
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
                                    <tbody class="table-group-divider">
                                        @foreach($pembayaran as $data)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $data->nama_rekening }}</td>
                                                <td class="text-center">{{ $data->no_rekening }}</td>
                                                <td class="text-center">
                                                    @if ($data->file_bukti)
                                                        <img src="{{ asset('storage/' . $data->file_bukti) }}" class="rounded img-fluid" style="max-width: 80px;">
                                                    @else
                                                        <span>No Image Available</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">{{ $data->created_at->format('d-m-Y') }}</td>
                                                <td class="text-center">{{ $data->tanggal_tindak_lanjut ?? 'Belum Ditindak' }}</td>
                                                <td class="text-center">{{ $data->tindak_lanjut_user ?? 'Belum Ada' }}</td>
                                                <td class="text-center">
                                                    <a href="" class="btn btn-success btn-sm m-1">Sesuai</a>
                                                    <a href="" class="btn btn-danger btn-sm m-1">Tidak Sesuai</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- End Card -->
                    </div> <!-- End Column -->
                </div> <!-- End Row 1 -->
            </div> <!-- End Container Fluid -->

            @include('Template.footer')
        </div> <!-- End Body Wrapper -->
    </div> <!-- End Page Wrapper -->

    @include('Template.script')
</body>

</html>
