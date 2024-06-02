<?php

namespace App\Models\Posts;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'article-1',
                'title' => 'Article 1',
                'author' => 'Muhammad Mirza Maulana',
                'body' => 'Matahari terbenam di balik pegunungan, mewarnai langit dengan gradasi oranye dan merah yang memukau. Suara burung-burung yang kembali ke sarang menciptakan harmoni alami yang menenangkan. Di kejauhan, siluet pepohonan terlihat seperti lukisan di atas kanvas alam. Hembusan angin sore yang sejuk membawa aroma tanah basah, hasil dari hujan ringan yang baru saja reda. Momen seperti ini mengingatkan kita akan keindahan dan ketenangan yang bisa ditemukan dalam alam, jauh dari hiruk-pikuk kehidupan kota.',
            ],
            [
                'id' => 2,
                'slug' => 'article-2',
                'title' => 'Article 2',
                'author' => 'Muhammad Mirza Maulana',
                'body' => 'Di sebuah desa kecil di tepi sungai, kehidupan bergerak dengan ritme yang berbeda. Anak-anak bermain di lapangan dengan tawa riang, sementara para petani kembali dari sawah dengan wajah penuh kepuasan setelah hari kerja yang panjang. Nenek-nenek duduk di beranda rumah, bercerita tentang masa lalu yang penuh kenangan. Sungai yang mengalir tenang menjadi saksi bisu dari kisah-kisah sederhana namun sarat makna yang terjadi di desa itu. Kehidupan di sana, meski tampak sederhana, menyimpan kedamaian yang sering kali sulit ditemukan di tempat lain.',
            ]
        ];
    }
    public static function find($slug): array
    {
        $post =  Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        } else {
            return $post;
        }
        //return  Arr::first(Post::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
    }
}
