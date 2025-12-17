<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PartnerBrand;

class PartnerBrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            ['name' => 'Toyota', 'color' => '#EB0A1E', 'sort_order' => 1],
            ['name' => 'Honda', 'color' => '#E40521', 'sort_order' => 2],
            ['name' => 'Maruti Suzuki', 'color' => '#1C4FA0', 'sort_order' => 3],
            ['name' => 'Tata Motors', 'color' => '#0C2340', 'sort_order' => 4],
            ['name' => 'Mahindra', 'color' => '#D02C2F', 'sort_order' => 5],
            ['name' => 'Hyundai', 'color' => '#002C5F', 'sort_order' => 6],
            ['name' => 'Hero MotoCorp', 'color' => '#E31E24', 'sort_order' => 7],
            ['name' => 'Bajaj Auto', 'color' => '#003A70', 'sort_order' => 8],
            ['name' => 'TVS Motor', 'color' => '#1E3A8A', 'sort_order' => 9],
            ['name' => 'Ashok Leyland', 'color' => '#228B22', 'sort_order' => 10],
        ];

        foreach ($brands as $brand) {
            PartnerBrand::create($brand);
        }
    }
}
