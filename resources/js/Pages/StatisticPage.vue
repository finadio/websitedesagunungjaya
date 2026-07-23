<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted, nextTick } from 'vue';

defineProps({
    page: Object,
    statistics: Object,
});

const categoryLabels = {
    demografi: 'Demografi Penduduk',
    pendidikan: 'Tingkat Pendidikan',
    pekerjaan: 'Mata Pencaharian',
    ekonomi: 'Ekonomi',
    kesehatan: 'Kesehatan',
    agama: 'Agama',
};

const categoryIconPaths = {
    demografi: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
    pendidikan: 'M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222',
    pekerjaan: 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2M3 13a2 2 0 012-2h14a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6z',
    ekonomi: 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
    kesehatan: 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
    agama: 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
};

const categoryChartColors = {
    demografi: ['#3B82F6', '#6366F1', '#8B5CF6', '#A855F7'],
    pendidikan: ['#0EA5E9', '#06B6D4', '#14B8A6', '#10B981', '#22C55E'],
    pekerjaan: ['#F59E0B', '#EF4444', '#EC4899', '#8B5CF6', '#6366F1'],
    ekonomi: ['#8B5CF6', '#A855F7', '#C084FC'],
    kesehatan: ['#F43F5E', '#FB7185', '#FDA4AF'],
    agama: ['#06B6D4', '#0EA5E9', '#3B82F6', '#6366F1', '#8B5CF6', '#A855F7'],
};

function getMaxValue(items) {
    return Math.max(...items.map(item => Number(item.value)));
}

function getColorPalette(category) {
    return categoryChartColors[category] || categoryChartColors.demografi;
}
</script>

<template>
    <Head title="Data Statistik Desa" />

    <GuestLayout>
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-gray-900 overflow-hidden py-28 lg:py-32">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-[url('/images/latarbelakang.png')] bg-cover bg-center opacity-15"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(16,185,129,0.12),transparent_50%)]"></div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-3xl sm:text-5xl md:text-6xl font-bold text-white tracking-tight mb-6">Data Statistik Desa</h1>
                <p class="text-base sm:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
                    Informasi data kependudukan dan statistik Desa Gunungjaya tahun {{ new Date().getFullYear() }}
                </p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <!-- Statistics Grid -->
            <div v-if="statistics && Object.keys(statistics).length > 0" class="space-y-12">
                <div v-for="(items, category) in statistics" :key="category">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center bg-gradient-to-br from-primary-500 to-primary-600 shadow-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="categoryIconPaths[category] || categoryIconPaths.ekonomi"></path></svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900">{{ categoryLabels[category] || category }}</h2>
                    </div>

                    <div class="bg-white rounded-2xl shadow-lg ring-1 ring-black/5 overflow-hidden p-8">
                        <!-- Chart Container with X and Y Axis -->
                        <div class="relative pt-8">
                            <!-- Y Axis Label -->
                            <div class="absolute -left-8 top-1/2 -translate-y-1/2 -rotate-90 text-sm font-semibold text-gray-600 whitespace-nowrap">
                                Jumlah
                            </div>
                            
                            <!-- Chart Area -->
                            <div class="ml-16">
                                <!-- Y Axis Grid Lines and Labels -->
                                <div class="relative h-[400px] mb-2">
                                    <!-- Grid Lines -->
                                    <div class="absolute inset-0 flex flex-col justify-between pointer-events-none">
                                        <div v-for="i in 5" :key="i" class="border-t border-gray-200 relative">
                                            <span class="absolute -left-14 -top-3 text-xs text-gray-600 font-medium">
                                                {{ Math.round(getMaxValue(items) * (5 - i) / 4).toLocaleString('id-ID') }}
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <!-- Bars Container -->
                                    <div class="absolute inset-0 flex items-end justify-around gap-3 px-4">
                                        <div v-for="(item, index) in items" :key="item.id" class="flex-1 flex flex-col items-center justify-end group max-w-[100px] relative">
                                            <!-- Value Label on Top of Bar -->
                                            <div class="absolute left-1/2 -translate-x-1/2 text-sm font-bold text-gray-800 opacity-0 group-hover:opacity-100 transition-opacity bg-white px-2 py-1 rounded shadow-md whitespace-nowrap z-20 border border-gray-200"
                                                 :style="{ bottom: `${((Number(item.value) / getMaxValue(items)) * 400) + 10}px` }">
                                                {{ Number(item.value).toLocaleString('id-ID') }}
                                            </div>
                                            
                                            <!-- Animated Bar -->
                                            <div class="w-full rounded-t-lg transition-all duration-1000 ease-out relative overflow-hidden group-hover:scale-105 shadow-lg"
                                                :style="{ 
                                                    height: `${(Number(item.value) / getMaxValue(items)) * 400}px`,
                                                    background: `linear-gradient(to top, ${getColorPalette(category)[index % getColorPalette(category).length]} 0%, ${getColorPalette(category)[(index + 1) % getColorPalette(category).length]} 100%)`
                                                }">
                                                <!-- Shine effect -->
                                                <div class="absolute inset-0 bg-gradient-to-t from-white/0 via-white/20 to-white/0 opacity-50"></div>
                                                
                                                <!-- Value inside bar (for larger bars) -->
                                                <div v-if="(Number(item.value) / getMaxValue(items)) > 0.2" 
                                                     class="absolute top-4 left-1/2 -translate-x-1/2 text-white font-bold text-sm drop-shadow-lg">
                                                    {{ Number(item.value).toLocaleString('id-ID') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- X Axis -->
                                <div class="border-t-2 border-gray-400 pt-3">
                                    <div class="flex items-start justify-around gap-3 px-4">
                                        <div v-for="item in items" :key="item.id" class="flex-1 text-center max-w-[100px]">
                                            <div class="text-xs font-semibold text-gray-700 leading-tight break-words px-1">
                                                {{ item.label }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- X Axis Label -->
                                <div class="text-center mt-4">
                                    <span class="text-sm font-semibold text-gray-600">Kategori</span>
                                </div>
                            </div>
                        </div>

                        <!-- Category Summary Card -->
                        <div class="mt-8 p-6 rounded-xl bg-gradient-to-br from-gray-50 to-gray-100 border border-gray-200">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="p-3 rounded-lg bg-white shadow-sm">
                                        <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-600 font-medium">Total {{ categoryLabels[category] }}</p>
                                        <p class="text-2xl font-bold text-gray-900">
                                            {{ items.reduce((sum, item) => sum + Number(item.value), 0).toLocaleString('id-ID') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm text-gray-600 font-medium">Jumlah Kategori</p>
                                    <p class="text-2xl font-bold text-primary-600">{{ items.length }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div v-else class="text-center py-32 bg-white rounded-3xl shadow-lg ring-1 ring-black/5">
                <div class="inline-block p-8 rounded-full bg-gradient-to-br from-gray-50 to-gray-100 mb-8">
                    <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Data Belum Tersedia</h3>
                <p class="text-gray-500 max-w-md mx-auto">Data statistik desa sedang dipersiapkan.</p>
            </div>

            <!-- Page Content (if any) -->
            <div v-if="page?.content" class="mt-12 bg-white rounded-2xl shadow-lg ring-1 ring-black/5 p-8">
                <div class="prose prose-lg max-w-none" v-html="page.content"></div>
            </div>
        </div>
    </GuestLayout>
</template>