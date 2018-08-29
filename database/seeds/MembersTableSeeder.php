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
                'lastname' =>'wieber',
                'firstname' => 'charlotte',
                'birthday' => '1976-04-24',
                'gender'=> 'Femme',
                'address' => '8 rue saulpic',
                'zipcode' => '94300',
                'city' => 'vincennes',
                'email' => 'echayotte@gmail.com',
                'primaryphone' => '0682052485',
                'secondaryphone' => '',
                'mutual_id' => '4',
                'pension_id' => '10',
            ],
            [
                'id' => 2,
                'lastname' =>'wieber',
                'firstname' => 'marion',
                'birthday' => '1973-01-31',
                'gender'=> 'Femme',
                'address' => '4 place de l\'hôtel de ville',
                'zipcode' => '7000',
                'city' => 'privas',
                'email' => 'marion@gmail.com',
                'primaryphone' => '0143650542',
                'secondaryphone' => '',
                'mutual_id' => '1',
                'pension_id' => '1',
            ],

        ];

        Member::insert($members);
    }

}
