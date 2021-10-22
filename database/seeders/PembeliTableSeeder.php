<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PembeliTableSeeder extends Seeder
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
['id_pembeli'=>'1', 'nama'=>'Aldi', 'jns_kelamin'=>'Laki-laki', 'alamat'=>'Jl. Cangkuang', 'kode_pos'=>'001212', 'kota'=>'Bandung','tgl_lahir'=>'2003-10-10',],
['id_pembeli'=>'2', 'nama'=>'Aldo', 'jns_kelamin'=>'Laki-laki', 'alamat'=>'Jl. Cibogo', 'kode_pos'=>'001313', 'kota'=>'Bandung','tgl_lahir'=>'2004-10-10',],
['id_pembeli'=>'3', 'nama'=>'Ahmad', 'jns_kelamin'=>'Laki-laki', 'alamat'=>'Jl. Situtaarate', 'kode_pos'=>'001414', 'kota'=>'Bandung','tgl_lahir'=>'2005-10-10',],
['id_pembeli'=>'4', 'nama'=>'Aceng', 'jns_kelamin'=>'Laki-laki', 'alamat'=>'Jl. Satapak', 'kode_pos'=>'001515', 'kota'=>'Bandung','tgl_lahir'=>'2006-10-10',],
['id_pembeli'=>'5', 'nama'=>'Asep', 'jns_kelamin'=>'Laki-laki', 'alamat'=>'Jl. Ciledug','kode_pos'=>'001616', 'kota'=>'Bandung','tgl_lahir'=>'2007-10-10',],
];
// masukkan data ke database
DB::table('pembeli')->insert($posts);
    }
}
