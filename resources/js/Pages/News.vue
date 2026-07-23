<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';

const props = defineProps({
    posts: Object,
    filters: Object,
});

const search = ref(props.filters?.search || '');
const activeCategory = ref(props.filters?.category || '');

const categories = [
    { label: 'Semua', value: '' },
    { label: 'Berita', value: 'news' },
    { label: 'Pengumuman', value: 'announcement' },
    { label: 'Kegiatan', value: 'event' },
    { label: 'Prestasi', value: 'achievement' },
];

let searchTimeout = null;

watch(search, (val) => {
    clearTimeout(searchTimeout);
    searchTimeout = setTimeout(() => {
        applyFilters();
    }, 400);
});

function filterByCategory(category) {
    activeCategory.value = category;
    applyFilters();
}

function applyFilters() {
    router.get('/berita', {
        ...(search.value ? { search: search.value } : {}),
        ...(activeCategory.value ? { category: activeCategory.value } : {}),
    }, {
        preserveState: true,
        preserveScroll: true,
        replace: true,
    });
}
</script>

<template>
    <Head title="Berita & Artikel" />

    <GuestLayout>
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-gray-900 py-28 lg:py-32 overflow-hidden">
             <div class="absolute inset-0">
                <div class="absolute inset-0 bg-[url('/images/latarbelakang.png')] bg-cover bg-center opacity-15"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_50%,rgba(16,185,129,0.15),transparent_50%)]"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_20%,rgba(6,182,212,0.1),transparent_50%)]"></div>
             </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-3xl sm:text-5xl md:text-6xl font-bold text-white tracking-tight mb-6">Berita & Artikel</h1>
                <p class="text-base sm:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
                    Informasi terkini mengenai kegiatan, pengumuman, dan artikel seputar Desa Gunungjaya
                </p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <!-- Search & Filter -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6">
                 <div class="relative w-full max-w-md">
                    <input v-model="search" type="text" placeholder="Cari berita..." class="w-full pl-12 pr-5 py-4 rounded-full border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition shadow-sm bg-white text-gray-900 font-medium">
                    <svg class="w-5 h-5 text-gray-400 absolute left-5 top-4.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <!-- Categories -->
                <div class="flex gap-2 overflow-x-auto pb-2 md:pb-0 w-full md:w-auto no-scrollbar">
                    <button v-for="cat in categories" :key="cat.value" @click="filterByCategory(cat.value)"
                        class="px-5 py-2.5 rounded-full text-sm font-bold whitespace-nowrap transition-all"
                        :class="activeCategory === cat.value ? 'bg-gray-900 text-white shadow-lg' : 'bg-white text-gray-700 border border-gray-200 hover:bg-gray-50 hover:border-gray-300'">
                        {{ cat.label }}
                    </button>
                </div>
            </div>

            <div v-if="posts.data.length > 0">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div v-for="post in posts.data" :key="post.id" class="group bg-white rounded-2xl shadow-sm ring-1 ring-black/5 hover:shadow-2xl hover:ring-black/10 hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden">
                         <div class="relative h-56 overflow-hidden bg-gradient-to-br from-gray-100 to-gray-50 shrink-0">
                             <span class="absolute top-4 left-4 z-10 px-3 py-1.5 bg-white/95 backdrop-blur rounded-full text-xs font-bold text-gray-900 shadow-md uppercase tracking-wide">
                                {{ post.category }}
                             </span>
                             
                            <img v-if="post.image" :src="'/storage/' + post.image" :alt="post.title" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                             <img v-else :src="'https://picsum.photos/seed/' + post.id + '/800/600'" :alt="post.title" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        </div>
                        
                        <div class="p-7 flex flex-col flex-grow">
                             <div class="flex items-center gap-2 text-sm text-gray-500 mb-4 font-medium">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                {{ new Date(post.published_at).toLocaleDateString('id-ID', {day: 'numeric', month: 'long', year: 'numeric'}) }}
                            </div>

                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-700 transition line-clamp-2 leading-tight">
                                <Link :href="'/berita/' + post.slug" class="focus:outline-none">
                                    <span class="absolute inset-0"></span>
                                    {{ post.title }}
                                </Link>
                            </h3>
                            <p class="text-gray-600 line-clamp-3 mb-6 flex-grow leading-relaxed">{{ post.excerpt }}</p>
                            
                            <div class="flex items-center justify-between pt-5 border-t border-gray-100">
                                <span class="text-blue-600 font-bold text-sm group-hover:underline flex items-center gap-2">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-16 flex justify-center">
                    <div class="inline-flex gap-2 p-2 bg-white rounded-full shadow-lg ring-1 ring-black/5">
                        <template v-for="(link, index) in posts.links" :key="index">
                            <Link v-if="link.url" :href="link.url" v-html="link.label"
                                class="min-w-[2.5rem] h-10 px-4 flex items-center justify-center rounded-full text-sm font-bold transition-all"
                                :class="link.active ? 'bg-gray-900 text-white shadow-md' : 'text-gray-700 hover:bg-gray-100'" />
                            <span v-else v-html="link.label"
                                class="min-w-[2.5rem] h-10 px-4 flex items-center justify-center rounded-full text-sm font-bold opacity-40 cursor-default" />
                        </template>
                    </div>
                </div>
            </div>

            <div v-else class="text-center py-32 bg-white rounded-3xl shadow-lg ring-1 ring-black/5">
                <div class="inline-block p-8 rounded-full bg-gradient-to-br from-gray-50 to-gray-100 mb-8">
                    <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Tidak ada berita ditemukan</h3>
                <p class="text-gray-500 max-w-md mx-auto">Belum ada artikel atau berita yang dipublikasikan saat ini.</p>
            </div>
        </div>
    </GuestLayout>
</template>
