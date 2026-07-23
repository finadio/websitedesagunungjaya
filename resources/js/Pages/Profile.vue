<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    profile: Object,
    officials: Array,
});
</script>

<template>
    <Head title="Profil Desa" />

    <GuestLayout>
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-gray-900 overflow-hidden py-28 lg:py-32">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-[url('/images/latarbelakang.png')] bg-cover bg-center opacity-15"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(16,185,129,0.12),transparent_50%)]"></div>
            </div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
                <h1 class="text-3xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-6 leading-tight">Mengenal Lebih Dekat</h1>
                <p class="text-gray-300 text-base sm:text-xl max-w-2xl mx-auto leading-relaxed">
                    Sejarah, Visi, Misi, dan Komitmen kami dalam membangun desa yang mandiri dan sejahtera.
                </p>
            </div>
        </div>

        <div v-if="props.profile" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-20">
            
            <!-- Tentang / Overview -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <div class="absolute -inset-4 bg-blue-100 rounded-full blur-3xl opacity-30"></div>
                    <img v-if="props.profile.image" :src="'/storage/' + props.profile.image" alt="Desa Gunungjaya" class="relative rounded-3xl shadow-2xl border-4 border-white rotate-2 hover:rotate-0 transition duration-500">
                    <img v-else src="/images/balaidesa.jpeg" alt="Balai Desa Gunungjaya" class="relative rounded-3xl shadow-2xl border-4 border-white rotate-2 hover:rotate-0 transition duration-500">
                </div>
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold text-gray-900">Tentang Desa Gunungjaya</h2>
                    <p class="text-gray-600 leading-relaxed text-lg">
                        {{ props.profile.description }}
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4">
                        <div class="bg-blue-50 p-5 rounded-2xl border border-blue-100">
                            <div class="flex items-center gap-3 mb-2 text-blue-800 font-bold">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Lokasi Kantor
                            </div>
                            <p class="text-sm text-gray-600">{{ props.profile.address }}</p>
                        </div>
                        <div class="bg-blue-50 p-5 rounded-2xl border border-blue-100">
                            <div class="flex items-center gap-3 mb-2 text-blue-800 font-bold">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                Kontak
                            </div>
                            <p class="text-sm text-gray-600">{{ props.profile.email }}</p>
                            <p class="text-sm text-gray-600">{{ props.profile.phone }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Visi Misi -->
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="bg-blue-900 p-12 text-white flex flex-col justify-center relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-blue-800 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 opacity-50"></div>
                        <h2 class="text-3xl font-bold mb-8 relative z-10 border-b border-blue-700 pb-4 inline-block">Visi Desa</h2>
                        <blockquote class="text-2xl font-serif italic leading-relaxed relative z-10">
                            "{{ props.profile.vision }}"
                        </blockquote>
                    </div>
                    <div class="p-12 bg-pattern">
                        <h2 class="text-3xl font-bold text-blue-900 mb-8 border-b border-blue-100 pb-4 inline-block">Misi Desa</h2>
                        <div class="prose prose-blue text-gray-600 whitespace-pre-line leading-relaxed">
                            {{ props.profile.mission }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- History -->
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-10">
                    <span class="text-blue-600 font-bold tracking-wider uppercase text-sm">Perjalanan Kami</span>
                    <h2 class="text-3xl font-bold text-gray-900 mt-2">Sejarah Desa</h2>
                </div>
                <div class="bg-white p-8 md:p-12 rounded-3xl shadow-sm border border-gray-100 prose prose-lg prose-blue max-w-none text-gray-600 leading-relaxed text-justify" v-html="props.profile.history">
                </div>
            </div>

        </div>
        
        <div v-else class="py-32 text-center">
            <div class="animate-pulse flex flex-col items-center">
                <div class="h-4 w-48 bg-gray-200 rounded mb-4"></div>
                <div class="h-32 w-full max-w-md bg-gray-200 rounded-xl"></div>
            </div>
        </div>

    </GuestLayout>
</template>

<style scoped>
.bg-pattern {
    background-image: radial-gradient(#10b981 0.5px, transparent 0.5px), radial-gradient(#10b981 0.5px, #f9fafb 0.5px);
    background-size: 20px 20px;
    background-position: 0 0, 10px 10px;
    background-color: #f9fafb;
}
</style>
