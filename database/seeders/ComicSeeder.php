<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $comics = config("db");
        
        // iteration of comics array
        foreach ($comics as $key => $value) {

            // new istance of Comic model
            $comic = new Comic;

            // iteration of comic object
            foreach($value as $key2 => $comic_detail) {
                // value assignments with dynamic key
                $comic->$key2 = $comic_detail;
            }

            $comic->save();
        }
    }
}
