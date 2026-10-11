<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Elektronik',
                'slug' => 'elektronik',
                'description' => 'Produk elektronik untuk kebutuhan sehari-hari.',
            ],
            [
                'name' => 'Aksesori Komputer',
                'slug' => 'aksesori-komputer',
                'description' => 'Aksesori komputer dan perlengkapan kerja.',
            ],
            [
                'name' => 'Peralatan Rumah',
                'slug' => 'peralatan-rumah',
                'description' => 'Peralatan untuk kebutuhan rumah tangga.',
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'description' => 'Produk pakaian dan aksesori fashion.',
            ],
            [
                'name' => 'Alat Tulis',
                'slug' => 'alat-tulis',
                'description' => 'Alat tulis dan perlengkapan belajar.',
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}
