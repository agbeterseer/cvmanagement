<?php

use Illuminate\Database\Seeder;
use App\City;
class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $city=[
			    [
			    	'name' => 'Abia',
			    	'display_name' => 'Abia State'
			    ],
			    [
			    	'name' => 'Adamawa',
			    	'display_name' => 'Adamawa State'
			    ],
			    [
			    	'name' => 'Akwa Ibom',
			    	'display_name' => 'Akwa Ibom State'
		 	    ],
			    [
			    	'name' => 'Anambra',
			    	'display_name' => 'Anambra State'
 			    ],
			    [
			    	'name' => 'Bauchi',
			    	'display_name' => 'Bauchi State'
	 		    ],
			    [
			    	'name' => 'Bayelsa',
			    	'display_name' => 'Bayelsa State'
			    ],
			    [
			    	'name' => 'Benue',
			    	'display_name' => 'Benue State'
	 		    ],
			    [
			    	'name' => 'Borno',
			    	'display_name' => 'Borno State'
			    ],
			    [
			    	'name' => 'Cross River',
			    	'display_name' => 'Cross River State'
			    ],
			    [
			    	'name' => 'Delta',
			    	'display_name' => 'Delta State	Asaba'
			    ],
			    [
			    	'name' => 'Ebonyi',
			    	'display_name' => 'Ebonyi State'
			    ],
			    [
			    	'name' => 'Edo',
			    	'display_name' => 'Edo State'
			    ],

			    [
			    	'name' => 'Ekiti',
			    	'display_name' => 'Ekiti State'
			    ],

			    [
			    	'name' => 'Enugu',
			    	'display_name' => 'Enugu State'
			    ],
			    [
			    	'name' => 'FCT',
			    	'display_name' => 'Federal Capital Territory'
		 	    ],
			    [
			    	'name' => 'Gombe',
			    	'display_name' => 'Gombe State'
 			    ],
			    [
			    	'name' => 'Imo',
			    	'display_name' => 'Imo State'
	 		    ],
			    [
			    	'name' => 'Jigawa',
			    	'display_name' => 'Jigawa State'
			    ],
			    [
			    	'name' => 'Kaduna',
			    	'display_name' => 'Kaduna State'
	 		    ],
			    [
			    	'name' => 'Kano',
			    	'display_name' => 'Kano State'
			    ],	
			    [
			    	'name' => 'Katsina',
			    	'display_name' => 'Katsina State'
			    ],
			    [
			    	'name' => 'Kebbi',
			    	'display_name' => 'Kebbi State'
			    ],
			    [
			    	'name' => 'EKogi',
			    	'display_name' => 'EKogi State'
			    ],
			    [
			    	'name' => 'Kwara',
			    	'display_name' => 'Kwara State'
			    ],
			    [
			    	'name' => 'Lagos',
			    	'display_name' => 'Lagos State'
			    ],

			    [
			    	'name' => 'Nasarawa',
			    	'display_name' => 'Nasarawa State'
			    ],

			    [
			    	'name' => 'Niger',
			    	'display_name' => 'Niger State'
		 	    ],
			    [
			    	'name' => 'Ogun',
			    	'display_name' => 'Ogun State'
 			    ],
			    [
			    	'name' => 'Ondo',
			    	'display_name' => 'Ondo State'
	 		    ],
			    [
			    	'name' => 'Osun',
			    	'display_name' => 'Osun State'
			    ],
			    [
			    	'name' => 'Oyo',
			    	'display_name' => 'Oyo State'
	 		    ],
	 		    [
			    	'name' => 'Plateau',
			    	'display_name' => 'Plateau State'
			    ],
			    [
			    	'name' => 'Rivers',
			    	'display_name' => 'Rivers State'
			    ],
			     [
			    	'name' => 'Sokoto',
			    	'display_name' => 'Sokoto State'
			    ],
			     [
			    	'name' => 'Taraba',
			    	'display_name' => 'Taraba State'
			    ],
			     [
			    	'name' => 'Yobe',
			    	'display_name' => 'Yobe State'
			    ],
			     [
			    	'name' => 'Zamfara',
			    	'display_name' => 'Zamfara'
			    ]

		];
 
	foreach ($city as $key => $value) {
		
		City::create($value);

	}


	




    }
}
