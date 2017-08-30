<?php

use Illuminate\Database\Seeder;
use App\Profession;
class ProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professions = [
	    [ 
	    'name' => 'Accounting',
	    'display_name' => 'Accounting',
	    'description' => 'Accounting'
	    ],
	    [ 
	    'name' => 'Administrative officer',
	    'display_name' => 'Administrative',
	    'description' => 'Accounting'
	    ],
	    [ 
	    'name' => 'Agriculture',
	    'display_name' => 'South-East',
	    'description' => 'Accounting'
	    ],
	    [ 
	    'name' => 'Architecture',
	    'display_name' => 'South-West',
	    'description' => 'Accounting'
	    ],
	    [ 
	    'name' => 'Busines Development Manager',
	    'display_name' => 'South',
	    'description' => 'Accounting'
	    ],
	    [ 
	    'name' => 'Communications Officer',
	    'display_name' => 'South',
	    'description' => 'Accounting'
	    ]

    ];

    foreach ($professions as $key => $value) {
    	Profession::create($value);
    }
    }
}
