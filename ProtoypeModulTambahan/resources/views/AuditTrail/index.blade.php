@extends('layouts.app')
@section('title','Jejak Audit Sistem')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header fw-bold">
            Jejak Audit Sistem (contoh)
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped">
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
                    <tr>
                        <td>01/01/2026 10:15</td>
                        <td>Ali</td>
                        <td>Pemohon</td>
                        <td>Permohonan Jalan</td>
                        <td>Hantar permohonan</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>02/01/2026 09:05</td>
                        <td>Siti</td>
                        <td>Penilai</td>
                        <td>Permohonan Jalan</td>
                        <td>Kemaskini data teknikal</td>
                        <td>Semakan tapak selesai</td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-outline-secondary btn-sm">
                Muat turun Excel (admin sahaja)
            </button>
        </div>
    </div>
</div>
@endsection
