<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LibrarySeeder extends Seeder
{
   
    public function run()
    {
        factory(App\Books::class, 15)->create();
        factory(App\Author::class, 5)->create();
        factory(App\User::class, 10)->create();
        $numberBooks = 15;
        for ($i = 1; $i < $numberBooks; $i++) {
            DB::table('author_book')->insert([
                'book_id' => $i, 
                'author_id' => rand(1, 5) 
            ]);
            } 
    }
}
