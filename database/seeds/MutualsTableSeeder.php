<?php

use Illuminate\Database\Seeder;
use App\Mutual;

class MutualsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mutuals = [
            ['id' => 1, 'name' => 'AG2R'], 
            ['id' => 2, 'name' => 'ALLIANZ'], 
            ['id' => 3, 'name' => 'APRIA'], 
            ['id' => 4, 'name' => 'APRIL'], 
            ['id' => 5, 'name' => 'ARRCO'], 
            ['id' => 6, 'name' => 'BPCE Mutuelle'], 
            ['id' => 7, 'name' => 'CARSAT'], 
            ['id' => 8, 'name' => 'CNAV'], 
            ['id' => 9, 'name' => 'EOVI'], 
            ['id' => 10, 'name' => 'FEMARA'], 
            ['id' => 11, 'name' => 'GROUPAMA'], 
            ['id' => 12, 'name' => 'Harmonie mutuelle'], 
            ['id' => 13, 'name' => 'HUMANIS'], 
            ['id' => 14, 'name' => 'Intégrance'], 
            ['id' => 15, 'name' => 'IPSEL- ISANTE'], 
            ['id' => 16, 'name' => 'MACIF/Almerys'], 
            ['id' => 17, 'name' => 'MACSF'], 
            ['id' => 18, 'name' => 'MALAKOFF'], 
            ['id' => 19, 'name' => 'MGEN'], 
            ['id' => 20, 'name' => 'MGEN/AG2R'], 
            ['id' => 21, 'name' => 'MNH Mutuelle Hospitalière'], 
            ['id' => 22, 'name' => 'Mutualité hospitalier'], 
            ['id' => 23, 'name' => 'Pacifia'], 
            ['id' => 24, 'name' => 'PRAGA/APRIA'], 
            ['id' => 25, 'name' => 'Prévifrance'], 
            ['id' => 26, 'name' => 'UMR'], 
            ['id' => 27, 'name' => 'VIA SANTE'], 
            ['id' => 28, 'name' => 'Via santé-AG2R'], 
            ['id' => 29, 'name' => 'MNH'],
        ];

        Mutual::insert($mutuals);
    }
}
