<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Category::create([
            'name' => 'Antigésicos',
        ]);
        Category::create([
            'name' => 'Antiácidos y Antiulcerosos',
        ]);
        Category::create([
            'name' => 'Antidiarréicos',
        ]);
        Category::create([
            'name' => 'Laxantes',
        ]);
        Category::create([
            'name' => 'Antimicrobianos',
       ]);
        Category::create([
            'name' => 'Antiperéricos',
       ]);
    }
}
