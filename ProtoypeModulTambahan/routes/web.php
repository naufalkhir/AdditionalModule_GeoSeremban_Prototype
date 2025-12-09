<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Placeholder pages for now – you can create real views later
Route::get('/permohonan-aset', function () {
    return view('PermohonanAset.BorangPermohonanAset');
})->name('Aset-baharu.form');

Route::get('/pindaan-aset', function () {
    return view ('PindaanAset.index');
})->name('pindaan-aset.form');

Route::get('/pelupusan-aset', function () {
    return view ('PerlupusanAset.index');
})->name('pelupusan-aset.form');

Route::get('/penyelenggaraan-aset', function () {
    return view ('PenyelengaraanAset.index');
})->name('penyelenggaraan-aset.form');

Route::get('/audit-trail', function () {
    return view('AuditTrail.index');
})->name('audit-trail.index');

