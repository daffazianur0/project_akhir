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
                            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Telepon -->
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Telepon</label>
                        <div class="col-sm-9">
                            <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp') }}" required>
                            @error('no_hp')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- NIK -->
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                            <input type="text" name="nik" class="form-control" value="{{ old('nik') }}" required>
                            @error('nik')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}" required>
                            @error('alamat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Kelurahan -->
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="id_kelurahan">Kelurahan</label>
                        <div class="col-sm-9">
                            <select name="id_kelurahan" id="id_kelurahan" class="form-select" required>
                                <option value="">-- Pilih Kelurahan --</option>
                                @foreach ($kelurahan as $data)
                                    <option value="{{ $data->id }}" {{ old('id_kelurahan') == $data->id ? 'selected' : '' }}>
                                        {{ $data->nama_kelurahan }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id_kelurahan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="status">Status</label>
                        <div class="col-sm-9">
                            <select name="status" id="status" class="form-select" required>
                                <option value="">-- Pilih Status --</option>
                                <option value="A" {{ old('status') == 'A' ? 'selected' : '' }}>A - Aktif</option>
                                <option value="B" {{ old('status') == 'B' ? 'selected' : '' }}>B - Tidak Aktif</option>
                            </select>
                            @error('status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="card profile-card">
                            <div class="card-body">
                                <h5 class="card-title">akun Wajib Retribusi</h5>
                    <!-- Username -->
                    <div class="row mt-3">
                        <label class="col-sm-3 col-form-label"><b>Username</b></label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="row mt-3">
                        <label class="col-sm-3 col-form-label"><b>Email</b></label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="row mt-3">
                        <label class="col-sm-3 col-form-label"><b>Password</b></label>
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" value="{{ old('password') }}" required>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
