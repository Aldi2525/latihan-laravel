<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class biodataTableSeeder extends Seeder
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
['id'=>'1', 'name'=>'Aldi', 'bornDate'=>'2003-10-25', 'gender'=>'Laki-laki', 'anddress'=>'Jl.Cangkuang wetan',
'religion'=>'islam', 'age'=>'18', 'hobby'=>'Workout',],
['id'=>'2', 'name'=>'Agung', 'bornDate'=>'2002-08-20', 'gender'=>'Laki-laki', 'anddress'=>'Jl.Cangkuang wetan',
'religion'=>'islam', 'age'=>'19', 'hobby'=>'Workout',],
['id'=>'3', 'name'=>'Daman', 'bornDate'=>'2000-10-25', 'gender'=>'Laki-laki', 'anddress'=>'Jl.Cangkuang wetan',
'religion'=>'islam', 'age'=>'21', 'hobby'=>'Workout',],
['id'=>'4', 'name'=>'Asep Jepret', 'bornDate'=>'2005-01-25', 'gender'=>'Laki-laki', 'anddress'=>'Jl.Cangkuang wetan',
'religion'=>'islam', 'age'=>'16', 'hobby'=>'Workout',],
['id'=>'5', 'name'=>'Adeng', 'bornDate'=>'2003-10-25', 'gender'=>'Laki-laki', 'anddress'=>'Jl.Cangkuang wetan',
'religion'=>'islam', 'age'=>'18', 'hobby'=>'Workout',]
];
// masukkan data ke database
DB::table('biodata')->insert($posts);
    }
}

