<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

//        DB::table('users')->truncate();
//        $this->call(UsersTableSeeder::class);
        DB::table('todos')->truncate();
        $this->call(TodosTableSeeder::class);
        DB::table('items')->truncate();
        $this->call(ItemsTableSeeder::class);

        DB::table('item_todo')->truncate();
        $this->call(ItemTodoTableSeeder::class);



        Schema::enableForeignKeyConstraints();
    }
}
