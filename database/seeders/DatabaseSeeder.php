<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\VillageProfile;
use App\Models\Post;
use App\Models\Agenda;
use App\Models\Service;
use App\Models\Official;
use App\Models\Gallery;
use App\Models\Setting;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PageSeeder::class,
            StatisticSeeder::class,
        ]);

        // Admin User
        User::updateOrCreate(
            ['email' => 'admin@gunungjaya.desa.id'],
            [
                'name' => 'Administrator Desa',
                'password' => Hash::make('password'),
            ]
        );

        // Village Profile
        VillageProfile::updateOrCreate(
            ['id' => 1],
            [
                'name' => 'Desa Gunungjaya',
                'description' => 'Desa Gunungjaya adalah desa yang terletak di kaki pegunungan dengan potensi alam yang melimpah. Masyarakat desa yang mayoritas bekerja di sektor pertanian dan perkebunan, hidup dengan semangat gotong royong dan kearifan lokal yang masih terjaga. Desa ini terus berkembang dengan berbagai program pembangunan infrastruktur dan pemberdayaan masyarakat.',
                'address' => 'Jl. Raya Gunungjaya No. 123, Kecamatan Belik, Kabupaten Pemalang, Jawa Tengah 52355',
                'email' => 'info@gunungjaya.desa.id',
                'phone' => '(0284) 1234567',
                'fax' => '(0284) 1234568',
                'website' => 'https://gunungjaya.desa.id',
                'village_code' => '332601001',
                'postal_code' => '52355',
                'area' => '425.50',
                'population' => '4250',
                'vision' => 'Terwujudnya Desa Gunungjaya yang Mandiri, Sejahtera, dan Berkeadaban Berlandaskan Nilai-nilai Religius dan Kearifan Lokal.',
                'mission' => "1. Meningkatkan kualitas pelayanan publik yang cepat, mudah, dan transparan.\n2. Mengembangkan potensi ekonomi lokal berbasis pertanian, perkebunan, dan UMKM.\n3. Mewujudkan infrastruktur desa yang memadai dan merata di seluruh wilayah.\n4. Memberdayakan masyarakat melalui pendidikan, kesehatan, dan pelatihan keterampilan.\n5. Melestarikan budaya dan nilai-nilai luhur masyarakat desa.\n6. Meningkatkan kualitas lingkungan hidup yang asri dan lestari.",
                'history' => '<p><strong>Desa Gunungjaya</strong> berdiri sejak tahun 1920-an sebagai pemekaran dari desa induk yang ada di wilayah Kecamatan Belik. Nama "Gunungjaya" diambil dari kondisi geografis wilayah yang berada di kaki pegunungan dan harapan agar desa ini dapat jaya dan berkembang.</p><p>Pada masa kolonial Belanda, wilayah ini merupakan daerah perkebunan yang dikelola oleh tuan tanah. Setelah kemerdekaan Indonesia, tanah-tanah tersebut dikembalikan kepada rakyat dan dikelola secara mandiri.</p><p>Sejak era reformasi hingga saat ini, Desa Gunungjaya terus mengalami pembangunan yang signifikan. Berbagai program pemerintah pusat dan daerah telah berhasil meningkatkan kesejahteraan masyarakat, infrastruktur jalan, irigasi, dan fasilitas umum lainnya.</p>',
                'logo' => null,
                'header_image' => null,
            ]
        );

        // Officials (Perangkat Desa Lengkap)
        $officials = [
            ['name' => 'H. Ahmad Hidayat, S.Sos', 'position' => 'Kepala Desa', 'phone' => '081234567890', 'order' => 1],
            ['name' => 'Siti Nurjanah, S.Pd', 'position' => 'Sekretaris Desa', 'phone' => '081234567891', 'order' => 2],
            ['name' => 'Budi Santoso, SE', 'position' => 'Kaur Keuangan', 'phone' => '081234567892', 'order' => 3],
            ['name' => 'Dwi Lestari, S.Kom', 'position' => 'Kaur Perencanaan', 'phone' => '081234567893', 'order' => 4],
            ['name' => 'Eko Prasetyo', 'position' => 'Kaur Umum', 'phone' => '081234567894', 'order' => 5],
            ['name' => 'Tri Wahyuni', 'position' => 'Kasi Pemerintahan', 'phone' => '081234567895', 'order' => 6],
            ['name' => 'Agus Setiawan', 'position' => 'Kasi Kesejahteraan', 'phone' => '081234567896', 'order' => 7],
            ['name' => 'Rina Wati', 'position' => 'Kasi Pelayanan', 'phone' => '081234567897', 'order' => 8],
            ['name' => 'Joko Widodo', 'position' => 'Kepala Dusun I', 'phone' => '081234567898', 'order' => 9],
            ['name' => 'Sugeng Riyadi', 'position' => 'Kepala Dusun II', 'phone' => '081234567899', 'order' => 10],
            ['name' => 'Wahyu Hidayat', 'position' => 'Kepala Dusun III', 'phone' => '081234567800', 'order' => 11],
        ];

        foreach ($officials as $official) {
            Official::updateOrCreate(
                ['name' => $official['name']],
                $official
            );
        }

        // Posts (Berita Lengkap)
        $posts = [
            [
                'title' => 'Musyawarah Desa Sepakat Bangun Jalan Desa Sepanjang 2 KM',
                'slug' => 'musdes-sepakat-bangun-jalan-desa-2-km',
                'excerpt' => 'Musyawarah Desa yang dihadiri seluruh elemen masyarakat sepakat mengalokasikan dana desa untuk pembangunan jalan sepanjang 2 kilometer di wilayah Dusun II.',
                'content' => '<p>Desa Gunungjaya, 5 Februari 2026 - Musyawarah Desa (Musdes) yang diselenggarakan di Balai Desa Gunungjaya pada hari Minggu kemarin berhasil mencapai kesepakatan penting terkait pembangunan infrastruktur desa.</p><p>Kepala Desa Gunungjaya, H. Ahmad Hidayat, S.Sos, menyampaikan bahwa pembangunan jalan ini merupakan prioritas utama mengingat kondisi jalan yang ada saat ini sudah tidak layak dan mengganggu aktivitas warga, terutama saat musim hujan.</p><p>"Alhamdulillah, seluruh elemen masyarakat sepakat untuk mengalokasikan dana desa sebesar Rp 800 juta untuk pembangunan jalan sepanjang 2 kilometer di wilayah Dusun II. Jalan ini sangat vital karena menghubungkan pemukiman warga dengan area perkebunan," ujar Kepala Desa.</p><p>Pembangunan jalan ini direncanakan akan dimulai pada bulan Maret 2026 dan ditargetkan selesai dalam waktu 4 bulan. Spesifikasi jalan yang akan dibangun adalah jalan cor beton dengan lebar 3,5 meter dan tebal 15 cm.</p><p>Sementara itu, Ketua BPD Desa Gunungjaya, Bapak Suryanto, mengapresiasi partisipasi aktif masyarakat dalam musyawarah ini. "Ini adalah bukti nyata gotong royong dan musyawarah mufakat yang masih hidup di desa kita," tutupnya.</p>',
                'category' => 'news',
                'is_published' => true,
                'published_at' => now()->subDays(3),
                'image' => null,
                'meta_description' => 'Musyawarah Desa Gunungjaya sepakat membangun jalan desa sepanjang 2 KM dengan anggaran Rp 800 juta dari dana desa.',
                'meta_keywords' => 'musyawarah desa, pembangunan jalan, dana desa, infrastruktur desa',
            ],
            [
                'title' => 'Penyaluran BLT Dana Desa Tahap I Tahun 2026 Telah Dimulai',
                'slug' => 'penyaluran-blt-dana-desa-tahap-1-2026',
                'excerpt' => 'Pemerintah Desa Gunungjaya telah mulai menyalurkan Bantuan Langsung Tunai (BLT) Dana Desa Tahap I kepada 250 Keluarga Penerima Manfaat (KPM).',
                'content' => '<p>Desa Gunungjaya, 1 Februari 2026 - Pemerintah Desa Gunungjaya resmi memulai penyaluran Bantuan Langsung Tunai (BLT) Dana Desa Tahap I Tahun 2026 kepada masyarakat yang terdampak ekonomi.</p><p>Sekretaris Desa, Siti Nurjanah, S.Pd, menjelaskan bahwa BLT Dana Desa tahun ini disalurkan kepada 250 Keluarga Penerima Manfaat (KPM) dengan besaran Rp 300.000 per bulan untuk 3 bulan.</p><p>"Total anggaran yang dialokasikan untuk program ini adalah Rp 225 juta. Penyaluran dilakukan secara bertahap dengan protokol kesehatan yang ketat," jelas Sekretaris Desa.</p><p>Proses penyaluran dilakukan di Balai Desa dengan menggunakan sistem transfer ke rekening bank masing-masing KPM untuk meminimalisir kontak fisik dan meningkatkan transparansi.</p><p>Salah satu penerima BLT, Ibu Sumarni (52 tahun), mengungkapkan rasa syukurnya. "Alhamdulillah, bantuan ini sangat membantu kami yang ekonominya terdampak. Terima kasih kepada Pemerintah Desa yang telah memperhatikan nasib kami," ungkapnya.</p>',
                'category' => 'news',
                'is_published' => true,
                'published_at' => now()->subDays(7),
                'image' => null,
                'meta_description' => 'Penyaluran BLT Dana Desa Gunungjaya Tahap I 2026 untuk 250 KPM dengan besaran Rp 300 ribu per bulan.',
                'meta_keywords' => 'BLT dana desa, bantuan langsung tunai, KPM, kesejahteraan masyarakat',
            ],
            [
                'title' => 'Kerja Bakti Bersama Membersihkan Saluran Irigasi dan Selokan',
                'slug' => 'kerja-bakti-bersama-membersihkan-saluran-irigasi',
                'excerpt' => 'Ratusan warga Desa Gunungjaya bahu-membahu membersihkan saluran irigasi dan selokan di seluruh wilayah desa dalam rangka mencegah banjir di musim hujan.',
                'content' => '<p>Desa Gunungjaya, 28 Januari 2026 - Semangat gotong royong masyarakat Desa Gunungjaya kembali terlihat dalam kegiatan kerja bakti membersihkan saluran irigasi dan selokan yang diselenggarakan pada hari Minggu lalu.</p><p>Kegiatan yang diprakarsai oleh Pemerintah Desa ini diikuti oleh ratusan warga dari ketiga dusun. Mereka bergotong royong membersihkan sampah, lumpur, dan tanaman liar yang menyumbat aliran air.</p><p>"Kegiatan ini sangat penting untuk mencegah banjir dan memastikan air irigasi untuk sawah warga bisa mengalir dengan lancar," ujar Kepala Desa Gunungjaya saat membuka kegiatan.</p><p>Selain membersihkan saluran irigasi, warga juga melakukan pengerukan di beberapa titik yang mengalami pendangkalan. Alat-alat berat seperti excavator juga dikerahkan untuk membantu proses pengerukan.</p><p>Kegiatan yang berlangsung dari pukul 07.00 hingga 12.00 WIB ini juga dimeriahkan dengan pembagian makanan dan minuman yang disiapkan oleh Tim PKK Desa Gunungjaya.</p><p>Kepala Dusun II, Bapak Sugeng Riyadi, mengapresiasi partisipasi warga. "Ini adalah bukti bahwa semangat gotong royong di desa kita masih sangat kuat. Semoga kedepannya kita bisa lebih kompak lagi," harapnya.</p>',
                'category' => 'event',
                'is_published' => true,
                'published_at' => now()->subDays(11),
                'image' => null,
                'meta_description' => 'Ratusan warga Desa Gunungjaya gotong royong membersihkan saluran irigasi untuk mencegah banjir di musim hujan.',
                'meta_keywords' => 'kerja bakti, gotong royong, saluran irigasi, pencegahan banjir',
            ],
            [
                'title' => 'Pengumuman: Pelayanan KTP dan KK Keliling 15-17 Februari 2026',
                'slug' => 'pengumuman-pelayanan-ktp-kk-keliling-februari-2026',
                'excerpt' => 'Dinas Kependudukan dan Catatan Sipil Kabupaten akan mengadakan pelayanan KTP dan KK keliling di Desa Gunungjaya pada tanggal 15-17 Februari 2026.',
                'content' => '<p>Desa Gunungjaya, 25 Januari 2026 - Pemerintah Desa Gunungjaya mengumumkan bahwa Dinas Kependudukan dan Catatan Sipil (Disdukcapil) Kabupaten Pemalang akan mengadakan pelayanan administrasi kependudukan keliling di wilayah desa.</p><p>Pelayanan ini akan berlangsung selama 3 hari, yakni pada tanggal 15-17 Februari 2026, bertempat di Balai Desa Gunungjaya mulai pukul 08.00 - 14.00 WIB.</p><p><strong>Jenis layanan yang tersedia:</strong></p><ul><li>Pembuatan KTP Elektronik (e-KTP)</li><li>Pembuatan Kartu Keluarga (KK)</li><li>Pembuatan Akta Kelahiran</li><li>Pembuatan Akta Kematian</li><li>Surat Pindah Datang</li></ul><p><strong>Persyaratan umum:</strong></p><ul><li>Untuk KTP: Membawa KK asli, pas foto 3x4 (2 lembar)</li><li>Untuk KK: Membawa KTP semua anggota keluarga, akta nikah, surat keterangan pindah (jika ada)</li><li>Untuk Akta Kelahiran: Membawa surat keterangan lahir dari bidan/RS, KTP & KK orang tua, akta nikah orang tua</li></ul><p>Kepala Desa mengimbau seluruh warga yang memerlukan layanan administrasi kependudukan untuk memanfaatkan kesempatan ini dengan baik. "Ini adalah kesempatan yang sangat baik karena warga tidak perlu ke kantor Disdukcapil yang jaraknya cukup jauh," ujar Kepala Desa.</p><p>Untuk informasi lebih lanjut, warga dapat menghubungi Kantor Desa Gunungjaya di nomor (0284) 1234567.</p>',
                'category' => 'announcement',
                'is_published' => true,
                'published_at' => now()->subDays(14),
                'image' => null,
                'meta_description' => 'Pelayanan KTP dan KK keliling di Desa Gunungjaya tanggal 15-17 Februari 2026 di Balai Desa.',
                'meta_keywords' => 'pelayanan KTP, KK keliling, Disdukcapil, administrasi kependudukan',
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }

        // Agendas
        Agenda::create([
            'title' => 'Musyawarah Desa Perencanaan Pembangunan',
            'description' => 'Membahas rencana pembangunan desa tahun anggaran 2027',
            'location' => 'Balai Desa Gunung Jaya',
            'start_time' => now()->addDays(3)->setTime(9, 0),
            'end_time' => now()->addDays(3)->setTime(12, 0),
        ]);

        Agenda::create([
            'title' => 'Posyandu Balita & Lansia',
            'description' => 'Pemeriksaan kesehatan rutin',
            'location' => 'Posyandu Mawar 1',
            'start_time' => now()->addDays(7)->setTime(8, 0),
            'end_time' => now()->addDays(7)->setTime(11, 0),
        ]);

        // Services
        Service::create([
            'name' => 'Surat Keterangan Domisili',
            'description' => 'Layanan pembuatan surat keterangan domisili bagi warga.',
            'icon' => 'heroicon-o-home',
            'requirements' => "1. KTP Asli & Fotocopy\n2. KK Asli & Fotocopy\n3. Surat Pengantar RT/RW",
        ]);

        Service::create([
            'name' => 'Surat Pengantar SKCK',
            'description' => 'Layanan pembuatan surat pengantar untuk penerbitan SKCK di Polsek.',
            'icon' => 'heroicon-o-document-text',
            'requirements' => "1. KTP Asli & Fotocopy\n2. KK Asli & Fotocopy\n3. Surat Pengantar RT/RW",
        ]);

        Service::create([
            'name' => 'Surat Keterangan Usaha',
            'description' => 'Layanan pembuatan surat keterangan usaha untuk UMKM.',
            'icon' => 'heroicon-o-briefcase',
            'requirements' => "1. KTP Asli & Fotocopy\n2. KK Asli & Fotocopy\n3. Surat Pengantar RT/RW\n4. Foto tempat usaha",
        ]);

        Service::create([
            'name' => 'Surat Keterangan Tidak Mampu',
            'description' => 'Layanan pembuatan surat keterangan tidak mampu untuk keperluan berobat atau sekolah.',
            'icon' => 'heroicon-o-heart',
            'requirements' => "1. KTP Asli & Fotocopy\n2. KK Asli & Fotocopy\n3. Surat Pengantar RT/RW\n4. Surat Keterangan dari instansi terkait",
        ]);

        // Galleries
        Gallery::create([
            'title' => 'Musyawarah Desa Pembangunan 2026',
            'description' => 'Kegiatan musyawarah desa membahas rencana pembangunan infrastruktur desa tahun 2026',
            'image' => null,
            'category' => 'event',
            'order' => 1,
        ]);

        Gallery::create([
            'title' => 'Penyaluran BLT Dana Desa',
            'description' => 'Penyaluran Bantuan Langsung Tunai Dana Desa kepada masyarakat terdampak ekonomi',
            'image' => null,
            'category' => 'event',
            'order' => 2,
        ]);

        Gallery::create([
            'title' => 'Kerja Bakti Bersih Desa',
            'description' => 'Gotong royong membersihkan saluran irigasi dan lingkungan desa',
            'image' => null,
            'category' => 'event',
            'order' => 3,
        ]);

        Gallery::create([
            'title' => 'Pemandangan Sawah Desa Gunungjaya',
            'description' => 'Hamparan sawah hijau di Desa Gunungjaya yang subur dan indah',
            'image' => null,
            'category' => 'village',
            'order' => 4,
        ]);

        Gallery::create([
            'title' => 'Balai Desa Gunungjaya',
            'description' => 'Gedung kantor Balai Desa Gunungjaya yang megah dan modern',
            'image' => null,
            'category' => 'village',
            'order' => 5,
        ]);

        // Settings
        Setting::updateOrCreate(
            ['key' => 'site_name'],
            ['value' => 'Desa Gunungjaya']
        );

        Setting::updateOrCreate(
            ['key' => 'site_tagline'],
            ['value' => 'Desa Mandiri, Sejahtera, dan Berkeadaban']
        );

        Setting::updateOrCreate(
            ['key' => 'contact_email'],
            ['value' => 'info@gunungjaya.desa.id']
        );

        Setting::updateOrCreate(
            ['key' => 'contact_phone'],
            ['value' => '(0284) 1234567']
        );

        Setting::updateOrCreate(
            ['key' => 'facebook_url'],
            ['value' => 'https://facebook.com/desagunungjaya']
        );

        Setting::updateOrCreate(
            ['key' => 'instagram_url'],
            ['value' => 'https://instagram.com/desagunungjaya']
        );

        Setting::updateOrCreate(
            ['key' => 'youtube_url'],
            ['value' => 'https://youtube.com/@desagunungjaya']
        );
    }
}
