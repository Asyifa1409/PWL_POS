<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
             'detail_id' => 1,
             'penjualan_id' => 1,
             'barang_id' => 1,
             'harga' => 6000,
             'jumlah' => 2   
            ],
            [
             'detail_id' => 2,
             'penjualan_id' => 1,
             'barang_id' => 2,
             'harga' => 10000,
             'jumlah' => 2   
            ],
            [
             'detail_id' => 3,
             'penjualan_id' => 1,
             'barang_id' => 5,
             'harga' => 65000,
             'jumlah' => 1   
            ],
            [
             'detail_id' => 4,
             'penjualan_id' => 2,
             'barang_id' => 1,
             'harga' => 6000,
             'jumlah' => 5   
            ],
            [
             'detail_id' => 5,
             'penjualan_id' => 2,
             'barang_id' => 9,
             'harga' => 5000,
             'jumlah' => 3   
            ],
            [
             'detail_id' => 6,
             'penjualan_id' => 2,
             'barang_id' => 2,
             'harga' => 5000,
             'jumlah' => 3   
            ],
            [
             'detail_id' => 7,
             'penjualan_id' => 3,
             'barang_id' => 2,
             'harga' => 5000,
             'jumlah' => 5   
            ],
            [
             'detail_id' => 8,
             'penjualan_id' => 3,
             'barang_id' => 3,
             'harga' => 7000,
             'jumlah' => 5   
            ],
            [
             'detail_id' => 9,
             'penjualan_id' => 3,
             'barang_id' => 6,
             'harga' => 60000,
             'jumlah' => 1   
            ],
            [
             'detail_id' => 10,
             'penjualan_id' => 4,
             'barang_id' => 2,
             'harga' => 5000,
             'jumlah' => 10   
            ],
            [
             'detail_id' => 11,
             'penjualan_id' => 4,
             'barang_id' => 2,
             'harga' => 10000,
             'jumlah' => 2   
            ],
            [
             'detail_id' => 12,
             'penjualan_id' => 4,
             'barang_id' => 1,
             'harga' => 5000,
             'jumlah' => 6   
            ],
            [
             'detail_id' => 13,
             'penjualan_id' => 5,
             'barang_id' => 5,
             'harga' => 65000,
             'jumlah' => 2   
            ],
            [
             'detail_id' => 14,
             'penjualan_id' => 5,
             'barang_id' => 2,
             'harga' => 5000,
             'jumlah' => 5   
            ],
            [
             'detail_id' => 15,
             'penjualan_id' => 5,
             'barang_id' => 3,
             'harga' => 7000,
             'jumlah' => 2   
            ],
        ]
    }
}
