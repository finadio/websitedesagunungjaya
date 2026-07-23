<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    agenda: Object,
    upcomingAgendas: Array,
});

function formatDate(dateStr) {
    return new Date(dateStr).toLocaleDateString('id-ID', {
        day: 'numeric',
        month: 'long',
        year: 'numeric',
    });
}

function formatTime(dateStr) {
    return new Date(dateStr).toLocaleTimeString('id-ID', {
        hour: '2-digit',
        minute: '2-digit',
    });
}

function formatDay(dateStr) {
    return new Date(dateStr).toLocaleDateString('id-ID', { weekday: 'long' });
}
</script>

<template>
    <Head :title="agenda.title" />

    <GuestLayout>
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-gray-900 overflow-hidden py-28 lg:py-32">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-[url('/images/latarbelakang.png')] bg-cover bg-center opacity-15"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(16,185,129,0.12),transparent_50%)]"></div>
            </div>

            <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-3xl md:text-5xl font-bold text-white tracking-tight mb-6 leading-tight">{{ agenda.title }}</h1>
            </div>
        </div>

        <div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-sm text-gray-500 mb-8">
                <Link href="/" class="hover:text-blue-600 transition">Beranda</Link>
                <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <Link href="/agenda" class="hover:text-blue-600 transition">Agenda</Link>
                <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-gray-900 font-medium truncate max-w-[200px]">{{ agenda.title }}</span>
            </nav>

            <!-- Detail Card -->
            <div class="bg-white rounded-2xl shadow-lg ring-1 ring-black/5 overflow-hidden mb-10">
                <!-- Info Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-gray-100">
                    <div class="p-6 flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 font-medium uppercase tracking-wider">Tanggal</p>
                            <p class="text-gray-900 font-bold">{{ formatDay(agenda.start_time) }}, {{ formatDate(agenda.start_time) }}</p>
                        </div>
                    </div>
                    <div class="p-6 flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 font-medium uppercase tracking-wider">Waktu</p>
                            <p class="text-gray-900 font-bold">
                                {{ formatTime(agenda.start_time) }}
                                <span v-if="agenda.end_time"> - {{ formatTime(agenda.end_time) }}</span>
                                WIB
                            </p>
                        </div>
                    </div>
                    <div class="p-6 flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 font-medium uppercase tracking-wider">Lokasi</p>
                            <p class="text-gray-900 font-bold">{{ agenda.location }}</p>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="border-t border-gray-100 p-8">
                    <h2 class="text-lg font-bold text-gray-900 mb-4">Deskripsi Kegiatan</h2>
                    <p class="text-gray-700 leading-relaxed whitespace-pre-line">{{ agenda.description }}</p>
                </div>
            </div>

            <!-- Upcoming Agendas -->
            <div v-if="upcomingAgendas.length > 0" class="mt-16">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">Agenda Lainnya</h2>
                    <Link href="/agenda" class="text-blue-600 font-bold text-sm hover:text-blue-700 transition flex items-center gap-1">
                        Lihat Semua
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </Link>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <Link v-for="item in upcomingAgendas" :key="item.id" :href="'/agenda/' + item.id"
                        class="group bg-white rounded-2xl shadow-sm ring-1 ring-black/5 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden p-6">
                        <div class="flex items-start gap-4">
                            <div class="shrink-0 bg-blue-100 rounded-xl p-3 text-center min-w-[60px] group-hover:bg-blue-200 transition">
                                <span class="text-2xl font-extrabold text-gray-900 block">{{ new Date(item.start_time).getDate() }}</span>
                                <span class="text-xs font-bold text-blue-700 uppercase">{{ new Intl.DateTimeFormat('id-ID', { month: 'short' }).format(new Date(item.start_time)) }}</span>
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-gray-900 group-hover:text-blue-700 transition line-clamp-2 mb-2">{{ item.title }}</h3>
                                <p class="text-sm text-gray-500 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    {{ formatTime(item.start_time) }} WIB
                                </p>
                                <p class="text-sm text-gray-500 flex items-center gap-1 mt-1">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    {{ item.location }}
                                </p>
                            </div>
                        </div>
                    </Link>
                </div>
            </div>

            <!-- Back Button -->
            <div class="mt-12 text-center">
                <Link href="/agenda" class="inline-flex items-center gap-2 px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold rounded-full transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
                    Kembali ke Agenda
                </Link>
            </div>
        </div>
    </GuestLayout>
</template>
