<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const showingNavigationDropdown = ref(false);
const activeDropdown = ref(null);

const toggleDropdown = (menu) => {
    if (activeDropdown.value === menu) {
        activeDropdown.value = null;
    } else {
        activeDropdown.value = menu;
    }
};

// Close dropdown when clicking outside (simple implementation)
const closeDropdown = () => {
    activeDropdown.value = null;
};
</script>

<template>
    <div class="min-h-screen flex flex-col bg-gray-50 font-sans text-gray-900">
        <!-- Floating Navbar -->
        <div class="fixed top-6 left-0 right-0 z-50 px-4 sm:px-6 lg:px-8">
            <nav class="max-w-7xl mx-auto bg-white/95 backdrop-blur-md rounded-full shadow-xl border border-white/20 pl-4 pr-6 py-3 transition-all duration-300">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <!-- Logo -->
                        <Link href="/" class="flex items-center gap-3 group">
                            <div class="w-12 h-12 rounded-full overflow-hidden shadow-lg ring-2 ring-white group-hover:scale-105 transition duration-300">
                                <img src="/images/logo.png" alt="Logo Desa Gunungjaya" class="w-full h-full object-cover" />
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xl font-bold text-gray-900 leading-none tracking-tight group-hover:text-blue-700 transition">Gunungjaya</span>
                                <span class="text-[0.65rem] text-gray-500 font-bold tracking-[0.2em] uppercase mt-1">Kab. Pemalang</span>
                            </div>
                        </Link>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden lg:flex items-center space-x-1">
                        <Link href="/" class="px-6 py-2.5 text-sm font-bold rounded-full transition-all duration-300" 
                            :class="$page.url === '/' ? 'bg-blue-50 text-blue-700 shadow-sm' : 'text-gray-600 hover:bg-gray-50 hover:text-blue-700'">
                            Beranda
                        </Link>

                        <!-- Tentang Dropdown -->
                        <div class="relative group">
                            <button class="flex items-center px-5 py-2.5 text-sm font-medium text-gray-600 hover:text-blue-700 rounded-full hover:bg-gray-50 transition focus:outline-none">
                                Tentang
                                <svg class="ml-1.5 w-3.5 h-3.5 text-gray-400 group-hover:text-blue-600 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <!-- Dropdown Menu -->
                            <div class="absolute left-1/2 -translate-x-1/2 mt-4 w-56 bg-white rounded-2xl shadow-xl ring-1 ring-black/5 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top z-50">
                                <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45 border-t border-l border-gray-100"></div>
                                <div class="relative bg-white rounded-2xl overflow-hidden">
                                     <Link href="/profil-desa" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Profil Desa</Link>
                                     <Link href="/sejarah" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Sejarah Desa</Link>
                                     <Link href="/wilayah" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Wilayah & Peta</Link>
                                     <Link href="/monografi" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Monografi</Link>
                                     <Link href="/statistik" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Data Statistik</Link>
                                     <Link href="/potensi" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Potensi Desa</Link>
                                </div>
                            </div>
                        </div>
                        
                         <!-- Lembaga Dropdown -->
                         <div class="relative group">
                            <button class="flex items-center px-5 py-2.5 text-sm font-medium text-gray-600 hover:text-blue-700 rounded-full hover:bg-gray-50 transition focus:outline-none">
                                Lembaga
                                <svg class="ml-1.5 w-3.5 h-3.5 text-gray-400 group-hover:text-blue-600 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div class="absolute left-1/2 -translate-x-1/2 mt-4 w-56 bg-white rounded-2xl shadow-xl ring-1 ring-black/5 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top z-50">
                                <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45 border-t border-l border-gray-100"></div>
                                <div class="relative bg-white rounded-2xl overflow-hidden">
                                    <Link href="/pemerintahan" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Pemerintahan Desa</Link>
                                    <Link href="/bpd" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">BPD</Link>
                                    <Link href="/lpm" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">LPM</Link>
                                    <Link href="/pkk" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">PKK</Link>
                                    <Link href="/karang-taruna" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Karang Taruna</Link>
                                    <Link href="/posyandu" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Posyandu</Link>
                                </div>
                            </div>
                        </div>

                        <Link href="/layanan" class="px-5 py-2.5 text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50 rounded-full transition" :class="{'bg-blue-50 text-blue-700': $page.url.startsWith('/layanan')}">
                            Layanan
                        </Link>
                        
                        <!-- Informasi Dropdown -->
                        <div class="relative group">
                            <button class="flex items-center px-5 py-2.5 text-sm font-medium text-gray-600 hover:text-blue-700 rounded-full hover:bg-gray-50 transition focus:outline-none">
                                Informasi
                                <svg class="ml-1.5 w-3.5 h-3.5 text-gray-400 group-hover:text-blue-600 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div class="absolute left-1/2 -translate-x-1/2 mt-4 w-48 bg-white rounded-2xl shadow-xl ring-1 ring-black/5 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top z-50">
                                <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45 border-t border-l border-gray-100"></div>
                                <div class="relative bg-white rounded-2xl overflow-hidden">
                                    <Link href="/berita" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Berita</Link>
                                    <Link href="/agenda" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Agenda</Link>
                                    <Link href="/galeri" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Galeri</Link>
                                    <Link href="/pengumuman" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Pengumuman</Link>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Lainnya Dropdown -->
                        <div class="relative group">
                            <button class="flex items-center px-5 py-2.5 text-sm font-medium text-gray-600 hover:text-blue-700 rounded-full hover:bg-gray-50 transition focus:outline-none">
                                Lainnya
                                <svg class="ml-1.5 w-3.5 h-3.5 text-gray-400 group-hover:text-blue-600 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div class="absolute left-1/2 -translate-x-1/2 mt-4 w-56 bg-white rounded-2xl shadow-xl ring-1 ring-black/5 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top z-50">
                                <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45 border-t border-l border-gray-100"></div>
                                <div class="relative bg-white rounded-2xl overflow-hidden">
                                    <Link href="/visi-misi" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Visi & Misi</Link>
                                    <Link href="/umkm" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">UMKM Desa</Link>
                                    <Link href="/wisata" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Wisata Desa</Link>
                                    <Link href="/apbdes" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Transparansi APBDes</Link>
                                    <Link href="/download" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Pusat Unduhan</Link>
                                    <Link href="/pengaduan" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Pengaduan</Link>
                                    <Link href="/kontak" class="block px-5 py-2.5 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-700 font-medium transition">Kontak Kami</Link>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="-mr-2 flex items-center lg:hidden">
                        <button @click="showingNavigationDropdown = !showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-full text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>
            
             <!-- Mobile Menu -->
            <div :class="{'opacity-100 translate-y-0': showingNavigationDropdown, 'opacity-0 -translate-y-4 pointer-events-none': !showingNavigationDropdown}" class="lg:hidden bg-white rounded-3xl mt-4 shadow-2xl ring-1 ring-black/5 absolute left-4 right-4 overflow-hidden transition-all duration-300 transform z-40">
                <div class="px-2 pt-2 pb-3 space-y-1 max-h-[calc(100vh-12rem)] overflow-y-auto">
                    <Link href="/" class="block px-4 py-3 rounded-xl text-base font-semibold transition" :class="$page.url === '/' ? 'bg-blue-50 text-blue-700' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900'">
                        Beranda
                    </Link>
                    
                    <div class="space-y-1">
                        <div class="px-4 py-3 text-sm font-bold text-gray-400 uppercase tracking-widest">Tentang</div>
                        <Link href="/profil-desa" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Profil Desa</Link>
                        <Link href="/sejarah" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Sejarah Desa</Link>
                        <Link href="/wilayah" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Wilayah & Peta</Link>
                        <Link href="/monografi" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Monografi</Link>
                        <Link href="/statistik" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Data Statistik</Link>
                        <Link href="/potensi" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Potensi Desa</Link>
                    </div>

                    <div class="space-y-1">
                        <div class="px-4 py-3 text-sm font-bold text-gray-400 uppercase tracking-widest">Lembaga</div>
                        <Link href="/pemerintahan" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Pemerintahan Desa</Link>
                        <Link href="/bpd" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">BPD</Link>
                        <Link href="/lpm" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">LPM</Link>
                        <Link href="/pkk" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">PKK</Link>
                        <Link href="/karang-taruna" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Karang Taruna</Link>
                        <Link href="/posyandu" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Posyandu</Link>
                    </div>

                    <Link href="/layanan" class="block px-4 py-3 rounded-xl text-base font-semibold transition hover:bg-gray-50" :class="$page.url.startsWith('/layanan') ? 'bg-blue-50 text-blue-700' : 'text-gray-600'">
                        Layanan
                    </Link>
                    
                    <div class="space-y-1">
                        <div class="px-4 py-3 text-sm font-bold text-gray-400 uppercase tracking-widest">Informasi</div>
                        <Link href="/berita" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Berita</Link>
                        <Link href="/agenda" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Agenda</Link>
                        <Link href="/galeri" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Galeri</Link>
                        <Link href="/pengumuman" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Pengumuman</Link>
                    </div>
                    
                    <div class="space-y-1">
                        <div class="px-4 py-3 text-sm font-bold text-gray-400 uppercase tracking-widest">Lainnya</div>
                        <Link href="/visi-misi" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Visi & Misi</Link>
                        <Link href="/umkm" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">UMKM Desa</Link>
                        <Link href="/wisata" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Wisata Desa</Link>
                        <Link href="/apbdes" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Transparansi APBDes</Link>
                        <Link href="/download" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Pusat Unduhan</Link>
                        <Link href="/pengaduan" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Pengaduan</Link>
                        <Link href="/kontak" class="block pl-8 pr-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-700 hover:bg-gray-50">Kontak Kami</Link>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <main class="flex-grow">
            <slot />
        </main>

        <!-- Footer -->
        <footer class="relative bg-gray-900 text-white pt-16 pb-8 border-t border-gray-800 overflow-hidden">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0 bg-[url('/images/footerbackground.png')] bg-cover bg-center opacity-10"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/95 via-gray-900/90 to-gray-900/95"></div>
            
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                    <!-- Brand & About -->
                    <div class="lg:col-span-1">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 rounded-xl overflow-hidden ring-2 ring-blue-600/30 shadow-lg shadow-blue-600/20">
                                <img src="/images/logo.png" alt="Logo Desa Gunungjaya" class="w-full h-full object-cover" />
                            </div>
                            <div>
                                <span class="text-2xl font-bold tracking-tight block">Gunungjaya</span>
                                <span class="text-xs text-blue-400 font-semibold">Kab. Pemalang</span>
                            </div>
                        </div>
                        <p class="text-gray-400 leading-relaxed mb-6 text-sm">
                            Website Resmi Pemerintah Desa Gunungjaya, Kecamatan Belik, Kabupaten Pemalang. Melayani dengan hati, membangun dengan inovasi.
                        </p>
                        <!-- Social Media -->
                        <div class="flex gap-3">
                            <a href="#" class="w-10 h-10 rounded-lg bg-gray-800 hover:bg-blue-600 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-blue-600/50">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-lg bg-gray-800 hover:bg-blue-600 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-blue-600/50">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-lg bg-gray-800 hover:bg-blue-600 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-blue-600/50">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-lg bg-gray-800 hover:bg-blue-600 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-blue-600/50">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-lg font-bold mb-6 text-white flex items-center gap-2">
                            <div class="w-1 h-6 bg-blue-600 rounded-full"></div>
                            Tautan Cepat
                        </h3>
                        <ul class="space-y-3">
                            <li><Link href="/sejarah" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 group-hover:bg-blue-600 transition"></span>Sejarah Desa</Link></li>
                            <li><Link href="/visi-misi" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 group-hover:bg-blue-600 transition"></span>Visi & Misi</Link></li>
                            <li><Link href="/pemerintahan" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 group-hover:bg-blue-600 transition"></span>Pemerintahan Desa</Link></li>
                            <li><Link href="/layanan" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 group-hover:bg-blue-600 transition"></span>Layanan Publik</Link></li>
                            <li><Link href="/berita" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 group-hover:bg-blue-600 transition"></span>Berita Desa</Link></li>
                            <li><Link href="/galeri" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 group-hover:bg-blue-600 transition"></span>Galeri</Link></li>
                        </ul>
                    </div>

                    <!-- Info & Services -->
                    <div>
                        <h3 class="text-lg font-bold mb-6 text-white flex items-center gap-2">
                            <div class="w-1 h-6 bg-blue-600 rounded-full"></div>
                            Informasi
                        </h3>
                        <ul class="space-y-3">
                            <li><Link href="/umkm" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 group-hover:bg-blue-600 transition"></span>UMKM Desa</Link></li>
                            <li><Link href="/wisata" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 group-hover:bg-blue-600 transition"></span>Wisata Desa</Link></li>
                            <li><Link href="/potensi" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 group-hover:bg-blue-600 transition"></span>Potensi Desa</Link></li>
                            <li><Link href="/apbdes" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 group-hover:bg-blue-600 transition"></span>Transparansi APBDes</Link></li>
                            <li><Link href="/download" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 group-hover:bg-blue-600 transition"></span>Pusat Unduhan</Link></li>
                            <li><Link href="/pengaduan" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2 group"><span class="w-1.5 h-1.5 rounded-full bg-gray-600 group-hover:bg-blue-600 transition"></span>Pengaduan Masyarakat</Link></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div>
                        <h3 class="text-lg font-bold mb-6 text-white flex items-center gap-2">
                            <div class="w-1 h-6 bg-blue-600 rounded-full"></div>
                            Hubungi Kami
                        </h3>
                        <ul class="space-y-4 text-gray-400">
                            <li class="flex items-start gap-3 group">
                                <div class="w-10 h-10 rounded-lg bg-gray-800 group-hover:bg-blue-600/20 flex items-center justify-center shrink-0 transition">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <div class="text-xs text-gray-500 mb-1">Alamat</div>
                                    <span class="text-sm leading-relaxed">Jl. Raya Gunungjaya No. 12<br/>Kec. Belik, Kab. Pemalang<br/>Jawa Tengah 52356</span>
                                </div>
                            </li>
                            <li class="flex items-center gap-3 group">
                                <div class="w-10 h-10 rounded-lg bg-gray-800 group-hover:bg-blue-600/20 flex items-center justify-center shrink-0 transition">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <div class="text-xs text-gray-500 mb-1">Email</div>
                                    <a href="mailto:info@gunungjaya-belik.desa.id" class="text-sm hover:text-blue-400 transition">info@gunungjaya-belik.desa.id</a>
                                </div>
                            </li>
                            <li class="flex items-center gap-3 group">
                                <div class="w-10 h-10 rounded-lg bg-gray-800 group-hover:bg-blue-600/20 flex items-center justify-center shrink-0 transition">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <div>
                                    <div class="text-xs text-gray-500 mb-1">Telepon</div>
                                    <a href="tel:02841234567" class="text-sm hover:text-blue-400 transition">(0284) 1234567</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Bottom Bar -->
                <div class="mt-16 pt-8 border-t border-gray-800">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                        <div class="text-center md:text-left">
                            <p class="text-gray-500 text-sm">&copy; 2026 Pemerintah Desa Gunungjaya. All rights reserved.</p>
                            <p class="text-gray-600 text-xs mt-1">Website ini dikelola oleh Tim IT Desa Gunungjaya</p>
                        </div>
                        <div class="flex items-center gap-6 text-sm">
                            <Link href="/kontak" class="text-gray-500 hover:text-blue-400 transition">Kontak</Link>
                            <span class="text-gray-700">•</span>
                            <Link href="/download" class="text-gray-500 hover:text-blue-400 transition">Unduhan</Link>
                            <span class="text-gray-700">•</span>
                            <a href="/admin" class="text-gray-500 hover:text-blue-400 transition flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                Admin
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>
