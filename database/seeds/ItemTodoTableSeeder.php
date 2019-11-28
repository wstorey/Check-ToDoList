<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


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

//        $faker = new Faker();

        $faker = Faker::create();
        $todoIds = \App\Todo::all()->pluck('id');
        $itemIds = \App\Item::all()->pluck('id');

        $itemTodos = [];
        for($i = 0; $i < 30; $i++) {
//            $todoId = $faker->randomElement($todoIds);
            $itemId = $faker->randomElement($itemIds);
            $item = \App\Item::find($itemId);
//            dd($todo);
            $item->todos()->sync($item->todo_id);
//            $todo->items()->sync($itemId);
//            $itemTodos['item_id'] = $itemId;
//            $itemTodos['todo_id'] = $todoId;

        }
//        return $itemTodos;
    }
}
