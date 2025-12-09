@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <style>
        .module-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .module-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15) !important;
        }

        .module-card-icon {
            transition: transform 0.2s ease, filter 0.2s ease;
        }

        .module-card:hover .module-card-icon {
            transform: translateY(-4px) scale(1.12);
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.25));
        }

        /* Press effect on click */
        .module-card:active .module-card-icon {
            transform: scale(0.9);
            filter: none;
        }
    </style>

    <div class="container my-5">
        <div class="row g-4 justify-content-center">

            {{-- Modul 01 – Permohonan Aset --}}
            <div class="col-lg-5 col-md-6">
                <a href="{{ route('Aset-baharu.form') }}" class="text-decoration-none text-reset">
                    <div class="card border-0 shadow-lg rounded-4 h-100 overflow-hidden module-card"
                        style="min-height: 320px;">
                        <div class="card-body p-4 text-center"
                            style="background: linear-gradient(135deg, #f6b3df 0%, #e89bcf 100%); height: 140px; color: white;">
                            <div class="mb-2">
                                <i class="bi bi-plus-circle-fill fs-1 module-card-icon"
                                    style="text-shadow: 0 2px 4px rgba(0,0,0,0.2);"></i>
                            </div>
                            <div class="text-uppercase fw-bold small mb-1">Modul 01</div>
                        </div>

                        <div class="card-body p-4 pt-3 bg-white text-start">
                            <h5 class="fw-bold mb-2" style="text-decoration: underline 3px #f6b3df; color: #333;">
                                Permohonan Aset
                            </h5>
                            <p class="small text-muted mb-0">
                                Modul untuk memohon pendaftaran aset baharu berserta dokumen dan pelan GIS.
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Modul 02 – Pindaan Aset Infra --}}
            <div class="col-lg-5 col-md-6">
                <a href="{{ route('pindaan-aset.form') }}" class="text-decoration-none text-reset">
                    <div class="card border-0 shadow-lg rounded-4 h-100 overflow-hidden module-card"
                        style="min-height: 320px;">
                        <div class="card-body p-4 text-center"
                            style="background: linear-gradient(135deg, #f6c86a 0%, #f4b648 100%); height: 140px; color: white;">
                            <div class="mb-2">
                                <i class="bi bi-pencil-fill fs-1 module-card-icon"
                                    style="text-shadow: 0 2px 4px rgba(0,0,0,0.2);"></i>

                            </div>
                            <div class="text-uppercase fw-bold small mb-1">Modul 02</div>
                        </div>

                        <div class="card-body p-4 pt-3 bg-white text-start">
                            <h5 class="fw-bold mb-2" style="text-decoration: underline 3px #f6c86a; color: #333;">
                                Pindaan Aset Infra
                            </h5>
                            <p class="small text-muted mb-0">
                                Modul untuk meminda maklumat aset sedia ada mengikut kelulusan pegawai.
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Modul 03 – Perlupusan Aset --}}
            <div class="col-lg-5 col-md-6">
                <a href="{{ route('pelupusan-aset.form') }}" class="text-decoration-none text-reset">
                    <div class="card border-0 shadow-lg rounded-4 h-100 overflow-hidden module-card"
                        style="min-height: 320px;">
                        <div class="card-body p-4 text-center"
                            style="background: linear-gradient(135deg, #9fe580 0%, #7fce58 100%); height: 140px; color: white;">
                            <div class="mb-2">
                                <i class="bi bi-trash3-fill fs-1 module-card-icon"
                                    style="text-shadow: 0 2px 4px rgba(0,0,0,0.2);"></i>
                            </div>
                            <div class="text-uppercase fw-bold small mb-1">Modul 03</div>
                        </div>

                        <div class="card-body p-4 pt-3 bg-white text-start">
                            <h5 class="fw-bold mb-2" style="text-decoration: underline 3px #9fe580; color: #333;">
                                Perlupusan Aset
                            </h5>
                            <p class="small text-muted mb-0">
                                Merekod penghapusan aset jalan dan infrastruktur serta penjanaan sijil pelupusan.
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Modul 04 – Penyelenggaraan Aset --}}
            <div class="col-lg-5 col-md-6">
                <a href="{{ route('penyelenggaraan-aset.form') }}" class="text-decoration-none text-reset">
                    <div class="card border-0 shadow-lg rounded-4 h-100 overflow-hidden module-card"
                        style="min-height: 320px;">
                        <div class="card-body p-4 text-center"
                            style="background: linear-gradient(135deg, #6fd0ef 0%, #4db9dd 100%); height: 140px; color: white;">
                            <div class="mb-2">
                                <i class="bi bi-wrench-adjustable-circle-fill fs-1 module-card-icon"
                                    style="text-shadow: 0 2px 4px rgba(0,0,0,0.2);"></i>
                            </div>
                            <div class="text-uppercase fw-bold small mb-1">Modul 04</div>
                        </div>

                        <div class="card-body p-4 pt-3 bg-white text-start">
                            <h5 class="fw-bold mb-2" style="text-decoration: underline 3px #6fd0ef; color: #333;">
                                Penyelenggaraan Aset
                            </h5>
                            <p class="small text-muted mb-0">
                                Menyimpan rekod kerja selenggara jalan dan infra untuk rujukan dan pemantauan.
                            </p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
@endsection
