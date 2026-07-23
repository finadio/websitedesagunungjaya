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

class ComprehensiveDatabaseSeeder extends Seeder
{
    public function run(): void
    {
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
                'vision' => 'Terwujudnya Desa Gunungjaya yang Mandiri, Sejahtera, dan Berkeadaban Berlandaskan Nilai-nilai Religius dan Kearifan Lokal.',
                'mission' => "1. Meningkatkan kualitas pelayanan publik yang cepat, mudah, dan transparan.\n2. Mengembangkan potensi ekonomi lokal berbasis pertanian, perkebunan, dan UMKM.\n3. Mewujudkan infrastruktur desa yang memadai dan merata di seluruh wilayah.\n4. Memberdayakan masyarakat melalui pendidikan, kesehatan, dan pelatihan keterampilan.\n5. Melestarikan budaya dan nilai-nilai luhur masyarakat desa.\n6. Meningkatkan kualitas lingkungan hidup yang asri dan lestari.",
                'history' => '<p><strong>Desa Gunungjaya</strong> berdiri sejak tahun 1920-an sebagai pemekaran dari desa induk yang ada di wilayah Kecamatan Belik. Nama "Gunungjaya" diambil dari kondisi geografis wilayah yang berada di kaki pegunungan dan harapan agar desa ini dapat jaya dan berkembang.</p><p>Pada masa kolonial Belanda, wilayah ini merupakan daerah perkebunan yang dikelola oleh tuan tanah. Setelah kemerdekaan Indonesia, tanah-tanah tersebut dikembalikan kepada rakyat dan dikelola secara mandiri.</p><p>Sejak era reformasi hingga saat ini, Desa Gunungjaya terus mengalami pembangunan yang signifikan. Berbagai program pemerintah pusat dan daerah telah berhasil meningkatkan kesejahteraan masyarakat, infrastruktur jalan, irigasi, dan fasilitas umum lainnya.</p>',
                'logo' => null,
            ]
        );

        // Officials (Perangkat Desa Lengkap)
        $officials = [
            ['name' => 'H. Ahmad Hidayat, S.Sos', 'position' => 'Kepala Desa', 'phone' => '081234567890', 'order' => 1],
            ['name' => 'Siti Nurjanah, S.Pd', 'position' => 'Sekretaris Desa', 'phone' => '081234567891', 'order' => 2],
            ['name' => 'Budi Santoso, SE', 'position' => 'Kaur Keuangan', 'phone' => '081234567892', 'order' => 3],
            ['name' => 'Dwi Lestari, S.Kom', 'position' => 'Kaur Perencanaan', 'phone' => '081234567893', 'order' => 4],
            ['name' => 'Eko Prasetyo', 'position' => 'Kaur Umum', 'phone' => '081234567894', 'order' => 5],
            ['name' => 'Tri Wahyuni, S.H', 'position' => 'Kasi Pemerintahan', 'phone' => '081234567895', 'order' => 6],
            ['name' => 'Agus Setiawan, S.Sos', 'position' => 'Kasi Kesejahteraan', 'phone' => '081234567896', 'order' => 7],
            ['name' => 'Rina Wati, A.Md', 'position' => 'Kasi Pelayanan', 'phone' => '081234567897', 'order' => 8],
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
                'excerpt' => 'Pemerintah Desa Gunungjaya akan menyelenggarakan pelayanan KTP dan Kartu Keluarga keliling pada tanggal 15-17 Februari 2026 di seluruh dusun.',
                'content' => '<p><strong>PENGUMUMAN PENTING</strong></p><p>Kepada seluruh warga Desa Gunungjaya, dengan hormat kami sampaikan bahwa Pemerintah Desa bekerjasama dengan Dinas Dukcapil Kabupaten Pemalang akan menyelenggarakan <strong>Pelayanan KTP dan Kartu Keluarga Keliling</strong> dengan jadwal sebagai berikut:</p><ul><li><strong>Rabu, 15 Februari 2026</strong>: Dusun I (Balai Dusun) - Pukul 08.00-12.00 WIB</li><li><strong>Kamis, 16 Februari 2026</strong>: Dusun II (Balai Dusun) - Pukul 08.00-12.00 WIB</li><li><strong>Jumat, 17 Februari 2026</strong>: Dusun III (Balai Dusun) - Pukul 08.00-12.00 WIB</li></ul><p><strong>Persyaratan yang harus dibawa:</strong></p><ol><li>Kartu Keluarga asli dan fotocopy</li><li>KTP lama (jika ada)</li><li>Surat pengantar RT/RW</li><li>Pas foto 3x4 (2 lembar) background merah</li></ol><p>Pelayanan ini <strong>GRATIS</strong> tanpa dipungut biaya apapun. Harap hadir tepat waktu dan patuhi protokol kesehatan.</p><p>Untuk informasi lebih lanjut, dapat menghubungi Kantor Desa Gunungjaya di (0284) 1234567.</p><p>Demikian pengumuman ini kami sampaikan, atas perhatiannya kami ucapkan terima kasih.</p>',
                'category' => 'announcement',
                'is_published' => true,
                'published_at' => now()->subHours(6),
                'image' => null,
                'meta_description' => 'Pelayanan KTP dan KK keliling di Desa Gunungjaya tanggal 15-17 Februari 2026. Gratis tanpa biaya.',
                'meta_keywords' => 'pelayanan KTP, kartu keluarga, dukcapil, pengumuman desa',
            ],
            [
                'title' => 'Desa Gunungjaya Raih Juara 1 Lomba Desa Sehat Tingkat Kabupaten',
                'slug' => 'desa-gunungjaya-juara-1-lomba-desa-sehat',
                'excerpt' => 'Desa Gunungjaya berhasil meraih juara 1 dalam Lomba Desa Sehat Tingkat Kabupaten Pemalang Tahun 2026, mengalahkan 45 desa lainnya.',
                'content' => '<p>Pemalang, 25 Januari 2026 - Desa Gunungjaya berhasil mengukir prestasi membanggakan dengan meraih juara 1 dalam Lomba Desa Sehat Tingkat Kabupaten Pemalang Tahun 2026.</p><p>Penghargaan ini diserahkan langsung oleh Bupati Pemalang, H. Junaedi, S.H., M.Si., dalam acara penganugerahan yang diselenggarakan di Pendopo Kabupaten Pemalang.</p><p>Kepala Desa Gunungjaya, H. Ahmad Hidayat, S.Sos, menyampaikan bahwa prestasi ini merupakan hasil kerja keras seluruh elemen masyarakat desa dalam menjaga kebersihan dan kesehatan lingkungan.</p><p>"Alhamdulillah, kami sangat bersyukur atas penghargaan ini. Ini adalah hasil dari partisipasi aktif seluruh warga dalam program-program kesehatan seperti Posyandu, pemberdayaan PKK, dan kerja bakti rutin," ungkap Kepala Desa.</p><p>Tim juri memberikan penilaian berdasarkan beberapa indikator, antara lain: ketersediaan fasilitas kesehatan, cakupan imunisasi, sanitasi lingkungan, pengelolaan sampah, dan pemberdayaan masyarakat di bidang kesehatan.</p><p>Sebagai juara 1, Desa Gunungjaya berhak membawa pulang trofi, piagam penghargaan, dan uang pembinaan sebesar Rp 25 juta yang akan digunakan untuk pengembangan program kesehatan desa.</p><p>Bupati Pemalang dalam sambutannya mengapresiasi komitmen Pemerintah Desa Gunungjaya dalam meningkatkan derajat kesehatan masyarakat. "Desa Gunungjaya adalah contoh nyata bagaimana desa dapat mandiri dalam mengelola kesehatan masyarakatnya," puji Bupati.</p>',
                'category' => 'achievement',
                'is_published' => true,
                'published_at' => now()->subDays(14),
                'image' => null,
                'meta_description' => 'Desa Gunungjaya juara 1 Lomba Desa Sehat Kabupaten Pemalang 2026, mengalahkan 45 desa lainnya.',
                'meta_keywords' => 'lomba desa sehat, prestasi desa, juara, kesehatan masyarakat',
            ],
            [
                'title' => 'Pelatihan Pembuatan Pupuk Organik untuk Kelompok Tani',
                'slug' => 'pelatihan-pembuatan-pupuk-organik-kelompok-tani',
                'excerpt' => 'Kelompok Tani Desa Gunungjaya mengikuti pelatihan pembuatan pupuk organik dari limbah pertanian untuk meningkatkan produktivitas dan mengurangi biaya produksi.',
                'content' => '<p>Desa Gunungjaya, 20 Januari 2026 - Sebanyak 50 petani yang tergabung dalam Kelompok Tani Desa Gunungjaya mengikuti pelatihan pembuatan pupuk organik dari limbah pertanian yang diselenggarakan oleh Dinas Pertanian Kabupaten Pemalang.</p><p>Kegiatan yang berlangsung selama 2 hari ini menghadirkan narasumber dari Balai Penyuluhan Pertanian dan praktisi pertanian organik yang berpengalaman.</p><p>Ketua Kelompok Tani "Sumber Makmur", Bapak Sutrisno, menyampaikan bahwa pelatihan ini sangat bermanfaat bagi petani. "Dengan membuat pupuk organik sendiri, kami bisa mengurangi biaya produksi hingga 40% dan hasil panen pun lebih berkualitas," jelasnya.</p><p>Materi pelatihan meliputi teknik pembuatan kompos dari jerami dan limbah ternak, pembuatan pupuk cair organik (POC), dan teknik pengaplikasian pupuk organik yang tepat.</p><p>Setiap peserta juga mendapatkan starter kit berupa bibit mikroorganisme lokal (MOL) dan panduan lengkap pembuatan pupuk organik.</p><p>Kepala Desa Gunungjaya mengapresiasi program ini dan berharap petani dapat mempraktikkannya. "Kami akan terus mendukung program pertanian berkelanjutan yang ramah lingkungan," tutupnya.</p>',
                'category' => 'event',
                'is_published' => true,
                'published_at' => now()->subDays(19),
                'image' => null,
                'meta_description' => 'Kelompok Tani Desa Gunungjaya ikuti pelatihan pembuatan pupuk organik untuk tingkatkan produktivitas dan kurangi biaya produksi.',
                'meta_keywords' => 'pupuk organik, kelompok tani, pertanian berkelanjutan, pelatihan petani',
            ],
        ];

        foreach ($posts as $postData) {
            Post::updateOrCreate(
                ['slug' => $postData['slug']],
                $postData
            );
        }

        // Agendas
        $agendas = [
            [
                'title' => 'Musyawarah Desa Perencanaan Pembangunan Tahun 2027',
                'description' => 'Membahas rencana pembangunan desa tahun anggaran 2027, termasuk pengalokasian dana desa untuk program-program prioritas seperti infrastruktur, pemberdayaan masyarakat, dan peningkatan pelayanan publik.',
                'location' => 'Balai Desa Gunungjaya',
                'start_time' => now()->addDays(5)->setTime(9, 0),
                'end_time' => now()->addDays(5)->setTime(14, 0),
            ],
            [
                'title' => 'Posyandu Balita dan Lansia',
                'description' => 'Pemeriksaan kesehatan rutin, penimbangan balita, pemberian vitamin, imunisasi, dan pemeriksaan kesehatan lansia. Harap membawa Buku KIA dan Kartu Identitas.',
                'location' => 'Posyandu Mawar 1, Dusun I',
                'start_time' => now()->addDays(10)->setTime(8, 0),
                'end_time' => now()->addDays(10)->setTime(11, 0),
            ],
            [
                'title' => 'Pelatihan Digital Marketing untuk UMKM Desa',
                'description' => 'Pelatihan gratis bagi pelaku UMKM Desa Gunungjaya tentang pemanfaatan media sosial dan marketplace untuk memasarkan produk. Materi meliputi fotografi produk, copywriting, dan strategi pemasaran online.',
                'location' => 'Aula Balai Desa Gunungjaya',
                'start_time' => now()->addDays(12)->setTime(13, 0),
                'end_time' => now()->addDays(12)->setTime(17, 0),
            ],
            [
                'title' => 'Rapat Koordinasi RT/RW dan Kepala Dukuh',
                'description' => 'Koordinasi bulanan membahas isu-isu yang berkembang di masyarakat, evaluasi program desa, dan perencanaan kegiatan bulan berikutnya. Mohon kehadiran tepat waktu.',
                'location' => 'Ruang Rapat Kantor Desa',
                'start_time' => now()->addDays(15)->setTime(10, 0),
                'end_time' => now()->addDays(15)->setTime(12, 0),
            ],
            [
                'title' => 'Lomba Kebersihan Antar RT Bulan Februari',
                'description' => 'Penilaian lomba kebersihan lingkungan antar RT se-Desa Gunungjaya. Indikator penilaian meliputi kebersihan jalan, drainase, taman, dan penataan sampah. Juara akan mendapat hadiah dan trofi.',
                'location' => 'Seluruh Wilayah Desa Gunungjaya',
                'start_time' => now()->addDays(17)->setTime(8, 0),
                'end_time' => now()->addDays(17)->setTime(15, 0),
            ],
            [
                'title' => 'Senam Sehat Bersama dan Jalan Santai',
                'description' => 'Kegiatan senam sehat dan jalan santai dalam rangka memperingati Hari Kesehatan Nasional. Terbuka untuk seluruh warga. Peserta akan mendapatkan doorprize menarik.',
                'location' => 'Lapangan Desa Gunungjaya',
                'start_time' => now()->addDays(20)->setTime(6, 30),
                'end_time' => now()->addDays(20)->setTime(9, 0),
            ],
        ];

        foreach ($agendas as $agenda) {
            Agenda::create($agenda);
        }

        // Services
        $services = [
            [
                'name' => 'Surat Keterangan Domisili',
                'description' => 'Layanan pembuatan surat keterangan domisili bagi warga yang berdomisili di Desa Gunungjaya. Surat ini diperlukan untuk berbagai keperluan administrasi.',
                'icon' => 'heroicon-o-home',
                'requirements' => "1. KTP Asli dan Fotocopy\n2. Kartu Keluarga Asli dan Fotocopy\n3. Surat Pengantar RT/RW\n4. Pas foto 3x4 (2 lembar)",
                'procedure' => "1. Mengurus surat pengantar dari RT/RW setempat\n2. Datang ke Kantor Desa dengan membawa persyaratan lengkap\n3. Mengisi formulir permohonan\n4. Menunggu proses verifikasi (1-2 hari kerja)\n5. Surat dapat diambil setelah ditandatangani Kepala Desa",
                'processing_time' => '2 hari kerja',
                'fee' => 'Gratis',
                'is_active' => true,
            ],
            [
                'name' => 'Surat Pengantar SKCK',
                'description' => 'Layanan pembuatan surat pengantar untuk penerbitan Surat Keterangan Catatan Kepolisian (SKCK) di Polsek setempat.',
                'icon' => 'heroicon-o-document-text',
                'requirements' => "1. KTP Asli dan Fotocopy\n2. Kartu Keluarga Asli dan Fotocopy\n3. Surat Pengantar RT/RW\n4. Pas foto 4x6 (2 lembar) background merah",
                'procedure' => "1. Mengurus surat pengantar dari RT/RW\n2. Datangke Kantor Desa dengan persyaratan lengkap\n3. Mengisi formulir dan menyerahkan berkas\n4. Surat pengantar dapat diambil pada hari yang sama",
                'processing_time' => '1 hari kerja',
                'fee' => 'Gratis',
                'is_active' => true,
            ],
            [
                'name' => 'Surat Keterangan Usaha',
                'description' => 'Layanan pembuatan surat keterangan usaha bagi pelaku usaha/UMKM di Desa Gunungjaya. Surat ini dapat digunakan untuk mengajukan kredit usaha atau perizinan.',
                'icon' => 'heroicon-o-briefcase',
                'requirements' => "1. KTP Asli dan Fotocopy\n2. Kartu Keluarga Asli dan Fotocopy\n3. Surat Pengantar RT/RW\n4. Foto lokasi usaha\n5. NPWP (jika ada)",
                'procedure' => "1. Mengurus surat pengantar dari RT/RW\n2. Menyiapkan dokumen persyaratan\n3. Datang ke Kantor Desa untuk pengisian formulir\n4. Petugas akan melakukan survey lokasi usaha\n5. Surat dapat diambil setelah proses selesai (3 hari kerja)",
                'processing_time' => '3 hari kerja',
                'fee' => 'Gratis',
                'is_active' => true,
            ],
            [
                'name' => 'Surat Keterangan Tidak Mampu (SKTM)',
                'description' => 'Layanan pembuatan surat keterangan tidak mampu untuk keperluan berobat, pendidikan, atau bantuan sosial lainnya.',
                'icon' => 'heroicon-o-heart',
                'requirements' => "1. KTP Asli dan Fotocopy\n2. Kartu Keluarga Asli dan Fotocopy\n3. Surat Pengantar RT/RW\n4. Surat keterangan dari instansi terkait (rumah sakit/sekolah)\n5. Pas foto 3x4 (2 lembar)",
                'procedure' => "1. Mengurus surat pengantar dari RT/RW dengan keterangan kondisi ekonomi\n2. Datang ke Kantor Desa dengan persyaratan\n3. Mengisi formulir permohonan\n4. Petugas akan melakukan verifikasi data dan kondisi ekonomi\n5. Surat dapat diambil setelah disetujui (2 hari kerja)",
                'processing_time' => '2 hari kerja',
                'fee' => 'Gratis',
                'is_active' => true,
            ],
            [
                'name' => 'Surat Keterangan Kelahiran',
                'description' => 'Layanan pembuatan surat keterangan kelahiran sebagai syarat pembuatan Akta Kelahiran di Dinas Dukcapil.',
                'icon' => 'heroicon-o-user-plus',
                'requirements' => "1. KTP dan KK Asli serta Fotocopy kedua orang tua\n2. Surat keterangan lahir dari Bidan/Dokter/Rumah Sakit\n3. Buku nikah orang tua (asli dan fotocopy)\n4. Surat Pengantar RT/RW\n5. Saksi 2 orang (KTP asli dan fotocopy)",
                'procedure' => "1. Mengurus surat pengantar dari RT/RW\n2. Melengkapi persyaratan dokumen\n3. Datang ke Kantor Desa bersama 2 orang saksi\n4. Mengisi formulir keterangan kelahiran\n5. Surat dapat diambil pada hari yang sama",
                'processing_time' => '1 hari kerja',
                'fee' => 'Gratis',
                'is_active' => true,
            ],
            [
                'name' => 'Surat Keterangan Pindah',
                'description' => 'Layanan pembuatan surat keterangan pindah penduduk keluar dari Desa Gunungjaya.',
                'icon' => 'heroicon-o-arrow-right-on-rectangle',
                'requirements' => "1. KTP dan KK Asli serta Fotocopy\n2. Surat Pengantar RT/RW\n3. Surat keterangan dari tempat tujuan\n4. Pas foto 3x4 (4 lembar)",
                'procedure' => "1. Mengurus surat pengantar dari RT/RW\n2. Datang ke Kantor Desa dengan persyaratan lengkap\n3. Mengisi formulir keterangan pindah\n4. Proses verifikasi data penduduk\n5. Surat dapat diambil setelah selesai (2 hari kerja)",
                'processing_time' => '2 hari kerja',
                'fee' => 'Gratis',
                'is_active' => true,
            ],
            [
                'name' => 'Surat Keterangan Menikah (N1-N4)',
                'description' => 'Layanan pembuatan surat pengantar nikah (N1, N2, N3, N4) untuk keperluan pernikahan di KUA.',
                'icon' => 'heroicon-o-heart',
                'requirements' => "1. KTP dan KK Asli serta Fotocopy calon pengantin\n2. Surat Pengantar RT/RW\n3. Akta kelahiran asli dan fotocopy\n4. Ijazah terakhir fotocopy\n5. Pas foto 2x3 (4 lembar) masing-masing\n6. Surat keterangan belum menikah dari RT/RW",
                'procedure' => "1. Mengurus surat pengantar dari RT/RW\n2. Melengkapi seluruh persyaratan\n3. Datang ke Kantor Desa untuk pendaftaran\n4. Mengisi formulir N1, N2, N3, N4\n5. Surat dapat diambil setelah ditandatangani (3 hari kerja)",
                'processing_time' => '3 hari kerja',
                'fee' => 'Gratis',
                'is_active' => true,
            ],
            [
                'name' => 'Legalisir Surat',
                'description' => 'Layanan legalisir surat-surat yang dikeluarkan oleh Pemerintah Desa Gunungjaya.',
                'icon' => 'heroicon-o-document-check',
                'requirements' => "1. Surat asli yang akan dilegalisir\n2. KTP pemohon (asli dan fotocopy)\n3. Surat Pengantar RT/RW (jika diperlukan)",
                'procedure' => "1. Datang ke Kantor Desa dengan surat asli\n2. Mengisi formulir permohonan legalisir\n3. Petugas akan melakukan pengecekan dokumen\n4. Legalisir dapat selesai pada hari yang sama",
                'processing_time' => 'Selesai pada hari yang sama',
                'fee' => 'Gratis',
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['name' => $service['name']],
                $service
            );
        }

        // Settings
        $settings = [
            ['key' => 'site_name', 'value' => 'Website Resmi Desa Gunungjaya'],
            ['key' => 'site_description', 'value' => 'Portal informasi dan layanan publik Desa Gunungjaya, Kecamatan Belik, Kabupaten Pemalang, Jawa Tengah'],
            ['key' => 'site_keywords', 'value' => 'desa gunungjaya, pemalang, jawa tengah, pemerintah desa, layanan publik'],
            ['key' => 'contact_email', 'value' => 'info@gunungjaya.desa.id'],
            ['key' => 'contact_phone', 'value' => '(0284) 1234567'],
            ['key' => 'contact_address', 'value' => 'Jl. Raya Gunungjaya No. 123, Kecamatan Belik, Kabupaten Pemalang, Jawa Tengah 52355'],
            ['key' => 'facebook_url', 'value' => 'https://facebook.com/desagunungjaya'],
            ['key' => 'instagram_url', 'value' => 'https://instagram.com/desagunungjaya'],
            ['key' => 'youtube_url', 'value' => 'https://youtube.com/@desagunungjaya'],
            ['key' => 'twitter_url', 'value' => ''],
            ['key' => 'office_hours', 'value' => "Senin - Jumat: 08.00 - 15.00 WIB\nSabtu: 08.00 - 12.00 WIB\nMinggu & Hari Libur: Tutup"],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
        
        $this->command->info('✓ Comprehensive database seeded successfully!');
        $this->command->info('✓ Default admin: admin@gunungjaya.desa.id / password');
    }
}
