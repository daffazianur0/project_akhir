@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Kategori</div>
                </div>
                <form action="{{ route('kapal.store') }}" method="post">
                    @csrf

                    <div class="card-body">

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="nama">Nama Kapal</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('nama_kapal') is-invalid @enderror"
                                    name="nama_kapal" value="{{ old('nama_kapal') }}">
                                <div class="invalid-feedback">
                                    @error('nama_kapal')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="jenis_kapal">Jenis Kapal</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control @error('id_jenis_kapal') is-invalid @enderror"
                                    name="id_jenis_kapal">
                                    @foreach ($jenisKapal as $item)
                                        <option value="{{ $item->id }}">{{ $item->jenis_kapal }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    @error('id_jenis_kapal')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="nama">Ukuran</label>
                            </div>
                            <div class="col-md-3">
                                <input type="number" class="form-control @error('nama_kapal') is-invalid @enderror"
                                    name="ukuran" value="{{ old('ukuran') }}">
                                <div class="invalid-feedback">
                                    @error('ukuran')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer text-end">
                        <a class="btn btn-secondary btn-sm" href="{{ route('kapal.index') }}">Kembali</a>
                        <button class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
