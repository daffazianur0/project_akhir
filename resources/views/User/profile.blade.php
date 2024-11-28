
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

                <div class="row">
                    <div class="col-lg-100 d-flex align-items-stretch">
                        <div class="card w-100">

                    <!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>User Profile Form</title>
                                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                                {{-- <style>
                                    .form-container {
                                        max-width: 600px;
                                        margin: 20px auto;
                                        padding: 20px;
                                        border: 1px solid #ccc;
                                        border-radius: 8px;
                                        background-color: #f8f9fa;
                                    }
                                    .form-group label {
                                        font-weight: bold;
                                    }
                                    .form-control {
                                        background-color: #e2edf7;
                                    }
                                </style> --}}
                            </head>
                            <body>

                            <div class="form-container">
                                <form method="POST" action="{{ route('profil.update', ['profil' => Auth::user()->id])}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" name="username" id="Username" value="{{ auth()->user()->name }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="hakAkses">Hak Akses</label>
                                            <input type="text" class="form-control" name="hakAkses" id="hakAkses" value="{{ auth()->user()->name }}" readonly>
                                        </div>
                                    </div>
                                    @foreach (auth()->user()->wajibRetribusi as $wajib)
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nik">NIK</label>
                                            <input type="text" class="form-control" name="nik" id="Nik" value="{{ $wajib->nik }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="namaLengkap">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="namaLengkap" id="Nama Lengkap" value="{{ $wajib->nama }}" >
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="telepon">Telepon</label>
                                            <input type="text" class="form-control" name="telepon" id="telepon" value="{{ $wajib->no_hp }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $wajib->alamat }}">
                                        </div>
                                    </div>
                                    @endforeach
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                </form>

                                            <!-- Display Alert Messages -->
                                @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('Profile.updatePassword', ['Profile' => Auth::user()->id]) }}">
                                @csrf
                                @method('PUT')

                                <!-- Password Lama -->
                                <div class="form-group">
                                    <label for="passwordLama">Password Lama</label>
                                    <input type="password" name="passwordLama" id="passwordLama" class="form-control" required>
                                </div>

                                <!-- Password Baru -->
                                <div class="form-group">
                                    <label for="passwordBaru">Password Baru</label>
                                    <input type="password" name="passwordBaru" id="passwordBaru" class="form-control" required>
                                </div>

                                <!-- Konfirmasi Password Baru -->
                                <div class="form-group">
                                    <label for="passwordBaru_confirmation">Konfirmasi Password Baru</label>
                                    <input type="password" name="passwordBaru_confirmation" id="passwordBaru_confirmation" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                            </form>
                        </div>

                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
                            </body>
                                {{-- @endif --}}
                            </html>


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
