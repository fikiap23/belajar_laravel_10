### Cara mudah insert ke database (tabel posts) menggunan artisan tinker

-   Category::create([
    'name' => 'Personal',
    'slug' => 'personal',
    ])

-   Post::create([
    'title' => 'Post kedua',
    'category_id' => 3,
    'slug' => 'post-kedua',
    'excerpt' => 'Tentang kamu',
    'body' => 'Barangkali selama ini aku terlalu percaya diri. Meyakini bahwa kau juga punyai rasa yang sama denganku. Padahal bisa saja balasan pesanmu itu hanya sebagai bentuk caramu untuk menghargaiku. Atau bisa juga saat itu kau memang sedang luang untuk aku yang tiba-tiba datang di teras penantianmu; menanti seseorang yang jelas itu bukan aku. Kupikir aku benar-benar bisa untuk tidak berharap kepadamu. Namun ternyata aku masih belum bisa sampai pada tahap itu. Imajinasiku terlalu liar tentang hubungan yang nantinya dapat kita cipta bersama. Aku terlalu perasa, namun untuk kali ini saja. Sial! Saat ini aku benar-benar sedang jatuh hati pada seorang gadis baik hati. Tak biasanya seperti ini; menyukai seseorang untuk waktu yang begitu panjang. Oh, Tuhan, aku pasrah akan segala yang kau tentukan. Memang seharusnya hanya kepadamu aku gantungkan.'
    ])
