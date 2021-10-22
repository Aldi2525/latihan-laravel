<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          $posts = [
['id_barang'=>'1', 'nama'=>'kopi', 'varian'=>'Tea Kopi', 'harga_beli'=>'3000', 'harga_jual'=>'1500',],
['id_barang'=>'2', 'nama'=>'kopi', 'varian'=>'Kopi Hitam', 'harga_beli'=>'6000', 'harga_jual'=>'1500',],
['id_barang'=>'3', 'nama'=>'kopi', 'varian'=>'White Kopi', 'harga_beli'=>'3000', 'harga_jual'=>'1500',],
['id_barang'=>'4', 'nama'=>'kopi', 'varian'=>'Moccacino', 'harga_beli'=>'9000', 'harga_jual'=>'1500',],
['id_barang'=>'5', 'nama'=>'kopi', 'varian'=>'Capucino', 'harga_beli'=>'3000', 'harga_jual'=>'1500',],
['id_barang'=>'6', 'nama'=>'kopi', 'varian'=>'Coklat', 'harga_beli'=>'3000', 'harga_jual'=>'1500',],
];
// masukkan data ke database
DB::table('barang')->insert($posts);
    }
}
