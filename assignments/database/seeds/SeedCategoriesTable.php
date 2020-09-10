<?php

use Illuminate\Database\Seeder;

class SeedCategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'uncategorized'
        ]);

        DB::table('categories')->insert([
            'name' => 'Beagle'
        ]);

        DB::table('categories')->insert([
            'name' => 'Collie'
        ]);

        DB::table('categories')->insert([
            'name' => 'Labrador'
        ]);

        DB::table('categories')->insert([
            'name' => 'Shepherd'
        ]);

        DB::table('categories')->insert([
            'name' => 'Shih Tzu'
        ]);

        
    }
}
