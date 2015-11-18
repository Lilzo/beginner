<?php
/**
 * Created by PhpStorm.
 * User: PCWorldBL
 * Date: 11/17/2015
 * Time: 18:34
 */
use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder{

    public function run(){
        DB::table('albums')->insert([
            ['id' => 1, 'name' => 'antihrist', 'band_id' => 4],
            ['id' => 2, 'name' => 'sad ili nikad', 'band_id' => 4],
            ['id' => 3, 'name' => 'New Album', 'band_id' => 3],
            ['id' => 4, 'name' => 'Akuma No Uta', 'band_id' => 3],
            ['id' => 5, 'name' => 'Pink', 'band_id' => 3],
            ['id' => 6, 'name' => 'Remission', 'band_id' => 1],
            ['id' => 7, 'name' => 'Leviathan', 'band_id' => 1],
            ['id' => 8, 'name' => 'Once More \'Round the Sun', 'band_id' => 1],
            ['id' => 9, 'name' => 'Rated R', 'band_id' => 1],
            ['id' =>10, 'name' => 'Song for the Deaf', 'band_id' => 1],
            ['id' => 11, 'name' => '...Like Clockwork', 'band_id' => 1]
        ]);
    }
}