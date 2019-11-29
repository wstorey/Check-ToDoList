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
//        $faker = Faker::create();
        $itemIds = \App\Item::all()->pluck('id');
        foreach ($itemIds as $itemId) {
//            $itemId = $faker->randomElement($itemIds);
            $item = \App\Item::find($itemId);
            $item->todos()->sync($item->todo_id);

        }
    }
}
