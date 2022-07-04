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
            'duration' => 209,
            'image' => 'https://www.sabaton.net/wp-content/uploads/2018/10/albums_heroes-1.jpg',
            'genre_id' => '1',
            ],[
            'name' => 'Stormtroopers',
            'artistband' => 'Sabaton',
            'duration' => 236,
            'image' => 'https://images.genius.com/6a80618d8f777e967f85b22c182c8279.1000x1000x1.jpg',
            'genre_id' => '1',
            ],[
            'name' => 'The Last Stand',
            'artistband' => 'Sabaton',
            'duration' => 235,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/6/6a/Sabaton_-_The_Last_Stand_cover.jpg',
            'genre_id' => '1',
            ],[
            'name' => 'Soldier of Heaven',
            'artistband' => 'Sabaton',
            'duration' => 212,
            'image' => 'https://images.genius.com/6a80618d8f777e967f85b22c182c8279.1000x1000x1.jpg',
            'genre_id' => '1',
            ],[
            'name' => 'The Unkillable Soldier',
            'artistband' => 'Sabaton',
            'duration' => 311,
            'image' => 'https://images.genius.com/6a80618d8f777e967f85b22c182c8279.1000x1000x1.jpg',
            'genre_id' => '1',
            ],[
                //Jazz
            'name' => 'Aint Misbehavin',
            'artistband' => 'Fats Waller',
            'duration' => 342,
            'image' => 'https://media.s-bol.com/mBPoyLJ1WWr/p88PjvX/550x825.jpg',
            'genre_id' => '2',
            ],[
            'name' => 'Two Sleepyh People',
            'artistband' => 'Fats Waller',
            'duration' => 183,
            'image' => 'https://media.s-bol.com/mBPoyLJ1WWr/p88PjvX/550x825.jpg',
            'genre_id' => '2',
            ],[
            'name' => 'Two Sleepy People',
            'artistband' => 'Fats Waller',
            'duration' => 178,
            'image' => 'https://media.s-bol.com/mBPoyLJ1WWr/p88PjvX/550x825.jpg',
            'genre_id' => '2',
            ],[
            'name' => 'Jittebug Waltz',
            'artistband' => 'Fats Waller',
            'duration' => 193,
            'image' => 'https://media.s-bol.com/mBPoyLJ1WWr/p88PjvX/550x825.jpg',
            'genre_id' => '2',
            ],[
            'name' => 'Spring Cleaning',
            'artistband' => 'Fats Waller',
            'duration' => 156,
            'image' => 'https://media.s-bol.com/mBPoyLJ1WWr/p88PjvX/550x825.jpg',
            'genre_id' => '2',
            ],[
                //Blues
            'name' => 'The Thrill Is Gone',
            'artistband' => 'B.B King',
            'duration' => 301,
            'image' => 'https://i.scdn.co/image/ab67616d0000b27368bada3c5716c359506f02bf',
            'genre_id' => '3',
            ],[
            'name' => 'Why I Sing The 3',
            'artistband' => 'B.B King',
            'duration' => 503,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/5/5e/BBKing_WhyI.jpg',
            'genre_id' => '3',
            ],[
            'name' => 'Guess Who',
            'artistband' => 'B.B King',
            'duration' => 245,
            'image' => 'https://upload.wikimedia.org/wikipedia/en/6/6e/Guess_Who_%28BB_King%29.jpg',
            'genre_id' => '3',
            ],[
            'name' => 'Please Love Me',
            'artistband' => 'B.B King',
            'duration' => 167,
            'image' => 'https://static.qobuz.com/images/covers/36/47/3614975834736_600.jpg',
            'genre_id' => '3',
            ],[
            'name' => 'Sweet Little Angel',
            'artistband' => 'B.B King',
            'duration' => 171,
            'image' => 'https://i.scdn.co/image/ab67616d0000b273e080a606d640e4379222a592',
            'genre_id' => '3',
            ],[
                //Rock
            'name' => 'Back In Black',
            'artistband' => 'AC/DC',
            'duration' => 254,
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/b/be/Acdc_backinblack_cover.jpg',
            'genre_id' => '4',
            ],[
            'name' => 'Highway To Hell',
            'artistband' => 'AC/DC',
            'duration' => 373,
            'image' => 'https://media.hitparade.ch/cover/big/acdc-highway_to_hell_s.jpg',
            'genre_id' => '4',
            ],[
            'name' => 'Thunderstuck',
            'artistband' => 'AC/DC',
            'duration' => 289,
            'image' => 'https://media.s-bol.com/BNYDxrK9DD1Y/550x463.jpg',
            'genre_id' => '4',
            ],[
            'name' => 'T.N.T',
            'artistband' => 'AC/DC',
            'duration' => 193,
            'image' => 'https://i1.sndcdn.com/artworks-U2zGlotNIu4VS0ig-pZj4cg-t500x500.jpg',
            'genre_id' => '4',
            ],[
            'name' => 'Hell Bells',
            'artistband' => 'AC/DC',
            'duration' => 312,
            'image' => 'https://mise.damusic.be/multiped/original/acdc-30048cec-8834d4de0b2524bfe8cbda292e95301a.jpg',
            'genre_id' => '4',
            ],[
                //Hiphop
            'name' => 'Levitating',
            'artistband' => 'DaBaby',
            'duration' => 143,
            'image' => 'https://media.hitparade.ch/cover/big/dua_lipa_feat_dababy-levitating_s_2.jpg',
            'genre_id' => '5',
            ],[
            'name' => '4star',
            'artistband' => 'DaBaby',
            'duration' => 181,
            'image' => 'https://media.pitchfork.com/photos/5e9de95a2071a50008c2bd34/1:1/w_600/Blame%20It%20On%20Baby_DaBaby.jpg',
            'genre_id' => '5',
            ],[
            'name' => 'BOP',
            'artistband' => 'DaBaby',
            'duration' => 159,
            'image' => 'https://media.pitchfork.com/photos/5d8e4ced5182470009cb4d71/1:1/w_450%2Cc_limit/DaBaby.jpg',
            'genre_id' => '5',
            ],[
            'name' => 'Ball If I Want To',
            'artistband' => 'DaBaby',
            'duration' => 112,
            'image' => 'https://m.media-amazon.com/images/I/71gokxY7IXS._SS500_.jpg',
            'genre_id' => '5',
            ],[
            'name' => 'Red Light Green Light',
            'artistband' => 'DaBaby',
            'duration' => 159,
            'image' => 'https://e.snmc.io/i/600/s/17ef117263736383b12b3f3821d4bb0f/9116299/dababy-red-light-green-light-Cover-Art.jpg',
            'genre_id' => '5',
            ]
        ]);
    }
}
