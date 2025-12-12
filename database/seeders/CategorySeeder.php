<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Motorcycle Oils',
                'description' => 'Premium quality motorcycle engine oils for all types of two-wheelers. API certified formulations for superior engine protection.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Fork Oil - Brake Oil - Coolant - Power Steering Oil',
                'description' => 'Specialty fluids including fork oil, brake fluid DOT-4, coolants, and power steering oils.',
                'sort_order' => 2,
            ],
            [
                'name' => 'Car / Bus / Truck / Tractor / Heavy Vehicle Engine Oil',
                'description' => 'Heavy-duty engine oils for commercial vehicles, trucks, buses, tractors and heavy machinery.',
                'sort_order' => 3,
            ],
            [
                'name' => 'CNG Engine Oil',
                'description' => 'Specially formulated oils for CNG powered vehicles and engines.',
                'sort_order' => 4,
            ],
            [
                'name' => 'Pump Set Oil',
                'description' => 'High-quality lubricants for agricultural and industrial pump sets.',
                'sort_order' => 5,
            ],
            [
                'name' => 'Spray / Chain Lube',
                'description' => 'Chain sprays, multi-cleaners, and dust cleaner sprays for maintenance.',
                'sort_order' => 6,
            ],
            [
                'name' => 'Passenger Car Full Synthetic Engine Oil',
                'description' => 'Premium quality full synthetic engine oils for passenger cars.',
                'sort_order' => 7,
            ],
            [
                'name' => 'Gear Oil',
                'description' => 'High-performance gear oils for automotive and industrial applications.',
                'sort_order' => 8,
            ],
            [
                'name' => 'Hydraulic Oil',
                'description' => 'Anti-wear hydraulic oils for industrial and mobile hydraulic systems.',
                'sort_order' => 9,
            ],
            [
                'name' => 'Automotive & Industrial Greases',
                'description' => 'Complete range of lithium, calcium, and specialty greases for all applications.',
                'sort_order' => 10,
            ],
            [
                'name' => 'Industrial Oil',
                'description' => 'Industrial lubricants including cutting oils, spindle oils, thermic oils, and more.',
                'sort_order' => 11,
            ],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'description' => $category['description'],
                'sort_order' => $category['sort_order'],
                'is_active' => true,
            ]);
        }
    }
}
