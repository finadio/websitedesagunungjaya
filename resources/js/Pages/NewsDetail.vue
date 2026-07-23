<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    post: Object,
    relatedPosts: Array,
});

function stripHtml(html) {
    const div = document.createElement('div');
    div.innerHTML = html;
    return div.textContent || div.innerText || '';
}

function formatDate(dateStr) {
    return new Date(dateStr).toLocaleDateString('id-ID', {
        day: 'numeric',
        month: 'long',
        year: 'numeric',
    });
}
</script>

<template>
    <Head :title="post.title" />

    <GuestLayout>
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-gray-900 overflow-hidden py-28 lg:py-32">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-[url('/images/latarbelakang.png')] bg-cover bg-center opacity-15"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_50%,rgba(16,185,129,0.15),transparent_50%)]"></div>
            </div>

            <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-3xl md:text-5xl font-bold text-white tracking-tight mb-6 leading-tight">{{ post.title }}</h1>
                <div class="flex items-center justify-center gap-4 text-gray-400 text-sm">
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        {{ formatDate(post.published_at) }}
                    </span>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-sm text-gray-500 mb-8">
                <Link href="/" class="hover:text-blue-600 transition">Beranda</Link>
                <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <Link href="/berita" class="hover:text-blue-600 transition">Berita</Link>
                <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-gray-900 font-medium truncate max-w-[200px]">{{ post.title }}</span>
            </nav>

            <!-- Featured Image -->
            <div class="mb-10 group">
                <div class="relative overflow-hidden rounded-2xl bg-white shadow-lg ring-1 ring-black/5">
                    <img v-if="post.image" :src="'/storage/' + post.image" :alt="post.title" class="w-full h-auto max-h-[500px] object-cover">
                    <img v-else :src="'https://picsum.photos/seed/' + post.id + '/800/600'" :alt="post.title" class="w-full h-auto max-h-[500px] object-cover">
                </div>
            </div>

            <!-- Article Content -->
            <article class="bg-white rounded-2xl shadow-sm ring-1 ring-black/5 p-8 md:p-12 mb-12">
                <div class="prose prose-lg max-w-none 
                    prose-headings:text-gray-900 prose-headings:font-bold
                    prose-p:text-gray-700 prose-p:leading-relaxed
                    prose-a:text-blue-600 prose-a:no-underline hover:prose-a:underline
                    prose-strong:text-gray-900
                    prose-ul:text-gray-700 prose-ol:text-gray-700
                    prose-img:rounded-xl prose-img:shadow-md
                    prose-blockquote:border-blue-500 prose-blockquote:bg-blue-50/50 prose-blockquote:rounded-r-lg prose-blockquote:py-1
                    prose-table:rounded-xl prose-table:overflow-hidden
                    prose-thead:bg-blue-500 prose-th:text-white prose-th:p-3
                    prose-td:p-3 prose-td:border-t prose-td:border-gray-100"
                    v-html="post.content">
                </div>
            </article>

            <!-- Share Buttons -->
            <div class="bg-white rounded-2xl shadow-sm ring-1 ring-black/5 p-6 mb-12">
                <div class="flex items-center justify-between flex-wrap gap-4">
                    <span class="text-gray-700 font-bold text-sm">Bagikan Artikel:</span>
                    <div class="flex gap-3">
                        <a :href="'https://wa.me/?text=' + encodeURIComponent(post.title + ' - ' + window.location.href)" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 hover:bg-blue-200 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </a>
                        <a :href="'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location.href)" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 hover:bg-blue-200 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <button @click="navigator.clipboard.writeText(window.location.href)" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition" title="Salin Link">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/></svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Related Posts -->
            <div v-if="relatedPosts.length > 0" class="mt-16">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">Berita Terkait</h2>
                    <Link href="/berita" class="text-blue-600 font-bold text-sm hover:text-blue-700 transition flex items-center gap-1">
                        Lihat Semua
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </Link>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <Link v-for="related in relatedPosts" :key="related.id" :href="'/berita/' + related.slug"
                        class="group bg-white rounded-2xl shadow-sm ring-1 ring-black/5 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                        <div class="relative h-44 overflow-hidden bg-gray-100">
                            <img v-if="related.image" :src="'/storage/' + related.image" :alt="related.title" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                            <img v-else :src="'https://picsum.photos/seed/' + related.id + '/800/600'" :alt="related.title" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        </div>
                        <div class="p-5">
                            <p class="text-xs text-gray-500 mb-2">{{ formatDate(related.published_at) }}</p>
                            <h3 class="text-base font-bold text-gray-900 group-hover:text-blue-700 transition line-clamp-2">{{ related.title }}</h3>
                        </div>
                    </Link>
                </div>
            </div>

            <!-- Back Button -->
            <div class="mt-12 text-center">
                <Link href="/berita" class="inline-flex items-center gap-2 px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold rounded-full transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
                    Kembali ke Berita
                </Link>
            </div>
        </div>
    </GuestLayout>
</template>
