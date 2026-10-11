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
            ['Elektronik', 'Mouse Wireless', 85000],
            ['Elektronik', 'Keyboard Mechanical', 350000],
            ['Elektronik', 'Headset Gaming', 275000],
            ['Elektronik', 'Speaker Bluetooth', 180000],
            ['Elektronik', 'Webcam HD', 320000],
            ['Elektronik', 'Power Bank 10000mAh', 150000],
            ['Elektronik', 'Lampu LED USB', 45000],
            ['Elektronik', 'Kabel Data USB-C', 35000],
            ['Elektronik', 'Charger 20W', 95000],
            ['Elektronik', 'Flashdisk 64GB', 85000],

            ['Aksesori Komputer', 'Mouse Pad', 45000],
            ['Aksesori Komputer', 'Laptop Stand', 125000],
            ['Aksesori Komputer', 'USB Hub 4 Port', 95000],
            ['Aksesori Komputer', 'Cooling Pad Laptop', 175000],
            ['Aksesori Komputer', 'Kabel HDMI', 65000],
            ['Aksesori Komputer', 'Adaptor USB WiFi', 110000],
            ['Aksesori Komputer', 'Card Reader', 40000],
            ['Aksesori Komputer', 'Microphone USB', 225000],
            ['Aksesori Komputer', 'Pelindung Keyboard', 30000],
            ['Aksesori Komputer', 'Tas Laptop', 160000],

            ['Peralatan Rumah', 'Botol Minum', 55000],
            ['Peralatan Rumah', 'Lampu Meja', 95000],
            ['Peralatan Rumah', 'Rak Serbaguna', 120000],
            ['Peralatan Rumah', 'Kipas Mini USB', 75000],
            ['Peralatan Rumah', 'Kotak Penyimpanan', 45000],
            ['Peralatan Rumah', 'Timbangan Digital', 130000],
            ['Peralatan Rumah', 'Gantungan Baju', 35000],
            ['Peralatan Rumah', 'Tempat Sampah Mini', 40000],
            ['Peralatan Rumah', 'Dispenser Sabun', 50000],
            ['Peralatan Rumah', 'Jam Digital', 100000],

            ['Fashion', 'Kaos Polos', 65000],
            ['Fashion', 'Hoodie Basic', 180000],
            ['Fashion', 'Topi Kasual', 50000],
            ['Fashion', 'Tas Selempang', 125000],
            ['Fashion', 'Dompet Pria', 85000],
            ['Fashion', 'Ikat Pinggang', 60000],
            ['Fashion', 'Kemeja Kasual', 140000],
            ['Fashion', 'Jaket Ringan', 210000],
            ['Fashion', 'Sandal Harian', 70000],
            ['Fashion', 'Kaos Kaki', 25000],

            ['Alat Tulis', 'Buku Catatan', 18000],
            ['Alat Tulis', 'Pulpen Hitam', 5000],
            ['Alat Tulis', 'Pensil 2B', 4000],
            ['Alat Tulis', 'Penghapus', 3000],
            ['Alat Tulis', 'Penggaris 30 cm', 7000],
            ['Alat Tulis', 'Spidol Permanen', 12000],
            ['Alat Tulis', 'Map Dokumen', 8000],
            ['Alat Tulis', 'Stabilo', 9000],
            ['Alat Tulis', 'Tempat Pensil', 25000],
            ['Alat Tulis', 'Kertas A4', 55000],
        ];

        foreach ($products as [$categoryName, $name, $price]) {
            $category = Category::where('name', $categoryName)->firstOrFail();

            Product::updateOrCreate(
                ['slug' => Str::slug($name)],
                [
                    'category_id' => $category->id,
                    'name' => $name,
                    'description' => 'Produk ' . strtolower($name)
                        . ' untuk memenuhi kebutuhan sehari-hari.',
                    'price' => $price,
                    'stock' => 20,
                    'image' => null,
                    'is_active' => true,
                ]
            );
        }

        // Tambahkan produk acak hingga jumlah total mencapai 60.
        $remaining = max(0, 60 - Product::count());

        if ($remaining > 0) {
            Product::factory()->count($remaining)->create();
        }
    }
}
