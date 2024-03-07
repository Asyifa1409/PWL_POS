<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id'=> 1,
                'kategori_id' => 1,
                'barang_kode' =>'B001',
                'barang_nama' => 'mie instan',
                'harga_beli' => 5000,
                'harga_jual' => 6000 
            ],
            [
                'barang_id'=> 2,
                'kategori_id' => 2,
                'barang_kode' =>'B002',
                'barang_nama' => 'teh kotak',
                'harga_beli' => 3500,
                'harga_jual' => 5000 
            ],
            [
                'barang_id'=> 3,
                'kategori_id' => 2,
                'barang_kode' =>'B003',
                'barang_nama' => 'mogu mogu',
                'harga_beli' => 6000,
                'harga_jual' => 7000 
            ],
            [
                'barang_id'=> 4,
                'kategori_id' => 1,
                'barang_kode' =>'B004',
                'barang_nama' => 'silver queen',
                'harga_beli' => 8000,
                'harga_jual' => 10000 
            ],
            [
                'barang_id'=> 5,
                'kategori_id' => 3,
                'barang_kode' =>'B005',
                'barang_nama' => 'celana pendek hitam',
                'harga_beli' => 60000,
                'harga_jual' => 65000
            ],
            [
                'barang_id'=> 6,
                'kategori_id' => 3,
                'barang_kode' =>'B006',
                'barang_nama' => 'kemeja putih',
                'harga_beli' => 55000,
                'harga_jual' => 60000 
            ],
            [
                'barang_id'=> 7,
                'kategori_id' => 4,
                'barang_kode' =>'B007',
                'barang_nama' => 'setrika',
                'harga_beli' => 90000,
                'harga_jual' => 100000 
            ],
            [
                'barang_id'=> 8,
                'kategori_id' => 4,
                'barang_kode' =>'B008',
                'barang_nama' => 'kipas angin',
                'harga_beli' => 230000,
                'harga_jual' => 250000 
            ],
            [
                'barang_id'=> 9,
                'kategori_id' => 5,
                'barang_kode' =>'B009',
                'barang_nama' => 'buku tulis',
                'harga_beli' => 3000,
                'harga_jual' => 5000 
            ],
            [
                'barang_id'=> 10,
                'kategori_id' => 5,
                'barang_kode' =>'B010',
                'barang_nama' => 'stapler',
                'harga_beli' => 6000,
                'harga_jual' => 8000 
            ]
            ];
            DB::table('m_barang')->insert($data);
    }
}
