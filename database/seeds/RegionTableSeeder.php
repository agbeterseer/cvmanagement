<?php

use Illuminate\Database\Seeder;
use App\Region;
class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $regions = [
	    [ 
	    'name' => 'North',
	    'display_name' => 'North'
	    ],
	    [ 
	    'name' => 'West',
	    'display_name' => 'West'
	    ],
	    [ 
	    'name' => 'South-East',
	    'display_name' => 'South-East'
	    ],
	    [ 
	    'name' => 'South-West',
	    'display_name' => 'South-West'
	    ],
	    [ 
	    'name' => 'South',
	    'display_name' => 'South'
	    ],
	    [ 
	    'name' => 'South-South',
	    'display_name' => 'South'
	    ]


    ];

    foreach ($regions as $key => $value) {
    	Region::create($value);
    }


    }
}
