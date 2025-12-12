<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // Motorcycle Oils
            'Motorcycle Oils' => [
                ['name' => 'POWER RACER 20W40', 'specs' => 'API SL'],
                ['name' => 'RX ULTRA PREMIUM A4000 20W40', 'specs' => 'API SN'],
                ['name' => 'MAXXI RIDER PREM CHOICE 20W50', 'specs' => 'API SN'],
                ['name' => 'RX SPIDER PLUS GOLDEN 15W40', 'specs' => 'API SN'],
                ['name' => 'Z1 POWER PLUS SCOOTY 10W30', 'specs' => 'API SN'],
                ['name' => 'GX RIDER SHIELD ACTIVE 20W40', 'specs' => 'API SL'],
                ['name' => 'XP POWER RACING 1 20W50', 'specs' => 'API SN'],
                ['name' => 'RX ULTRA PREMIUM 4.0 20W40', 'specs' => 'API SN'],
                ['name' => 'ZX INSTA SHIELD PRO+ 20W40', 'specs' => 'API SN'],
                ['name' => 'ECO ENERGY ROYAL 15W40', 'specs' => 'API SN'],
                ['name' => 'ECO ENERGY SHIELD 10W40', 'specs' => 'API SN'],
                ['name' => 'CRUISER ENERGY 20W50', 'specs' => 'API SN'],
                ['name' => 'CROOZER SHIELD PRO 10W40', 'specs' => 'API SN'],
                ['name' => 'ALISHA ACTIVE NT 20W40', 'specs' => 'API SN'],
                ['name' => 'GS HIGH POWER B600 20W40', 'specs' => 'API SN'],
                ['name' => 'RATSON POWER B500 20W40', 'specs' => 'API SN'],
            ],
            
            // Fork Oil - Brake Oil - Coolant - Power Steering Oil
            'Fork Oil - Brake Oil - Coolant - Power Steering Oil' => [
                ['name' => 'RZR & ZRZR NS Fork Oil', 'specs' => 'NS Grade'],
                ['name' => 'RZR & ZRZR WW Fork Oil', 'specs' => 'WW Grade'],
                ['name' => 'LYNX NS Fork Oil', 'specs' => 'NS Grade'],
                ['name' => 'BRAKE OIL DOT-4', 'specs' => 'DOT-4'],
                ['name' => 'MOTO COOL Coolant', 'specs' => 'Premium Coolant'],
                ['name' => 'POWER STEERING OIL', 'specs' => 'Premium Quality'],
            ],
            
            // Car / Bus / Truck / Tractor / Heavy Vehicle Engine Oil
            'Car / Bus / Truck / Tractor / Heavy Vehicle Engine Oil' => [
                ['name' => 'RX ULTRA PREM HD ECO7 15W40', 'specs' => 'CF-4'],
                ['name' => 'RX ULTRA PREM HD ECO8 15W40', 'specs' => 'CH-4'],
                ['name' => 'RX ULTRA PREM HD ECO9 15W40', 'specs' => 'CI-4+'],
                ['name' => 'RX ULTRA PREM HD ECO10 20W40', 'specs' => 'API SN/SL'],
                ['name' => 'RX ULTRA PREM HD ECO11 20W50', 'specs' => 'API SN/SL'],
                ['name' => 'RX ROAD STAR SHIELD+ 20W40 TRACTOR', 'specs' => 'Tractor Grade'],
                ['name' => 'RX ROAD STAR SHIELD PRO+ 15W50', 'specs' => 'CI-4'],
                ['name' => 'UTTO Universal Tractor Transmission Oil', 'specs' => 'UTTO'],
            ],
            
            // CNG Engine Oil
            'CNG Engine Oil' => [
                ['name' => 'RED GHODA 20W40', 'specs' => 'API-SS'],
                ['name' => 'XP-2T 2-Stroke Oil', 'specs' => 'API-FC'],
            ],
            
            // Pump Set Oil
            'Pump Set Oil' => [
                ['name' => 'PUMP SET OIL 20W40', 'specs' => 'API-SS'],
            ],
            
            // Spray / Chain Lube
            'Spray / Chain Lube' => [
                ['name' => 'CHAIN SPRAY', 'specs' => 'Chain Lubricant'],
                ['name' => 'MULTI CLEANER SPRAY', 'specs' => 'Multi-Purpose'],
                ['name' => 'DUST CLEANER SPRAY', 'specs' => 'Electronics Safe'],
            ],
            
            // Passenger Car Full Synthetic Engine Oil
            'Passenger Car Full Synthetic Engine Oil' => [
                ['name' => 'RX ULTRA PREM ECO MAGNET 0W40', 'specs' => 'API SN'],
                ['name' => 'RX ULTRA PREM HD ECO ENERGY 5W40', 'specs' => 'API SN'],
                ['name' => 'RX ULTRA PREM HD ECO PRO 10W40', 'specs' => 'API SN'],
                ['name' => 'RX ULTRA PREM HD ECO CRUISER 10W30', 'specs' => 'API SN'],
                ['name' => 'RX ROAD STAR SHIELD+ 5W30', 'specs' => 'API SN'],
                ['name' => 'RX ROAD STAR SHIELD PRO+ 15W50', 'specs' => 'API SN'],
            ],
            
            // Gear Oil
            'Gear Oil' => [
                ['name' => 'EP-90 Gear Oil', 'specs' => 'API GL-5'],
                ['name' => 'EP-140 Gear Oil', 'specs' => 'API GL-5'],
                ['name' => 'EP-80W90 Gear Oil', 'specs' => 'API GL-5'],
                ['name' => 'EP-75W90 Full Synthetic Gear Oil', 'specs' => 'API GL-5'],
                ['name' => 'EP-85W140 Gear Oil', 'specs' => 'API GL-5'],
            ],
            
            // Hydraulic Oil
            'Hydraulic Oil' => [
                ['name' => 'HYD-68 Hydraulic Oil', 'specs' => 'AW-68'],
                ['name' => 'HYD-46 Hydraulic Oil', 'specs' => 'HYD-46'],
                ['name' => 'HYD-32 Hydraulic Oil', 'specs' => 'HYD-32'],
            ],
            
            // Automotive & Industrial Greases
            'Automotive & Industrial Greases' => [
                ['name' => 'AP-3 GREASE', 'specs' => 'Lithium'],
                ['name' => 'EP-2 GREASE', 'specs' => 'Lithium'],
                ['name' => 'H.T MOLY GREASE', 'specs' => 'Lithium'],
                ['name' => 'HIGH TEMPERATURE GREASE', 'specs' => 'Lithium'],
                ['name' => 'EPL-2 GREASE', 'specs' => 'Lithium'],
                ['name' => 'EP-0 GREASE', 'specs' => 'Lithium'],
                ['name' => 'EP-00 GREASE', 'specs' => 'Lithium'],
                ['name' => 'EP-000 GREASE', 'specs' => 'Lithium'],
                ['name' => 'EP-1 GREASE', 'specs' => 'Lithium'],
                ['name' => 'TITANIUM-3 RED GREASE', 'specs' => 'Lithium'],
                ['name' => 'SILICON GREASE', 'specs' => 'Silicon'],
                ['name' => 'TITANIUM-222 BLUE GREASE', 'specs' => 'VLMP 2/1'],
                ['name' => 'TITANIUM-333 BLUE GREASE', 'specs' => 'VLMP 2/1'],
                ['name' => 'POLY UREA 100 GREASE', 'specs' => 'VLHP-2'],
                ['name' => 'POLY UREA 460 GREASE', 'specs' => 'VLHP-3'],
                ['name' => 'TCZ-50 GREASE', 'specs' => 'Lithium'],
                ['name' => 'GRAPHITE GREASE-0', 'specs' => 'Calcium'],
                ['name' => 'GRAPHITE GREASE-1', 'specs' => 'Calcium'],
                ['name' => 'GRAPHITE GREASE-2', 'specs' => 'Calcium'],
                ['name' => 'GRAPHITE GREASE-3', 'specs' => 'Calcium'],
                ['name' => 'CHASSIS GREASE', 'specs' => 'Calcium'],
                ['name' => 'MULTY SPECIAL MP-3 GREASE', 'specs' => 'Calcium'],
                ['name' => 'RED GEL GREASE', 'specs' => 'Calcium'],
                ['name' => 'GEL GREASE', 'specs' => 'Calcium'],
                ['name' => 'WHEEL BEARING GREASE', 'specs' => 'Sodium'],
                ['name' => 'SEMI LITHIUM GREASE', 'specs' => 'Semi Lithium'],
            ],
            
            // Industrial Oil
            'Industrial Oil' => [
                ['name' => 'EP-220 Industrial Oil', 'specs' => 'EP-220'],
                ['name' => 'EP-320 Industrial Oil', 'specs' => 'EP-320'],
                ['name' => 'LOOMS-460 Industrial Oil', 'specs' => 'LOOMS-460'],
                ['name' => 'HYD-100 Industrial Hydraulic Oil', 'specs' => 'HYD-100'],
                ['name' => 'HYD-150 Industrial Hydraulic Oil', 'specs' => 'HYD-150'],
                ['name' => 'WATER SOLUBLE CUTTING OIL', 'specs' => 'Cutting Oil'],
                ['name' => 'STATE CUTTING OIL', 'specs' => 'Cutting Oil'],
                ['name' => 'TRANSMISSION OIL', 'specs' => 'Industrial Grade'],
                ['name' => 'EMBROIDERY OIL', 'specs' => 'Textile Grade'],
                ['name' => 'SPINDLE OIL 10/12', 'specs' => 'Spindle Grade'],
                ['name' => 'THERMIC OIL', 'specs' => 'Heat Transfer'],
                ['name' => 'QUENCHING OIL', 'specs' => 'Industrial Grade'],
                ['name' => 'CNC LUBRICANTS WAY-68', 'specs' => 'CNC Grade'],
                ['name' => 'GRINDING OIL', 'specs' => 'Industrial Grade'],
                ['name' => 'CONNING OIL', 'specs' => 'Industrial Grade'],
                ['name' => 'TRANSFORMER OIL', 'specs' => 'Electrical Grade'],
                ['name' => 'WARPING OIL', 'specs' => 'Textile Grade'],
                ['name' => 'KNITTING OIL', 'specs' => 'Textile Grade'],
            ],
        ];

        foreach ($products as $categoryName => $categoryProducts) {
            $category = Category::where('name', 'LIKE', "%{$categoryName}%")->first();
            
            if ($category) {
                foreach ($categoryProducts as $product) {
                    Product::create([
                        'category_id' => $category->id,
                        'name' => $product['name'],
                        'slug' => Str::slug($product['name']) . '-' . time() . rand(100, 999),
                        'specifications' => $product['specs'],
                        'description' => "Premium quality {$product['name']} with {$product['specs']} specifications. Engineered for superior performance and maximum engine protection.",
                        'is_active' => true,
                    ]);
                }
            }
        }
    }
}
