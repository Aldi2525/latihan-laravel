<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PembelianTableSeeder extends Seeder
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
['id_pembelian'=>'1', 'nama_barang'=>'Tea Kopi', 'nama_supplier'=>'Aldi', 'qty'=>'10', 'tgl'=>'2021-10-10',],
['id_pembelian'=>'2', 'nama_barang'=>'Kopi Jahe', 'nama_supplier'=>'Aldo', 'qty'=>'10', 'tgl'=>'2021-10-11',],
['id_pembelian'=>'3', 'nama_barang'=>'Tea Sariwangy', 'nama_supplier'=>'Ahmad', 'qty'=>'10', 'tgl'=>'2021-10-12',],
['id_pembelian'=>'4', 'nama_barang'=>'Tea Manis', 'nama_supplier'=>'Aceng', 'qty'=>'10', 'tgl'=>'2021-10-13',],
['id_pembelian'=>'5', 'nama_barang'=>'Kopi Kapal Api', 'nama_supplier'=>'Asep', 'qty'=>'10', 'tgl'=>'2021-10-14',],
];
// masukkan data ke database
DB::table('pembelian')->insert($posts);
    }
}
