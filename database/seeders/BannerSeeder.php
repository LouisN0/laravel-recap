<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'titre' => 'Get The Latest App From App Stores',
            'sstitre' => 'Chain App Dev is an app landing page HTML5 template based on Bootstrap v5.1.3 CSS layout provided by TemplateMo, a great website to download free CSS templates.',
            'appleTitre' => 'Free Quote ',
            'applelien' => '#contact',
            'androidTitre' => 'Free Quote ',
            'androidlien' => '#contact',
            'img' => 'slider-dec.png',
        ]);
    }
}
