<?php

use Illuminate\Database\Seeder;
use App\Member;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            [
                'id' => 1,
                'lastname' =>'wiewie',
                'firstname' => 'lotte',
                'birthday' => '1986-05-24',
                'gender'=> 'Femme',
                'address' => '8 rue horloge',
                'zipcode' => '92300',
                'city' => 'artie',
                'email' => 'lotte@gmail.com',
                'primaryphone' => '0677657995',
                'secondaryphone' => '',
                'mutual_id' => '4',
                'pension_id' => '10',
            ],
            [
                'id' => 2,
                'lastname' =>'Yoyette',
                'firstname' => 'Eleonore',
                'birthday' => '1973-12-11',
                'gender'=> 'Femme',
                'address' => '4 place de l\'hôtel',
                'zipcode' => '7080',
                'city' => 'montageriy',
                'email' => 'marion@gmail.com',
                'primaryphone' => '0145667238',
                'secondaryphone' => '',
                'mutual_id' => '1',
                'pension_id' => '1',
            ],

        ];

        Member::insert($members);
    }
}
