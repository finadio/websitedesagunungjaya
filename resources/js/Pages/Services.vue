<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps({
    services: Object,
});

const expandedId = ref(null);

function toggleExpand(id) {
    expandedId.value = expandedId.value === id ? null : id;
}
</script>

<template>
    <Head title="Layanan Publik" />

    <GuestLayout>
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-gray-900 overflow-hidden py-28 lg:py-32">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-[url('/images/latarbelakang.png')] bg-cover bg-center opacity-15"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(16,185,129,0.12),transparent_50%)]"></div>
            </div>
             
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h1 class="text-3xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-4 sm:mb-6 leading-tight">Layanan Publik</h1>
                <p class="text-gray-300 text-base sm:text-xl max-w-3xl mx-auto leading-relaxed">
                    Akses informasi pelayanan administrasi kependudukan dan perizinan Desa Gunungjaya secara mudah dan transparan
                </p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto py-12 sm:py-20 px-4 sm:px-6 lg:px-8 -mt-12 relative z-10">
            <div v-if="services.length > 0" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div v-for="service in services" :key="service.id" class="group bg-white rounded-3xl shadow-lg ring-1 ring-black/5 hover:shadow-2xl hover:ring-black/10 transition-all duration-300 relative overflow-hidden flex flex-col">
                    <div class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-blue-50 to-transparent rounded-full blur-2xl -mr-20 -mt-20 transition-all group-hover:from-blue-100"></div>
                    
                    <div class="relative z-10 p-8 flex flex-col flex-grow">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-teal-600 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                             <span class="text-2xl font-bold">{{ service.name.charAt(0) }}</span>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-700 transition leading-tight">{{ service.name }}</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">{{ service.description }}</p>

                        <!-- Quick Info -->
                        <div class="space-y-3 mb-6" v-if="service.processing_time || service.fee">
                            <div v-if="service.processing_time" class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span class="text-gray-600"><span class="font-medium">Waktu:</span> {{ service.processing_time }}</span>
                            </div>
                            <div v-if="service.fee" class="flex items-center gap-2 text-sm">
                                <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                <span class="text-gray-600"><span class="font-medium">Biaya:</span> {{ service.fee }}</span>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100/50 rounded-2xl p-6 border border-gray-200 group-hover:border-blue-200 group-hover:from-blue-50/50 group-hover:to-teal-50/30 transition-all">
                            <h4 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-4 flex items-center gap-2">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                                Persyaratan
                            </h4>
                            <div class="text-sm text-gray-700 whitespace-pre-line pl-3 border-l-2 border-blue-400 leading-relaxed">
                                {{ service.requirements }}
                            </div>
                        </div>

                        <!-- Expandable Procedure -->
                        <div v-if="service.procedure" class="mt-4">
                            <button @click="toggleExpand(service.id)" class="w-full flex items-center justify-between text-sm font-bold text-blue-600 hover:text-blue-700 transition py-2">
                                <span>{{ expandedId === service.id ? 'Sembunyikan' : 'Lihat' }} Prosedur</span>
                                <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': expandedId === service.id }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div v-show="expandedId === service.id" class="bg-blue-50 rounded-xl p-5 border border-blue-200 text-sm text-gray-700 whitespace-pre-line leading-relaxed mt-2">
                                {{ service.procedure }}
                            </div>
                        </div>

                        <!-- Download Form -->
                        <div class="mt-auto pt-6 border-t border-gray-100 flex items-center justify-between" :class="{ 'mt-6': !service.procedure }">
                            <a v-if="service.form_file" :href="'/storage/' + service.form_file" target="_blank"
                                class="inline-flex items-center gap-2 text-blue-600 font-bold text-sm hover:text-blue-700 transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                Download Formulir
                            </a>
                            <span v-else class="text-sm text-gray-400">-</span>
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center group-hover:bg-blue-200 transition">
                                <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div v-else class="text-center py-32 bg-white rounded-3xl shadow-lg ring-1 ring-black/5">
                 <div class="inline-block p-8 rounded-full bg-gradient-to-br from-blue-50 to-teal-50 mb-8">
                     <svg class="w-16 h-16 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                 </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Informasi Layanan Belum Tersedia</h3>
                <p class="text-gray-500 max-w-md mx-auto">Kami sedang memproses data layanan publik. Silakan kunjungi halaman ini kembali nanti.</p>
            </div>
        </div>
    </GuestLayout>
</template>
