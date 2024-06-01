<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});
Route::get('/posts', function () {
    return view('posts/posts_view', [
        "title" => "Blog",
        'posts' =>
        [
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
        ]
    ]);
});


Route::get('/post/{id}', function ($slug) {
    $posts = [
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

    $post =
        Arr::first($posts, function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });
    return view(
        'posts/post_view',
        [
            'title' => 'Single Post',
            'post' => $post,
        ]
    );
});

Route::get('/contact', function () {
    return view('contact/contact_view', ["title" => "Contact"]);
});
