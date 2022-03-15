<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            [
                // Metal
            'name' => 'To Hell and Back',
            'artistband' => 'Sabaton',
            'duration' => '3:26',
            'image' => 'https://www.sabaton.net/wp-content/uploads/2018/10/albums_heroes-1.jpg',
            'genre' => 'Metal',
            ],[
            'name' => 'Stormtroopers',
            'artistband' => 'Sabaton',
            'duration' => '3:56',
            'image' => 'https://images.genius.com/6a80618d8f777e967f85b22c182c8279.1000x1000x1.jpg',
            'genre' => 'Metal',
            ],[
            'name' => 'The Last Stand',
            'artistband' => 'Sabaton',
            'duration' => '3:55',
            'image' => 'https://upload.wikimedia.org/wikipedia/en/6/6a/Sabaton_-_The_Last_Stand_cover.jpg',
            'genre' => 'Metal',
            ],[
            'name' => 'Soldier of Heaven',
            'artistband' => 'Sabaton',
            'duration' => '3:38',
            'image' => 'https://images.genius.com/6a80618d8f777e967f85b22c182c8279.1000x1000x1.jpg',
            'genre' => 'Metal',
            ],[
            'name' => 'The Unkillable Soldier',
            'artistband' => 'Sabaton',
            'duration' => '4:11',
            'image' => 'https://images.genius.com/6a80618d8f777e967f85b22c182c8279.1000x1000x1.jpg',
            'genre' => 'Metal',
            ],[
                //Jazz
            'name' => 'Aint Misbehavin',
            'artistband' => 'Fats Waller',
            'duration' => '3:57',
            'image' => 'https://media.s-bol.com/mBPoyLJ1WWr/p88PjvX/550x825.jpg',
            'genre' => 'Jazz',
            ],[
            'name' => 'Two Sleepyh People',
            'artistband' => 'Fats Waller',
            'duration' => '3:03',
            'image' => 'https://media.s-bol.com/mBPoyLJ1WWr/p88PjvX/550x825.jpg',
            'genre' => 'Jazz',
            ],[
            'name' => 'Two Sleepy People',
            'artistband' => 'Fats Waller',
            'duration' => '3:22',
            'image' => 'https://media.s-bol.com/mBPoyLJ1WWr/p88PjvX/550x825.jpg',
            'genre' => 'Jazz',
            ],[
            'name' => 'Jittebug Waltz',
            'artistband' => 'Fats Waller',
            'duration' => '3:20',
            'image' => 'https://media.s-bol.com/mBPoyLJ1WWr/p88PjvX/550x825.jpg',
            'genre' => 'Jazz',
            ],[
            'name' => 'Spring Cleaning',
            'artistband' => 'Fats Waller',
            'duration' => '2:27',
            'image' => 'https://media.s-bol.com/mBPoyLJ1WWr/p88PjvX/550x825.jpg',
            'genre' => 'Jazz',
            ],[
                //Blues
            'name' => 'The Thrill Is Gone',
            'artistband' => 'B.B King',
            'duration' => '5:01',
            'image' => 'https://i.scdn.co/image/ab67616d0000b27368bada3c5716c359506f02bf',
            'genre' => 'Blues',
            ],[
            'name' => 'Why I Sing The Blues',
            'artistband' => 'B.B King',
            'duration' => '8:37',
            'image' => 'https://upload.wikimedia.org/wikipedia/en/5/5e/BBKing_WhyI.jpg',
            'genre' => 'Blues',
            ],[
            'name' => 'Guess Who',
            'artistband' => 'B.B King',
            'duration' => '4:06',
            'image' => 'https://upload.wikimedia.org/wikipedia/en/6/6e/Guess_Who_%28BB_King%29.jpg',
            'genre' => 'Blues',
            ],[
            'name' => 'Please Love Me',
            'artistband' => 'B.B King',
            'duration' => '2:52',
            'image' => 'https://static.qobuz.com/images/covers/36/47/3614975834736_600.jpg',
            'genre' => 'Blues',
            ],[
            'name' => 'Sweet Little Angel',
            'artistband' => 'B.B King',
            'duration' => '3:01',
            'image' => 'https://i.scdn.co/image/ab67616d0000b273e080a606d640e4379222a592',
            'genre' => 'Blues',
            ],[
                //Rock
            'name' => 'Back In Black',
            'artistband' => 'AC/DC',
            'duration' => '4:15',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/b/be/Acdc_backinblack_cover.jpg',
            'genre' => 'Rock',
            ],[
            'name' => 'Highway To Hell',
            'artistband' => 'AC/DC',
            'duration' => '3:28',
            'image' => 'https://media.hitparade.ch/cover/big/acdc-highway_to_hell_s.jpg',
            'genre' => 'Rock',
            ],[
            'name' => 'Thunderstuck',
            'artistband' => 'AC/DC',
            'duration' => '4:52',
            'image' => 'https://media.s-bol.com/BNYDxrK9DD1Y/550x463.jpg',
            'genre' => 'Rock',
            ],[
            'name' => 'T.N.T',
            'artistband' => 'AC/DC',
            'duration' => '3:34',
            'image' => 'https://i1.sndcdn.com/artworks-U2zGlotNIu4VS0ig-pZj4cg-t500x500.jpg',
            'genre' => 'Rock',
            ],[
            'name' => 'Hell Bells',
            'artistband' => 'AC/DC',
            'duration' => '5:12',
            'image' => 'https://mise.damusic.be/multiped/original/acdc-30048cec-8834d4de0b2524bfe8cbda292e95301a.jpg',
            'genre' => 'Rock',
            ],[
                //Hiphop
            'name' => 'Levitating',
            'artistband' => 'DaBaby',
            'duration' => '3:23',
            'image' => 'https://media.hitparade.ch/cover/big/dua_lipa_feat_dababy-levitating_s_2.jpg',
            'genre' => 'Hiphop',
            ],[
            'name' => 'Rockstar',
            'artistband' => 'DaBaby',
            'duration' => '3:01',
            'image' => 'https://media.pitchfork.com/photos/5e9de95a2071a50008c2bd34/1:1/w_600/Blame%20It%20On%20Baby_DaBaby.jpg',
            'genre' => 'Hiphop',
            ],[
            'name' => 'BOP',
            'artistband' => 'DaBaby',
            'duration' => '2:39',
            'image' => 'https://media.pitchfork.com/photos/5d8e4ced5182470009cb4d71/1:1/w_450%2Cc_limit/DaBaby.jpg',
            'genre' => 'Hiphop',
            ],[
            'name' => 'Ball If I Want To',
            'artistband' => 'DaBaby',
            'duration' => '1:52',
            'image' => 'https://m.media-amazon.com/images/I/71gokxY7IXS._SS500_.jpg',
            'genre' => 'Hiphop',
            ],[
            'name' => 'Red Light Green Light',
            'artistband' => 'DaBaby',
            'duration' => '2:39',
            'image' => 'https://e.snmc.io/i/600/s/17ef117263736383b12b3f3821d4bb0f/9116299/dababy-red-light-green-light-Cover-Art.jpg',
            'genre' => 'Hiphop',
            ]
        ]);
    }
}
