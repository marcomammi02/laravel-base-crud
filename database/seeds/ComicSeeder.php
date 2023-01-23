<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comicItem) {
            $comic = new Comic;

            $comic->title = $comicItem['title'];
            $comic->description = $comicItem['description'];
            $comic->thumb = $comicItem['thumb'];
            $comic->price = $comicItem['price'];
            $comic->series = $comicItem['series'];
            $comic->sale_date = $comicItem['sale_date'];
            $comic->type = $comicItem['type'];

            $comic->save();
        }
    }
}
