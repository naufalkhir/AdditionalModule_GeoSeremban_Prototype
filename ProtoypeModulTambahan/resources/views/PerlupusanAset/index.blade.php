@extends('layouts.app')
@section('title', 'Perlupusan Aset')

@section('content')
    @php
        $role = $role ?? request('role', 'pemohon'); // pemohon | penilai | pengesah
    @endphp

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header text-center fw-bold">
                        PERLUPUSAN ASET
                    </div>

                    <div class="card-body">
                        <div class="row g-4">

                            {{-- Borang kiri --}}
                            <div class="col-lg-6">
                                <h5 class="mb-3">
                                    @if ($role === 'pemohon')
                                        Maklumat Perlupusan (Pemohon)
                                    @elseif($role === 'penilai')
                                        Semakan Fizikal/Nilai (Penilai)
                                    @elseif($role === 'pengesah')
                                        Kelulusan Perlupusan (Pengesah)
                                    @endif
                                </h5>

                                <form class="row g-3">

                                    {{-- PEMOHON --}}
                                    @if ($role === 'pemohon')
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
                                            <label class="form-label">Sebab perlupusan</label>
                                            <input type="text" class="form-control"
                                                placeholder="Contoh: Rosak / tidak ekonomik dibaiki">
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Tarikh cadangan perlupusan</label>
                                            <input type="date" class="form-control">
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Dokumen sokongan</label>
                                            <input type="file" class="form-control border-primary">
                                            <div class="form-text">Contoh: laporan pemeriksaan, gambar aset, kelulusan
                                                dalaman.</div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Muat Naik Lampiran Pelan</label>
                                            <input type="file" class="form-control border-success">
                                            <div class="form-text">Shapefile / pelan lokasi aset (demo).</div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Catatan pemohon</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>

                                        {{-- PENILAI --}}
                                    @elseif($role === 'penilai')
                                        <div class="col-12">
                                            <label class="form-label">Status fizikal aset</label>
                                            <select class="form-select">
                                                <option value="">-- Pilih --</option>
                                                <option>Baik</option>
                                                <option>Rosak</option>
                                                <option>Tidak ekonomik dibaiki</option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Nilai baki anggaran (RM)</label>
                                            <input type="number" step="0.01" class="form-control">
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Cadangan penilai</label>
                                            <select class="form-select">
                                                <option value="">-- Pilih --</option>
                                                <option>Disyorkan untuk dilupus</option>
                                                <option>Perlu semakan lanjut</option>
                                                <option>Tidak disyorkan</option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Catatan penilai</label>
                                            <textarea class="form-control" rows="4"></textarea>
                                        </div>

                                        {{-- PENGESAH --}}
                                    @elseif($role === 'pengesah')
                                        <div class="col-12">
                                            <label class="form-label">Keputusan kelulusan</label>
                                            <select class="form-select">
                                                <option value="">-- Pilih --</option>
                                                <option>Lulus</option>
                                                <option>Tolak</option>
                                                <option>Kembali untuk semakan</option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Tarikh keputusan</label>
                                            <input type="date" class="form-control">
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">No. rujukan / sijil (demo)</label>
                                            <input type="text" class="form-control"
                                                placeholder="Contoh: MBS/PLP/2026/0001">
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Catatan pengesah</label>
                                            <textarea class="form-control" rows="4"></textarea>
                                        </div>
                                    @endif

                                    {{-- Buttons --}}
                                    <div class="col-12 d-flex justify-content-between mt-3">
                                        <a href="{{ route('home') }}" class="btn btn-secondary">
                                            <i class="bi bi-arrow-left me-1"></i> Kembali
                                        </a>

                                        <div>
                                            @if ($role === 'pemohon')
                                                <button type="button" class="btn btn-success me-2">
                                                    <i class="bi bi-save me-1"></i> Simpan
                                                </button>
                                                <button type="button" class="btn btn-primary">
                                                    <i class="bi bi-send me-1"></i> Hantar
                                                </button>
                                            @elseif($role === 'penilai')
                                                <button type="button" class="btn btn-success">
                                                    <i class="bi bi-check2-circle me-1"></i> Simpan Semakan
                                                </button>
                                            @elseif($role === 'pengesah')
                                                <button type="button" class="btn btn-success">
                                                    <i class="bi bi-shield-check me-1"></i> Sahkan Keputusan
                                                </button>
                                            @endif
                                        </div>
                                    </div>

                                </form>
                            </div>

                            {{-- Peta kanan --}}
                            <div class="col-lg-6 d-flex flex-column">
                                <h6 class="text-center mb-2">Peta</h6>

                                <div class="flex-grow-1"
                                    style="border-radius:1rem; overflow:hidden; border:2px solid #ccc; min-height:260px;">
                                    <iframe
                                        src="https://www.openstreetmap.org/export/embed.html?bbox=101.90,2.65,102.05,2.78&layer=mapnik"
                                        width="100%" height="100%" style="border:0; display:block;" loading="lazy"
                                        allowfullscreen>
                                    </iframe>
                                </div>

                                <p class="small text-muted mt-2 mb-0">
                                    <strong>Demo:</strong> Paparan peta/dashbord perlupusan (boleh tukar kepada iframe
                                    ArcGIS).
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
