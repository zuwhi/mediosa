<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataPenyakit;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
    DataPenyakit::create([
        'nama' => 'Parkinson',
        'solusi' => 'Konsultasikan dengan dokter untuk penanganan dan manajemen yang tepat.',
        'lokasi_tubuh' => 'tubuh'
    ]);
    DataPenyakit::create([
        'nama' => 'Epilepsi',
        'solusi' => 'Gunakan obat antiepilepsi sesuai anjuran dokter, hindari pemicu epilepsi.',
        'lokasi_tubuh' => 'tubuh'
    ]);
    DataPenyakit::create([
        'nama' => 'Fibromyalgia',
        'solusi' => 'Kombinasi terapi fisik, obat pereda nyeri, dan manajemen stres.',
        'lokasi_tubuh' => 'sendi'
    ]);

    DataPenyakit::create([
        'nama' => 'Celiac Disease',
        'solusi' => 'Hindari makanan yang mengandung gluten, konsultasikan dengan ahli gizi.',
        'lokasi_tubuh' => 'perut'
    ]);
    DataPenyakit::create([
        'nama' => 'Radang Usus Buntu (Appendicitis)',
        'solusi' => 'Pembedahan untuk mengangkat usus buntu biasanya diperlukan.',
        'lokasi_tubuh' => 'perut'
    ]);
    DataPenyakit::create([
        'nama' => 'Hipotiroidisme',
        'solusi' => 'Terapi hormon tiroid, perubahan pola makan, dan olahraga teratur.',
        'lokasi_tubuh' => 'tenggorokan'
    ]);
    DataPenyakit::create([
        'nama' => 'Infeksi Saluran Pernapasan Atas (ISPA)',
        'solusi' => 'Istirahat, minum cairan yang banyak, dan hindari pemicu.',
        'lokasi_tubuh' => 'hidung'
    ]);
    DataPenyakit::create([
        'nama' => 'Flu Perut',
        'solusi' => 'Istirahat, konsumsi cairan, hindari makanan berat, dan konsultasikan dengan dokter.',
        'lokasi_tubuh' => 'perut'
    ]);

    DataPenyakit::create([
        'nama' => 'Disautonomia',
        'solusi' => 'Manajemen gejala, perubahan gaya hidup, dan konsultasikan dengan spesialis.',
        'lokasi_tubuh' => 'tubuh'
    ]);

    DataPenyakit::create([
        'nama' => 'Pneumonia Atipikal',
        'solusi' => 'Antibiotik, istirahat, dan cukup cairan.',
        'lokasi_tubuh' => 'Paru-paru'
    ]);

    DataPenyakit::create([
        'nama' => 'Hemokromatosis',
        'solusi' => 'Pengelolaan penyakit, pengurangan zat besi dalam tubuh.',
        'lokasi_tubuh' => 'tubuh'
    ]);

    DataPenyakit::create([
        'nama' => 'Pneumothorax',
        'solusi' => 'Pengelolaan penyakit, tindakan medis sesuai anjuran dokter.',
        'lokasi_tubuh' => 'Paru-paru'
    ]);


    DataPenyakit::create([
        'nama' => 'Keracunan Makanan',
        'solusi' => 'Minum cairan yang banyak, istirahat, dan konsultasikan dengan dokter jika diperlukan.',
        'lokasi_tubuh' => 'perut'
    ]);

    DataPenyakit::create([
        'nama' => 'Keratitis',
        'solusi' => 'Perawatan mata sesuai anjuran dokter, hindari kontak lensa saat peradangan.',
        'lokasi_tubuh' => 'Mata'
    ]);

    DataPenyakit::create([
        'nama' => 'Leukemia',
        'solusi' => 'Terapi kanker, kemoterapi, transplantasi sumsum tulang, dan manajemen gejala.',
        'lokasi_tubuh' => 'dada'
    ]);


    DataPenyakit::create([
        'nama' => 'Kolera',
        'solusi' => 'Rehidrasi oral, antibiotik, dan perawatan medis segera.',
        'lokasi_tubuh' => 'perut'
    ]);

    DataPenyakit::create([
        'nama' => 'Gangguan Pencernaan',
        'solusi' => 'Pengaturan pola makan, hindari makanan yang memicu gangguan.',
        'lokasi_tubuh' => 'perut'
    ]);

    DataPenyakit::create([
        'nama' => 'Radang Tenggorokan',
        'solusi' => 'Istirahat, minum cairan yang hangat, dan kumur dengan larutan garam.',
        'lokasi_tubuh' => 'tenggorokan'
    ]);

    DataPenyakit::create([
        'nama' => 'Tekanan Darah Rendah',
        'solusi' => 'Konsumsi cairan yang cukup, perubahan pola makan, hindari panas berlebihan.',
        'lokasi_tubuh' => 'jantung'
    ]);

    DataPenyakit::create([
        'nama' => 'Infeksi Saluran Pernapasan',
        'solusi' => 'Istirahat, minum cairan yang cukup, konsumsi obat sesuai anjuran dokter.',
        'lokasi_tubuh' => 'paru-paru'
    ]);


    DataPenyakit::create([
        'nama' => 'Batu Ginjal',
        'solusi' => 'Minum cairan yang banyak, pengobatan untuk menghancurkan atau mengeluarkan batu ginjal.',
        'lokasi_tubuh' => 'ginjal'
    ]);

    DataPenyakit::create([
        'nama' => 'Konjungtivitis',
        'solusi' => 'Hindari menggosok mata, gunakan obat tetes mata sesuai anjuran dokter.',
        'lokasi_tubuh' => 'Mata'
    ]);

    DataPenyakit::create([
        'nama' => 'Gastroenteritis',
        'solusi' => 'Istirahat, minum cairan yang banyak, hindari makanan yang memicu gejala.',
        'lokasi_tubuh' => 'perut'
    ]);

    DataPenyakit::create([
        'nama' => 'Sinusitis',
        'solusi' => 'Istirahat, minum cairan yang cukup, penggunaan dekongestan.',
        'lokasi_tubuh' => 'paru-paru'
    ]);

    DataPenyakit::create([
        'nama' => 'Faringitis',
        'solusi' => 'Istirahat vokal, minum cairan yang hangat, dan berkumur dengan larutan garam.',
        'lokasi_tubuh' => 'paru-paru'
    ]);

    DataPenyakit::create([
        'nama' => 'Dermatitis',
        'solusi' => 'Gunakan krim kortikosteroid, hindari pemicu alergi kulit.',
        'lokasi_tubuh' => 'tubuh'
    ]);

    DataPenyakit::create([
        'nama' => 'Infeksi Saluran Kemih',
        'solusi' => 'Minum cairan yang cukup, antibiotik sesuai anjuran dokter.',
        'lokasi_tubuh' => 'kelamin'
    ]);

    DataPenyakit::create([
        'nama' => 'Amandel',
        'solusi' => 'Pengobatan konservatif atau pembedahan tonsilektomi sesuai anjuran dokter.',
        'lokasi_tubuh' => 'Tenggorokan'
    ]);


    DataPenyakit::create([
        'nama' => 'Pneumonia',
        'solusi' => 'Antibiotik, istirahat, dan cukup cairan.',
        'lokasi_tubuh' => 'Paru-paru'
    ]);

    DataPenyakit::create([
        'nama' => 'Tuberkulosis',
        'solusi' => 'Pengobatan antituberkulosis sesuai protokol dokter, isolasi untuk mencegah penyebaran.',
        'lokasi_tubuh' => 'Paru-paru'
    ]);

    DataPenyakit::create([
        'nama' => 'Asma',
        'solusi' => 'Inhaler bronkodilator, penghindaran pemicu, manajemen gejala.',
        'lokasi_tubuh' => 'paru-paru'
    ]);

    DataPenyakit::create([
        'nama' => 'Infeksi Bakteri',
        'solusi' => 'Antibiotik sesuai jenis dan keparahan infeksi.',
        'lokasi_tubuh' => 'tubuh'
    ]);

    DataPenyakit::create([
        'nama' => 'Vertigo',
        'solusi' => 'Manuver Epley, obat-obatan, dan penanganan penyebabnya.',
        'lokasi_tubuh' => 'telinga'
    ]);


    DataPenyakit::create([
        'nama' => 'Migrain',
        'solusi' => 'Obat penghilang nyeri, hindari pemicu migrain, istirahat di tempat yang sepi dan gelap.',
        'lokasi_tubuh' => 'Kepala'
    ]);

    DataPenyakit::create([
        'nama' => 'Diabetes',
        'solusi' => 'Pengaturan pola makan, olahraga teratur, obat antidiabetes, insulin.',
        'lokasi_tubuh' => 'tenggorokan'
    ]);

    DataPenyakit::create([
        'nama' => 'Anemia',
        'solusi' => 'Suplemen zat besi, perubahan pola makan, pengobatan penyebab anemia.',
        'lokasi_tubuh' => 'dada'
    ]);

    DataPenyakit::create([
        'nama' => 'Asam Urat',
        'solusi' => 'Pengaturan pola makan rendah purin, obat pereda nyeri, hindari alkohol.',
        'lokasi_tubuh' => 'Sendi'
    ]);

    DataPenyakit::create([
        'nama' => 'Hipertensi',
        'solusi' => 'Pengaturan pola makan rendah garam, olahraga teratur, dan minum obat sesuai anjuran dokter.',
        'lokasi_tubuh' => 'jantung'
    ]);


    DataPenyakit::create([
        'nama' => 'Asam Lambung',
        'solusi' => 'Pola makan sehat, hindari makanan yang memicu asam lambung, obat antasida.',
        'lokasi_tubuh' => 'perut'
    ]);

    DataPenyakit::create([
        'nama' => 'Diare',
        'solusi' => 'Minum cairan yang cukup, hindari makanan yang menyebabkan diare, konsultasikan dengan dokter jika berkepanjangan.',
        'lokasi_tubuh' => 'perut'
    ]);

    DataPenyakit::create([
        'nama' => 'Influenza',
        'solusi' => 'Istirahat yang cukup, konsumsi cairan yang banyak, menggunakan obat pereda demam dan nyeri, pertimbangkan vaksinasi influenza.',
        'lokasi_tubuh' => 'hidung'
    ]);

    DataPenyakit::create([
        'nama' => 'Demam Berdarah',
        'solusi' => 'Istirahat, minum cairan yang banyak, rawat di rumah sakit jika kondisi parah.',
        'lokasi_tubuh' => 'tubuh'
    ]);

    DataPenyakit::create([
        'nama' => 'Stroke',
        'solusi' => 'Perawatan darurat segera, rehabilitasi fisik dan terapi.',
        'lokasi_tubuh' => 'tubuh'
    ]);


    DataPenyakit::create([
        'nama' => 'Demam',
        'solusi' => 'Istirahat, minum cairan yang cukup, gunakan obat penurun demam sesuai anjuran.',
        'lokasi_tubuh' => 'tubuh'
    ]);

    DataPenyakit::create([
        'nama' => 'Malaria',
        'solusi' => 'Pengobatan antimalaria sesuai jenis parasit, hindari gigitan nyamuk.',
        'lokasi_tubuh' => 'tubuh'
    ]);

    DataPenyakit::create([
        'nama' => 'Osteoporosis',
        'solusi' => 'Suplemen kalsium, vitamin D, olahraga berat, dan obat osteoporosis.',
        'lokasi_tubuh' => 'tulang'
    ]);

    DataPenyakit::create([
        'nama' => 'Anemia Defisiensi Besi',
        'solusi' => 'Suplemen zat besi, konsumsi makanan kaya zat besi, obat sesuai anjuran dokter.',
        'lokasi_tubuh' => 'dada'
    ]);

    DataPenyakit::create([
        'nama' => 'Gagal Jantung',
        'solusi' => 'Pengaturan pola makan, obat jantung, manajemen gejala sesuai anjuran dokter.',
        'lokasi_tubuh' => 'jantung'
    ]);

    DataPenyakit::create([
        'nama' => 'Tipes',
        'solusi' => 'Pengobatan antibiotik sesuai anjuran dokter, istirahat, dan minum cairan yang cukup.',
        'lokasi_tubuh' => 'perut'
    ]);

    DataPenyakit::create([
        'nama' => 'Rabies',
        'solusi' => 'Vaksinasi rabies segera setelah paparan, perawatan medis segera setelah gejala muncul.',
        'lokasi_tubuh' => 'tubuh'
    ]);

    DataPenyakit::create([
        'nama' => 'Demam Berdarah Dengue',
        'solusi' => 'Istirahat, minum cairan yang cukup, rawat di rumah sakit jika kondisi memburuk.',
        'lokasi_tubuh' => 'tubuh'
    ]);

    DataPenyakit::create([
        'nama' => 'Anemia Pernisiosa',
        'solusi' => 'Suplemen vitamin B12, pengobatan penyebab defisiensi B12, makan makanan kaya vitamin B12.',
        'lokasi_tubuh' => 'dada'
    ]);

    DataPenyakit::create([
        'nama' => 'Lupus',
        'solusi' => 'Pengobatan sesuai jenis gejala, manajemen gejala, hindari sinar matahari berlebihan.',
        'lokasi_tubuh' => 'tubuh'
    ]);


    DataPenyakit::create([
        'nama' => 'Chikungunya',
        'solusi' => 'Istirahat, minum cairan yang cukup, obat pereda nyeri, hindari gigitan nyamuk.',
        'lokasi_tubuh' => 'tubuh'
    ]);

    DataPenyakit::create([
        'nama' => 'Gondok',
        'solusi' => 'Pengobatan dengan obat atau operasi sesuai anjuran dokter.',
        'lokasi_tubuh' => 'tenggorokan'
    ]);
    
    DataPenyakit::create([
        'nama' => 'Cacar Air',
        'solusi' => 'Istirahat, gunakan salep anti-gatal, hindari menggaruk kulit.',
        'lokasi_tubuh' => 'tubuh'
    ]);

    DataPenyakit::create([
        'nama' => 'Otitis Media',
        'solusi' => 'Pengobatan antibiotik jika infeksi bakteri, istirahat, hindari pendedahan suara berlebihan.',
        'lokasi_tubuh' => 'telinga'
    ]);

    DataPenyakit::create([
        'nama' => 'Gagal Ginjal',
        'solusi' => 'Pengobatan penyebab, dialisis atau transplantasi ginjal dalam kasus parah.',
        'lokasi_tubuh' => 'ginjal'
    ]);

    DataPenyakit::create([
        'nama' => 'Pankreatitis',
        'solusi' => 'Puasa sementara, pengobatan penyebab, makan makanan rendah lemak.',
        'lokasi_tubuh' => 'perut'
    ]);

    // Lanjutkan dengan entri penyakit lainnya...
    // Total 100 entri

    DataPenyakit::create([
        'nama' => 'Batuk Darah',
        'solusi' => 'Pengobatan penyebab, istirahat, hindari merokok dan udara berpolusi.',
        'lokasi_tubuh' => 'hidung'
    ]);

    DataPenyakit::create([
        'nama' => 'Apendisitis',
        'solusi' => 'Operasi pengangkatan apendiks, pengobatan antibiotik sebelum operasi.',
        'lokasi_tubuh' => 'usus'
    ]);

    DataPenyakit::create([
        'nama' => 'Anemia Aplastik',
        'solusi' => 'Transfusi darah, transplantasi sumsum tulang, pengobatan imunosupresan.',
        'lokasi_tubuh' => 'dada'
    ]);

    DataPenyakit::create([
        'nama' => 'Bronkitis',
        'solusi' => 'Istirahat, minum cairan yang cukup, obat batuk dan pereda nyeri, inhalasi uap.',
        'lokasi_tubuh' => 'hidung'
    ]);

    DataPenyakit::create([
        'nama' => 'Kencing Batu',
        'solusi' => 'Minum cairan yang banyak, pengobatan untuk menghancurkan batu atau operasi.',
        'lokasi_tubuh' => 'kelamin'
    ]);

    // Lanjutkan dengan entri penyakit lainnya...
    // Total 100 entri

    }
}
