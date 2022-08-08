<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Shawshank Redemption',
                'slug' => 'the-shawshank-redemption',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=RDlIqSPWTKM',
                'thumbnail' => 'https://i.ytimg.com/vi/RDlIqSPWTKM/hq720.jpg?sqp=-%E2%80%A6AFwAcABBg==&rs=AOn4CLDPcx514IwAs_il2xptx8T5NKD_rA',
                'rating' => 9.3,
                'is_featured' => 1
            ],
            [
                'name' => 'The Godfather',
                'slug' => 'the-godfather',
                'category' => 'Comedy',
                'video_url' => 'https://www.youtube.com/watch?v=RDlIqSPWTKM',
                'thumbnail' => 'https://i.ytimg.com/vi/RDlIqSPWTKM/hq720.jpg?sqp=-%E2%80%A6AFwAcABBg==&rs=AOn4CLDPcx514IwAs_il2xptx8T5NKD_rA',
                'rating' => 7.2,
                'is_featured' => 0
            ],
            [
                'name' => 'The Godfather : Part II',
                'slug' => 'the-godfather-part-ii',
                'category' => 'Comedy',
                'video_url' => 'https://www.youtube.com/watch?v=RDlIqSPWTKM',
                'thumbnail' => 'https://i.ytimg.com/vi/RDlIqSPWTKM/hq720.jpg?sqp=-%E2%80%A6AFwAcABBg==&rs=AOn4CLDPcx514IwAs_il2xptx8T5NKD_rA',
                'rating' => 8.0,
                'is_featured' => 0
            ]
        ];

        Movie::insert($movies);
    }
}
