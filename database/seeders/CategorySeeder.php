<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    private $categories = ['Endodontics', 'Periodontology',
        'Implantology', 'Orthodontics', 'Oral Surgery', 'Pediatric dentistry', 'Whitening', 'Prosthetics', 'Examination'];

    public function run() : void
    {
        $order = 1;
        foreach ($this->categories as $category) {
            \DB::table('categories')->insert([
                'name' => $category,
                'order' => $order++
            ]);
        }
    }
}
