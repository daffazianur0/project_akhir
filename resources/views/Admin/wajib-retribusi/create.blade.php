<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" onclick="window.history.back();">
                <button type="button" class="btn btn-primary">Kembali</button>
            </a>
        </li>
    </ul>

    <div class="col">
        <div class="card profile-card">
            <div class="card-body">
                <h5 class="card-title">Tambah Wajib Retribusi</h5>
                <hr>
                <form action="{{ route('wajib.store') }}" method="POST">
                    @csrf

                    <!-- Nama Lengkap -->
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Telepon -->
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Telepon</label>
                        <div class="col-sm-9">
                            <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp') }}">
                            @if ($errors->has('no_hp'))
                            <span class="text-danger">{{ $errors->first('no_hp') }}</span>
                        @endif

                        </div>
                    </div>

                    <!-- NIK -->
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                            <input type="text" name="nik" class="form-control" value="{{ old('nik') }}">
                            @error('nik')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}">
                            @error('alamat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Kelurahan -->
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="id_kelurahan">Kelurahan</label>
                        <div class="col-sm-9">
                            <select name="id_kelurahan" id="id_kelurahan" class="form-select">
                                @foreach ($kelurahan as $data)
                                    <option value="{{ $data->id }}" {{ old('id_kelurahan') == $data->id ? 'selected' : '' }}>
                                        {{ $data->nama_kelurahan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <!-- Status -->
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="status">Status</label>
                        <div class="col-sm-9">
                            <select name="status" id="status" class="form-select">
                                <option value="">-- Pilih Status --</option>
                                <option value="A" {{ old('status') == 'A' ? 'selected' : '' }}>A - Aktif</option>
                                <option value="B" {{ old('status') == 'B' ? 'selected' : '' }}>B - Tidak Aktif</option>
                            </select>
                        </div>
                    </div>



                    <h5 class="fw-bold mt-5">Akun Wajib Retribusi</h5>

                    <!-- Username -->
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <label for="name"><b>Username</b></label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}">
                            <div class="invalid-feedback">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <label for="email"><b>Email</b></label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}">
                            <div class="invalid-feedback">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <label for="password"><b>Password</b></label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control @error('password') is-invalid @enderror"
                                name="password" value="{{ old('password') }}">
                            <div class="invalid-feedback">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="card-footer text-end">
                        <a class="btn btn-secondary btn-sm" href="{{ route('wajib.index') }}">Kembali</a>
                        <button class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
