<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PesananTableSeeder extends Seeder
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
['id_pesanan'=>'1', 'nama_pelanggan'=>'Aldi', 'nama_barang'=>'Tea Kopi', 'qty'=>'10', 'tgl_pesanan'=>'2021-10-10',],
['id_pesanan'=>'2', 'nama_pelanggan'=>'Aldo', 'nama_barang'=>'Kopi Jahe', 'qty'=>'10', 'tgl_pesanan'=>'2021-10-11',],
['id_pesanan'=>'3', 'nama_pelanggan'=>'Ahmad', 'nama_barang'=>'Tea Sariwangy', 'qty'=>'10', 'tgl_pesanan'=>'2021-10-12',],
['id_pesanan'=>'4', 'nama_pelanggan'=>'Aceng', 'nama_barang'=>'Tea Manis', 'qty'=>'10', 'tgl_pesanan'=>'2021-10-13',],
['id_pesanan'=>'5', 'nama_pelanggan'=>'Asep', 'nama_barang'=>'Kopi Kapal Api', 'qty'=>'10', 'tgl_pesanan'=>'2021-10-14',],
];
// masukkan data ke database
DB::table('pesanan')->insert($posts);
    }
}
