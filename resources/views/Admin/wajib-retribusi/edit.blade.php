<!doctype html>
<html lang="en">

<head>
    @include('Template.head')
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" onclick="window.history.back();">
                    <iconify-icon icon="tabler:arrow-back-up" class="fs-4"></iconify-icon>
                    <span class="btn btn-primary mt-4">Kembali</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card profile-card">
                    <div class="card-body">
                        <h5 class="card-title">Ubah Rekening Pembayaran</h5>
                        <hr>
                        <form action="{{ route('wajib.update', $wajibretribusi->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama" class="form-control" value="{{ $wajibretribusi->nama }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nomor HP</label>
                                <div class="col-sm-9">
                                    <input type="text" name="no_hp" class="form-control" value="{{ $wajibretribusi->no_hp }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">NIK</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nik" class="form-control" value="{{ $wajibretribusi->nik }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" name="alamat" class="form-control" value="{{ $wajibretribusi->alamat }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="id_kelurahan">Kelurahan</label>
                                <div class="col-sm-9">
                                    <select name="id_kelurahan" id="id_kelurahan" class="form-select" required>
                                        @foreach ($kelurahan as $data)
                                            <option value="{{ $data->id }}" {{ $data->id == $wajibretribusi->id_kelurahan ? 'selected' : '' }}>
                                                {{ $data->nama_kelurahan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="status">Status</label>
                                <div class="col-sm-9">
                                    <select name="status" id="status" class="form-select" required>
                                        <option value="">-- Pilih Status --</option>
                                        <option value="A" {{ $wajibretribusi->status == 'A' ? 'selected' : '' }}>A - Aktif</option>
                                        <option value="B" {{ $wajibretribusi->status == 'B' ? 'selected' : '' }}>B - Tidak Aktif</option>
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

    @include('Template.footer')
    @include('Template.script')

</body>

</html>
