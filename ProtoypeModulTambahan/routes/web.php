<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/permohonan-aset', function (Request $request) {
    $role = $request->query('role', 'pemohon');
    return view('PermohonanAset.BorangPermohonanAset', compact('role'));
})->name('Aset-baharu.form');

Route::get('/pindaan-aset', function (Request $request) {
    $role = $request->query('role', 'pemohon');
    return view('PindaanAset.index', compact('role'));
})->name('pindaan-aset.form');

Route::get('/pelupusan-aset', function (Request $request) {
    $role = $request->query('role', 'pemohon');
    return view('PerlupusanAset.index', compact('role'));
})->name('pelupusan-aset.form');

Route::get('/penyelenggaraan-aset', function (Request $request) {
    $role = $request->query('role', 'pemohon');
    return view('PenyelengaraanAset.index', compact('role'));
})->name('penyelenggaraan-aset.form');

Route::get('/audit-trail', function () {
    return view('AuditTrail.index');
})->name('audit-trail.index');

