<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';

const props = defineProps({
    villageProfile: Object,
    latestPosts: Object,
    agendas: Object,
    services: Object
});

// Counter animation refs
const penduduk = ref(0);
const kk = ref(0);
const lakiLaki = ref(0);
const perempuan = ref(0);

// Animate counter function
const animateCounter = (target, refValue, duration = 2000) => {
    const start = 0;
    const increment = target / (duration / 16); // 60fps
    let current = start;
    
    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            refValue.value = target;
            clearInterval(timer);
        } else {
            refValue.value = Math.floor(current);
        }
    }, 16);
};

// Start animation on mount
onMounted(() => {
    setTimeout(() => {
        animateCounter(10200, penduduk);
        animateCounter(2500, kk);
        animateCounter(5100, lakiLaki);
        animateCounter(5100, perempuan);
    }, 300);
});

// Format number with k suffix
const formatNumber = (num) => {
    if (num >= 1000) {
        return (num / 1000).toFixed(1) + 'k';
    }
    return num.toString();
};
</script>

<template>
    <Head title="Beranda" />

    <GuestLayout>
        <!-- Hero Section -->
        <div class="relative bg-gray-50 overflow-hidden min-h-[700px] flex items-center pt-16">
            <!-- Video Background -->
            <div class="absolute inset-0 z-0 overflow-hidden">
                <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover transform scale-110 origin-center">
                    <source src="/images/banner.MOV" type="video/mp4">
                </video>
                <div class="absolute inset-0 bg-gradient-to-b from-black/20 via-transparent to-black/40"></div>
            </div>
            
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 w-full">
                <div class="flex flex-col items-center text-center mt-12">
                    <div class="animate-fade-in-up max-w-4xl flex flex-col items-center">
                        
                        <!-- Eyebrow text -->
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-8 sm:w-16 h-[2px] bg-white/80 rounded-full"></div>
                            <div class="flex items-center gap-2">
                                <span class="text-xs sm:text-sm md:text-base text-white uppercase tracking-[0.2em] font-bold drop-shadow-[0_2px_4px_rgba(0,0,0,0.8)]">Selamat Datang di</span>
                            </div>
                            <div class="w-8 sm:w-16 h-[2px] bg-white/80 rounded-full"></div>
                        </div>

                        <!-- Main Title -->
                        <h1 class="text-4xl sm:text-5xl md:text-7xl font-extrabold tracking-tight leading-tight text-center flex flex-col sm:flex-row justify-center items-center sm:gap-x-4 mb-8">
                            <span class="text-white drop-shadow-[0_2px_4px_rgba(0,0,0,0.8)]">Desa</span>
                            <span class="text-blue-400 drop-shadow-[0_2px_4px_rgba(0,0,0,0.8)]">Gunungjaya</span>
                        </h1>
                        
                        <!-- Description -->
                        <p class="text-base sm:text-lg md:text-xl text-white font-medium leading-relaxed max-w-2xl mx-auto drop-shadow-[0_2px_4px_rgba(0,0,0,0.8)] mb-12">
                            Mewujudkan Desa Gunungjaya yang Mandiri, Sejahtera, dan Berkeadaban melalui Pelayanan Publik yang Prima dan Inovatif.
                        </p>
                        
                        <!-- CTA Buttons -->
                        <div class="flex flex-col sm:flex-row gap-6 justify-center w-full sm:w-auto">
                            <Link href="/layanan" class="flex items-center justify-center gap-2 px-8 py-4 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-full shadow-xl hover:shadow-blue-500/50 transition-all transform hover:-translate-y-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                Layanan Mandiri
                            </Link>
                            <Link href="/sejarah" class="flex items-center justify-center gap-2 px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-md text-white border border-white/50 hover:border-white font-bold rounded-full shadow-lg transition-all transform hover:-translate-y-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                Jelajahi Desa
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
            
             <!-- Wave Divider -->
            <div class="absolute bottom-0 left-0 right-0">
                <svg class="fill-white w-full h-12 md:h-24" viewBox="0 0 1440 320" preserveAspectRatio="none">
                    <path fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
            </div>
        </div>

        <!-- Sambutan Kades Section -->
        <div class="relative py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-gray-50 rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100 flex flex-col md:flex-row gap-12 items-center">
                    <div class="w-full md:w-1/3 shrink-0">
                        <div class="relative aspect-[3/4] rounded-2xl overflow-hidden shadow-2xl skew-y-3 md:skew-y-0 transform transition hover:scale-105 duration-300 group">
                             <!-- Foto Kepala Desa -->
                            <img src="/images/kades.png" alt="Sugeng Riyadi" class="absolute inset-0 w-full h-full object-cover" />
                            <!-- Overlay Text -->
                           <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/90 to-transparent p-6 pt-24">
                                <h3 class="text-white font-bold text-xl">Sugeng Riyadi</h3>
                                <p class="text-blue-300 text-sm font-medium">Kepala Desa Gunungjaya</p>
                           </div>
                        </div>
                    </div>
                    <div class="w-full md:w-2/3 space-y-6">
                        <span class="text-blue-600 font-bold tracking-wider uppercase text-sm border-b-2 border-blue-500 pb-1">Sambutan Kepala Desa</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">Menuju Gunungjaya yang Lebih Maju</h2>
                        <div class="space-y-4 text-gray-600 leading-relaxed text-lg text-justify">
                            <p>Assalamu'alaikum Warahmatullahi Wabarakatuh,</p>
                            <p>Selamat datang di website resmi Pemerintah Desa Gunungjaya. Website ini kami hadirkan sebagai media informasi dan komunikasi antara pemerintah desa dengan masyarakat, serta sebagai wujud komitmen kami dalam mewujudkan tata kelola pemerintahan yang transparan dan akuntabel.</p>
                            <p>Kami mengajak seluruh elemen masyarakat untuk bersinergi membangun desa kita tercinta. Mari kita jadikan Desa Gunungjaya sebagai desa yang mandiri, berprestasi, dan menjunjung tinggi nilai-nilai kearifan lokal.</p>
                        </div>
                        <div class="pt-4">
                             <img src="/images/ttdkades.png" alt="Tanda Tangan Sugeng Riyadi" class="h-20" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistik Section -->
        <div class="py-24 bg-blue-900 relative overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-blue-800/30 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-500/10 rounded-full blur-2xl translate-y-1/3 -translate-x-1/4"></div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <span class="text-blue-400 font-bold tracking-wider uppercase text-sm">Data Desa</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-white mt-2 mb-4">Statistik Kependudukan</h2>
                    <p class="text-blue-200">Data terkini kependudukan Desa Gunungjaya</p>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-8">
                     <!-- Stat Card 1 -->
                    <div class="p-4 sm:p-8 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm text-center group hover:bg-white/10 transition duration-300 transform hover:-translate-y-2">
                        <div class="mb-3 sm:mb-6 inline-flex items-center justify-center w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-blue-500/20 text-blue-400 group-hover:scale-110 transition shadow-inner">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <div class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-2">{{ formatNumber(penduduk) }}</div>
                        <div class="text-xs sm:text-sm text-blue-200 font-medium tracking-wide uppercase">Penduduk</div>
                    </div>
                    <!-- Stat Card 2 -->
                    <div class="p-4 sm:p-8 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm text-center group hover:bg-white/10 transition duration-300 transform hover:-translate-y-2">
                        <div class="mb-3 sm:mb-6 inline-flex items-center justify-center w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-blue-500/20 text-blue-400 group-hover:scale-110 transition shadow-inner">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </div>
                         <div class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-2">{{ formatNumber(kk) }}</div>
                        <div class="text-xs sm:text-sm text-blue-200 font-medium tracking-wide uppercase">Kepala Keluarga</div>
                    </div>
                     <!-- Stat Card 3 -->
                    <div class="p-4 sm:p-8 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm text-center group hover:bg-white/10 transition duration-300 transform hover:-translate-y-2">
                        <div class="mb-3 sm:mb-6 inline-flex items-center justify-center w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-yellow-500/20 text-yellow-400 group-hover:scale-110 transition shadow-inner">
                             <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                         <div class="text-4xl md:text-5xl font-bold text-white mb-2">{{ formatNumber(lakiLaki) }}</div>
                        <div class="text-sm text-blue-200 font-medium tracking-wide uppercase">Laki-laki</div>
                    </div>
                     <!-- Stat Card 4 -->
                    <div class="p-4 sm:p-8 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm text-center group hover:bg-white/10 transition duration-300 transform hover:-translate-y-2">
                        <div class="mb-3 sm:mb-6 inline-flex items-center justify-center w-12 h-12 sm:w-16 sm:h-16 rounded-2xl bg-pink-500/20 text-pink-400 group-hover:scale-110 transition shadow-inner">
                             <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <div class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-2">{{ formatNumber(perempuan) }}</div>
                        <div class="text-xs sm:text-sm text-blue-200 font-medium tracking-wide uppercase">Perempuan</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- UMKM & Produk Unggulan -->
        <div class="py-24 bg-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-5">
                <div class="absolute top-20 left-10 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl"></div>
                <div class="absolute bottom-20 right-10 w-72 h-72 bg-amber-300 rounded-full mix-blend-multiply filter blur-3xl"></div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <span class="text-blue-600 font-bold tracking-wider uppercase text-sm block mb-3">Bangga Produk Lokal</span>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Produk Unggulan Desa</h2>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                        Dukung UMKM lokal dengan membeli produk berkualitas dari warga Gunungjaya
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <!-- Product Card 1 -->
                    <div class="group bg-white rounded-2xl overflow-hidden shadow-sm ring-1 ring-black/5 hover:shadow-2xl hover:ring-black/10 transition-all duration-300">
                        <div class="relative h-48 bg-gray-100 overflow-hidden">
                             <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?auto=format&fit=crop&w=600&h=400" alt="Beras Premium" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                            <div class="absolute top-3 right-3 px-3 py-1 bg-blue-500 text-white text-xs font-bold rounded-full">Best Seller</div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-lg text-gray-900 mb-2 group-hover:text-blue-700 transition">Beras Premium</h3>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">Beras organik berkualitas tinggi hasil panen lokal</p>
                            <div class="flex items-center justify-between">
                                <span class="text-blue-600 font-bold text-lg">Rp 15.000/kg</span>
                                <Link href="/umkm" class="text-blue-600 hover:text-blue-700 font-semibold text-sm flex items-center gap-1">
                                    Detail
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </Link>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="group bg-white rounded-2xl overflow-hidden shadow-sm ring-1 ring-black/5 hover:shadow-2xl hover:ring-black/10 transition-all duration-300">
                        <div class="relative h-48 bg-gray-100 overflow-hidden">
                             <img src="https://picsum.photos/seed/kerupuk-kulit/600/400" alt="Kerupuk Kulit" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-lg text-gray-900 mb-2 group-hover:text-blue-700 transition">Kerupuk Kulit</h3>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">Kerupuk rambak renyah dengan berbagai varian rasa</p>
                            <div class="flex items-center justify-between">
                                <span class="text-blue-600 font-bold text-lg">Rp 25.000</span>
                                <Link href="/umkm" class="text-blue-600 hover:text-blue-700 font-semibold text-sm flex items-center gap-1">
                                    Detail
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </Link>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="group bg-white rounded-2xl overflow-hidden shadow-sm ring-1 ring-black/5 hover:shadow-2xl hover:ring-black/10 transition-all duration-300">
                         <div class="relative h-48 bg-gray-100 overflow-hidden">
                             <img src="https://picsum.photos/seed/gula-merah/600/400" alt="Gula Merah" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-lg text-gray-900 mb-2 group-hover:text-blue-700 transition">Gula Merah</h3>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">Gula kelapa organik 100% tanpa bahan pengawet</p>
                            <div class="flex items-center justify-between">
                                <span class="text-blue-600 font-bold text-lg">Rp 25.000/kg</span>
                                <Link href="/umkm" class="text-blue-600 hover:text-blue-700 font-semibold text-sm flex items-center gap-1">
                                    Detail
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </Link>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="group bg-white rounded-2xl overflow-hidden shadow-sm ring-1 ring-black/5 hover:shadow-2xl hover:ring-black/10 transition-all duration-300">
                         <div class="relative h-48 bg-gray-100 overflow-hidden">
                             <img src="https://picsum.photos/seed/keripik-singkong/600/400" alt="Keripik Singkong" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-lg text-gray-900 mb-2 group-hover:text-blue-700 transition">Keripik Singkong</h3>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">Keripik renyah dengan varian rasa modern</p>
                            <div class="flex items-center justify-between">
                                <span class="text-blue-600 font-bold text-lg">Rp 15.000</span>
                                <Link href="/umkm" class="text-blue-600 hover:text-blue-700 font-semibold text-sm flex items-center gap-1">
                                    Detail
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <Link href="/umkm" class="inline-flex items-center gap-2 px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-full shadow-lg hover:shadow-blue-500/25 transition-all transform hover:-translate-y-1">
                        Lihat Semua Produk UMKM
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </Link>
                </div>
            </div>
        </div>

        <!-- Latest News -->
        <div class="py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-end mb-12">
                     <div>
                        <span class="text-blue-600 font-bold tracking-wider uppercase text-sm block mb-2">Informasi Terkini</span>
                        <h2 class="text-3xl font-bold text-gray-900">Berita & Artikel</h2>
                    </div>
                    <Link href="/berita" class="hidden md:inline-flex items-center gap-2 group text-blue-700 font-bold hover:text-blue-800 transition">
                        Lihat Semua Berita
                        <span class="bg-blue-100 p-1 rounded-full group-hover:bg-blue-200 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </span>
                    </Link>
                </div>
                
                <div v-if="props.latestPosts && props.latestPosts.length > 0" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div v-for="post in props.latestPosts" :key="post.id" class="group bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:border-blue-100 transition-all duration-300 flex flex-col h-full overflow-hidden">
                        <div class="relative h-60 overflow-hidden bg-gray-100 shrink-0">
                             <div class="absolute top-4 left-4 z-10 px-3 py-1 bg-white/95 backdrop-blur rounded-full text-xs font-bold text-blue-800 shadow-sm uppercase tracking-wide">
                                {{ post.category }}
                             </div>
                            <img v-if="post.image" :src="'/storage/' + post.image" :alt="post.title" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-out">
                             <img v-else :src="'https://picsum.photos/seed/' + post.id + '/800/600'" :alt="post.title" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-out">
                        </div>
                        <div class="p-8 flex flex-col flex-grow relative">
                            <!-- Date -->
                             <div class="flex items-center gap-3 text-sm text-gray-400 mb-4 font-medium">
                                <span class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                    {{ new Date(post.published_at).toLocaleDateString('id-ID', {day: 'numeric', month: 'long', year: 'numeric'}) }}
                                </span>
                            </div>
                            
                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-700 transition line-clamp-2 leading-tight">
                                <Link :href="'/berita/' + post.slug" class="focus:outline-none">
                                    <span class="absolute inset-0"></span>
                                    {{ post.title }}
                                </Link>
                            </h3>
                            <p class="text-gray-600 line-clamp-3 mb-6 flex-grow">{{ post.excerpt }}</p>
                            
                            <div class="pt-6 border-t border-gray-100 flex items-center justify-between">
                                <span class="inline-flex items-center text-blue-600 font-bold text-sm group-hover:translate-x-1 transition">
                                    Baca Selengkapnya
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                 <div v-else class="text-center py-12 bg-white rounded-2xl shadow-sm border border-dashed border-gray-300">
                    <p class="text-gray-500">Belum ada berita terbaru.</p>
                </div>
                 <div class="mt-8 text-center md:hidden">
                    <Link href="/berita" class="inline-flex items-center px-6 py-3 border border-gray-300 shadow-sm text-base font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">
                        Lihat Semua Berita
                    </Link>
                </div>
            </div>
        </div>

        <!-- Agenda Section -->
         <div class="py-24 bg-white relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-16">
                     <!-- Left Content (Title) -->
                    <div class="w-full lg:w-1/3">
                        <span class="text-blue-600 font-bold tracking-wider uppercase text-sm block mb-2">Agenda Kegiatan</span>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-4 lg:mb-6 leading-tight">Jangan Lewatkan Acara Penting Desa</h2>
                        <p class="text-gray-600 leading-relaxed mb-6 lg:mb-8 text-base lg:text-lg">
                            Ikuti berbagai kegiatan positif yang diselenggarakan oleh pemerintah desa dan masyarakat Gunungjaya untuk mempererat tali silaturahmi.
                        </p>
                         <Link href="/agenda" class="hidden lg:inline-flex px-8 py-4 bg-blue-100 text-blue-800 font-bold rounded-full hover:bg-blue-200 transition shadow-sm hover:shadow-md">
                            Lihat Kalender Agenda
                        </Link>
                    </div>

                    <!-- Right Content (List) -->
                    <div class="w-full lg:w-2/3">
                        <div v-if="props.agendas && props.agendas.length > 0" class="space-y-6">
                            <div v-for="agenda in props.agendas" :key="agenda.id" class="group bg-white p-3 sm:p-4 rounded-2xl transition hover:shadow-lg border border-transparent hover:border-blue-100">
                                <Link :href="'/agenda/' + agenda.id" class="flex gap-3 sm:gap-6 items-center cursor-pointer">
                                <div class="shrink-0 w-16 h-16 sm:w-24 sm:h-24 bg-blue-50 rounded-xl sm:rounded-2xl flex flex-col items-center justify-center border border-blue-100 group-hover:bg-blue-600 group-hover:text-white transition duration-300">
                                    <span class="text-xl sm:text-3xl font-bold">{{ new Date(agenda.start_time).getDate() }}</span>
                                    <span class="text-[10px] sm:text-xs uppercase font-bold tracking-widest">{{ new Intl.DateTimeFormat('id-ID', { month: 'short' }).format(new Date(agenda.start_time)) }}</span>
                                </div>
                                <div class="flex-grow min-w-0">
                                    <div class="flex justify-between items-start gap-2">
                                         <h3 class="text-base sm:text-xl font-bold text-gray-900 mb-1 sm:mb-2 group-hover:text-blue-700 transition line-clamp-2">{{ agenda.title }}</h3>
                                         <span class="hidden sm:inline-block px-3 py-1 bg-gray-100 text-gray-500 rounded-full text-xs font-bold uppercase tracking-wide group-hover:bg-blue-100 group-hover:text-blue-800 transition shrink-0">Mendatang</span>
                                    </div>
                                    <div class="flex flex-wrap gap-2 sm:gap-4 text-xs sm:text-sm text-gray-500 mb-1 sm:mb-2">
                                        <span class="flex items-center gap-1.5 bg-gray-50 px-2 py-1 rounded">
                                            <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            {{ new Date(agenda.start_time).toLocaleTimeString('id-ID', {hour: '2-digit', minute:'2-digit'}) }} WIB
                                        </span>
                                        <span class="flex items-center gap-1.5 bg-gray-50 px-2 py-1 rounded">
                                            <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                            {{ agenda.location }}
                                        </span>
                                    </div>
                                    <p class="text-gray-600 line-clamp-1 group-hover:text-gray-800 transition text-sm sm:text-base hidden sm:block">{{ agenda.description }}</p>
                                </div>
                                </Link>
                            </div>
                        </div>
                        <div v-else class="p-12 bg-gray-50 rounded-3xl text-center border border-dashed border-gray-300">
                             <div class="text-gray-400 mb-4">
                                <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                             </div>
                             <p class="text-gray-500 text-lg font-medium">Belum ada agenda kegiatan yang dijadwalkan.</p>
                        </div>
                         <div class="mt-8 lg:hidden">
                            <Link href="/agenda" class="block w-full text-center px-6 py-3 border border-gray-300 shadow-sm text-base font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">
                                Lihat Semua Agenda
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
         </div>

        <!-- Fasilitas Umum -->
        <div class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <span class="text-blue-600 font-bold tracking-wider uppercase text-sm block mb-3">Infrastruktur Desa</span>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Fasilitas Umum</h2>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                        Berbagai fasilitas yang tersedia untuk menunjang kebutuhan masyarakat
                    </p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                    <!-- Facility 1 -->
                    <div class="group p-6 bg-gradient-to-br from-blue-50 to-teal-50 rounded-2xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center mb-4 shadow-lg group-hover:scale-110 transition">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-1">Kantor Desa</h3>
                        <p class="text-sm text-gray-600">1 Unit</p>
                    </div>

                    <!-- Facility 2 -->
                    <div class="group p-6 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center mb-4 shadow-lg group-hover:scale-110 transition">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-1">Sekolah</h3>
                        <p class="text-sm text-gray-600">5 Sekolah</p>
                    </div>

                    <!-- Facility 3 -->
                    <div class="group p-6 bg-gradient-to-br from-red-50 to-pink-50 rounded-2xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-red-500 rounded-2xl flex items-center justify-center mb-4 shadow-lg group-hover:scale-110 transition">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-1">Puskesmas</h3>
                        <p class="text-sm text-gray-600">1 Unit</p>
                    </div>

                    <!-- Facility 4 -->
                    <div class="group p-6 bg-gradient-to-br from-purple-50 to-fuchsia-50 rounded-2xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mb-4 shadow-lg group-hover:scale-110 transition">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-1">Posyandu</h3>
                        <p class="text-sm text-gray-600">4 Unit</p>
                    </div>

                    <!-- Facility 5 -->
                    <div class="group p-6 bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-amber-500 rounded-2xl flex items-center justify-center mb-4 shadow-lg group-hover:scale-110 transition">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-1">Masjid</h3>
                        <p class="text-sm text-gray-600">3 Masjid</p>
                    </div>

                    <!-- Facility 6 -->
                    <div class="group p-6 bg-gradient-to-br from-teal-50 to-cyan-50 rounded-2xl hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-teal-500 rounded-2xl flex items-center justify-center mb-4 shadow-lg group-hover:scale-110 transition">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-1">Balai Desa</h3>
                        <p class="text-sm text-gray-600">2 Unit</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Profile -->
        <div class="py-24 bg-gradient-to-b from-blue-900 to-blue-950 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-500 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-teal-500 rounded-full blur-3xl"></div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <span class="text-blue-400 font-bold tracking-wider uppercase text-sm block mb-3">Lihat Lebih Dekat</span>
                    <h2 class="text-4xl font-bold text-white mb-4">Video Profile Desa Gunungjaya</h2>
                    <p class="text-blue-200 text-lg max-w-2xl mx-auto">
                        Saksikan keindahan dan kehidupan masyarakat Desa Gunungjaya
                    </p>
                </div>

                <div class="max-w-5xl mx-auto">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl ring-1 ring-white/10">
                        <!-- YouTube Video Embed -->
                        <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/LdUKy2qRXKM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimoni Warga -->
        <div class="py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <span class="text-blue-600 font-bold tracking-wider uppercase text-sm block mb-3">Suara Warga</span>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Apa Kata Mereka?</h2>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                        Testimoni dan feedback dari masyarakat Desa Gunungjaya
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm ring-1 ring-black/5 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center gap-2 mb-4 text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-6 italic">"Pelayanan di kantor desa sangat cepat dan ramah. Proses pembuatan surat keterangan hanya butuh beberapa menit. Sangat memuaskan!"</p>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-teal-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-md">S</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Siti Nurjanah</h4>
                                <p class="text-sm text-gray-500">Warga RT 02 RW 01</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm ring-1 ring-black/5 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center gap-2 mb-4 text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-6 italic">"Alhamdulillah bantuan UMKM dari desa sangat membantu usaha kecil saya. Sekarang produk saya bisa lebih berkembang dan dikenal banyak orang."</p>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-md">B</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Budi Santoso</h4>
                                <p class="text-sm text-gray-500">Pelaku UMKM Desa</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm ring-1 ring-black/5 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center gap-2 mb-4 text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-6 italic">"Website desa yang informatif dan mudah diakses. Semua informasi tentang desa tersedia lengkap. Memudahkan kami untuk mengikuti perkembangan desa."</p>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-md">A</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Ahmad Fauzi</h4>
                                <p class="text-sm text-gray-500">Pemuda Desa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rekomendasi Section -->
        <div class="py-24 bg-gradient-to-br from-gray-50 via-white to-blue-50/30 relative overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100/30 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-teal-100/20 rounded-full blur-3xl"></div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 animate-fade-in-up">
                    <span class="text-blue-600 font-bold tracking-wider uppercase text-sm block mb-3">Portal Informasi</span>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4 leading-tight">Jelajahi Desa Kami</h2>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
                        Temukan berbagai informasi dan layanan yang tersedia untuk Anda
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1 - Layanan -->
                    <Link href="/layanan" class="group relative bg-white rounded-2xl p-8 shadow-sm ring-1 ring-black/5 hover:shadow-xl hover:ring-black/10 hover:-translate-y-1 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.1s">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-teal-500 rounded-xl flex items-center justify-center mb-5 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-700 transition">Layanan Desa</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">Akses berbagai layanan administrasi dan perizinan</p>
                            <span class="inline-flex items-center text-blue-600 font-semibold text-sm">
                                Lihat Layanan
                                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                        </div>
                    </Link>

                    <!-- Card 2 - Sejarah -->
                    <Link href="/sejarah" class="group relative bg-white rounded-2xl p-8 shadow-sm ring-1 ring-black/5 hover:shadow-xl hover:ring-black/10 hover:-translate-y-1 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.2s">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center mb-5 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-700 transition">Sejarah Desa</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">Kenali lebih dalam perjalanan dan sejarah desa</p>
                            <span class="inline-flex items-center text-blue-600 font-semibold text-sm">
                                Pelajari Sejarah
                                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                        </div>
                    </Link>

                    <!-- Card 3 - Potensi -->
                    <Link href="/potensi" class="group relative bg-white rounded-2xl p-8 shadow-sm ring-1 ring-black/5 hover:shadow-xl hover:ring-black/10 hover:-translate-y-1 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.3s">
                        <div class="absolute inset-0 bg-gradient-to-br from-amber-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative">
                            <div class="w-14 h-14 bg-gradient-to-br from-amber-500 to-orange-500 rounded-xl flex items-center justify-center mb-5 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-amber-700 transition">Potensi Desa</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">Jelajahi potensi dan kekayaan lokal desa</p>
                            <span class="inline-flex items-center text-amber-600 font-semibold text-sm">
                                Lihat Potensi
                                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                        </div>
                    </Link>

                    <!-- Card 4 - Galeri -->
                    <Link href="/galeri" class="group relative bg-white rounded-2xl p-8 shadow-sm ring-1 ring-black/5 hover:shadow-xl hover:ring-black/10 hover:-translate-y-1 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.4s">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition duration-300"></div>
                        <div class="relative">
                            <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-5 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-purple-700 transition">Galeri Foto</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">Lihat dokumentasi kegiatan dan momen desa</p>
                            <span class="inline-flex items-center text-purple-600 font-semibold text-sm">
                                Buka Galeri
                                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                        </div>
                    </Link>
                </div>
            </div>
        </div>

        <!-- Peta Wilayah Section -->
        <div class="py-24 bg-white relative overflow-hidden">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 animate-fade-in-up">
                    <span class="text-blue-600 font-bold tracking-wider uppercase text-sm block mb-3">Lokasi Geografis</span>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4 leading-tight">Peta Wilayah Desa Gunungjaya</h2>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
                        Kunjungi kantor balai desa kami atau jelajahi wilayah desa melalui peta digital berikut.
                    </p>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-2 sm:p-6 rounded-3xl shadow-lg border border-blue-100 animate-fade-in-up" style="animation-delay: 0.2s">
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3489476753846!2d109.4051097!3d-6.972222199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7016b6e0000001%3A0x1!2sBalai%20Desa%20Gunungjaya!5e0!3m2!1sid!2sid!4v1234567890" 
                            width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full">
                        </iframe>
                    </div>
                    <div class="mt-6 flex flex-col sm:flex-row items-start bg-white p-6 rounded-2xl shadow-sm border border-gray-100 mx-auto max-w-4xl">
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mr-0 sm:mr-4 mb-4 sm:mb-0 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-900 mb-1">Alamat Kantor Balai Desa</h4>
                            <p class="text-gray-600 mb-3">Jl. Raya Gunungjaya No. 123, Gunungjaya, Kec. Belik, Kabupaten Pemalang, Jawa Tengah 52355</p>
                            <a href="https://maps.app.goo.gl/sB9eiHEKe8r1yir86" target="_blank" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-bold group">
                                <span>Buka di Google Maps</span>
                                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Pengaduan -->
        <div class="py-24 bg-gradient-to-r from-blue-900 via-blue-800 to-teal-900 relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="absolute inset-0 opacity-20">
                <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 right-0 w-96 h-96 bg-teal-500 rounded-full blur-3xl"></div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 sm:p-12 md:p-16 border border-white/20 shadow-2xl">
                    <div class="max-w-3xl mx-auto text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 sm:w-20 sm:h-20 bg-white/20 backdrop-blur rounded-2xl mb-6 shadow-lg">
                            <svg class="w-8 h-8 sm:w-10 sm:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                        </div>
                        
                        <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold text-white mb-4 sm:mb-6 leading-tight">
                            Punya Keluhan atau Saran?
                        </h2>
                        
                        <p class="text-blue-100 text-lg mb-10 leading-relaxed">
                            Suara Anda penting bagi kami! Sampaikan aspirasi, keluhan, atau saran untuk pembangunan desa yang lebih baik. 
                            Kami berkomitmen merespons setiap pengaduan dengan cepat dan transparan.
                        </p>
                        
                        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                            <Link href="/pengaduan" class="inline-flex items-center gap-3 px-8 py-4 bg-white text-blue-900 font-bold rounded-full shadow-xl hover:shadow-2xl hover:bg-blue-50 transition-all transform hover:-translate-y-1 group">
                                <svg class="w-6 h-6 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                                Sampaikan Pengaduan
                            </Link>
                            
                            <Link href="/kontak" class="inline-flex items-center gap-3 px-8 py-4 bg-blue-700/50 backdrop-blur text-white font-bold rounded-full border-2 border-white/30 hover:bg-blue-700/70 hover:border-white/50 transition-all">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                Hubungi Kami
                            </Link>
                        </div>
                        
                        <div class="mt-10 pt-10 border-t border-white/20">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                                <div>
                                    <div class="text-2xl sm:text-4xl font-bold text-white mb-2">< 24 Jam</div>
                                    <div class="text-blue-200 text-sm font-medium">Waktu Respons</div>
                                </div>
                                <div>
                                    <div class="text-2xl sm:text-4xl font-bold text-white mb-2">100%</div>
                                    <div class="text-blue-200 text-sm font-medium">Pengaduan Ditindaklanjuti</div>
                                </div>
                                <div>
                                    <div class="text-2xl sm:text-4xl font-bold text-white mb-2">Transparan</div>
                                    <div class="text-blue-200 text-sm font-medium">Proses Penanganan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

<style scoped>
@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fade-in-up 0.6s ease-out forwards;
    opacity: 0;
}
</style>
