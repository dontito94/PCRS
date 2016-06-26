<?php

use Illuminate\Database\Seeder;
use App\CaseRegister;

class CaseRegisterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
        CaseRegister::create 
        (
        [ 

        'casename'=>'casecode$i',
        'victimName'=>'victimName$i',
        'victimemail'=>'victimemail$i',
        'victimphoneNo'=>'victimphoneNo$i',
        'criminalName'=>'criminalName$i',
        'criminalemail'=>'criminalemail$i',
        'criminalphoneNo'=>'criminalphoneNo$i',
        'witnessName'=>'witnessName$i',
        'witnessemail'=>'witnessemail$i',
        'witnessphoneNo'=>'witnessphoneNo$i'

               


        ]


        	)
        
  }  
}
}