<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    page: Object
});
</script>

<template>
    <Head :title="page.title" />

    <GuestLayout>
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-gray-900 overflow-hidden py-28 lg:py-32">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-[url('/images/latarbelakang.png')] bg-cover bg-center opacity-15"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(16,185,129,0.12),transparent_50%)]"></div>
            </div>
             
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 tracking-tight text-white leading-tight">{{ page.title }}</h1>
            </div>
        </div>

        <!-- Content Cards -->
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <!-- Featured Image Card (if exists) -->
            <div v-if="page.image" class="mb-8 group">
                <div class="relative h-96 md:h-[28rem] overflow-hidden rounded-2xl bg-white shadow-sm border border-gray-100 transition-all duration-300 hover:shadow-md hover:border-blue-100">
                    <img :src="'/storage/' + page.image" :alt="page.title" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent"></div>
                </div>
            </div>
            
            <!-- Content Cards -->
            <div class="prose prose-lg max-w-none">
                <div v-html="page.content" 
                     class="space-y-6
                            [&>h2]:bg-white [&>h2]:rounded-xl [&>h2]:p-6 [&>h2]:shadow-sm [&>h2]:border [&>h2]:border-gray-100 [&>h2]:text-2xl [&>h2]:font-bold [&>h2]:text-gray-900 [&>h2]:mt-0 [&>h2]:mb-6 [&>h2]:transition-all [&>h2]:duration-200 [&>h2]:hover:shadow-md [&>h2]:hover:border-blue-100
                            [&_.official-grid]:grid [&_.official-grid]:grid-cols-1 [&_.official-grid]:md:grid-cols-2 [&_.official-grid]:lg:grid-cols-3 [&_.official-grid]:xl:grid-cols-4 [&_.official-grid]:gap-4 [&_.official-grid]:my-6
                            [&_.official-card]:bg-white [&_.official-card]:rounded-xl [&_.official-card]:p-5 [&_.official-card]:shadow-sm [&_.official-card]:border [&_.official-card]:border-gray-100 [&_.official-card]:transition-all [&_.official-card]:duration-200 [&_.official-card]:hover:shadow-md [&_.official-card]:hover:border-blue-200 [&_.official-card]:hover:-translate-y-0.5 [&_.official-card]:flex [&_.official-card]:flex-col [&_.official-card]:items-center [&_.official-card]:text-center
                            [&_.official-card_img]:w-24 [&_.official-card_img]:h-24 [&_.official-card_img]:rounded-full [&_.official-card_img]:mb-4 [&_.official-card_img]:border-4 [&_.official-card_img]:border-white [&_.official-card_img]:shadow-md [&_.official-card_img]:object-cover
                            [&_.official-info]:w-full
                            [&_.official-info_h4]:text-base [&_.official-info_h4]:font-semibold [&_.official-info_h4]:text-gray-900 [&_.official-info_h4]:mb-2 [&_.official-info_h4]:mt-0
                            [&_.official-position]:text-sm [&_.official-position]:font-medium [&_.official-position]:text-blue-600 [&_.official-position]:mb-1
                            [&_.official-nip]:text-xs [&_.official-nip]:text-gray-500 [&_.official-nip]:mt-1
                            [&_.official-period]:text-xs [&_.official-period]:text-gray-500 [&_.official-period]:mt-1
                            [&_.official-detail]:text-xs [&_.official-detail]:text-gray-500 [&_.official-detail]:mt-1
                            [&>h3]:bg-gradient-to-r [&>h3]:from-blue-50 [&>h3]:to-teal-50 [&>h3]:rounded-lg [&>h3]:px-5 [&>h3]:py-3 [&>h3]:text-lg [&>h3]:font-semibold [&>h3]:text-gray-800 [&>h3]:mt-6 [&>h3]:mb-3 [&>h3]:border-l-4 [&>h3]:border-blue-500
                            [&>h4]:text-base [&>h4]:font-semibold [&>h4]:text-gray-700 [&>h4]:mt-4 [&>h4]:mb-2 [&>h4]:pl-3 [&>h4]:border-l-2 [&>h4]:border-blue-300
                            [&>p]:bg-white [&>p]:rounded-lg [&>p]:p-5 [&>p]:shadow-sm [&>p]:border [&>p]:border-gray-50 [&>p]:text-base [&>p]:leading-relaxed [&>p]:text-gray-700 [&>p]:transition-all [&>p]:duration-200 [&>p]:hover:border-gray-100
                            [&>ul]:bg-white [&>ul]:rounded-lg [&>ul]:p-6 [&>ul]:shadow-sm [&>ul]:border [&>ul]:border-gray-50 [&>ul]:space-y-2.5 [&>ul]:text-gray-700 [&>ul]:transition-all [&>ul]:duration-200 [&>ul]:hover:border-gray-100 [&>ul>li]:flex [&>ul>li]:items-start [&>ul>li]:gap-2 [&>ul>li]:before:content-['•'] [&>ul>li]:before:text-blue-500 [&>ul>li]:before:font-bold [&>ul>li]:before:mt-0.5 [&>ul]:list-none
                            [&>ol]:bg-white [&>ol]:rounded-lg [&>ol]:p-6 [&>ol]:shadow-sm [&>ol]:border [&>ol]:border-gray-50 [&>ol]:space-y-2.5 [&>ol]:text-gray-700 [&>ol]:transition-all [&>ol]:duration-200 [&>ol]:hover:border-gray-100
                            [&>blockquote]:bg-gradient-to-r [&>blockquote]:from-blue-50 [&>blockquote]:to-white [&>blockquote]:rounded-lg [&>blockquote]:p-5 [&>blockquote]:border-l-4 [&>blockquote]:border-blue-500 [&>blockquote]:italic [&>blockquote]:text-gray-600 [&>blockquote]:shadow-sm
                            [&>table]:bg-white [&>table]:rounded-xl [&>table]:overflow-hidden [&>table]:shadow-sm [&>table]:border [&>table]:border-gray-100 [&>table]:w-full [&>table]:border-collapse
                            [&>table>thead]:bg-gradient-to-r [&>table>thead]:from-blue-500 [&>table>thead]:to-teal-500
                            [&>table>thead>tr>th]:p-4 [&>table>thead>tr>th]:text-left [&>table>thead>tr>th]:font-semibold [&>table>thead>tr>th]:text-white [&>table>thead>tr>th]:text-sm
                            [&>table>tbody>tr]:transition-colors [&>table>tbody>tr]:duration-150 [&>table>tbody>tr:hover]:bg-blue-50/50
                            [&>table>tbody>tr>td]:p-4 [&>table>tbody>tr>td]:border-t [&>table>tbody>tr>td]:border-gray-100 [&>table>tbody>tr>td]:text-gray-700">
                </div>
            </div>
            
            <!-- Call to Action Card -->
            <div class="mt-10 bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300 hover:shadow-md hover:border-blue-100">
                <div class="bg-gradient-to-r from-blue-50 to-teal-50 px-8 py-6">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                        <div class="text-center md:text-left">
                            <p class="text-gray-800 font-semibold text-lg">Butuh informasi lebih lanjut?</p>
                            <p class="text-sm text-gray-600 mt-1">Hubungi kantor desa kami untuk konsultasi dan layanan</p>
                        </div>
                        <Link href="/layanan" class="px-7 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-sm hover:shadow transition-all duration-200 transform hover:-translate-y-0.5">
                            Lihat Layanan
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>


