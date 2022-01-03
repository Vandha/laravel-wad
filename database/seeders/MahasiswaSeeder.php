<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // menambah data mahasiswa
        
$data = [
    [
        'nama1','0912312313','alamat1',
    ],
    [
        'nama2','0912312312','alamat2',
    ],
    [
       'nama3','0912312311','alamat3',
    ],
    [
        
        'nama4','0912312315','alamat4',
    ],
    [
        
        'nama5','0912312317','alamat5',
    ],
    [
        
        'nama6','0912312318','alamat6',
    ],
    [
                'nama7','0912312319','alamat7',
    ],
    ];

    foreach($data as $val){
        DB::table('mahasiswa')->insert([
            'nim'=>$val[1],
            'nama'=>$val[0],
            'alamat'=>$val[2],

        ]);
    }
  
            // DB::table('mahasiswa')->insert([

            // ])
    }
}
