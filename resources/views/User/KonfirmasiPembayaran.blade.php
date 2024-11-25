<!doctype html>
<html lang="en">

<head>
    @include('Template.head')
    <style>
        .form-control,
        .form-select {
            background: #e4e7ea;
            color: #3a4752;
        }
    </style>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6">
        <!-- Sidebar -->
        @include('Template.left-sidebar')

        <div class="body-wrapper">
            <!-- Header -->
            <header class="app-header">
                @include('Template.navbar')
            </header>

            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card profile-card">
                            <div class="card-body">
                                <h5 class="card-title">Konfirmasi Pembayaran Retribusi</h5>
                                <hr>

                                <!-- Menampilkan pesan error -->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('KonfirmasiPembayaran.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="id_ref_bank" class="col-sm-3 col-form-label">Jenis Bank</label>
                                        <div class="col-sm-9">
                                            <select name="id_ref_bank" class="form-select" id="choices">
                                                @foreach ($banks as $bank)
                                                    <option value="{{ $bank->id }}">{{ $bank->nama_bank }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="nominal_transfer">Nominal Transfer:</label>
                                            <input type="number" id="nominal_transfer" name="nominal_transfer" class="form-control" required>
                                          </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Nominal Transfer</label>
                                        <select id="id_ms_rekening" name="id_ms_rekening" class="form-control" required>
                                            <option value="">Pilih Rekening</option>
                                            @foreach ($msRekenings as $rekening)
                                            <option value="{{ $rekening->id }}" {{ old('id_ms_rekening') == $rekening->id ? 'selected' : '' }}>
                                              {{ $rekening->no_rekening }} ({{ $rekening->nama_akun }})
                                            </option>
                                            @endforeach
                                          </select>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Bukti Pembayaran</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="file_bukti" class="form-control" accept=".jpg,.jpeg,.png,.pdf" required>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-4">Konfirmasi Pembayaran</button>
                                </form>


            @include('Template.footer')
        </div>
    </div>
    @include('Template.script')


</body>

</html>
