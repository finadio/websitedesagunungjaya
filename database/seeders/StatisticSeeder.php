<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Statistic;

class StatisticSeeder extends Seeder
{
    public function run(): void
    {
        $year = date('Y');
        
        $statistics = [
            // Demografi
            [
                'category' => 'demografi',
                'label' => 'Jumlah Penduduk',
                'value' => '5234',
                'icon' => 'heroicon-o-users',
                'order' => 1,
                'year' => $year,
            ],
            [
                'category' => 'demografi',
                'label' => 'Jumlah Kepala Keluarga',
                'value' => '1456',
                'icon' => 'heroicon-o-home',
                'order' => 2,
                'year' => $year,
            ],
            [
                'category' => 'demografi',
                'label' => 'Laki-laki',
                'value' => '2678',
                'icon' => 'heroicon-o-user',
                'order' => 3,
                'year' => $year,
            ],
            [
                'category' => 'demografi',
                'label' => 'Perempuan',
                'value' => '2556',
                'icon' => 'heroicon-o-user',
                'order' => 4,
                'year' => $year,
            ],
            
            // Pendidikan
            [
                'category' => 'pendidikan',
                'label' => 'Tidak/Belum Sekolah',
                'value' => '234',
                'icon' => 'heroicon-o-academic-cap',
                'order' => 1,
                'year' => $year,
            ],
            [
                'category' => 'pendidikan',
                'label' => 'SD/Sederajat',
                'value' => '1456',
                'icon' => 'heroicon-o-academic-cap',
                'order' => 2,
                'year' => $year,
            ],
            [
                'category' => 'pendidikan',
                'label' => 'SMP/Sederajat',
                'value' => '987',
                'icon' => 'heroicon-o-academic-cap',
                'order' => 3,
                'year' => $year,
            ],
            [
                'category' => 'pendidikan',
                'label' => 'SMA/Sederajat',
                'value' => '1234',
                'icon' => 'heroicon-o-academic-cap',
                'order' => 4,
                'year' => $year,
            ],
            [
                'category' => 'pendidikan',
                'label' => 'Diploma/Sarjana',
                'value' => '456',
                'icon' => 'heroicon-o-academic-cap',
                'order' => 5,
                'year' => $year,
            ],
            
            // Pekerjaan
            [
                'category' => 'pekerjaan',
                'label' => 'Petani',
                'value' => '876',
                'icon' => 'heroicon-o-home-modern',
                'order' => 1,
                'year' => $year,
            ],
            [
                'category' => 'pekerjaan',
                'label' => 'Buruh',
                'value' => '543',
                'icon' => 'heroicon-o-wrench',
                'order' => 2,
                'year' => $year,
            ],
            [
                'category' => 'pekerjaan',
                'label' => 'Wiraswasta',
                'value' => '432',
                'icon' => 'heroicon-o-building-storefront',
                'order' => 3,
                'year' => $year,
            ],
            [
                'category' => 'pekerjaan',
                'label' => 'PNS/TNI/Polri',
                'value' => '123',
                'icon' => 'heroicon-o-building-office',
                'order' => 4,
                'year' => $year,
            ],
            [
                'category' => 'pekerjaan',
                'label' => 'Lainnya',
                'value' => '234',
                'icon' => 'heroicon-o-briefcase',
                'order' => 5,
                'year' => $year,
            ],
            
            // Ekonomi
            [
                'category' => 'ekonomi',
                'label' => 'UMKM Aktif',
                'value' => '67',
                'icon' => 'heroicon-o-building-storefront',
                'order' => 1,
                'year' => $year,
            ],
            [
                'category' => 'ekonomi',
                'label' => 'Warung/Toko',
                'value' => '45',
                'icon' => 'heroicon-o-shopping-cart',
                'order' => 2,
                'year' => $year,
            ],
            [
                'category' => 'ekonomi',
                'label' => 'Industri Rumah Tangga',
                'value' => '22',
                'icon' => 'heroicon-o-home',
                'order' => 3,
                'year' => $year,
            ],
        ];
        
        // Hapus data lama untuk tahun ini untuk menghindari duplikasi  
        Statistic::where('year', $year)->delete();
        
        foreach ($statistics as $statistic) {
            Statistic::create($statistic);
        }
    }
}
