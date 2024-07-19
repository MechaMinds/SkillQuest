<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Belajar Bahasa Pemrograman Python',
            'description' => 'Kami sangat senang menyambut Anda dalam perjalanan menarik untuk mempelajari salah satu bahasa pemrograman paling populer di dunia. Python dikenal karena kesederhanaan dan kekuatannya, menjadikannya pilihan yang tepat bagi pemula yang baru memulai petualangan mereka di dunia pemrograman.
                                Pada kursus ini, Anda akan dibimbing langkah demi langkah dalam memahami konsep dasar Python, dan kami yakin bahwa dengan dedikasi dan latihan, Anda akan mampu menguasai dasar-dasar pemrograman Python dengan baik.',
            'price' => 150000
        ]);

        // Tambahkan produk lainnya sesuai kebutuhan
    }
}

