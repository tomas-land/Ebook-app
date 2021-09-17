<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            $book = new Book();
            $book->title = "Brisiaus Galas";
            $book->pages = 120;
            $book->isbn = 9999;
            $book->description = "Ziaurus apsakymas";
            $book->author_id = 1;
            $book->save();
            
            $book = new Book();
            $book->title = "Laimės Žiburys";
            $book->pages = 150;
            $book->isbn = 9999;
            $book->description = "Trumpas apsakymas";
            $book->author_id = 1;
            $book->save();
    }
}
