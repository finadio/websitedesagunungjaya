<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

defineProps({
    page: Object,
});

const form = useForm({
    name: '',
    email: '',
    phone: '',
    subject: '',
    message: '',
});

const submitted = ref(false);

const flash = computed(() => usePage().props.flash);

function submit() {
    form.post('/pengaduan/submit', {
        preserveScroll: true,
        onSuccess: () => {
            submitted.value = true;
            form.reset();
        },
    });
}
</script>

<template>
    <Head title="Pengaduan Masyarakat" />

    <GuestLayout>
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-gray-900 overflow-hidden py-28 lg:py-32">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-[url('/images/latarbelakang.png')] bg-cover bg-center opacity-15"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(16,185,129,0.12),transparent_50%)]"></div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-3xl sm:text-5xl md:text-6xl font-bold text-white tracking-tight mb-6">Pengaduan Masyarakat</h1>
                <p class="text-base sm:text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
                    Sampaikan keluhan, saran, atau pengaduan Anda untuk Desa Gunungjaya yang lebih baik
                </p>
            </div>
        </div>

        <div class="max-w-5xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <!-- Info Sidebar -->
                <div class="lg:col-span-1 space-y-6">
                    <div class="bg-white rounded-2xl shadow-lg ring-1 ring-black/5 p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Cara Menyampaikan Pengaduan</h3>
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-sm shrink-0 mt-0.5">1</div>
                                <p class="text-sm text-gray-600">Isi formulir pengaduan dengan lengkap dan jelas</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-sm shrink-0 mt-0.5">2</div>
                                <p class="text-sm text-gray-600">Tim kami akan menerima dan memverifikasi pengaduan Anda</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-sm shrink-0 mt-0.5">3</div>
                                <p class="text-sm text-gray-600">Pengaduan akan diproses dan ditindaklanjuti oleh pihak terkait</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-sm shrink-0 mt-0.5">4</div>
                                <p class="text-sm text-gray-600">Anda akan mendapatkan tanggapan dari pemerintah desa</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-blue-50 to-teal-50 rounded-2xl p-6 ring-1 ring-blue-200/50">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Lacak Pengaduan</h3>
                        <p class="text-sm text-gray-600 mb-4">Sudah pernah mengirim pengaduan? Lacak status pengaduan Anda.</p>
                        <Link href="/lacak-pengaduan" class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold rounded-lg transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            Lacak Pengaduan
                        </Link>
                    </div>
                </div>

                <!-- Form -->
                <div class="lg:col-span-2">
                    <!-- Success Message -->
                    <div v-if="submitted || flash?.success" class="mb-6 bg-blue-50 border border-blue-200 rounded-2xl p-6 flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-blue-800 font-bold">Pengaduan Berhasil Dikirim!</h4>
                            <p class="text-sm text-blue-700 mt-1">{{ flash?.success || 'Pengaduan Anda telah berhasil dikirim. Kami akan segera menindaklanjuti.' }}</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-lg ring-1 ring-black/5 p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">Formulir Pengaduan</h2>
                        <p class="text-gray-500 mb-8">Semua kolom bertanda <span class="text-red-500">*</span> wajib diisi</p>

                        <form @submit.prevent="submit" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                                    <input v-model="form.name" type="text" placeholder="Masukkan nama lengkap"
                                        class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition text-gray-900"
                                        :class="{ 'border-red-300': form.errors.name }">
                                    <p v-if="form.errors.name" class="mt-1 text-sm text-red-500">{{ form.errors.name }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                                    <input v-model="form.email" type="email" placeholder="email@contoh.com"
                                        class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition text-gray-900"
                                        :class="{ 'border-red-300': form.errors.email }">
                                    <p v-if="form.errors.email" class="mt-1 text-sm text-red-500">{{ form.errors.email }}</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-gray-700 mb-2">No. Telepon <span class="text-red-500">*</span></label>
                                    <input v-model="form.phone" type="text" placeholder="08xxxxxxxxxx"
                                        class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition text-gray-900"
                                        :class="{ 'border-red-300': form.errors.phone }">
                                    <p v-if="form.errors.phone" class="mt-1 text-sm text-red-500">{{ form.errors.phone }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-gray-700 mb-2">Perihal <span class="text-red-500">*</span></label>
                                    <input v-model="form.subject" type="text" placeholder="Perihal pengaduan"
                                        class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition text-gray-900"
                                        :class="{ 'border-red-300': form.errors.subject }">
                                    <p v-if="form.errors.subject" class="mt-1 text-sm text-red-500">{{ form.errors.subject }}</p>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Isi Pengaduan <span class="text-red-500">*</span></label>
                                <textarea v-model="form.message" rows="6" placeholder="Jelaskan pengaduan Anda secara detail..."
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition text-gray-900 resize-none"
                                    :class="{ 'border-red-300': form.errors.message }"></textarea>
                                <p v-if="form.errors.message" class="mt-1 text-sm text-red-500">{{ form.errors.message }}</p>
                            </div>

                            <div class="flex items-center justify-end pt-4">
                                <button type="submit" :disabled="form.processing"
                                    class="px-8 py-3.5 bg-blue-600 hover:bg-blue-700 disabled:bg-blue-400 text-white font-bold rounded-xl transition shadow-lg hover:shadow-xl flex items-center gap-2">
                                    <svg v-if="form.processing" class="animate-spin w-5 h-5" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg>
                                    <svg v-else class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                                    {{ form.processing ? 'Mengirim...' : 'Kirim Pengaduan' }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
