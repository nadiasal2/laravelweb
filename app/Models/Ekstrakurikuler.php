<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler
{
    private static $ekstrakurikuler = [
        ["id" => 1, "Nama ekstra" => "PMR", "Nama pembina" => "Bu Tatik", "Deskripsi" => "Di mana kegiatan ekstra ini memfokuskan pada materi-materi Kesehatan, Pertolongan Pertama (PP), Penanggulangan Pada Gawat Darurat (PPGD) dan bidang sosial."],
        ["id" => 2, "Nama ekstra" => "Teater", "Nama pembina" => "Bu Fara", "Deskripsi" => "Teater merupakan salah satu salah satu seni bermain peran (drama) yang menyajikan cerita kehidupan nyata di atas pentas"],
        ["id" => 3, "Nama ekstra" => "Rohis", "Nama pembina" => "Pak Sarwo Edi", "Deskripsi" => "Menjalankan aktivitas dakwah di sekolah yang merupakan kegiatan ekstrakurikuler di luar jam pelajaran dengan tujuan untuk menunjang dan membantu memenuhi keberhasilan pembinaan intrakurikuler."],
        ["id" => 4, "Nama ekstra" => "Osis", "Nama pembina" => "Bu Widi", "Deskripsi" => "Organisasi yang menaungi organisasi ekstra lainya di dalam tingkat satua."],
        ["id" => 5, "Nama ekstra" => "Rebana", "Nama pembina" => "Pak Ikhsan", "Deskripsi" => "Menanamkan kecintaan terhadap Rosulullah SAW dan berkreasi dalam seni memainkan alat musik rebana dan menyanyikan lagu-lagu islami, selain itu juga untuk mengembangkan bakat para siswa dalam seni hadroh."],
    ];
    
    //Mendeklarasikan metode all() yang mengembalikan nilai dari properti statis ekstrakurikuler
    public static function all()
    {
        return self::$ekstrakurikuler; //mengembalikan nilai dari properti statis $ekstrakurikuler
    }
}
