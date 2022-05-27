<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $comics = config('comics');
        //Prendiamo tutti i comic in 'comics'
        foreach($comics as $comic){
            $newComic= new Comic();
            //indico che new comic deve fillare il singolo comic. All'interno del singolo comic
            //vi sono tutte le chiavi da fillare.
            $newComic->fill($comic);
            $newComic->save();
        }
    }
}
