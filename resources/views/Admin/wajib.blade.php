
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
                  <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                  </div>
                  <div class="col">
                    <div class="card">
                      <div class="card-body">
                        @if (auth()->user()->level == 'admin')
                                    <h5 class="card-title">Wajib Retribusi</h5>
                                    <hr>
                                @endif
                                @if (auth()->user()->level == 'karyawan')
                                    <h5 class="card-title">Kapalku</h5>
                                    <hr>
                                @endif
                        <div class="d-flex justify-content-between mb-2">
                          <a href="{{ route('wajib.create') }}" class="btn btn-primary">Tambah Data</a>
                          <input type="text" id="searchInput" class="form-control w-25" placeholder="Cari...">
                        </div>
                        @if (auth()->user()->level == 'admin')
                        {{-- <div class="table-responsive table-bordered"> --}}
                          <table class="table text-nowrap align-middle mb-0 table-striped" id="dataTable">
                            <thead>
                              <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col" class="text-center">No.</th>
                                <th scope="col" class="text-center">Nama Lengkap</th>
                                <th scope="col" class="text-center">Telepon</th>
                                <th scope="col" class="text-center">Nik</th>
                                <th scope="col" class="text-center">Alamat</th>
                                <th scope="col" class="text-center">Kelurahan</th>
                                <th scope="col" class="text-center">Aksi</th>
                              </tr>
                            </thead>
                            <tbody class="table-group-divider">
                              @foreach ($wajibRetribusi as $index => $data)
                                <tr>
                                  <td>{{ $index + 1 }}</td>
                                  <td>{{ $data->nama }}</td>
                                  <td>{{ $data->no_hp }}</td>
                                  <td>{{ $data->nik }}</td>
                                  <td>{{ $data->alamat }}</td>
                                  <td>{{ $data->kelurahan->nama_kelurahan }}</td>
                                  <td class="text-center">
                                    <a href="{{ route('wajib.edit', $data->id) }}" class="btn btn-primary btn-sm m-1">Ubah</a>
                                    <form action="{{ route('wajib.destroy', $data->id) }}" method="POST" style="display:inline;">
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
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                </div>
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
                const cells = row.querySelectorAll('td');
                const rowText = Array.from(cells).map(cell => cell.textContent.toLowerCase()).join(' ');
                row.style.display = rowText.includes(filter) ? '' : 'none';
            });
        });
    </script>
</body>

</html>
