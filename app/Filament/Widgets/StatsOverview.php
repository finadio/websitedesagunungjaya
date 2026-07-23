<?php

namespace App\Filament\Widgets;

use App\Models\Agenda;
use App\Models\Complaint;
use App\Models\Gallery;
use App\Models\Official;
use App\Models\Page;
use App\Models\Post;
use App\Models\Service;
use App\Models\Statistic;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Get current month stats
        $postsThisMonth = Post::whereMonth('created_at', now()->month)->count();
        $postsLastMonth = Post::whereMonth('created_at', now()->subMonth()->month)->count();
        $postsTrend = $postsLastMonth > 0 ? (($postsThisMonth - $postsLastMonth) / $postsLastMonth) * 100 : 0;

        $complaintsThisMonth = Complaint::whereMonth('created_at', now()->month)->count();
        $complaintsLastMonth = Complaint::whereMonth('created_at', now()->subMonth()->month)->count();
        $complaintsTrend = $complaintsLastMonth > 0 ? (($complaintsThisMonth - $complaintsLastMonth) / $complaintsLastMonth) * 100 : 0;

        return [
            Stat::make('Total Halaman', Page::count())
                ->description('Halaman konten website')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('success')
                ->chart([7, 12, 15, 18, 20, Page::count()]),
            
            Stat::make('Total Berita', Post::count())
                ->description($postsTrend > 0 ? "+{$postsTrend}% dari bulan lalu" : 'Berita & Pengumuman')
                ->descriptionIcon($postsTrend > 0 ? 'heroicon-o-arrow-trending-up' : 'heroicon-o-newspaper')
                ->color($postsTrend > 0 ? 'success' : 'info')
                ->chart([3, 5, 8, 12, 15, Post::count()]),
            
            Stat::make('Total Agenda', Agenda::count())
                ->description('Kegiatan desa')
                ->descriptionIcon('heroicon-o-calendar')
                ->color('warning')
                ->chart([2, 4, 5, 7, 8, Agenda::count()]),
            
            Stat::make('Total Galeri', Gallery::count())
                ->description('Foto dokumentasi')
                ->descriptionIcon('heroicon-o-photo')
                ->color('primary'),
            
            Stat::make('Pengaduan Masuk', Complaint::count())
                ->description($complaintsTrend != 0 ? sprintf('%+.1f%% bulan ini', $complaintsTrend) : 'Total pengaduan')
                ->descriptionIcon($complaintsTrend > 0 ? 'heroicon-o-arrow-trending-up' : 'heroicon-o-chat-bubble-left-right')
                ->color($complaintsTrend > 0 ? 'warning' : 'info'),
            
            Stat::make('Pengaduan Pending', Complaint::where('status', 'pending')->count())
                ->description('Menunggu ditindaklanjuti')
                ->descriptionIcon('heroicon-o-clock')
                ->color('danger'),
            
            Stat::make('Total Layanan', Service::count())
                ->description('Layanan publik')
                ->descriptionIcon('heroicon-o-clipboard-document-check')
                ->color('success'),
            
            Stat::make('Data Statistik', Statistic::count())
                ->description('Data kependudukan')
                ->descriptionIcon('heroicon-o-chart-bar')
                ->color('info'),
        ];
    }
}
