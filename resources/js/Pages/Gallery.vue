<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    galleries: Object,
});
</script>

<template>
    <Head title="Galeri Desa" />

    <GuestLayout>
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-gray-900 overflow-hidden py-28 lg:py-32">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-[url('/images/latarbelakang.png')] bg-cover bg-center opacity-15"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(16,185,129,0.12),transparent_50%)]"></div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h1 class="text-3xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-6 leading-tight">Galeri Desa</h1>
                <p class="text-gray-300 text-base sm:text-xl max-w-3xl mx-auto leading-relaxed">
                    Dokumentasi visual kegiatan, keindahan alam, dan kehidupan masyarakat Desa Gunungjaya
                </p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8 -mt-10 relative z-10">
            <div v-if="galleries.data.length > 0">
                <!-- Modern Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div v-for="gallery in galleries.data" :key="gallery.id" class="group relative break-inside-avoid">
                        <div class="relative rounded-2xl overflow-hidden bg-white shadow-md ring-1 ring-black/5 aspect-[4/3] group-hover:shadow-2xl transition-all duration-500">
                             <img v-if="gallery.image" :src="'/storage/' + gallery.image" :alt="gallery.title" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110">
                             <img v-else :src="'https://picsum.photos/seed/' + gallery.id + '/800/600'" :alt="gallery.title" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110">
                             
                             <!-- Overlay -->
                             <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-end p-6">
                                <span class="text-blue-400 text-xs font-bold uppercase tracking-wider mb-2">{{ gallery.category || 'Dokumentasi' }}</span>
                                <h3 class="text-white text-xl font-bold leading-tight mb-3">{{ gallery.title }}</h3>
                                <button class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center hover:bg-white/30 transition self-end">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                                </button>
                             </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-16 flex justify-center">
                    <div class="inline-flex gap-2 p-2 bg-white rounded-full shadow-lg ring-1 ring-black/5">
                        <template v-for="(link, index) in galleries.links" :key="index">
                            <Link v-if="link.url" :href="link.url" v-html="link.label"
                                class="min-w-[2.5rem] h-10 px-4 flex items-center justify-center rounded-full text-sm font-bold transition-all"
                                :class="link.active ? 'bg-gray-900 text-white shadow-md' : 'text-gray-600 hover:bg-gray-100'" />
                            <span v-else v-html="link.label"
                                class="min-w-[2.5rem] h-10 px-4 flex items-center justify-center rounded-full text-sm font-bold opacity-40 cursor-default" />
                        </template>
                    </div>
                </div>
            </div>
            
            <div v-else class="text-center py-32 bg-white rounded-3xl shadow-lg ring-1 ring-black/5">
                <div class="inline-block p-8 rounded-full bg-gradient-to-br from-gray-50 to-gray-100 mb-8">
                     <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Galeri Belum Tersedia</h3>
                <p class="text-gray-500 max-w-md mx-auto">Kami sedang mengumpulkan dan mempersiapkan dokumentasi visual untuk ditampilkan di halaman ini.</p>
            </div>
        </div>
    </GuestLayout>
</template>
