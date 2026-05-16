<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Email as a Written Communication Tool',
                'slug' => 'email-communication',
                'description' => 'Etika, struktur, dan penggunaan email sebagai alat komunikasi bisnis profesional.',
                'content' => '<p class="mb-4">Email adalah salah satu alat komunikasi bisnis tertulis yang paling sering digunakan. Email memungkinkan pertukaran informasi secara cepat, lintas lokasi, dan terdokumentasi secara otomatis.</p><h3 class="text-xl font-bold mt-6 mb-2">Fungsi dan Etika</h3><p class="mb-4">Fungsi utamanya meliputi menyampaikan informasi atau instruksi, mengirim lampiran dokumen, hingga membangun komunikasi lintas divisi. Saat menulis, pastikan untuk selalu menggunakan alamat email profesional, tulis subjek yang spesifik dan informatif, serta gunakan bahasa formal tapi tidak kaku.</p>',
                'image_url' => '/images/email.png',
            ],
            [
                'title' => 'Making Bussiness Writing Effective',
                'slug' => 'effective-business-writing',
                'description' => 'Prinsip dasar tulisan bisnis: ringkas, jelas, tepat, dan sopan.',
                'content' => '<p class="mb-4">Tulisan bisnis yang efektif bukan berarti tulisan yang panjang atau penuh jargon. Justru sebaliknya. Semakin singkat dan jelas, semakin mudah dipahami.</p><h3 class="text-xl font-bold mt-6 mb-2">Prinsip Dasar</h3><ul class="list-disc pl-6 mb-4 space-y-2"><li><strong>Clarity (Kejelasan):</strong> Hindari kata-kata ambigu. Sampaikan satu ide dalam satu kalimat.</li><li><strong>Correctness (Ketepatan):</strong> Pastikan fakta, data, dan tata bahasa sudah benar sebelum dikirim.</li><li><strong>Courtesy & Completeness:</strong> Pertahankan nada yang sopan dan menghargai pembaca, serta pastikan semua informasi yang dibutuhkan sudah tercantum.</li></ul>',
                'image_url' => '/images/writing.png',
            ],
            [
                'title' => 'Memo',
                'slug' => 'memo',
                'description' => 'Pahami karakteristik dan penulisan pesan internal langsung ke tujuan.',
                'content' => '<p class="mb-4">Memo adalah pesan tertulis singkat yang digunakan untuk komunikasi internal di dalam organisasi. Memo biasanya dikirim dari satu bagian ke bagian lain, atau dari atasan ke bawahan.</p><p class="mb-4">Karakteristik utamanya adalah singkat dan langsung ke pokok masalah, serta tidak menggunakan salam formal seperti surat. Memo umumnya digunakan untuk mengumumkan perubahan kebijakan atau memberi instruksi.</p>',
                'image_url' => '/images/memo.png',
            ],
            [
                'title' => 'Letter',
                'slug' => 'business-letter',
                'description' => 'Panduan menyusun dokumen formal untuk komunikasi pihak eksternal.',
                'content' => '<p class="mb-4">Surat bisnis adalah dokumen formal yang digunakan untuk komunikasi dengan pihak di luar organisasi, seperti mitra, klien, instansi pemerintah, atau pemasok.</p><p class="mb-4">Perbedaan surat bisnis dengan email dan memo sangat jelas: Surat bisnis lebih formal dan biasanya dicetak di atas kop surat resmi, sementara email lebih cepat dan fleksibel, dan memo hanya untuk internal organisasi.</p>',
                'image_url' => '/images/letter.png',
            ],
            [
                'title' => 'Minutes of a Meeting',
                'slug' => 'minutes-of-meeting',
                'description' => 'Cara mencatat hasil diskusi dan keputusan rapat secara terstruktur.',
                'content' => '<p class="mb-4">Notulen rapat yang baik harus mencakup poin-poin krusial seperti keputusan yang diambil, pembagian tugas dan tenggat waktu, serta waktu penutupan rapat.</p><p class="mb-4">Kesalahan umum dalam membuat notulen yang harus dihindari meliputi: mencatat setiap kata tanpa menyaring inti diskusi, tidak mencantumkan siapa yang bertanggung jawab atas setiap tugas, serta terlambat mendistribusikan notulen setelah rapat.</p>',
                'image_url' => '/images/meeting.png',
            ],
            [
                'title' => 'Importance of Data in Bussiness Communication',
                'slug' => 'importance-of-data',
                'description' => 'Mengapa data krusial dalam mendukung argumen dan keputusan bisnis.',
                'content' => '<p class="mb-4">Data adalah alat komunikasi yang kuat di semua level organisasi. Pesan bisnis yang didukung data lebih mudah dipercaya.</p><p class="mb-4">Data menggantikan opini dengan fakta, dan fakta mengurangi potensi kesalahpahaman atau perdebatan yang tidak perlu. Sebagai contoh, mendukung laporan penjualan dengan menyebutkan angka spesifik akan lebih meyakinkan.</p>',
                'image_url' => '/images/data.png',
            ]
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
