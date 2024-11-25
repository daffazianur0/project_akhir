<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.head')
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">

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
                            <h5 class="card-title">Tambah wajib retribusi</h5>
                            <hr>
                            <form action="{{ route('wajib.store') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_hp" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Nik</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nik" class="form-control">
                                        @error('nik')
                                            <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <div>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="alamat" class="form-control">
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label" for="id_kelurahan">Kelurahan</label>
                                    <div class="col-sm-9">
                                        <select name="id_kelurahan" id="id_kelurahan" class="form-select">
                                            @foreach ($kelurahan as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama_kelurahan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label" for="status">Status</label>
                                    <div class="col-sm-9">
                                        <select name="status" id="status" class="form-select" required>
                                            <option value="">-- Pilih Status --</option>
                                            <option value="A">A - Aktif</option>
                                            <option value="B">B - Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
    </div>
    </div>

</html>
