<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Fiki Aprian',
            'email' => 'fikiaprian23@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('12345'),
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'Post kedua',
            'user_id' => 1,
            'category_id' => 2,
            'slug' => 'post-kedua',
            'excerpt' => 'Tentang kamu',
            'body' => 'Barangkali selama ini aku terlalu percaya diri. Meyakini bahwa kau juga punyai rasa yang sama denganku. Padahal bisa saja balasan pesanmu itu hanya sebagai bentuk caramu untuk menghargaiku. Atau bisa juga saat itu kau memang sedang luang untuk aku yang tiba-tiba datang di teras penantianmu; menanti seseorang yang jelas itu bukan aku. Kupikir aku benar-benar bisa untuk tidak berharap kepadamu. Namun ternyata aku masih belum bisa sampai pada tahap itu. Imajinasiku terlalu liar tentang hubungan yang nantinya dapat kita cipta bersama. Aku terlalu perasa, namun untuk kali ini saja. Sial! Saat ini aku benar-benar sedang jatuh hati pada seorang gadis baik hati. Tak biasanya seperti ini; menyukai seseorang untuk waktu yang begitu panjang. Oh, Tuhan, aku pasrah akan segala yang kau tentukan. Memang seharusnya hanya kepadamu aku gantungkan.',
        ]);

        Post::create([
            'title' => 'Post ketiga',
            'category_id' => 1,
            'user_id' => 2,
            'slug' => 'post-ketiga',
            'excerpt' => 'Membuat website',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, temporibus animi, soluta distinctio, ut dignissimos aliquam fugiat eligendi nemo asperiores in laboriosam repudiandae libero minima odit aliquid corporis consequuntur nihil.',
        ]);
    }
}
