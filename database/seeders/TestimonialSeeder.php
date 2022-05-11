<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'nom' => 'David Martino Co',
            'date' => '30 November 2021',
            'categorie' => 'Financial Apps',
            'rating' => '4.8',
            'commentaire' => 'Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
            lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.',
            'taff'=> 'CEO of David Company',
            'image' => 'client-image.jpg',
        ]);
        DB::table('testimonials')->insert([
            'nom' => 'Jake Harris Nyo',
            'date' => '29 November 2021',
            'categorie' => 'Digital Business',
            'rating' => '4.5',
            'commentaire' => 'You are not allowed to redistribute this template ZIP file on any other website.',
            'taff'=> 'CTO of Digital Company',
            'image' => 'client-image.jpg',
        ]);
        DB::table('testimonials')->insert([
            'nom' => 'May Catherina',
            'date' => '27 November 2021',
            'categorie' => 'Business &amp; Economics',
            'rating' => '4.7',
            'commentaire' => 'You are not allowed to redistribute this template ZIP file on any other website.',
            'taff'=> 'Founder of Catherina Co.',
            'image' => 'client-image.jpg',
        ]);
        DB::table('testimonials')->insert([
            'nom' => 'Random User',
            'date' => '24 November 2021',
            'categorie' => 'New App Ecosystem',
            'rating' => '3.9',
            'commentaire' => 'You are not allowed to redistribute this template ZIP file on any other website.',
            'taff'=> 'Random Staff',
            'image' => 'client-image.jpg',
        ]);
        DB::table('testimonials')->insert([
            'nom' => 'Mark Amber Do',
            'date' => '21 November 2021',
            'categorie' => 'Web Development',
            'rating' => '4.3',
            'commentaire' => 'You are not allowed to redistribute this template ZIP file on any other website.',
            'taff'=> 'CTO, Amber Do Company',
            'image' => 'client-image.jpg',
        ]);
    }
}
