
<!doctype html>
<html lang="en">

<head>
    @include('Template.head')
    <style>
        .form-control {
            background: #e4e7ea;
            color: #3a4752;
        }
    </style>
</head>

{{-- <body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6">

        <header class="app-header"> --}}

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

        </header>

        <div class="container-fluid">
            <div class="row">


                <div class="col">
                    <div class="card profile-card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah kategori Pembayaran</h5>
                            <hr>
                            <form action="{{ route('kategori.store') }}" method="POST">
                                @csrf

                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">kategori</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="kategori" class="form-control">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('Template.footer')
    </div>

    </script>
</body>

</html>
