<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SuplierTableSeeder extends Seeder
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
['id_suplier'=>'1', 'nama'=>'Kidam', 'alamat'=>'Jl. Cangkuang', 'kode_pos'=>'001212', 'kota'=>'Bandung'],
['id_suplier'=>'2', 'nama'=>'Maryana', 'alamat'=>'Jl. Cibogo', 'kode_pos'=>'001313', 'kota'=>'Bandung'],
['id_suplier'=>'3', 'nama'=>'Kipli', 'alamat'=>'Jl. Situtaarate', 'kode_pos'=>'001414', 'kota'=>'Bandung'],
['id_suplier'=>'4', 'nama'=>'Aris', 'alamat'=>'Jl. Satapak', 'kode_pos'=>'001515', 'kota'=>'Bandung'],
['id_suplier'=>'5', 'nama'=>'Aminudin', 'alamat'=>'Jl. Ciledug','kode_pos'=>'001616', 'kota'=>'Bandung'],
];
// masukkan data ke database
DB::table('suplier')->insert($posts);
    }
}
