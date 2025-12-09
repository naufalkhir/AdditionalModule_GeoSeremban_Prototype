@extends('layouts.app')
@section('title', 'Penyelenggaraan Aset')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header text-center fw-bold">
                        PENYELENGGARAAN ASET
                    </div>
                    <div class="card-body">
                        <div class="row g-4">

                            <div class="col-lg-6">
                                <h5 class="mb-3">Maklumat Kerja Selenggara</h5>
                                <form class="row g-3">

                                    {{-- Kategori aset --}}
                                    <div class="col-12">
                                        <label class="form-label">Kategori aset</label>
                                        <select class="form-select">
                                            <option value="">-- Pilih kategori --</option>
                                            <option value="jalan">Jalan raya</option>
                                            <option value="jambatan">Jambatan</option>
                                            <option value="saliran">Saliran / longkang</option>
                                            <option value="lampu">Lampu jalan</option>
                                            <option value="lain">Lain-lain</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">ID aset</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Jenis kerja selenggara</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Tarikh kerja</label>
                                        <input type="date" class="form-control">
                                    </div>

                                    {{-- Dokumen sokongan --}}
                                    <div class="col-12">
                                        <label class="form-label">Dokumen sokongan</label>
                                        <input type="file" class="form-control border-primary">
                                        <div class="form-text">
                                            Contoh: borang aduan, laporan pemeriksaan.
                                        </div>
                                    </div>

                                    {{-- Lampiran pelan --}}
                                    <div class="col-12">
                                        <label class="form-label">Muat Naik Lampiran Pelan</label>
                                        <input type="file" class="form-control border-success">
                                        <div class="form-text">
                                            Shapefile / pelan lokasi kerja selenggara (demo).
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Catatan kerja</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>

                                    <div class="col-12 d-flex justify-content-between mt-3">
                                        <a href="{{ route('home') }}" class="btn btn-secondary">
                                            <i class="bi bi-arrow-left me-1"></i> Kembali
                                        </a>

                                        <div>
                                            <button type="button" class="btn btn-success me-2">
                                                <i class="bi bi-save me-1"></i> Simpan
                                            </button>

                                            <button type="button" class="btn btn-outline-primary">
                                                <i class="bi bi-file-earmark-arrow-down me-1"></i> Muat Turun Sijil
                                            </button>
                                        </div>
                                    </div>


                                </form>
                            </div>

                            <div class="col-lg-6 d-flex flex-column">
                                <h6 class="text-center mb-2">Peta / Dashboard Penyelenggaraan</h6>
                                <div class="flex-grow-1"
                                    style="border-radius:1rem; overflow:hidden; border:2px solid #ccc; min-height:260px;">
                                    <iframe src="PASTE_ARCGIS_URL_FOR_PENYELENGGARAAN" width="100%" height="100%"
                                        style="border:0; display:block;" loading="lazy" allowfullscreen>
                                    </iframe>
                                </div>
                                <p class="small text-muted mt-2 mb-0">
                                    <strong>Demo:</strong> Paparan lokasi kerja selenggara.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
