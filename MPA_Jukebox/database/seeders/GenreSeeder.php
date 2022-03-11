<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
            'genre' => 'Metal',
            'image' => 'https://flypaper.soundfly.com/wp-content/uploads/2016/10/metal-covers-header.png',
            ],[
            'genre' => 'Jazz',
            'image' => 'https://static.nieuwsblad.be/Assets/Images_Upload/2016/03/07/michaelasimos.jpg',
            ],[
            'genre' => 'Blues',
            'image' => 'https://st.depositphotos.com/1269378/2059/v/600/depositphotos_20592453-stock-illustration-blues-musician.jpg',
            ],[
            'genre' => 'Rock',
            'image' => 'https://sm.ign.com/t/ign_nl/news/i/is-harmonix-creating-a-new-rock-band-game/is-harmonix-creating-a-new-rock-band-game_wfv8.h720.jpg',
            ],[
            'genre' => 'Hiphop',
            'image' => 'https://www.dansisvooriedereen.nl/wp-content/uploads/2020/06/461d2d6b331f3999ddae6304c1276d74.jpg'
            ]
        ]);

        
    }
}
