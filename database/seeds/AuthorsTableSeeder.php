<?php

use Illuminate\Database\Seeder;
use Vinyl\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Author::class, 15)->create()->each(function($u) {
            $u->books()->save(factory(\Vinyl\Book::class)->make());
        });
    }
}
