<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            // Tentang Desa
            [
                'title' => 'Sejarah Desa',
                'slug' => 'sejarah',
                'content' => '
                <div class="space-y-8">
                    <section>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Sejarah Desa Gunungjaya</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Desa Gunungjaya adalah salah satu desa bersejarah di Kecamatan Belik, Kabupaten Pemalang, Provinsi Jawa Tengah. 
                            Desa ini memiliki perjalanan sejarah panjang yang mencerminkan semangat gotong royong dan ketahanan masyarakat dalam menghadapi berbagai tantangan zaman.
                        </p>
                    </section>

                    <section class="bg-blue-50 p-6 rounded-lg">
                        <h3 class="text-2xl font-bold text-blue-900 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Asal Usul Nama Gunungjaya
                        </h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Nama "Gunungjaya" berasal dari dua kata: <strong>"Gunung"</strong> yang merujuk pada kondisi geografis wilayah yang berada di kaki pegunungan, 
                            dan <strong>"Jaya"</strong> yang memiliki arti kejayaan atau kemakmuran. Nama ini mencerminkan harapan para pendiri desa agar wilayah ini dapat berkembang maju dan sejahtera.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            Menurut cerita turun-temurun dari para sesepuh desa, pada awalnya wilayah ini merupakan hutan belantara yang berada di lereng pegunungan. 
                            Sekelompok perintis dari berbagai daerah mulai membuka lahan dan membangun permukiman sekitar tahun 1920-an.
                        </p>
                    </section>

                    <section>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Masa Kolonial Belanda (1920-1942)
                        </h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Pada masa kolonial Belanda, wilayah yang kini menjadi Desa Gunungjaya merupakan bagian dari perkebunan besar yang dikelola oleh tuan tanah kolonial. 
                            Tanah-tanah tersebut ditanami berbagai komoditas perkebunan seperti kopi, cengkeh, dan kelapa.
                        </p>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Masyarakat lokal pada masa itu bekerja sebagai buruh perkebunan dengan sistem kerja paksa yang disebut "rodi". 
                            Meskipun dalam kondisi yang sulit, semangat gotong royong masyarakat tetap terjaga melalui praktik tradisi "sambatan" dan "gugur gunung".
                        </p>
                        <div class="bg-amber-50 border-l-4 border-amber-500 p-4 mt-4">
                            <p class="text-amber-800 italic">
                                "Masa kolonial mengajarkan nenek moyang kami tentang pentingnya persatuan dan kekompakan dalam menghadapi kesulitan." 
                                - Kisah dari para sesepuh desa
                            </p>
                        </div>
                    </section>

                    <section>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                            </svg>
                            Era Kemerdekaan (1945-1966)
                        </h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Setelah proklamasi kemerdekaan Indonesia pada 17 Agustus 1945, masyarakat Gunungjaya ikut berjuang mempertahankan kemerdekaan. 
                            Beberapa pemuda desa bergabung dengan pasukan pejuang kemerdekaan dan ikut dalam berbagai pertempuran melawan penjajah.
                        </p>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Pada tahun 1950, setelah pengakuan kedaulatan Republik Indonesia, tanah-tanah perkebunan yang sebelumnya dikuasai kolonial 
                            dikembalikan kepada rakyat melalui program landreform. Masyarakat Gunungjaya mulai mengelola lahan secara mandiri, 
                            terutama mengembangkan pertanian padi, palawija, dan perkebunan rakyat.
                        </p>
                        <ul class="list-disc list-inside text-gray-700 space-y-2 ml-4">
                            <li>1952: Terbentuknya struktur pemerintahan desa pertama dengan kepala desa terpilih</li>
                            <li>1959: Pembangunan gedung balai desa yang pertama</li>
                            <li>1963: Didirikannya sekolah dasar pertama di desa</li>
                            <li>1965: Pembangunan masjid desa yang masih berdiri hingga kini</li>
                        </ul>
                    </section>

                    <section class="bg-green-50 p-6 rounded-lg">
                        <h3 class="text-2xl font-bold text-green-900 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            Era Orde Baru (1966-1998)
                        </h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Pada masa Orde Baru, Desa Gunungjaya mengalami pembangunan infrastruktur yang cukup pesat. 
                            Program pemerintah pusat seperti INPRES (Instruksi Presiden) membawa perubahan signifikan pada kondisi desa.
                        </p>
                        <div class="grid md:grid-cols-2 gap-4 mt-4">
                            <div class="bg-white p-4 rounded shadow-sm">
                                <h4 class="font-bold text-green-800 mb-2">Pembangunan Fisik:</h4>
                                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                    <li>Pembangunan jalan desa beraspal (1975)</li>
                                    <li>Elektrisifikasi pedesaan (1980)</li>
                                    <li>Pembangunan irigasi teknis (1985)</li>
                                    <li>Gedung balai desa baru (1992)</li>
                                </ul>
                            </div>
                            <div class="bg-white p-4 rounded shadow-sm">
                                <h4 class="font-bold text-green-800 mb-2">Pembangunan Sosial:</h4>
                                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1">
                                    <li>Program KB (Keluarga Berencana)</li>
                                    <li>Pembentukan Posyandu</li>
                                    <li>Program Revolusi Hijau pertanian</li>
                                    <li>Pembentukan Karang Taruna</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <section>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Era Reformasi hingga Kini (1998-Sekarang)
                        </h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Memasuki era reformasi, Desa Gunungjaya terus mengalami perkembangan yang signifikan, terutama setelah diberlakukannya 
                            Undang-Undang Nomor 6 Tahun 2014 tentang Desa yang memberikan kewenangan lebih besar kepada pemerintah desa.
                        </p>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Dana Desa yang mulai disalurkan sejak tahun 2015 menjadi katalis perubahan besar dalam pembangunan infrastruktur dan pemberdayaan masyarakat. 
                            Berbagai program pembangunan berhasil dilaksanakan dengan partisipasi aktif masyarakat.
                        </p>
                        
                        <div class="bg-gradient-to-r from-blue-50 to-green-50 p-6 rounded-lg mt-4">
                            <h4 class="font-bold text-xl text-gray-900 mb-3">Pencapaian Era Modern (2015-2026):</h4>
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <span class="text-green-600 font-bold mr-3">✓</span>
                                    <p class="text-gray-700">Pembangunan dan perbaikan jalan desa sepanjang 15 KM</p>
                                </div>
                                <div class="flex items-start">
                                    <span class="text-green-600 font-bold mr-3">✓</span>
                                    <p class="text-gray-700">Renovasi total gedung balai desa dengan fasilitas modern</p>
                                </div>
                                <div class="flex items-start">
                                    <span class="text-green-600 font-bold mr-3">✓</span>
                                    <p class="text-gray-700">Pembangunan sistem drainase dan sanitasi</p>
                                </div>
                                <div class="flex items-start">
                                    <span class="text-green-600 font-bold mr-3">✓</span>
                                    <p class="text-gray-700">Program BUMDes (Badan Usaha Milik Desa) yang produktif</p>
                                </div>
                                <div class="flex items-start">
                                    <span class="text-green-600 font-bold mr-3">✓</span>
                                    <p class="text-gray-700">Digitalisasi pelayanan administrasi desa</p>
                                </div>
                                <div class="flex items-start">
                                    <span class="text-green-600 font-bold mr-3">✓</span>
                                    <p class="text-gray-700">Pengembangan wisata desa dan UMKM lokal</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Tokoh-Tokoh Penting dalam Sejarah Desa
                        </h3>
                        <div class="grid md:grid-cols-2 gap-6 mt-4">
                            <div class="bg-gray-50 p-5 rounded-lg border-l-4 border-blue-500">
                                <h4 class="font-bold text-lg text-gray-900 mb-2">Mbah Wiryo Dikromo</h4>
                                <p class="text-sm text-gray-600 mb-2">(Perintis Desa, 1920-1945)</p>
                                <p class="text-gray-700 text-sm">
                                    Tokoh perintis yang membuka lahan dan memimpin pembangunan permukiman awal di wilayah Gunungjaya. 
                                    Beliau juga aktif dalam perjuangan kemerdekaan sebagai koordinator pejuang di wilayah Belik.
                                </p>
                            </div>
                            <div class="bg-gray-50 p-5 rounded-lg border-l-4 border-green-500">
                                <h4 class="font-bold text-lg text-gray-900 mb-2">Kyai Haji Mukhtar</h4>
                                <p class="text-sm text-gray-600 mb-2">(Tokoh Agama, 1950-1985)</p>
                                <p class="text-gray-700 text-sm">
                                    Pemimpin spiritual yang mendirikan masjid desa dan pesantren pertama. Berperan besar dalam 
                                    membangun karakter religius masyarakat Gunungjaya yang masih terjaga hingga kini.
                                </p>
                            </div>
                            <div class="bg-gray-50 p-5 rounded-lg border-l-4 border-yellow-500">
                                <h4 class="font-bold text-lg text-gray-900 mb-2">Bapak Sukarman</h4>
                                <p class="text-sm text-gray-600 mb-2">(Kepala Desa 1980-2000)</p>
                                <p class="text-gray-700 text-sm">
                                    Kepala desa terlama yang berhasil membawa perubahan besar dalam infrastruktur dan pendidikan. 
                                    Di masa kepemimpinannya, Desa Gunungjaya menjadi salah satu desa percontohan di Kabupaten Pemalang.
                                </p>
                            </div>
                            <div class="bg-gray-50 p-5 rounded-lg border-l-4 border-purple-500">
                                <h4 class="font-bold text-lg text-gray-900 mb-2">Ibu Siti Aisyah</h4>
                                <p class="text-sm text-gray-600 mb-2">(Ketua PKK 1985-2010)</p>
                                <p class="text-gray-700 text-sm">
                                    Pelopor pemberdayaan perempuan dan UMKM di desa. Berkat dedikasinya, banyak ibu-ibu desa yang 
                                    mandiri secara ekonomi melalui berbagai usaha kerajinan dan kuliner.
                                </p>
                            </div>
                        </div>
                    </section>

                    <section class="bg-gradient-to-r from-purple-50 to-pink-50 p-6 rounded-lg">
                        <h3 class="text-2xl font-bold text-purple-900 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            Peristiwa Bersejarah Penting
                        </h3>
                        <div class="space-y-4">
                            <div class="bg-white p-4 rounded shadow-sm">
                                <div class="flex items-start">
                                    <span class="bg-purple-600 text-white rounded-full px-3 py-1 text-sm font-bold mr-3">1952</span>
                                    <div>
                                        <h4 class="font-bold text-gray-900">Penetapan Resmi Status Desa</h4>
                                        <p class="text-gray-700 text-sm mt-1">Gunungjaya resmi ditetapkan sebagai desa definitif oleh pemerintah Kabupaten Pemalang</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white p-4 rounded shadow-sm">
                                <div class="flex items-start">
                                    <span class="bg-purple-600 text-white rounded-full px-3 py-1 text-sm font-bold mr-3">1975</span>
                                    <div>
                                        <h4 class="font-bold text-gray-900">Banjir Besar dan Solidaritas Masyarakat</h4>
                                        <p class="text-gray-700 text-sm mt-1">Banjir bandang yang melanda menunjukkan kekompakan warga dalam gotong royong rehabilitasi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white p-4 rounded shadow-sm">
                                <div class="flex items-start">
                                    <span class="bg-purple-600 text-white rounded-full px-3 py-1 text-sm font-bold mr-3">2010</span>
                                    <div>
                                        <h4 class="font-bold text-gray-900">Juara Lomba Desa Tingkat Provinsi</h4>
                                        <p class="text-gray-700 text-sm mt-1">Desa Gunungjaya meraih juara 2 lomba Desa Tingkat Provinsi Jawa Tengah</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white p-4 rounded shadow-sm">
                                <div class="flex items-start">
                                    <span class="bg-purple-600 text-white rounded-full px-3 py-1 text-sm font-bold mr-3">2020</span>
                                    <div>
                                        <h4 class="font-bold text-gray-900">Pandemi COVID-19 dan Tanggap Bencana</h4>
                                        <p class="text-gray-700 text-sm mt-1">Desa Gunungjaya menjadi contoh penanganan pandemi dengan pembentukan relawan dan dapur umum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="border-t-4 border-blue-500 pt-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Warisan dan Budaya yang Terjaga</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Sepanjang perjalanan sejarahnya, Desa Gunungjaya berhasil mempertahankan nilai-nilai luhur budaya Jawa yang diwariskan turun-temurun. 
                            Tradisi gotong royong, sambatan, kenduri desa, dan berbagai upacara adat masih dilaksanakan hingga saat ini.
                        </p>
                        <div class="bg-blue-50 p-5 rounded-lg">
                            <h4 class="font-bold text-blue-900 mb-3">Tradisi yang Masih Lestari:</h4>
                            <ul class="grid md:grid-cols-2 gap-3 text-gray-700">
                                <li class="flex items-center">
                                    <span class="text-blue-600 mr-2">•</span>
                                    Bersih Desa (Ruwatan Desa) setiap tahun
                                </li>
                                <li class="flex items-center">
                                    <span class="text-blue-600 mr-2">•</span>
                                    Sedekah Bumi setelah panen raya
                                </li>
                                <li class="flex items-center">
                                    <span class="text-blue-600 mr-2">•</span>
                                    Sambatan dalam acara hajatan warga
                                </li>
                                <li class="flex items-center">
                                    <span class="text-blue-600 mr-2">•</span>
                                    Yasinan dan tahlilan rutin
                                </li>
                                <li class="flex items-center">
                                    <span class="text-blue-600 mr-2">•</span>
                                    Pengajian dan pesantren ramadhan
                                </li>
                                <li class="flex items-center">
                                    <span class="text-blue-600 mr-2">•</span>
                                    Kerja bakti bersih desa setiap bulan
                                </li>
                            </ul>
                        </div>
                    </section>

                    <section class="bg-gradient-to-r from-blue-600 to-green-600 text-white p-8 rounded-lg mt-8">
                        <h3 class="text-2xl font-bold mb-4 flex items-center">
                            <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Desa Gunungjaya Hari Ini
                        </h3>
                        <p class="text-lg leading-relaxed">
                            Hari ini, Desa Gunungjaya berdiri sebagai desa yang maju, mandiri, dan sejahtera. Dengan populasi sekitar 5.234 jiwa yang tersebar di tiga dusun, 
                            desa ini terus berkembang tanpa meninggalkan akar budaya dan nilai-nilai leluhur. Semangat gotong royong yang menjadi warisan nenek moyang 
                            tetap menjadi kekuatan utama dalam setiap pembangunan.
                        </p>
                        <p class="text-lg leading-relaxed mt-4">
                            Ke depan, Desa Gunungjaya bertekad untuk terus berinovasi dan berkembang, menuju visi menjadi desa yang berkeadaban, berlandaskan nilai-nilai 
                            religius dan kearifan lokal yang telah diwariskan selama lebih dari satu abad.
                        </p>
                    </section>
                </div>
                ',
            ],
            [
                'title' => 'Wilayah & Peta Desa',
                'slug' => 'wilayah',
                'content' => '
                <div class="space-y-8">
                    <section>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Geografi & Wilayah Desa Gunungjaya</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Desa Gunungjaya terletak di Kecamatan Belik, Kabupaten Pemalang, Provinsi Jawa Tengah. 
                            Desa ini berada di wilayah dataran tinggi dengan ketinggian sekitar 150-300 meter di atas permukaan laut, 
                            menjadikannya memiliki udara yang sejuk dan pemandangan alam yang indah.
                        </p>
                    </section>

                    <!-- Peta Lokasi -->
                    <section class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-2xl shadow-lg border border-blue-200">
                        <h3 class="text-2xl font-bold text-blue-900 mb-4 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Peta Lokasi Kantor Balai Desa
                        </h3>
                        <div class="bg-white rounded-xl overflow-hidden shadow-xl">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3489476753846!2d109.4051097!3d-6.972222199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7016b6e0000001%3A0x1!2sBalai%20Desa%20Gunungjaya!5e0!3m2!1sid!2sid!4v1234567890" 
                                width="100%" 
                                height="450" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                                class="w-full">
                            </iframe>
                        </div>
                        <div class="mt-4 flex items-start bg-white p-4 rounded-lg shadow-sm">
                            <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <p class="text-gray-700 font-medium">Alamat Kantor Balai Desa:</p>
                                <p class="text-gray-600">Jl. Raya Gunungjaya No. 123, Gunungjaya, Kec. Belik, Kabupaten Pemalang, Jawa Tengah 52355</p>
                                <a href="https://maps.app.goo.gl/sB9eiHEKe8r1yir86" target="_blank" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium mt-2">
                                    <span>Buka di Google Maps</span>
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- Data Geografis -->
                    <section class="bg-gray-50 p-6 rounded-2xl border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                            </svg>
                            Data Geografis
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 not-prose">
                            <div class="bg-gradient-to-br from-blue-500 to-blue-600 !text-white p-6 rounded-xl shadow-lg">
                                <div class="!text-white opacity-90 text-sm font-medium mb-1">Luas Wilayah</div>
                                <div class="text-3xl font-bold mb-1 !text-white">425.50</div>
                                <div class="!text-white opacity-90 text-sm">Hektar</div>
                            </div>
                            <div class="bg-gradient-to-br from-green-500 to-green-600 !text-white p-6 rounded-xl shadow-lg">
                                <div class="!text-white opacity-90 text-sm font-medium mb-1">Ketinggian</div>
                                <div class="text-3xl font-bold mb-1 !text-white">150-300</div>
                                <div class="!text-white opacity-90 text-sm">Meter (mdpl)</div>
                            </div>
                            <div class="bg-gradient-to-br from-purple-500 to-purple-600 !text-white p-6 rounded-xl shadow-lg">
                                <div class="!text-white opacity-90 text-sm font-medium mb-1">Suhu Rata-rata</div>
                                <div class="text-3xl font-bold mb-1 !text-white">24-28</div>
                                <div class="!text-white opacity-90 text-sm">Derajat Celsius</div>
                            </div>
                            <div class="bg-gradient-to-br from-orange-500 to-orange-600 !text-white p-6 rounded-xl shadow-lg">
                                <div class="!text-white opacity-90 text-sm font-medium mb-1">Curah Hujan</div>
                                <div class="text-3xl font-bold mb-1 !text-white">2.500</div>
                                <div class="!text-white opacity-90 text-sm">mm/tahun</div>
                            </div>
                        </div>
                    </section>

                    <!-- Batas Wilayah -->
                    <section class="bg-gray-50 rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                            </svg>
                            Batas Wilayah Desa
                        </h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="flex items-start space-x-4 p-5 bg-white rounded-lg border-l-4 border-blue-500 shadow">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center !text-white font-bold text-lg shadow-md">U</div>
                                </div>
                                <div>
                                    <div class="font-bold !text-gray-900 text-lg mb-1">Sebelah Utara</div>
                                    <div class="!text-gray-700">Desa Belik dan Desa Watukumpul</div>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4 p-5 bg-white rounded-lg border-l-4 border-green-500 shadow">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center !text-white font-bold text-lg shadow-md">S</div>
                                </div>
                                <div>
                                    <div class="font-bold !text-gray-900 text-lg mb-1">Sebelah Selatan</div>
                                    <div class="!text-gray-700">Desa Purbayasa dan Desa Jatibogor</div>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4 p-5 bg-white rounded-lg border-l-4 border-yellow-500 shadow">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center !text-white font-bold text-lg shadow-md">T</div>
                                </div>
                                <div>
                                    <div class="font-bold !text-gray-900 text-lg mb-1">Sebelah Timur</div>
                                    <div class="!text-gray-700">Desa Belik Lor dan Desa Moga</div>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4 p-5 bg-white rounded-lg border-l-4 border-purple-500 shadow">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center !text-white font-bold text-lg shadow-md">B</div>
                                </div>
                                <div>
                                    <div class="font-bold !text-gray-900 text-lg mb-1">Sebelah Barat</div>
                                    <div class="!text-gray-700">Desa Jatibarang Kidul dan Hutan Lindung</div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Pembagian Wilayah -->
                    <section>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            Pembagian Wilayah Administratif
                        </h3>
                        <div class="grid md:grid-cols-3 gap-6">
                            <!-- Dusun I -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-xl transition-shadow">
                                <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-4">
                                    <h4 class="text-xl font-bold mb-1">Dusun I</h4>
                                    <p class="text-blue-100 text-sm">Kepala Dusun: Bapak Joko Widodo</p>
                                </div>
                                <div class="p-4">
                                    <div class="space-y-3">
                                        <div class="flex justify-between items-center pb-2 border-b">
                                            <span class="text-gray-600">Jumlah RW</span>
                                            <span class="font-bold text-gray-900">3 RW</span>
                                        </div>
                                        <div class="flex justify-between items-center pb-2 border-b">
                                            <span class="text-gray-600">Jumlah RT</span>
                                            <span class="font-bold text-gray-900">12 RT</span>
                                        </div>
                                        <div class="flex justify-between items-center pb-2 border-b">
                                            <span class="text-gray-600">Jumlah KK</span>
                                            <span class="font-bold text-gray-900">485 KK</span>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <span class="text-gray-600">Populasi</span>
                                            <span class="font-bold text-blue-600">1.745 jiwa</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Dusun II -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-xl transition-shadow">
                                <div class="bg-gradient-to-r from-green-500 to-green-600 text-white p-4">
                                    <h4 class="text-xl font-bold mb-1">Dusun II</h4>
                                    <p class="text-green-100 text-sm">Kepala Dusun: Bapak Sugeng Riyadi</p>
                                </div>
                                <div class="p-4">
                                    <div class="space-y-3">
                                        <div class="flex justify-between items-center pb-2 border-b">
                                            <span class="text-gray-600">Jumlah RW</span>
                                            <span class="font-bold text-gray-900">3 RW</span>
                                        </div>
                                        <div class="flex justify-between items-center pb-2 border-b">
                                            <span class="text-gray-600">Jumlah RT</span>
                                            <span class="font-bold text-gray-900">11 RT</span>
                                        </div>
                                        <div class="flex justify-between items-center pb-2 border-b">
                                            <span class="text-gray-600">Jumlah KK</span>
                                            <span class="font-bold text-gray-900">478 KK</span>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <span class="text-gray-600">Populasi</span>
                                            <span class="font-bold text-green-600">1.721 jiwa</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Dusun III -->
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-xl transition-shadow">
                                <div class="bg-gradient-to-r from-purple-500 to-purple-600 text-white p-4">
                                    <h4 class="text-xl font-bold mb-1">Dusun III</h4>
                                    <p class="text-purple-100 text-sm">Kepala Dusun: Bapak Wahyu Hidayat</p>
                                </div>
                                <div class="p-4">
                                    <div class="space-y-3">
                                        <div class="flex justify-between items-center pb-2 border-b">
                                            <span class="text-gray-600">Jumlah RW</span>
                                            <span class="font-bold text-gray-900">3 RW</span>
                                        </div>
                                        <div class="flex justify-between items-center pb-2 border-b">
                                            <span class="text-gray-600">Jumlah RT</span>
                                            <span class="font-bold text-gray-900">10 RT</span>
                                        </div>
                                        <div class="flex justify-between items-center pb-2 border-b">
                                            <span class="text-gray-600">Jumlah KK</span>
                                            <span class="font-bold text-gray-900">493 KK</span>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <span class="text-gray-600">Populasi</span>
                                            <span class="font-bold text-purple-600">1.768 jiwa</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Summary -->
                        <div class="mt-6 bg-gradient-to-r from-gray-800 to-gray-900 text-white rounded-xl p-6 shadow-xl">
                            <h4 class="text-lg font-bold mb-4">Total Wilayah Desa Gunungjaya</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-yellow-400">3</div>
                                    <div class="text-gray-300 text-sm mt-1">Dusun</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-yellow-400">9</div>
                                    <div class="text-gray-300 text-sm mt-1">RW</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-yellow-400">33</div>
                                    <div class="text-gray-300 text-sm mt-1">RT</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-yellow-400">1.456</div>
                                    <div class="text-gray-300 text-sm mt-1">Kepala Keluarga</div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Penggunaan Lahan -->
                    <section class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-2xl shadow-lg border border-green-200">
                        <h3 class="text-2xl font-bold text-green-900 mb-6 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Penggunaan Lahan
                        </h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-white p-4 rounded-lg shadow-sm">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-gray-700 font-medium">Sawah</span>
                                    <span class="text-green-700 font-bold">185.25 Ha</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-green-500 h-3 rounded-full" style="width: 43.5%"></div>
                                </div>
                                <div class="text-right text-sm text-gray-500 mt-1">43.5%</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-gray-700 font-medium">Perkebunan</span>
                                    <span class="text-amber-700 font-bold">127.65 Ha</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-amber-500 h-3 rounded-full" style="width: 30%"></div>
                                </div>
                                <div class="text-right text-sm text-gray-500 mt-1">30%</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-gray-700 font-medium">Pemukiman</span>
                                    <span class="text-blue-700 font-bold">68.08 Ha</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-blue-500 h-3 rounded-full" style="width: 16%"></div>
                                </div>
                                <div class="text-right text-sm text-gray-500 mt-1">16%</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-gray-700 font-medium">Fasilitas Umum</span>
                                    <span class="text-purple-700 font-bold">21.28 Ha</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-purple-500 h-3 rounded-full" style="width: 5%"></div>
                                </div>
                                <div class="text-right text-sm text-gray-500 mt-1">5%</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-gray-700 font-medium">Hutan & Lainnya</span>
                                    <span class="text-emerald-700 font-bold">23.24 Ha</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-emerald-500 h-3 rounded-full" style="width: 5.5%"></div>
                                </div>
                                <div class="text-right text-sm text-gray-500 mt-1">5.5%</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm flex items-center justify-center">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-green-700">425.50</div>
                                    <div class="text-gray-600 font-medium">Total Luas (Ha)</div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Topografi & Iklim -->
                    <section>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-200">
                                <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                                    </svg>
                                    Topografi
                                </h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="text-green-600 mr-2">✓</span>
                                        <div>
                                            <span class="font-medium text-gray-900">Dataran Tinggi:</span>
                                            <span class="text-gray-600"> 65% wilayah</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-green-600 mr-2">✓</span>
                                        <div>
                                            <span class="font-medium text-gray-900">Dataran Rendah:</span>
                                            <span class="text-gray-600"> 25% wilayah</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-green-600 mr-2">✓</span>
                                        <div>
                                            <span class="font-medium text-gray-900">Perbukitan:</span>
                                            <span class="text-gray-600"> 10% wilayah</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-green-600 mr-2">✓</span>
                                        <div>
                                            <span class="font-medium text-gray-900">Kemiringan:</span>
                                            <span class="text-gray-600"> 5-15 derajat</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-200">
                                <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                                    </svg>
                                    Iklim
                                </h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="text-blue-600 mr-2">•</span>
                                        <div>
                                            <span class="font-medium text-gray-900">Tipe Iklim:</span>
                                            <span class="text-gray-600"> Tropis (A)</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-600 mr-2">•</span>
                                        <div>
                                            <span class="font-medium text-gray-900">Suhu:</span>
                                            <span class="text-gray-600"> 24-28°C</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-600 mr-2">•</span>
                                        <div>
                                            <span class="font-medium text-gray-900">Curah Hujan:</span>
                                            <span class="text-gray-600"> 2.500 mm/tahun</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-600 mr-2">•</span>
                                        <div>
                                            <span class="font-medium text-gray-900">Kelembaban:</span>
                                            <span class="text-gray-600"> 70-85%</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- Akses dan Infrastruktur -->
                    <section class="bg-gradient-to-br from-orange-50 to-red-50 p-6 rounded-2xl shadow-lg border border-orange-200">
                        <h3 class="text-2xl font-bold text-orange-900 mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                            </svg>
                            Akses dan Transportasi
                        </h3>
                        <div class="bg-white rounded-lg p-5 space-y-3">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold mr-3 flex-shrink-0">1</div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-900 mb-1">Jarak ke Ibukota Kecamatan</h4>
                                    <p class="text-gray-600">8 KM dari Kecamatan Belik (waktu tempuh ±15 menit)</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold mr-3 flex-shrink-0">2</div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-900 mb-1">Jarak ke Ibukota Kabupaten</h4>
                                    <p class="text-gray-600">35 KM dari Pemalang (waktu tempuh ±45 menit)</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold mr-3 flex-shrink-0">3</div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-900 mb-1">Kondisi Jalan</h4>
                                    <p class="text-gray-600">Jalan utama beraspal hotmix, jalan desa cor beton & rabat beton</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold mr-3 flex-shrink-0">4</div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-900 mb-1">Transportasi Umum</h4>
                                    <p class="text-gray-600">Dilalui angkutan pedesaan dan ojek online</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                ',
            ],
            [
                'title' => 'Monografi Desa',
                'slug' => 'monografi',
                'content' => '
                <div class="space-y-8">
                    <section>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Monografi Desa Gunungjaya</h2>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Monografi desa adalah gambaran menyeluruh tentang kondisi fisik, sosial, ekonomi, dan kelembagaan 
                            Desa Gunungjaya. Dokumen ini menyajikan data dan informasi komprehensif yang menjadi rujukan 
                            dalam perencanaan dan pembangunan desa.
                        </p>
                    </section>

                    <!-- Data Umum Desa -->
                    <section class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-2xl border border-blue-200 not-prose">
                        <h3 class="text-2xl font-bold !text-blue-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            Data Umum Desa
                        </h3>
                        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                            <table class="w-full">
                                <tbody>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 px-4 !text-gray-900 font-semibold bg-gray-50 w-1/3">Nama Desa</td>
                                        <td class="py-3 px-4 !text-gray-700">Gunungjaya</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 px-4 !text-gray-900 font-semibold bg-gray-50">Kecamatan</td>
                                        <td class="py-3 px-4 !text-gray-700">Belik</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 px-4 !text-gray-900 font-semibold bg-gray-50">Kabupaten</td>
                                        <td class="py-3 px-4 !text-gray-700">Pemalang</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 px-4 !text-gray-900 font-semibold bg-gray-50">Provinsi</td>
                                        <td class="py-3 px-4 !text-gray-700">Jawa Tengah</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 px-4 !text-gray-900 font-semibold bg-gray-50">Kode Desa</td>
                                        <td class="py-3 px-4 !text-gray-700">33.27.01.2005</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 px-4 !text-gray-900 font-semibold bg-gray-50">Kode Pos</td>
                                        <td class="py-3 px-4 !text-gray-700">52355</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 px-4 !text-gray-900 font-semibold bg-gray-50">Luas Wilayah</td>
                                        <td class="py-3 px-4 !text-gray-700">425,50 Hektar</td>
                                    </tr>
                                    <tr class="border-b border-gray-100">
                                        <td class="py-3 px-4 !text-gray-900 font-semibold bg-gray-50">Batas Wilayah</td>
                                        <td class="py-3 px-4 !text-gray-700">
                                            <div class="space-y-1">
                                                <div><span class="font-medium">Utara:</span> Desa Belik dan Desa Watukumpul</div>
                                                <div><span class="font-medium">Selatan:</span> Desa Purbayasa dan Desa Jatibogor</div>
                                                <div><span class="font-medium">Timur:</span> Desa Belik Lor dan Desa Moga</div>
                                                <div><span class="font-medium">Barat:</span> Desa Jatibarang Kidul dan Hutan Lindung</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 !text-gray-900 font-semibold bg-gray-50">Jumlah Dusun</td>
                                        <td class="py-3 px-4 !text-gray-700">3 Dusun (Dusun I, II, dan III)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <!-- Data Kependudukan -->
                    <section class="bg-gray-50 p-6 rounded-2xl border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Data Kependudukan
                        </h3>
                        
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                            <div class="bg-gradient-to-br from-blue-500 to-blue-600 !text-white p-6 rounded-xl shadow-lg">
                                <div class="!text-white opacity-90 text-sm font-medium mb-1">Total Penduduk</div>
                                <div class="text-3xl font-bold mb-1 !text-white">5.234</div>
                                <div class="!text-white opacity-90 text-sm">Jiwa</div>
                            </div>
                            <div class="bg-gradient-to-br from-green-500 to-green-600 !text-white p-6 rounded-xl shadow-lg">
                                <div class="!text-white opacity-90 text-sm font-medium mb-1">Laki-laki</div>
                                <div class="text-3xl font-bold mb-1 !text-white">2.618</div>
                                <div class="!text-white opacity-90 text-sm">Jiwa (50,02%)</div>
                            </div>
                            <div class="bg-gradient-to-br from-purple-500 to-purple-600 !text-white p-6 rounded-xl shadow-lg">
                                <div class="!text-white opacity-90 text-sm font-medium mb-1">Perempuan</div>
                                <div class="text-3xl font-bold mb-1 !text-white">2.616</div>
                                <div class="!text-white opacity-90 text-sm">Jiwa (49,98%)</div>
                            </div>
                            <div class="bg-gradient-to-br from-orange-500 to-orange-600 !text-white p-6 rounded-xl shadow-lg">
                                <div class="!text-white opacity-90 text-sm font-medium mb-1">Kepala Keluarga</div>
                                <div class="text-3xl font-bold mb-1 !text-white">1.456</div>
                                <div class="!text-white opacity-90 text-sm">KK</div>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                            <table class="w-full">
                                <thead class="bg-gradient-to-r from-blue-500 to-blue-600">
                                    <tr>
                                        <th class="py-3 px-4 text-left !text-white font-semibold">Kelompok Usia</th>
                                        <th class="py-3 px-4 text-center !text-white font-semibold">Laki-laki</th>
                                        <th class="py-3 px-4 text-center !text-white font-semibold">Perempuan</th>
                                        <th class="py-3 px-4 text-center !text-white font-semibold">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-100 hover:bg-blue-50">
                                        <td class="py-3 px-4 !text-gray-700">0-4 tahun</td>
                                        <td class="py-3 px-4 text-center !text-gray-700">245</td>
                                        <td class="py-3 px-4 text-center !text-gray-700">238</td>
                                        <td class="py-3 px-4 text-center !text-gray-900 font-semibold">483</td>
                                    </tr>
                                    <tr class="border-b border-gray-100 hover:bg-blue-50">
                                        <td class="py-3 px-4 !text-gray-700">5-9 tahun</td>
                                        <td class="py-3 px-4 text-center !text-gray-700">268</td>
                                        <td class="py-3 px-4 text-center !text-gray-700">262</td>
                                        <td class="py-3 px-4 text-center !text-gray-900 font-semibold">530</td>
                                    </tr>
                                    <tr class="border-b border-gray-100 hover:bg-blue-50">
                                        <td class="py-3 px-4 !text-gray-700">10-14 tahun</td>
                                        <td class="py-3 px-4 text-center !text-gray-700">312</td>
                                        <td class="py-3 px-4 text-center !text-gray-700">298</td>
                                        <td class="py-3 px-4 text-center !text-gray-900 font-semibold">610</td>
                                    </tr>
                                    <tr class="border-b border-gray-100 hover:bg-blue-50">
                                        <td class="py-3 px-4 !text-gray-700">15-19 tahun</td>
                                        <td class="py-3 px-4 text-center !text-gray-700">298</td>
                                        <td class="py-3 px-4 text-center !text-gray-700">285</td>
                                        <td class="py-3 px-4 text-center !text-gray-900 font-semibold">583</td>
                                    </tr>
                                    <tr class="border-b border-gray-100 hover:bg-blue-50">
                                        <td class="py-3 px-4 !text-gray-700">20-54 tahun</td>
                                        <td class="py-3 px-4 text-center !text-gray-700">1.245</td>
                                        <td class="py-3 px-4 text-center !text-gray-700">1.268</td>
                                        <td class="py-3 px-4 text-center !text-gray-900 font-semibold">2.513</td>
                                    </tr>
                                    <tr class="border-b border-gray-100 hover:bg-blue-50">
                                        <td class="py-3 px-4 !text-gray-700">55-59 tahun</td>
                                        <td class="py-3 px-4 text-center !text-gray-700">118</td>
                                        <td class="py-3 px-4 text-center !text-gray-700">125</td>
                                        <td class="py-3 px-4 text-center !text-gray-900 font-semibold">243</td>
                                    </tr>
                                    <tr class="hover:bg-blue-50">
                                        <td class="py-3 px-4 !text-gray-700">60+ tahun</td>
                                        <td class="py-3 px-4 text-center !text-gray-700">132</td>
                                        <td class="py-3 px-4 text-center !text-gray-700">140</td>
                                        <td class="py-3 px-4 text-center !text-gray-900 font-semibold">272</td>
                                    </tr>
                                </tbody>
                                <tfoot class="bg-gradient-to-r from-blue-500 to-blue-600">
                                    <tr>
                                        <th class="py-3 px-4 text-left !text-white font-bold">TOTAL</th>
                                        <th class="py-3 px-4 text-center !text-white font-bold">2.618</th>
                                        <th class="py-3 px-4 text-center !text-white font-bold">2.616</th>
                                        <th class="py-3 px-4 text-center !text-white font-bold">5.234</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </section>

                    <!-- Mata Pencaharian -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Mata Pencaharian Penduduk
                        </h3>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-5 rounded-xl border border-green-200">
                                <h4 class="font-bold !text-green-900 text-lg mb-4 flex items-center">
                                    <span class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center !text-white mr-2">1</span>
                                    Petani
                                </h4>
                                <div class="flex justify-between items-center">
                                    <span class="!text-gray-700">Jumlah</span>
                                    <span class="font-bold !text-green-700 text-2xl">1.245</span>
                                </div>
                                <div class="mt-2 bg-green-200 rounded-full h-2">
                                    <div class="bg-green-600 h-2 rounded-full" style="width: 62.25%"></div>
                                </div>
                                <div class="text-xs !text-gray-600 mt-1">62,25% dari total penduduk produktif</div>
                            </div>

                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-5 rounded-xl border border-blue-200">
                                <h4 class="font-bold !text-blue-900 text-lg mb-4 flex items-center">
                                    <span class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center !text-white mr-2">2</span>
                                    Pedagang
                                </h4>
                                <div class="flex justify-between items-center">
                                    <span class="!text-gray-700">Jumlah</span>
                                    <span class="font-bold !text-blue-700 text-2xl">342</span>
                                </div>
                                <div class="mt-2 bg-blue-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 17.1%"></div>
                                </div>
                                <div class="text-xs !text-gray-600 mt-1">17,10% dari total penduduk produktif</div>
                            </div>

                            <div class="bg-gradient-to-br from-purple-50 to-indigo-50 p-5 rounded-xl border border-purple-200">
                                <h4 class="font-bold !text-purple-900 text-lg mb-4 flex items-center">
                                    <span class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center !text-white mr-2">3</span>
                                    Buruh/Karyawan
                                </h4>
                                <div class="flex justify-between items-center">
                                    <span class="!text-gray-700">Jumlah</span>
                                    <span class="font-bold !text-purple-700 text-2xl">268</span>
                                </div>
                                <div class="mt-2 bg-purple-200 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" style="width: 13.4%"></div>
                                </div>
                                <div class="text-xs !text-gray-600 mt-1">13,40% dari total penduduk produktif</div>
                            </div>

                            <div class="bg-gradient-to-br from-orange-50 to-amber-50 p-5 rounded-xl border border-orange-200">
                                <h4 class="font-bold !text-orange-900 text-lg mb-4 flex items-center">
                                    <span class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center !text-white mr-2">4</span>
                                    Wiraswasta
                                </h4>
                                <div class="flex justify-between items-center">
                                    <span class="!text-gray-700">Jumlah</span>
                                    <span class="font-bold !text-orange-700 text-2xl">145</span>
                                </div>
                                <div class="mt-2 bg-orange-200 rounded-full h-2">
                                    <div class="bg-orange-600 h-2 rounded-full" style="width: 7.25%"></div>
                                </div>
                                <div class="text-xs !text-gray-600 mt-1">7,25% dari total penduduk produktif</div>
                            </div>
                        </div>
                    </section>

                    <!-- Pendidikan -->
                    <section class="bg-gradient-to-br from-indigo-50 to-purple-50 p-6 rounded-2xl border border-indigo-200 not-prose">
                        <h3 class="text-2xl font-bold !text-indigo-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                            </svg>
                            Tingkat Pendidikan
                        </h3>
                        
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="!text-gray-700 font-medium">Tidak/Belum Sekolah</span>
                                    <span class="!text-indigo-700 font-bold text-xl">823</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="bg-indigo-500 h-2 rounded-full" style="width: 15.7%"></div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="!text-gray-700 font-medium">Tidak Tamat SD</span>
                                    <span class="!text-indigo-700 font-bold text-xl">456</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="bg-indigo-500 h-2 rounded-full" style="width: 8.7%"></div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="!text-gray-700 font-medium">Tamat SD/Sederajat</span>
                                    <span class="!text-indigo-700 font-bold text-xl">1.678</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="bg-indigo-500 h-2 rounded-full" style="width: 32.1%"></div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="!text-gray-700 font-medium">Tamat SMP/Sederajat</span>
                                    <span class="!text-indigo-700 font-bold text-xl">1.245</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="bg-indigo-500 h-2 rounded-full" style="width: 23.8%"></div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="!text-gray-700 font-medium">Tamat SMA/Sederajat</span>
                                    <span class="!text-indigo-700 font-bold text-xl">812</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="bg-indigo-500 h-2 rounded-full" style="width: 15.5%"></div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="!text-gray-700 font-medium">Diploma/Sarjana</span>
                                    <span class="!text-indigo-700 font-bold text-xl">220</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="bg-indigo-500 h-2 rounded-full" style="width: 4.2%"></div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Agama -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                            </svg>
                            Kehidupan Beragama
                        </h3>
                        
                        <div class="grid md:grid-cols-3 gap-4 mb-6">
                            <div class="bg-gradient-to-br from-green-500 to-emerald-600 !text-white p-6 rounded-xl shadow-lg text-center">
                                <div class="!text-white opacity-90 text-sm font-medium mb-2">Islam</div>
                                <div class="text-4xl font-bold !text-white mb-1">5.198</div>
                                <div class="!text-white opacity-90 text-sm">99,31%</div>
                            </div>
                            <div class="bg-gradient-to-br from-blue-500 to-cyan-600 !text-white p-6 rounded-xl shadow-lg text-center">
                                <div class="!text-white opacity-90 text-sm font-medium mb-2">Kristen</div>
                                <div class="text-4xl font-bold !text-white mb-1">28</div>
                                <div class="!text-white opacity-90 text-sm">0,53%</div>
                            </div>
                            <div class="bg-gradient-to-br from-purple-500 to-indigo-600 !text-white p-6 rounded-xl shadow-lg text-center">
                                <div class="!text-white opacity-90 text-sm font-medium mb-2">Katolik</div>
                                <div class="text-4xl font-bold !text-white mb-1">8</div>
                                <div class="!text-white opacity-90 text-sm">0,16%</div>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-xl p-5">
                            <h4 class="font-bold !text-gray-900 mb-4">Sarana Ibadah</h4>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="flex items-center space-x-3 bg-white p-4 rounded-lg">
                                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                        <span class="font-bold !text-green-700 text-xl">7</span>
                                    </div>
                                    <div>
                                        <div class="font-semibold !text-gray-900">Masjid</div>
                                        <div class="text-sm !text-gray-600">Tersebar di 3 dusun</div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3 bg-white p-4 rounded-lg">
                                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="font-bold !text-blue-700 text-xl">15</span>
                                    </div>
                                    <div>
                                        <div class="font-semibold !text-gray-900">Mushola</div>
                                        <div class="text-sm !text-gray-600">Mushola & langgar</div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3 bg-white p-4 rounded-lg">
                                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                                        <span class="font-bold !text-purple-700 text-xl">1</span>
                                    </div>
                                    <div>
                                        <div class="font-semibold !text-gray-900">Gereja</div>
                                        <div class="text-sm !text-gray-600">Gereja Kristen</div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3 bg-white p-4 rounded-lg">
                                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                                        <span class="font-bold !text-orange-700 text-xl">3</span>
                                    </div>
                                    <div>
                                        <div class="font-semibold !text-gray-900">TPQ</div>
                                        <div class="text-sm !text-gray-600">Taman Pendidikan Al-Quran</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Sarana Prasarana -->
                    <section class="bg-gradient-to-br from-slate-50 to-gray-50 p-6 rounded-2xl border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            Sarana & Prasarana
                        </h3>
                        
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!-- Pendidikan -->
                            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold !text-gray-900">Pendidikan</h4>
                                </div>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex justify-between"><span>SD/MI</span><span class="font-semibold">3 unit</span></li>
                                    <li class="flex justify-between"><span>SMP/MTs</span><span class="font-semibold">1 unit</span></li>
                                    <li class="flex justify-between"><span>PAUD</span><span class="font-semibold">2 unit</span></li>
                                </ul>
                            </div>

                            <!-- Kesehatan -->
                            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 bg-red-500 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold !text-gray-900">Kesehatan</h4>
                                </div>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex justify-between"><span>Puskesmas Pembantu</span><span class="font-semibold">1 unit</span></li>
                                    <li class="flex justify-between"><span>Posyandu</span><span class="font-semibold">5 unit</span></li>
                                    <li class="flex justify-between"><span>Bidan Desa</span><span class="font-semibold">2 orang</span></li>
                                </ul>
                            </div>

                            <!-- Ekonomi -->
                            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold !text-gray-900">Ekonomi</h4>
                                </div>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex justify-between"><span>Toko/Kios</span><span class="font-semibold">28 unit</span></li>
                                    <li class="flex justify-between"><span>Warung Makan</span><span class="font-semibold">12 unit</span></li>
                                    <li class="flex justify-between"><span>Pasar Desa</span><span class="font-semibold">1 unit</span></li>
                                </ul>
                            </div>

                            <!-- Transportasi -->
                            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold !text-gray-900">Transportasi</h4>
                                </div>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex justify-between"><span>Jalan Aspal</span><span class="font-semibold">8,5 km</span></li>
                                    <li class="flex justify-between"><span>Jalan Cor Beton</span><span class="font-semibold">3,2 km</span></li>
                                    <li class="flex justify-between"><span>Jalan Tanah</span><span class="font-semibold">2,8 km</span></li>
                                </ul>
                            </div>

                            <!-- Air Bersih -->
                            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 bg-cyan-500 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold !text-gray-900">Air Bersih</h4>
                                </div>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex justify-between"><span>Sumur Gali</span><span class="font-semibold">856 unit</span></li>
                                    <li class="flex justify-between"><span>Sumur Pompa</span><span class="font-semibold">312 unit</span></li>
                                    <li class="flex justify-between"><span>PDAM</span><span class="font-semibold">288 unit</span></li>
                                </ul>
                            </div>

                            <!-- Komunikasi -->
                            <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100">
                                <div class="flex items-center mb-4">
                                    <div class="w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold !text-gray-900">Komunikasi</h4>
                                </div>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex justify-between"><span>Sinyal 4G</span><span class="font-semibold">Baik</span></li>
                                    <li class="flex justify-between"><span>Internet</span><span class="font-semibold">95%</span></li>
                                    <li class="flex justify-between"><span>Tower BTS</span><span class="font-semibold">2 unit</span></li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- Kelembagaan Desa -->
                    <section class="bg-gradient-to-r from-blue-600 to-teal-600 !text-white p-8 rounded-2xl shadow-xl not-prose">
                        <h3 class="text-2xl font-bold !text-white mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Kelembagaan Desa
                        </h3>
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="!text-white opacity-90 text-sm mb-2">Pemerintah Desa</div>
                                <div class="text-2xl font-bold !text-white">12 orang</div>
                                <div class="!text-white opacity-75 text-xs mt-1">Perangkat Desa</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="!text-white opacity-90 text-sm mb-2">BPD</div>
                                <div class="text-2xl font-bold !text-white">7 orang</div>
                                <div class="!text-white opacity-75 text-xs mt-1">Badan Permusyawaratan</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="!text-white opacity-90 text-sm mb-2">PKK</div>
                                <div class="text-2xl font-bold !text-white">45 orang</div>
                                <div class="!text-white opacity-75 text-xs mt-1">Pemberdayaan Perempuan</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="!text-white opacity-90 text-sm mb-2">Karang Taruna</div>
                                <div class="text-2xl font-bold !text-white">68 orang</div>
                                <div class="!text-white opacity-75 text-xs mt-1">Organisasi Pemuda</div>
                            </div>
                        </div>
                        <div class="mt-6 bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                            <p class="!text-white text-sm leading-relaxed">
                                Lembaga-lembaga desa di Gunungjaya bekerja secara sinergis dalam pembangunan dan pemberdayaan masyarakat. 
                                Musyawarah dan gotong royong menjadi prinsip utama dalam setiap pengambilan keputusan dan pelaksanaan program.
                            </p>
                        </div>
                    </section>
                </div>
                ',
            ],
            [
                'title' => 'Data Statistik Desa',
                'slug' => 'statistik',
                'content' => '<h2>Data Statistik Desa Gunungjaya</h2><p>Halaman ini menyajikan data statistik lengkap Desa Gunungjaya...</p>',
            ],
            [
                'title' => 'Potensi Desa',
                'slug' => 'potensi',
                'content' => '
                <div class="space-y-8">
                    <section>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Potensi dan Unggulan Desa Gunungjaya</h2>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Desa Gunungjaya memiliki berbagai potensi yang terus dikembangkan untuk kesejahteraan masyarakat. 
                            Dengan letak geografis yang strategis, sumber daya alam melimpah, dan semangat gotong royong yang tinggi, 
                            desa ini memiliki peluang besar untuk maju dan berkembang.
                        </p>
                    </section>

                    <!-- Highlight Cards -->
                    <section class="grid md:grid-cols-3 gap-6 not-prose">
                        <div class="bg-gradient-to-br from-green-500 to-emerald-600 !text-white p-6 rounded-2xl shadow-xl">
                            <div class="flex items-center mb-4">
                                <div class="w-14 h-14 bg-white/20 backdrop-blur rounded-xl flex items-center justify-center mr-4">
                                    <svg class="w-8 h-8 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold !text-white">425.50</div>
                                    <div class="!text-white opacity-90 text-sm">Hektar Lahan</div>
                                </div>
                            </div>
                            <p class="!text-white text-sm opacity-90">Lahan produktif untuk pertanian dan perkebunan</p>
                        </div>

                        <div class="bg-gradient-to-br from-blue-500 to-cyan-600 !text-white p-6 rounded-2xl shadow-xl">
                            <div class="flex items-center mb-4">
                                <div class="w-14 h-14 bg-white/20 backdrop-blur rounded-xl flex items-center justify-center mr-4">
                                    <svg class="w-8 h-8 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold !text-white">5.234</div>
                                    <div class="!text-white opacity-90 text-sm">Jiwa Penduduk</div>
                                </div>
                            </div>
                            <p class="!text-white text-sm opacity-90">Sumber daya manusia produktif dan kreatif</p>
                        </div>

                        <div class="bg-gradient-to-br from-purple-500 to-indigo-600 !text-white p-6 rounded-2xl shadow-xl">
                            <div class="flex items-center mb-4">
                                <div class="w-14 h-14 bg-white/20 backdrop-blur rounded-xl flex items-center justify-center mr-4">
                                    <svg class="w-8 h-8 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold !text-white">145</div>
                                    <div class="!text-white opacity-90 text-sm">UMKM Aktif</div>
                                </div>
                            </div>
                            <p class="!text-white text-sm opacity-90">Usaha mikro kecil dan menengah yang berkembang</p>
                        </div>
                    </section>

                    <!-- Pertanian -->
                    <section class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-2xl border border-green-200 not-prose">
                        <h3 class="text-2xl font-bold !text-green-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Potensi Pertanian
                        </h3>
                        
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div class="bg-white rounded-xl p-5 shadow-sm border border-green-100">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-7 h-7 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold !text-gray-900 text-lg">Padi</h4>
                                </div>
                                <div class="space-y-2 !text-gray-700 text-sm">
                                    <div class="flex justify-between">
                                        <span>Luas Lahan</span>
                                        <span class="font-semibold">245 Ha</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Produktivitas</span>
                                        <span class="font-semibold">6,5 ton/Ha</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Produksi/Tahun</span>
                                        <span class="font-semibold">3.188 ton</span>
                                    </div>
                                    <div class="mt-3 pt-3 border-t border-gray-200">
                                        <p class="text-xs !text-gray-600">Komoditas utama dengan sistem irigasi teknis dan semi teknis</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm border border-green-100">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-amber-500 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-7 h-7 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold !text-gray-900 text-lg">Jagung</h4>
                                </div>
                                <div class="space-y-2 !text-gray-700 text-sm">
                                    <div class="flex justify-between">
                                        <span>Luas Lahan</span>
                                        <span class="font-semibold">85 Ha</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Produktivitas</span>
                                        <span class="font-semibold">5,2 ton/Ha</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Produksi/Tahun</span>
                                        <span class="font-semibold">884 ton</span>
                                    </div>
                                    <div class="mt-3 pt-3 border-t border-gray-200">
                                        <p class="text-xs !text-gray-600">Tanaman pangan alternatif dengan permintaan pasar tinggi</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm border border-green-100">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-7 h-7 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold !text-gray-900 text-lg">Cabai</h4>
                                </div>
                                <div class="space-y-2 !text-gray-700 text-sm">
                                    <div class="flex justify-between">
                                        <span>Luas Lahan</span>
                                        <span class="font-semibold">28 Ha</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Produktivitas</span>
                                        <span class="font-semibold">8,5 ton/Ha</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Produksi/Tahun</span>
                                        <span class="font-semibold">476 ton</span>
                                    </div>
                                    <div class="mt-3 pt-3 border-t border-gray-200">
                                        <p class="text-xs !text-gray-600">Hortikultura unggulan dengan nilai ekonomi tinggi</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm border border-green-100">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-emerald-500 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-7 h-7 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold !text-gray-900 text-lg">Sayuran</h4>
                                </div>
                                <div class="space-y-2 !text-gray-700 text-sm">
                                    <div class="flex justify-between">
                                        <span>Luas Lahan</span>
                                        <span class="font-semibold">42 Ha</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Jenis</span>
                                        <span class="font-semibold">12 varietas</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Produksi/Tahun</span>
                                        <span class="font-semibold">658 ton</span>
                                    </div>
                                    <div class="mt-3 pt-3 border-t border-gray-200">
                                        <p class="text-xs !text-gray-600">Kangkung, bayam, sawi, tomat, terong, dan lainnya</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl p-5 shadow-sm border border-green-100">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 !text-green-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <h5 class="font-bold !text-gray-900 mb-2">Dukungan dan Pengembangan</h5>
                                    <p class="!text-gray-700 text-sm leading-relaxed">
                                        Kelompok Tani aktif mendampingi petani dengan program pelatihan modern, bantuan bibit unggul, 
                                        pendampingan teknis budidaya, dan akses pasar yang lebih luas. Sistem irigasi terus diperbaiki 
                                        untuk meningkatkan produktivitas pertanian.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Perkebunan -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Potensi Perkebunan
                        </h3>
                        
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-gradient-to-br from-orange-50 to-amber-50 p-5 rounded-xl border border-orange-200">
                                <div class="text-center mb-4">
                                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-9 h-9 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold !text-orange-900 text-lg mb-2">Kelapa</h4>
                                </div>
                                <div class="space-y-2 !text-gray-700 text-sm">
                                    <div class="flex justify-between">
                                        <span>Luas Areal</span>
                                        <span class="font-semibold">35 Ha</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Jumlah Pohon</span>
                                        <span class="font-semibold">±2.800</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Produksi/Bulan</span>
                                        <span class="font-semibold">8.500 butir</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-green-50 to-teal-50 p-5 rounded-xl border border-green-200">
                                <div class="text-center mb-4">
                                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-9 h-9 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold !text-green-900 text-lg mb-2">Cengkeh</h4>
                                </div>
                                <div class="space-y-2 !text-gray-700 text-sm">
                                    <div class="flex justify-between">
                                        <span>Luas Areal</span>
                                        <span class="font-semibold">18 Ha</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Jumlah Pohon</span>
                                        <span class="font-semibold">±1.260</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Produksi/Tahun</span>
                                        <span class="font-semibold">4,5 ton</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-yellow-50 to-orange-50 p-5 rounded-xl border border-yellow-200">
                                <div class="text-center mb-4">
                                    <div class="w-16 h-16 bg-yellow-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-9 h-9 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold !text-yellow-900 text-lg mb-2">Kopi</h4>
                                </div>
                                <div class="space-y-2 !text-gray-700 text-sm">
                                    <div class="flex justify-between">
                                        <span>Luas Areal</span>
                                        <span class="font-semibold">12 Ha</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Jumlah Pohon</span>
                                        <span class="font-semibold">±4.800</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Produksi/Tahun</span>
                                        <span class="font-semibold">3,2 ton</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Peternakan -->
                    <section class="bg-gradient-to-br from-amber-50 to-orange-50 p-6 rounded-2xl border border-amber-200 not-prose">
                        <h3 class="text-2xl font-bold !text-amber-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Potensi Peternakan
                        </h3>
                        
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                            <div class="bg-white rounded-xl p-5 shadow-sm text-center">
                                <h4 class="font-bold !text-gray-900 mb-3">Sapi</h4>
                                <div class="text-3xl font-bold !text-amber-700">342</div>
                                <div class="!text-gray-600 text-sm mt-1">Ekor</div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm text-center">
                                <h4 class="font-bold !text-gray-900 mb-3">Kambing</h4>
                                <div class="text-3xl font-bold !text-amber-700">856</div>
                                <div class="!text-gray-600 text-sm mt-1">Ekor</div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm text-center">
                                <h4 class="font-bold !text-gray-900 mb-3">Ayam</h4>
                                <div class="text-3xl font-bold !text-amber-700">2.456</div>
                                <div class="!text-gray-600 text-sm mt-1">Ekor</div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm text-center">
                                <h4 class="font-bold !text-gray-900 mb-3">Bebek</h4>
                                <div class="text-3xl font-bold !text-amber-700">1.234</div>
                                <div class="!text-gray-600 text-sm mt-1">Ekor</div>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <h5 class="font-bold !text-gray-900 mb-3 flex items-center">
                                    <span class="w-8 h-8 bg-amber-500 rounded-full flex items-center justify-center !text-white mr-2 text-sm">1</span>
                                    Pengembangan Sapi Potong
                                </h5>
                                <p class="!text-gray-700 text-sm">
                                    Program penggemukan sapi dengan sistem kandang kolektif dan pakan berkualitas. 
                                    Kelompok ternak aktif melakukan pelatihan dan bantuan modal usaha.
                                </p>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <h5 class="font-bold !text-gray-900 mb-3 flex items-center">
                                    <span class="w-8 h-8 bg-amber-500 rounded-full flex items-center justify-center !text-white mr-2 text-sm">2</span>
                                    Peternakan Ayam Petelor
                                </h5>
                                <p class="!text-gray-700 text-sm">
                                    12 unit peternakan ayam petelur dengan produksi rata-rata 8.500 butir per hari. 
                                    Distribusi ke pasar lokal dan kota sekitar.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- UMKM & Ekonomi Kreatif -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            UMKM & Ekonomi Kreatif
                        </h3>
                        
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div class="bg-gradient-to-br from-purple-50 to-indigo-50 p-5 rounded-xl border border-purple-200">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-7 h-7 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold !text-purple-900 text-lg">Kerajinan Tangan</h4>
                                        <div class="!text-purple-700 text-sm">28 unit usaha</div>
                                    </div>
                                </div>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex items-center"><span class="!text-purple-600 mr-2">•</span> Anyaman bambu dan pandan</li>
                                    <li class="flex items-center"><span class="!text-purple-600 mr-2">•</span> Kerajinan kayu dan ukiran</li>
                                    <li class="flex items-center"><span class="!text-purple-600 mr-2">•</span> Batik tulis dan cap</li>
                                    <li class="flex items-center"><span class="!text-purple-600 mr-2">•</span> Souvenir dan aksesoris</li>
                                </ul>
                            </div>

                            <div class="bg-gradient-to-br from-pink-50 to-rose-50 p-5 rounded-xl border border-pink-200">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-7 h-7 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold !text-pink-900 text-lg">Kuliner</h4>
                                        <div class="!text-pink-700 text-sm">42 unit usaha</div>
                                    </div>
                                </div>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex items-center"><span class="!text-pink-600 mr-2">•</span> Kue tradisional dan modern</li>
                                    <li class="flex items-center"><span class="!text-pink-600 mr-2">•</span> Makanan ringan dan camilan</li>
                                    <li class="flex items-center"><span class="!text-pink-600 mr-2">•</span> Catering dan katering hajatan</li>
                                    <li class="flex items-center"><span class="!text-pink-600 mr-2">•</span> Warung makan dan rumah makan</li>
                                </ul>
                            </div>

                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-5 rounded-xl border border-blue-200">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-7 h-7 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold !text-blue-900 text-lg">Produk Olahan</h4>
                                        <div class="!text-blue-700 text-sm">35 unit usaha</div>
                                    </div>
                                </div>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex items-center"><span class="!text-blue-600 mr-2">•</span> Gula aren dan gula semut</li>
                                    <li class="flex items-center"><span class="!text-blue-600 mr-2">•</span> Keripik singkong dan pisang</li>
                                    <li class="flex items-center"><span class="!text-blue-600 mr-2">•</span> Emping melinjo dan mente</li>
                                    <li class="flex items-center"><span class="!text-blue-600 mr-2">•</span> Sirup dan manisan buah</li>
                                </ul>
                            </div>

                            <div class="bg-gradient-to-br from-teal-50 to-emerald-50 p-5 rounded-xl border border-teal-200">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-teal-500 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-7 h-7 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold !text-teal-900 text-lg">Jasa</h4>
                                        <div class="!text-teal-700 text-sm">40 unit usaha</div>
                                    </div>
                                </div>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex items-center"><span class="!text-teal-600 mr-2">•</span> Bengkel dan service kendaraan</li>
                                    <li class="flex items-center"><span class="!text-teal-600 mr-2">•</span> Salon dan barbershop</li>
                                    <li class="flex items-center"><span class="!text-teal-600 mr-2">•</span> Foto copy dan printing</li>
                                    <li class="flex items-center"><span class="!text-teal-600 mr-2">•</span> Laundry dan konveksi</li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl p-5 border border-indigo-200">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 !text-indigo-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                                <div>
                                    <h5 class="font-bold !text-gray-900 mb-2">Program Pemberdayaan UMKM</h5>
                                    <p class="!text-gray-700 text-sm leading-relaxed">
                                        Pemerintah desa aktif mendampingi UMKM melalui pelatihan manajemen usaha, bantuan modal usaha melalui BUMDes, 
                                        fasilitasi pemasaran online, dan akses ke pameran produk daerah. Target tahun 2026: 200 UMKM aktif dan terdigitalisasi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Pariwisata -->
                    <section class="bg-gradient-to-br from-cyan-50 to-blue-50 p-6 rounded-2xl border border-cyan-200 not-prose">
                        <h3 class="text-2xl font-bold !text-cyan-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Potensi Pariwisata
                        </h3>
                        
                        <div class="grid md:grid-cols-2 gap-5">
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <h4 class="font-bold !text-cyan-900 text-lg mb-3 flex items-center">
                                    <span class="w-8 h-8 bg-cyan-500 rounded-full flex items-center justify-center !text-white mr-2 text-sm">1</span>
                                    Wisata Alam Puncak Gunungjaya
                                </h4>
                                <p class="!text-gray-700 text-sm mb-3">
                                    Spot dengan pemandangan pegunungan dan lembah hijau. Ketinggian 300 mdpl dengan sunrise dan sunset yang menakjubkan.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-cyan-100 !text-cyan-700 text-xs rounded-full">Hiking</span>
                                    <span class="px-3 py-1 bg-cyan-100 !text-cyan-700 text-xs rounded-full">Fotografi</span>
                                    <span class="px-3 py-1 bg-cyan-100 !text-cyan-700 text-xs rounded-full">Camping</span>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <h4 class="font-bold !text-cyan-900 text-lg mb-3 flex items-center">
                                    <span class="w-8 h-8 bg-cyan-500 rounded-full flex items-center justify-center !text-white mr-2 text-sm">2</span>
                                    Agrowisata Kebun Kopi
                                </h4>
                                <p class="!text-gray-700 text-sm mb-3">
                                    Wisata edukasi perkebunan kopi dengan aktivitas petik kopi, roasting, dan coffee tasting. Cafe dengan view kebun.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-green-100 !text-green-700 text-xs rounded-full">Edukasi</span>
                                    <span class="px-3 py-1 bg-green-100 !text-green-700 text-xs rounded-full">Kuliner</span>
                                    <span class="px-3 py-1 bg-green-100 !text-green-700 text-xs rounded-full">Wisata Keluarga</span>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <h4 class="font-bold !text-cyan-900 text-lg mb-3 flex items-center">
                                    <span class="w-8 h-8 bg-cyan-500 rounded-full flex items-center justify-center !text-white mr-2 text-sm">3</span>
                                    Desa Wisata Budaya
                                </h4>
                                <p class="!text-gray-700 text-sm mb-3">
                                    Paket wisata budaya dengan homestay, belajar pertanian tradisional, kerajinan tangan, dan kuliner khas desa.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-purple-100 !text-purple-700 text-xs rounded-full">Budaya</span>
                                    <span class="px-3 py-1 bg-purple-100 !text-purple-700 text-xs rounded-full">Homestay</span>
                                    <span class="px-3 py-1 bg-purple-100 !text-purple-700 text-xs rounded-full">Tradisi</span>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <h4 class="font-bold !text-cyan-900 text-lg mb-3 flex items-center">
                                    <span class="w-8 h-8 bg-cyan-500 rounded-full flex items-center justify-center !text-white mr-2 text-sm">4</span>
                                    Outbound & Team Building
                                </h4>
                                <p class="!text-gray-700 text-sm mb-3">
                                    Area lapang dan trek alam untuk kegiatan outbound, gathering, dan team building dengan fasilitator berpengalaman.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-orange-100 !text-orange-700 text-xs rounded-full">Outbound</span>
                                    <span class="px-3 py-1 bg-orange-100 !text-orange-700 text-xs rounded-full">Corporate</span>
                                    <span class="px-3 py-1 bg-orange-100 !text-orange-700 text-xs rounded-full">Adventure</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 bg-white rounded-xl p-5 shadow-sm">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 !text-cyan-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <div>
                                    <h5 class="font-bold !text-gray-900 mb-2">Pengembangan Pariwisata</h5>
                                    <p class="!text-gray-700 text-sm leading-relaxed">
                                        Pokdarwis (Kelompok Sadar Wisata) aktif mengelola dan mengembangkan destinasi wisata. 
                                        Dalam tahap pembangunan fasilitas pendukung seperti toilet umum, gazebo, dan area parkir yang memadai.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Komitmen Pengembangan -->
                    <section class="bg-gradient-to-r from-blue-600 to-indigo-600 !text-white p-8 rounded-2xl shadow-xl not-prose">
                        <div class="text-center mb-6">
                            <svg class="w-16 h-16 !text-white mx-auto mb-4 opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <h3 class="text-3xl font-bold !text-white mb-3">Komitmen Pengembangan Potensi</h3>
                            <p class="!text-white opacity-90 text-lg max-w-3xl mx-auto">
                                Pemerintah Desa Gunungjaya berkomitmen mengoptimalkan seluruh potensi desa melalui program 
                                pemberdayaan masyarakat, pelatihan keterampilan, akses permodalan, dan pemasaran produk lokal.
                            </p>
                        </div>
                        
                        <div class="grid md:grid-cols-3 gap-4 mt-8">
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20 text-center">
                                <div class="text-4xl font-bold !text-white mb-2">50+</div>
                                <div class="!text-white opacity-90">Program Pelatihan/Tahun</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20 text-center">
                                <div class="text-4xl font-bold !text-white mb-2">200+</div>
                                <div class="!text-white opacity-90">UMKM Target 2026</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20 text-center">
                                <div class="text-4xl font-bold !text-white mb-2">5 M+</div>
                                <div class="!text-white opacity-90">Nilai Ekonomi Tahunan</div>
                            </div>
                        </div>
                    </section>
                </div>
                ',
            ], // <-- Pastikan ada koma di sini
            
            // Lembaga Desa
            [
                'title' => 'Pemerintahan Desa',
                'slug' => 'pemerintahan',
                'content' => '<h2>Struktur Organisasi Pemerintahan Desa Gunungjaya</h2><p>Pemerintahan Desa Gunungjaya berjalan dengan sistem yang tertata...</p>',
            ],
            [
                'title' => 'Badan Permusyawaratan Desa (BPD)',
                'slug' => 'bpd',
                'content' => '
                <div class="space-y-8">
                    <section>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Badan Permusyawaratan Desa (BPD)</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Badan Permusyawaratan Desa (BPD) merupakan lembaga perwujudan demokrasi dalam penyelenggaraan 
                            pemerintahan desa. BPD berfungsi menetapkan Peraturan Desa bersama Kepala Desa, menampung dan 
                            menyalurkan aspirasi masyarakat, serta melakukan pengawasan terhadap penyelenggaraan pemerintahan desa.
                        </p>
                    </section>

                    <!-- Struktur BPD -->
                    <section class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-2xl border border-blue-200 not-prose">
                        <h3 class="text-2xl font-bold !text-blue-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Susunan Pengurus BPD Gunungjaya Periode 2024-2030
                        </h3>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">H. Ahmad Fauzi, S.Sos</div>
                                    <div class="!text-blue-700 font-semibold mb-2">Ketua BPD</div>
                                    <div class="!text-gray-600 text-sm">Masa Jabatan: 2024-2030</div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Siti Maryam, S.Pd</div>
                                    <div class="!text-blue-700 font-semibold mb-2">Wakil Ketua</div>
                                    <div class="!text-gray-600 text-sm">Masa Jabatan: 2024-2030</div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Bambang Setiawan</div>
                                    <div class="!text-blue-700 font-semibold mb-2">Sekretaris</div>
                                    <div class="!text-gray-600 text-sm">Masa Jabatan: 2024-2030</div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-gray-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Drs. H. Sutrisno</div>
                                    <div class="!text-gray-700 font-semibold mb-2">Anggota</div>
                                    <div class="!text-gray-600 text-sm">Dusun I</div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-gray-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Nur Hidayat, S.E</div>
                                    <div class="!text-gray-700 font-semibold mb-2">Anggota</div>
                                    <div class="!text-gray-600 text-sm">Dusun II</div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-gray-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Agus Priyanto</div>
                                    <div class="!text-gray-700 font-semibold mb-2">Anggota</div>
                                    <div class="!text-gray-600 text-sm">Dusun III</div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Tugas dan Fungsi -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6">Tugas dan Fungsi BPD</h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-bold !text-blue-900 text-lg mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Fungsi Legislasi
                                </h4>
                                <ul class="space-y-2 !text-gray-700">
                                    <li class="flex items-start"><span class="!text-blue-600 mr-2 mt-1">•</span> <span>Membentuk Peraturan Desa bersama Kepala Desa</span></li>
                                    <li class="flex items-start"><span class="!text-blue-600 mr-2 mt-1">•</span> <span>Membahas dan menyepakati Rancangan Peraturan Desa</span></li>
                                    <li class="flex items-start"><span class="!text-blue-600 mr-2 mt-1">•</span> <span>Menampung dan menyalurkan aspirasi masyarakat</span></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold !text-green-900 text-lg mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Fungsi Pengawasan
                                </h4>
                                <ul class="space-y-2 !text-gray-700">
                                    <li class="flex items-start"><span class="!text-green-600 mr-2 mt-1">•</span> <span>Mengawasi pelaksanaan Peraturan Desa</span></li>
                                    <li class="flex items-start"><span class="!text-green-600 mr-2 mt-1">•</span> <span>Mengawasi pelaksanaan APBDes</span></li>
                                    <li class="flex items-start"><span class="!text-green-600 mr-2 mt-1">•</span> <span>Mengawasi kinerja Kepala Desa</span></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold !text-purple-900 text-lg mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    Fungsi Anggaran
                                </h4>
                                <ul class="space-y-2 !text-gray-700">
                                    <li class="flex items-start"><span class="!text-purple-600 mr-2 mt-1">•</span> <span>Membahas dan menyetujui APBDes</span></li>
                                    <li class="flex items-start"><span class="!text-purple-600 mr-2 mt-1">•</span> <span>Membahas perubahan APBDes</span></li>
                                    <li class="flex items-start"><span class="!text-purple-600 mr-2 mt-1">•</span> <span>Membahas pertanggungjawaban APBDes</span></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold !text-orange-900 text-lg mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    Fungsi Aspirasi
                                </h4>
                                <ul class="space-y-2 !text-gray-700">
                                    <li class="flex items-start"><span class="!text-orange-600 mr-2 mt-1">•</span> <span>Menggali aspirasi masyarakat desa</span></li>
                                    <li class="flex items-start"><span class="!text-orange-600 mr-2 mt-1">•</span> <span>Menyalurkan aspirasi ke Pemerintah Desa</span></li>
                                    <li class="flex items-start"><span class="!text-orange-600 mr-2 mt-1">•</span> <span>Menindaklanjuti pengaduan masyarakat</span></li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- Jadwal Rapat -->
                    <section class="bg-gradient-to-r from-blue-600 to-indigo-600 !text-white p-6 rounded-2xl shadow-xl not-prose">
                        <h3 class="text-2xl font-bold !text-white mb-4">Jadwal Rapat Rutin BPD</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <h4 class="font-bold !text-white text-lg mb-3">Rapat Pleno</h4>
                                <div class="!text-white opacity-90 text-sm space-y-2">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        Setiap bulan (minggu pertama)
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        Pukul 14.00 WIB
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                        Balai Desa Gunungjaya
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <h4 class="font-bold !text-white text-lg mb-3">Rapat Konsultasi</h4>
                                <div class="!text-white opacity-90 text-sm space-y-2">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        Setiap hari Rabu
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        Pukul 10.00-12.00 WIB
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                        Sekretariat BPD
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                ',
            ],
            [
                'title' => 'Lembaga Pemberdayaan Masyarakat (LPM)',
                'slug' => 'lpm',
                'content' => '
                <div class="space-y-8">
                    <section>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Lembaga Pemberdayaan Masyarakat (LPM)</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Lembaga Pemberdayaan Masyarakat (LPM) Desa Gunungjaya merupakan lembaga yang bertugas menyusun 
                            rencana pembangunan secara partisipatif, menggerakkan swadaya gotong royong masyarakat, melaksanakan 
                            dan mengendalikan pembangunan, serta memberdayakan masyarakat dalam meningkatkan kesejahteraan.
                        </p>
                    </section>

                    <!-- Struktur LPM -->
                    <section class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-2xl border border-green-200 not-prose">
                        <h3 class="text-2xl font-bold !text-green-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24 ">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            Pengurus LPM Gunungjaya
                        </h3>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-white rounded-xl p-5 shadow-sm text-center">
                                <div class="w-20 h-20 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <div class="font-bold !text-gray-900 text-lg">Drs. Suryadi, M.Si</div>
                                <div class="!text-green-700 font-semibold">Ketua LPM</div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm text-center">
                                <div class="w-20 h-20 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <div class="font-bold !text-gray-900 text-lg">Ir. Budiman</div>
                                <div class="!text-green-700 font-semibold">Sekretaris</div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm text-center">
                                <div class="w-20 h-20 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <div class="font-bold !text-gray-900 text-lg">Wati Rahayu, S.E</div>
                                <div class="!text-green-700 font-semibold">Bendahara</div>
                            </div>
                        </div>
                    </section>

                    <!-- Bidang-bidang -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6">Bidang Kerja LPM</h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-5 border border-blue-200">
                                <h4 class="font-bold !text-blue-900 text-lg mb-3 flex items-center">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                    Bidang Pembangunan
                                </h4>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex items-start"><span class="!text-blue-600 mr-2 mt-1">•</span> Perencanaan partisipatif (Musrenbangdes)</li>
                                    <li class="flex items-start"><span class="!text-blue-600 mr-2 mt-1">•</span> Pengawasan pelaksanaan pembangunan</li>
                                    <li class="flex items-start"><span class="!text-blue-600 mr-2 mt-1">•</span> Monitoring dan evaluasi program</li>
                                </ul>
                            </div>
                            <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-xl p-5 border border-purple-200">
                                <h4 class="font-bold !text-purple-900 text-lg mb-3 flex items-center">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                    Bidang Pemberdayaan
                                </h4>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex items-start"><span class="!text-purple-600 mr-2 mt-1">•</span> Pelatihan keterampilan masyarakat</li>
                                    <li class="flex items-start"><span class="!text-purple-600 mr-2 mt-1">•</span> Pendampingan UMKM dan kelompok usaha</li>
                                    <li class="flex items-start"><span class="!text-purple-600 mr-2 mt-1">•</span> Pengembangan ekonomi produktif</li>
                                </ul>
                            </div>
                            <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-xl p-5 border border-orange-200">
                                <h4 class="font-bold !text-orange-900 text-lg mb-3 flex items-center">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                    Bidang Kemasyarakatan
                                </h4>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex items-start"><span class="!text-orange-600 mr-2 mt-1">•</span> Gotong royong dan kerja bakti</li>
                                    <li class="flex items-start"><span class="!text-orange-600 mr-2 mt-1">•</span> Koordinasi kegiatan kemasyarakatan</li>
                                    <li class="flex items-start"><span class="!text-orange-600 mr-2 mt-1">•</span> Penguatan modal sosial</li>
                                </ul>
                            </div>
                            <div class="bg-gradient-to-br from-teal-50 to-emerald-50 rounded-xl p-5 border border-teal-200">
                                <h4 class="font-bold !text-teal-900 text-lg mb-3 flex items-center">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                    Bidang Lingkungan
                                </h4>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex items-start"><span class="!text-teal-600 mr-2 mt-1">•</span> Penghijauan dan reboisasi</li>
                                    <li class="flex items-start"><span class="!text-teal-600 mr-2 mt-1">•</span> Pengelolaan sampah dan sanitasi</li>
                                    <li class="flex items-start"><span class="!text-teal-600 mr-2 mt-1">•</span> Konservasi sumber daya alam</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- Program Kerja -->
                    <section class="bg-gradient-to-r from-green-600 to-emerald-600 !text-white p-6 rounded-2xl shadow-xl not-prose">
                        <h3 class="text-2xl font-bold !text-white mb-4">Program Kerja Tahun 2026</h3>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="text-3xl font-bold !text-white mb-2">12</div>
                                <div class="!text-white opacity-90">Program Pembangunan</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="text-3xl font-bold !text-white mb-2">24</div>
                                <div class="!text-white opacity-90">Kegiatan Pemberdayaan</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="text-3xl font-bold !text-white mb-2">850+</div>
                                <div class="!text-white opacity-90">Warga Terlibat</div>
                            </div>
                        </div>
                    </section>
                </div>
                ',
            ],
            [
                'title' => 'Pemberdayaan Kesejahteraan Keluarga (PKK)',
                'slug' => 'pkk',
                'content' => '
                <div class="space-y-8">
                    <section>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Tim Penggerak PKK Desa Gunungjaya</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Tim Penggerak PKK Desa Gunungjaya merupakan mitra Pemerintah Desa dalam memberdayakan keluarga 
                            untuk meningkatkan kesejahteraan keluarga melalui gerakan Pemberdayaan dan Kesejahteraan Keluarga. 
                            PKK memiliki peran strategis dalam bidang pendidikan, kesehatan, ekonomi keluarga, dan lingkungan hidup.
                        </p>
                    </section>

                    <!-- Struktur PKK -->
                    <section class="bg-gradient-to-br from-pink-50 to-rose-50 p-6 rounded-2xl border border-pink-200 not-prose">
                        <h3 class="text-2xl font-bold !text-pink-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Pengurus PKK Gunungjaya Periode 2024-2030
                        </h3>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-pink-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Hj. Siti Aisyah, S.Pd</div>
                                    <div class="!text-pink-700 font-semibold mb-2">Ketua Tim Penggerak PKK</div>
                                    <div class="!text-gray-600 text-sm">Istri Kepala Desa</div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-pink-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Nur Laila, S.KM</div>
                                    <div class="!text-pink-700 font-semibold mb-2">Wakil Ketua</div>
                                    <div class="!text-gray-600 text-sm">Bidang Kesehatan</div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-pink-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Sri Rejeki</div>
                                    <div class="!text-pink-700 font-semibold mb-2">Sekretaris</div>
                                    <div class="!text-gray-600 text-sm">Administrasi PKK</div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-gray-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Endang Sulistyowati</div>
                                    <div class="!text-gray-700 font-semibold mb-2">Bendahara</div>
                                    <div class="!text-gray-600 text-sm">Keuangan PKK</div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-gray-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Fatimah, S.Pd</div>
                                    <div class="!text-gray-700 font-semibold mb-2">Ketua Pokja I</div>
                                    <div class="!text-gray-600 text-sm">Penghayatan & Pengamalan Pancasila</div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-gray-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Umi Khasanah</div>
                                    <div class="!text-gray-700 font-semibold mb-2">Ketua Pokja II</div>
                                    <div class="!text-gray-600 text-sm">Gotong Royong</div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- 10 Program Pokok PKK -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6">10 Program Pokok PKK</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-5 border border-blue-200">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center !text-white font-bold mr-3">1</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 mb-1">Penghayatan & Pengamalan Pancasila</h4>
                                        <p class="!text-gray-600 text-sm">Membangun karakter bangsa berdasarkan nilai-nilai luhur Pancasila</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-5 border border-blue-200">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center !text-white font-bold mr-3">2</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 mb-1">Gotong Royong</h4>
                                        <p class="!text-gray-600 text-sm">Menumbuhkan semangat kebersamaan dalam kehidupan masyarakat</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-5 border border-green-200">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-10 h-10 bg-green-600 rounded-full flex items-center justify-center !text-white font-bold mr-3">3</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 mb-1">Pangan</h4>
                                        <p class="!text-gray-600 text-sm">Peningkatan gizi keluarga & pemanfaatan lahan pekarangan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-5 border border-green-200">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-10 h-10 bg-green-600 rounded-full flex items-center justify-center !text-white font-bold mr-3">4</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 mb-1">Sandang</h4>
                                        <p class="!text-gray-600 text-sm">Pemenuhan kebutuhan pakaian & keterampilan menjahit</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gradient-to-r from-pink-50 to-rose-50 rounded-xl p-5 border border-pink-200">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center !text-white font-bold mr-3">5</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 mb-1">Perumahan & Tata Laksana Rumah Tangga</h4>
                                        <p class="!text-gray-600 text-sm">Menciptakan rumah sehat, bersih, dan nyaman</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gradient-to-r from-purple-50 to-indigo-50 rounded-xl p-5 border border-purple-200">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center !text-white font-bold mr-3">6</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 mb-1">Pendidikan & Keterampilan</h4>
                                        <p class="!text-gray-600 text-sm">Meningkatkan pengetahuan & keterampilan keluarga</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gradient-to-r from-red-50 to-orange-50 rounded-xl p-5 border border-red-200">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-10 h-10 bg-red-600 rounded-full flex items-center justify-center !text-white font-bold mr-3">7</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 mb-1">Kesehatan</h4>
                                        <p class="!text-gray-600 text-sm">Posyandu, hidup sehat, & pencegahan penyakit</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gradient-to-r from-amber-50 to-yellow-50 rounded-xl p-5 border border-amber-200">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-10 h-10 bg-amber-600 rounded-full flex items-center justify-center !text-white font-bold mr-3">8</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 mb-1">Pengembangan Kehidupan Berkoperasi</h4>
                                        <p class="!text-gray-600 text-sm">Menumbuhkan jiwa kewirausahaan & koperasi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl p-5 border border-teal-200">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-10 h-10 bg-teal-600 rounded-full flex items-center justify-center !text-white font-bold mr-3">9</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 mb-1">Kelestarian Lingkungan Hidup</h4>
                                        <p class="!text-gray-600 text-sm">Menjaga kebersihan & kelestarian lingkungan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl p-5 border border-indigo-200">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center !text-white font-bold mr-3">10</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 mb-1">Perencanaan Sehat</h4>
                                        <p class="!text-gray-600 text-sm">KB & kesehatan reproduksi keluarga</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Kegiatan PKK -->
                    <section class="bg-gradient-to-br from-pink-50 to-rose-50 p-6 rounded-2xl border border-pink-200 not-prose">
                        <h3 class="text-2xl font-bold !text-pink-900 mb-6">Kegiatan Rutin PKK</h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-bold !text-gray-900 mb-4">Bulanan</h4>
                                <ul class="space-y-2 !text-gray-700">
                                    <li class="flex items-start"><span class="!text-pink-600 mr-2 mt-1">•</span> <span>Pertemuan rutin PKK RT/RW</span></li>
                                    <li class="flex items-start"><span class="!text-pink-600 mr-2 mt-1">•</span> <span>Pelaksanaan Posyandu (5 posyandu)</span></li>
                                    <li class="flex items-start"><span class="!text-pink-600 mr-2 mt-1">•</span> <span>Kegiatan arisan ibu-ibu</span></li>
                                    <li class="flex items-start"><span class="!text-pink-600 mr-2 mt-1">•</span> <span>Lomba kebersihan lingkungan</span></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold !text-gray-900 mb-4">Tahunan</h4>
                                <ul class="space-y-2 !text-gray-700">
                                    <li class="flex items-start"><span class="!text-pink-600 mr-2 mt-1">•</span> <span>Hari Keluarga Nasional</span></li>
                                    <li class="flex items-start"><span class="!text-pink-600 mr-2 mt-1">•</span> <span>Pelatihan keterampilan ibu-ibu</span></li>
                                    <li class="flex items-start"><span class="!text-pink-600 mr-2 mt-1">•</span> <span>Perayaan Hari Ibu</span></li>
                                    <li class="flex items-start"><span class="!text-pink-600 mr-2 mt-1">•</span> <span>Lomba masak menu sehat</span></li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- Prestasi -->
                    <section class="bg-gradient-to-r from-amber-600 to-orange-600 !text-white p-6 rounded-2xl shadow-xl not-prose">
                        <h3 class="text-2xl font-bold !text-white mb-4 text-center">Prestasi PKK Gunungjaya</h3>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="text-center">
                                    <svg class="w-12 h-12 !text-white mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                    </svg>
                                    <div class="font-bold !text-white mb-1">Juara II</div>
                                    <div class="!text-white opacity-90 text-sm">PKK Teladan Kab. Pemalang 2025</div>
                                </div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="text-center">
                                    <svg class="w-12 h-12 !text-white mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                    </svg>
                                    <div class="font-bold !text-white mb-1">Juara I</div>
                                    <div class="!text-white opacity-90 text-sm">Lomba Kebun Gizi 2025</div>
                                </div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="text-center">
                                    <svg class="w-12 h-12 !text-white mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                    </svg>
                                    <div class="font-bold !text-white mb-1">Juara III</div>
                                    <div class="!text-white opacity-90 text-sm">Posyandu Aktif Tingkat Kecamatan 2024</div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                ',
            ],
            [
                'title' => 'Karang Taruna',
                'slug' => 'karang-taruna',
                'content' => '
                <div class="space-y-8">
                    <section>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Karang Taruna "Muda Mandiri" Gunungjaya</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Karang Taruna "Muda Mandiri" Desa Gunungjaya adalah organisasi sosial wadah pengembangan generasi muda 
                            yang tumbuh dan berkembang atas dasar kesadaran dan tanggung jawab sosial dari, oleh, dan untuk masyarakat, 
                            khususnya generasi muda di wilayah desa.
                        </p>
                    </section>

                    <!-- Struktur Karang Taruna -->
                    <section class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-2xl border border-blue-200 not-prose">
                        <h3 class="text-2xl font-bold !text-blue-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Pengurus Karang Taruna Periode 2024-2027
                        </h3>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Rizki Pratama, S.Kom</div>
                                    <div class="!text-blue-700 font-semibold mb-2">Ketua</div>
                                    <div class="!text-gray-600 text-sm">Periode 2024-2027</div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Dimas Adi Nugroho</div>
                                    <div class="!text-blue-700 font-semibold mb-2">Wakil Ketua</div>
                                    <div class="!text-gray-600 text-sm">Periode 2024-2027</div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Anisa Rahmawati</div>
                                    <div class="!text-blue-700 font-semibold mb-2">Sekretaris</div>
                                    <div class="!text-gray-600 text-sm">Periode 2024-2027</div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-gray-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Putri Ayu Lestari</div>
                                    <div class="!text-gray-700 font-semibold mb-2">Bendahara</div>
                                    <div class="!text-gray-600 text-sm">Periode 2024-2027</div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-gray-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Andi Setiawan</div>
                                    <div class="!text-gray-700 font-semibold mb-2">Koordinator Bidang Olahraga</div>
                                    <div class="!text-gray-600 text-sm">Periode 2024-2027</div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-center mb-3">
                                    <div class="w-20 h-20 bg-gray-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-10 h-10 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-bold !text-gray-900 text-lg">Dewi Safitri</div>
                                    <div class="!text-gray-700 font-semibold mb-2">Koordinator Bidang Seni & Budaya</div>
                                    <div class="!text-gray-600 text-sm">Periode 2024-2027</div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Bidang Kegiatan -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6">Bidang Kegiatan</h3>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div>
                                <h4 class="font-bold !text-blue-900 text-lg mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Olahraga & Kesehatan
                                </h4>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex items-start"><span class="!text-blue-600 mr-2 mt-1">•</span> <span>Turnamen sepak bola antar dusun</span></li>
                                    <li class="flex items-start"><span class="!text-blue-600 mr-2 mt-1">•</span> <span>Senam bersama setiap Minggu pagi</span></li>
                                    <li class="flex items-start"><span class="!text-blue-600 mr-2 mt-1">•</span> <span>Bulu tangkis & voli</span></li>
                                    <li class="flex items-start"><span class="!text-blue-600 mr-2 mt-1">•</span> <span>Jalan sehat & donor darah</span></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold !text-purple-900 text-lg mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                                    </svg>
                                    Seni & Budaya
                                </h4>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex items-start"><span class="!text-purple-600 mr-2 mt-1">•</span> <span>Grup musik "Gunungjaya Band"</span></li>
                                    <li class="flex items-start"><span class="!text-purple-600 mr-2 mt-1">•</span> <span>Sanggar tari tradisional</span></li>
                                    <li class="flex items-start"><span class="!text-purple-600 mr-2 mt-1">•</span> <span>Pentas seni pada perayaan desa</span></li>
                                    <li class="flex items-start"><span class="!text-purple-600 mr-2 mt-1">•</span> <span>Festival budaya & lomba seni</span></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold !text-green-900 text-lg mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                    Sosial & Lingkungan
                                </h4>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex items-start"><span class="!text-green-600 mr-2 mt-1">•</span> <span>Kerja bakti membersihkan desa</span></li>
                                    <li class="flex items-start"><span class="!text-green-600 mr-2 mt-1">•</span> <span>Bakti sosial ke warga kurang mampu</span></li>
                                    <li class="flex items-start"><span class="!text-green-600 mr-2 mt-1">•</span> <span>Penanaman pohon & penghijauan</span></li>
                                    <li class="flex items-start"><span class="!text-green-600 mr-2 mt-1">•</span> <span>Pendampingan pembelajaran anak</span></li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- Agenda Kegiatan -->
                    <section class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-2xl border border-green-200 not-prose">
                        <h3 class="text-2xl font-bold !text-green-900 mb-6">Agenda Kegiatan 2026</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                        <span class="text-xl font-bold text-green-700">MAR</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold !text-gray-900 mb-1">Turnamen Futsal Karang Taruna Cup 2026</h4>
                                        <p class="!text-gray-600 text-sm">15-30 Maret 2026 • Lapangan Balai Desa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                        <span class="text-xl font-bold text-green-700">MEI</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold !text-gray-900 mb-1">Peringatan Hari Pendidikan Nasional</h4>
                                        <p class="!text-gray-600 text-sm">2 Mei 2026 • Sekolah & Balai Desa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                        <span class="text-xl font-bold text-green-700">AUG</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold !text-gray-900 mb-1">Lomba HUT Kemerdekaan RI</h4>
                                        <p class="!text-gray-600 text-sm">17 Agustus 2026 • Seluruh Dusun</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                        <span class="text-xl font-bold text-green-700">DEC</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold !text-gray-900 mb-1">Festival Seni & Budaya Desa</h4>
                                        <p class="!text-gray-600 text-sm">25 Desember 2026 • Lapangan Desa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Statistik -->
                    <section class="bg-gradient-to-r from-blue-600 to-indigo-600 !text-white p-6 rounded-2xl shadow-xl not-prose">
                        <h3 class="text-2xl font-bold !text-white mb-6 text-center">Data Anggota Karang Taruna</h3>
                        <div class="grid md:grid-cols-4 gap-4">
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="text-3xl font-bold !text-white mb-2">165</div>
                                <div class="!text-white opacity-90">Total Anggota Aktif</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="text-3xl font-bold !text-white mb-2">12</div>
                                <div class="!text-white opacity-90">Kegiatan per Tahun</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="text-3xl font-bold !text-white mb-2">5</div>
                                <div class="!text-white opacity-90">Prestasi Tingkat Kabupaten</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="text-3xl font-bold !text-white mb-2">18-35</div>
                                <div class="!text-white opacity-90">Rentang Usia (Tahun)</div>
                            </div>
                        </div>
                    </section>
                </div>
                ',
            ],
            [
                'title' => 'Posyandu',
                'slug' => 'posyandu',
                'content' => '
                <div class="space-y-8">
                    <section>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Pos Pelayanan Terpadu (Posyandu) Desa Gunungjaya</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Posyandu adalah wadah pemberdayaan masyarakat untuk memperoleh kemudahan dalam pelayanan 
                            kesehatan dasar, terutama untuk menurunkan angka kematian ibu (AKI) dan angka kematian bayi (AKB). 
                            Desa Gunungjaya memiliki 5 Posyandu yang tersebar di 3 dusun.
                        </p>
                    </section>

                    <!-- Daftar Posyandu -->
                    <section class="bg-gradient-to-br from-red-50 to-pink-50 p-6 rounded-2xl border border-red-200 not-prose">
                        <h3 class="text-2xl font-bold !text-red-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            5 Posyandu di Desa Gunungjaya
                        </h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex items-start">
                                    <div class="w-14 h-14 bg-red-500 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                        <span class="text-2xl font-bold !text-white">1</span>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 text-lg mb-2">Posyandu Melati I</h4>
                                        <p class="!text-gray-600 text-sm mb-2"><strong>Lokasi:</strong> Dusun I RT 01/RW 01</p>
                                        <p class="!text-gray-600 text-sm mb-2"><strong>Kader:</strong> Ibu Siti Aminah (Koordinator)</p>
                                        <p class="!text-gray-600 text-sm"><strong>Jadwal:</strong> Setiap Selasa minggu ke-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex items-start">
                                    <div class="w-14 h-14 bg-red-500 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                        <span class="text-2xl font-bold !text-white">2</span>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 text-lg mb-2">Posyandu Melati II</h4>
                                        <p class="!text-gray-600 text-sm mb-2"><strong>Lokasi:</strong> Dusun I RT 04/RW 02</p>
                                        <p class="!text-gray-600 text-sm mb-2"><strong>Kader:</strong> Ibu Sumarni (Koordinator)</p>
                                        <p class="!text-gray-600 text-sm"><strong>Jadwal:</strong> Setiap Rabu minggu ke-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex items-start">
                                    <div class="w-14 h-14 bg-red-500 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                        <span class="text-2xl font-bold !text-white">3</span>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 text-lg mb-2">Posyandu Mawar</h4>
                                        <p class="!text-gray-600 text-sm mb-2"><strong>Lokasi:</strong> Dusun II RT 05/RW 03</p>
                                        <p class="!text-gray-600 text-sm mb-2"><strong>Kader:</strong> Ibu Fatimah (Koordinator)</p>
                                        <p class="!text-gray-600 text-sm"><strong>Jadwal:</strong> Setiap Kamis minggu ke-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex items-start">
                                    <div class="w-14 h-14 bg-red-500 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                        <span class="text-2xl font-bold !text-white">4</span>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 text-lg mb-2">Posyandu Anggrek</h4>
                                        <p class="!text-gray-600 text-sm mb-2"><strong>Lokasi:</strong> Dusun II RT 08/RW 04</p>
                                        <p class="!text-gray-600 text-sm mb-2"><strong>Kader:</strong> Ibu Nur Hidayah (Koordinator)</p>
                                        <p class="!text-gray-600 text-sm"><strong>Jadwal:</strong> Setiap Jumat minggu ke-1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex items-start">
                                    <div class="w-14 h-14 bg-red-500 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                        <span class="text-2xl font-bold !text-white">5</span>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 text-lg mb-2">Posyandu Kenanga</h4>
                                        <p class="!text-gray-600 text-sm mb-2"><strong>Lokasi:</strong> Dusun III RT 11/RW 05</p>
                                        <p class="!text-gray-600 text-sm mb-2"><strong>Kader:</strong> Ibu Sri Rahayu (Koordinator)</p>
                                        <p class="!text-gray-600 text-sm"><strong>Jadwal:</strong> Setiap Selasa minggu ke-2</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Layanan Posyandu -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6">Layanan Posyandu</h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-bold !text-red-900 text-lg mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Untuk Bayi & Balita
                                </h4>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex items-start"><span class="!text-red-600 mr-2 mt-1">•</span> <span>Penimbangan & pengukuran tumbuh kembang</span></li>
                                    <li class="flex items-start"><span class="!text-red-600 mr-2 mt-1">•</span> <span>Imunisasi dasar lengkap (BCG, DPT, Polio, Campak, dll)</span></li>
                                    <li class="flex items-start"><span class="!text-red-600 mr-2 mt-1">•</span> <span>Pemberian vitamin A (Februari & Agustus)</span></li>
                                    <li class="flex items-start"><span class="!text-red-600 mr-2 mt-1">•</span> <span>Pemantauan gizi & stimulasi tumbuh kembang</span></li>
                                    <li class="flex items-start"><span class="!text-red-600 mr-2 mt-1">•</span> <span>Konseling kesehatan anak</span></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold !text-pink-900 text-lg mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                    Untuk Ibu Hamil & Lansia
                                </h4>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex items-start"><span class="!text-pink-600 mr-2 mt-1">•</span> <span>Pemeriksaan kesehatan ibu hamil (ANC)</span></li>
                                    <li class="flex items-start"><span class="!text-pink-600 mr-2 mt-1">•</span> <span>Pemberian tablet tambah darah (TTD)</span></li>
                                    <li class="flex items-start"><span class="!text-pink-600 mr-2 mt-1">•</span> <span>Kelas ibu hamil & persiapan persalinan</span></li>
                                    <li class="flex items-start"><span class="!text-pink-600 mr-2 mt-1">•</span> <span>Pelayanan KB (Keluarga Berencana)</span></li>
                                    <li class="flex items-start"><span class="!text-pink-600 mr-2 mt-1">•</span> <span>Pemeriksaan kesehatan lansia</span></li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- 5 Meja Posyandu -->
                    <section class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-2xl border border-blue-200 not-prose">
                        <h3 class="text-2xl font-bold !text-blue-900 mb-6">Sistem 5 Meja Posyandu</h3>
                        <div class="grid md:grid-cols-5 gap-3">
                            <div class="bg-white rounded-xl p-4 shadow-sm text-center">
                                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-xl font-bold !text-white">1</span>
                                </div>
                                <h4 class="font-bold !text-gray-900 text-sm mb-2">Pendaftaran</h4>
                                <p class="!text-gray-600 text-xs">Registrasi & pencatatan</p>
                            </div>
                            <div class="bg-white rounded-xl p-4 shadow-sm text-center">
                                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-xl font-bold !text-white">2</span>
                                </div>
                                <h4 class="font-bold !text-gray-900 text-sm mb-2">Penimbangan</h4>
                                <p class="!text-gray-600 text-xs">Mengukur BB & TB</p>
                            </div>
                            <div class="bg-white rounded-xl p-4 shadow-sm text-center">
                                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-xl font-bold !text-white">3</span>
                                </div>
                                <h4 class="font-bold !text-gray-900 text-sm mb-2">Pengisian KMS</h4>
                                <p class="!text-gray-600 text-xs">Kartu Menuju Sehat</p>
                            </div>
                            <div class="bg-white rounded-xl p-4 shadow-sm text-center">
                                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-xl font-bold !text-white">4</span>
                                </div>
                                <h4 class="font-bold !text-gray-900 text-sm mb-2">Penyuluhan</h4>
                                <p class="!text-gray-600 text-xs">Edukasi kesehatan</p>
                            </div>
                            <div class="bg-white rounded-xl p-4 shadow-sm text-center">
                                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-xl font-bold !text-white">5</span>
                                </div>
                                <h4 class="font-bold !text-gray-900 text-sm mb-2">Pelayanan</h4>
                                <p class="!text-gray-600 text-xs">Imunisasi & Vitamin</p>
                            </div>
                        </div>
                    </section>

                    <!-- Statistik Posyandu -->
                    <section class="bg-gradient-to-r from-red-600 to-pink-600 !text-white p-6 rounded-2xl shadow-xl not-prose">
                        <h3 class="text-2xl font-bold !text-white mb-6 text-center">Data Posyandu 2026</h3>
                        <div class="grid md:grid-cols-4 gap-4">
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="text-3xl font-bold !text-white mb-2">342</div>
                                <div class="!text-white opacity-90">Balita Terdaftar</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="text-3xl font-bold !text-white mb-2">68</div>
                                <div class="!text-white opacity-90">Ibu Hamil</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="text-3xl font-bold !text-white mb-2">25</div>
                                <div class="!text-white opacity-90">Kader Posyandu</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="text-3xl font-bold !text-white mb-2">92%</div>
                                <div class="!text-white opacity-90">Cakupan Imunisasi</div>
                            </div>
                        </div>
                    </section>

                    <!-- Kontak -->
                    <section class="bg-white rounded-xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-xl font-bold !text-gray-900 mb-4">Informasi & Konsultasi</h3>
                        <p class="!text-gray-700 mb-4">Untuk informasi lebih lanjut atau konsultasi kesehatan, hubungi:</p>
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-5 border border-green-200">
                            <div class="flex items-center">
                                <svg class="w-8 h-8 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <div>
                                    <div class="font-bold !text-gray-900">Koordinator Posyandu Desa</div>
                                    <div class="!text-gray-700">Ibu Siti Aminah: <strong>+62 821-2345-6789</strong></div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                ',
            ],
            
            // Halaman Tambahan
            [
                'title' => 'Visi & Misi Desa',
                'slug' => 'visi-misi',
                'content' => '
                <div class="space-y-8">
                    <!-- Visi -->
                    <section class="bg-gradient-to-br from-blue-600 to-indigo-700 !text-white p-8 rounded-2xl shadow-2xl not-prose">
                        <div class="text-center">
                            <svg class="w-20 h-20 !text-white mx-auto mb-6 opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            <h2 class="text-4xl font-bold !text-white mb-4">VISI</h2>
                            <div class="max-w-4xl mx-auto">
                                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-8 border-2 border-white/30">
                                    <p class="text-2xl md:text-3xl font-bold !text-white leading-relaxed italic">
                                        "Terwujudnya Desa Gunungjaya yang Maju, Mandiri, Sejahtera, dan Berbudaya Berlandaskan Nilai-Nilai Religius dan Kearifan Lokal"
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Misi -->
                    <section class="bg-white rounded-2xl shadow-lg p-8 border border-gray-200 not-prose">
                        <div class="text-center mb-8">
                            <svg class="w-16 h-16 text-blue-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                            <h3 class="text-3xl font-bold !text-gray-900">MISI</h3>
                            <p class="!text-gray-600 mt-2">Langkah strategis untuk mewujudkan visi desa</p>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 border-l-4 border-blue-600 hover:shadow-md transition-all">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center !text-white font-bold text-xl mr-4">1</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 text-lg mb-2">Meningkatkan Kualitas Tata Kelola Pemerintahan Desa</h4>
                                        <p class="!text-gray-700 text-sm">Membangun sistem pemerintahan yang bersih, transparan, akuntabel, dan partisipatif dengan melibatkan seluruh elemen masyarakat dalam setiap pengambilan keputusan.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-6 border-l-4 border-green-600 hover:shadow-md transition-all">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-12 h-12 bg-green-600 rounded-full flex items-center justify-center !text-white font-bold text-xl mr-4">2</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 text-lg mb-2">Meningkatkan Kesejahteraan Ekonomi Masyarakat</h4>
                                        <p class="!text-gray-700 text-sm">Mengembangkan potensi ekonomi lokal melalui UMKM, pertanian modern, dan pariwisata desa untuk meningkatkan pendapatan dan kesejahteraan masyarakat.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-purple-50 to-indigo-50 rounded-xl p-6 border-l-4 border-purple-600 hover:shadow-md transition-all">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center !text-white font-bold text-xl mr-4">3</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 text-lg mb-2">Meningkatkan Kualitas Pendidikan dan Kesehatan</h4>
                                        <p class="!text-gray-700 text-sm">Memfasilitasi akses pendidikan berkualitas dan pelayanan kesehatan yang memadai untuk seluruh warga desa tanpa terkecuali.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl p-6 border-l-4 border-orange-600 hover:shadow-md transition-all">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-12 h-12 bg-orange-600 rounded-full flex items-center justify-center !text-white font-bold text-xl mr-4">4</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 text-lg mb-2">Meningkatkan Infrastruktur dan Sarana Prasarana Desa</h4>
                                        <p class="!text-gray-700 text-sm">Membangun dan memperbaiki infrastruktur jalan, irigasi, gedung publik, dan fasilitas umum untuk mendukung aktivitas masyarakat.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl p-6 border-l-4 border-teal-600 hover:shadow-md transition-all">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-12 h-12 bg-teal-600 rounded-full flex items-center justify-center !text-white font-bold text-xl mr-4">5</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 text-lg mb-2">Melestarikan Nilai-Nilai Budaya dan Kearifan Lokal</h4>
                                        <p class="!text-gray-700 text-sm">Menjaga dan mengembangkan tradisi, budaya, dan nilai-nilai luhur masyarakat sebagai identitas dan jati diri Desa Gunungjaya.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-pink-50 to-rose-50 rounded-xl p-6 border-l-4 border-pink-600 hover:shadow-md transition-all">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-12 h-12 bg-pink-600 rounded-full flex items-center justify-center !text-white font-bold text-xl mr-4">6</div>
                                    <div class="flex-1">
                                        <h4 class="font-bold !text-gray-900 text-lg mb-2">Meningkatkan Kerukunan dan Keamanan Masyarakat</h4>
                                        <p class="!text-gray-700 text-sm">Membangun kehidupan harmonis antar warga dengan memperkuat gotong royong, toleransi, dan sistem keamanan lingkungan yang solid.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Target Pembangunan -->
                    <section class="bg-gradient-to-br from-gray-50 to-slate-50 p-6 rounded-2xl border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6 text-center">Arah Pembangunan 2024-2030</h3>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-white rounded-xl p-5 shadow-sm text-center">
                                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold !text-gray-900 mb-2">Ekonomi Produktif</h4>
                                <p class="!text-gray-600 text-sm">Pertumbuhan ekonomi desa 8% per tahun</p>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm text-center">
                                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold !text-gray-900 mb-2">SDM Berkualitas</h4>
                                <p class="!text-gray-600 text-sm">80% lulusan SMA melanjutkan pendidikan tinggi</p>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm text-center">
                                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold !text-gray-900 mb-2">Infrastruktur Lengkap</h4>
                                <p class="!text-gray-600 text-sm">100% jalan desa beraspal/beton tahun 2028</p>
                            </div>
                        </div>
                    </section>
                </div>
                ',
            ],
            [
                'title' => 'Kontak Kami',
                'slug' => 'kontak',
                'content' => '
                <div class="space-y-8">
                    <section>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Hubungi Kami</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Kantor Desa Gunungjaya siap melayani masyarakat untuk berbagai keperluan administrasi dan informasi. 
                            Jangan ragu untuk menghubungi kami melalui berbagai saluran komunikasi yang tersedia.
                        </p>
                    </section>

                    <!-- Info Kontak -->
                    <section class="grid md:grid-cols-2 gap-6 not-prose">
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-2xl border border-blue-200">
                            <div class="flex items-start">
                                <div class="w-14 h-14 bg-blue-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-8 h-8 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold !text-blue-900 text-lg mb-2">Alamat Kantor</h3>
                                    <p class="!text-gray-700 leading-relaxed">
                                        Jl. Raya Gunungjaya No. 123<br>
                                        Desa Gunungjaya, Kec. Belik<br>
                                        Kabupaten Pemalang<br>
                                        Jawa Tengah 52355
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-2xl border border-green-200">
                            <div class="flex items-start">
                                <div class="w-14 h-14 bg-green-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-8 h-8 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold !text-green-900 text-lg mb-2">Telepon & WhatsApp</h3>
                                    <p class="!text-gray-700 mb-2">
                                        <strong>Kantor:</strong> (0284) 555-0123
                                    </p>
                                    <p class="!text-gray-700">
                                        <strong>WhatsApp:</strong> +62 812-3456-7890
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 p-6 rounded-2xl border border-purple-200">
                            <div class="flex items-start">
                                <div class="w-14 h-14 bg-purple-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-8 h-8 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold !text-purple-900 text-lg mb-2">Email</h3>
                                    <p class="!text-gray-700 mb-2">
                                        <strong>Resmi:</strong> info@gunungjaya-belik.desa.id
                                    </p>
                                    <p class="!text-gray-700">
                                        <strong>Pengaduan:</strong> pengaduan@gunungjaya-belik.desa.id
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-orange-50 to-amber-50 p-6 rounded-2xl border border-orange-200">
                            <div class="flex items-start">
                                <div class="w-14 h-14 bg-orange-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-8 h-8 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold !text-orange-900 text-lg mb-2">Jam Pelayanan</h3>
                                    <p class="!text-gray-700 mb-1">
                                        <strong>Senin - Kamis:</strong> 08.00 - 15.00 WIB
                                    </p>
                                    <p class="!text-gray-700 mb-1">
                                        <strong>Jumat:</strong> 08.00 - 11.30 WIB
                                    </p>
                                    <p class="!text-red-600 text-sm mt-2">*Sabtu & Minggu Libur</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Social Media -->
                    <section class="bg-gradient-to-r from-slate-700 to-gray-800 !text-white p-8 rounded-2xl shadow-xl not-prose">
                        <h3 class="text-2xl font-bold !text-white mb-6 text-center">Media Sosial Kami</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <a href="#" class="bg-white/10 backdrop-blur-sm hover:bg-white/20 transition-all p-5 rounded-xl text-center group">
                                <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 !text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </div>
                                <div class="font-semibold !text-white">Facebook</div>
                            </a>
                            <a href="#" class="bg-white/10 backdrop-blur-sm hover:bg-white/20 transition-all p-5 rounded-xl text-center group">
                                <div class="w-12 h-12 bg-pink-500 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 !text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                    </svg>
                                </div>
                                <div class="font-semibold !text-white">Instagram</div>
                            </a>
                            <a href="#" class="bg-white/10 backdrop-blur-sm hover:bg-white/20 transition-all p-5 rounded-xl text-center group">
                                <div class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 !text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                    </svg>
                                </div>
                                <div class="font-semibold !text-white">YouTube</div>
                            </a>
                            <a href="#" class="bg-white/10 backdrop-blur-sm hover:bg-white/20 transition-all p-5 rounded-xl text-center group">
                                <div class="w-12 h-12 bg-sky-500 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6 !text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                </div>
                                <div class="font-semibold !text-white">Twitter</div>
                            </a>
                        </div>
                    </section>

                    <!-- Peta Lokasi -->
                    <section class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-2xl border border-blue-200 not-prose">
                        <h3 class="text-2xl font-bold !text-blue-900 mb-4">Peta Lokasi Kantor Desa</h3>
                        <div class="bg-white rounded-xl overflow-hidden shadow-xl">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3489476753846!2d109.4051097!3d-6.972222199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7016b6e0000001%3A0x1!2sBalai%20Desa%20Gunungjaya!5e0!3m2!1sid!2sid!4v1234567890" 
                                width="100%" 
                                height="450" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                                class="w-full">
                            </iframe>
                        </div>
                        <div class="mt-4 text-center">
                            <a href="https://maps.app.goo.gl/sB9eiHEKe8r1yir86" target="_blank" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 !text-white font-semibold rounded-lg shadow-sm hover:shadow transition-all">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Buka di Google Maps
                            </a>
                        </div>
                    </section>
                </div>
                ',
            ],
            [
                'title' => 'UMKM Desa',
                'slug' => 'umkm',
                'content' => '
                <div class="space-y-8">
                    <section>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Produk Unggulan & UMKM Desa Gunungjaya</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Desa Gunungjaya memiliki berbagai produk unggulan hasil karya UMKM lokal yang berkualitas tinggi. 
                            Dengan dukungan pemerintah desa, UMKM terus berkembang dan memasarkan produknya hingga ke luar daerah.
                        </p>
                    </section>

                    <!-- Kategori UMKM -->
                    <section class="grid md:grid-cols-2 gap-6 not-prose">
                        <div class="bg-gradient-to-br from-amber-50 to-orange-50 p-6 rounded-2xl border border-amber-200">
                            <div class="flex items-center mb-4">
                                <div class="w-14 h-14 bg-amber-500 rounded-xl flex items-center justify-center mr-4">
                                    <svg class="w-8 h-8 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold !text-amber-900">145</h3>
                                    <div class="!text-amber-700 font-semibold">Total UMKM Aktif</div>
                                </div>
                            </div>
                            <p class="!text-gray-700 text-sm">Usaha mikro, kecil, dan menengah yang terdaftar dan aktif beroperasi</p>
                        </div>

                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-2xl border border-green-200">
                            <div class="flex items-center mb-4">
                                <div class="w-14 h-14 bg-green-500 rounded-xl flex items-center justify-center mr-4">
                                    <svg class="w-8 h-8 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold !text-green-900">385</h3>
                                    <div class="!text-green-700 font-semibold">Tenaga Kerja Terserap</div>
                                </div>
                            </div>
                            <p class="!text-gray-700 text-sm">Warga desa yang bekerja di sektor UMKM sebagai pelaku atau karyawan</p>
                        </div>
                    </section>

                    <!-- Produk Kuliner -->
                    <section class="bg-gradient-to-br from-pink-50 to-rose-50 p-6 rounded-2xl border border-pink-200 not-prose">
                        <h3 class="text-2xl font-bold !text-pink-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Produk Kuliner
                        </h3>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all">
                                <h4 class="font-bold !text-gray-900 text-lg mb-2">Kue Tradisional</h4>
                                <p class="!text-gray-600 text-sm mb-3">Kue kering, basah, dan camilan khas desa dengan resep turun-temurun</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-xs !text-pink-600 font-semibold">18 UMKM</span>
                                    <span class="text-xs !text-gray-500">Rp 15.000 - 50.000</span>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all">
                                <h4 class="font-bold !text-gray-900 text-lg mb-2">Keripik & Snack</h4>
                                <p class="!text-gray-600 text-sm mb-3">Keripik singkong, pisang, tempe, dan berbagai camilan renyah</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-xs !text-pink-600 font-semibold">12 UMKM</span>
                                    <span class="text-xs !text-gray-500">Rp 10.000 - 25.000</span>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition-all">
                                <h4 class="font-bold !text-gray-900 text-lg mb-2">Catering & Katering</h4>
                                <p class="!text-gray-600 text-sm mb-3">Layanan katering untuk acara hajatan, syukuran, dan arisan</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-xs !text-pink-600 font-semibold">8 UMKM</span>
                                    <span class="text-xs !text-gray-500">Mulai Rp 15.000/pax</span>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Kerajinan -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                            </svg>
                            Kerajinan Tangan
                        </h3>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-xl p-5 border border-purple-200">
                                <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mb-3">
                                    <svg class="w-7 h-7 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold !text-gray-900 mb-2">Anyaman Bambu</h4>
                                <p class="!text-gray-600 text-sm">Tas, keranjang, tempat nasi, dan dekorasi rumah dari bambu berkualitas</p>
                            </div>
                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-5 border border-blue-200">
                                <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mb-3">
                                    <svg class="w-7 h-7 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold !text-gray-900 mb-2">Batik Tulis & Cap</h4>
                                <p class="!text-gray-600 text-sm">Kain batik dengan motif khas Pemalang dan custom design sesuai pesanan</p>
                            </div>
                            <div class="bg-gradient-to-br from-teal-50 to-emerald-50 rounded-xl p-5 border border-teal-200">
                                <div class="w-12 h-12 bg-teal-500 rounded-lg flex items-center justify-center mb-3">
                                    <svg class="w-7 h-7 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold !text-gray-900 mb-2">Kerajinan Kayu</h4>
                                <p class="!text-gray-600 text-sm">Ukiran, furniture, dan souvenir dari kayu jati dan mahoni pilihan</p>
                            </div>
                        </div>
                    </section>

                    <!-- Produk Olahan -->
                    <section class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-2xl border border-green-200 not-prose">
                        <h3 class="text-2xl font-bold !text-green-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                            Produk Olahan Pertanian
                        </h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex items-start">
                                    <div class="w-16 h-16 bg-amber-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                        <svg class="w-10 h-10 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold !text-gray-900 mb-2">Gula Aren & Gula Semut</h4>
                                        <p class="!text-gray-600 text-sm mb-2">Gula aren murni tanpa campuran, dikemas higienis dan tahan lama</p>
                                        <div class="text-sm !text-green-700 font-semibold">Rp 25.000 - 75.000/kg</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="flex items-start">
                                    <div class="w-16 h-16 bg-orange-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                        <svg class="w-10 h-10 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold !text-gray-900 mb-2">Sambal & Bumbu Instan</h4>
                                        <p class="!text-gray-600 text-sm mb-2">Sambal, bumbu rendang, dan bumbu masak praktis dari bahan pilihan</p>
                                        <div class="text-sm !text-green-700 font-semibold">Rp 15.000 - 35.000/pack</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Cara Pemesanan -->
                    <section class="bg-gradient-to-r from-blue-600 to-indigo-600 !text-white p-8 rounded-2xl shadow-xl not-prose">
                        <div class="text-center mb-6">
                            <svg class="w-16 h-16 !text-white mx-auto mb-4 opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <h3 class="text-2xl font-bold !text-white mb-3">Cara Pemesanan Produk UMKM</h3>
                            <p class="!text-white opacity-90 mb-6">Hubungi kami untuk informasi dan pemesanan produk UMKM Desa Gunungjaya</p>
                        </div>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="!text-white font-bold text-lg mb-2">WhatsApp</div>
                                <div class="!text-white opacity-90 text-sm mb-3">+62 812-3456-7890</div>
                                <a href="https://wa.me/6281234567890" class="inline-block px-4 py-2 bg-green-500 hover:bg-green-600 !text-white rounded-lg text-sm font-semibold transition-all">Chat Sekarang</a>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="!text-white font-bold text-lg mb-2">Email</div>
                                <div class="!text-white opacity-90 text-sm mb-3">umkm@gunungjaya-belik.desa.id</div>
                                <a href="mailto:umkm@gunungjaya-belik.desa.id" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 !text-white rounded-lg text-sm font-semibold transition-all">Kirim Email</a>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20">
                                <div class="!text-white font-bold text-lg mb-2">Kunjungi Langsung</div>
                                <div class="!text-white opacity-90 text-sm mb-3">Balai Desa Gunungjaya</div>
                                <a href="/kontak" class="inline-block px-4 py-2 bg-purple-500 hover:bg-purple-600 !text-white rounded-lg text-sm font-semibold transition-all">Lihat Lokasi</a>
                            </div>
                        </div>
                    </section>
                </div>
                ',
            ],
            [
                'title' => 'Wisata Desa',
                'slug' => 'wisata',
                'content' => '
                <div class="space-y-8">
                    <section>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Destinasi Wisata Desa Gunungjaya</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Desa Gunungjaya memiliki berbagai destinasi wisata alam, budaya, dan edukasi yang menarik. 
                            Dengan udara sejuk pegunungan dan keramahan masyarakat, desa ini menjadi pilihan tepat untuk berlibur 
                            bersama keluarga atau gathering kantor.
                        </p>
                    </section>

                    <!-- Highlight Wisata -->
                    <section class="grid md:grid-cols-3 gap-6 not-prose">
                        <div class="bg-gradient-to-br from-cyan-500 to-blue-600 !text-white p-6 rounded-2xl shadow-xl text-center">
                            <svg class="w-16 h-16 !text-white mx-auto mb-3 opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                            <h3 class="text-2xl font-bold !text-white mb-2">Wisata Alam</h3>
                            <p class="!text-white opacity-90 text-sm">Pemandangan pegunungan & alam hijau</p>
                        </div>
                        <div class="bg-gradient-to-br from-green-500 to-emerald-600 !text-white p-6 rounded-2xl shadow-xl text-center">
                            <svg class="w-16 h-16 !text-white mx-auto mb-3 opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                            </svg>
                            <h3 class="text-2xl font-bold !text-white mb-2">Wisata Budaya</h3>
                            <p class="!text-white opacity-90 text-sm">Tradisi & kearifan lokal masyarakat</p>
                        </div>
                        <div class="bg-gradient-to-br from-purple-500 to-indigo-600 !text-white p-6 rounded-2xl shadow-xl text-center">
                            <svg class="w-16 h-16 !text-white mx-auto mb-3 opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="text-2xl font-bold !text-white mb-2">Agrowisata</h3>
                            <p class="!text-white opacity-90 text-sm">Edukasi pertanian & perkebunan</p>
                        </div>
                    </section>

                    <!-- Puncak Gunungjaya -->
                    <section class="bg-gradient-to-br from-blue-50 to-cyan-50 p-6 rounded-2xl border border-blue-200 not-prose">
                        <div class="flex items-start mb-4">
                            <div class="w-14 h-14 bg-blue-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-8 h-8 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold !text-blue-900 mb-2">Wisata Alam Puncak Gunungjaya</h3>
                                <p class="!text-gray-700 leading-relaxed mb-4">
                                    Destinasi unggulan dengan pemandangan 360 derajat ke arah lembah dan pegunungan. 
                                    Berada di ketinggian 300 mdpl, tempat ini menawarkan sunrise dan sunset yang memukau. 
                                    Dilengkapi spot foto instagramable dan area camping ground.
                                </p>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-4 gap-3">
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="font-bold !text-blue-700 text-xl mb-1">300 mdpl</div>
                                <div class="!text-gray-600 text-sm">Ketinggian</div>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="font-bold !text-blue-700 text-xl mb-1">24-28°C</div>
                                <div class="!text-gray-600 text-sm">Suhu Udara</div>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="font-bold !text-blue-700 text-xl mb-1">Rp 10.000</div>
                                <div class="!text-gray-600 text-sm">Tiket Masuk</div>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="font-bold !text-blue-700 text-xl mb-1">06:00-18:00</div>
                                <div class="!text-gray-600 text-sm">Jam Buka</div>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-blue-100 !text-blue-700 text-sm rounded-full">Hiking</span>
                            <span class="px-3 py-1 bg-blue-100 !text-blue-700 text-sm rounded-full">Fotografi</span>
                            <span class="px-3 py-1 bg-blue-100 !text-blue-700 text-sm rounded-full">Camping</span>
                            <span class="px-3 py-1 bg-blue-100 !text-blue-700 text-sm rounded-full">Sunrise/Sunset</span>
                        </div>
                    </section>

                    <!-- Agrowisata Kopi -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <div class="flex items-start mb-4">
                            <div class="w-14 h-14 bg-amber-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-8 h-8 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold !text-gray-900 mb-2">Agrowisata Kebun Kopi Gunungjaya</h3>
                                <p class="!text-gray-700 leading-relaxed mb-4">
                                    Wisata edukasi perkebunan kopi di area seluas 12 hektar. Pengunjung dapat belajar proses 
                                    penanaman, perawatan, panen, hingga roasting kopi. Tersedia cafe dengan view kebun untuk 
                                    menikmati kopi asli Gunungjaya yang baru diseduh.
                                </p>
                            </div>
                        </div>
                        <div class="bg-gradient-to-r from-amber-50 to-orange-50 rounded-xl p-5 border border-amber-200">
                            <h4 class="font-bold !text-gray-900 mb-3">Paket Wisata Tersedia:</h4>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="bg-white rounded-lg p-4">
                                    <h5 class="font-bold !text-amber-900 mb-2">Paket Edukasi</h5>
                                    <ul class="space-y-1 !text-gray-700 text-sm">
                                        <li class="flex items-center"><span class="!text-amber-600 mr-2">•</span> Tour kebun kopi</li>
                                        <li class="flex items-center"><span class="!text-amber-600 mr-2">•</span> Petik kopi langsung</li>
                                        <li class="flex items-center"><span class="!text-amber-600 mr-2">•</span> Workshop roasting</li>
                                        <li class="flex items-center"><span class="!text-amber-600 mr-2">•</span> Coffee tasting</li>
                                    </ul>
                                    <div class="mt-3 font-bold !text-amber-700">Rp 75.000/orang</div>
                                </div>
                                <div class="bg-white rounded-lg p-4">
                                    <h5 class="font-bold !text-amber-900 mb-2">Paket Keluarga</h5>
                                    <ul class="space-y-1 !text-gray-700 text-sm">
                                        <li class="flex items-center"><span class="!text-amber-600 mr-2">•</span> Tour kebun</li>
                                        <li class="flex items-center"><span class="!text-amber-600 mr-2">•</span> Makan siang</li>
                                        <li class="flex items-center"><span class="!text-amber-600 mr-2">•</span> Coffee break</li>
                                        <li class="flex items-center"><span class="!text-amber-600 mr-2">•</span> Oleh-oleh kopi</li>
                                    </ul>
                                    <div class="mt-3 font-bold !text-amber-700">Rp 150.000/orang</div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Desa Wisata Budaya -->
                    <section class="bg-gradient-to-br from-purple-50 to-indigo-50 p-6 rounded-2xl border border-purple-200 not-prose">
                        <div class="flex items-start mb-4">
                            <div class="w-14 h-14 bg-purple-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-8 h-8 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold !text-purple-900 mb-2">Paket Desa Wisata Budaya</h3>
                                <p class="!text-gray-700 leading-relaxed mb-4">
                                    Rasakan kehidupan autentik masyarakat desa dengan menginap di homestay warga. 
                                    Belajar pertanian tradisional, kerajinan tangan, memasak kuliner khas, dan mengikuti 
                                    kegiatan sosial budaya masyarakat.
                                </p>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-white rounded-xl p-5">
                                <h4 class="font-bold !text-purple-900 mb-3">Aktivitas:</h4>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex items-center"><span class="!text-purple-600 mr-2">✓</span> Belajar bertani</li>
                                    <li class="flex items-center"><span class="!text-purple-600 mr-2">✓</span> Membuat kerajinan</li>
                                    <li class="flex items-center"><span class="!text-purple-600 mr-2">✓</span> Cooking class</li>
                                    <li class="flex items-center"><span class="!text-purple-600 mr-2">✓</span> Jelajah desa</li>
                                </ul>
                            </div>
                            <div class="bg-white rounded-xl p-5">
                                <h4 class="font-bold !text-purple-900 mb-3">Fasilitas:</h4>
                                <ul class="space-y-2 !text-gray-700 text-sm">
                                    <li class="flex items-center"><span class="!text-purple-600 mr-2">✓</span> Homestay bersih</li>
                                    <li class="flex items-center"><span class="!text-purple-600 mr-2">✓</span> Makan 3x sehari</li>
                                    <li class="flex items-center"><span class="!text-purple-600 mr-2">✓</span> Guide lokal</li>
                                    <li class="flex items-center"><span class="!text-purple-600 mr-2">✓</span> Perlengkapan</li>
                                </ul>
                            </div>
                            <div class="bg-white rounded-xl p-5">
                                <h4 class="font-bold !text-purple-900 mb-3">Harga:</h4>
                                <div class="space-y-2">
                                    <div>
                                        <div class="!text-gray-700 text-sm">1 Hari</div>
                                        <div class="font-bold !text-purple-700 text-lg">Rp 200.000</div>
                                    </div>
                                    <div>
                                        <div class="!text-gray-700 text-sm">2 Hari 1 Malam</div>
                                        <div class="font-bold !text-purple-700 text-lg">Rp 350.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Outbound -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6">Paket Outbound & Team Building</h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <p class="!text-gray-700 mb-4">
                                    Area lapang dan trek alam untuk kegiatan outbound, gathering, dan team building 
                                    dengan fasilitator berpengalaman. Cocok untuk perusahaan, sekolah, dan organisasi.
                                </p>
                                <div class="bg-gray-50 rounded-xl p-4">
                                    <h4 class="font-bold !text-gray-900 mb-3">Games & Aktivitas:</h4>
                                    <div class="grid grid-cols-2 gap-2">
                                        <div class="flex items-center !text-gray-700 text-sm"><span class="!text-blue-600 mr-2">•</span> Flying fox</div>
                                        <div class="flex items-center !text-gray-700 text-sm"><span class="!text-blue-600 mr-2">•</span> Paintball</div>
                                        <div class="flex items-center !text-gray-700 text-sm"><span class="!text-blue-600 mr-2">•</span> Challenge rope</div>
                                        <div class="flex items-center !text-gray-700 text-sm"><span class="!text-blue-600 mr-2">•</span> River tubing</div>
                                        <div class="flex items-center !text-gray-700 text-sm"><span class="!text-blue-600 mr-2">•</span> Team games</div>
                                        <div class="flex items-center !text-gray-700 text-sm"><span class="!text-blue-600 mr-2">•</span> Motivasi</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-xl p-5 border border-orange-200">
                                <h4 class="font-bold !text-orange-900 mb-4">Paket Harga:</h4>
                                <div class="space-y-3">
                                    <div class="bg-white rounded-lg p-4">
                                        <div class="flex justify-between items-center mb-2">
                                            <span class="font-semibold !text-gray-900">Paket Half Day</span>
                                            <span class="font-bold !text-orange-700">Rp 150.000</span>
                                        </div>
                                        <div class="!text-gray-600 text-xs">5 games + snack + sertifikat</div>
                                    </div>
                                    <div class="bg-white rounded-lg p-4">
                                        <div class="flex justify-between items-center mb-2">
                                            <span class="font-semibold !text-gray-900">Paket Full Day</span>
                                            <span class="font-bold !text-orange-700">Rp 250.000</span>
                                        </div>
                                        <div class="!text-gray-600 text-xs">8 games + makan siang + sertifikat</div>
                                    </div>
                                    <div class="bg-white rounded-lg p-4">
                                        <div class="flex justify-between items-center mb-2">
                                            <span class="font-semibold !text-gray-900">Paket 2D1N</span>
                                            <span class="font-bold !text-orange-700">Rp 450.000</span>
                                        </div>
                                        <div class="!text-gray-600 text-xs">All games + penginapan + 3x makan</div>
                                    </div>
                                </div>
                                <div class="mt-4 pt-4 border-t border-orange-200">
                                    <div class="!text-gray-700 text-sm"><span class="font-semibold">Min. peserta:</span> 20 orang</div>
                                    <div class="!text-gray-700 text-sm"><span class="font-semibold">Diskon grup:</span> 50+ orang (10%)</div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Kontak Reservasi -->
                    <section class="bg-gradient-to-r from-teal-600 to-cyan-600 !text-white p-8 rounded-2xl shadow-xl not-prose">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold !text-white mb-3">Reservasi & Informasi Wisata</h3>
                            <p class="!text-white opacity-90 mb-6">Hubungi Pokdarwis (Kelompok Sadar Wisata) Desa Gunungjaya</p>
                            <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
                                <a href="https://wa.me/6281234567890" class="px-6 py-3 bg-green-500 hover:bg-green-600 !text-white font-semibold rounded-lg shadow-lg transition-all flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                    </svg>
                                    WhatsApp: +62 812-3456-7890
                                </a>
                                <a href="mailto:wisata@gunungjaya-belik.desa.id" class="px-6 py-3 bg-blue-500 hover:bg-blue-600 !text-white font-semibold rounded-lg shadow-lg transition-all">Email: wisata@gunungjaya-belik.desa.id</a>
                            </div>
                        </div>
                    </section>
                </div>
                ',
            ],
            [
                'title' => 'Transparansi Anggaran (APBDes)',
                'slug' => 'apbdes',
                'content' => '
                <div class="space-y-8">
                    <section>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Transparansi Anggaran Desa (APBDes)</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Pemerintah Desa Gunungjaya berkomitmen untuk menjalankan tata kelola pemerintahan yang transparan dan akuntabel. 
                            Berikut adalah informasi anggaran pendapatan dan belanja desa untuk tahun anggaran 2026.
                        </p>
                    </section>

                    <!-- Ringkasan APBDes -->
                    <section class="bg-gradient-to-r from-blue-600 to-indigo-600 !text-white p-8 rounded-2xl shadow-xl not-prose">
                        <h3 class="text-2xl font-bold !text-white mb-6 text-center">APBDes Tahun 2026</h3>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                                <div class="!text-white opacity-90 text-sm mb-2">Total Pendapatan</div>
                                <div class="text-3xl font-bold !text-white mb-1">Rp 2,4 M</div>
                                <div class="!text-white opacity-75 text-xs">Miliar Rupiah</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                                <div class="!text-white opacity-90 text-sm mb-2">Total Belanja</div>
                                <div class="text-3xl font-bold !text-white mb-1">Rp 2,35 M</div>
                                <div class="!text-white opacity-75 text-xs">Miliar Rupiah</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20">
                                <div class="!text-white opacity-90 text-sm mb-2">Surplus</div>
                                <div class="text-3xl font-bold !text-white mb-1">Rp 50 Jt</div>
                                <div class="!text-white opacity-75 text-xs">Juta Rupiah</div>
                            </div>
                        </div>
                    </section>

                    <!-- Pendapatan Desa -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Pendapatan Desa
                        </h3>
                        <div class="space-y-4">
                            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-5 border border-green-200">
                                <div class="flex justify-between items-center mb-2">
                                    <h4 class="font-bold !text-gray-900">Dana Desa (DD)</h4>
                                    <span class="font-bold !text-green-700 text-xl">Rp 1.200.000.000</span>
                                </div>
                                <div class="!text-gray-600 text-sm">Dana transfer dari Pemerintah Pusat melalui APBN</div>
                            </div>
                            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl p-5 border border-blue-200">
                                <div class="flex justify-between items-center mb-2">
                                    <h4 class="font-bold !text-gray-900">Alokasi Dana Desa (ADD)</h4>
                                    <span class="font-bold !text-blue-700 text-xl">Rp 650.000.000</span>
                                </div>
                                <div class="!text-gray-600 text-sm">Dana perimbangan dari APBD Kabupaten Pemalang</div>
                            </div>
                            <div class="bg-gradient-to-r from-purple-50 to-indigo-50 rounded-xl p-5 border border-purple-200">
                                <div class="flex justify-between items-center mb-2">
                                    <h4 class="font-bold !text-gray-900">Bagi Hasil Pajak & Retribusi</h4>
                                    <span class="font-bold !text-purple-700 text-xl">Rp 285.000.000</span>
                                </div>
                                <div class="!text-gray-600 text-sm">Bagian desa dari pajak dan retribusi daerah</div>
                            </div>
                            <div class="bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl p-5 border border-orange-200">
                                <div class="flex justify-between items-center mb-2">
                                    <h4 class="font-bold !text-gray-900">Pendapatan Asli Desa (PADes)</h4>
                                    <span class="font-bold !text-orange-700 text-xl">Rp 165.000.000</span>
                                </div>
                                <div class="!text-gray-600 text-sm">BUMDes, sewa tanah kas desa, dan pendapatan lainnya</div>
                            </div>
                            <div class="bg-gradient-to-r from-pink-50 to-rose-50 rounded-xl p-5 border border-pink-200">
                                <div class="flex justify-between items-center mb-2">
                                    <h4 class="font-bold !text-gray-900">Lain-lain Pendapatan</h4>
                                    <span class="font-bold !text-pink-700 text-xl">Rp 100.000.000</span>
                                </div>
                                <div class="!text-gray-600 text-sm">Hibah, bantuan, dan dana darurat</div>
                            </div>
                        </div>
                    </section>

                    <!-- Belanja Desa -->
                    <section class="bg-gradient-to-br from-slate-50 to-gray-50 p-6 rounded-2xl border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Belanja Desa
                        </h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-bold !text-gray-900 mb-4">Bidang Penyelenggaraan Pemerintahan Desa</h4>
                                <div class="space-y-3">
                                    <div class="bg-white rounded-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <span class="!text-gray-700">Penghasilan Tetap & Tunjangan</span>
                                            <span class="font-semibold !text-gray-900">Rp 480 Jt</span>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <span class="!text-gray-700">Operasional Perkantoran</span>
                                            <span class="font-semibold !text-gray-900">Rp 120 Jt</span>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <span class="!text-gray-700">Operasional BPD</span>
                                            <span class="font-semibold !text-gray-900">Rp 50 Jt</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold !text-gray-900 mb-4">Bidang Pembangunan Desa</h4>
                                <div class="space-y-3">
                                    <div class="bg-white rounded-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <span class="!text-gray-700">Pembangunan Infrastruktur</span>
                                            <span class="font-semibold !text-gray-900">Rp 650 Jt</span>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <span class="!text-gray-700">Sarana Prasarana Umum</span>
                                            <span class="font-semibold !text-gray-900">Rp 200 Jt</span>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <span class="!text-gray-700">Lingkungan Pemukiman</span>
                                            <span class="font-semibold !text-gray-900">Rp 100 Jt</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold !text-gray-900 mb-4">Bidang Pembinaan Kemasyarakatan</h4>
                                <div class="space-y-3">
                                    <div class="bg-white rounded-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <span class="!text-gray-700">Keamanan & Ketertiban</span>
                                            <span class="font-semibold !text-gray-900">Rp 85 Jt</span>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <span class="!text-gray-700">Kebudayaan & Keagamaan</span>
                                            <span class="font-semibold !text-gray-900">Rp 65 Jt</span>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <span class="!text-gray-700">Pemuda & Olahraga</span>
                                            <span class="font-semibold !text-gray-900">Rp 50 Jt</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold !text-gray-900 mb-4">Bidang Pemberdayaan Masyarakat</h4>
                                <div class="space-y-3">
                                    <div class="bg-white rounded-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <span class="!text-gray-700">UMKM & Ekonomi Kreatif</span>
                                            <span class="font-semibold !text-gray-900">Rp 150 Jt</span>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <span class="!text-gray-700">Pertanian & Perkebunan</span>
                                            <span class="font-semibold !text-gray-900">Rp 120 Jt</span>
                                        </div>
                                    </div>
                                    <div class="bg-white rounded-lg p-4">
                                        <div class="flex justify-between items-center">
                                            <span class="!text-gray-700">Pendidikan & Kesehatan</span>
                                            <span class="font-semibold !text-gray-900">Rp 180 Jt</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Prinsip Pengelolaan -->
                    <section class="bg-gradient-to-r from-green-600 to-emerald-600 !text-white p-8 rounded-2xl shadow-xl not-prose">
                        <h3 class="text-2xl font-bold !text-white mb-6 text-center">Prinsip Pengelolaan Keuangan Desa</h3>
                        <div class="grid md:grid-cols-4 gap-4">
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20 text-center">
                                <svg class="w-12 h-12 !text-white mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                                <h4 class="font-bold !text-white mb-2">Transparan</h4>
                                <p class="!text-white opacity-90 text-sm">Terbuka untuk publik</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20 text-center">
                                <svg class="w-12 h-12 !text-white mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <h4 class="font-bold !text-white mb-2">Akuntabel</h4>
                                <p class="!text-white opacity-90 text-sm">Dapat dipertanggungjawabkan</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20 text-center">
                                <svg class="w-12 h-12 !text-white mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <h4 class="font-bold !text-white mb-2">Partisipatif</h4>
                                <p class="!text-white opacity-90 text-sm">Melibatkan masyarakat</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/20 text-center">
                                <svg class="w-12 h-12 !text-white mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <h4 class="font-bold !text-white mb-2">Tertib & Disiplin</h4>
                                <p class="!text-white opacity-90 text-sm">Sesuai aturan & waktu</p>
                            </div>
                        </div>
                    </section>

                    <!-- Unduh Dokumen -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-4">Unduh Dokumen APBDes</h3>
                        <p class="!text-gray-700 mb-6">Dokumen lengkap APBDes dapat diunduh untuk dipelajari lebih lanjut</p>
                        <div class="grid md:grid-cols-2 gap-4">
                            <a href="#" class="flex items-center p-4 bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-xl hover:shadow-md transition-all group">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="font-bold !text-gray-900 group-hover:!text-blue-700 transition-colors">APBDes 2026 (PDF)</div>
                                    <div class="!text-gray-600 text-sm">2.4 MB • Diperbarui 15 Jan 2026</div>
                                </div>
                            </a>
                            <a href="#" class="flex items-center p-4 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl hover:shadow-md transition-all group">
                                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="font-bold !text-gray-900 group-hover:!text-green-700 transition-colors">Laporan Realisasi Semester I</div>
                                    <div class="!text-gray-600 text-sm">1.8 MB • Diperbarui 10 Jul 2026</div>
                                </div>
                            </a>
                        </div>
                    </section>
                </div>
                ',
            ],
            [
                'title' => 'Pengumuman Desa',
                'slug' => 'pengumuman',
                'content' => '<h2>Pengumuman Resmi Desa Gunungjaya</h2><p>Halaman ini berisi informasi pengumuman resmi...</p>',
            ],
            [
                'title' => 'Pusat Unduhan',
                'slug' => 'download',
                'content' => '
                <div class="space-y-8">
                    <section>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Pusat Unduhan Dokumen Desa</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Halaman ini menyediakan berbagai dokumen resmi yang dapat diunduh oleh masyarakat untuk keperluan administrasi, 
                            informasi, dan transparansi pemerintahan desa.
                        </p>
                    </section>

                    <!-- Dokumen Perencanaan -->
                    <section class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-2xl border border-blue-200 not-prose">
                        <h3 class="text-2xl font-bold !text-blue-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Dokumen Perencanaan Pembangunan
                        </h3>
                        <div class="space-y-3">
                            <a href="#" class="flex items-center p-4 bg-white rounded-xl hover:shadow-md transition-all group">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="font-bold !text-gray-900 group-hover:!text-blue-700 transition-colors">RPJMDes 2024-2030</div>
                                    <div class="!text-gray-600 text-sm">Rencana Pembangunan Jangka Menengah Desa • 4.2 MB • PDF</div>
                                </div>
                                <svg class="w-5 h-5 !text-gray-400 group-hover:!text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="#" class="flex items-center p-4 bg-white rounded-xl hover:shadow-md transition-all group">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="font-bold !text-gray-900 group-hover:!text-blue-700 transition-colors">RKPDes 2026</div>
                                    <div class="!text-gray-600 text-sm">Rencana Kerja Pemerintah Desa Tahun 2026 • 2.8 MB • PDF</div>
                                </div>
                                <svg class="w-5 h-5 !text-gray-400 group-hover:!text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </section>

                    <!-- Dokumen Keuangan -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Dokumen Keuangan Desa
                        </h3>
                        <div class="grid md:grid-cols-2 gap-3">
                            <a href="#" class="flex items-center p-4 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl hover:shadow-md transition-all group">
                                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="font-bold !text-gray-900 group-hover:!text-green-700">APBDes 2026</div>
                                    <div class="!text-gray-600 text-sm">2.4 MB • PDF</div>
                                </div>
                            </a>
                            <a href="#" class="flex items-center p-4 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl hover:shadow-md transition-all group">
                                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="font-bold !text-gray-900 group-hover:!text-green-700">Laporan Realisasi Sem. I</div>
                                    <div class="!text-gray-600 text-sm">1.8 MB • PDF</div>
                                </div>
                            </a>
                            <a href="#" class="flex items-center p-4 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl hover:shadow-md transition-all group">
                                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="font-bold !text-gray-900 group-hover:!text-green-700">Laporan Keuangan 2025</div>
                                    <div class="!text-gray-600 text-sm">3.2 MB • PDF</div>
                                </div>
                            </a>
                            <a href="#" class="flex items-center p-4 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl hover:shadow-md transition-all group">
                                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="font-bold !text-gray-900 group-hover:!text-green-700">RAB Kegiatan 2026</div>
                                    <div class="!text-gray-600 text-sm">1.5 MB • Excel</div>
                                </div>
                            </a>
                        </div>
                    </section>

                    <!-- Peraturan Desa -->
                    <section class="bg-gradient-to-br from-purple-50 to-indigo-50 p-6 rounded-2xl border border-purple-200 not-prose">
                        <h3 class="text-2xl font-bold !text-purple-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Peraturan Desa
                        </h3>
                        <div class="space-y-3">
                            <a href="#" class="flex items-center p-4 bg-white rounded-xl hover:shadow-md transition-all group">
                                <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="font-bold !text-gray-900 group-hover:!text-purple-700">Perdes No. 1/2024 - APBDes 2024</div>
                                    <div class="!text-gray-600 text-sm">Peraturan Desa tentang APBDes • 856 KB • PDF</div>
                                </div>
                            </a>
                            <a href="#" class="flex items-center p-4 bg-white rounded-xl hover:shadow-md transition-all group">
                                <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="font-bold !text-gray-900 group-hover:!text-purple-700">Perdes No. 2/2024 - BUMDes</div>
                                    <div class="!text-gray-600 text-sm">Pembentukan dan Pengelolaan BUMDes • 642 KB • PDF</div>
                                </div>
                            </a>
                            <a href="#" class="flex items-center p-4 bg-white rounded-xl hover:shadow-md transition-all group">
                                <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="font-bold !text-gray-900 group-hover:!text-purple-700">Perdes No. 3/2023 - Tata Tertib BPD</div>
                                    <div class="!text-gray-600 text-sm">Susunan dan Tata Kerja BPD • 428 KB • PDF</div>
                                </div>
                            </a>
                        </div>
                    </section>

                    <!-- Formulir & Template -->
                    <section class="bg-white rounded-2xl shadow-lg p-6 border border-gray-200 not-prose">
                        <h3 class="text-2xl font-bold !text-gray-900 mb-6 flex items-center">
                            <svg class="w-7 h-7 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Formulir & Template Surat
                        </h3>
                        <div class="grid md:grid-cols-3 gap-4">
                            <a href="#" class="flex flex-col items-center p-5 bg-gradient-to-br from-orange-50 to-amber-50 border border-orange-200 rounded-xl hover:shadow-md transition-all group">
                                <div class="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mb-3">
                                    <svg class="w-8 h-8 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="font-bold !text-gray-900 group-hover:!text-orange-700 text-center mb-2">Form Surat Keterangan</div>
                                <div class="!text-gray-600 text-sm text-center">Template Word</div>
                            </a>
                            <a href="#" class="flex flex-col items-center p-5 bg-gradient-to-br from-orange-50 to-amber-50 border border-orange-200 rounded-xl hover:shadow-md transition-all group">
                                <div class="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mb-3">
                                    <svg class="w-8 h-8 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="font-bold !text-gray-900 group-hover:!text-orange-700 text-center mb-2">Form SKCK</div>
                                <div class="!text-gray-600 text-sm text-center">Template Word</div>
                            </a>
                            <a href="#" class="flex flex-col items-center p-5 bg-gradient-to-br from-orange-50 to-amber-50 border border-orange-200 rounded-xl hover:shadow-md transition-all group">
                                <div class="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mb-3">
                                    <svg class="w-8 h-8 !text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="font-bold !text-gray-900 group-hover:!text-orange-700 text-center mb-2">Form Pengajuan Bantuan</div>
                                <div class="!text-gray-600 text-sm text-center">Template PDF</div>
                            </a>
                        </div>
                    </section>

                    <!-- Info -->
                    <section class="bg-gradient-to-r from-blue-50 to-cyan-50 p-6 rounded-xl border border-blue-200 not-prose">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <h4 class="font-bold !text-blue-900 mb-2">Informasi Penting</h4>
                                <p class="!text-gray-700 text-sm leading-relaxed">
                                    Seluruh dokumen yang tersedia di halaman ini bersifat terbuka untuk publik sesuai prinsip transparansi. 
                                    Untuk dokumen yang memerlukan otorisasi khusus, silakan hubungi kantor desa. 
                                    Dokumen diperbarui secara berkala sesuai jadwal yang ditentukan.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
                ',
            ],
            [
                'title' => 'Pengaduan Masyarakat',
                'slug' => 'pengaduan',
                'content' => '<h2>Layanan Pengaduan Masyarakat</h2><p>Pemerintah Desa Gunungjaya menyediakan layanan pengaduan...</p>',
            ],
        ];

        foreach ($pages as $page) {
            Page::updateOrCreate(
                ['slug' => $page['slug']],
                [
                    'title'   => $page['title'],
                    'content' => $page['content']
                ]
            );
        }
    }
}