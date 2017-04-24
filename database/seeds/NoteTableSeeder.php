<?php

use Illuminate\Database\Seeder;
use App\Note;
use App\Category;
class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*for ($i=1; $i <= 100 ; $i++) {
        Note::create(['note' => "Nota $i"]);
      }*/
      $categories = Category::all();

      $notes = factory(Note::class)->times(100)->make();

      foreach ($notes as $note) {

        $category = $categories->random();

        $category->notes()->save($note);
      }
    }
}
