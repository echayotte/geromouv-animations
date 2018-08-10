<?php

use Illuminate\Database\Seeder;
use App\Pension;
class PensionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pensions = [
            ['id' => 1, 'name' => 'AG2R'], 
            ['id' => 2, 'name' => 'AG2R /ARRCO'], 
            ['id' => 3, 'name' => 'AG2R MSA RSI'], 
            ['id' => 4, 'name' => 'AGIRC ARRCO'], 
            ['id' => 5, 'name' => 'ARRCO/MSA'], 
            ['id' => 6, 'name' => 'Ayant droit (épouse)'], 
            ['id' => 7, 'name' => 'Ayant droit ?'], 
            ['id' => 8, 'name' => 'CARMF'], 
            ['id' => 9, 'name' => 'CARPIMNO'], 
            ['id' => 10, 'name' => 'CARSAT'], 
            ['id' => 11, 'name' => 'CARSAT / AG2R'], 
            ['id' => 12, 'name' => 'CNAV'], 
            ['id' => 13, 'name' => 'CNRACL - Caisse retraite Hospitaliers Territoriaux'], 
            ['id' => 14, 'name' => 'CRAM'], 
            ['id' => 15, 'name' => 'MGEN'], 
            ['id' => 16, 'name' => 'MGEN/AG2R'], 
            ['id' => 17, 'name' => 'MSA'], 
            ['id' => 18, 'name' => 'PRO BTP'], 
            ['id' => 19, 'name' => 'RSI'], 
            ['id' => 20, 'name' => 'USA GROUPAMA'],
        ];
        Pension::insert($pensions);
    }
}






