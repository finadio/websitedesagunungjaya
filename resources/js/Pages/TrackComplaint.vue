<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    complaints: {
        type: Array,
        default: () => [],
    },
});

const form = useForm({
    email: '',
    phone: '',
});

function submit() {
    form.get('/lacak-pengaduan', {
        preserveScroll: true,
    });
}

const statusMap = {
    pending: { label: 'Menunggu', color: 'bg-yellow-100 text-yellow-800' },
    in_progress: { label: 'Diproses', color: 'bg-blue-100 text-blue-800' },
    resolved: { label: 'Selesai', color: 'bg-blue-100 text-blue-800' },
    rejected: { label: 'Ditolak', color: 'bg-red-100 text-red-800' },
};
</script>

<template>
    <Head title="Lacak Pengaduan" />

    <GuestLayout>
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-gray-900 overflow-hidden py-28 lg:py-32">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-[url('/images/latarbelakang.png')] bg-cover bg-center opacity-15"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(16,185,129,0.12),transparent_50%)]"></div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-3xl sm:text-5xl md:text-6xl font-bold text-white tracking-tight mb-6">Lacak Pengaduan</h1>
                <p class="text-base sm:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
                    Cek status pengaduan yang telah Anda kirimkan
                </p>
            </div>
        </div>

        <div class="max-w-3xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <!-- Search Form -->
            <div class="bg-white rounded-2xl shadow-lg ring-1 ring-black/5 p-8 mb-10">
                <h2 class="text-xl font-bold text-gray-900 mb-2">Cari Pengaduan Anda</h2>
                <p class="text-gray-500 mb-6">Masukkan email dan nomor telepon yang Anda gunakan saat mengirim pengaduan</p>
                
                <form @submit.prevent="submit" class="space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                            <input v-model="form.email" type="email" placeholder="email@contoh.com" required
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition text-gray-900"
                                :class="{ 'border-red-300': form.errors.email }">
                            <p v-if="form.errors.email" class="mt-1 text-sm text-red-500">{{ form.errors.email }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">No. Telepon</label>
                            <input v-model="form.phone" type="text" placeholder="08xxxxxxxxxx" required
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition text-gray-900"
                                :class="{ 'border-red-300': form.errors.phone }">
                            <p v-if="form.errors.phone" class="mt-1 text-sm text-red-500">{{ form.errors.phone }}</p>
                        </div>
                    </div>
                    <button type="submit" :disabled="form.processing"
                        class="w-full px-6 py-3.5 bg-blue-600 hover:bg-blue-700 disabled:bg-blue-400 text-white font-bold rounded-xl transition shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        {{ form.processing ? 'Mencari...' : 'Cari Pengaduan' }}
                    </button>
                </form>
            </div>

            <!-- Results -->
            <div v-if="complaints.length > 0" class="space-y-6">
                <h3 class="text-lg font-bold text-gray-900">Ditemukan {{ complaints.length }} pengaduan</h3>
                
                <div v-for="complaint in complaints" :key="complaint.id" class="bg-white rounded-2xl shadow-lg ring-1 ring-black/5 overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-start justify-between gap-4 mb-4">
                            <div>
                                <h4 class="text-lg font-bold text-gray-900">{{ complaint.subject }}</h4>
                                <p class="text-sm text-gray-500 mt-1">
                                    {{ new Date(complaint.created_at).toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' }) }}
                                </p>
                            </div>
                            <span class="px-3 py-1.5 rounded-full text-xs font-bold whitespace-nowrap"
                                :class="(statusMap[complaint.status] || statusMap.pending).color">
                                {{ (statusMap[complaint.status] || statusMap.pending).label }}
                            </span>
                        </div>
                        <p class="text-gray-600 leading-relaxed">{{ complaint.message }}</p>
                    </div>

                    <!-- Response (if any) -->
                    <div v-if="complaint.response" class="bg-blue-50 border-t border-blue-100 p-6">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-full bg-blue-200 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path></svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-blue-800 mb-1">Tanggapan Pemerintah Desa</p>
                                <p class="text-sm text-blue-700 leading-relaxed">{{ complaint.response }}</p>
                                <p v-if="complaint.responded_at" class="text-xs text-blue-600 mt-2">
                                    {{ new Date(complaint.responded_at).toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' }) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div v-else-if="form.wasSuccessful" class="text-center py-16 bg-white rounded-2xl shadow-lg ring-1 ring-black/5">
                <div class="inline-block p-6 rounded-full bg-gray-100 mb-6">
                    <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Pengaduan Tidak Ditemukan</h3>
                <p class="text-gray-500 max-w-sm mx-auto">Pastikan email dan nomor telepon yang Anda masukkan sesuai dengan data saat mengirim pengaduan.</p>
            </div>

            <!-- Back -->
            <div class="mt-10 text-center">
                <Link href="/pengaduan" class="inline-flex items-center gap-2 px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold rounded-full transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
                    Kirim Pengaduan Baru
                </Link>
            </div>
        </div>
    </GuestLayout>
</template>
