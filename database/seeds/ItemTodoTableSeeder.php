<?php

use Illuminate\Database\Seeder;

class ItemTodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Loop
        //Get a list of all Items
        //Get a list of all todos
        //Choose random item
        //choose random todo
        //Sync item to todo
        //DB::class

        $todoIds = \App\Todo::all()->pluck('id');
        $itemIds = \App\Item::all()->pluck('id');
        for($i = 0; i < 30; i++) {

        }
        return [
            'name' => $faker->word,
            'todo_id' => $faker->randomElement($todoIds)
        ];
    }
}
