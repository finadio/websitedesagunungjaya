<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';

const props = defineProps({
    agendas: Object,
    filters: Object,
});

const search = ref(props.filters?.search || '');
const activeFilter = ref(props.filters?.filter || 'upcoming');

const filterOptions = [
    { label: 'Semua', value: 'all' },
    { label: 'Akan Datang', value: 'upcoming' },
    { label: 'Selesai', value: 'past' },
];

let searchTimeout = null;

watch(search, () => {
    clearTimeout(searchTimeout);
    searchTimeout = setTimeout(() => applyFilters(), 400);
});

function setFilter(filter) {
    activeFilter.value = filter;
    applyFilters();
}

function applyFilters() {
    router.get('/agenda', {
        ...(search.value ? { search: search.value } : {}),
        ...(activeFilter.value ? { filter: activeFilter.value } : {}),
    }, {
        preserveState: true,
        preserveScroll: true,
        replace: true,
    });
}
</script>

<template>
    <Head title="Agenda Kegiatan" />

    <GuestLayout>
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-gray-900 overflow-hidden py-32">
            <div class="absolute inset-0">
                 <div class="absolute inset-0 bg-[url('/images/latarbelakang.png')] bg-cover bg-center opacity-15"></div>
                 <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(16,185,129,0.12),transparent_50%)]"></div>
                 <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_80%,rgba(6,182,212,0.08),transparent_50%)]"></div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h1 class="text-3xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-4 sm:mb-6 leading-tight">Agenda Desa</h1>
                <p class="text-gray-300 text-base sm:text-xl max-w-2xl mx-auto leading-relaxed">
                    Jadwal kegiatan resmi pemerintah dan masyarakat Desa Gunungjaya
                </p>
            </div>
        </div>

        <div class="max-w-6xl mx-auto py-12 sm:py-20 px-4 sm:px-6 lg:px-8 -mt-12 relative z-10">
            <div class="bg-white rounded-3xl shadow-2xl ring-1 ring-black/5 overflow-hidden">
                <div class="p-8 border-b border-gray-100 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="relative w-full md:w-auto md:flex-1 max-w-md">
                        <input v-model="search" type="text" placeholder="Cari agenda..." class="w-full pl-12 pr-5 py-3 rounded-full border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition bg-white text-gray-900 font-medium text-sm">
                        <svg class="w-5 h-5 text-gray-400 absolute left-4 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <div class="flex gap-2 text-sm">
                        <span v-for="opt in filterOptions" :key="opt.value" @click="setFilter(opt.value)"
                            class="px-4 py-2 rounded-full cursor-pointer transition font-bold"
                            :class="activeFilter === opt.value ? 'bg-gray-900 text-white shadow-md' : 'bg-white border border-gray-200 text-gray-700 hover:bg-gray-50'">
                            {{ opt.label }}
                        </span>
                    </div>
                </div>

                <div v-if="agendas.data.length > 0">
                    <div class="divide-y divide-gray-100">
                        <div v-for="agenda in agendas.data" :key="agenda.id" class="p-4 sm:p-8 hover:bg-gradient-to-r hover:from-gray-50 hover:to-transparent transition duration-300 group">
                            <div class="flex flex-col sm:flex-row gap-4 sm:gap-8 items-start">
                                <!-- Date Badge -->
                                <div class="shrink-0 flex sm:flex-col items-center gap-2 sm:gap-1 bg-gradient-to-br from-white to-gray-50 border-2 border-gray-200 rounded-xl sm:rounded-2xl p-3 sm:p-5 w-full sm:w-28 text-center shadow-sm group-hover:border-blue-500 group-hover:shadow-lg group-hover:from-blue-50 group-hover:to-white transition-all duration-300">
                                    <span class="text-blue-600 font-bold uppercase text-xs tracking-wider">{{ new Intl.DateTimeFormat('id-ID', { weekday: 'short' }).format(new Date(agenda.start_time)) }}</span>
                                    <span class="text-4xl font-extrabold text-gray-900">{{ new Date(agenda.start_time).getDate() }}</span>
                                    <span class="text-gray-600 font-bold text-sm uppercase">{{ new Intl.DateTimeFormat('id-ID', { month: 'short' }).format(new Date(agenda.start_time)) }}</span>
                                </div>

                                <div class="flex-grow space-y-3">
                                    <div class="flex flex-wrap items-center gap-3">
                                        <span v-if="new Date() < new Date(agenda.start_time)" class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-800">
                                            Akan Datang
                                        </span>
                                        <span v-else class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-gray-100 text-gray-800">
                                            Selesai
                                        </span>
                                        <span class="text-sm text-gray-500 font-semibold flex items-center gap-1.5">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            {{ new Date(agenda.start_time).toLocaleTimeString('id-ID', {hour: '2-digit', minute:'2-digit'}) }} WIB
                                        </span>
                                    </div>
                                    
                                    <h3 class="text-lg sm:text-2xl font-bold text-gray-900 group-hover:text-blue-700 transition leading-tight">
                                        <Link :href="'/agenda/' + agenda.id">{{ agenda.title }}</Link>
                                    </h3>
                                    
                                    <div class="flex items-start gap-2 text-gray-600">
                                        <svg class="w-5 h-5 text-blue-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                        <span class="font-medium">{{ agenda.location }}</span>
                                    </div>
                                    
                                    <p class="text-gray-600 leading-relaxed">{{ agenda.description }}</p>
                                </div>
                                
                                <div class="shrink-0 pt-2">
                                     <Link :href="'/agenda/' + agenda.id" class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center text-gray-400 hover:bg-blue-100 hover:text-blue-600 transition">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="p-8 border-t border-gray-100 bg-gray-50 flex justify-center">
                        <div class="inline-flex gap-2 p-2 bg-white rounded-full shadow-md ring-1 ring-black/5">
                            <template v-for="(link, index) in agendas.links" :key="index">
                                <Link v-if="link.url" :href="link.url" v-html="link.label"
                                    class="min-w-[2.5rem] h-10 px-4 flex items-center justify-center rounded-full text-sm font-bold transition-all"
                                    :class="link.active ? 'bg-gray-900 text-white shadow-md' : 'text-gray-700 hover:bg-gray-100'" />
                                <span v-else v-html="link.label"
                                    class="min-w-[2.5rem] h-10 px-4 flex items-center justify-center rounded-full text-sm font-bold opacity-40 cursor-default" />
                            </template>
                        </div>
                    </div>
                </div>

                <div v-else class="p-32 text-center flex flex-col items-center">
                    <div class="inline-block p-8 rounded-full bg-gradient-to-br from-gray-50 to-gray-100 mb-8">
                        <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Belum ada agenda</h3>
                    <p class="text-gray-500 max-w-sm">Saat ini belum ada agenda kegiatan yang dijadwalkan.</p>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
