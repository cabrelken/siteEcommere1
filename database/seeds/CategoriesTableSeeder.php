<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            [
                'name' => 'Choco',
                'slug' => 'choco',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Fruité',
                'slug' => 'fruite',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Bonbon',
                'slug' => 'bonbon',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Boisson',
                'slug' => 'boisson',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
