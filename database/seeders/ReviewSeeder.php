<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = new Review;
        $data->review = "The best pokoknya, Klinik Bahar Medika Grup Depok sangat puas. Tambah sukses ya.";
        $data->save();

        $data = new Review;
        $data->review = "pelayanan nya OK bgd. Nagihhhh,  bakal balik lagiii sihh. Sering² adain promo ya min";
        $data->save();

        $data = new Review;
        $data->review = "worth it bgt, pelayanannya baik ramah bintang 5, ga nyesel rafting disini, bakal balik lgi deh pokonya!!!";
        $data->save();

        $data = new Review;
        $data->review = "Seruuu bangett! tapii raftingnya kurang lama karnaa nagih hahaha
        Makanannya jugaa enak, dapet air kelapa jugaa, Tour guidenyaa ramah dan kocak. Besttt";
        $data->save();

        $data = new Review;
        $data->review = "nah yang gini nih , gua suka nih terimaksih mang fahmi atas service nya muantep pollll";
        $data->save();

        $data = new Review;
        $data->review = "Seru banget raftingnya, dokumentasinya bagus bagus dan guidenya ramah ramah juga. Gak perlu nunggu lama udah bisa langsung nikmatin rafting di cisadane. Alat alatnya juga safety jadinya aman banget. Keren pokoknya";
        $data->save();

        $data = new Review;
        $data->review = "Gak nyangka rafting seseru itu, dan udah ga khawatir sama keamanannya karena didampingin rescue sama guide yang seru. Gokil pokoknya";
        $data->save();
    }
}
