<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //$this->call('BreedsTableSeeder');
//        $this->call('BandsTableSeeder');
//        $this->call('AlbumsTableSeeder');
        $this->call('AuthorsTableSeeder');
        $this->call('BooksTableSeeder');

        Model::reguard();
    }
}
