
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

                            <div class="table-container">
                                @if (auth()->user()->level == 'admin')
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route("kategori.create")}}">
                                    <button class="btn btn-primary btn-add">Tambah Data</button>
                                    <div class="input-group" style="left: 675px;">
                                        <span class="input-group-text">Search:</span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                                @endif
                                <table class="table table-bordered mt-3">
                                    <thead class="table-light">
                                        <tr>
                                        <th style="width: 50px;">No.</th>
                                            <th><center>kategori retribusi</center></th>

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
                                                      <a href="{{ route('kategori.edit', $data->id) }}"
                                                          class="btn btn-primary btn-sm m-1">Ubah</a>

                                                      <form action="{{ route('kategori.destroy', $data->id) }}"
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
                                        <!-- Repeat rows as needed -->
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
</body>

</html>
