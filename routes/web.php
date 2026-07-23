<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/profil-desa', [PublicController::class, 'profile'])->name('profile');

Route::get('/berita', [PublicController::class, 'news'])->name('news');
Route::get('/berita/{slug}', [PublicController::class, 'newsDetail'])->name('news.detail');
Route::get('/agenda', [PublicController::class, 'agenda'])->name('agenda');
Route::get('/agenda/{id}', [PublicController::class, 'agendaDetail'])->name('agenda.detail');
Route::get('/galeri', [PublicController::class, 'gallery'])->name('gallery');
Route::get('/layanan', [PublicController::class, 'services'])->name('services');
// Dynamic Pages
// Dynamic Pages - Tentang
Route::get('/sejarah', [PublicController::class, 'showPage'])->defaults('slug', 'sejarah')->name('page.sejarah');
Route::get('/wilayah', [PublicController::class, 'showPage'])->defaults('slug', 'wilayah')->name('page.wilayah');
Route::get('/monografi', [PublicController::class, 'showPage'])->defaults('slug', 'monografi')->name('page.monografi');
Route::get('/statistik', [PublicController::class, 'showPage'])->defaults('slug', 'statistik')->name('page.statistik');
Route::get('/potensi', [PublicController::class, 'showPage'])->defaults('slug', 'potensi')->name('page.potensi');

// Dynamic Pages - Lembaga
Route::get('/pemerintahan', [PublicController::class, 'showPage'])->defaults('slug', 'pemerintahan')->name('page.pemerintahan');
Route::get('/bpd', [PublicController::class, 'showPage'])->defaults('slug', 'bpd')->name('page.bpd');
Route::get('/lpm', [PublicController::class, 'showPage'])->defaults('slug', 'lpm')->name('page.lpm');
Route::get('/pkk', [PublicController::class, 'showPage'])->defaults('slug', 'pkk')->name('page.pkk');
Route::get('/karang-taruna', [PublicController::class, 'showPage'])->defaults('slug', 'karang-taruna')->name('page.karang-taruna');
Route::get('/posyandu', [PublicController::class, 'showPage'])->defaults('slug', 'posyandu')->name('page.posyandu');

// Dynamic Pages - Lainnya
Route::get('/visi-misi', [PublicController::class, 'showPage'])->defaults('slug', 'visi-misi')->name('page.visi-misi');
Route::get('/kontak', [PublicController::class, 'showPage'])->defaults('slug', 'kontak')->name('page.kontak');
Route::get('/umkm', [PublicController::class, 'showPage'])->defaults('slug', 'umkm')->name('page.umkm');
Route::get('/wisata', [PublicController::class, 'showPage'])->defaults('slug', 'wisata')->name('page.wisata');
Route::get('/apbdes', [PublicController::class, 'showPage'])->defaults('slug', 'apbdes')->name('page.apbdes');
Route::get('/pengumuman', [PublicController::class, 'showPage'])->defaults('slug', 'pengumuman')->name('page.pengumuman');
Route::get('/download', [PublicController::class, 'showPage'])->defaults('slug', 'download')->name('page.download');
Route::get('/pengaduan', [PublicController::class, 'showPage'])->defaults('slug', 'pengaduan')->name('page.pengaduan');
Route::post('/pengaduan/submit', [PublicController::class, 'submitComplaint'])->name('complaint.submit');
Route::get('/lacak-pengaduan', [PublicController::class, 'trackComplaint'])->name('complaint.track');

// Fallback for other dynamic pages if needed
Route::get('/page/{slug}', [PublicController::class, 'showPage'])->name('page.show');
