@extends('layouts.app')
@section('title','Jejak Audit Sistem')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center fw-bold">
            <span>Jejak Audit Sistem (contoh)</span>
            <a href="{{ route('home') }}" class="btn btn-outline-primary btn-sm">
                <i class="bi bi-arrow-left me-1"></i> Kembali
            </a>
        </div>

        <div class="card-body">

            {{-- Filter bar (frontend only, no DB) --}}
            <form class="row g-3 mb-3" id="auditFilterForm">
                <div class="col-md-3">
                    <label class="form-label mb-1">Modul</label>
                    <select class="form-select form-select-sm" id="filterModul">
                        <option value="">Semua modul</option>
                        <option value="Permohonan Aset">Permohonan Aset</option>
                        <option value="Pindaan Aset Infra">Pindaan Aset Infra</option>
                        <option value="Perlupusan Aset">Perlupusan Aset</option>
                        <option value="Penyelenggaraan Aset">Penyelenggaraan Aset</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label mb-1">Peranan</label>
                    <select class="form-select form-select-sm" id="filterPeranan">
                        <option value="">Semua peranan</option>
                        <option value="Pemohon">Pemohon</option>
                        <option value="Penilai">Penilai</option>
                        <option value="Pengesah">Pengesah</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label mb-1">Pengguna</label>
                    <input type="text" class="form-control form-control-sm" id="filterPengguna" placeholder="Cari nama pengguna">
                </div>

                <div class="col-md-3 d-flex align-items-end">
                    <button type="button" class="btn btn-outline-secondary btn-sm" id="btnClearFilter">
                        Set semula
                    </button>
                </div>
            </form>

            <table class="table table-sm table-striped" id="auditTable">
                <thead>
                    <tr>
                        <th>Tarikh/Masa</th>
                        <th>Pengguna</th>
                        <th>Peranan</th>
                        <th>Modul</th>
                        <th>Tindakan</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Permohonan Aset --}}
                    <tr>
                        <td>01/01/2026 10:15</td>
                        <td>Ali</td>
                        <td>Pemohon</td>
                        <td>Permohonan Aset</td>
                        <td>Hantar permohonan</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>02/01/2026 09:05</td>
                        <td>Siti</td>
                        <td>Penilai</td>
                        <td>Permohonan Aset</td>
                        <td>Kemaskini data teknikal</td>
                        <td>Semakan tapak selesai</td>
                    </tr>
                    <tr>
                        <td>03/01/2026 16:20</td>
                        <td>Rahman</td>
                        <td>Pengesah</td>
                        <td>Permohonan Aset</td>
                        <td>Lulus permohonan</td>
                        <td>Disahkan dalam mesyuarat</td>
                    </tr>

                    {{-- Pindaan Aset Infra --}}
                    <tr>
                        <td>04/01/2026 11:10</td>
                        <td>Aina</td>
                        <td>Pemohon</td>
                        <td>Pindaan Aset Infra</td>
                        <td>Hantar pindaan</td>
                        <td>Kemaskini atribut aset</td>
                    </tr>
                    <tr>
                        <td>04/01/2026 15:45</td>
                        <td>Faiz</td>
                        <td>Penilai</td>
                        <td>Pindaan Aset Infra</td>
                        <td>Semak pelan teknikal</td>
                        <td>Perlu pembetulan koordinat</td>
                    </tr>
                    <tr>
                        <td>05/01/2026 09:30</td>
                        <td>Hani</td>
                        <td>Pengesah</td>
                        <td>Pindaan Aset Infra</td>
                        <td>Lulus pindaan</td>
                        <td>-</td>
                    </tr>

                    {{-- Perlupusan Aset --}}
                    <tr>
                        <td>06/01/2026 10:00</td>
                        <td>Razak</td>
                        <td>Pemohon</td>
                        <td>Perlupusan Aset</td>
                        <td>Daftar permohonan pelupusan</td>
                        <td>Aset rosak dan tidak ekonomik</td>
                    </tr>
                    <tr>
                        <td>06/01/2026 14:20</td>
                        <td>Hakim</td>
                        <td>Penilai</td>
                        <td>Perlupusan Aset</td>
                        <td>Sahkan status fizikal</td>
                        <td>Disyorkan dilupus</td>
                    </tr>
                    <tr>
                        <td>07/01/2026 08:50</td>
                        <td>Noraini</td>
                        <td>Pengesah</td>
                        <td>Perlupusan Aset</td>
                        <td>Lulus pelupusan</td>
                        <td>Sijil dijana (demo)</td>
                    </tr>

                    {{-- Penyelenggaraan Aset --}}
                    <tr>
                        <td>08/01/2026 09:05</td>
                        <td>Azlan</td>
                        <td>Pemohon</td>
                        <td>Penyelenggaraan Aset</td>
                        <td>Daftar aduan kerosakan</td>
                        <td>Lubang jalan</td>
                    </tr>
                    <tr>
                        <td>08/01/2026 13:40</td>
                        <td>Lina</td>
                        <td>Penilai</td>
                        <td>Penyelenggaraan Aset</td>
                        <td>Rekod pemeriksaan tapak</td>
                        <td>Kerja tampalan diperlukan</td>
                    </tr>
                    <tr>
                        <td>09/01/2026 17:15</td>
                        <td>Faizal</td>
                        <td>Pengesah</td>
                        <td>Penyelenggaraan Aset</td>
                        <td>Tutup tiket selenggara</td>
                        <td>Kerja siap</td>
                    </tr>
                </tbody>
            </table>

            <button class="btn btn-outline-secondary btn-sm">
                Muat turun Excel (admin sahaja)
            </button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const filterModul = document.getElementById('filterModul');
    const filterPeranan = document.getElementById('filterPeranan');
    const filterPengguna = document.getElementById('filterPengguna');
    const btnClear = document.getElementById('btnClearFilter');
    const rows = document.querySelectorAll('#auditTable tbody tr');

    function applyFilter() {
        const modul = (filterModul.value || '').toLowerCase();
        const peranan = (filterPeranan.value || '').toLowerCase();
        const pengguna = (filterPengguna.value || '').toLowerCase();

        rows.forEach(row => {
            const cellPengguna = row.children[1].textContent.toLowerCase();
            const cellPeranan = row.children[2].textContent.toLowerCase();
            const cellModul = row.children[3].textContent.toLowerCase();

            const matchModul = !modul || cellModul.includes(modul);
            const matchPeranan = !peranan || cellPeranan.includes(peranan);
            const matchPengguna = !pengguna || cellPengguna.includes(pengguna);

            row.style.display = (matchModul && matchPeranan && matchPengguna) ? '' : 'none';
        });
    }

    filterModul.addEventListener('change', applyFilter);
    filterPeranan.addEventListener('change', applyFilter);
    filterPengguna.addEventListener('input', applyFilter);

    btnClear.addEventListener('click', function () {
        filterModul.value = '';
        filterPeranan.value = '';
        filterPengguna.value = '';
        applyFilter();
    });
});
</script>
@endsection
