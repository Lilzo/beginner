<?php
/**
 * Created by PhpStorm.
 * User: PCWorldBL
 * Date: 11/17/2015
 * Time: 18:29
 */
use Illuminate\Database\Seeder;

class BandsTableSeeder extends Seeder{

    public function run(){
        DB::table('bands')->insert([
            ['id' => 1, 'name' => 'Mastodon'],
            ['id' => 2, 'name' => 'Queens of the stone age'],
            ['id' => 3, 'name' => 'boris'],
            ['id' => 4, 'name' => '[machina]']
        ]);
    }
}